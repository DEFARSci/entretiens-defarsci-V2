<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\Entretien;

class EntretienApiController extends Controller
{
    /**
     * Affiche la liste des entretiens.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $entretiens = Entretien::orderBy('id', 'desc')->get();
        return response()->json(['entretiens' => $entretiens]);
    }

    /**
     * Affiche les détails d'un entretien spécifique.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        $entretien = Entretien::find($id);

        if (!$entretien) {
            return response()->json(['message' => 'Entretien non trouvé.'], 404);
        }

        return response()->json(['entretien' => $entretien]);
    }

    /**
     * Crée un nouvel entretien.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'email' => 'required|email|unique:entretiens,email',
            'telephone' => 'required|string|max:20',
            'addresse' => 'required|string|max:255',
            'domaine' => 'required|string|max:255',
            'pourquoi_ce_choix' => 'required|string',
            'participants' => 'required|string',
            'presentation_du_candidat' => 'required|string',
            'connaissez_vous_defarsci' => 'required|string',
            'comment_voyez_vous_defarsci' => 'required|string',
            'qu_entendez_de_defarsci' => 'required|string',
            'atouts' => 'required|string',
            'faiblesses' => 'required|string',
            'maladie_ou_allergie' => 'required|string',
            'objectifs_dans_2ans' => 'required|string',
            'mois_de_formation' => 'required|string',
            'demarrage' => 'required|string',
            'disponibilite_du_candidat' => 'required|string',
            'modalite_paiement' => 'required|string',
            'number_en_cas_d_urgence' => 'required|string|max:20',
            'informations_supplementaires' => 'nullable|string',
        ]);

        $entretien = Entretien::create($request->all());

        return response()->json(['message' => 'Entretien créé avec succès.', 'entretien' => $entretien], 201);
    }

    /**
     * Met à jour un entretien existant.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, $id)
    {
        $entretien = Entretien::find($id);

        if (!$entretien) {
            return response()->json(['message' => 'Entretien non trouvé.'], 404);
        }

        $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'email' => 'required|email|',
            'telephone' => 'required|string|max:20',
            'addresse' => 'required|string|max:255',
            'domaine' => 'required|string|max:255',
            'pourquoi_ce_choix' => 'required|string',
            'participants' => 'required|string',
            'presentation_du_candidat' => 'required|string',
            'connaissez_vous_defarsci' => 'required|string',
            'comment_voyez_vous_defarsci' => 'required|string',
            'qu_entendez_de_defarsci' => 'required|string',
            'atouts' => 'required|string',
            'faiblesses' => 'required|string',
            'maladie_ou_allergie' => 'required|string',
            'objectifs_dans_2ans' => 'required|string',
            'mois_de_formation' => 'required|string',
            'demarrage' => 'required|string',
            'disponibilite_du_candidat' => 'required|string',
            'modalite_paiement' => 'required|string',
            'number_en_cas_d_urgence' => 'required|string|max:20',
            'informations_supplementaires' => 'nullable|string',
        ]);

        $entretien->update($request->all());

        return response()->json(['message' => 'Entretien mis à jour avec succès.', 'entretien' => $entretien]);
    }

    /**
     * Supprime un entretien spécifique.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        $entretien = Entretien::find($id);

        if (!$entretien) {
            return response()->json(['message' => 'Entretien non trouvé.'], 404);
        }

        $entretien->delete();

        return response()->json(['message' => 'Entretien supprimé avec succès.']);
    }
}
