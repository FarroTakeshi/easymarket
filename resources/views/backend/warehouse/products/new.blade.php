@extends('backend.layout.base')

@section('content')

<div class="row">
   <div class="col-xs-12">
      <h2>Register Product</h2>
   </div>
</div>

@include('backend.show_errors')

<div class="row">
   <form class="form-horizontal" method="POST">
      {!! csrf_field() !!}

      <div class="form-container">

         <!-- Start name -->
         <div class="form-group">

            <div class="col-xs-3 col-xs-offset-1 col-sm-2">
               <label class="control-label">Name</label>
            </div>

            <div class="col-xs-6 col-sm-8 col-lg-6">
               <input type="text" class="form-control" name="name" placeholder="Enter the name of the new product" value="{{ old('name') }}">
            </div>

         </div>
         <!-- End name -->

         <!-- Start price -->
         <div class="form-group">

            <div class="col-xs-3 col-xs-offset-1 col-sm-2">
               <label class="control-label">Price (S/.)</label>
            </div>

            <div class="col-xs-6 col-sm-8 col-lg-6">
               <input type="text" class="form-control" name="price" placeholder="Enter the price of the new product" value="{{ old('price') }}">
            </div>

         </div>
         <!-- End price -->

         <!-- Start stock -->
         <div class="form-group">

            <div class="col-xs-3 col-xs-offset-1 col-sm-2">
               <label class="control-label">Stock</label>
            </div>

            <div class="col-xs-6 col-sm-8 col-lg-6">
               <input type="text" class="form-control" name="stock" placeholder="Enter the stock of the new product" value="{{ old('stock') }}">
            </div>

         </div>
         <!-- End stock -->

         <!-- Start description -->
         <div class="form-group">

            <div class="col-xs-3 col-xs-offset-1 col-sm-2">
               <label class="control-label">Description</label>
            </div>

            <div class="col-xs-6 col-sm-8 col-lg-6">
               <textarea class="form-control" name="description" placeholder="Enter the description of the new product" rows="5"><?php echo(old('description'));?></textarea>
            </div>

         </div>
         <!-- End description -->

         <!-- Start area -->
         <div class="form-group">

            <div class="col-xs-3 col-xs-offset-1 col-sm-2">
               <label class="control-label">Area</label>
            </div>

            <div class="col-xs-6 col-sm-8 col-lg-6">
               <select class="form-control" name="area" id="area">
                  <option value="">Select area</option>
                  @foreach($areas as $area)
                     <option value={{ $area->id }} {{ ( old('area') == $area->id) ? 'selected' : '' }}>{{ $area->name }}</option>
                  @endforeach
               </select>
            </div>

         </div>
         <!-- End area -->

         <!-- Start register -->
         <div class="form-group">

            <div class="col-xs-6 col-xs-offset-1">
               <button class="btn btn-primary" name="register_button" type="submit" value="register">Register</button>
            </div>

         </div>
         <!-- End register -->

      </div>

   </form>
</div>

@endsection