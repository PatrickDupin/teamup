@extends('template.index')

@section('content')
    <div class="alert">
        <form>
            @csrf
            <ul class="collection">
                <li class="collection-header"><h4>Players</h4></li>
                @foreach ($atletas as $atleta)
                <li class="collection-item avatar">
                    @if($atleta->goleiro === 1)
                        <img src="https://cdn3.iconfinder.com/data/icons/football-and-soccer-4/64/goalkeeper-soccer-football-sport-avatar-512.png"
                             alt="Goleiro" class="circle ausente">
                        @else
                        <img src="data:image/png;base64,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" alt="" class="circle ausente">
                        @endif
                    <span class="title">{{ utf8_decode($atleta->nome) }}</span>
                    <br />
                        @for($i = 1; $i <= $atleta->nivel; $i++)
                        <i class="material-icons little">grade</i>
                        @endfor

                    <label class="secondary-content">
                        <input name="confirma-presenca" type="checkbox" class="filled-in" value="{{ $atleta->id }}" />
                        <span></span>
                    </label>
                </li>
                @endforeach
            </ul>
            <button class="btn waves-effect waves-light" type="submit" name="action"
                    onsubmit="return confirm('Tem certeza que deseja sortear as equipes?')">Montar a panelinha
                <i class="material-icons right" style="transform: rotate(15deg)">casino</i>
            </button>
        </form>
    </div>

@endsection
