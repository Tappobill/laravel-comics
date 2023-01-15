@extends('layouts.app')
@section('titolo-pagina', 'DC Comics - Home')
@section('main-content')
    <div class="container">
        <div class="row">
            @foreach ($comics as $elem)
                <div class="col-2 g-5">
                    <div class="card" >
                        <img src="{{ $elem['thumb'] }}" class="card-img-top" alt="{{ $elem['title'] }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $elem['title'] }}</h5>
                            {{-- <p class="card-text">{{ $elem['description'] }}/p> --}}
                                {{-- <a href="#" class="btn btn-primary">Dettaglio fumetto</a> --}}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
