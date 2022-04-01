@extends('layouts.dashboard')

@section('more_stylesheets')
    
@endsection

@section('content')
    <section class="statistics-page">
        <div id="app">
            ciao
            <Chart />
        </div>

        {{-- <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14"></script> --}}
        <script src="{{asset('js/back.js')}}"></script>
    </section>  
@endsection