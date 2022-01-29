@extends('..template.layout')

@section('inicio')
    <h1>Los sistemas de conexión libre y a través de redes</h1>
@endsection

@section('contenido')
<h2 class="text-center">Conexion libre</h2>
    <p>
        Este tipo de conexionj hace que las computadoras de escritorio se conecten a las computadoras de servicio empleando software que permite la emulacion de algun tipo de terminal. <br>
        En todos los casos, se les transfiere la informacion haciendo uso de recursos magneticos por transcripcion.
    </p>
    <h2 class="text-center">Conexion de Red</h2>
    <p>
        En la conexion de red, la información reside en una o varias computadoras, los usuarios de esta información hacen uso de computadoras para laborar y todas ellas se encuentran conectadas entre si. Esto brinda la posibilidad de que todos los usuarios puedan acceder a la información de todas las computadoras y a la vez que los diversos sistemas intercambien información. 
    </p>

    <br>
    <img src="assets/images/red.jpg" alt="" style="width: 700px">
@endsection
