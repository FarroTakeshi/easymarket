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
      <h2>Products</h2>
   </div>
</div>

   <table class="table">
      <thead>
         <th>Name</th>
         <th>Price</th>
         <th>Stock</th>
         <th>Area</th>
         <th>Actions</th>
      </thead>
      <tbody>
         @foreach($products as $product)
         <tr>
            <td>{{ $product->name }}</td>
            <td> S/. {{ $product->price }}</td>
            <td>{{ $product->stock }}</td>
            <td>{{ $product->area->name }}</td>
            <td>
               <a class="btn btn-default" href="{{ route('warehouse.products.edit', ['product' => $product->id, 'warehouse' => 1 ]) }}">Edit</a>
               <a class="btn btn-danger" href="{{ route('warehouse.products.delete', ['warehouse' => 1 , 'product' => $product->id]) }}" onclick="return confirm('Are you sure you want to delete this product?')">Delete</a>
            </td>
         </tr>
         @endforeach
      </tbody>
   </table>

</div>

<div class="row">
   <div class="form-group">
      <a href="{{ route('warehouse.products.create', ['warehouse' => 1 ]) }}" class="btn btn-success">Add</a>
   </div>
</div>

@endsection