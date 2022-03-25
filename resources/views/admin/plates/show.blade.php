@extends('layouts.dashboard')

@section('content')

   @if (isset($plate))

      <h1>{{ $plate->name }}</h1>

      {{-- <div class="mb-3"><strong>Slug:</strong> {{ $plate->slug }}</div> --}}
      
      <div class="mb-3"><strong>Categoria:</strong> {{ $plate->category ? $plate->category->name : 'nessuna'}}</div>
      
      <div class="mb-3"><strong>Ingredienti:</strong> {{ $plate->ingredients }}</div>
      

      @if($plate->image)
         <div>
         {{-- <img src="{{$plate->image}}" alt="{{ $plate->name}}"> --}}
         <img src="{{ asset('storage/' .  $plate->img)}}" alt="{{ $plate->name}}">
         </div>
      @endif

      <p>{{ $plate->description }}</p>

      <form action="{{ route('admin.plates.edit', ['plate' => $plate->id])}}">
         <button type="submit" class="btn btn-primary">Edit</button>
      </form>

      <form action="{{ route('admin.plates.destroy', ['plate' => $plate->id])}}" method="POST">
         @csrf
         @method('DELETE')
         <button type="submit" class="btn btn-danger" onclick="return confirm('Sei sicuro di voler cancellare questo piatto?')">Delete</button>
      </form>
 
   @else 
      <h1>Errore la pagina non è stata trovata</h1>
   @endif

   

@endsection