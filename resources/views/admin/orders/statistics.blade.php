@extends('layouts.dashboard')

@section('content')
    <section class="statistics-page">
        
        <h1>Riepilogo dei Ordini</h1>
        <div class="chart">
            <BarChart :orderData="{{ $orders }}"/>
        </div>

        
    </section>  
@endsection