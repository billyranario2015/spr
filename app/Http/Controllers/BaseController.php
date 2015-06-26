<?php namespace App\Http\Controllers;

class BaseController extends Controller {

	protected $pagename;

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->pagename = 'home';
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view( $this->pagename );
	}
	public function registration()
	{
		return view( 'auth.register' );	
	}
	public function login()
	{
		return view( 'auth.login' );	
	}

}
