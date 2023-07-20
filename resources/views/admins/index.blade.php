@extends('master')
@section('content')

@include('includes.messages')
<head>
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.3/css/dataTables.bootstrap5.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.3/css/jquery.dataTables.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.3/css/jquery.dataTables.min.css">
  <link href="https://cdn.datatables.net/v/dt/dt-1.13.3/b-2.3.5/rg-1.3.0/rr-1.3.2/sb-1.4.0/sp-2.1.1/sl-1.6.1/datatables.min.css"/>
 <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<style>
  tbody,#myTable_filter,#myTable_wrapper,#data{
    background-color:#DDE6ED;
  }

  .alert{
        background-color:#73BBC9;
        width:19.6cm;
        margin-left:5cm;
        font-weight: bold;
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    }

    label{
        color: #31087B;
font-size: large;
font-weight: bold;
font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    }
  
</style>
<div id="contnent" class="p-2 p-md-1">
  <div id="contnent" class="p-2 p-md-1">
    <div class="form-group">
        <button class="btn btn-primary" data-toggle="modal" data-target="#addCar"><i class="fa fa-plus"></i></button>
    </div>
    <div class="card">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between" id="data">
            <h6 class="m-0 font-weight-bold text-black">Toutes les voiture</h6>
        </div>
        
            <table id="myTable" class="table align-items-center table-flush dataTable no-footer" aria-describedby="myTable_info">
                <thead class="thead-dark">
                    <tr>
                        <th style="width: 50px;">Id</th>
                        <th style="width: 50px;">Marque</th>
                        <th style="width: 50px;">Modele</th>
                        <th style="width: 50px;">Type</th>
                        <th style="width: 50px;">Prix/jour</th>
                        <th style="width: 75px;">Dispo</th>
                        <th style="width: 50px;">Image</th>
                        <th style="width: 100px;">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($cars as $car)
                        <tr>
                            <td>{{$car->id}}</td>
                            <td>{{$car->marque}}</td>
                            <td>{{$car->modele}}</td>
                            <td>{{$car->type}}</td>
                            <td>{{$car->prix_jour}}</td>
                            <td>
                                @if($car->dispo)
                                    <span class="badge bg-success">
                                        Disponible
                                    </span>
                                @else
                                <span class="badge bg-warning">
                                        Réservé
                                    </span>
                                @endif
                            </td>
                            <td>
                                <img src="{{$car->image}}" width="60" height="60" class="img-fluid rounded">
                            </td> 
                            <td class="d-flex flex-row justify-content-center">
                                <a href="{{route('cars.edit',$car->id)}}" class="btn btn-warning mr-2"><i class="fa fa-edit"></i></a>
                                <form action="{{route('cars.destroy',$car->id)}}" method="post">
                                    @csrf
                                    {{method_field('delete')}}
                                    <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer"></div>
    </div>
</div>

<div class="modal fade" id="addCar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Ajouter Une Voiture</h1>
      </div>
      <div class="modal-body">
        <form action="{{route('cars.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="">Marque :</label>
                <input type="text" name="marque" class="form-control form-control-lg" placeholder="marque" aria-describedby="helpId">
            </div>
            <div class="form-group">
                <label for="">Modele :</label>
                <input type="text" name="modele" class="form-control form-control-lg" placeholder="modele" aria-describedby="helpId">
            </div>
            <div class="form-group">
                <label for="">Type :</label>
                <select class="form-control form-control-lg" name="type">
                    <option value="" selected disabled>Veillez Choisir Un Type</option>
                    <option value="diesel">Diesel</option>
                    <option value="essence">Essence</option>
                </select>
            </div>
            <div class="form-group">
                <label for="">Rrix/J</label>
                <input type="number" name="prix_jour" class="form-control form-control-lg" placeholder="prix/jr" aria-describedby="helpId">
            </div>
            <div class="form-group">
                <label for="">Dispo :</label>
                <select class="form-control form-control-lg" name="dispo">
                    <option value="" selected disabled>veillez choisir une option</option>
                    <option value="1">oui</option>
                    <option value="0">non</option>
                </select>
            </div>
            <div class="form-group">
                <label for="">Photos :</label>
                <input type="file" name="image" class="form-control form-control-lg" aria-describedby="helpId">
            </div>
            <button class="btn btn-primary" type="submit">Valider</button>
        </form>
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