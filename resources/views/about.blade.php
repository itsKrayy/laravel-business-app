@extends('layouts.layout')
@section('content')
    <div class="contents-container">
        @foreach ($content as $item)
        <div class="about-content">
            <h2> {{ $item['title'] }}</h2>
        </div>
        <div class="about-content">
            <p>
                {{ $item['desc'] }}
            </p>
        </div>
        @endforeach
        
    </div>
@endsection