<?php

    namespace App\Http\Controllers;

    use App\Helpers\Operation;
    use App\Models\UceSubject;
    use Illuminate\Http\JsonResponse;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Auth;

    class UceSubjectController extends Controller
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
         * @return \Illuminate\Http\JsonResponse
         */
        public function store(Request $request)
        : JsonResponse
        {
            $optionals = $request->subjects;
            $update    = UceSubject::where('user_id', '=', Auth::user()->id)
                ->update([
                    'optional_1' => (empty($optionals[0])) ? ' ' : $optionals[0],
                    'optional_2' => (empty($optionals[1])) ? ' ' : $optionals[1],
                    'optional_3' => (empty($optionals[2])) ? ' ' : $optionals[2],
                ]);
            return response()->json(Operation::uceSubjectGrade());
        }

        /**
         * Display the specified resource.
         *
         * @param \App\Models\UceSubject $uceSubject
         *
         * @return void
         */
        public function show(UceSubject $uceSubject)
        {
            //
        }

        /**
         * Show the form for editing the specified resource.
         *
         * @param \App\Models\UceSubject $uceSubject
         *
         * @return void
         */
        public function edit(UceSubject $uceSubject)
        {
            //
        }

        /**
         * Update the specified resource in storage.
         *
         * @param \Illuminate\Http\Request $request
         * @param \App\Models\UceSubject $uceSubject
         *
         * @return void
         */
        public function update(Request $request, UceSubject $uceSubject)
        {
            //
        }

        /**
         * Remove the specified resource from storage.
         *
         * @param \App\Models\UceSubject $uceSubject
         *
         * @return void
         */
        public function destroy(UceSubject $uceSubject)
        {
            //
        }
    }
