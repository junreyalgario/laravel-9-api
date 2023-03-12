<?php

namespace App\Services;

use App\Contracts\BaseService;
use App\Contracts\Services\ProductServiceInterface;

class ProductService extends BaseService implements ProductServiceInterface
{
	/**
	 * Paginate resource
	 */
	public function paginate($item_per_page = null)
	{
		return 'hahaha nice one!';
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