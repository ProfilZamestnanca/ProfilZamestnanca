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
            'namePredmet' => 'required',
            'yearPredmet' => 'required',
        ]);
        $id = DB::table('predmety')->insertGetId([
            'nazov' => $request->get('namePredmet'),
            'rok' => $request->get('yearPredmet'),
        ]);
        $users = DB::insert('insert into zamestnanci_predmety (zamestnanec_id,predmet_id) values (?,?)', [Session::get('id'), $id]);
        return redirect('profile/' . Session::get('id'));
    }

    public function storePublication(Request $request)
    {
        $this->validate($request, [
            'namePublication' => 'required',
            'contentPublication' => 'required',
            'yearPublication' => 'required',
        ]);
        $id = DB::table('publikacie')->insertGetId([
            'nazov' => $request->get('namePublication'),
            'obsah' => $request->get('contentPublication'),
            'rok' => $request->get('yearPublication'),
        ]);
        $users = DB::insert('insert into zamestnanci_publikacie (zamestnanec_id,publikacia_id) values (?,?)', [Session::get('id'), $id]);
        return redirect('profile/' . Session::get('id'));
    }

    public function storeDigSkill(Request $request)
    {
        $this->validate($request, [
            'nameDigSkill' => 'required',
        ]);
        $id = DB::table('dig_zrucnosti')->insertGetId([
            'nazov' => $request->get('nameDigSkill'),
        ]);
        $users = DB::insert('insert into zamestnanci_dig_zrucnosti (zamestnanec_id,	dig_zrucnost_id) values (?,?)', [Session::get('id'), $id]);
        return redirect('profile/' . Session::get('id'));
    }

    public function storeSocSkill(Request $request)
    {
        $this->validate($request, [
            'nameSocSkill' => 'required',
        ]);
        $id = DB::table('soc_zrucnosti')->insertGetId([
            'nazov' => $request->get('nameSocSkill'),
        ]);
        $users = DB::insert('insert into zamestnanci_soc_zrucnosti (zamestnanec_id,soc_zrucnost_id) values (?,?)', [Session::get('id'), $id]);
        return redirect('profile/' . Session::get('id'));
    }

    public function storeLaboratori(Request $request)
    {
        $this->validate($request, [
            'nameLaboratori' => 'required',
        ]);
        $id = DB::table('laboratoria')->insertGetId([
            'nazov' => $request->get('nameLaboratori'),
        ]);
        $users = DB::insert('insert into zamestnanci_laboratoria (zamestnanec_id,laboratorium_id) values (?,?)', [Session::get('id'), $id]);
        return redirect('profile/' . Session::get('id'));
    }

    public function storeProject(Request $request)
    {
        $this->validate($request, [
            'nameProject' => 'required',
            'yearProject' => 'required',
        ]);
        $id = DB::table('projekty')->insertGetId([
            'nazov' => $request->get('nameProject'),
            'rok' => $request->get('yearProject')
        ]);
        $users = DB::insert('insert into zamestnanci_projekty (zamestnanec_id, projekt_id) values (?,?)', [Session::get('id'), $id]);

        return redirect('profile/' . Session::get('id'));
    }

    public function storeTitle(Request $request)
    {
        $this->validate($request, [
            'nameTitle' => 'required',
            'schoolName' => 'required',
            'shortName' => 'required',
            'year' => 'required',
        ]);
        $id = DB::table('tituly')->insertGetId([
            'nazov' => $request->get('nameTitle'),
            'skratka' => $request->get('shortName'),
        ]);
        $users = DB::insert('insert into zamestnanci_tituly (zamestnanec_id, titul_id,rok,skola) values (?,?,?,?)',
            [Session::get('id'), $id, $request->get('year'), $request->get('schoolName')]);

        return redirect('profile/' . Session::get('id'));
    }

    public function storeEditStatic()
    {
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
