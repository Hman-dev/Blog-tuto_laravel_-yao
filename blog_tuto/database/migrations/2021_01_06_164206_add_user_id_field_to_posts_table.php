<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUserIdFieldToPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {
            //ici par php artisan make:migration add_user 
            /*on a créer une nouvelle table de user_id pour que la nvlle configuration du modèle
             Post.php fonctionne.User_id a été ajouté cme nouveau paramêtre à notre $fillable*/

             $table->bigInteger('user_id')->unsigned()->nullable();
             $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('posts', function (Blueprint $table) {
            //
            $table->dropColumn('user_id');
        });
    }
}
