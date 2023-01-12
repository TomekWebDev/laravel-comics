@extends('layouts.app')

@section('main')
    <div class="cards-container d-flex flex-wrap w-100">
        @foreach ($comics as $elem)
            <div class="card w-15">
                <img class="card-img-top w-100" src="{{ $elem['thumb'] }}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">{{ $elem['title'] }}</h5>
                </div>
            </div>
        @endforeach
    </div>
@endsection
