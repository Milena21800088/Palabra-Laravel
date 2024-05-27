<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('palabras', function (Blueprint $table) {
            $table->id();
            $table->string('palabra', 5)->Unique;
        });
    }

    public function down(){
        Schema::dropIfExists('palabras');
    }
};
