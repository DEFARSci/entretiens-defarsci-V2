@extends('layout.app')

@section('content')

    <h1>Ajouter un utilisateur</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ url('user') }}" method="POST">
        @csrf

        <div class="form-group mb-3">
            <label for="name">Nom :</label>
            <input type="text" class="form-control" id="name" placeholder="Nom" name="name">
        </div>

        <div class="form-group mb-3">
            <label for="email">Email :</label>
            <input type="text" class="form-control" id="email" placeholder="Email" name="email">
        </div>

        <div class="form-group mb-3">
            <label for="password">Mot de passe :</label>
            <input type="password" class="form-control" id="password" placeholder="Mot de passe" name="password">
        </div>

        <button type="submit" class="btn btn-primary">Enregistrer</button>
        
    </form>

@endsection
