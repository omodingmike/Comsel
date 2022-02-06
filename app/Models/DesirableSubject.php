<?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;

    class DesirableSubject extends Model
    {
        use HasFactory;

        public $timestamps = false;

        public function course()
        {
            return $this->belongsTo(Course::class);
        }

        public function subject()
        {
            return $this->hasOne(Subject::class, 'code', 'subject_code');
        }
    }
