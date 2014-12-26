<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|*/
Route::group(array('before' => 'auth'), function()
{
      //view Admin Page
      Route::get('/admin', function()
        {
             return View::make('home.admin');
        });

     //view addClients Page
      Route::get('/addClients', function()
        {
             return View::make('home.addClients');
        });

     //adding clients to database from ClientController@add function
      Route::post('addClients' , 'ClientController@add');

     //view addAccount Page
      Route::get('/addAccount', function()
        {
             return View::make('home.addAccount');
        });

     //select clients to add in account
      Route::get('/searchClients', array(
          'as' => 'searchClients',
          'uses' => 'ClientController@searchClients'
        ));

      Route::post('addAccount' , 'AccController@add');


     
     //view allClients Page
      Route::get('/allClients', function()
        {
             return View::make('home.allClients');
        });     
      
     //diplay all clients from database
      Route::get('/allClients', array(
           'as' => 'allClients',
           'uses' => 'ClientController@getClients'
        ));


     //logout from aaplication
      Route::get('/logout', array(
           'as' => 'logout',
           'uses' => 'UserController@logout'
        ));
});

//view login page
Route::get('/login',[
'as' => 'login',
'uses'=>'UserController@getlogin'
]);


//checking login 
Route::post('/login',[
'as'=>'login',
'method'=>'post',
'uses'=>'UserController@postlogin',
]); 



























/*
Route::get('/register',[
    'uses'=>'UserController@index'
]);
  Route::post('/register',[
    'method'=>'post',
    'uses'=>'UserController@store',
]);
Route::resource('register','UserController');


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


