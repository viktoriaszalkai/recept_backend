<?php

use App\Models\Szotar;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('szotars', function (Blueprint $table) {
            $table->id('id');
            $table->string('nev');
            $table->timestamps();
        });

        
        Szotar::create([
            'nev'=> 'főétel'
        ]);
        Szotar::create([
            'nev'=> 'leves'
        ]);
        Szotar::create([
            'nev'=> 'édesség'
        ]);
        Szotar::create([
            'nev'=> 'saláta'
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('szotars');
    }
};
