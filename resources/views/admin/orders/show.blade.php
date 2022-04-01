@extends('layouts.dashboard')

@section('content')
    <section>
        <h1>Lista Ordini</h1>
        <ul>
            @foreach ($order->plates as $plate)
            <li class="border mb-3">
                ID: {{ $plate->id }}  
                | Name: {{ $plate->name }}
                | Totale: {{ $plate->price }}€
            </li>
            @endforeach
        </ul>
    </section> 
@endsection