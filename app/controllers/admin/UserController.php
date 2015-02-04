<?php

class UserController extends AdminController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$this->theme->breadcrumb()->add('Dashboard', 'admin');
		$this->theme->breadcrumb()->add('User', 'user');
		$this->theme->set('title', 'User Manager');
		$users = Cartalyst\Sentry\Users\Eloquent\User::all();

		return $this->theme->of('admin.user.index', compact('users'))->render();
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$groups = Groups::lists('name', 'id');
		$this->theme->breadcrumb()->add('Dashboard', 'admin');
		$this->theme->breadcrumb()->add('User', 'admin/user');
		$this->theme->breadcrumb()->add('New User', '#');
		$this->theme->set('title', 'Create New User');
		return $this->theme->of('admin.user.create', compact('groups'))->render();
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$avatar = Input::file('avatar');
		$filename  = time() . '.' . $avatar->getClientOriginalExtension();
		$path = public_path('uploads/images/avatar' . $filename);
		Image::make($avatar->getRealPath())->save($path);
		try {
			$user = Sentry::createUser([
				'email' => Input::get('email'),
				'password' => Input::get('password'),
				'activated' => true,
				'first_name' => Input::get('first_name'),
				'last_name' => Input::get('last_name'),
				'avatar' => 'uploads/avatar/'.$filename

			]);

			$user_group = Sentry::findGroupById(Input::get('groups'));
			$user->addGroup($user_group);
		}
		catch (Cartalyst\Sentry\Users\LoginRequiredException $e)
		{
			echo 'e-Mail adresi boş geçilemez!';
		}
		catch (Cartalyst\Sentry\Users\PasswordRequiredException $e)
		{
			echo 'Şifre alanı boş geçilemez';
		}
		catch (Cartalyst\Sentry\Users\UserExistsException $e)
		{
			echo 'Bu e-mail adresiyle kayıtlı başka bir kullanıcı mevcuttur!';
		}
		catch (Cartalyst\Sentry\Groups\GroupNotFoundException $e)
		{
			echo 'Kullanıcıyı dahil etmek istediğiniz grup bulunamadı!';
		}

	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
