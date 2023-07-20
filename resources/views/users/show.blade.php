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
    #jj{
    background-color:#DDE6ED;
    }
</style>   

<div class="row my-4">
    <div class="col-md-10 mx-auto">
        <div class="card border border-second shadow-sm pt-5" id="jj">
            <center><h3 class="card-header" >User Infos</h3></center>
            <div class="container bcontent"  >
                    <div class="card col-md-12">
                        <div class="row no-gutters">
                            <div class="col-sm-2">
                                <img class="card-img" src="{{$user->image}}" alt="Suresh Dasari Card">
                            </div>
                            <div class="col-sm-7" >
                                <div class="card-body">
                                    <h5 class="card-title">{{$user->name}}</h5>
                                    <p class="card-text">Téléphone : {{$user->tel}}</p>
                                    <p class="card-text">Ville : {{$user->ville}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="col-md-12">
                        <div id="contnent" class="p-2 p-md-1">
                            <div id="contnent" class="p-2 p-md-1">
                                <div class="card">
                                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between" id="data">
                                        <h6 class="m-0 font-weight-bold text-black">les commandes</h6>
                                    </div>
                                    
                                        <table id="myTable" class="table align-items-center table-flush dataTable no-footer" aria-describedby="myTable_info">
                                            <thead class="thead-dark">
                                                <tr>
                                                    <th style="width: 50px;">Marque</th>
                                                    <th style="width: 50px;">Type</th>
                                                    <th style="width: 50px;">prix/j</th>
                                                    <th style="width: 50px;">Date Location</th>
                                                    <th style="width: 50px;">Date Retour</th>
                                                    <th style="width: 50px;">Prix TTC</th>
                                                    <th style="width: 50px;">Action</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach(auth()->user()->commands as $command)
                                                    <tr>
                                                        <td>{{App\Models\Car::findOrFail($command->car_id)->marque}}</td>
                                                        <td>{{App\Models\Car::findOrFail($command->car_id)->type}}</td>
                                                        <td>{{App\Models\Car::findOrFail($command->car_id)->prix_jour}}</td>
                                                        <td>{{$command->dateL}}</td>
                                                        <td>{{$command->dateR}}</td>
                                                        <td>{{$command->prixTTC}}</td>
                                                        <td>
                                                            <form action="{{ route('commands.delete', [$command->id, $command->car_id]) }}" method="POST">
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
                    </div>
                </div>
            </div>
        </div>
    </div>
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