<?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    class CreatePleResultsTable extends Migration
    {
        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up()
        {
            Schema::create('ple_results', function (Blueprint $table) {
                $table->id();
                $table->integer('user_id');
                $table->integer('maths')->default(0);
                $table->integer('science')->default(0);
                $table->integer('english')->default(0);
                $table->integer('sst')->default(0);
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
            Schema::dropIfExists('ple_results');
        }
    }
