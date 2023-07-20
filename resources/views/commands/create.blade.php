@extends('master')

@section('content')
@include('includes.messages')

<head>

  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.3/css/dataTables.bootstrap5.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.3/css/jquery.dataTables.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.3/css/jquery.dataTables.min.css">
  <link href="https://cdn.datatables.net/v/dt/dt-1.13.3/b-2.3.5/rg-1.3.0/rr-1.3.2/sb-1.4.0/sp-2.1.1/sl-1.6.1/datatables.min.css"/>

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
    background-color:#D6E8DB;
 }
 label{
    color: #31087B;
    font-size: large;
    font-weight: bold;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;

 }
 #dl,#dr{
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
            <h3 class="card-header" id="conn">Louer cette voiture</h3>
            <div class="card-body">
                <div class="row my-3">
                    <div class="col-md-12">
                        <div class="card-dark">
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold text-primary">{{$car->marque}}</h6>
                            </div>
                        </div>
                        <table id="myTable" class="table align-items-center table-flush" >
                            <tbody>
                                <tr>
                                    <td><img src="{{$car->image}}" width="100" height="100" class="mx-2 img-fluid rounded "></td>
                                    <td> {{$car->modele}}</td>
                                    <td><span class="badge bg-primary">Prix journee : {{$car->prix_jour}} DH</span></td>
                                    <td><span class="badge bg-danger">Type : {{$car->type}}</span></td>
                                    
                                </tr>
                            </tbody>
                        </table>
                        <div class="card-footer"></div>
                    </div>

                <form action="/send" method="post">
                    @csrf
                    
                    <div class="form-group">
                        <tr>
                            <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                            <td><label for="dateL">Date Location :</label></td>
                            <center><td><input type="date" name="dateL" id="dl" class="form-group" placeholder="Date De Location" aria-describedby="helpId"></td></center>
                        </tr>
                    </div>
                    <div class="form-group">
                        <tr>
                            <td><label for="dateR">Date Retour :</label></td>
                            <center><td><input type="date" name="dateR" id="dr" class="form-group" placeholder="Date De Retour" aria-describedby="helpId"></td></center>
                            <input type="hidden" name="car_id" value="{{$car->id}}">
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