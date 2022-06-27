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
                    {{-- <li class="poster">
                        <img src="{{ $data['thumb'] }}" alt="{{ $data['title'] }}">
                    </li>
                    @foreach ($data as $key => $single_value)
                        @if ($key !== 'thumb' && $key !== 'id' && gettype($single_value) !== 'array')
                            <li>
                                <strong>{{ ucfirst(str_replace('_', ' ', $key)) }}:</strong>
                                <span>{{ ucfirst($single_value) }}</span>
                            </li>
                        @elseif ($key !== 'thumb' && $key !== 'id' && gettype($single_value) === 'array')
                            <li>
                                <strong>{{ ucfirst(str_replace('_', ' ', $key)) }}:</strong>
                                <span>{{ implode(', ', array_slice($single_value, 0, 5)) }}</span>
                            </li>
                        @endif
                    @endforeach --}}
                </ul>
            @endforeach
        </div>
    </div>
</div>
@endsection
