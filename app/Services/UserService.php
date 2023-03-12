<?php

namespace App\Services;

use App\Contracts\BaseService;
use App\Contracts\Services\UserServiceInterface;
use App\Models\ {
	User
};

class UserService extends BaseService implements UserServiceInterface
{
	/**
	 * Paginate resource list
	 */
	public function paginate($item_per_page = null)
	{
		return User::paginate($item_per_page);
	}

	/**
	 * Change user password
	 */
	public function changePassword($data)
	{
		
	}
}