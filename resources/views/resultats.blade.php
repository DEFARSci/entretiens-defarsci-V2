@extends('layout')

@section('content')
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
{{-- <style>
  .uper {
    margin-top: 40px;
  }
</style> --}}

<div class="container-flui ">
    <form action="{{ route('index.dev') }}" method="GET" class="">
        <div class="container-flui ">
<div class="row">


        <select name="domaine" id="domaine" class="col-md-4 mr-2 form-controle">
                         <option   value="{{Request::get('domaine')? Request::get('domaine'):''}}">{{Request::get('domaine')?Request::get('domaine'):'Domaine'}}</option>
                         <option value="">...</option>
                         <option value="Developpemnt Web">Developpement web</option>
                        <option value="Design">Design</option>
                        <option value="Marketing Digital">Marketing digital</option>
                        <option value="Bureautique">Bureautique</option>
                        <option value="Ressources Humaines">Ressources humaines</option>
                        <option value="Arduino-Modelisation 3D">Arduino-Modélisation 3D</option>
                        <option value="Gestion de projet">Gestion de projet</option>
                        <option value="Maintenance">Maintenance</option>
        </select>

        <select name="maladie_ou_allergie" id="maladie_ou_allergie"  class="col-md-3 mr-1 mb-2"  >
            <option value="{{ Request::get('maladie_ou_allergie')?Request::get('maladie_ou_allergie'):'' }}">{{ Request::get('maladie_ou_allergie')?Request::get('maladie_ou_allergie'):'Maladie ' }}</option>
            <option value="">...</option>
            <option value="oui">OUI</option>
            <option value="non">NON</option>

        </select>


        <input type="date" name="date" id="date" value="{{ Request::get('date') }}" class="col-md-3 mr-2 mb-2 form-controle" >

        <button type="submit" class="btn btn-primary col-md-1"><i class="fa fa-paper-plane " ></i></button>


</div>
    </form>
</div>
</div>
<form action="{{ route('index.search') }}" class="d-flex">
    <div class="row mt-3 pl-3 ">

        <div class=" col-md-5 col-sm-12" >
            <input type="text" name="prenom" class="form-control" placeholder="Prenom"/>
        </div>

        <div class="col-md-5 col-sm-12" >
            <input type="text" name="nom" class="form-control" placeholder="Nom" />
        </div>

        <div class="col-md-2 col-sm-12" >
        <button type="submit" class="btn btn-info form-control ">
            <i class="fa fa-search " style="color:white  "></i>
        </button>
        </div>

    </div>

</form>

<div class="container-fluid ">
   <table class="table " style="width:100%;">
    <div>
        <tr >

          <th>ID</th>
          <th>Nom</th>
          <th>Prenom</th>
          <th>date</th>
         <th>Actions</th>


        </tr>

<tr>

        @foreach($entretiens as $entretien)

    <td>{{ $entretien->id }}</td>
      <td>{{ $entretien->prenom}}</td>
      <td>{{ $entretien->nom}}</td>
      <td>{{$entretien->created_at->formatLocalized('%d %B %Y %H:%M:%S') }}</td>
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




                 <a class="btn btn-warning mx-1 "  href="{{ route('entretien.pdf',$entretien->id) }}"> <i class="fa fa-download" ></i> </a>

            </td>








        </tr>
        @endforeach
    </table>

<div>
@endsection

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
