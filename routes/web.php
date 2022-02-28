<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\FirstController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\Front\UsersController;
use App\Http\Controllers\HomeController;
use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Support\Facades\Auth;

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

// Route::get('/', function () {
//     $data=[];
//     $data['id'] = 10;
//     $data['name'] ='moath mohammmed';
//     return view('welcome',$data);

//     // return view('welcome')->with('id',$data['id'])->with('name',$data['name']);
//     //return view('welcome',['id'=> $data['id'] ,'name'=>$data['name']]);

// });


Route::get('/', [UsersController::class, 'showData']);


Route::get('/about', function () {
    return view('about');
});


/*
Route Parameters
 1- Required Parameters
 2-Optional Parameters
*/
// Route::get('users/{id}', function ($id) {
//     return 'Welcome user id ' . $id;
// });

// Route::get('user/{id?}', function ($id = null) {
//     return 'Welcome user id ' . $id;
//     })->name('user');

/*
Route::prefix('users')->group(function () {
    Route::get('/', function () {
        return "Welcome عسثقس";
    });
});

Route::group(['prefix' =>'users' ],function(){
    Route::get('/', function () {
        return "Welcome fgdj";
    });
});

*/

// Route::get('check',function(){
//     return "Middleware";
// })->middleware('auth');

// Route::group(['middleware' =>'auth' ],function(){
//     Route::get('check', function () {
//         return "Welcome fgdj";
//     });
// });



// Route::get('/first',[FirstController::class , 'showUsersName']);

Route::group(['namespace' => 'Front'], function () {
    Route::get('/first', [FirstController::class, 'showUsersName']);
    Route::get('/index', [UsersController::class, 'getIndex']);
});


// Route::resource('news',NewsController::class);










Auth::routes(['verify' => true]);

Route::get('/home', [HomeController::class, 'index'])->name('home')->middleware('verified');
