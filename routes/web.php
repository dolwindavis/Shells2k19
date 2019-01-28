<?php




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
    return view('home');
});
// Route::get('/student/list', function () {
//     return view('studentlist');
// });
Route::get('/student/add', function () {
    return view('studentadd');
});


//Controller => ViewController
//Rendering Views
Route::get('/home','ViewController@homeview');

Route::get('/login', 'ViewController@loginView');

Route::get('/register','ViewController@registerView');

Route::get('/student','ViewController@studentlistView');

Route::get('/student/update','ViewController@studentupdateView');

Route::get('/events/list', 'ViewController@eventlistView');

Route::get('/events/details','ViewController@eventdetailsView');

//Controller => RegisterController
//Registering a college 

Route::post('/register','RegisterController@registerCollege'); 

//registering a student
Route::post('/student/register','RegisterController@registerStudent');


Route::post('/events/list', function () {
    return response()->json(['success'=>'Data is successfully added']);
});

//Authentication controllers
//Controller => LoginController
//login =>for login
//logout => for logout
//Auth::routes(['register' => false]);

