@extends('layouts.adminlayout')

@section('content')
<div class="card">
    <div class="card-body">
  
        <form action="{{url('/admin')}}" method="post">
            {!! csrf_field() !!}
            <input type="hidden" name="id" id="id" id="id" />
            <label>Product Title</label></br>
            <input type="text" name="productTitle" id="productTitle"  class="form-control"></br>
            <label>Description</label></br>
            <input type="paragraph" name="desc" id="desc" class="form-control"></br>
            <input type="submit" value="Save" class="btn btn-success"></br>
        </form>

    </div>
</div>
@endsection