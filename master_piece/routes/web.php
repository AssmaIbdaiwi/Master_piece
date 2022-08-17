<?php
use App\Http\Controllers\DashboardCarController;
use App\Http\Controllers\DashboardUserController;
use App\Http\Controllers\DashboardMessageController;

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CarController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\RegDriverController;
use App\Http\Controllers\CarListController;
use App\Http\Controllers\TripAddController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\WomenController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/log', function () {
    return view('log');
});



// Route::get('/cars', function () {
//     return view('cars');
// });

Route::get('/dashboard', function () {
    return view('dashboard.dashboard');
});

// Route::get('/addCar', function () {
//     return view('dashboard.addCar');
// });






Route::resource('profile',ProfileController::class);

Route::resource('cars',CarListController::class);

Route::resource('woman',WomenController::class);

Route::resource('drivercar-info',CarController::class);

Route::resource('contact',ContactController::class);

Route::resource('partner',PartnerController::class);

Route::middleware('auth')->group(function() {
Route::resource('driver-register', RegDriverController::class);

});
Route::resource('tripadd', TripAddController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');





///admin


Route::resource('dashboardCar',DashboardCarController::class);
Route::resource('dashboardUser',DashboardUserController::class);
Route::resource('dashboardMessage',DashboardMessageController::class);


