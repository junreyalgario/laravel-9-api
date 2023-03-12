<?php

namespace App\Contracts\Repositories;

interface RepositoryInterface
{
    public function all();
    public function show($id);
}