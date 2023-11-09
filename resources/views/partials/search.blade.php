


<!DOCTYPE html>
<html>
<head>
<title></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>


<form action="{{ route('index.search') }}" class="d-flex">
<div class="row mt-3 p-2">

    <div class=" col-md-5" >

        <input type="text" name="prenom" class="form-control" placeholder="Prenom"/>
    </div>
    <div class="col-md-5  " >
        <input type="text" name="nom" class="form-control" placeholder="Nom"  />
    </div>
    <div class="col-md-2  " >
    <button type="submit" class="btn btn-info  ">
        <i class="fa fa-search " style="color:white  "></i>

    </button>
    </div>
</div>

</form>




</body>
</html>
