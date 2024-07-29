<!-- resources/views/products/show.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Detalles del Producto</title>
</head>
<body>
    <h1>Detalles del Producto</h1>
    <p>ID: {{ $product->id }}</p>
    <p>Nombre: {{ $product->name }}</p>
    <p>Descripción: {{ $product->description }}</p>
    <p>Precio: {{ $product->price }}</p>
    <p>Stock: {{ $product->stock }}</p>
    <p>Categoría: {{ $product->category->name }}</p>
    <a href="{{ route('products.index') }}">Volver a la lista</a>
</body>
</html>
