@extends('..template.layout')

@section('inicio')
    <h1>Los sistemas de información de acuerdo a su arquitectura</h1>
@endsection

@section('contenido')
    <h2>Arquitectura de la información</h2>
    <p>
    Los sistemas reales son demasiado grandes y deben ser divididos en partes más pequeñas según el principio de abstracción. <br>
    La arquitectura de la información (AI) es la disciplina y arte encargada del estudio, análisis, organización, disposición y estructuración de la información en espacios de información, y de la selección y presentación de los datos en los sistemas de 
    información interactivos y no interactivos. <br><br>
    En relación con la World Wide Web, el Information Architecture Institute define la «arquitectura de la información» como: <br>
    *El diseño estructural en entornos de información compartida. <br>
    *El arte y la ciencia de organizar y rotular sitios web, intranets, comunidades en línea y software para promover la usabilidad y la «encontrabilidad» (Findability: la característica de poder ser encontrado a través de las búsquedas en Internet). <br>
    *Una comunidad emergente orientada a aplicar al entorno digital los principios del diseño y la arquitectura. <br><br>
    <h3>Arquitectura basada en capas</h3>
    La arquitectura basada en capas se enfoca en la distribución de roles y responsabilidades de forma jerárquica proveyendo una forma muy efectiva de separación de responsabilidades. El rol indica el modo y tipo de interacción con otras capas, y la responsabilidad indica la funcionalidad que está siendo desarrollada. <br>
    El estilo de arquitectura basado en capas se identifica por las siguientes características: <br>
    • Describe la descomposición de servicios de forma que la mayoría de la interacción ocurre solamente entre capas vecinas. <br>
    • Las capas de una aplicación pueden residir en la misma maquina física (misma capa) o puede estar distribuido sobre diferentes computadores (n-capas). <br>
    • Los componentes de cada capa se comunican con otros componentes en otras capas a través de interfaces muy bien definidas. <br>
    • Este modelo ha sido descrito como una “pirámide invertida de re-uso” donde cada capa agrega responsabilidad y abstracción a la capa directamente sobre ella. <br><br>
    
    <b>Los siguientes son algunas variaciones del estilo de arquitectura basado en capas:</b> <br><br>

    <b>• Capas estrictas (Strict layering).</b> Cada capa solo puede invocar a la capa directamente debajo de a ella. <br>
    <b>• Saltos de Capas (Layer skipping). </b> Las capas pueden invocar otras capas más profundas que las que están directamente debajo de ellas. Esto puede incrementar el rendimiento pero impacta la portabilidad. <br>
    <b>• Capa de Caja Negra (Black-box layering). </b> Los limites de las capas y sus dependencias esta definidas de forma estricta usando interfaces, lo que soporta extensiones en run-time, intercepción y mejora la capacidad de realiza pruebas. <br>
    <b>• Capa de Caja Blanca (White-box layering). </b> Clases que colaboran entre los límites de las capas y están altamente acopladas. <br>
    <img src="assets/images/caps.gif" alt="" style="width: 700px">
    </p><br>
    <h3>Arquitectura orientada a servicios</h3>
    <p>
    La arquitectura orientada a los servicios (SOA) es un tipo de diseño de software que permite reutilizar sus elementos gracias a las interfaces de servicios que se comunican a través de una red con un lenguaje común. <br>
    Un servicio es una unidad autónoma de una o más funciones del software diseñada para realizar una tarea específica, como recuperar cierta información o ejecutar una operación. Contiene las integraciones de datos y código que se necesitan para llevar a cabo una función empresarial completa y diferenciada. Se puede acceder a él de forma remota e interactuar con él o actualizarlo de manera independiente. <br>
    En otras palabras, la SOA integra los elementos del software que se implementan y se mantienen por separado, y permite que se comuniquen entre sí y trabajen en conjunto para formar aplicaciones de software en distintos sistemas. <br> <br>
   <b>Los elementos esenciales de la arquitectura orientada a los servicios consisten en tres funciones. </b> <br>
    <b>Proveedor de servicios: </b> Se encarga de crear servicios web, ofrecerlos a un registro de servicios disponibles y gestionar sus condiciones de uso. <br>
    <b>Agente o registro de servicios: </b> Se encarga de brindar información acerca del servicio a quien lo solicite, y puede ser público o privado. <br>
    <b>Usuario del servicio o persona que lo solicita:</b> Buscará un servicio en el registro o por medio del agente, y se conectará con el proveedor para recibirlo.<br>
    </p>
    <img src="assets/images/servicios.jpg" alt="" style="width: 700px">
@endsection