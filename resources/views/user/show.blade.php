@extends('layout.app')

@section('content')

    <h4>Détails de l'utilisateur</h4>

    <table class="table table-bordered">
        <tr>
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

    <div class="mt-3">
        <a href="{{ url('user/' . $user->id . '/edit') }}" class="btn btn-primary">Modifier</a>
    </div>

@endsection
