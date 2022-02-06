<?php

    namespace App\Http\Controllers;

    use App\Helpers\Subjects;
    use App\Models\Uace;
    use Illuminate\Http\Request;

    class UaceController extends Controller
    {
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
         * @return \Illuminate\Http\JsonResponse
         */
        public function store(Request $request)
        {


//        $optionals = $request->subjects;
//
//        $update = UceSubject::where('user_id', '=', Auth::user()->id)
//            ->update([
//                'optional_1' => (empty($optionals[0])) ? ' ' : $optionals[0],
//                'optional_2' => (empty($optionals[1])) ? ' ' : $optionals[1],
//                'optional_3' => (empty($optionals[2])) ? ' ' : $optionals[2],
//            ]);
//
            return response()->json(Subjects::allAlevelSubjects());
        }

        /**
         * Display the specified resource.
         *
         * @param \App\Models\Uace $uace
         *
         * @return \Illuminate\Http\Response
         */
        public function show(Uace $uace)
        {
            //
        }

        /**
         * Show the form for editing the specified resource.
         *
         * @param \App\Models\Uace $uace
         *
         * @return \Illuminate\Http\Response
         */
        public function edit(Uace $uace)
        {
            //
        }

        /**
         * Update the specified resource in storage.
         *
         * @param \Illuminate\Http\Request $request
         * @param \App\Models\Uace $uace
         *
         * @return \Illuminate\Http\Response
         */
        public function update(Request $request, Uace $uace)
        {
            //
        }

        /**
         * Remove the specified resource from storage.
         *
         * @param \App\Models\Uace $uace
         *
         * @return \Illuminate\Http\Response
         */
        public function destroy(Uace $uace)
        {
            //
        }
    }
