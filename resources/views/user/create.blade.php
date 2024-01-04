

@extends('layout.app')

@section('content')
<div class="container shadow mt-5" style="width: 80%;">
    <div class="row" style="">
        <h5>Ajouter un utilisateur</h5>

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

            <div class="form-group mb-3 col-md-3">
                <label for="name">Nom :</label>
                <input type="text" class="form-control border-0" id="name" placeholder="Nom" name="name" style="background-color: #f2f2f2;">
            </div>

            <div class="form-group mb-3 col-md-3">
                <label for="email">Email :</label>
                <input type="text" class="form-control border-0" id="email" placeholder="Email" name="email" style="background-color: #f2f2f2;">
            </div>

            <div class="form-group mb-3 col-md-3">
                <label for="password">Mot de passe :</label>
                <input type="password" class="form-control border-0" id="password" placeholder="Mot de passe" name="password" style="background-color: #f2f2f2;">
            </div>

            <button type="submit" class="btn btn-primary mb-4">Enregistrer</button>

        </form>
    </div>
</div>
@endsection
