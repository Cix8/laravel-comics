@extends('layout.app')

@section('title')
    DC Comics | Comics
@endsection

@section('app_contents')
    <div class="main-contents">
        <div class="container">
            <div class="btn-home">
                <a href="{{ route('home') }}">Torna alla Home</a>
            </div>
            <div class="comics_contents">
                <ul>
                    @foreach ($series_data as $single_data)
                        @include('components.card_comics', [$single_data])
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection
