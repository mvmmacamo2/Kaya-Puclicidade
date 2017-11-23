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
                'username' => 'mvmmacamo',
                'email' => 'misaelvasco@gmail.com',
                'password' => Hash::make('123456'),
            ],
            '1' => [
                'name' => 'Leonardo Huo',
                'username' => 'leo',
                'email' => 'leo@gmail.com',
                'password' => Hash::make('123456'),

            ],

            '2' => [
                'name' => 'Denilson Mavie',
                'username' => 'denilson',
                'email' => 'denilson@gmail.com',
                'password' => Hash::make('123456'),

            ]

        ]);
    }
}
