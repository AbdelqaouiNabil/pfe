@extends('layouts.admin')
@section('products')
    


<h1 class="h3 mb-4 text-gray-800 text-center mb-3">Admins List</h1>

                       

<!-- Content Row -->
<div class="table-responsive">
  <form action="{{route('del')}}" method="POST">
    @csrf
<table class="table table-striped">
    <tr>
  <th>Id </th>
  <th>name</th>
  <th>email</th>
  <th>Role</th>
  </tr>
   @foreach ($admins as $admin)
  <tr>
    
      <td>{{$admin->id}}</td>
      <td>{{$admin->name}}</td>
      <td>{{$admin->email}}</td>
      <td>Admin</td>
     
  </tr>
  @endforeach
  </table> 
</form>
 
</div>

  @endsection