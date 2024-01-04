<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <header class="fixed top-0 w-full bg-blue-300 text-white ">
    <div class="container mx-auto">
        <h1 class="text-center text-3xl font-bold">Plateforme D'entretien</h1>
        <p class="text-center text-lg">voir les détails de l'utilisateurs !!</p>
    </div>
</header>
<style>
    .shadow{
        margin-top: 30vh;
    }
</style>
@extends('layout.app')

@section('content')
<div class="container shadow h-50 py-3">
    <h4>Détails de l'utilisateur</h4>

    <table class="table table-bordered">
        <tr class="">
            <th>Nom :</th>
            <td>{{ $user->name }}</td>
        </tr>

        <tr>
            <th>Email :</th>
            <td>{{ $user->email }}</td>
        </tr>

        <tr>
            <th>Mot de passe :</th>
            <td>{{ $user->password }}</td>
        </tr>
    </table>

    <div class="">
        <a href="{{ url('user/' . $user->id . '/edit') }}" class="btn btn-primary">Modifier</a>
    </div>
    </div>
@endsection
