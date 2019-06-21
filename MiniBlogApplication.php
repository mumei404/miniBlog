<?php

class MiniBlogApplcation extends Application
{
	protected $login_action = ['account', 'signin'];

	public function getRootUrl()
	{
		return dirname(__FILE__);
	}

	protected function registerRoutes()
	{
		return [];
	}

	protected function configure()
	{
		$this->db_manager->connect('master', [
			'dsn' => 'mysql:dbname=mini_blog;host=localhost;port=3306',
			'user' => 'shimazaki_mac',
			'password' => 'Gurasefu1!',
		]);
	}
}
