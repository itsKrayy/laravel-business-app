@extends('layouts.layout')

@section('content')
<div>
    @foreach ($contact as $item)
    <div class="about-content">
        <h3> {{ $item['contactlabel'] }}</h3>
    </div>
    <div class="about-content">
        <p>
            {{ $item['contact'] }}
        </p>
    </div>
    @endforeach

    <button src="/contact/feedback">FeedBack</button>
    
</div>
@endsection
