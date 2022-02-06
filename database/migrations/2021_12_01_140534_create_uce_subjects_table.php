<?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    class CreateUceSubjectsTable extends Migration
    {
        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up()
        {
            Schema::create('uce_subjects', function (Blueprint $table) {
                $table->id();
                $table->integer('user_id');
                $table->string('subj_1');
                $table->string('subj_2');
                $table->string('subj_3');
                $table->string('subj_4');
                $table->string('subj_5');
                $table->string('subj_6');
                $table->string('subj_7');
                $table->string('optional_1')->default('');
                $table->string('optional_2')->default('');
                $table->string('optional_3')->default('');

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
            Schema::dropIfExists('uce_subjects');
        }
    }
