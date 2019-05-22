@extends('layouts.app')

@section('header')
    @include('layouts.header')
@endsection

 @section('sidebar')
    @include('layouts.sidebar')
@endsection 



@section('content')
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="Descss/bootstrap.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


</head>
<body>
              
<div class="container-fluid mt-5">
  <div class="row">
    <div class="col-md-9 offset-3">
      <div class="col-md-4 offset-3">
        
          <p class="h3">Upload Image</p> 
        
      </div>
      <form name="form" class=""action="{{ Route('ImageUpload') }}" method="post" enctype="multipart/form-data">
        @csrf
      
        <div class="form-group row mt-5">
          <label for="product Name" class="col-sm-2 col-form-label">Product Name</label>
          <div class="col-sm-6">
            <input type="text" id="product_name" class="form-control{{ $errors->has('product_name') ? ' is-invalid' : '' }}" name="product_name" value="{{ old('name') }}" required autofocus>
          </div>
          @if ($errors->has('product_name'))
          <span class="invalid-feedback" role="alert">
              <strong>{{ $errors->first('product_name') }}</strong>
          </span>
      @endif 
        </div>
        <div class="form-group row">
          <label for="product Price" class="col-sm-2 col-form-label">Product Price</label>
          <div class="col-sm-6">
            <input type="number" id="product_price" class="form-control{{ $errors->has('product_price') ? ' is-invalid' : '' }}" name="product_price" value="{{ old('product_price') }}" required autofocus >
          </div>
          @if ($errors->has('product_price'))
          <span class="invalid-feedback" role="alert">
              <strong>{{ $errors->first('product_price') }}</strong>
          </span>
      @endif
        </div>
        <div class="form-group row">
          <label for="description" class="col-sm-2 col-form-label"> Description</label>
          <div class="col-sm-6">
            <textarea name="product_description"  class="form-control{{ $errors->has('product_description') ? ' is-invalid' : '' }}" name="product_description" value="{{ old('product_description') }}" required autofocus id="product_description" cols="30" rows="5"></textarea>
           </div>
           @if ($errors->has('product_description'))
           <span class="invalid-feedback" role="alert">
               <strong>{{ $errors->first('product_description') }}</strong>
           </span>
       @endif
        </div>
        <div class="form-group row">
                <label for="image" class="col-sm-2 col-form-label">Image</label>
              
            <div class="col-sm-6">
                <input type="file" id="image"name="img[]" multiple>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-4 offset-4">
            <button class="btn btn-primary">Upload</button>
           
            </div>
          </div>
      </form>
    </div>
  </div>
</div>
           
            </form>

            @if(Session::has('msg'))
            {{ Session::get('msg') }}
            
            @endif
          </div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
          </body>
          //footer
          
         
</html>
@endsection
