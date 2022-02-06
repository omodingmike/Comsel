<?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;

    class UceResult extends Model
    {
        use HasFactory;

        /*$table->integer('user_id');
        $table->integer('phy')->default(0);
        $table->integer('maths')->default(0);
        $table->integer('chem')->default(0);
        $table->integer('bio')->default(0);
        $table->integer('hist')->default(0);
        $table->integer('geog')->default(0);
        $table->integer('eng')->default(0);
        $table->integer('optional_1')->default(0);
        $table->integer('optional_2')->default(0);
        $table->integer('optional_3')->default(0);
        */
        protected $fillable = ['user_id','phy','maths','chem','bio','hist','geog','eng','optional_1','optional_2','optional_3'];
}
