<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\AuthController;

// Public Routes
Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);

// Protected Routes (Require JWT Token)
Route::middleware('auth:api')->group(function () {
    Route::get('me', [AuthController::class, 'me']);
    Route::post('logout', [AuthController::class, 'logout']);
    Route::apiResource('tasks', TaskController::class);
});

Route::middleware(['auth:api', 'role:Admin'])->get('/admin-only', function () {
    return response()->json(['message' => 'Welcome Admin']);
});

// Route::middleware(['auth:api', 'permission:manage-users'])->group(function () {
//     Route::get('/manage-users', [AuthController::class, 'manage']);
// });


// // Public Routes
// Route::post('register', [AuthController::class, 'register']);
// Route::post('login', [AuthController::class, 'login']);

// // Protected Routes (JWT Protected)
// Route::middleware(['auth:api'])->group(function () {
//     Route::get('me', [AuthController::class, 'me']);
//     Route::post('logout', [AuthController::class, 'logout']);
//     Route::apiResource('tasks', TaskController::class);
// });

