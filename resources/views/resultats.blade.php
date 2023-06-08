

@extends('layout')

@section('content')

<style>
  .uper {
    margin-top: 40px;
  }
</style>

<div class="uper ">

  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}
    </div><br />
  @endif

<div class="container-fluid ">
   <table class="table " style="width:100%;">
    <div
        <tr >

           <th>ID</th>
          <th>Nom</th>
          <th>Prenom</th>
         <th>Domaine</th>
         <th>Maladie ou Allergie</th>
        <th>Date</th>
        <th>Action</th>



        </tr>

<tr>

        @foreach($entretiens as $entretien)

   <td>{{ $entretien->id }}</td>
      <td>{{ $entretien->nom}}</td>
      <td>{{ $entretien->prenom}}</td>
       <td>{{ $entretien->domaine }}</td>
        <td>{{ $entretien->maladie_ou_allergie }}</td>
        <td>{{ $entretien->created_at->format('d/m/Y') }}</td>



            <td class="d-flex ">
                <a href="{{ route('entretiens.show', $entretien->id)}}" class="btn btn-success mx-1 " ><i class="fa fa-eye " ></i></a>

             <a href="{{ route('entretiens.edit', $entretien->id)}}" class="btn btn-primary mx-1 "  ><i class="fa fa-pencil-square-o" ></i></a>


                {{-- <form action="{{ route('entretiens.destroy', $entretien->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button  class="btn btn-danger mx-1"  type="submit"><i class="fa fa-trash" ></i></button>
                </form> --}}




                 <a class="btn btn-warning mx-1 "  href="{{ route('entretien.pdf',$entretien->id) }}"> <i class="fa fa-download" ></i> </a>

            </td>








        </tr>
        @endforeach
    </table>

<div>
@endsection




















































         


