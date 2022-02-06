<?php

    namespace App\Models;

    use DateTime;
    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;

    class Candidate extends Model
    {
        use HasFactory;

        protected $fillable = ['user_id', 'fname', 'mname', 'lname', 'gender', 'dob'];

        public function getFnameAttribute($value)
        {
            return ucfirst($value);
        }

        public function getMnameAttribute($value)
        {
            return ucfirst($value);
        }

        public function getLnameAttribute($value)
        {
            return ucfirst($value);
        }

        public function getGenderAttribute($value)
        {
            return ucfirst($value);
        }

        /**
         * @throws \Exception
         */
        public function getDobAttribute($value)
        {
            return (new DateTime($value))->format('d/m/Y');
        }


    }
