<?php

namespace App\Http\Controllers;

use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class addController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function storePredmet(Request $request)
    {
        $this->validate($request, [
            'nazov' => 'required',
            'rok' => 'required|integer',
        ]);
        $id = DB::table('predmety')->insertGetId([
            'nazov' => $request->get('nazov'),
            'rok' => $request->get('rok'),
        ]);
        $users = DB::insert('insert into zamestnanci_predmety (zamestnanec_id,predmet_id) values (?,?)', [Session::get('id'), $id]);
        return redirect('profile/' . Session::get('id'));
    }

    public function storePublication(Request $request)
    {
        $this->validate($request, [
            'nazov' => 'required',
            'rok' => 'required|integer',
        ]);
        $id = DB::table('publikacie')->insertGetId([
            'nazov' => $request->get('nazov'),
            'obsah' => $request->get('contentPublication'),
            'rok' => $request->get('rok'),
        ]);
        $users = DB::insert('insert into zamestnanci_publikacie (zamestnanec_id,publikacia_id) values (?,?)', [Session::get('id'), $id]);
        return redirect('profile/' . Session::get('id'));
    }

    public function storeDigSkill(Request $request)
    {
        $this->validate($request, [
            'nazov' => 'required',
        ]);
        $id = DB::table('dig_zrucnosti')->insertGetId([
            'nazov' => $request->get('nazov'),
        ]);
        $users = DB::insert('insert into zamestnanci_dig_zrucnosti (zamestnanec_id,	dig_zrucnost_id) values (?,?)', [Session::get('id'), $id]);
        return redirect('profile/' . Session::get('id'));
    }

    public function storeSocSkill(Request $request)
    {
        $this->validate($request, [
            'nazov' => 'required',
        ]);
        $id = DB::table('soc_zrucnosti')->insertGetId([
            'nazov' => $request->get('nazov'),
        ]);
        $users = DB::insert('insert into zamestnanci_soc_zrucnosti (zamestnanec_id,soc_zrucnost_id) values (?,?)', [Session::get('id'), $id]);
        return redirect('profile/' . Session::get('id'));
    }

    public function storeLaboratori(Request $request)
    {
        $this->validate($request, [
            'nazov' => 'required',
        ]);
        $id = DB::table('laboratoria')->insertGetId([
            'nazov' => $request->get('nazov'),
        ]);
        $users = DB::insert('insert into zamestnanci_laboratoria (zamestnanec_id,laboratorium_id) values (?,?)', [Session::get('id'), $id]);
        return redirect('profile/' . Session::get('id'));
    }

    public function storeProject(Request $request)
    {
        $this->validate($request, [
            'nazov' => 'required',
            'rok' => 'required|integer',
        ]);
        $id = DB::table('projekty')->insertGetId([
            'nazov' => $request->get('nazov'),
            'rok' => $request->get('rok')
        ]);
        $users = DB::insert('insert into zamestnanci_projekty (zamestnanec_id, projekt_id) values (?,?)', [Session::get('id'), $id]);

        return redirect('profile/' . Session::get('id'));
    }

    public function storeEditTitle(Request $request)
    {
        $this->validate($request, [
            'nazovSkoly' => 'required',
            'rok' => 'required|integer',
        ]);
        $users = DB::update('update  zamestnanci_tituly set  rok = ?,skola = ? where zamestnanec_id = ? and titul_id = ? ',
            [$request->get('rok'), $request->get('nazovSkoly'), Session::get('id'), $request->get('idTitle')]);

        return redirect('profile/' . Session::get('id'));
    }

    public function storeEditStatic(Request $request)
    {
        $this->validate($request, [
            'meno' => 'required',
        ]);
        $users = DB::update('update zamestnanci set meno = ?, pracovisko = ?, oddelenie = ?, miestnost = ?, funkcia = ?, info = ? where id = ?',
            [$request->get('meno'), $request->get('pracovisko'),
                $request->get('oddelenie'), $request->get('miestnost'), $request->get('funkcia'), $request->get('aboutMe'), Session::get('id')]);

        return redirect('profile/' . Session::get('id'));
    }

    public function storeEditContacts(Request $request)
    {
        $phone = ' ';
        $mobil = ' ';
        $email = ' ';
        if($request->get('phone')){
            $phone = $request->get('phone');
        }
        if($request->get('mobile')){
            $mobil = $request->get('mobile');
        }
        if($request->get('email')){
            $email = $request->get('email');
        }

        DB::update('update zamestnanci set telefon = ?, mobil = ?, email = ? where id = ?',
            [$phone, $mobil, $email, Session::get('id')]);
        return redirect('profile/' . Session::get('id'));
    }

    public function storeEditPublication(Request $request)
    {
        $this->validate($request, [
            'id' => 'required',
            'nazov' => 'required',
            'rokVydania' => 'required|integer',]);
        DB::update('update publikacie set nazov = ?, rok = ?, obsah = ? where id = ?',
            [$request->get('nazov'), $request->get('rokVydania'), $request->get('contentPublication'), $request->get('id')]);
        return redirect('profile/' . Session::get('id'));
    }

    public function storeEditDigSkill(Request $request)
    {
        $this->validate($request, [
            'id' => 'required',
            'nazov' => 'required',]);
        DB::update('update dig_zrucnosti set nazov = ? where id = ?',
            [$request->get('nazov'), $request->get('id')]);
        return redirect('profile/' . Session::get('id'));
    }

    public function storeEditSocSkill(Request $request)
    {
        $this->validate($request, [
            'id' => 'required',
            'nazov' => 'required',]);
        DB::update('update soc_zrucnosti set nazov = ? where id = ?',
            [$request->get('nazov'), $request->get('id')]);
        return redirect('profile/' . Session::get('id'));
    }

    public function storeEditLab(Request $request)
    {
        $this->validate($request, [
            'id' => 'required',
            'nazov' => 'required',]);
        DB::update('update laboratoria set nazov = ? where id = ?',
            [$request->get('nazov'), $request->get('id')]);
        return redirect('profile/' . Session::get('id'));
    }

    public function storeEditProject(Request $request)
    {
        $this->validate($request, [
            'id' => 'required',
            'nazov' => 'required',
            'rok' => 'required|integer',]);
        DB::update('update projekty set nazov = ?, rok = ? where id = ?',
            [$request->get('nazov'), $request->get('rok'), $request->get('id')]);
        return redirect('profile/' . Session::get('id'));
    }

    public function storeEditSubject(Request $request)
    {
        $this->validate($request, [
            'id' => 'required',
            'nazov' => 'required',
            'rok' => 'required|integer',]);
        DB::update('update predmety set nazov = ?, rok = ? where id = ?',
            [$request->get('nazov'), $request->get('rok'), $request->get('id')]);
        return redirect('profile/' . Session::get('id'));
    }

    public function deleteTitle(Request $request)
    {
        DB::table('zamestnanci_tituly')
            ->where('titul_id', '=', $request->get('id'))
            ->where('titul_id', '=', Session::get('id'))->delete();
        return redirect('profile/' . Session::get('id'));
    }

    public function deletePublication(Request $request)
    {
        DB::table('zamestnanci_publikacie')->where('publikacia_id', '=', $request->get('id'))->delete();
        DB::table('publikacie')->where('id', '=', $request->get('id'))->delete();
        return redirect('profile/' . Session::get('id'));
    }

    public function deleteDigSkill(Request $request)
    {
        DB::table('zamestnanci_dig_zrucnosti')->where('dig_zrucnost_id', '=', $request->get('id'))->delete();
        DB::table('dig_zrucnosti')->where('id', '=', $request->get('id'))->delete();
        return redirect('profile/' . Session::get('id'));
    }

    public function deleteSocSkill(Request $request)
    {
        DB::table('zamestnanci_soc_zrucnosti')->where('soc_zrucnost_id', '=', $request->get('id'))->delete();
        DB::table('soc_zrucnosti')->where('id', '=', $request->get('id'))->delete();
        return redirect('profile/' . Session::get('id'));
    }

    public function deleteLab(Request $request)
    {
        DB::table('zamestnanci_laboratoria')->where('laboratorium_id', '=', $request->get('id'))->delete();
        DB::table('laboratoria')->where('id', '=', $request->get('id'))->delete();
        return redirect('profile/' . Session::get('id'));
    }

    public function deleteProject(Request $request)
    {
        DB::table('zamestnanci_projekty')->where('projekt_id', '=', $request->get('id'))->delete();
        DB::table('projekty')->where('id', '=', $request->get('id'))->delete();
        return redirect('profile/' . Session::get('id'));
    }

    public function deleteSubject(Request $request)
    {
        DB::table('zamestnanci_predmety')->where('predmet_id', '=', $request->get('id'))->delete();
        DB::table('predmety')->where('id', '=', $request->get('id'))->delete();
        return redirect('profile/' . Session::get('id'));
    }


    public function storeTitle(Request $request)
    {
        $this->validate($request, [
            'nazovTitulu' => 'required',
            'nazovSkoly' => 'required',

            'rok' => 'required|integer',
        ]);
        $users = DB::insert('insert into zamestnanci_tituly (zamestnanec_id, titul_id,rok,skola) values (?,?,?,?)',
            [Session::get('id'), $request->get('nazovTitulu'), $request->get('rok'), $request->get('nazovSkoly')]);

        return redirect('profile/' . Session::get('id'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return null;
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
