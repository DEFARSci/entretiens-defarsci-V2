@extends('layout.app')

@section('content')
<div class="container  shadow">
    <div class="row mx-5">
        <h4 class="mt-5">Modifier un utilisateur</h4>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="post" action="{{ url('user/'. $user->id) }}" class="row g-3">
            @method('PATCH')
            @csrf

            <div class="form-group mb-3 col-md-6">
                <label for="name">Nom :</label>
                <input type="text" class="form-control border-0" id="name" placeholder="Nom" name="name" value="{{ $user->name }}" style="background-color: #f2f2f2;">
            </div>

            <div class="form-group mb-3 col-md-6">
                <label for="email">Email :</label>
                <input type="text" class="form-control border-0" id="email" placeholder="Email" name="email" value="{{ $user->email }}" style="background-color: #f2f2f2;">
            </div>

            <div class="form-group mb-3 col-md-6">
                <label for="password">Nouveau mot de passe :</label>
                <input type="password" class="form-control border-0" id="password" placeholder="Nouveau mot de passe" name="password" style="background-color: #f2f2f2;">
            </div>

            <div class="form-group mb-3 col-md-6">
                <label for="password_confirmation">Confirmer le mot de passe :</label>
                <input type="password" class="form-control border-0" id="password_confirmation" placeholder="Confirmer le mot de passe" name="password_confirmation" style="background-color: #f2f2f2;">
            </div>

            <button type="submit" class="btn btn-primary col-md-2 mb-4">Enregistrer</button>


        </form>
    </div>
</div>
@endsection
