<?php

namespace App\Http\Controllers;

use App\Models\zamestnanec;
use Illuminate\Http\Request;
use DB;
use Ramsey\Uuid\Type\Integer;

class ZamestnanecController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $zamestnanec = DB::table('zamestnanci')->get();
        return view('index', compact('zamestnanec'));
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Zamestnanec  $zamestnanec
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
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $zam = DB::table('zamestnanci')->where('id', $id)->get();
       // $zam = Zamestnanec::findOrFail($zamestnanec);
        return view('edit', compact('zam'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\zamestnanec  $zamestnanec
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, zamestnanec $zamestnanec)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\zamestnanec  $zamestnanec
     * @return \Illuminate\Http\Response
     */
    public function destroy(zamestnanec $zamestnanec)
    {
        //
    }
}
