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


Route::get('/register',[
    'uses'=>'UserController@index'
]);
  Route::post('/register',[
    'method'=>'post',
    'uses'=>'UserController@store',
]); 
*/



Route::group(array('before' => 'auth'), function()
{
    Route::get('/admin', function()
{
       return View::make('home.admin');
});

Route::get('/logout', array(
       'as' => 'logout',
        'uses' => 'UserController@logout'
    ));
});
 





Route::get('/login',[

'uses'=>'UserController@getlogin'
]);
//checking login 
Route::post('/login',[
'as'=>'login',
'method'=>'post',
'uses'=>'UserController@postlogin',
]); 


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


    if ($validator->fails()) {

        return Redirect::to('/register')->withErrors($validator);
   }

  

});


