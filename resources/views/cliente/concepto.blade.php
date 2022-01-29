@extends('..template.layout')

@section('inicio')
    <h1>Conceptos de <em>Cliente y Servidor</em></h1>
    <p>Un cliente realiza peticiones a otro programa, el servidor, quien le da respuesta.</p>
@endsection

@section('contenido')
    <p>El concepto de cliente servidor, o cliente-servidor, refiere por lo tanto a un modelo de comunicación que vincula a varios dispositivos informáticos a través de una red. 
        El cliente, en este marco, realiza peticiones de servicios al servidor, que se encarga de satisfacer dichos requerimientos.</p><br>
    <p>Con esta arquitectura, las tareas se distribuyen entre los servidores (que proveen los servicios) y los clientes (que demandan dichos servicios). 
       <br> Dicho de otro modo: el cliente le pide un recurso al servidor, que brinda una respuesta.</p>

       <br><br>
       <img src="assets/images/servidor.png" alt="" style="width: 700px"><br><br>
       <p>El concepto de cliente servidor, o cliente-servidor, refiere por lo tanto a un modelo de comunicación que vincula a varios dispositivos informáticos a través de una red. 
           El cliente, en este marco, realiza peticiones de servicios al servidor, que se encarga de satisfacer dichos requerimientos.</p><br>
        <p>Con esta arquitectura, las tareas se distribuyen entre los servidores (que proveen los servicios) y los clientes (que demandan dichos servicios). 
            Dicho de otro modo: el cliente le pide un recurso al servidor, que brinda una respuesta.</p>
        <p>Este tipo de modelos permite repartir de la capacidad de procesamiento. El servidor puede ejecutarse sobre más de un equipo y ser más de un programa. 
            De acuerdo a los servicios que brinda, se lo puede llamar servidor web, servidor de correo o de otro modo.</p>

@endsection
