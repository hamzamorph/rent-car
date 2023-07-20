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
  tbody,#myTable_filter,#myTable_wrapper,#data{
    background-color:#DDE6ED;
  }
  
</style>
<div id="contnent" class="p-2 p-md-1">
  <div id="contnent" class="p-2 p-md-1">
    <div class="card">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between" id="data">
            <h6 class="m-0 font-weight-bold text-black">Toutes les voiture</h6>
        </div>
        
            <table id="myTable" class="table align-items-center table-flush dataTable no-footer" aria-describedby="myTable_info">
                <thead class="thead-dark">
                    <tr>
                        <th class="sorting sorting_asc" tabindex="0" aria-controls="myTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Image: activate to sort column descending" style="width: 154.094px;">Image</th>
                        <th class="sorting" tabindex="0" aria-controls="myTable" rowspan="1" colspan="1" aria-label="Marque: activate to sort column ascending" style="width: 109.828px;">Marque</th>
                        <th class="sorting" tabindex="0" aria-controls="myTable" rowspan="1" colspan="1" aria-label="Modele: activate to sort column ascending" style="width: 101.453px;">Modele</th>
                        <th class="sorting" tabindex="0" aria-controls="myTable" rowspan="1" colspan="1" aria-label="Prix/Jour: activate to sort column ascending" style="width: 211px;">Prix/Jour</th>
                        <th class="sorting" tabindex="0" aria-controls="myTable" rowspan="1" colspan="1" aria-label="Type: activate to sort column ascending" style="width: 112.922px;">Type</th>
                        <th class="sorting" tabindex="0" aria-controls="myTable" rowspan="1" colspan="1" aria-label="Dispo: activate to sort column ascending" style="width: 125.703px;">Dispo</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($cars as $car ) 
                    <tr>
                        <td>
                            <img src="{{$car->image}}" width="80" height="80" class="mx-2 img-fluid rounded-circle ">
                        </td>
                        <td>
                            <a href="{{route('cars.show',$car->id)}}"class="btn btn-link">{{$car->marque}}</a>
                        </td>
                        <td> 
                            {{$car->modele}}
                        </td> 
                        <td id="vv">
                            <span class="badge bg-primary">Prix journee : {{$car->prix_jour}} DH</span>
                        </td>
                        <td>
                            <span class="badge bg-danger">Type : {{$car->type}}</span>
                        </td>
                        <td>
                            @if($car->dispo)
                                <span class="badge bg-success">Disponible</span>
                            @else
                                <span class="badge bg-warning">Résérvé</span>
                            @endif
                        </td>

                    </tr> 
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer"></div>
    </div>
</div>

  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
  
  <script>$(document).ready(function () {
    $('#myTable').DataTable();
});
</script>

@endsection