<?php

class AdminController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	protected $theme;

	public function __construct()
	{
		$this->theme = Theme::uses('admin');
	}

	public function index()
	{
		$this->theme->layout('dashboard');
		return $this->theme->of('admin.dashboard')->render();
	}

	public function getLogin()
	{
		$this->theme->layout('login');
		if(!Sentry::check())
			return $this->theme->of('admin.login')->render();
		return Redirect::intended('admin');
	}

	public function postLogin()
	{
		$credentials = [
			'email' => Input::get('email'),
			'password' => Input::get('password')
		];
		try{
			$user = Sentry::authenticate($credentials, false);
			if(Sentry::check() && $user->hasAccess('admin'))
				return Redirect::to('admin');
			return Redirect::to('admin/login');
		}
		catch(\Exception $e)
		{
			return Redirect::to('admin/login');
		}
	}

	public function logout()
	{
		Sentry::logout();
		return Redirect::to('/');
	}

}
