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
        Schema::create('siswas', function (Blueprint $table) {
            $table->id();
            $table->integer('teacher_id')->nullable()->index();
            $table->string('teacher_status');
            $table->string('nama');
            $table->string('nisn',20)->unique();
            $table->string('foto')->nullable();
            $table->string('jurusan',50);
            $table->string('kelas',3);
            $table->string('hp');
            $table->string('jk');
            $table->string('angkatan');
            $table->foreignId('user_id');
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
        Schema::dropIfExists('siswas');
    }
};
