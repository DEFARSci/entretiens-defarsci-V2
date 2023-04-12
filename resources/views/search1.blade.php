

@extends('layout')

@section('content')

<style>
  .uper {
    margin-top: 40px;
  }
</style>

<div class="uper">
    @include('partials.dev')

  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}
    </div><br />
  @endif
@include('partials.search')
  <table class="table table-striped">

    <thead>
        <tr>
          <td>ID</td>
          <td>Nom</td>
          <td>Prenom</td>
          <td >Montrer</td>
          <td>Modifier</td>
          <td>Supprimer</td>
          <td>Telecharger</td>
           

        </tr>
    </thead>

    <tbody>
        @foreach($entretiens as $entretien)
        <tr>
             <td>{{ $entretien->id }}</td>
      <td>{{ $entretien->nom}}</td>
      <td>{{ $entretien->prenom}}</td>



            <td><a href="{{ route('entretiens.show', $entretien->id)}}" class="btn btn-success w-9 h-8" style=" margin-top:20%"><i class="fa fa-eye " aria-hidden="true"></i></a></td>

             <td><a href="{{ route('entretiens.edit', $entretien->id)}}" class="btn btn-primary w-9 h-8" style=" margin-top:20%" ><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>

            <td>
                <form action="{{ route('entretiens.destroy', $entretien->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button  class="btn btn-danger w-9 h-8" style=" margin-top:20%" type="submit"><i class="fa fa-trash" aria-hidden="true"></i></button>
                </form>
            </td>


            <td>
                 <a class="btn btn-warning w-9 h-8" style=" margin-top:20%"  href="{{ route('entretien.pdf') }}"> <i class="fa fa-download" aria-hidden="true"></i> </a>
                
            </td>
             
    
            
         




        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection
