@extends('master')
@section('content')
<head>

  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.3/css/dataTables.bootstrap5.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.3/css/jquery.dataTables.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.3/css/jquery.dataTables.min.css">
  <link href="https://cdn.datatables.net/v/dt/dt-1.13.3/b-2.3.5/rg-1.3.0/rr-1.3.2/sb-1.4.0/sp-2.1.1/sl-1.6.1/datatables.min.css"/>
 <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<style>
    label{
         color: #31087B;
font-size: large;
    font-weight: bold;
    font -family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        }
</style>

<div class="container">
    <div class="row my-5">
        <div class="col-md-8 mx-auto">
            <div class="card bg-light">
                <h3 class="card-header">modifier une voiture</h3>
                <div class="card-body">
                    <form action="{{route('cars.update',$car->id)}}" method="post" enctype="multipart/form-data">
                        {{method_field('put')}}
                        @csrf
                        <div class="form-group">
                            <label for="" >Marque :</label><br>
                            <center><input type="text" name="marque" value="{{$car->marque}}" class="form-control form-control-lg" placeholder="marque" aria-describedby="helpId" ></center>
                        </div>
                        <div class="form-group">
                            <label for="">Modele :</label>
                            <input type="text" name="modele" value="{{$car->modele}}" class="form-control form-control-lg" placeholder="modele" aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                            <label for="">Type : </label>
                            <select class="form-control form-control-lg" name="type">
                                <option value="" selected disabled>veillez choisir un type</option>
                                <option value="diesel" {{$car->type == 'diesel' ? 'selected' : ''}}>diesel</option>
                                <option value="essence" {{$car->type == 'essence' ? 'selected' : ''}}>essence</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Prix/j :</label>
                            <input type="number" name="prix_jour" value="{{$car->prix_jour}}" class="form-control form-control-lg" placeholder="prix/jr" aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                            <label for="">Dispo</label>
                            <select  class="form-control form-control-lg" name="dispo">
                                <option value="" selected disabled>veillez choisir une option</option>
                                <option value="1" {{$car->dispo ? 'selected' : ''}}>oui</option>
                                <option value="0"{{!$car->dispo ? 'selected' : ''}}>non</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <img src="{{$car->image}}" width="100" height="100"  class="img-fluid rounded">
                        </div>
                        <div class="form-group">
                            <label for="">Photos</label>
                            <input type="file" name="image" class="form-control form-control-lg" aria-describedby="helpId">
                        </div>
                        <button class="btn btn-primary" type="submit" id="butt"> valider</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
<script>$(document).ready(function () {
    $('#myTable').DataTable();
});</script>

@endsection