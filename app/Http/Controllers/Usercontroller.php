<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    // Affiche tous les utilisateurs
    public function index(Request $request)
    {
        $search = $request->input('search');

        // Utilisation de paginate au lieu de all
        $users = User::where(function ($query) use ($search) {
            $query->where('name', 'like', "%$search%")
                ->orWhere('email', 'like', "%$search%");
        })->paginate(5); // Utilisez le nombre souhaité par page

        return view('user.index', compact('users'));
    }

    // Affiche le formulaire de création d'un utilisateur
    public function create()
    {
        return view('user.create');
    }

    // Enregistre un nouvel utilisateur
    public function store(Request $request)
    {
        // Validation des données
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required',
        ]);

        // Crypter le mot de passe
        $request->merge(['password' => bcrypt($request->input('password'))]);

        // Création d'un nouvel utilisateur
        User::create($request->all());

        return redirect()->route('user.index')->with('success', 'Utilisateur ajouté avec succès');
    }

    // Affiche les détails d'un utilisateur spécifique
    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('user.show', compact('user'));
    }

    // Affiche le formulaire de modification d'un utilisateur
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('user.edit', compact('user'));
    }

    // Met à jour les informations d'un utilisateur
    public function update(Request $request, $id)
    {
        // Validation des données
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users,email,' . $id,
            'password' => 'required',
        ]);

        // Crypter le mot de passe
        $request->merge(['password' => bcrypt($request->input('password'))]);

        // Met à jour les informations de l'utilisateur
        $user = User::findOrFail($id);
        $user->update($request->all());

        return redirect()->route('user.index')->with('success', 'Utilisateur modifié avec succès');
    }

    // Supprime un utilisateur
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('user.index')->with('success', 'Utilisateur supprimé avec succès');
    }
}
