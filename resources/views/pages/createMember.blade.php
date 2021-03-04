@extends('template.main')

@section('content')
    <div class="container">
            <!-- Default form login -->
        <form class="text-center border border-light p-5" action="/members" method="POST" enctype="multipart/form-data">
            @csrf
            <p class="h4 mb-4">Ajouter un membre</p>

            <div class="form-group">
                <label for="src">Image :</label>
                <input type="file" name="src" id="src">
            </div>
            <div class="form-group">
                <label for="genre">Genre :</label>
                <select name="genre" id="genre">
                    @foreach ($genders as $item)
                        <option value="{{$item->genre}}">{{$item->genre}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="nom">Nom :</label>
                <input type="text" name="nom" id="nom">
            </div>
            <div class="form-group">
                <label for="age">Age :</label>
                <input type="number" name="age" id="age">
            </div>

            <!-- Sign in button -->
                <button class="btn btn-info btn-block my-4" type="submit">Ajouter</button>

        </form>
    </div>
@endsection