@extends('layout.app')

@section('title')
    DC Comics | Home
@endsection

@section('app_contents')
    <div class="banner"></div>
    <div class="main-contents">
        <div class="container">
            <div class="title">
                <h2>CURRENT SERIES</h2>
            </div>
            <div class="contents">
                <ul>
                    @foreach ($series_data as $single_data)
                        @include('components.card', [$single_data])
                    @endforeach
                </ul>
                <div class="btn-container">
                    <a href="{{ route('comics') }}">LOAD MORE</a>
                </div>
            </div>
        </div>
        <div class="main_menu">
            <nav>
                <ul>
                    @foreach ($buy_links as $key => $item)
                        @include('components.buy_card', [$key, $item])
                    @endforeach
                </ul>
            </nav>
        </div>
    </div>
@endsection
