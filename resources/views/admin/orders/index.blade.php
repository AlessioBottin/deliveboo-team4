@extends('layouts.dashboard')

@section('content')
    <section>
        <h1>Lista Ordini</h1>
        <ul>
            @foreach ($orders as $order)
                <li class="border mb-3">
                    ID: {{ $order->id }}  
                    | Totale: {{ $order->total_price }}€ 
                    | Cliente: {{ $order->customer_name }}
                    | Indirizzo: {{ $order->customer_address }}
                    | Telefono: {{ $order->customer_phone }}
                    | Status: {{ $order->status }}
                    | Data: {{ $order->created_at }}
                </li>

                @foreach ($order->plates as $plate)
                <li class="border mb-3">
                    ID: {{ $plate->id }}  
                    Name: {{ $plate->name }} --}}
                    | Totale: {{ $order->total_price }}€
                    | Cliente: {{ $order->customer_name }}
                    | Indirizzo: {{ $order->customer_address }}
                    | Telefono: {{ $order->customer_phone }}
                    | Status: {{ $order->status }}
                    | Data: {{ $order->created_at }}
                </li>
                @endforeach
            @endforeach
        </ul>
    </section>
@endsection