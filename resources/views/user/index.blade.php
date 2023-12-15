<!-- index.blade.php -->
@extends('layout.app')

@section('content')
    <h1>Liste des Utilisateurs</h1>

    <!-- Formulaire de recherche -->
    <form action="{{ route('user.index') }}" method="GET">
        <div class="form-group">
            <input type="text" name="search" class="form-control" placeholder="Rechercher par nom ou email" value="{{ request('search') }}">
            <button type="submit" class="btn btn-primary">Rechercher</button>
        </div>
    </form>

    <!-- Afficher la liste des utilisateurs -->
    <table class="table">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        <a href="{{ route('user.show', $user->id) }}" class="btn btn-info">Voir</a>
                        <a href="{{ route('user.edit', $user->id) }}" class="btn btn-primary">Modifier</a>
                        <form action="{{ route('user.destroy', $user->id) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Paginate if needed -->
    {{ $users->links() }}
    
    <a href="{{ route('user.create') }}" class="btn btn-primary">Créer un utilisateur</a>
@endsection
