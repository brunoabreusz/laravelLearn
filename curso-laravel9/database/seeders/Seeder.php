<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Bruno',
            'email' => 'bruno.souza@gmail.com',
            'password' => bcrypt('necas')
        ]);
    }
}
