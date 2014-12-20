<?php

class Client extends Eloquent {
	 protected $table='clients';
	protected $fillable = ['name','phone'];
}