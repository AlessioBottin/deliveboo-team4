@extends('layouts.dashboard')

@section('content')
    <section class="show">
        <h1>Dettagli Ordine</h1>
        <div class="table-responsive">    
            <table class="table">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Prodotto</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Quantità</th>
                    <th scope="col">Prezzo</th>
                </tr>
                </thead>

                <tbody>
                @foreach ($order->plates as $plate)
                <tr>
                    <th scope="row">{{ $plate->id }}</th>
                    <td><div class="show-orders-image"> <img src="{{ asset('storage/' .  $plate->image)}}" alt="{{ $plate->name}}"> </div></td>
                    <td>{{ $plate->name }}</td>
                    <td>{{ ($plate->pivot->quantity) }}</td>
                    <td>{{ $plate->price }}€</td>                   
                </tr>
                @endforeach

                </tbody>
            </table>
        </div>




    </section> 
@endsection