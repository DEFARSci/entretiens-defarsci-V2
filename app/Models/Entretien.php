<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entretien extends Model
{
    use HasFactory;

    
    protected $fillable = [

    	'nom',
    	'prenom',
         'email',
          'telephone',
            'addresse',
            'domaine',
            'pourquoi_ce_choix',
            'participants',
           'presentation_du_candidat',
            'connaissez_vous_defarsci',
            'comment_voyez_vous_defarsci',
            'qu_entendez_de_defarsci',
            'atouts',
            'faiblesses',
            'maladie_ou_allergie',
            'objectifs_dans_2ans',
            'mois_de_formation',
            'demarrage',
            'disponibilite_du_candidat',
            'modalite_paiement',
            'number_en_cas_d_urgence',
            'informations_supplementaires',

    ];




}
