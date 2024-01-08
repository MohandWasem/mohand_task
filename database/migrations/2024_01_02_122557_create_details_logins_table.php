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
        Schema::create('details_logins', function (Blueprint $table) {
            $table->id();
            $table->foreignId("id_user")->constrained('users')->onDelete("cascade");
            $table->integer("num_of_login")->default(1);
            $table->datetime("date_login");
            $table->date("date_logout")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('details_logins');
    }
};
