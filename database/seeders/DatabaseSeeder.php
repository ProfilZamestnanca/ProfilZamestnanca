<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        DB::insert('insert into tituly (nazov, skratka) values (?, ?)', ['bakalár', 'Bc.']);
        DB::insert('insert into tituly (nazov, skratka) values (?, ?)', ['magister', 'Mgr.']);
        DB::insert('insert into tituly (nazov, skratka) values (?, ?)', ['inžinier', 'Ing.']);
        DB::insert('insert into tituly (nazov, skratka) values (?, ?)', ['doktor prírodných vied', 'RNDr.']);
        DB::insert('insert into tituly (nazov, skratka) values (?, ?)', ['doktor filozofie', 'PhDr.']);
        DB::insert('insert into tituly (nazov, skratka) values (?, ?)', ['docent', 'doc.']);
        DB::insert('insert into tituly (nazov, skratka) values (?, ?)', ['profesor', 'prof.']);
        DB::insert('insert into tituly (nazov, skratka) values (?, ?)', ['doktor', 'Dr.']);
    }
}
