@extends('..template.layout')

@section('inicio')
    <h1>Diagramación de componentes de la arquitectura  <em>Cliente/Servidor</em></h1>
@endsection

@section('contenido')
    <h2>Componentes del Modelo Cliente/Servidor</h2>
    <img src="assets/images/CS.jpg" alt="" style="width: 700px"><br><br><br>
    <h5>Nivel de Presentacion</h5>
    <p>
    Agrupa todos los elementos asociados al componente cliente 
    </p>
    <br><br>
    
    <h5>Nivel de Aplicación</h5>
    <p>
    Agrupa todos los elementos asociados al componente servidor 
    </p>
    <br><br>

    <h5>Nivel de comunicación</h5>
    <p>
    Agrupa todos los elementos asociados que hacen posiblela comunicacion entre los componentes Cliente y Servidor
    </p><br><br>

    <h5>Nivel de base de datos</h5>
    <p>
    Agrupa todas las actividades asociados al acceso de los datos 
    </p>
    <br><br>

    <h5>Clientes</h5>
    <p>
    Es el proceso que permite al usuario formular los requerimientos y pasarlos al servidor. <br>
    <b>Caracteristicas</b><br>
    • Administrar la interfaz de usuario. <br>
    • Interactuar con el usuario. <br>
    • Procesar la lógica de la aplicación y hacer validaciones locales. <br>
    • Generar requerimientos de bases de datos. <br>
    • Recibir resultados del servidor. <br>
    • Formatear resultados.
    </p><br><br>

    <h5>Clasificacion de clientes</h5>
    <p>
    <b>Cliente basado en aplicación de usuario.</b>
    Si los datos son de baja interacción y están fuertemente relacionados con la actividad de los usuarios de esos clientes.
    <br><b>Cliente basado en lógica de negocio.</b> Toma datos suministrados por el usuario y/o la base de datos y efectúa los cálculos necesarios según los requerimientos del usuario.
    </p><br><br>

    <h5>Servidor</h5>
    <p>
    Un servidor es todo proceso que proporciona un servicio a otros. Es el proceso encargado de atender a múltiples clientes que hacen peticiones de algún recurso administrado por él.
    El servidor normalmente maneja todas las funciones relacionadas con la mayoría de las reglas del negocio y los recursos de datos
    </p><br><br>

    <h5>Funciones del servidor</h5>
    <p>
    • Aceptar los requerimientos de bases de datos que hacen los clientes. <br>
    • Procesar requerimientos de bases de datos. <br>
    • Formatear datos para trasmitirlos a los clientes. <br>
    • Procesar la lógica de la aplicación y realizar validaciones a nivel de bases de datos.
    </p><br><br>

    <h5>Middleware</h5>
    <p>
    Es un módulo intermedio que actúa como conductor entre sistemas permitiendo a cualquier usuario de sistemas de información comunicarse con varias fuentes de información que se encuentran conectadas por una red <br>
    Middleware se estructura en tres niveles: <br>
    • Protocolo de transporte. <br>
    • Network Operating System (NOS). <br>
    • Protocolo específico del servicio. <br>
    </p><br>
    <img src="assets/images/modelo.jpg" alt="" style="width: 700px">

@endsection