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

    <div class="cta_section">
        <div class="container">

            <div class="cta_card">
                <div class="card_img">
                    <img src="{{ asset('img/buy-comics-digital-comics.png') }}" alt="digital comics">
                </div>
                <div class="cta_text">
                    DIGITAL COMICS
                </div>
            </div>

            <div class="cta_card">
                <div class="card_img">
                    <img src="{{ asset('img/buy-comics-merchandise.png') }}" alt="digital comics">
                </div>
                <div class="cta_text">
                    DC MERCHANDISE
                </div>
            </div>

            <div class="cta_card">
                <div class="card_img">
                    <img src="{{ asset('img/buy-comics-subscriptions.png') }}" alt="digital comics">
                </div>
                <div class="cta_text">
                    SUBSCRIPTION
                </div>
            </div>

            <div class="cta_card">
                <div class="card_img">
                    <img src="{{ asset('img/buy-comics-shop-locator.png') }}" alt="digital comics">
                </div>
                <div class="cta_text">
                    COMIC SHOP LOCATOR
                </div>
            </div>

            <div class="cta_card">
                <div class="card_img">
                    <img src="{{ asset('img/buy-dc-power-visa.svg') }}" alt="digital comics">
                </div>
                <div class="cta_text">
                    DC POWER VISA
                </div>
            </div>
        </div>
    </div>
@endsection