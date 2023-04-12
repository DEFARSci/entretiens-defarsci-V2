 <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title></title>
  </head>
  <body>
           
    <style>

        *{
margin: 0;
padding: 0;
}
body{
    font-family: Arial, Helvetica, sans-serif;
    background-color: #f6f8fa;
}
.container{
    width: 80%;
    max-width: 1000px;
    margin: 0 auto;
    background-color: white;
    box-shadow: 0px 0px 20px #00000020;
    border-radius: 8px;
    padding: 20px;
}
.form{
    display: grid;
    grid-template-columns: 1fr 1fr;
    grid-template-rows: 1fr ;
}
.header{
    height: 60px;
    background-color: rgb(218, 208, 208);
}
h3{
   font-size: 25px;
   padding-top: 15px;
   margin-top: 8px;
   margin-left: 250px;
}

.liste{
    margin-bottom: 10px;
}
p{
    font-size: 15px;
    margin-left: 10%;
}
button{
    margin-left: 600px;
    background-color: rgb(184, 184, 184);
    width: 150px;
    height: 45px;
    border: 2px solid rgb(184, 184, 184);
    border-radius: 5px;
}
a{
    color: black;
    font-size: 20px;
    text-decoration: none;
}
    </style>


    

    <div class="container">

     <div class="header">
        <h3>{{ $entretien->prenom }} {{ $entretien->nom }}</h3><br>
    </div><br>
    <div class="form">

  <div class="section1">

    <p><b class="lbl">Nom :</b>{{ $entretien->nom }}</p><br>
    <p><b class="lbl">Email :</b>{{ $entretien->email }}</p><br>
    <p><b class="lbl">Adresse :</b>{{ $entretien->addresse }}</p><br>
    <p><b class="lbl">Pourquoi ce choix :</b>{{ $entretien->pourquoi_ce_choix}}</p><br>
    <p><b class="lbl">Presentation du Candidat :</b>{{ $entretien->presentation_du_Candidat }}</p><br>
    <p><b class="lbl">Comment voyez vous defarsci :</b>{{ $entretien->comment_voyez_vous_defarsci }}</p><br>
    <p><b class="lbl">Atouts :</b>{{ $entretien->atouts }}</p><br>
    <p><b class="lbl">Maladie ou allergie :</b>{{ $entretien->maladie_ou_allergie }}</p><br>
    <p><b class="lbl">Mois de formation:</b>{{ $entretien->mois_de_formation}}</p><br>
    <p><b class="lbl">Modalite paiement :</b>{{ $entretien->modalite_paiement }}</p><br>
    <p><b class="lbl">Informations supplementaires :</b>{{ $entretien->informations_supplementaires}}</p><br>

  </div>

  <div class="section2">

    <p><b class="lbl">Prenom :</b>{{ $entretien->prenom }}</p><br>
    <p><b class="lbl">Telephone :</b>{{ $entretien->telephone }}</p><br>
    <p><b class="lbl">Domaine :</b>{{ $entretien->domaine }}</p><br>
    <p><b class="lbl">Participants :</b>{{ $entretien->participants}}</p><br>
    <p><b class="lbl">Connaissez vous defarsci :</b>{{ $entretien->connaissez_vous_defarsci }}</p><br>
    <p><b class="lbl">Qu'entendez de defarsci :</b>{{ $entretien->qu_entendez_de_defarsci }}</p><br>
    <p><b class="lbl">Faiblesses :</b>{{ $entretien->faiblesses}}</p><br>
    <p><b class="lbl">Objectifs dans 2ans :</b>{{ $entretien->objectifs_dans_2ans}}</p><br>
    <p><b class="lbl">Demarrage :</b>{{ $entretien->demarrage }}</p><br>
    <p><b class="lbl">Number en cas d'urgence:</b>{{ $entretien->number_en_cas_d_urgence}}</p><br>


  </div>

 
   

</div>
    </div>

  </body>
  </html>
