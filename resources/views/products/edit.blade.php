<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
     <link rel="stylesheet" href="https://cdn.lineicons.com/4.0/lineicons.css" />
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
     <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.3.0/uicons-solid-rounded/css/uicons-solid-rounded.css'>
     <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.3.0/uicons-bold-straight/css/uicons-bold-straight.css'>
     <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.3.0/uicons-regular-straight/css/uicons-regular-straight.css'>
    <title>Editar Producto</title>
</head>
<body class="carta-body bg-dark" >
    <header class="cabecera d-flex flex-column align-items-center" 
    style="background-image: url('../img/FondoTienda.jpg');">
    <section class="navar">
        <div class="d-flex justify-content-center align-items-center">
            <img src="{{ asset('/img/GymLogo.jpg') }}" alt="">
        </div>
    </section>
    </header>

    <section class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1 class="text-center mb-4 text-light fw-bold text-shadow text-outline ">Editar Producto</h1>
                <form action="{{ route('products.update', $product) }}" method="POST">
                    @csrf
                    @method('PUT')
    
                    <div class="mb-3">
                        <label for="name" class="form-label  text-light text-shadow text-outline">Nombre:</label>
                        <input type="text" name="name" id="name" class="form-control" value="{{ $product->name }}" required>
                    </div>
    
                    <div class="mb-3">
                        <label for="description" class="form-label text-light text-shadow text-outline">Descripción:</label>
                        <textarea name="description" id="description" class="form-control">{{ $product->description }}</textarea>
                    </div>
    
                    <div class="mb-3">
                        <label for="price" class="form-label text-light text-shadow text-outline">Precio:</label>
                        <input type="number" name="price" id="price" class="form-control" step="0.01" value="{{ $product->price }}" required>
                    </div>
    
                    <div class="mb-3">
                        <label for="stock" class="form-label text-light text-shadow text-outline">Stock:</label>
                        <input type="number" name="stock" id="stock" class="form-control" value="{{ $product->stock }}" required>
                    </div>
    
                    <div class="mb-3">
                        <label for="category_id" class="form-label text-light text-shadow text-outline">Categoría:</label>
                        <select name="category_id" id="category_id" class="form-select" required>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}" {{ $category->id == $product->category_id ? 'selected' : '' }}>
                                    {{ $category->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
    
                    <button type="submit" class="btn btn-warning fw-bold text-shadow text-outline">Actualizar</button>
                </form>
    
                <div class="mt-4">
                    <a href="{{ route('products.index') }}" class="btn btn-warning fw-bold text-shadow text-outline">Volver a la lista</a>
                </div>
            </div>
        </div>
    </section>
    

     <!-- Bootstrap JS -->
     <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
