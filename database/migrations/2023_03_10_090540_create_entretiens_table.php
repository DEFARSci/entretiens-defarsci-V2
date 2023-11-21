<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntretiensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entretiens', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('prenom');
            $table->string('email')->unique();
            $table->string('telephone');
            $table->string('addresse');
            $table->string('domaine');
            $table->string('pourquoi_ce_choix');
            $table->string('participants');
            $table->string('presentation_du_Candidat');
            $table->string('connaissez_vous_defarsci');
            $table->string('comment_voyez_vous_defarsci');
            $table->string('qu_entendez_de_defarsci');
            $table->string('atouts');
            $table->string('faiblesses');
            $table->string('maladie_ou_allergie');
            $table->string('objectifs_dans_2ans');
            $table->string('mois_de_formation');
            $table->string('demarrage');
            $table->string('disponibilite_du_candidat');
            $table->string('modalite_paiement');
            $table->string('number_en_cas_d_urgence');
            $table->string('informations_supplementaires');
            $table->timestamps();
        });


          DB::statement(
            'ALTER TABLE entretiens ADD FULLTEXT fulltext_index(nom, prenom, email)'
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('entretiens');
    }
}
