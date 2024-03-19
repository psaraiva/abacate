<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Carbon\Carbon;

class ClientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clients')->insert([
            'name' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'cpf' => '11111111111',
            'pass' => Hash::make('password'),
            'created_at' => Carbon::now(),
        ]);

        DB::table('clients')->insert([
            'name' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'cpf' => '22222222222',
            'pass' => Hash::make('password'),
            'created_at' => Carbon::now(),
        ]);
    }
}
