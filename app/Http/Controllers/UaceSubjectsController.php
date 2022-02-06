<?php

    namespace App\Http\Controllers;

    use App\Helpers\Operation;
    use App\Models\UaceSubjects;
    use Illuminate\Http\JsonResponse;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Auth;

    class UaceSubjectsController extends Controller
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
            // get uce subjects from request and save them.
            $subjects = $request->subjects;
            UaceSubjects::where('user_id', '=', Auth::user()->id)
                ->update([
                    'subj_1' => (empty($subjects[0])) ? ' ' : $subjects[0],
                    'subj_2' => (empty($subjects[1])) ? ' ' : $subjects[1],
                    'subj_3' => (empty($subjects[2])) ? ' ' : $subjects[2],
                ]);
            // return json data of all uace subjects and their grades.
            return response()->json(Operation::uaceSubjectsWithGrades());
        }

        public function subsidiary(Request $request)
        : JsonResponse
        {
            $subjects = $request->subjects;
            $update   = UaceSubjects::where('user_id', '=', Auth::user()->id)
                ->update([
                    'subsidiary' => (empty($subjects[0])) ? ' ' : $subjects[0],
                ]);

//            return response()->json(Subjects::fetchAlevelSubjects());
            return response()->json(Operation::uaceSubjectsWithGrades());
        }

        /**
         * Display the specified resource.
         *
         * @param \App\Models\UaceSubjects $uaceSubjects
         *
         * @return void
         */
        public function show(UaceSubjects $uaceSubjects)
        {
            //
        }

        /**
         * Show the form for editing the specified resource.
         *
         * @param \App\Models\UaceSubjects $uaceSubjects
         *
         * @return void
         */
        public function edit(UaceSubjects $uaceSubjects)
        {
            //
        }

        /**
         * Update the specified resource in storage.
         *
         * @param \Illuminate\Http\Request $request
         * @param \App\Models\UaceSubjects $uaceSubjects
         *
         * @return void
         */
        public function update(Request $request, UaceSubjects $uaceSubjects)
        {
            //
        }

        /**
         * Remove the specified resource from storage.
         *
         * @param \App\Models\UaceSubjects $uaceSubjects
         *
         * @return \Illuminate\Http\Response
         */
        public function destroy(UaceSubjects $uaceSubjects)
        {
            //
        }
    }
