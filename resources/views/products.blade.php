<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Produk</title>
</head>
<body>
    <h1>{{$judul}}</h1>
    <ol>
        @foreach ($products as $product)
        <li>{{$product}}</li>
        @endforeach
    </ol>
</body>
</html>