<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="img/GymLogo.jpg" type="image/x-icon">
    <link rel="stylesheet" href="{{asset("css/styles.css")}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.lineicons.com/4.0/lineicons.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.3.0/uicons-solid-rounded/css/uicons-solid-rounded.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.3.0/uicons-bold-straight/css/uicons-bold-straight.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.3.0/uicons-regular-straight/css/uicons-regular-straight.css'>
    <title>Tienda</title>
</head>
<body class="carta-body bg-dark">

    <header class="cabecera d-flex flex-column align-items-center"
        style="background-image: url('../img/FondoTienda.jpg');">
        <section class="navar">
            <div class="d-flex justify-content-center align-items-center">
                <img src="{{ asset('/img/GymLogo.jpg') }}" alt="">
            </div>
        </section>
    </header>
    
    <section class="contenedor-tarjetas">
        <div class="container-cartas">
            <div class="row">
                @foreach ($products as $product)
                <div class="col-md-3 mb-4">
                    <div class="carta-edit">
                        <img class="img-comida" src="{{ asset('/img/Conjunto.jpg') }}" class="card-img-top"
                            alt="Imagen 1">
                        <div class="card-body text-light text-shadow text-outline ">
                            {{-- <p>ID: {{ $product->id }}</p> --}}
                            <p class="fs-3" >Nombre: {{ $product->name }}</p>
                            <p>Descripción: {{ $product->description }}</p>
                            <p class="text-success" >Precio:${{ $product->price }}</p>
                            <p>Stock: {{ $product->stock }}</p>
                            <p>Categoría: {{ $product->category->name }}</p>
                            <button type="button" class="btn btn-success text-light" data-bs-toggle="modal"
                                data-bs-target="#catalogo{{$product->id}}">
                                Comprar
                            </button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<footer>
    <div class="contactos">

        <h2 class="text-light-énfasis">Siguenos</h2>
    </div>

    <div class="contenedor-footer">

        <div class="content-foo">

            <a href="https://es-la.facebook.com/"><img src="{{ asset('img/facebook2.jpg') }}"></a>

        </div>
        <div class="content-foo">
            <a href="https://web.whatsapp.com/"><img src="{{ asset('img/iconowhatsapp.jpg') }}"></a>

        </div>
        <div class="content-foo">
            <a href="https://www.instagram.com/"><img src="{{ asset('img/instagran2.jpg') }}"></a>

        </div>

        <div class="content-foo">
            <a href="https://twitter.com/?lang=es"><img src="{{ asset('img/Twitter.jpg') }}"></a>

        </div>

        <div class="content-foo">
            <a href="https://www.youtube.com/"><img src="{{ asset('img/youtube2.jpg') }}"></a>

        </div>

        <div class="content-foo">
            <a href="https://www.tiktok.com/es/"><img src="{{ asset('img/tik tok.jpg') }}"></a>

        </div>

    </div>
    <h2 class="titulo-final">&copy; TODOS LOS DERECHOS RESERVADOS 2024 | CREADOR: TU DIOS</h2>
</footer>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
   

</body>
</html>