@extends('layout.app')

@section('content')

    <h1>Modifier un utilisateur</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="post" action="{{ url('user/'. $user->id) }}">
        @method('PATCH')
        @csrf

        <div class="form-group mb-3">
            <label for="name">Nom :</label>
            <input type="text" class="form-control" id="name" placeholder="Nom" name="name" value="{{ $user->name }}">
        </div>

        <div class="form-group mb-3">
            <label for="email">Email :</label>
            <input type="text" class="form-control" id="email" placeholder="Email" name="email" value="{{ $user->email }}">
        </div>

        <div class="form-group mb-3">
            <label for="password">Nouveau mot de passe :</label>
            <input type="password" class="form-control" id="password" placeholder="Nouveau mot de passe" name="password">
        </div>

        <div class="form-group mb-3">
            <label for="password_confirmation">Confirmer le mot de passe :</label>
            <input type="password" class="form-control" id="password_confirmation" placeholder="Confirmer le mot de passe" name="password_confirmation">
        </div>

        <button type="submit" class="btn btn-primary">Enregistrer</button>

    
    </form>

@endsection
