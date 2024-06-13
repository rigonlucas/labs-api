<?php

use Hyperf\Database\Schema\Schema;
use Hyperf\Database\Schema\Blueprint;
use Hyperf\Database\Migrations\Migration;

class AlterUsersTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('', function (Blueprint $table) {
            $table->string('cidade', 255)->after('remember_token');
            $table->string('estado', 255)->after('cidade');
            $table->string('discord',255)->after('estado')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('', function (Blueprint $table) {
            $table->dropColumn('cidade');
            $table->dropColumn('estado');
            $table->dropColumn('discord');
        });
    }
}
