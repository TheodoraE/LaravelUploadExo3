@extends('template.main')

@section('content')
    <div class="container mt-5">
        <h1>Ajouter un genre</h1>
        <form action="/genders" method="POST">
            @csrf
            <div class="form-group">
                <label for="genre">Genre :</label>
                <input type="text" name="genre" id="genre">
            </div>
            <button type="submit" class="btn btn-success">Ajouter</button>
        </form>
    </div>
@endsection