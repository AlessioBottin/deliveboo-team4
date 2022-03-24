<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

    <div class="container">
        <h1 class="text-center">Categorie</h1>

        <h3 class="text-center">Seleziona le categorie per essere indicizzato durante la ricerca</h3>

        <form method="GET" action="{{route('admin.save-categories')}}">
            @csrf
            @method('get')
            <div class="categories_container">
                @foreach ($categories as $category)
                    <div class="category_box">
                        <input type="checkbox" id="category-{{$category->id}}" value="{{$category->id}}" name="categories[]">
                        <label for="category-{{$category->id}}">{{$category->name}}</label>
                    </div>
                @endforeach
            </div>
            <button class="btn btn-primary mt-3">Salva</button>
        </form>
    </div>

    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{asset('js/categories.js')}}"></script>

</body>
</html>
    