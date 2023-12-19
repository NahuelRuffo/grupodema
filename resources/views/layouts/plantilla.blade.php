



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titulo')</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    @vite(['resources/css/app.css'])
</head>

<header id="fondo">
    <div class="container">
        <nav class="navbar navbar-expand-lg bg-body-tertiary" >
            <div class="container-fluid">
                <a class="navbar-brand" href="{{route('indexCliente')}}"><img src="./img/grupo-dema.png" alt="">clientes</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                STOCK
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{route('stock')}}">PRODUCTOS TERMINADO</a></li>
                                <li><a class="dropdown-item" href="{{route('materiaPrima')}}">MATERIA PRIMA</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                INFORME
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">IN.PEDIDOS FACTURADOS</a></li>
                                <li><a class="dropdown-item" href="#">IN.PEDIDOS ANULADOS</a></li>
                                <li><a class="dropdown-item" href="#">IN.PEDIDOS PENDIENTES</a></li>
                                <li><a class="dropdown-item" href="#">IN.VENTAS (MES Y AÑO)</a></li>                        
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        </header>

    </div>

    @yield('contenido')
    <script src="https://kit.fontawesome.com/041d568f97.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>