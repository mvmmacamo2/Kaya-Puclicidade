<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        DB::table('users')->insert([
            '0' => [
                'name' => 'Miguel Vasco Macamo',
                'email' => 'misaelvasco@gmail.com',
                'estado'=>'activo',
                'password' => Hash::make('123456')
            ],
            '1' => [
                'name' => 'Leonardo Huo',
                'email' => 'leo@gmail.com',
                'estado'=>'activo',
                'password' => Hash::make('123456')

            ],

            '2' => [
                'name' => 'Denilson Mavie',
                'email' => 'denilson@gmail.com',
                'estado'=>'activo',
                'password' => Hash::make('123456')

            ]

        ]);
    }
}
