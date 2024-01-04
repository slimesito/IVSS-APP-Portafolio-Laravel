<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="{{asset('homestyles.css')}}">
    {{-- FONTSAWESOME --}}
    <link href="assets/fontawesome/css/fontawesome.css" rel="stylesheet">
    <link href="assets/fontawesome/css/brands.css" rel="stylesheet">
    <link href="assets/fontawesome/css/solid.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ciudadanos | IVSS</title>
</head>
<body>

    <nav class="navbar navbar-expand-lg bg-dark border-bottom border-bottom-dark ticky-top bg-body-tertiary" >
        <div class="logo">
            <a href=""><img src="membrete2.jpg" width="1900" height="100" alt=""></a>
        </div>  
    </nav>

    <section>
    
        <div class="container-fluid page-body-wrapper" align="center">

            @include('layout.error-message')

            <br>

            <div class="form-box">

                <div class="form value">

                    @csrf
                        
                    <h2><img src="logoivssrojo.png" style="width: 80%" alt=""></h2>

                    <form action="{{ url('search') }}" method="GET">

                        <div class="inputbox">
                            <ion-icon name="search-outline"></ion-icon>
                            <input value="{{ request('search','') }}" placeholder="Ingrese la cédula" type="text" name="query">
                        </div>

                        <div class="home-btns">

                            <button class="button-85">Buscar</button>

                    </form>

                            <a class="add-btn" role="button" href="{{ route('create') }}">Agregar</a>
                        
                        </div>

                </div>

            </div>

        </div>

    </section>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>