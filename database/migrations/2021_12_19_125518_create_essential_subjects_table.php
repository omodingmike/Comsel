<?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    class CreateEssentialSubjectsTable extends Migration
    {
        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up()
        {
            Schema::create('essential_subjects', function (Blueprint $table) {
                $table->integer('id');
                $table->integer('subject_code');
                $table->integer('course_code');
//                $table->foreign('subject_id')->references('id')->on('subjects');
            });
        }

        /**
         * Reverse the migrations.
         *
         * @return void
         */
        public function down()
        {
            Schema::dropIfExists('essential_subjects');
        }
    }
