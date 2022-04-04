@extends('layouts.dashboard')

@section('content')
    <section class="statistics-page">

        <h1>Riepilogo dei Ordini</h1>

        <div class="chart">
            <BarChart :orderdata="{{ $orders }}" version="{{"monthlysales"}}"/>
        </div>

        <div class="chart">
            <BarChart :orderdata="{{ $orders }}" version="{{"monthlyrevenue"}}"/>
        </div>
        
    </section>  
@endsection