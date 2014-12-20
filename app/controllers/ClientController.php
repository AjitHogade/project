<?php

class ClientController extends BaseController{
	public function add()

	{

	
		client::create(array
			(
			
			'name'=>Input::get('name'),
			'phone'=>Input::get('phone'),
			

		     )
			);
		return "successfully added";
		// return Redirect::to('askQ')->with('You are successfully posted in.');
	}
	public function getClients()
	{
		$clients =Client::where('id','!=',Sentry::getUser()->id)->get();
		return View::make('home.allClients')->with('clients',$clients);
	}
}