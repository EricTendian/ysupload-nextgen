<?php

use YSUpload\Models\User;

class UserTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->delete();

        User::create([
            'username' => 'testuser',
            'email' => 'foo@bar.com',
            'password' => 'blahblahblah',
            'password_confirmation' => 'blahblahblah',
            'confirmed' => true,
            'ysfhq_id' => 691,
            //'legacy_id' => 1,
            //'avatar' => md5(rand()),
            //'last_logged_in' => time(),
        ]);
    }

}
