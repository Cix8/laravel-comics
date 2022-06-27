@extends('layout.app')

@section('title')
    DC Comics | {{ $single_data['title'] }}
@endsection

@section('app_contents')
    <div class="main-contents">
        <div class="container">
            <div class="btn-home">
                <a href="{{ route('home') }}">Torna alla Home</a>
            </div>
            <div class="comics_contents">
                <ul>
                    @include('components.card_comics', [$single_data])
                </ul>
            </div>
        </div>
    </div>
@endsection
