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

        <div class="more_info">
            <div class="container">

                <div class="talent">
                    <h3>Talent</h3>
                    <div class="art_written">
                        <div class="art_written_left">Art by:</div>
                        <div class="art_written_right">
                            @foreach ($current_comic['artists'] as $artist)
                            {{ $artist }},
                            @endforeach
                        </div>
                    </div>
                    <div class="art_written">
                        <div class="art_written_left">Written by:</div>
                        <div class="art_written_right">
                            @foreach ($current_comic['writers'] as $writer)
                            {{ $writer }},
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="specs">
                    <h3>Specs</h3>
                    <div class="specs_details">
                        <div class="specs_details_left">Series:</div>
                        <div class="specs_details_right"><span>{{ $current_comic['series'] }}</span></div>
                    </div>
                    <div class="specs_details">
                        <div class="specs_details_left">U.S. Price:</div>
                        <div class="specs_details_right">{{ $current_comic['price'] }}</div>
                    </div>
                    <div class="specs_details">
                        <div class="specs_details_left">On Sale Date:</div>
                        <div class="specs_details_right">{{ $current_comic['sale_date'] }}</div>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection