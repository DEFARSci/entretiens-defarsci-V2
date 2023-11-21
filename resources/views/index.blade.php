

@extends('layout')

@section('content')

<style>
  .uper {
    margin-top: 40px;
  }
</style>

<div class="uper ">
    @include('partials.dev')

  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}
    </div><br />
  @endif
@include('partials.search')

<div class="container-fluid ">
   <table class="table " style="width:100%;">
    <div>
        <tr >

          <th>ID</th>
          <th>Nom</th>
          <th>Prenom</th>
         <th>Actions</th>


        </tr>

<tr>

        @foreach($entretiens as $entretien)

    <td>{{ $entretien->id }}</td>
      <td>{{ $entretien->nom}}</td>
      <td>{{ $entretien->prenom}}</td>



            <td class="d-flex ">
                <a href="{{ route('entretiens.show', $entretien->id)}}" class="btn btn-success mx-1 " ><i class="fa fa-eye " ></i></a>


             <a href="{{ route('entretiens.edit', $entretien->id)}}" class="btn btn-primary mx-1 "  ><i class="fa fa-pencil-square-o" ></i></a>


             {{-- <a href="{{ route('entretiens.destroy', $entretien->id) }}"
            onclick="event.preventDefault();
            if (confirm('Êtes-vous sûr de vouloir supprimer cet élément ?')) {
                document.getElementById('delete-form').submit();
            }">
    <button  class="btn btn-danger mx-1"  type="submit"><i class="fa fa-trash" ></i></button>
</a>

<form id="delete-form" action="{{ route('entretiens.destroy', $entretien->id) }}" method="POST" style="display: none;">
    @method('DELETE')
    @csrf
</form> --}}




                 <a class="btn btn-warning mx-1 "  href="{{ route('entretien.pdf', $entretien->id) }}"> <i class="fa fa-download" ></i> </a>

            </td>








        </tr>
        @endforeach
    </table>

<div>
@endsection
