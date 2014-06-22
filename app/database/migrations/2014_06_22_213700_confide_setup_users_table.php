<?php

use Illuminate\Database\Migrations\Migration;

class ConfideSetupUsersTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        /*
        userid
        username
        email
        password
        //permission level
        created_at
        updated_at
        last_logged_in
        avatar
        //karma/rating
        ysfhq_id
        //remember me token
        //default upload setting (public or private)
        */

        // Creates the users table
        Schema::create('users', function($table)
        {
            $table->bigIncrements('id');
            $table->string('username')->unique();
            $table->string('email')->unique();
            $table->string('password')->nullable();
            $table->string('confirmation_code');
            $table->boolean('confirmed')->default(false);
            $table->integer('ysfhq_id')->nullable();
            $table->integer('legacy_id')->nullable();
            $table->string('avatar')->nullable();
            $table->timestamp('last_logged_in')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });

        // Creates password reminders table
        Schema::create('password_reminders', function($t)
        {
            $t->string('email');
            $t->string('token');
            $t->timestamp('created_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return  void
     */
    public function down()
    {
        Schema::drop('password_reminders');
        Schema::drop('users');
    }

}
