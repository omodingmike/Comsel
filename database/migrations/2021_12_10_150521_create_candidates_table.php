<?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    class CreateCandidatesTable extends Migration
    {
        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up()
        {
            Schema::create('candidates', function (Blueprint $table) {
                $table->id();
                $table->integer('user_id');
                $table->string('fname')->default('');
                $table->string('mname')->default('');
                $table->string('lname')->default('');
                $table->string('gender')->default('');
//            $table->date('dob')->default(date('Y-m-d'));
                $table->date('dob')->default(date('2007-01-01'));
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
            Schema::dropIfExists('candidates');
        }
    }
