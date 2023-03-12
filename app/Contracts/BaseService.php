<?php

namespace App\Contracts;

abstract class BaseService implements ServiceInterface
{
	/**
	 * Paginate resource
	 */
	public function paginate($item_per_page = null)
	{
		//
	}

	/**
	 * Create new resource
	 */
	public function store($payload)
	{
		//
	}

	/**
	 * Update resource
	 */
	public function update($payload)
	{
		//
	}

	/**
	 * Show resource
	 */
	public function show($id)
	{
		//
	}
}