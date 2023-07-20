<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Http\Requests\StoreCarRequest;
use App\Http\Requests\UpdateCarRequest;
use Illuminate\Http\Request;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cars = Car::all();
        return view('cars.index',['cars'=> $cars]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'marque' => 'required',
            'modele' => 'required',
            'type' => 'required',
            'prix_jour' => 'required',
            'dispo' => 'required',
            'image' => 'required',
        ]);
            $file = $request->file('image');
            $name = $file->getClientOriginalName();
            $file->move(public_path('images'),$name); 
        

        $car = new Car;
        $car->marque = $request->marque;
        $car->modele = $request->modele;
        $car->type = $request->type;
        $car->prix_jour = $request->prix_jour;
        $car->dispo = $request->dispo;
        $car->image = '/images/'.$name;
        $car->save();
        return redirect()->route('admins.index')->with(['success' => 'voiture ajouté']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Car $car)
    {
        return view('cars.show')->withCar($car);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Car $car)
    {
        return view('cars.edit')->withCar($car);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Car $car)
    {
        $request->validate([
            'marque' => 'required',
            'modele' => 'required',
            'type' => 'required',
            'prix_jour' => 'required',
            'dispo' => 'required',
            
        ]);

        // Vérifier si une nouvelle image a été téléchargée
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $name = $file->getClientOriginalName();
            $file->move(public_path('images'), $name);
            $image = '/images/' . $name;
        } else {
            $image = $car->image;
        }

        $car->marque = $request->marque;
        $car->modele = $request->modele;
        $car->type = $request->type;
        $car->prix_jour = $request->prix_jour;
        $car->dispo = $request->dispo;
        $car->image = $image; // Assurez-vous d'assigner la valeur à la propriété 'image'
        $car->update();

        return redirect()->route('admins.index')->with(['success' => 'Voiture modifiée']);
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Car $car)
    {
        $car->delete();
        return redirect()->route('admins.index')->with(['success' => 'Voiture supprimé']);
    }
}
