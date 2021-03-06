<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddClassIdToRelaxAppliesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('relax_applies', function (Blueprint $table) {
            $table->unsignedInteger('class_id')->index()->comment('班级id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('relax_applies', function (Blueprint $table) {
            $table->dropColumn('class_id');
        });
    }
}
