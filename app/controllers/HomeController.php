<?php

class HomeController extends BaseController {

	public function index()
	{
		if (Auth::check())
		{
			return Redirect::to('wish'); 
		}
		else{
			return View::make('index');			
		}

	}
	
	public function register()
	{
		return View::make('register');
	}

	public function login()
	{
		return View::make('login');
	}
	/*
	public function logout()
	{
		return View::make('logout');
	}
	*/
}
