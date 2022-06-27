@extends('layout.app')

@section('title')
    DC Comics | {{$series_data->all()[$id - 1]['title']}}
@endsection

@section('app_contents')
<div class="main-contents">
    <div class="container">
        <div class="btn-home">
            <a href="{{ route('home') }}">Torna alla Home</a>
        </div>
        <div class="comics_contents">
            @foreach ($series_data as $single_data)
                <ul>
                    @include('components.card_comics', [$single_data])
                </ul>
            @endforeach
        </div>
    </div>
</div>
@endsection
