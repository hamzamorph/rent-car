<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Command;
use App\Models\Car;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Nette\Utils\DateTime;

class CommController extends Controller
{
    //
    public function send(Request $request)
    {
        $userId = auth()->user()->id;
        
        $this->validate($request,[
            'dateL'=>'required',
            'dateR'=>'required',

        ]);
    
        $car = Car::findOrFail($request->car_id);
        $dateLocation = new DateTime($request->dateL);
        $dateRetour = new DateTime($request->dateR);
        $jours = date_diff($dateLocation,$dateRetour);
        $prixTtc = $car->prix_jour * $jours->format('%d');

        if ($userId) {
        $commands = new Command;
        $commands->user_id = $request->user_id;
        $commands->car_id = $request->car_id;
        $commands->dateL = $request->dateL;
        $commands->dateR = $request->dateR;
        $commands->prixTTC = $prixTtc;
        $commands->save();
        
     }
     
     else{
        return redirect()->route('error')->with('message', 'L\'utilisateur n\'est pas authentifié.');

    }
        $car->update([
            'dispo' => 0
        ]);
        return redirect()->route('users.profile',auth()->user()->id)->with(['success' => 'command ajouté']);

    }

    
    
}
