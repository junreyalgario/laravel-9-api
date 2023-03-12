<?php

namespace App\Contracts\Services;

interface UserServiceInterface
{
	/**
	 * Change user password
	 */
	function changePassword($data);
}