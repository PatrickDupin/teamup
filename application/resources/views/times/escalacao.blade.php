@extends('template.index')

@section('content')
    <ul>
    @foreach($jogadores_cofirmados as $jogador)
        <li>{{ $jogador }}</li>
    @endforeach
    </ul>
@endsection
