@extends('layouts.app')
@section('titolo-pagina', 'DC Comics - Home')
@section('main-content')
    <div class="container">
        <div class="row">
            @foreach ($comics as $id => $elem)
                <div class="col-2 g-5">
                    <div class="card black border border-0">
                        <a href="{{route('show.comics', compact('id') )}}" class="btn">
                            <img src="{{ $elem['thumb'] }}" class="card-img-top" alt="{{ $elem['title'] }}">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title">{{ $elem['title'] }}</h5>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
