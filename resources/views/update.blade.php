<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="{{asset('createstyles.css')}}">
    {{-- FONTSAWESOME --}}
    <link href="assets/fontawesome/css/fontawesome.css" rel="stylesheet">
    <link href="assets/fontawesome/css/brands.css" rel="stylesheet">
    <link href="assets/fontawesome/css/solid.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ciudadanos | IVSS</title>
    <base href="/public">
</head>
<body>

    <nav class="navbar navbar-expand-lg bg-dark border-bottom border-bottom-dark ticky-top bg-body-tertiary" >
        <div class="logo">
            <a href=""><img src="membrete2.jpg" width="1900" height="100" alt=""></a>
        </div>
    </nav>

    <section>
                    
        <div id="container" style="padding: 15px;">

            @include('layout.success-message')

            @include('layout.error-message')
            
            <div align="center">
                <a href="{{ route('index') }}"><img src="logoivssrojo.png" style="padding: 15px;" alt=""></a>
            </div>            
            
            <form action="{{ route('edit', $pensionados->id) }}" method="POST" enctype="multipart/form-data">

                @csrf

                <div class="name">
                    <label class="label" for="name">Nombre</label>
                    <input type="text" value="{{$pensionados->nombre}}" name="nombre" id="name_input" required>
                </div>

                <div class="apellido">
                    <label for="apellido">Apellido</label>
                    <input type="text" value="{{$pensionados->apellido}}" name="apellido" id="apellido_input" required>
                </div>

                <div class="cedula">
                    <label for="cedula">Cédula</label>
                    <input type="text" value="{{$pensionados->cedula}}" name="cedula" id="cedula" required disabled>
                </div>

                <div class="sexo">
                    <label for="sexo">Sexo</label>
                    <select name="sexo" id="sexo_input" required>
                        <option>{{$pensionados->sexo}}</option>
                        <option value="M">MASCULINO</option>
                        <option value="F">FEMENINO</option>
                    </select>
                </div>

                <div class="estado">
                    <label for="estado">Estado Civil</label>
                    <select name="estado" id="estado_input" required>
                        <option>{{$pensionados->estado}}</option>
                        <option value="CASADO">CASADO</option>
                        <option value="SOLTERO">SOLTERO</option>
                        <option value="VIUDO">VIUDO</option>
                        <option value="DIVORCIADO">DIVORCIADO</option>
                    </select>
                </div>

                <div class="fechanac">
                    <label for="fechanac">FECHA DE NACIMIENTO</label>
                    <input style="padding: 10px;" type="date" name="nacimiento" id="fechanac_input" value="{{$pensionados->nacimiento}}" required>
                </div>

                <div class="fechafal">
                    <label for="fechafal">FECHA DE FALLECIMIENTO</label><br>
                    <input style="padding: 10px;" type="date" name="fallecimiento" id="fechafal_input" value="{{$pensionados->fallecimiento}}">
                </div>

                <div class="submit">
                    <input type="submit" value="Actualizar" id="form_button" />
                </div>

            </form><!-- // End form -->

        </div><!-- // End #container -->

    </section>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>