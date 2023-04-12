
 @extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>

<div >
  <div >
    Ajouter un Entretien
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
 <section>
        <div class="container">

      <form method="post" action="{{ route('entretiens.store') }}" enctype="multipart/form-dtat">
    @csrf
    <div id="step1">
            <div class="form-group">
                <label for="name">Prenom</label><br>
                    <input type="text" name="prenom" class="I" required></input>
            </div>
            <div class="form-group">
                    <label for="name">Nom</label><br>
                    <input type="text" name="nom" class="I" required></input>
            </div>
            <div class="form-group">
                <label for="email">Adresse</label><br>
                <input type="text" name="addresse" class="I" required></input>
            </div>
            <div class="form-group">
                <label for="name">Domaine</label><br>
                <select id="domain" name="domaine" >
                    <option value="Developpemnt Web">Developpement web-mobile</option>
                    <option value="Design">Design</option>
                    <option value="Marketing Digital">Marketing digital</option>
                    <option value="Bureautique">Bureautique</option>
                    <option value="Ressources Humaines">Ressources humaines</option>
                    <option value="Arduino-Modelisation 3D">Arduino-Modélisation 3D</option>
                    <option value="Gestion de projet">Gestion de projet</option>
                    <option value="Maintenance">Maintenance</option>
                  </select>
            </div>
            <div class="form-group">
                    <label for="exampleFormControlTextarea1" class="form-label">Pourquoi ce choix:</label>
                    <textarea id="exampleFormControlTextarea1" rows="3" required name="pourquoi_ce_choix"></textarea>
            </div>
            <div class="form-group">
                    <label for="exampleFormControlTextarea1" class="form-label">Participants de l'entretien:</label>
                    <textarea id="exampleFormControlTextarea1" rows="3" required name="participants"></textarea>
            </div>
            <div class="form-group">
                 <label for="exampleFormControlTextarea1" class="form-label">Présentation du candidat:</label>
                 <textarea id="exampleFormControlTextarea1" rows="3" required name="presentation"></textarea>
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1" class="form-label">Connaissez vous defar sci:</label>
                <textarea id="exampleFormControlTextarea1" rows="3" required name="defarsci"></textarea>
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1" class="form-label">Comment voyez vous defar sci:</label>
                <textarea id="exampleFormControlTextarea1" rows="3" required name="comment_voyez_vous_defarsci"></textarea>
            </div>
         <div class="form-group">
            <label for="exampleFormControlTextarea1" class="form-label">Qu'attendez vous de defar sci:</label>
            <textarea id="exampleFormControlTextarea1" rows="3" required name="qu_entendez_de_defarsci"></textarea>
         </div>
         <div class="form-group">
            <label for="exampleFormControlTextarea1" class="form-label">Parlez nous de vos atouts:</label>
            <textarea id="exampleFormControlTextarea1" rows="3" required name="atouts"></textarea>
       </div>
       <div class="form-group">
           <label for="exampleFormControlTextarea1" class="form-label">Parlez nous de vos faiblesses:</label>
           <textarea id="exampleFormControlTextarea1" rows="3" required name="faiblesses"></textarea>
       </div>

            <br>
            <div>
            <button type="button" value="Suivant" onclick="showStep2()" id="bouton">suivant</button>
            </div>
            </div>





        <div id="step2" style="display:none">


    <fieldset class="form-group">
        <div class="row">
            <label for="name"></label>
            <legend class="from-group">Souffrez vous d'une maladie ou d'une alergie:</legend>
            <div  class="col-sm-10">

            <div class="from-check" >
                <input class="from-check-input"  type="radio" name="gridRadios" id="girdRadios1" value="oui" checked/>
                <label class="from-check-label" for="gridRadios1" >
                    Oui
                </label>
            </div>

             <div class="from-check" >
                <input class="from-check-input"  type="radio" name="gridRadios" id="girdRadios2" value="non" checked/>
                <label class="from-check-label" for="gridRadios1" >
                   Non
                </label>
            </div>


            </div>


        </div>

    </fieldset>
    <div class="form-group">
        <label for="exampleFormControlTextarea1" class="form-label">Quels sont vos objectifs fixés d'ici 2ans:</label>
        <textarea  id="exampleFormControlTextarea1" rows="3" required name="objectifs_dans_2ans"></textarea>
    </div>
    <div class="form-group">
        <label for="exampleFormControlTextarea1" class="form-label">Combien de mois voulez vous faire la formation:</label>
        <textarea  id="exampleFormControlTextarea1" rows="3" required name="mois_de_formation"></textarea>
    </div>
    <div class="form-group">
        <label for="exampleFormControlTextarea1" class="form-label">Quand est ce que vous allez demarrer la formation:</label>
        <textarea  id="exampleFormControlTextarea1" rows="3" required name="demarrage"></textarea>
    </div>
    <div class="form-group" name="horaires">
        <h4>Présentation des horaires de travail</h4>
        <li>Du lundi au vendredi de 9h à 18h</li>
        <li>Petit déjeuner: 11h à 11H 45</li>
        <li>Heure de pause: 14h à 15h</li>
    </div>
    <div class="form-group">
        <h4> Disponibilté du candidat</h4>
        <textarea  id="exampleFormControlTextarea1" rows="3" required  name="candidat"></textarea>
    </div>
    <div class="form-group">
        <h4>Modalité du paiement de la formation</h4>
        <input type="text" name="modalite_paiement" class="I" required></input>
        </div>
        <div class="form-group">
        <label for="name">Telephone</label>
                <input type="text" name="telephone" class="I" required></input>
            </div>
            <div class="form-group">
                <label for="email">Email</label><br>
                <input type="email" name="email" class="I" required></input>
             </div>
             <div class="form-group">
                     <label for="name">Donnez un numero en cas d'urgence</label><br>
                     <input type="text" name="number" class="I" required></input>
             </div>
             <br>
             <div class="form-group1">
                <label for="exampleFormControlTextarea1" class="form-label">Information supplémentaire</label><br>
                <textarea class="IS" id="exampleFormControlTextarea1" rows="3" required name="informations"></textarea>
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
