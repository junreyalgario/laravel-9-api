<?php

namespace App\Contracts;

interface UserServiceInterface
{
	/**
	 * Change user password
	 */
	function changePassword($data);
}