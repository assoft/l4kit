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
		$this->theme = Theme::uses('admin')->layout('dashboard');
	}

	public function index()
	{
		$this->theme->layout('dashboard');
		$this->theme->set('title', 'Tavz-Der Yönetim Paneli');
		return $this->theme->of('admin.dashboard')->render();
	}

	public function getLogin()
	{
		//-------------------------------
		if(Sentry::check() && Sentry::getUser()->inGroup(Sentry::findGroupById(1)))
			return $this->theme->of('admin.message')->layout('login')->render();
		//-------------------------------
		$this->theme->layout('login');
		return $this->theme->of('admin.login')->render();
		//return Redirect::intended('admin');
	}

	public function postLogin()
	{
		$credentials = [
			'email' => Input::get('email'),
			'password' => Input::get('password')
		];
		try{
			$user = Sentry::authenticate($credentials, false);
			if(Sentry::check())
				return Redirect::intended('admin');
		}
		catch(\Exception $e)
		{
			return $e->getMessage(); //Redirect::to('admin/login');
		}
	}

	public function logout()
	{
		Sentry::logout();
		return Redirect::to('/');
	}

}
