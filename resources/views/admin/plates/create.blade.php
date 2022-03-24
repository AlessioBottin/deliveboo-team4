@extends('layouts.dashboard')

@section('content')
<section>
    <h1>Create a Plate</h1>

    <form action="{{ route('admin.plates.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('POST')
        
        {{-- Plate Name  --}}
        <div class="mb-3">
          <label for="name" class="form-label">Name</label>
          <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
        </div>

        @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        
        {{-- Plate Desc  --}}
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" name="description" id="description" cols="30" rows="10">{{ old('description') }}</textarea>
        </div>

        @error('description')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        {{-- Plate Ingredients  --}}
        <div class="mb-3">
            <label for="ingredients" class="form-label">Ingredients</label>
            <textarea class="form-control" name="ingredients" id="ingredients" cols="30" rows="10">{{ old('ingredients') }}</textarea>
        </div>

        @error('ingredients')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        {{-- Plate Price  --}}
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" class="form-control" id="price" name="price" step=".01" value="{{ old('price') }}">
        </div>

        @error('price')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        
        {{-- Plate Visibility --}}
        <div class="form-check mb-3">
            <input class="form-check-input" type="radio" name="visibility" id="visibility" value="1">
            <label class="form-check-label" for="visibility">
              Visibile
            </label>
        </div>
        <div class="form-check mb-3">
            <input class="form-check-input" type="radio" name="visibility" id="visibility" value="0">
            <label class="form-check-label" for="visibility">
              Not Visible
            </label>
        </div>

        @error('visibility')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        {{-- Plate Image  --}}
        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input type="file" id="image" name="image">
        </div>

        @error('image')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</section>
@endsection
