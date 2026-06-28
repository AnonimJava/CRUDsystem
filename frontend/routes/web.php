<?php
use App\Http\Controllers\ShipmentController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return redirect('/dashboard');
});

Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/shipments', [ShipmentController::class, 'index'])
        ->name('shipments.index');

    Route::get('/shipments/create', [ShipmentController::class, 'create']);

    Route::post('/shipments', [ShipmentController::class, 'store']);

    Route::get('/shipments/{id}/edit', [ShipmentController::class, 'edit']);

    Route::put('/shipments/{id}', [ShipmentController::class, 'update']);

    Route::delete('/shipments/{id}', [ShipmentController::class, 'destroy']);
});

require __DIR__.'/auth.php';
