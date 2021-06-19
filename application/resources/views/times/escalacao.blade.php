@extends('template.index')

@section('content')

    @foreach($times as $time)
        <ul>
        @foreach($time as $escalacao)
            <li>{{ utf8_decode($escalacao->nome) }}</li>
        @endforeach
        </ul>
        <hr />
    @endforeach

@endsection
