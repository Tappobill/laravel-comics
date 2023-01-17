@extends('layouts.app')
@section('titolo-pagina', 'DC Comics - Show Comics')
@section('main-content')
    <div class="container">
        <div class="card black border border-0">
            <img class="w-25" src="{{ $singolo_elemento['thumb'] }}" class="card-img-top"
                alt="{{ $singolo_elemento['title'] }}">
            <div class="card-body">
                <h5 class="card-title">{{ $singolo_elemento['title'] }}</h5>
                <div class="green d-flex text-nowrap align-items-center">
                    <div>
                        <h6 class="p-2">U.S. Price:{{ $singolo_elemento['price'] }}</h6>
                    </div>
                    <div class="d-flex justify-content-end w-100">
                        <h6 class="p-2">AVAILABLE</h6>
                    </div>
                    <div class="p-2">
                        <h6>Check Availability</h6>
                    </div>
                </div>
                <p class="mb-5">{{ $singolo_elemento['description'] }}</p>
                <div class="container">
                    <div class="row">
                        <div class="col-6">
                            <h3>
                                Talent
                            </h3>
                            <div  class="border-bottom mt-5">
                            </div>
                            <div class="d-flex justify-content-between mt-4">
                                <div class="w-100">
                                    ART BY:
                                </div>
                                <div class="w-100">
                                    @foreach ($singolo_elemento['artists'] as $artists )
                                        <span>{{$artists}}</span>
                                    @endforeach
                                </div>
                            </div>
                            <div  class="border-bottom mt-5">
                            </div>
                            <div class="d-flex justify-content-between mt-4">
                                <div class="w-100">
                                    WRITTEN BY:
                                </div>
                                <div class="w-100">
                                    @foreach ($singolo_elemento['writers'] as $writers )
                                        <span>{{$writers}}</span>
                                    @endforeach
                                </div>
                            </div>
                            <div  class="border-bottom mt-5">
                            </div>
                        </div>
                        <div class="col-6">
                            <h3>
                                Specs
                            </h3>
                            <div  class="border-bottom mt-5">
                            </div>
                            <div class="d-flex justify-content-between mt-5">
                                <div>
                                    SERIES:
                                </div>
                                <div class="w-50">
                                    {{$singolo_elemento['series']}}
                                </div>
                            </div>
                            <div  class="border-bottom mt-5">
                            </div>
                            <div class="d-flex justify-content-between mt-5">
                                <div>
                                    U.S. PRICE:
                                </div>
                                <div class="w-50">
                                    {{$singolo_elemento['price']}}
                                </div>
                            </div>
                            <div  class="border-bottom mt-5">
                            </div>
                            <div class="d-flex justify-content-between mt-5">
                                <div>
                                    ON SALE DATE:
                                </div>
                                <div class="w-50">
                                    {{$singolo_elemento['sale_date']}}
                                </div>
                            </div>
                            <div  class="border-bottom mt-5">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
