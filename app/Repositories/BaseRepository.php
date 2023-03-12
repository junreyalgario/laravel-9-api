<?php

namespace App\Repositories;

use App\Contracts\Repositories\RepositoryInterface;


abstract class BaseRepository implements RepositoryInterface
{
	/**
	 * Fetch resource list
	 */
	public function all()
	{
		//
	}

	/**
	 * Fetch resource list
	 */
	public function show($id)
	{
		//
	}
}