<?php

use Illuminate\Database\Seeder;
use App\User;

class AdminTableSeederM extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class)->create([
            'name' => 'Mauricio Molina',
            'email' => 'megatronldu@gmail.com',
            'role' => 'admin',
        ]);
    }
}
