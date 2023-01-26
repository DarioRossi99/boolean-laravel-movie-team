@extends('layouts.app')

@section('content')
<section class="bg-green">
    <div class="container py-5">
        <div class="row g-4">
            @foreach ($film as $filmElement)
                <div class="col-3">
                    <div class="card bg-dark text-light">
                        <img src="https://picsum.photos/200/300" 
                        class="card-img-top" alt="...">
                        <div class="card-body p-0 py-3">
                            <h3 class="card-title">Titolo: {{ $filmElement->titolo }}</h3>
                            <h5>Lingua: {{ $filmElement->lingua }}</h5>
                            <h5>Lingua originale: {{ $filmElement->lingua_originale }}</h5>
                            <h6>Data uscita: {{ $filmElement->data_rilascio }}</h6>
                            <h6>Attore Protagonista: {{ $filmElement->attore_protagonista }}</h6>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
@endsection