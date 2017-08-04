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
            'first_name' => 'Mauricio',
            'last_name' => 'Molina',
            'username' => 'megatron',
            'email' => 'megatronldu@gmail.com',
            'role' => 'admin',
        ]);
    }
}
