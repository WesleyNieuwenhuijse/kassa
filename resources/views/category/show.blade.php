<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Categories</title>
</head>
<body>
<h1>Categories</h1>

<table class="Categorie" border="1px" style="float: left">
    <tr>
        <th>Categorie naam</th>
    </tr>
    @foreach($categories AS $ct)
        <tr>
            <th>{{ $ct->name }}</th>
        </tr>
    @endforeach
</table>
<table class="SubCategorie" border="1px" >
    <tr>
        <th>Subcategorie naam</th>
    </tr>
    @foreach($subcategories AS $sct)
        <tr>
            <th>{{ $sct->name }}</th>
        </tr>
    @endforeach
</table>

<button onclick="window.location='{{ route('category.create') }}'">Create Category</button>
<button onclick="window.location='{{ route('subcategory.create') }}'">Create Subcategory</button>
@foreach($categories AS $cts)
<button onclick="window.location='{{ route('category.update', $cts->name) }}'">Wijzig {{ $cts->name }}</button>
@endforeach
</body>
</html>
