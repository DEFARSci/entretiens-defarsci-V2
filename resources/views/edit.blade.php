@extends('layout')

@section('content')

    <style>
        .uper {
            margin-top: 40px;
        }
    </style>

    <div class="card uper">
        <div class="card-header">
            Modifier l'entretien
        </div>

        <div class="card-body">

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div><br />
            @endif

            <a href="{{ route('entretiens.edit', $entretien->id) }}" ></a>


            <form method="POST" action="{{ route('entretiens.update', $entretien->id) }}" enctype="multipart/form-data">

                @csrf
                @method('PATCH')


                <div id="step1">
                    <div class="form-group">
                        <label for="name">Prenom</label><br>
                        <input type="text" name="prenom" class="I" value="{{ $entretien->prenom }}"
                            required></input>
                    </div>
                    <div class="form-group">
                        <label for="name">Nom</label><br>
                        <input type="text" name="nom" class="I" value="{{ $entretien->nom }}"
                            value="{{ $entretien->nom }}" required></input>
                    </div>
                    <div class="form-group">
                        <label for="email">Adresse</label><br>
                        <input type="text" name="addresse" class="I" value="{{ $entretien->addresse }}"
                            required></input>
                    </div>
                    <div class="form-group">
                        <label for="name">Domaine</label><br>
                        <select id="domain" name="domaine" value="{{ $entretien->domaine }}">
                            <option value="domain1">Developpement web-mobile</option>
                            <option value="domain2">Design</option>
                            <option value="domain3">Marketing digital</option>
                            <option value="domain4">Bureautique</option>
                            <option value="domain5">Ressources humaines</option>
                            <option value="domain6">Arduino-Modélisation 3D</option>
                            <option value="domain7">Gestion de projet</option>
                            <option value="domain8">Maintenance</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1" class="form-label">Pourquoi ce choix:</label>
                        <textarea id="exampleFormControlTextarea1" rows="3" required name="pourquoi_ce_choix">
                        {{ $entretien->pourquoi_ce_choix }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1" class="form-label">Participants de l'entretien:</label>
                        <textarea id="exampleFormControlTextarea1" rows="3" required name="participants"
                            >{{ $entretien->participants }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1" class="form-label">Présentation du candidat:</label>
                        <textarea id="exampleFormControlTextarea1" rows="3" required name="presentation"
                            >{{ $entretien->presentation_du_Candidat }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1" class="form-label">Connaissez vous defar sci:</label>
                        <textarea id="exampleFormControlTextarea1" rows="3" required name="defarsci" >{{ $entretien->connaissez_vous_defarsci }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1" class="form-label">Comment voyez vous defar sci:</label>
                        <textarea id="exampleFormControlTextarea1" rows="3" required name="comment_voyez_vous_defarsci">
                            {{ $entretien->comment_voyez_vous_defarsci }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1" class="form-label">Qu'attendez vous de defar sci:</label>
                        <textarea id="exampleFormControlTextarea1" rows="3" required name="qu_entendez_de_defarsci">
                            {{ $entretien->qu_entendez_de_defarsci }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1" class="form-label">Parlez nous de vos atouts:</label>
                        <textarea id="exampleFormControlTextarea1" rows="3" required name="atouts" >{{ $entretien->atouts }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1" class="form-label">Parlez nous de vos faiblesses:</label>
                        <textarea id="exampleFormControlTextarea1" rows="3" required name="faiblesses">
                            {{ $entretien->faiblesses }}</textarea>
                    </div>

                    <br>
                    <div>
                        <button type="button" value="Suivant" onclick="showStep2()" id="bouton">suivant</button>
                    </div>
                </div>





                <div id="step2" style="display:none">


                    <fieldset class="form-group">
                        <div class="row">
                            <label for="name">
                                {{ $entretien->maladie_ou_allergie }} </label>
            <legend class="from-group">Souffrez
                                vous d'une maladie ou d'une alergie:</legend>
                                <div class="col-sm-10">

                                    <div class="from-check">
                                        <input class="from-check-input" type="radio" name="gridRadios"
                                            id="girdRadios1" value="oui" checked />
                                        <label class="from-check-label" for="gridRadios1">
                                            Oui
                                        </label>
                                    </div>

                                    <div class="from-check">
                                        <input class="from-check-input" type="radio" name="gridRadios"
                                            id="girdRadios2" value="non" checked />
                                        <label class="from-check-label" for="gridRadios1">
                                            Non
                                        </label>
                                    </div>


                                </div>


                        </div>

                    </fieldset>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1" class="form-label">Quels sont vos objectifs fixés d'ici
                            2ans:</label>
                        <textarea id="exampleFormControlTextarea1" rows="3" required name="objectifs_dans_2ans">
                            {{ $entretien->objectifs_dans_2ans }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1" class="form-label">Combien de mois voulez vous faire la
                            formation:</label>
                        <textarea id="exampleFormControlTextarea1" rows="3" required name="mois_de_formation">
                            {{ $entretien->mois_de_formation }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1" class="form-label">Quand est ce que vous allez demarrer
                            la formation:</label>
                        <textarea id="exampleFormControlTextarea1" rows="3" required name="demarrage">
                            {{ $entretien->demarrage }}</textarea>
                    </div>
                    <div class="form-group" name="horaires">
                        <h4>Présentation des horaires de travail</h4>
                        <li>Du lundi au vendredi de 9h à 18h</li>
                        <li>Petit déjeuner: 11h à 11H 45</li>
                        <li>Heure de pause: 14h à 15h</li>
                    </div>
                    <div class="form-group">
                        <h4> Disponibilté du candidat</h4>
                        <textarea id="exampleFormControlTextarea1" rows="3" required name="candidat">
                            {{ $entretien->disponibilite_du_candidat }}</textarea>
                    </div>
                    <div class="form-group">
                        <h4>Modalité du paiement de la formation</h4>
                        <input type="text" name="modalite_paiement" class="I"
                            value="{{ $entretien->modalite_paiement }}" required></input>
                    </div>
                    <div class="form-group">
                        <label for="name">Telephone</label>
                        <input type="text" name="telephone" class="I" value="{{ $entretien->telephone }}"
                            required></input>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label><br>
                        <input type="email" name="email" class="I" value="{{ $entretien->email }}"
                            required></input>
                    </div>
                    <div class="form-group">
                        <label for="name">Donnez un numero en cas d'urgence</label><br>
                        <input type="text" name="number" class="I" value="{{ $entretien->number_en_cas_d_urgence }}"
                            required></input>
                    </div>
                    <br>
                    <div class="form-group1">
                        <label for="exampleFormControlTextarea1" class="form-label">Information supplémentaire</label><br>
                        <textarea class="IS" id="exampleFormControlTextarea1" rows="3" required name="informations">
                            {{ $entretien->informations_supplementaires }}</textarea>
                    </div>
                    <div class="form-group">
                        <button value="Précédent" onclick="showStep1()" id="bouton">Précédent</button>
                    </div>
                    <div class="form-group">
                        <button type="submit" value="Soumettre" id="bouton">Soumettre</button>
                    </div>
                </div>

            </form>

        </div>
        </section>




        </body>

        </html>
        <script>
            var checkbox = document.getElementById("yesno");
            var textarea = document.getElementById("explanation");

            checkbox.addEventListener("change", function() {
                if (checkbox.checked) {
                    textarea.style.display = "block";
                } else {
                    textarea.style.display = "none";
                }
            });
        </script>

    @endsection
