<?php

use App\Http\Controllers\Dashboard\CitiesController;
use App\Http\Controllers\Dashboard\CountryController;
use App\Http\Controllers\Dashboard\HotelController;
use App\Http\Controllers\Dashboard\MealPlanesController;
use App\Http\Controllers\Dashboard\RoomTypeController;
use App\Http\Controllers\Dashboard\TicketTypeController;
use App\Http\Controllers\Dashboard\TransportationController;
use App\Http\Controllers\Dashboard\TripController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



// =====================================
// ============= Dashboard =============
// =====================================
Route::prefix("dashboard-panel")->name("dashboard.")->group(function () {
    //
    Route::get('/', function () {
        return view('dashboard.index');
    })->name("index");

    // =====================================
    // ============= Contries =============
    // =====================================
    Route::resource("countries", CountryController::class);

    // =====================================
    // ============= Cities =============
    // =====================================
    Route::resource("cities", CitiesController::class);



    // =====================================
    // ============= Hotels =============
    // =====================================
    Route::resource("hotels", HotelController::class);

    // =====================================
    // ============= Meal Planes =============
    // =====================================
    Route::resource("mealPlanes",MealPlanesController::class);

    // =====================================
    // ============= Room Type =============
    // =====================================
    Route::resource("roomType",RoomTypeController::class);

    // =====================================
    // ============= TicketType =============
    // =====================================
    Route::resource("TicketType",TicketTypeController::class);
    // =====================================
    // ============= Transportation =============
    // =====================================
    Route::resource("Transportation",TransportationController::class);
    // =====================================
    // ============= Trip =============
    // =====================================
    Route::resource("Trip",TripController::class);
});


//ticket_type