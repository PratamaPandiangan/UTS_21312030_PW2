<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('21312030uts1', function (Blueprint $table) {
            $table->id();
            $table->uts1_f1();
            $table->uts1_f2();
            $table->uts1_f3();
            $table->created_at();
            $table->update_at();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('21312030uts1');
    }
};
