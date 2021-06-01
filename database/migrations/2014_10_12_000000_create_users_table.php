<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('phone')->nullable();
            $table->enum('type',['ADMIN','USER']);
            $table->rememberToken();
            $table->foreignId('current_team_id')->nullable();
            $table->text('profile_photo_path')->nullable();
            $table->timestamps();
        });

        DB::table('users')->insert(
            array(
                'name'      => 'Administrator',
                'email'     => 'admin@gmail.com',
                'password'  => bcrypt('passpass'),
                'phone'     => '9061437707',
                'type'      => 'ADMIN',
                'created_at'=> date('Y-m-d H:i:s'),
                'updated_at'=> date('Y-m-d H:i:s')
            )
        );
        
        DB::table('users')->insert(
            array(
                'name'      => 'User',
                'email'     => 'user@gmail.com',
                'password'  => bcrypt('123456'),
                'phone'     => '9495000000',
                'type'      => 'USER',
                'created_at'=> date('Y-m-d H:i:s'),
                'updated_at'=> date('Y-m-d H:i:s')
            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
