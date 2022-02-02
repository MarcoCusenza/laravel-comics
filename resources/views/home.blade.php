@extends('layouts.base')

@section('pageTitle')
    Home
@endsection

@section('pageContent')
    @include('partials.jumbo')
    <div class="main-series">
        <div class="container">
            <div class="cur-ser blue-box">current series</div>
            <div class="container-card">
                @foreach ($comics as $comic)
                    <div class="card">
                        <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                        <div class="title">{{ $comic['title'] }}</div>
                    </div>
                @endforeach
            </div>
            <a href="#" class="blue-box">load more</a>
        </div>
    </div>
@endsection
