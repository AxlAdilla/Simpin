<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jabatan = ['admin','manajer','anggota'];
        foreach ($jabatan as $key => $value) {
            DB::table('users')->insert([
                'username' => $value.'@'.$value.'.com',
                'password' => Hash::make('password'),
                'jabatan'=>$value
            ]);
        }
        //factory(App\User::class,10)->create();
    }
}
