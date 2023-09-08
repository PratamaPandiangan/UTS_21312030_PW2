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
        Schema::create('21312030uts2', function (Blueprint $table) {
            $table->id();
            $table->uts2_f1();
            $table->uts2_f2();
            $table->uts2_f3();
            $table->uts2_f4();
            $table->id_uts1();
            $table->id_uts3();
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
        Schema::dropIfExists('21312030uts2');
    }
};
