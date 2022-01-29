@extends('..template.layout')

@section('inicio')
    <h1> <em>Sistemas de Informacion</em></h1>
    <p>Es un conjunto de datos los cuales interactuan entre si con un fin comun.</p>
@endsection

@section('contenido')
    <p>
        En informática, los sistemas de información ayudan a administrar, recolectar, 
        recuperar, procesar, almacenar y distribuir información relevante para los procesos 
        fundamentales y las particularidades de cada organización. <br><br>

        <h2>Características de un <em>sistema de información</em></h2> 
        Un sistema de información se caracteriza principalmente por la eficiencia que procesa los datos en relación al área de acción. Los sistemas de información se alimentan de los procesos y herramientas de estadística, probabilidad, inteligencia de negocio, producción, marketing, entre otros para llegar a la mejor solución. <br>

        Un sistema de información se destaca por su diseño, facilidad de uso, flexibilidad, mantenimiento automático de los registros, apoyo en toma de decisiones críticas y mantener el anonimato en informaciones no relevantes.
    </p> 

@endsection

@section('numeros')
<h2 class="text-center"><me>Componentes de un Sistema de Informacion.<me></h2>
<section class="section" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12"
                    data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                    <div class="features-item">
                        <div class="features-icon">
                            <img src="assets/images/entrada.png" alt="">
                            <h4>Entrada</h4>
                            <p>Por donde esque se alimentan los datos.</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12"
                    data-scroll-reveal="enter bottom move 30px over 0.6s after 0.4s">
                    <div class="features-item">
                        <div class="features-icon">
                            <img src="assets/images/datos.png" alt="">
                            <h4>Proceso</h4>
                            <p>Es el uso de herramientas de las areas completadas para relacionar, resumir o concluir.</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12"
                    data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
                    <div class="features-item">
                        <div class="features-icon">
                            <img src="assets/images/salida.png" alt="">
                            <h4>Salida</h4>
                            <p>En este punto se refleja la produccion de la informacion.</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12"
                    data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
                    <div class="features-item">
                        <div class="features-icon">
                            <img src="assets/images/retro.png" alt="">
                            <h4>Retroalimentacion</h4>
                            <p>Los resultados obtenidos son integrados y se procesan nuevamente.</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

