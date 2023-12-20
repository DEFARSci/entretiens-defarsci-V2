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
          <th>Date</th>
         <th>Actions</th>
        </tr>
<tr>
        @foreach($entretiens as $entretien)
      <td>{{ $entretien->id }}</td>
      <td>{{ $entretien->nom}}</td>
      <td>{{ $entretien->prenom}}</td>
      <td>{{$entretien->created_at->formatLocalized('%d %B %Y') }}</td>
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
    <div class="d-flex justify-content-center">
        {{ $entretiens->links() }}
    </div>
@endsection

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
