<?php

namespace App\Http\Controllers;
use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class deleteController extends Controller
{
    public function deleteTitle(Request $request)
    {
        DB::table('zamestnanci_tituly')
            ->where('titul_id', '=', $request->get('id'))
            ->where('zamestnanec_id', '=', Session::get('id'))->delete();
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

}
