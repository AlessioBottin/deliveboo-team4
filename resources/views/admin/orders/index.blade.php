@extends('layouts.dashboard')

@section('content')
    <section>
        <h1>Lista Ordini</h1>

        <div class="table-responsive">    
            <table class="table">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Totale</th>
                    <th scope="col">Cliente</th>
                    <th scope="col">Indirizzo</th>
                    <th scope="col">Email</th>
                    <th scope="col">Telefono</th>
                    <th scope="col">Status</th>
                    <th scope="col">Data</th>
                    <th scope="col"></th>
                </tr>
                </thead>

                <tbody>
                @foreach ($orders as $order)
                <tr>
                    <th scope="row">{{ $order->id }}</th>
                    <td>{{ $order->total_price }}</td>
                    <td>{{ $order->customer_name }}</td>
                    <td>{{ $order->customer_address }}</td>
                    <td>{{ $order->customer_email }}</td>
                    <td>{{ $order->customer_phone }}</td>
                    <td>{{ $order->status }}</td>
                    <td>{{ $order->created_at }}</td>
                    <td>
                        <a href="{{ route('admin.order-info', ['id' => $order->id]) }}">
                            <button type="button" class="btn btn-secondary">Dettaglio</button>
                        </a>
                    </td>
                    
                </tr>
                @endforeach

                </tbody>
            </table>
        </div>
    </section>


@endsection