<?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    class CreateUaceResultsTable extends Migration
    {
        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up()
        {

            Schema::create('uace_results', function (Blueprint $table) {
                $table->id();
                $table->integer('user_id');
                $table->integer('physics')->default(0);
                $table->integer('mathematics')->default(0);
                $table->integer('chemistry')->default(0);
                $table->integer('biology')->default(0);
                $table->integer('history')->default(0);
                $table->integer('geography')->default(0);
                $table->integer('english')->default(0);
                $table->integer('entrepreneurship')->default(0);
                $table->integer('economics')->default(0);
                $table->integer('luganda')->default(0);
                $table->integer('agriculture')->default(0);
                $table->integer('french')->default(0);
                $table->integer('germany')->default(0);
                $table->integer('literature_in_english')->default(0);
                $table->integer('kiswahili')->default(0);
                $table->integer('divinity')->default(0);
                $table->integer('technical_drawing')->default(0);
                $table->integer('islam')->default(0);
                $table->integer('arabic')->default(0);
                $table->integer('art_ips')->default(0);
                $table->integer('subsidiary_ict')->default(0);
                $table->integer('subsidiary_mathematics')->default(0);
                $table->integer('general_paper')->default(0);
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
            Schema::dropIfExists('uace_results');
        }
    }
