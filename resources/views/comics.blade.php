@extends('layouts.app')

@section('main_content')
    <div class="content_section">
        <span class="current_series">CURRENT SERIES</span>
        <div class="container">

            @foreach ($comics_array as $comic)
            <div class="card">
                <img src="{{ $comic['thumb'] }}" alt="{{ $comic['series'] }}">
                <h3>{{ $comic['series'] }}</h3>
            </div>
            @endforeach

        </div>
        <div class="load_more">
            <div class="load_more_btn">
                LOAD MORE
            </div>
        </div>
    </div>
@endsection