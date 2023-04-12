


<!DOCTYPE html>
<html>
<head>
<title></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>


 @foreach($entretiens as $entretien)

<form action="{{ route('index.dev' ) }}" class="d-flex  ">




                <select id="domain" name="domaine" value="{{ request()->domaine ?? '' }}" class="w-5" >
                    <option value="Developpemnt Web">Developpement web-mobile</option>
                    <option value="Design">Design</option>
                    <option value="Marketing Digital">Marketing digital</option>
                    <option value="Bureautique">Bureautique</option>
                    <option value="Ressources Humaines">Ressources humaines</option>
                    <option value="Arduino-Modelisation 3D">Arduino-Modélisation 3D</option>
                    <option value="Gestion de projet">Gestion de projet</option>
                    <option value="Maintenance">Maintenance</option>
                  </select>




</form>


@endforeach

</body>
</html>

