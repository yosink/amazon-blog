<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateConversationUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mc_conversation_user', function (Blueprint $table) {
            $table->integer('user_id')->unsigned();
            $table->integer('conversation_id')->unsigned();
            $table->primary(['user_id', 'conversation_id']);
            $table->timestamps();

            $table->foreign('conversation_id')
                ->references('id')->on('mc_conversations')
                ->onDelete('cascade');

            $table->foreign('user_id')
                ->references('id')->on('users')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('mc_conversation_user');
    }
}
