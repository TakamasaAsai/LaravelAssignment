<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->bigIncrements('id');
            //id,title(vc,not null,200byte以上エラー),message(not null),created_at,updated_at
            $table->string('title', 90);
            $table->longText('message');
            $table->timestamps();//両方カバ-できるcreated_at,updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('message_tag');
        Schema::dropIfExists('messages');
    }
}
