@extends('layouts.dashboard')

@section('content')
    <section class="statistics-page">
        {{dd($orders)}}
    </section>  
@endsection