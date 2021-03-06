<?php namespace App\Http\Controllers;

class HomeController extends Controller {

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest');
	}

	/**
	 * Show the home page to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		$isHome = true;

		return view('home', compact('isHome'));
	}

}
