@extends('master')

@section('content')
@include('includes.messages')

<head>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">

</head>
<style>
    .alert{
        background-color:#78261f;
        width:19.6cm;
        margin-left:5cm;
        font-weight: bold;
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        color:azure;
    }
 #jj{
    background-color:#DDE6ED;
 }
 label{
    color: #31087B;
    font-size: large;
    font-weight: bold;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;

 }
 #email,#password,#ville,#tel,#name,#cin{
    /* background-color:#E3F2C1; */
    border-style:inset;
    border-color:#FFF8DE;
    width:10cm;
 }
 #butt{
    background-color:#7C96AB;
    width:5cm;
    border:none;
    color: antiquewhite;
    font-size: large;
    font-weight: bold;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
 }
 #conn{
    color: #31087B;
    font-weight: bold;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
 }
</style>
<div class="row my-4">
    <div class="col-md-8 mx-auto">
        <div class="card border border-second shadow-sm pt-5" id="jj">
            <h3 class="card-header" id="conn">Inscription</h3>
            <div class="card-body">
                <form action={{route('users.register')}} method="Post">
                    @csrf
                    
                    <div class="form-group">
                        <tr>
                            <td><label for="name">Nom & Prénom :</label></td>
                            <center><td><input type="text" name="name" id="name" class="form-group" placeholder="Entrez Votre Nom et Prenom" aria-describedby="helpId"></td></center>
                        </tr>
                    </div>
                    <div class="form-group">
                        <tr>
                            <td><label for="cin">CIN :</label></td>
                            <center><td><input type="text" name="cin" id="cin" class="form-group" placeholder="Entrez Votre CIN" aria-describedby="helpId"></td></center>
                        </tr>
                    </div>
                    <div class="form-group">
                        <tr>
                            <td><label for="tel">Téléphone :</label></td>
                            <center><td><input type="tel" name="tel" id="tel" class="form-group"placeholder="Entrez Votre Numero de Téléphone" aria-describedby="helpId"></td></center>
                        </tr>
                    </div>
                    <div class="form-group">
                        <tr>
                            <td><label for="ville">Ville :</label></td>
                            <center><td><input type="text" name="ville" id="ville" class="form-group" placeholder="Entrez Votre ville " aria-describedby="helpId"></td></center>
                        </tr>
                    </div>

                    <div class="form-group">
                        <tr>
                            <td><label for="email">Email :</label></td><br>
                            <center><td><input type="email" name="email" id="email" class="form-group" placeholder="Entrez Votre Email" areia-describedby="helpId"></td></center>
                        </tr>
                    </div>
                    <div class="form-group">
                        <tr>
                            <td><label for="password">Mot De Passe :</label></td><br>
                            <center><td><input type="password" name="password" id="password" class="form-group" placeholder="Entrer Votre Mot De Passe" areia-describedby="helpId"></td></center>
                        </tr>
                    </div>
                    <div class="form-group">
                        <center><button type="submit" class="btn btn-primary" id="butt">Valider</button></center>
                    </div>
                </form>
        
            </div>
        </div>
    </div>
</div>

@endsection