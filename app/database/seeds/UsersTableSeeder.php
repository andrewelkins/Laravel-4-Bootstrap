<?php

class UsersTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->delete();


        $users = array(
            array(
                'email'      => 'test@test.com',
                'password'   => Hash::make('test'),
	        'first_name' => 'John',
	        'last_name'  => 'Doe',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            )
        );

        DB::table('users')->insert( $users );
    }

}
