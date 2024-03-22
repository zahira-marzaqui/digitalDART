<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\OfferController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

     //AUTHENTIFICATION
    Route::get('/', [AuthController::class, 'login'])->name('user.login');
    Route::post('/login', [AuthController::class, 'loginStore'])->name('user.login.store');
    Route::post('/register', [AuthController::class, 'RegisterStore'])->name('user.register.store');
    Route::get('/inscription', [AuthController::class, 'register'])->name('user.register');
    

     //USER
    Route::middleware(['auth', 'user-access:user'])->group(function () {
        
        Route::group(['prefix' => 'Interface-Utilisateur'], function() { 

            Route::get('Offers/index',[OfferController::class, 'UserOffer'])->name('user.offer.index');
           
         });
    });
 
    
    //ADMIN
    Route::middleware(['auth', 'user-access:admin'])->group(function () {

        Route::group(['prefix' => 'Interface-Admin'], function() {

            Route::get('Offers/index',[OfferController::class, 'AdminOffer'])->name('admin.offer.index');
   
   
         });
    
    });
