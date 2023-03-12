<?php

namespace App\Services;

use App\Contracts\ {
	BaseService,
	UserServiceInterface
};
use App\Models\ {
	User
};

class UserService extends BaseService implements UserServiceInterface
{
	public function paginate($item_per_page = null)
	{
		return User::paginate($item_per_page);
	}

	public function changePassword($data)
	{

	}
}