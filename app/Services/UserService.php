<?php

namespace App\Services;

use App\Models\ {
	User
};
use App\Repositories\UserRepository;

class UserService
{
	public function index()
	{
		$repo = new UserRepository();
		return $repo->all();
	}
}