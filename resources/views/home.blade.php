@extends('layouts.app')
@section('content')
    <div class="container">
        <h1 class="text-center my-5">Treni in Partenza</h1>
        <div class="row g-5">
            @foreach ($trains as $train)
                <div class="col-3">
                    <div class="card">
                        <h3>{{ $train->azienda }}</h3>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
