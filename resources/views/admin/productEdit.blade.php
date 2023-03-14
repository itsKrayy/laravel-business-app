@extends('layouts.adminlayout')

@section('content')
<div class="card">
    <div class="card-body">
  
        <form action="{{url('/admin/'.$product->id)}}" method="post">
            {!! csrf_field() !!}
            @method("PATCH")
            <input type="hidden" name="id" id="id" value="{{ $product->id }}" id="id" />
            <label>Product Title</label></br>
            <input type="text" name="productTitle" id="productTitle" value="{{ $product->productTitle }}"  class="form-control"></br>
            <label>Description</label></br>
            <input type="paragraph" name="desc" id="desc" value="{{ $product->desc }}" class="form-control"></br>
            <input type="submit" value="Update" class="btn btn-success"></br>
        </form>

    </div>
</div>


@endsection