<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDosennsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dosenns', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('id_dosen', 15) ->unique(); 
             $table->string('nama', 150); 
             $table->char('no_hp', 12);  
             $table->date('tgl_lahir'); 
             $table->string('alamat'); 
             $table->char('jenis_kelamin', 1); 
             $table->char('agama', 15);
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
        Schema::dropIfExists('dosenns');
    }
}
