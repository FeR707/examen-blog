@extends('..template.layout')

@section('inicio')
    <h1>Los sistemas con arquitectura <em>Cliente/Servidor</em></h1>
    <p></p>
@endsection

@section('contenido')
    <h2>Protocolos cliente-servidor</h2>
    <p>Los clientes generalmente se comunican con los servidores mediante el conjunto de protocolos TCP / IP. TCP 
        es un protocolo orientado a la conexión, lo que significa que se establece y mantiene una conexión hasta que los programas de aplicación en cada extremo hayan terminado de intercambiar mensajes.</p>
    <br><p>Determina cómo dividir los datos de la aplicación en paquetes que las redes pueden entregar, envía paquetes y acepta paquetes de la capa de red, gestiona el control de flujo y maneja la retransmisión de paquetes descartados o confusos, 
        así como el reconocimiento de todos los paquetes que llegan. En el modelo de comunicación de interconexión de sistemas abiertos (OSI), TCP cubre partes de la capa 4, la capa de transporte y partes de la capa 5, la capa de sesión.</p>
    <br><br>
    <h3><em>Arquitectura Cliente-Servidor</em></h3>
    <p>Cliente-Servidor es uno de los estilos arquitectónicos distribuidos más conocidos, el cual está compuesto por dos componentes, el proveedor y el consumidor. 
        El proveedor es un servidor que brinda una serie de servicios o recursos los cuales son consumido por el Cliente.</p><br>
        <p>En una arquitectura Cliente-Servidor existe un servidor y múltiples clientes que se conectan al servidor para recuperar todos los recursos necesarios para funcionar, en este sentido, el cliente solo es una capa para representar 
            los datos y se detonan acciones para modificar el estado del servidor, mientras que el servidor es el que hace todo el trabajo pesado.</p><br>
        <p><b>En Dicha arquitectura disponemos de dos tipos de agentes:</b></p>
        <p><b>Cliente: </b>Ordenador o programa informático que solicita información.</p>
        <p><b>Servidor: </b>Ordenador o programa informático que dispone de información.</p><br><br>
    <h3><em>Tipos de Arquitectura Cliente Servidor</em></h3>
    <p><b>Cliente Activo, Servidor Pasivo: </b>El cliente realiza la practica totalidad del trabajo de procesado de la información. Ejemplo: Google Earth.</p>
    <p><b></b></p>
    <p><b>Cliente Pasivo, Servidor Pasivo: </b>Tanto el cliente como el Servidor simplemente pasan información. Ejemplo: Gateways de comunicaciones VoIP.</p>
    <p><b>Cliente Pasivo, Servidor Activo: </b>El Servidor realiza todo el trabajo de procesado y el cliente simplemente presenta los datos. Ejemplo: Servidores de terminales.</p>
    <p><b>Cliente Activo, Servidor Activo: </b>Tanto el Servidor como el Cliente procesan la información. Ejemplo: Servicios de Correo Electrónico.</p>
    
@endsection