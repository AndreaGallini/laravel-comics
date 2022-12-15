@extends('Layouts.app')

@section('content')
    <main class="jumbo_home_background">
        <div class="jumbo">
            <div class="current_series">
                <p>Current series</p>
            </div>
        </div>
        <div class="main ">
            <div class="container-lg">
                <section class="row">
                    @foreach ($comics as $comic)
                        <div class="col-2">
                            <img src="{{ $comic['thumb'] }}" alt="">
                            <p class="card_text">{{ $comic['series'] }}</p>
                        </div>
                    @endforeach
                </section>
                <section class="card_btn">
                    <button class="my_btn">Load More</button>

                </section>
            </div>

        </div>
        <div class="bottom_main text-uppercase text-white">


            <div class="container-lg bottom_main_inner">
                <section class="my_card_bottom_main">
                    <img src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}" alt="">
                    <p>digital comics</p>
                </section>
                <section class="my_card_bottom_main">
                    <img src="{{ Vite::asset('resources/img/buy-comics-merchandise.png') }}" alt="">
                    <p>dc merchandise</p>
                </section>
                <section class="my_card_bottom_main">
                    <img src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png') }}" alt="">
                    <p>subscription</p>
                </section>
                <section class="my_card_bottom_main">
                    <img src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png') }}" alt="">
                    <p>comic shop locator</p>
                </section>
                <section class="my_card_bottom_main">
                    <img class="svg" src="{{ Vite::asset('resources/img/buy-dc-power-visa.svg') }}" alt="">
                    <p>dc power visa</p>
                </section>

            </div>
        </div>
    </main>
@endsection
