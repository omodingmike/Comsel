<?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;

    class Subject extends Model
    {
        use HasFactory;

        public $timestamps = false;

        public function essentialSubject()
        {
            return $this->belongsTo(EssentialSubject::class);
        }

        public function essential()
        {
            return $this->belongsTo(Subject::class, 'code', 'subject_code');
        }
    }
