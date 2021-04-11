<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConstellationFatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('constellation_fates', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->string('constellation');
            $table->decimal('avg_percent',6,2);
            $table->text('avg_comment');
            $table->decimal('love_percent',6,2);
            $table->text('love_comment');
            $table->decimal('job_percent',6,2);
            $table->text('job_comment');
            $table->decimal('wealth_percent',6,2);
            $table->text('wealth_comment');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('constellation_fates');
    }
}
