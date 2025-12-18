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
    Schema::table('users', function (Blueprint $table) {
        $table->string('voornaam')->after('id');
        $table->string('achternaam')->after('voornaam');
        $table->string('studentnummer')->nullable()->unique()->after('achternaam');
        $table->enum('rol', ['student', 'slb', 'admin'])->default('student')->after('email');
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
{
    Schema::table('users', function (Blueprint $table) {
        $table->dropColumn(['voornaam', 'achternaam', 'studentnummer', 'rol']);
    });
}
};
