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
       \App\User::insert([
            [
              'id'  			=> 1,
              'name'  			=> 'Admin',
              'username'		=> 'admin123',
              'email' 			=> 'superadmin@gmail.com',
              'password'		=> bcrypt('admin123'),
              
              'npm'				=> null,
              'tempat_lahir'	=> null,
              'tgl_lahir'		=> null,
              'jk'				=> null,
              'prodi'			=> null,

              'gambar'			=> NULL,
              'level'			=> 'admin',
              'remember_token'	=> NULL,
              'created_at'      => \Carbon\Carbon::now(),
              'updated_at'      => \Carbon\Carbon::now()
            ],
            [
              'id'  			=> 2,
              'name'  			=> 'User',
              'username'		=> 'user123',
              'email' 			=> 'user@gmail.com',
              'password'		=> bcrypt('user123'),
              
              'npm'				=> 10000353,
              'tempat_lahir'	=> 'Surabaya',
              'tgl_lahir'		=> '1998-01-01',
              'jk'				=> 'L',
              'prodi'			=> 'TI',

              'gambar'			=> NULL,
              'level'			=> 'user',
              'remember_token'	=> NULL,
              'created_at'      => \Carbon\Carbon::now(),
              'updated_at'      => \Carbon\Carbon::now()
            ]
        ]);
    }
}
