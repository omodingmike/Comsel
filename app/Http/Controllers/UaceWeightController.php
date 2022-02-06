<?php

    namespace App\Http\Controllers;

    use App\Helpers\Operation;
    use App\Models\UaceWeight;
    use Illuminate\Http\Request;

    class UaceWeightController extends Controller
    {
        public static function points(array $results)
        : int
        {
            $points = 0;
            foreach ($results as $key => $value) {
                $points += $value;
            }
            return $points;
        }

        /**
         * Display a listing of the resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function index()
        {
            //
        }

        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function create()
        {
            //
        }

        /**
         * Store a newly created resource in storage.
         *
         * @param \Illuminate\Http\Request $request
         *
         * @return array|string
         * @throws \Exception
         */
        public function store(Request $request)
        {
            // Return weights view with the necessary data.
            return view('layouts.weights', ['data' => Operation::weight($request)]);
        }

        /**
         * Display the specified resource.
         *
         * @param \App\Models\UaceWeight $uaceWeight
         *
         * @return \Illuminate\Http\Response
         */
        public function show(UaceWeight $uaceWeight)
        {
            //
        }

        /**
         * Show the form for editing the specified resource.
         *
         * @param \App\Models\UaceWeight $uaceWeight
         *
         * @return \Illuminate\Http\Response
         */
        public function edit(UaceWeight $uaceWeight)
        {
            //
        }

        /**
         * Update the specified resource in storage.
         *
         * @param \Illuminate\Http\Request $request
         * @param \App\Models\UaceWeight $uaceWeight
         *
         * @return \Illuminate\Http\Response
         */
        public function update(Request $request, UaceWeight $uaceWeight)
        {
            //
        }

        /**
         * Remove the specified resource from storage.
         *
         * @param \App\Models\UaceWeight $uaceWeight
         *
         * @return \Illuminate\Http\Response
         */
        public function destroy(UaceWeight $uaceWeight)
        {
            //
        }
    }
