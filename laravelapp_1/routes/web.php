<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\StudentController;

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

        ////this for CV
        Route::get('/loginn',function(){
            return view('cv.login');
        });
        Route::get('/home',function(){
            return view('cv.home');
        });
        Route::get('/profile',function(){
            return view('cv.profile');
        });
        Route::get('/edu',function(){
            return view('cv.edu');
        });
        Route::get('/projects',function(){
            return view('cv.projects');
        });
        Route::get('/contact',function(){
            return view('cv.contact');
        });



 Route::get('/loginkor',[PagesController::class,'login'])->name('login'); 
 Route::get('/register',[PagesController::class,'register']);   
 
 
        
        Route::get('/studentCreate',[StudentController::class,'create'])->name('student/create');
        Route::get('/studentGet',[StudentController::class,'get']); 
        Route::get('/studentList',[StudentController::class,'list']); 



Route::get('/student/details/{id}/{name}',[StudentController::class,'details'])->name('student.details');         
         

                Route::post('/register',[PagesController::class,'registersubmit'])->name('register.submit');  



Route::get('/students/list',[StudentController::class,'list'])->name('student.list');      //database access          