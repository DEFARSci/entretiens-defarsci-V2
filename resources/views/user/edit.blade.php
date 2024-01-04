<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <header class="fixed top-0 w-full bg-blue-300 text-white  ">
    <div class="container mx-auto">
        <h1 class="text-center text-3xl font-bold">Plateforme D'entretien</h1>
        <p class="text-center text-lg">Modifier les champs svp !!</p>
    </div>
</header>
<style>
    .shadow{
        margin-top: 30vh;
    }
</style>
@extends('layout.app')

@section('content')
<div class="container shadow">
    <div class="row mx-5">
        <h4 class="mt-4 text-center fw-bold text-muted">Modifier un utilisateur</h4>

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

            <div class="form-group fw-bold text-muted mb-3 col-md-6">
                <label for="name">Nom :</label>
                <input type="text" class="form-control border-0" id="name" placeholder="Nom" name="name" value="{{ $user->name }}" style="background-color: #f2f2f2;">
            </div>

            <div class="form-group fw-bold text-muted mb-3 col-md-6">
                <label for="email ">Email :</label>
                <input type="text" class="form-control border-0" id="email" placeholder="Email" name="email" value="{{ $user->email }}" style="background-color: #f2f2f2;">
            </div>

            <div class="form-group fw-bold text-muted mb-3 col-md-6">
                <label for="password">Nouveau mot de passe :</label>
                <input type="password" class="form-control border-0" id="password" placeholder="Nouveau mot de passe" name="password" style="background-color: #f2f2f2;">
            </div>

            <div class="form-group fw-bold text-muted mb-3 col-md-6">
                <label for="password_confirmation">Confirmer le mot de passe :</label>
                <input type="password" class="form-control border-0" id="password_confirmation" placeholder="Confirmer le mot de passe" name="password_confirmation" style="background-color: #f2f2f2;">
            </div>

            <button type="submit" class="btn btn-primary fw-bold  mb-4">Enregistrer</button>


        </form>
    </div>
</div>


@endsection
