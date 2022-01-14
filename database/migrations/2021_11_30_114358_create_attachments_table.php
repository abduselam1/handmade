<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttachmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attachments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('message_id');
            $table->string('attachement_large_thumb_url');
            $table->string('attachement_small_thumb_url');
            $table->string('attachement_url');
            $table->string('type');
            $table->double('size') ;//in KB
            $table->double('width')->nullable();
            $table->double('height')->nullable();
            $table->string('extenstion');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attachments');
    }
}
