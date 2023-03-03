@extends('layouts.layout')
@section('content')
<div class="container">
    <h1>Products</h1>
</div>
<div class="container">
    @foreach ($products as $item)
    <div class="contents-container">
        <a href="" class="text-decoration-none">
            <h2>{{ $item['productTitle'] }}</h2>
        </a>
        <p>
            {{ $item->desc }}
        </p>
    </div>
    @endforeach
</div>
@endsection