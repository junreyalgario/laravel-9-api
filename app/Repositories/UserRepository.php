<?php

namespace App\Repositories;

use App\Models\ {
	User
};

class UserRepository extends BaseRepository
{
	/**
	 * Fetch resource list
	 */
	public function all()
	{
		return User::all();
	}
}