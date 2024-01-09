
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
crossorigin="anonymous" referrerpolicy="no-referrer" />


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">

<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<header class="fixed top-0 w-full bg-blue-300 text-white">
    <div class="container mx-auto">
        <h1 class="text-center text-3xl font-bold">Plateforme D'entretien</h1>
        <p class="text-center text-lg">Gestionnaire d'utilisateur</p>
    </div>
</header>
@extends('layout.app')

@section('content')

    <h4>Liste des Utilisateurs</h4>

    <!-- Formulaire de recherche -->
    <div class="py-4">
        <div class="row">

            <div class="col-md-6">
                <form action="{{ route('user.index') }}" method="GET">
                    <div class="form-group d-flex  col-md-8">
                        <input type="text" name="search" class="form-control " placeholder="Rechercher par nom ou email" value="{{ request('search') }}">
                        <button type="submit" class="btn btn-info mx-1 text-white fs-4"><i class="bi bi-search"></i></button>
                    </div>
                </form>
            </div>

            <div class="col-md-6" style="text-align: center;">

                <a href="{{ route('user.create') }}" class="btn btn-primary fw-bold"><i class="fa-solid fa-plus"></i>&nbsp;Créer un utilisateur</a>



            </div>
        </div>
    </div>
    <!-- Afficher la liste des utilisateurs -->
    <table class="table ">

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
                        <a href="{{ route('user.show', $user->id) }}" class="btn btn-success text-white"><i class="bi bi-eye fs-5"></i></a>
                        <a href="{{ route('user.edit', $user->id) }}" class="btn btn-primary"><i class="bi bi-pencil-square text-white fs-5"></i></a>
                        <form action="{{ route('user.destroy', $user->id) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"><i class="bi bi-trash fs-5"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Paginate if needed -->
    {{ $users->links() }}

@endsection
