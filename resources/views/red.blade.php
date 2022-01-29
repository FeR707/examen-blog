@extends('template.layout')

@section('inicio')
    <h1>Protocolos de <em>comunicación en red</em></h1>
    <p>Un protocolo es un conjunto de reglas: los protocolos de red son estándares y políticas formales</p>
@endsection

@section('contenido')
    
    <p>Los utilizamos prácticamente todos los días, aunque la mayoría de los usuarios no lo sepan, ni conozcan su funcionamiento. <br>
        La interconexión de sistemas o redes de computadoras son la base de las comunicaciones hoy en día y están diseñadas bajo múltiples protocolos de comunicación. </p>
    <br><p>Los protocolos de red incluyen mecanismos para que los dispositivos se identifiquen y establezcan conexiones entre sí, así como reglas de formato que especifican cómo se forman los paquetes y los datos en los mensajes enviados y recibidos.</p>
    <br><br><h2><em>Tipos de </em>protocolos de red</h2>
    <p>Los protocolos para la transmisión de datos en internet más importantes son TCP (Protocolo de Control de Transmisión) e IP (Protocolo de Internet). 
        De manera conjunta (TCP/IP) podemos enlazar los dispositivos que acceden a la red, algunos otros protocolos de comunicación asociados a internet son POP, SMTP y HTTP.</p>
@endsection

@section('numeros')
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12"
                    data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                    <div class="features-item">
                        <div class="features-icon">
                            <img src="assets/images/comunicacion.png" alt="">
                            <h4>Protocolos de comunicación de red</h4>
                            <p>Protocolos de comunicación de paquetes básicos como TCP / IP y HTTP.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12"
                    data-scroll-reveal="enter bottom move 30px over 0.6s after 0.4s">
                    <div class="features-item">
                        <div class="features-icon">
                            <img src="assets/images/seguridad.png" alt="">
                            <h4>Protocolos de seguridad de red</h4>
                            <p>Implementan la seguridad en las comunicaciones de red entre servidores, incluye HTTPS, SSL y SFTP.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12"
                    data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
                    <div class="features-item">
                        <div class="features-icon">
                            <img src="assets/images/gestion.png" alt="">
                            <h4>Protocolos de gestión de red</h4>
                            <p>Proporcionan mantenimiento y gobierno de red, incluyen SNMP e ICMP.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection