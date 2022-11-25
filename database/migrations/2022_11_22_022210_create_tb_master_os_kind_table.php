<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_master_os_kind', function (Blueprint $table) {
            $table->id();
            $table->integer('master_os_id');
            $table->string('osname');
            $table->string('avatar');
            $table->timestamps();
            $table->softDeletes();

            //$table->foreign('master_os_id')->references('id')->on('tb_master_os')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_master_os_kind');
    }
};
