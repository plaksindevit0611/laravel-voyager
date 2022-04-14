<?php

namespace App\Repositories;

use App\Models\Car;
use Illuminate\Contracts\Pagination\Paginator;

class CarRepository implements CarRepositoryInterface
{
    const PER_PAGE = 15;

    public function list(): Paginator
    {
        return Car::query()
            ->simplePaginate(self::PER_PAGE);
    }
}
