<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCommandRequest;
use App\Http\Requests\UpdateCommandRequest;
use App\Models\Command;
use App\Models\Car;
use Carbon\Carbon;

class CommandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {


        return view('commands.index')->with(['commands' => Command::all()]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($id)
    {
        //
        return view('commands.create')->withCar(Car::findOrFail($id));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCommandRequest $request)
    {
        //
        
        // 
}
       

    /**
     * Display the specified resource.
     */
    public function show(Command $command)
    {
        return view('commands.show')->withCommand($command);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Command $command)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCommandRequest $request, Command $command)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Command $command)
    {
        //
    }
    public function deleteC($commandId, $carId)
    {
        $command = Command::findOrFail($commandId);
        if ($command->car_id == $carId) {
            $command->delete();
            return redirect()->route('users.profile', auth()->user()->id)->with(['success' => 'command suprimé']);

        }

    }
}
