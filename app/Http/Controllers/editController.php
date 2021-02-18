<?php

namespace App\Http\Controllers;

use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class editController extends Controller
{
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

    public function storeEditPublication(Request $request)
    {
        $this->validate($request, [
            'id' => 'required',
            'nazov' => 'required',
            'rokVydania' => 'required|integer',]);
        DB::update('update publikacie set nazov = ?, rok = ?, obsah = ?, where id = ?',
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

    public function storeEditContacts(Request $request)
    {
        $phone = ' ';
        $mobil = ' ';
        $email = ' ';
        if ($request->get('phone')) {
            $phone = $request->get('phone');
        }
        if ($request->get('mobile')) {
            $mobil = $request->get('mobile');
        }
        if ($request->get('email')) {
            $email = $request->get('email');
        }
        DB::update('update zamestnanci set telefon = ?, mobil = ?, email = ? where id = ?',
            [$phone, $mobil, $email, Session::get('id')]);
        return redirect('profile/' . Session::get('id'));
    }


}
