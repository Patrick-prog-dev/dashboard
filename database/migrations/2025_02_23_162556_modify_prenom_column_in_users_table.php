<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
{
    Schema::table('users', function (Blueprint $table) {
        $table->string('prenom')->nullable()->change(); // Rendre la colonne 'prenom' nullable
    });
}

public function down()
{
    Schema::table('users', function (Blueprint $table) {
        $table->string('prenom')->nullable(false)->change(); // Revenir à l'état précédent
    });
}

};
