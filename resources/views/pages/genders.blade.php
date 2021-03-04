@extends('template.main')

@section('content')
    <div class="container" class="mt-5">
        <h1 class="my-5">Les genres</h1>
        <a class="btn btn-success my-5" href="/genders/create">Ajouter un genre</a>
        <div>
            <table class="table">
                <thead class="bg-dark text-light">
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Genre</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($genders as $item)
                    <tr>
                        <th scope="row">{{$item->id}}</th>
                        <td>{{$item->genre}}</td>
                    </tr>
                  @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection