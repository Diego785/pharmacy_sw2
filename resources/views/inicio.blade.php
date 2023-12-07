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
    <div class="lg:px-20 md:px-6 px-4 md:py-12 py-8">
        <!--- more free and premium Tailwind CSS components at https://tailwinduikit.com/ --->
        <div class="lg:flex items-center justify-between">
            <div class="lg:w-1/3">
                <h1 class="text-4xl font-semibold leading-9 text-gray-800 dark:text-white">My Analysis Center - Startup</h1>
                <p class="text-base leading-6 mt-4 text-gray-600 dark:text-gray-100">Explora las infinitas posibilidades del desarrollo de software con My Analysis Center: Desarrollo de Software. Sumérgete en un mundo de innovación y eficiencia, donde creamos soluciones tecnológicas excepcionales para impulsar tu éxito.

                    En My Analysis Center, nos especializamos en el diseño y desarrollo de software de vanguardia que transforma tus ideas en aplicaciones prácticas y funcionales. Nuestro enfoque meticuloso garantiza productos de software de alta calidad que satisfacen las necesidades específicas de tu empresa.
                    
                    Inspírate con nuestro catálogo de soluciones, donde encontrarás herramientas y aplicaciones diseñadas para potenciar tu negocio. Desde sistemas personalizados hasta aplicaciones móviles y plataformas web, ofrecemos una gama completa de servicios de desarrollo que se adaptan a tus objetivos y desafíos.
                    
                    Descubre cómo la innovación y la tecnología pueden llevar tu empresa al siguiente nivel. My Analysis Center: Desarrollo de Software está aquí para ofrecerte soluciones de software inteligentes y efectivas. Consulta nuestro catálogo y comienza a dar forma al futuro digital de tu empresa hoy mismo.</p>
             
            </div>
            <div class="lg:w-7/12 lg:mt-0 mt-8">
                <div class="w-full h-full bg-red-200">
                    <img src="https://storage.googleapis.com/dialpad-cms.appspot.com/cms/Single-Item-Card_Playvox-integration-v2.jpg" alt="apartment design"
                        class="w-full sm:block hidden" />
                    <img src="https://storage.googleapis.com/dialpad-cms.appspot.com/cms/Single-Item-Card_Playvox-integration-v2.jpg" alt="apartment design"
                        class="sm:hidden block w-full" />
                </div>
                <div
                    class="grid sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-2 lg:gap-8 gap-6 lg:mt-8 md:mt-6 mt-4">
                    <img src="https://www.nextiva.com/blog/wp-content/uploads/sites/2/call-center-analytics-illustration.png" class="w-full"
                        alt="kitchen" />
                    <img src="https://www.nextiva.com/blog/wp-content/uploads/sites/2/inbound-call-volume-trends-illustration.png" class="w-full"
                        alt="sitting room" />
                </div>
            </div>
        </div>
    </div>
    @livewireScripts

</body>

</html>
