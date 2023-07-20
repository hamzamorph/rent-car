@extends('master')

@section('content')

<head>

  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.3/css/dataTables.bootstrap5.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.3/css/jquery.dataTables.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.3/css/jquery.dataTables.min.css">
  <link href="https://cdn.datatables.net/v/dt/dt-1.13.3/b-2.3.5/rg-1.3.0/rr-1.3.2/sb-1.4.0/sp-2.1.1/sl-1.6.1/datatables.min.css"/>

</head>
<style>
  tbody,#myTable_filter,#myTable_wrapper, #data,#text{
    background-color:#D6E8DB;
  }
</style>
 <!-- Simple Tables -->
<div>
  <div class="card" id="text">
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
      <h6 class="m-0 font-weight-bold text-primary" >{{$car->marque}}</h6>
    </div>
  </div>
  <table id="myTable" class="table align-items-center table-flush" >
    <thead class="thead-dark">
        <tr>
            <th>image</th>
            <th>modele</th>
            <th>prix/jour</th>
            <th>type</th>
            <th>dispo</th>
        </tr>
    </thead>
    <tbody>
        <tr>
          <td><img src="{{$car->image}}" width="100" height="100" class="mx-2 img-fluid rounded "></td>
          <td> {{$car->modele}}</td>
          <td><span class="badge bg-primary">Prix journee : {{$car->prix_jour}} DH</span></td>
          <td><span class="badge bg-danger">Type : {{$car->type}}</span></td>
          <td>
              @if($car->dispo)
                  @auth
                      <a href={{route('command.create',$car->id)}} class="btn btn-primary">Résérver</a>
                  @else
                      <a href={{route('users.login')}} class="btn btn-primary">Résérver</a>

                  @endauth
              @else   
                  <span class="badge bg-warning">Reservé</span>
              @endif
          </td>
        </tr>
    </tbody>
  </table>
  <div class="card-footer"></div>
</div>
<script>

$(document).ready(function () {

$('#myTable').DataTable();

});

</script>

 <script src="https://cdn.datatables.net/v/dt/dt-1.13.3/b-2.3.5/rg-1.3.0/rr-1.3.2/sb-1.4.0/sp-2.1.1/sl-1.6.1/datatables.min.js"></script>

<script src="https://cdn.datatables.net/1.13.3/js/dataTables.bootstrap5.min.js"></script>
 <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
 <script src="https://cdn.datatables.net/1.13.3/js/jquery.dataTables.min.js"></script>
@endsection