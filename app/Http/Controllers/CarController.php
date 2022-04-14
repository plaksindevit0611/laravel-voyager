<?php

namespace App\Http\Controllers;

use App\Services\CarService;

class CarController extends Controller
{
    private CarService $carService;

    public function __construct(CarService $carService)
    {
        $this->carService = $carService;
    }

    public function list()
    {
        $cars = $this->carService->getCars();

        return view('index', compact('cars'));
    }
}
