


<!DOCTYPE html>
<html>
<head>
<title></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>


<form action="{{ route('index.search') }}" class="d-flex  ">

    <div class="form-group  " >

<input type="text" name="entretiens" class="form-control" value="{{ request()->entretiens ?? '' }}" />
    </div>

  <button type="submit" class="btn btn-info w-18 h-25  " style="margin-top:2.5%">
    <i class="fa fa-search " style="color:white  "></i>

</button>

</form>




</body>
</html>
