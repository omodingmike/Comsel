<?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;

    class UceSubject extends Model
    {
        use HasFactory;

        protected $fillable = [
            'user_id','subj_1', 'subj_2', 'subj_3', 'subj_4', 'subj_5', 'subj_6', 'subj_7','optional_1','optional_2','optional_3'

        ];
    }
