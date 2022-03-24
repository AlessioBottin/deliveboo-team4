@extends('layouts.dashboard')

@section('content')
    <section>
        <div class="m-auto">
            <h1>Lista dei Piatti</h1>

            <div class="row">
                @foreach ($plates as $plate)
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <div class="card mt-4">
                            @if($plate->image)
                                <div>
                                    <img src="{{$plate->image}}" alt="{{ $plate->name}}" class="card-img-top">
                                </div>
                            @endif 
                            <div class="card-body">
                                <h5 class="card-title font-weight-bold">{{ $plate->name }}</h5>
                                <p class="card-text">{{ Str::substr($plate->description, 0, 100)}}...</p>
                                <p class="card-text"> {{$plate->price}} €</p>
                                <a href="{{ route('admin.plates.show', ['plate' => $plate->id])}}" class="btn btn-primary">Dettagli</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section>
@endsection