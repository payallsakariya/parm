<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DatabaseController;
use App\Http\Controller\QueryBuilderController;
use App\Http\Controller\CrudOperationsController;
use App\Http\Controller\AuthentionController;
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
    return view('welcome');
});
// Route::view('login','login.login');
// Route::view('register1','patient.register');
// Route::view('register','register');
// Route::post('http_register_get',[LoginController::class, 'store']);

// Route::view('login','login');


Route::post('http_login_get', [LoginController::class, 'login']); 
// Route::get('/check-bd-connection',[\App\Http\Controllers\DatabaseController::class,'checkconnection']);
// Route::get('/sqlQueries_selecte',[\App\Http\Controllers\DatabaseController::class,'sqlQueries']);

Route::get('/check-db-connection', [\App\Http\Controllers\DatabaseController::class, 'checkDbConnection']);
Route::get('/sql-queries', [\App\Http\Controllers\DatabaseController::class, 'sqlQueries']);


Route::get('/retrieve_methods',[\App\Http\Controllers\QueryBuilderController::class,'retrieveMethods']);
Route::get('/aggregate_methods',[\App\Http\Controllers\QueryBuilderController::class,'aggregateMethods']);
Route::get('/select_statement',[\App\Http\Controllers\QueryBuilderController::class,'selectStatements']);
Route::get('/distince_method',[\App\Http\Controllers\QueryBuilderController::class,'distinct']);
Route::get('/join_method',[\App\Http\Controllers\QueryBuilderController::class,'joinStatements']);
Route::get('/where_method',[\App\Http\Controllers\QueryBuilderController::class,'whereStatement']);
Route::get('/opretions_method',[\App\Http\Controllers\QueryBuilderController::class,'opretions']);
Route::get('/up_method',[\App\Http\Controllers\QueryBuilderController::class,'up']);


Route::get('getPatientData',[\App\Http\Controllers\PatientController::class,'getPatientData']);
Route::get('getDoctorData',[\App\Http\Controllers\DoctorController::class,'getDoctorData']);
Route::get('belogsToManyPatient',[\App\Http\Controllers\PatientController::class,'belogsToManyPatient']);
Route::get('belogsToManyDoctor',[\App\Http\Controllers\PatientController::class,'belogsToManyDoctor']);


Route::get('array-helpers', [UserController::class, 'arrayHelpers']);
Route::get('session-method', [UserController::class, 'sessionMethod']);
Route::get('path-helpers', [UserController::class, 'pathHelpers']);
Route::get('custom-helpers', [UserController::class, 'customHelpers']);
Route::get('httpcliend-helpers', [UserController::class, 'httpClient']);


// Route::get('view-cities',[\App\Http\Controllers\RelationController::class,'viewCities']);

Route::get('view-cities',[\App\Http\Controllers\RelationController::class,'viewCities'])->name('view_cities');
Route::get('view-multiple-cities',[\App\Http\Controllers\RelationController::class,'viewMultipleCities'])->name('view_multiple_cities');

Route::get('oneToOnePolymorphic',[\App\Http\Controllers\RelationController::class,'oneToOnePolymorphic'])->name('view_cities');
Route::get('oneToManyPolymorphic',[\App\Http\Controllers\RelationController::class,'oneToManyPolymorphic'])->name('view_cities');
//1 type
// Route::get('users/{users}', function(\App\Models\User $users){
// echo "<pre>";
// print_r($users);exit;
// });
//2 type
// Route::get('users/{users:name}', function(\App\Models\User $users){
//     echo "<pre>";
//     print_r($users);exit;
//     });
//3 type
// Route::get('users/{users:name}', [\App\Http\Controllers\UserController::class,'getUsers'])->name('getUsers');
   
//4 type
// Route::get('users/{users}', [\App\Http\Controllers\UserController::class,'getUsers'])->name('getUsers');

//5 type
// Route::get('users/{users}/cares/{brand}', function(\App\Models\User $users ,\App\Models\Cares $brand){
// echo "<pre>";
// // print_r($brand);
// print_r([$users,$brand]);exit;
// });

    //1 type useing controller action
    // Route::get('explicit-2/users/{users}', function(\App\Models\User $users){
    // echo "<pre>";
    // print_r($users);exit;
    // });
   //2 type  useing custom logic
   Route::get('explicit-3/users/{users}', function(\App\Models\User $users){
    echo "<pre>";
    print_r($users);exit;
    });
    // localization

    Route::get('localization-example', function () {
        return view('localization');
    });
    Route::get('localization',[\App\Http\Controllers\UserController::class,'localization']);
    Route::get('changeLanguage/{language}', [\App\Http\Controllers\UserController::class, 'changeLanguage'])->name('change_language');

    Route::resource('crud',\App\Http\Controllers\CrudOperationsController::class);
    
    Route::get('url-Helper', [\App\Http\Controllers\CrudOperationsController::class, 'urlHelper'])->name('change_language');
    
    Route::get('urlHelper', [\App\Http\Controllers\UserController::class, 'urlHelper'])->name('change_language');

    //EMAIL
    Route::get('sendEmail', [\App\Http\Controllers\UserController::class, 'sendEmail']);

    Route::get('exceuteCommand', [\App\Http\Controllers\UserController::class, 'exceuteCommand']);


    Route::controller(\App\Http\Controllers\AuthentionController::class)->group(function (){
        Route::get('/login','login')->name('login');
        Route::get('/index','index')->name('index');
        Route::get('/logout','logout')->name('logout');
        Route::POST('/register','register')->name('register');
        
        // Route::get('/forgot-password','forgotpassword')->name('forgot_password');
        
        // Route::post('/register','storeUser')->name('storeUser');
       


    });