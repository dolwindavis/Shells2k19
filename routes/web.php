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

//Controller => ViewController
//Rendering Views
Route::get('/home','ViewController@homeview');

Route::get('/login', 'ViewController@loginView');

Route::get('/register','ViewController@registerView');

Route::get('/student/update','ViewController@studentupdateView');

Route::get('/events/register', 'ViewController@eventlistView');

Route::get('/events','ViewController@eventdetailsView');

//Controller => RegisterController
//Registering a college 

Route::post('/register','RegisterController@registerCollege'); 

Route::get('/event/add',function ()
{
    return view('eventadd');

});

Route::post('/event/add','RegisterController@eventRegister');

Route::get('/event/details','EventController@eventDetails');

// Route::post('/events/list', function () {
//     return response()->json(['success'=>'Data is successfully added']);
// });



//Authentication controllers
//Controller => LoginController
//login =>for login
//logout => for logout
Auth::routes(['logout' => false,'register' =>false]);



//authenticating controllers
Route::middleware(['auth'])->group(function () {

    //student list for college view rendering
    //Route::get('/student','ViewController@studentlistView');
    Route::get('/student','DataViewController@studentDetails');

    Route::get('/student/register','ViewController@studentAddView');

    //registering a student
    Route::post('/student/register','RegisterController@registerStudent');

    //editing student view
    Route::get('/student/edit/{studentid}','ViewController@editStudentView');

    //editing student details
    Route::post('/student/edit/{studentid}','RegisterController@studentUpdate');

    //deleting student
    Route::get('/student/delete/{studentid}','RegisterController@studentDelete');

    //Registering event
   
});


Route::get('/logout',function(){

    Auth::logout();

    return redirect('/home');

});

