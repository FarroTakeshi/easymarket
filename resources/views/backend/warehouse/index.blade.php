@extends('backend.layout.base')

@section('content')

@if( session()->has('message') )
<div class="row">
   <div class="alert alert-success">
      {{ session('message') }}
   </div>
</div>
@endif

@if( session('sad_message') )
<div class="row">
   <div class="alert alert-danger">
      {{session('sad_message') }}
   </div>
</div>
@endif

<div class="row">
   <div class="row">
   <div class="col-xs-12">
      <h2>Manage Warehouse</h2>
   </div>
</div>

   <table class="table">
      <thead>
         <th>Name</th>
         <th>Address</th>
         <th>Actions</th>
      </thead>
      <tbody>
         <tr>
            <td>{{ $warehouse->name }}</td>
            <td>{{ $warehouse->address }}</td>
            <td>
               <a class="btn btn-default" href="{{ route('warehouse.edit', ['id' => $warehouse->id]) }}">Edit</a>
               <a class="btn btn-info" href="{{ route('warehouse.products.index', ['warehouse' => $warehouse->id]) }}">Products</a>
            </td>
         </tr>
      </tbody>
   </table>

</div>

@endsection