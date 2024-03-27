<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use app\Models\User;


return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('offers', function (Blueprint $table) {
            $table->id();
            $table->integer('somme');

            // $table->integer('montant_mensuel');
            $table->enum('status', ['en cours', 'terminée'])->default('en cours');
            $table->integer('période'); //nbr de moi
            $table->enum('date_paiment', [
                '1', '2', '3','4','5','6','7','8','9','10',
                '11', '12', '13','14','15','16','17','18','19','20',
                '21', '22', '23','24','25','26','27','28','29','30','31'
            ]);
            $table->string('nbr_de_participant')->default(0);
            $table->string('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('offers');
    }
};
