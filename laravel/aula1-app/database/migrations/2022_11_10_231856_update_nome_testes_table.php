<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   
    public function up(){
    
    Schema::table('testes', function (Blueprint $table) {
        $table->renameColumn('nome','name');       
     });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('testes', function (Blueprint $table) {
        $table->renameColumn('name','nome');       
    });

    }
   
    
};