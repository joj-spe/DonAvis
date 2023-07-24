<?php

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
        Schema::create('administrateur', function (Blueprint $table) {
            $table->id_admin();
            $table->string('nom_admin');
            $table->string('prenom_admin');
            $table->string('email_admin');
            $table->string('mdp_admin');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('administrateur');
    }
};
