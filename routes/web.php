<?php

    use App\Helpers\Optimise;
    use App\Helpers\Subjects;
    use App\Helpers\Utilities;
    use App\Http\Controllers\CombinationController;
    use App\Http\Controllers\UaceController;
    use App\Http\Controllers\UaceSubjectsController;
    use App\Http\Controllers\UaceWeightController;
    use App\Http\Controllers\UceSubjectController;
    use Illuminate\Support\Facades\Auth;
    use Illuminate\Support\Facades\Route;

    /*
    |--------------------------------------------------------------------------
    | Web Routes
    |--------------------------------------------------------------------------
    |
    | Here is where you can register web routes for your application. These
    | routes are loaded by the RouteServiceProvider within a group which
    | contains the "web" middleware group. Now create something great!
    |
    */

    Auth::routes();
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::resource('/uce-subjects', UceSubjectController::class);
//    Route::resource('/uace-subjects', UaceController::class);
    Route::resource('/uace-subjects', UaceSubjectsController::class);
    Route::post('/subsidiary', [UaceSubjectsController::class, 'subsidiary']);
    Route::resource('/uace', UaceController::class);
    Route::post('/combination', [CombinationController::class, 'store'])->name('combinations');
    Route::post('/weight', [UaceSubjectsController::class, 'store']);
    Route::post('/weights', [UaceWeightController::class, 'store'])->name('weights');
    Route::get('/clear', [Optimise::class, 'route']);
    Route::get('/relation', [Optimise::class, 'relation']);
    Route::get('/science-combinations', [Utilities::class, 'data']);
    Route::get('/test', [Subjects::class, 'test'])->name('test');
