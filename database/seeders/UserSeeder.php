<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Rayon;
use App\Models\Rombel;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'email'	=> 'asti@gmail.com',
            'password'	=> bcrypt('asti')
         ]);

        Rayon::create([
            'rayon' => 'cisarua 1'
        ]);
        Rayon::create([
            'rayon' => 'cisarua 2'
        ]);

        Rombel::create([
            'rombel' => 'PPLG XI-7'
        ]);
        Rombel::create([
            'rombel' => 'PPLG XI-4'
        ]);
    }
}
