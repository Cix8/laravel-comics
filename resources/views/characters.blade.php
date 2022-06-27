@extends('layout.app')

@section('title')
    DC Comics | Characters
@endsection

@section('app_contents')
    <div class="btn-home">
        <a href="{{ route('home') }}">Torna alla Home</a>
    </div>
    <div>
        <h1>Characters</h1>
    </div>
@endsection
