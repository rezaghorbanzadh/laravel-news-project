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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string("title")->collation("utf8_general_ci");
            $table->text("description")->collation("utf8_general_ci");
            $table->text("keywords")->collation("utf8_general_ci");
            $table->text("logo")->collation("utf8_general_ci");
            $table->text("icon")->collation("utf8_general_ci");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('setting');
    }
};
