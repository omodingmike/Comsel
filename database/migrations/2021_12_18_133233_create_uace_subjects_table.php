<?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    class CreateUaceSubjectsTable extends Migration
    {
        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up()
        {

            Schema::create('uace_subjects', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('user_id');
                $table->string('subj_1')->default('');
                $table->string('subj_2')->default('');
                $table->string('subj_3')->default('');
                $table->string('subsidiary')->default('');
                $table->string('gp')->default('general_paper');
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
            Schema::dropIfExists('uace_subjects');
        }
    }
