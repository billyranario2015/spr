<?php namespace App\Http\Controllers;

class HomeController extends Controller {

	protected $pagename;

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest');
		$this->pagename = 'home';
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view( $this->pagename );
	}

}
