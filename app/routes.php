<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|

*/
Route::get('/login', function()
{
	return View::make('login.login');
});




Route::resource('register','UserController');
/*
Route::post('/register',function()
{
    // Fetch all request data.
    $data = Input::all();

    $rules = array(
       'username' => 'required|alpha|min:3|max:32',
        'password' => 'required|min:3|confirmed',
        'password_confirmation' => 'required|min:3'
    );

    // Create a new validator instance.
    $validator = Validator::make($data, $rules);


    if ($validator->passes()) {

        //Something
   
      
    }

    return Redirect::to('/register')->withErrors($validator);

});
