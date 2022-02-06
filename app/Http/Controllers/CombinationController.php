<?php

    namespace App\Http\Controllers;

    use App\Helpers\Operation;
    use Illuminate\Http\Request;

    class CombinationController extends Controller
    {
        /**
         * Display a listing of the resource.
         *
         * @return void
         */
        public function index()
        {
            //
        }

        /**
         * Show the form for creating a new resource.
         *
         * @return void
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
            // returns combinations view with the necessary data
            return view('layouts.combination', ['data' => Operation::combinations($request)]);
        }

        /**
         * Display the specified resource.
         *
         * @param \App\Models\Combination $combination
         *
         * @return \Illuminate\Http\Response
         */
        public function show(Combination $combination)
        {
            //
        }

        /**
         * Show the form for editing the specified resource.
         *
         * @param \App\Models\Combination $combination
         *
         * @return \Illuminate\Http\Response
         */
        public function edit(Combination $combination)
        {
            //
        }

        /**
         * Update the specified resource in storage.
         *
         * @param \Illuminate\Http\Request $request
         * @param \App\Models\Combination $combination
         *
         * @return \Illuminate\Http\Response
         */
        public function update(Request $request, Combination $combination)
        {
            //
        }

        /**
         * Remove the specified resource from storage.
         *
         * @param \App\Models\Combination $combination
         *
         * @return \Illuminate\Http\Response
         */
        public function destroy(Combination $combination)
        {
            //
        }
    }
