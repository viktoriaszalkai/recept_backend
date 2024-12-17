<?php

use App\Models\Recept;
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
        Schema::create('recepts', function (Blueprint $table) {
            $table->id('id');
            $table->string('nev');
            $table->foreignId('kat_id')->references('id')->on('szotars');
            $table->string('kep_eleresi_ut');
            $table->string('leiras');
            $table->timestamps();
        });


        Recept::create([
            'nev'=> 'Fokhagyma krémleves',
            'kat_id'=> 2,
            'kep_eleresi_ut'=>'https://cdn.mindmegette.hu/2024/04/D0F2J-efb2sCTKtpq-is8NaOCYv1X7QlhJwcnUrEt_s/fill/0/0/no/1/aHR0cHM6Ly9jbXNjZG4uYXBwLmNvbnRlbnQucHJpdmF0ZS9jb250ZW50L2ZhZmM1ZmMwYzgzYzQxMTg4YjlhZWJmNDJkNDY5NDYz.jpg',
            'leiras'=>'finom'
        ]);
        Recept::create([
            'nev'=> 'Gyümölcs torta',
            'kat_id'=> 3,
            'kep_eleresi_ut'=>'https://rupanerkonyha.hu/wp-content/uploads/2020/05/DSC_0271k.jpg',
            'leiras'=>'finom'
        ]);
        Recept::create([
            'nev'=> 'Görög saláta',
            'kat_id'=> 4,
            'kep_eleresi_ut'=>'https://image-api.nosalty.hu/nosalty/images/recipes/WA/je/eredeti-gorog-salata.jpg?w=1200&h=920&s=22c1a1e59f80cde45e2318c08af11ec4',
            'leiras'=>'finom'
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recepts');
    }
};
