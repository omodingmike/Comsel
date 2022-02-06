<?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    class CreateOptionalsTable extends Migration
    {
        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up()
        {
            Schema::create('optionals', function (Blueprint $table) {
                $table->id();
                $table->integer('user_id');
                $table->string('option_1')->default(' ');
                $table->string('option_2')->default(' ');
                $table->string('option_3')->default(' ');
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
            Schema::dropIfExists('optionals');
        }
    }
