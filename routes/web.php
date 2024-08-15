<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\LandlordController;
use App\Http\Controllers\SuperAdminController;
use App\Http\Controllers\AccommodationController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


// routes/web.php

// Route::middleware(['auth', 'role:super_admin'])->group(function () {
//     Route::get('/super-admin', [SuperAdminController::class, 'index'])->name('super-admin.dashboard');
// });

// Route::middleware(['auth', 'role:landlord'])->group(function () {
//     Route::get('/landlord', [LandlordController::class, 'index'])->name('landlord.dashboard');
// });

// Route::middleware(['auth', 'role:student'])->group(function () {
//     Route::get('/student', [StudentController::class, 'index'])->name('student.dashboard');
// });


// routes/web.php

Route::middleware(['auth', 'role:super_admin'])->group(function () {
    Route::get('/super-admin', [SuperAdminController::class, 'index'])->name('super-admin.dashboard');
});

Route::middleware(['auth', 'role:landlord'])->group(function () {
    Route::get('/landlord', [LandlordController::class, 'index'])->name('landlord.dashboard');
});

Route::middleware(['auth', 'role:student'])->group(function () {
    Route::get('/student', [StudentController::class, 'index'])->name('student.dashboard');
});



// Accommodation Routes
// routes/web.php

Route::middleware(['auth', 'role:landlord'])->group(function () {
    Route::get('/accommodations/create', [AccommodationController::class, 'create'])->name('accommodations.create');
    Route::post('/accommodations', [AccommodationController::class, 'store'])->name('accommodations.store');
});

Route::middleware(['auth', 'role:super_admin,student'])->group(function () {
    Route::get('/accommodations', [AccommodationController::class, 'index'])->name('accommodations.index');
});



require __DIR__.'/auth.php';
