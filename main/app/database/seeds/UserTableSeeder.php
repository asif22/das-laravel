<?php

class UserTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->delete();

        $user = new User;

        $user->fill(array(
					'id' => 'admin',
					'fullname'      => 'Administrator',
					'password'  => Hash::make('a'),
					'email'      => 'admin@localhost.com'		
        ));

       	$user->save();
    }
		
}






