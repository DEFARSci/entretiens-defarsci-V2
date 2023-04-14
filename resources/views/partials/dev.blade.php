


<!DOCTYPE html>
<html>
<head>
<title></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>

<form action="{{ route('index.dev') }}" method="GET">

    <div class="form-group ">


    <select name="domaine" id="domaine" style="color:blue;width:30.5%;">
                     <option   value="">Domaine</option>
                    <option value="Developpemnt Web">Developpement web-mobile</option>
                    <option value="Design">Design</option>
                    <option value="Marketing Digital">Marketing digital</option>
                    <option value="Bureautique">Bureautique</option>
                    <option value="Ressources Humaines">Ressources humaines</option>
                    <option value="Arduino-Modelisation 3D">Arduino-Modélisation 3D</option>
                    <option value="Gestion de projet">Gestion de projet</option>
                    <option value="Maintenance">Maintenance</option>

    </select>




    <select name="maladie_ou_allergie" id="maladie_ou_allergie" style="color:blue;width:30.5%;"  >
        <option value="">Maladie_ou_Allergie</option>
        <option value="oui">OUI</option>
        <option value="non">NON</option>

    </select>






    <input type="date" name="date" id="date"   style="color:blue;width:30.5%;heigth:20%;" >






    <button type="submit" class="btn btn-primary "><i class="fa fa-paper-plane" aria-hidden="true"></i></button>

    </div>

</form>








</body>
</html>

