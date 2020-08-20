<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUrunTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    //veritabanına yüklerken yani migrate yaparken
    //kullandığımız yapıları içerir
    public function up()
    {
        Schema::create('urun', function (Blueprint $table) {
            $table->id();
            $table->text('urun_adi');
            $table->double('fiyati');
            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    //rollback kısmını çalışmak istediğimiz zaman
    //kullandığımız yapı
    public function down()
    {
        Schema::dropIfExists('urun');
    }
}
