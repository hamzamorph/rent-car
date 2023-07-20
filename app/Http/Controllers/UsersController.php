<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Session;
class UsersController extends Controller
{
  public function show($id){
    return view('users.show')->withUser(User::findOrFail($id));
  }

  public function create(){
    return view('users.register');
  }


  public function register(Request $request)
  {
    $validatedData = $request->validate([
      'email' => 'required ',
      'password' => 'required',
      'name' => 'required',
      'tel' => 'required',
      'ville' => 'required',
      'cin' => 'required'
    ]);
    User::create([
      'name' => $validatedData['name'],
      'cin' => $validatedData['cin'],
      'email' => $validatedData['email'],
      'password' => Hash::make($validatedData['password']),
      'tel' => $validatedData['tel'],
      'ville' => $validatedData['ville']
    ]);
    return redirect()->route('users.login')->with('success', 'Compte créé');
  }


  public function login(){
    return view('users.login');
  }
  public function auth(Request $request){
    $this->validate($request,[
         'email'=>'required',
         'password'=>'required'
        ]);
      if(auth()->attempt(['email'=>$request->email,'password'=>$request->password])){
         return redirect()->route('cars.index');
        }
        
      else{
        return redirect()->route('users.login')->with([
         'error'=>'Email ou mot de passe est incorrect'
         ]);
      }
    
  }
        
  public function logout(){
    auth()->logout();
    return redirect()->route('cars.index');
  }

  public function end(Request  $REQUEST){
    Session::flush();
    return redirect('/login');
  }
  
}
