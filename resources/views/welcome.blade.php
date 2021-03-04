@extends('template.main')

@section('content')
    <div class="container" class="mt-5">
        <div>
            <h1 class="my-2">Les membres</h1>
            <a href="/members/create" class="btn btn-success mb-3">Ajouter un membre</a>
        </div>


        <div class="row d-flex flex-wrap">
            @foreach ($members as $item)
                <!-- Card Wider -->
                <div class="card card-cascade wider mx-2" style="width: 18rem">

                    <!-- Card image -->
                    <div class="view view-cascade overlay">
                        @if (($item->genre == "Femme") || ($item->genre == "femme"))
                            <img src="{{asset('storage/img/'.$item->src)}}" width="100%" height="400px" alt="" class="border border-primary">
                        @elseif (($item->genre == "Homme") || ($item->genre == "homme"))
                            <img src="{{asset('storage/img/'.$item->src)}}" width="100%" height="400px" alt="" class="border border-danger">
                        @else
                            <img src="{{asset('storage/img/'.$item->src)}}" width="100%" height="400px" alt="" class="border rounded-circle">
                        @endif 
                    </div>

                    <!-- Card content -->
                    <div class="card-body card-body-cascade text-center">
                        {{-- Span --}}
                        <span>{{$item->id}}</span>
                        <!-- Title -->
                        <h4 class="card-title"><strong>Nom : {{$item->nom}}</strong></h4>
                        <!-- Subtitle -->
                        <h5 class="text-primary pb-2"><strong>Genre : {{$item->genre}}</strong></h5>
                        <!-- Text -->
                        <p class="card-text">Age : {{$item->age}}</p>

                        <a href="/download-img/{{$item->id}}" class="btn btn-info">DOWLOAD</a>
                    </div>
                </div>
            @endforeach
        </div>               
    </div>
@endsection