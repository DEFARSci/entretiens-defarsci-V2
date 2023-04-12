<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Table Entretiens</title>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />    
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">




</head>


<body>

    <style>
*{
    margin: 0;
    padding: 0;
}
body{
  background-color: #f6f8fa;
}
form {
    font-family: Arial, sans-serif;
  }
  section{
    min-height: 100vh;
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: #f6f8fa;
}
.container{
    width: 90%;
    max-width: 800px;
    margin: 0 auto;
    background-color: white;
    box-shadow: 0px 0px 20px #00000020;
    border-radius: 8px;
    padding: 20px;
}
textarea{
  resize: none;
  outline: none;
  border: 0;
  background-color: rgb(240, 240, 236);
   width: 90%;
  height: 80px;
}
.IS{
  resize: none;
  outline: none;
  border: 0;
  background-color: rgb(240, 240, 236);
   width: 95%;
  height: 150px;
}
.I{
  border: 0;
  background-color: rgb(240, 240, 236);
  outline: none;
    width: 90%;
    height: 30px;
    padding: 1Opx;
    margin-top: 5px;
}
.form-group{
    width: 100%;
    margin-top: 20px;
}
#step1{
    display: grid;
    grid-template-columns: 1fr 1fr;
}
#step2{
    display: grid;
    grid-template-columns: 1fr 1fr;
}

.form-group1{
grid-column-start: 1;
grid-column-end: 3;
}


  label {
    font-weight: bold;
    margin-right: 10px;
  }
  select{
    border: 0;
    outline: none;
    background-color: rgb(240, 240, 236);
    height: 35px;
    width: 60%;
  }
 button{
    background-color: #84addb;
    color: white;
    min-width: 20px;
    padding: 12px 20px;
    border: none;
    cursor: pointer;
   
  }
  button[type=button] {
    float: right;
background-color: #84addb;

  }
  button[id="bouton"] {
    float: right;
background-color: #84addb;

  }






  @media screen and (max-width: 659px) {

    #step1{
    display: grid;
    grid-template-columns: 1fr;
    grid-template-rows: 1fr 1fr;

}
#step2{
    display: grid;
    grid-template-columns: 1fr;
    grid-template-rows: 1fr 1fr;

}
button[type="submit"] {
 float: right;
 margin-top: -60px;
  }
  .form-group1{
    grid-column-start: 1;
    grid-column-end: 2;
    }
    .container{
      width: 100%;
      height: 100%;
      max-width: 659px;
    }
}
</style>

  <div class="container">
    @yield('content')
  </div>
  <script src="{{ asset('js/app.js') }}" type="text/js" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    function showStep2() {
    document.getElementById("step1").style.display = "none";
    document.getElementById("step2").style.display = "grid";
  }

  function showStep1() {
    document.getElementById("step1").style.display = "grid";
    document.getElementById("step2").style.display = "none";
  }

</script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>



</body>
</html>
