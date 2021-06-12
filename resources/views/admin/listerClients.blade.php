@extends('layouts.admin')
@section('products')
    


<h1 class="h3 mb-4 text-gray-800 text-center mb-3">Normale Users List</h1>

                       

<!-- Content Row -->
<div class="table-responsive">
  <form action="{{route('del')}}" method="POST">
    @csrf
<table class="table table-striped">
    <tr>
      <th>Change User Role</th>
  <th>Id </th>
  <th>name</th>
  <th>email</th>
  <th>Role</th>
 
  </tr>
   @foreach ($clients as $client)
  <tr>
    <td><a href="" class="btn btn-primary"> Change Role</a></td>
      <td>{{$client->id}}</td>
      <td>{{$client->name}}</td>
      <td>{{$client->email}}</td>
      <td>{{$client->role}}</td>
     
  </tr>
      
  @endforeach
  </table> 
</form>
 
</div>

  @endsection