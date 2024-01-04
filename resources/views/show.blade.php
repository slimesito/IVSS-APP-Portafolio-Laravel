@extends('layout.layout')

@section('content')

    <div class="container-fluid page-body-wrapper">

        @include('layout.success-message')

        <div class="logo" align="center">
            <a href="{{ route('index') }}"><img src="logoivssrojo.png"></a>
        </div>

        <div>

            <table class="content-table">

                <thead>
            
                    <tr>
                
                        <th scope="col">Cédula</th>
                        <th scope="col">Apellido</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Sexo</th>
                        <th scope="col">Edo. Civil</th>
                        <th scope="col">Fecha Nacimiento</th>
                        <th scope="col">Fecha Fallecimiento</th>
                        <th scope="col">Acciones</th>
                
                    </tr>
            
                </thead>
            
                <tbody>
            
                    <tr>
                
                        @foreach($pensionados as $pensionado)

                            <tr>
                                <td>{{ $pensionado->cedula }}</td>
                                <td>{{ $pensionado->apellido }}</td>
                                <td>{{ $pensionado->nombre }}</td>
                                <td>{{ $pensionado->sexo }}</td>
                                <td>{{ $pensionado->estado }}</td>
                                <td>{{ $pensionado->nacimiento }}</td>
                                <td>{{ $pensionado->fallecimiento }}</td>
                                <td><a class="edit-btn" style="width: 40px" href="{{ route('update', $pensionado->id) }}">Editar</a></td>
                            </tr>
                            
                        @endforeach
                
                    </tr>
            
                </tbody>

            </table>

        </div>

    </div>

@endsection  