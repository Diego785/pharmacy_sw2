<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @livewireStyles
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    <link href="https://cdn.tailwindcss.com" rel="stylesheet">
    <script src="{{ mix('js/app.js') }}"></script>
</head>
<body>

    <!-- component -->
<div class="flex min-h-screen items-center justify-center">
    <section class="px-40">
        <div class="mb-24 text-center">
            <h3 class="block antialiased font-sans font-semibold relative mb-5 mt-10 text-center text-2xl leading-tight tracking-normal text-black"> Descubre nuestras respuestas </h3>
            <h1 class="block antialiased font-sans relative my-5 text-center text-4xl font-bold leading-tight tracking-normal text-black md:text-5xl"> Preguntas Frecuentes </h1>
            <p class="block antialiased font-sans relative my-5 mx-auto text-center text-lg font-normal leading-relaxed tracking-normal text-gray-600 md:text-xl lg:max-w-4xl"> ¡Consulta lo que otras personas suelen preguntar! </p>
        </div>
    
        <div class="grid grid-cols-12 ">
            <div class="col-span-12 lg:col-start-4 lg:col-span-6">
                <h5 class="block antialiased tracking-normal font-sans text-xl leading-snug text-inherit mt-6 mb-1 font-semibold !text-black"> ¿Qué es My Analysis Center? </h5>
                <div class="block antialiased font-sans text-base leading-relaxed mb-4 font-normal text-gray-600"> My Analysis Center se especializa en el desarrollo e implementación de soluciones de análisis predictivo para empresas de diversos sectores. Nuestra startup se distingue por ofrecer una combinación única de algoritmos avanzados y expertos en el dominio, permitiendo a las empresas tomar decisiones informadas y estratégicas. </div>
                <hr class="my-6 border-blue-gray-50">
    
                <h5 class="block antialiased tracking-normal font-sans text-xl leading-snug text-inherit mt-6 mb-1 font-semibold !text-black"> ¿Cómo funciona el sistema de predicción de My Analysis Center? </h5>
                <div class="block antialiased font-sans text-base leading-relaxed mb-4 font-normal text-gray-600"> El sistema de predicción de My Analysis Center utiliza algoritmos de aprendizaje automático y técnicas estadísticas avanzadas para analizar grandes conjuntos de datos. Esta combinación permite prever tendencias, identificar patrones ocultos y proporcionar a nuestros clientes información valiosa para la toma de decisiones proactivas. </div>
                <hr class="my-6 border-blue-gray-50">
    
                <!-- Otras preguntas frecuentes aquí... -->
    
                <h5 class="block antialiased tracking-normal font-sans text-xl leading-snug text-inherit mt-6 mb-1 font-semibold !text-black"> ¿Cómo pueden las empresas interesadas ponerse en contacto y comenzar a beneficiarse de los servicios de My Analysis Center? </h5>
                <div class="block antialiased font-sans text-base leading-relaxed mb-4 font-normal text-gray-600"> Las empresas interesadas pueden ponerse en contacto con nosotros a través de nuestro sitio web o mediante nuestro equipo de ventas. Ofrecemos consultas iniciales gratuitas para comprender las necesidades específicas de cada cliente y diseñar soluciones personalizadas. </div>
                <hr class="my-6 border-blue-gray-50">
    
                <h5 class="block antialiased tracking-normal font-sans text-xl leading-snug text-inherit mt-6 mb-1 font-semibold !text-black"> ¿Qué planes de expansión o desarrollo tiene My Analysis Center para el futuro? </h5>
                <div class="block antialiased font-sans text-base leading-relaxed mb-4 font-normal text-gray-600"> Estamos enfocados en expandir nuestra presencia en nuevos sectores y geografías. Además, planeamos desarrollar nuevas herramientas y servicios para seguir siendo líderes en el campo del análisis predictivo, siempre comprometidos con la innovación y la excelencia. </div>
            </div>
        </div>
    
        <div class="w-full pt-5 px-4 mb-8 mx-auto ">
            <div class="text-sm text-gray-700 py-1">
                Hecho con <a class="text-gray-700 font-semibold" href="https://david-ui-angular.com/?ref=tailwindcomponents" target="_blank">David UI Angular</a> por <a href="https://www.creative-tim.com?ref=tailwindcomponents" class="text-gray-700 font-semibold" target="_blank">Creative Tim</a>.
            </div>
        </div>
    </section>
    
    
</div>

@livewireScripts

    
</body>
</html>