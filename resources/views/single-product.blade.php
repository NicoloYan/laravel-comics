@extends('layouts.app')

@section('main_content')
    {{-- <h3>{{ $current_comic['id'] }}</h3> --}}
    <section class="single_product">

        <div class="container">
            <img class="poster" src="{{ $current_comic['thumb'] }}" alt="{{ $current_comic['title'] }}">
            <div class="main_info">
                <div class="comic_info">

                    <h1>{{ $current_comic['title'] }}</h1>
                    <div class="status">
                        <div class="status_left">
                            <div>U.S. Price: {{ $current_comic['price'] }}</div>
                            <div>AVAILABLE</div>
                        </div>
                        <div class="status_right">
                            Check Availability
                        </div>
                    </div>
                    <p class="description">
                        {{ $current_comic['description'] }}
                    </p>

                </div>
                <div class="ad">
                    <img src="{{ asset('img/adv.jpg') }}" alt="adv">
                </div>
            </div>
        </div>

    </section>
@endsection