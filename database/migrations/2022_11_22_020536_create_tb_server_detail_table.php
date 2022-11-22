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
        Schema::create('tb_server_detail', function (Blueprint $table) {
            $table->id();
            $table->integer('apps_id');
            $table->integer('master_server_app_id');
            $table->integer('master_server_id');
            $table->string('app_description');
            $table->integer('master_os_id');
            $table->integer('master_database_id');
            $table->integer('master_framework_id');
            $table->integer('master_lang_program_id');
            $table->integer('master_web_service');
            $table->string('cpu');
            $table->float('ram', 8, 2);
            $table->float('swap', 8, 2);
            $table->float('hdd', 8, 2);
            $table->string('local_ip');
            $table->string('public_ip');
            $table->string('dns');
            $table->string('git');
            $table->integer('developed_by');
            $table->integer('managed_by');
            $table->string('document');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_server_detail');
    }
};
