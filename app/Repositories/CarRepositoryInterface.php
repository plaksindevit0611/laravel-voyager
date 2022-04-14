<?php

namespace App\Repositories;

use Illuminate\Contracts\Pagination\Paginator;

interface CarRepositoryInterface
{
    public function list(): Paginator;
}
