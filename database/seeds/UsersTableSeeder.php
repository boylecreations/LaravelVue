<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('users')->insert([
            'name'      => 'Aidan Boyle',
            'username'  => 'boylecreations',
            'email'     => 'aidan@boylecreations.com',
            'password'  => bcrypt('root'),
        ]);
        /*
        DB::table('users')->delete();
        User::create(array(
          'name'      => 'Aidan Boyle',
          'username'  => 'boylecreations',
          'email'     => 'aidan@boylecreations.com',
          'password'  => Hash::make('root'),
      ));*/
        // $this->call(UsersTableSeeder::class);
    }
}
