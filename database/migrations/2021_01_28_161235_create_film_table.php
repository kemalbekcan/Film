<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFilmTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('film', function (Blueprint $table) {
            $table->increments('id');
            $table->string('film_adi',30);
            $table->string('film_resmi', 120);
            $table->string('film_ismi_turkce', 60);
            $table->string('film_ismi_ingilizce', 60);
            $table->string('film_baslik',60);
            $table->string('film_fragman', 220)->nullable();
            $table->string('film_turu',15)->nullable();
            $table->string('dil', 15)->nullable();
            $table->string('yapim_yili')->nullable();
            $table->string('yonetmen')->nullable();
            $table->string('oyuncu1')->nullable();
            $table->string('oyuncu2')->nullable();
            $table->string('oyuncu3')->nullable();
            $table->string('oyuncu4')->nullable();
            $table->string('oyuncu5')->nullable();
            $table->string('oyuncu6')->nullable();
            $table->string('oyuncu7')->nullable();
            $table->string('oyuncu8')->nullable();
            $table->string('oyuncu9')->nullable();
            $table->string('oyuncu10')->nullable();
            $table->string('oyuncu11')->nullable();
            $table->string('oyuncu12')->nullable();
            $table->float('imdb')->nullable();
            $table->text('film_ozet')->nullable();
            $table->string('slug', 40);
            $table->timestamp('olusturulma_tarihi')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('guncelleme_tarihi')->default(DB::raw('CURRENT_TIMESTAMP on UPDATE CURRENT_TIMESTAMP'));
           // $table->softDeletes();
            $table->timestamp('silinme_tarihi')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('film;');
    }
}
