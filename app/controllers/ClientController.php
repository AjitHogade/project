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
		$clients =Client::get();
		return View::make('home.allClients')->with('clients',$clients);
	}
	public function searchClients()
	{
		$keywords = Input::get('keywords');
		$clients = Client::query();
		if($keywords!="")
			$clients->where("name",'like',$keywords.'%');
		 return $clients->get(array('name'))->toJson();

	}

	/*
	public function searchClients()
	{
		$keywords = Input::get('keywords');
		$clients= Client::where("name",'like',$keywords.'%')->get(array('name'));
        $return_array = array();
	    foreach ($clients as $client) {
		array_push($return_array, $client->name);
	}

return $return_array;
	
	}
	*/
}