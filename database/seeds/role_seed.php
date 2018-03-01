<?php

use App\Model\role;
use App\User;
use Illuminate\Database\Seeder;

class role_seed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        role::create(['role' => 'user']);

        role::create(['role' => 'admin']);

        User::create([
            'name' => 'akif',
            'email' => 'mujde.akif@gmail.com',
            'password' => Hash::make('123456'),
            'role_id' => 2
        ]);
    }
}
