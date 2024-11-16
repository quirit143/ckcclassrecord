<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

 
//Route::get('/student', [StudentController::class,'index']);
//Route::resource('/student',StudentController::class);
Route::get('/student/add',[StudentController::class,'create'])->name('student.create');
Route::delete('/student/{id}',[StudentController::class,'destroy'])->name('student.delete');
Route::put('/student/{id}',[StudentController::class,'update'])->name('student.update');
Route::get('/student/edit/{id}',[StudentController::class,'edit'])->name('student.edit');
Route::get('/student/{id}',[StudentController::class,'show'])->name('student.show');
Route::post('/student',[StudentController::class,'store'])->name('student.store');
Route::get('/student/add',[StudentController::class,'create'])->name('student.create');
Route::get('/student', [StudentController::class, 'index'])->name('student.index');

//TODO: 1. Basic routing
Route::get('/hello', function () {
    return view('hello');
});
Route::get('/', function () {
    return view('welcome');
});
// Route::get('/page',function(){
//     return view('page');
// });

//TODO: 2. Route Parameters
Route::get('/myid/{id}', function ($id) {
    return "User ID:" .$id;
});


Route::get('/myname/{name?}', function ($name='CKC') {
    return "Hello, " .$name;
});

//TODO: 3. Named Routes
Route::get('/myprofile', function () {
    return 'This is the myprofile page';
})->name('myprofile');

Route::get('/myhomepage', function () {
    return 'This is the home page';
})->name('homepage');


//TODO: 4. Named Routes with parameters
Route::get('/myuser/{id}', function ($id) {
    return "User ID: " . $id;
})->name('user.profile');

//TODO: 5. Route Groups
Route::prefix('products')->group(function () {
    Route::get('/beverages', function () {
        return 'Coffee or ako?';
    });

    Route::get('/snacks', function () {
        return 'sandwich or sya?';
    });
});

//TODO : Combining Routes with Parameters and values
Route::get('/page',function(){
    $age=40;
    $name='Renel';
    return view('page',compact('age','name'));
});

Route::prefix('events')->group(function () {
    Route::get('/wedding', function () {
        return 'wedding pages';
    });

    Route::get('/birthdays', function () {
        return 'birthday page';
    });
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

//TODO: 6.Middleware groups
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
