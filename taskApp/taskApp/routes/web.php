<?php

use Illuminate\Support\Facades\Route;

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

//$data=Tasks::all();

Route::get('/tasks', function(){
$data = App\Models\Task::all();

    return view('tasks')->with('tasks',$data);


});
 
// Route::get('/about-us', function(){
//     return view('aboutus');
// });
    
Route::get('/about-us','App\Http\Controllers\PageController@indexaboutus');
// same rout output using controller instead of use routes directly 


Route::get('/contact-us','App\Http\Controllers\PageController@indexcontactus');
// same rout output using controller instead of use routes directly 

Route::post('/savetask', 'App\Http\Controllers\TaskController@store');

Route::get('/markascompleted/{id}','TaskController@index');
