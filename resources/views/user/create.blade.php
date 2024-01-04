


@extends('layout.app')

@section('content')
<div class="container shadow mt-5" style="width: 80%;">
    <div class="row" style="">
        <h5>Ajouter un utilisateur</h5>

        @if ($errors->any())
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<header class="fixed top-0 w-full bg-blue-300 text-white">
    <div class="container mx-auto">
        <h1 class="text-center text-3xl font-bold">Plateforme D'entretien</h1>
        <p class="text-center text-lg">Renseignez vos credentiels svp !!</p>
    </div>
</header>
<style>
    .shadow{
        margin-top: 20vh;
    }
</style>
@extends('layout.app')

@section('content')
@if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
<div class="container shadow " style="width: 70%; display: flex; padding-right:20px;">
        <div class="flex-none w-50 relative">
            <img src="/profil.jpg" alt="" class="absolute inset-0 w-full h-full object-cover p-4" loading="lazy" />
        </div>

        <div class="mt-4">
            
        <form action="{{ url('user') }}" method="POST" class="">
        <h5>Ajouter utilisateur</h5>
            @csrf

            <div class="form-group mb-3 col-md-12">
                <label for="name">Nom :</label>
                <input type="text" class="form-control border-0" id="name" placeholder="Nom" name="name" style="background-color: #f2f2f2;">
            </div>

            <div class="form-group mb-3 col-md-12">
                <label for="email">Email :</label>
                <input type="text" class="form-control border-0" id="email" placeholder="Email" name="email" style="background-color: #f2f2f2;">
            </div>

            <div class="form-group mb-3 col-md-12">
                <label for="password">Mot de passe :</label>
                <input type="password" class="form-control border-0" id="password" placeholder="Mot de passe" name="password" style="background-color: #f2f2f2;">
            </div>

            <button type="submit" class="btn btn-primary mb-4">Enregistrer</button>

        </form>
        </div>
    </div>
</div>
@endsection
