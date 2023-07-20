<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

/**
 * Summary of AdminsController
 */
class AdminsController extends Controller

{
    /**
     * Summary of index
     */
    public function index()
    {
        $cars = Car::all();
        return view('admins.index', ['cars' => $cars]);
    }
}
