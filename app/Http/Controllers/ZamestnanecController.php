<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Classes\Zamestnanec;
use Illuminate\Support\Facades\DB;
use Ramsey\Uuid\Type\Integer;

class ZamestnanecController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getProfile($id)
    {
        $users = DB::table('zamestnanci')->where('id', $id)->first();

        $zam = new Zamestnanec($users->meno, $users->info, $users->pracovisko, $users->oddelenie, $users->miestnost, $users->funkcia);
        $zam->id = $id;
        $zam->createContacts($users->telefon, $users->mobil, $users->email);
        $this->getSubjectOfUser($users->id, $zam);
        $this->getTitles($users->id, $zam);
        $this->getSocsialSkills($users->id, $zam);
        $this->getDigitalSkills($users->id, $zam);
        $this->getLab($users->id, $zam);
        $this->getProjects($users->id, $zam);
        $this->getPublications($users->id, $zam);
        return view('zamestnanec', compact('zam'));
    }

    public function editProfile()
    {
        return view('edit');
    }

    public function getAllUsers()
    {
        $users = DB::table('zamestnanci')->get();
        return view('homePage', ['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getPublications($userId, $userClass)
    {
        $publication = DB::table('zamestnanci_publikacie')
            ->join('zamestnanci', 'zamestnanci_publikacie.zamestnanec_id', '=', 'zamestnanci.id')
            ->join('publikacie', 'zamestnanci_publikacie.publikacia_id', '=', 'publikacie.id')
            ->where('zamestnanci_publikacie.zamestnanec_id', '=', $userId)
            ->select('publikacie.obsah', 'publikacie.rok', 'publikacie.nazov')->get()->sort();
        for ($i = 0; count($publication->pluck('nazov')) > $i; $i++) {
            $userClass->addPublication($publication->pluck('nazov')[$i], $publication->pluck('obsah')[$i],
                $publication->pluck('rok')[$i]);
        }
        $userClass->sortPublicationsByYear();
    }

    public function getTitles($userId, $userClass)
    {
        $tituly = DB::table('zamestnanci_tituly')
            ->join('zamestnanci', 'zamestnanci_tituly.zamestnanec_id', '=', 'zamestnanci.id')
            ->join('tituly', 'zamestnanci_tituly.titul_id', '=', 'tituly.id')
            ->where('zamestnanci_tituly.zamestnanec_id', '=', $userId)
            ->select('tituly.nazov', 'tituly.skratka', 'zamestnanci_tituly.rok', 'zamestnanci_tituly.skola')->get()->sort()->reverse();
        for ($i = 0; count($tituly->pluck('nazov')) > $i; $i++) {

            $userClass->addTitle($tituly->pluck('nazov')[$i], $tituly->pluck('skratka')[$i], $tituly->pluck('rok')[$i], $tituly->pluck('skola')[$i]);
        }
        $userClass->sortTitleByYear();
    }

    public function getSubjectOfUser($userId, $userClass)
    {
        $predmety = DB::table('zamestnanci_predmety')
            ->join('zamestnanci', 'zamestnanci_predmety.zamestnanec_id', '=', 'zamestnanci.id')
            ->join('predmety', 'zamestnanci_predmety.predmet_id', '=', 'predmety.id')
            ->where('zamestnanci.id', '=', $userId)
            ->select('predmety.nazov', 'predmety.rok')->get()->sort()->reverse();
        for ($i = 0; count($predmety->pluck('nazov')) > $i; $i++) {
            $userClass->addSubject($predmety->pluck('nazov')[$i], $predmety->pluck('rok')[$i]);
        }
        $userClass->sortSubjectByYear();
    }

    public function getSocsialSkills($userId, $userClass)
    {
        $socSkills = DB::table('zamestnanci_soc_zrucnosti')
            ->join('zamestnanci', 'zamestnanci_soc_zrucnosti.zamestnanec_id', '=', 'zamestnanci.id')
            ->join('soc_zrucnosti', 'zamestnanci_soc_zrucnosti.soc_zrucnost_id', '=', 'soc_zrucnosti.id')
            ->where('zamestnanci.id', '=', $userId)
            ->select('soc_zrucnosti.nazov')->get();
        for ($i = 0; count($socSkills->pluck('nazov')) > $i; $i++) {
            $userClass->addSocialSkill($socSkills->pluck('nazov')[$i]);
        }
    }

    public function getDigitalSkills($userId, $userClass)
    {
        $digSkills = DB::table('zamestnanci_dig_zrucnosti')
            ->join('zamestnanci', 'zamestnanci_dig_zrucnosti.zamestnanec_id', '=', 'zamestnanci.id')
            ->join('dig_zrucnosti', 'zamestnanci_dig_zrucnosti.dig_zrucnost_id', '=', 'dig_zrucnosti.id')
            ->where('zamestnanci.id', '=', $userId)
            ->select('dig_zrucnosti.nazov', 'dig_zrucnosti.uroven')->get();
        for ($i = 0; count($digSkills->pluck('nazov')) > $i; $i++) {
            $userClass->addDigitalSkill($digSkills->pluck('nazov')[$i], $digSkills->pluck('uroven')[$i]);
        }
    }

    public function getLab($userId, $userClass)
    {
        $lab = DB::table('zamestnanci_laboratoria')
            ->join('zamestnanci', 'zamestnanci_laboratoria.zamestnanec_id', '=', 'zamestnanci.id')
            ->join('laboratoria', 'zamestnanci_laboratoria.laboratorium_id', '=', 'laboratoria.id')
            ->where('zamestnanci.id', '=', $userId)
            ->select('laboratoria.nazov')->get();
        for ($i = 0; count($lab->pluck('nazov')) > $i; $i++) {
            $userClass->addLaboratory($lab->pluck('nazov')[$i]);
        }
    }

    public function getProjects($userId, $userClass)
    {
        $projects = DB::table('zamestnanci_projekty')
            ->join('zamestnanci', 'zamestnanci_projekty.zamestnanec_id', '=', 'zamestnanci.id')
            ->join('projekty', 'zamestnanci_projekty.projekt_id', '=', 'projekty.id')
            ->where('zamestnanci.id', '=', $userId)
            ->select('projekty.nazov', 'projekty.rok')->get();
        for ($i = 0; count($projects->pluck('nazov')) > $i; $i++) {
            $userClass->addProject($projects->pluck('nazov')[$i], $projects->pluck('rok')[$i]);
        }
        $userClass->sortProjectsByYear();
    }

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Zamestnanec $zamestnanec
     * @return \Illuminate\Http\Response
     */
    public function show(Zamestnanec $zamestnanec)
    {
        //
        $select = DB::table('zamestnanci')->get();
        return view('zamestnanec', ['petani' => $select]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\zamestnanec $zamestnanec
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, zamestnanec $zamestnanec)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\zamestnanec $zamestnanec
     * @return \Illuminate\Http\Response
     */
    public function destroy(zamestnanec $zamestnanec)
    {
        //
    }
}
