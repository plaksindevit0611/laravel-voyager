<?php

namespace App\Services;

use App\Repositories\CarRepositoryInterface;
use Illuminate\Contracts\Pagination\Paginator;

class CarService
{
    private CarRepositoryInterface $carRepository;

    public function __construct(CarRepositoryInterface $carRepository)
    {
        $this->carRepository = $carRepository;
    }

    public function getCars(): Paginator
    {
        return $this->carRepository->list();
    }
}
