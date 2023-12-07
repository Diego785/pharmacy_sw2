<!-- componente -->
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/c151b27f34.js" crossorigin="anonymous"></script>
    <style>
        .icon::after {
            content: '';
            display: block;
            position: absolute;
            border-top: 23px solid transparent;
            border-bottom: 17px solid transparent;
            border-left: 12px solid #3182ce;
            left: 100%;
            top: 0;
        }
    </style>
    @livewireStyles
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    <link href="https://cdn.tailwindcss.com" rel="stylesheet">
    <script src="{{ mix('js/app.js') }}"></script>
</head>

<body>
    <form action="" class="form bg-white p-6 my-10 relative">

        <div class=" text-white w-6 h-6 absolute flex items-center justify-center p-5"
            style="left:-40px">
            <i class="fal fa-phone-volume fa-fw text-2xl transform -rotate-45"></i>
        </div>
        <h3 class="text-2xl text-gray-900 font-semibold">¡Déjanos llamarte!</h3>
        <p class="text-gray-600"> Para ayudarte a elegir tu propiedad</p>
        <div class="flex space-x-5 mt-3">
            <input type="text" name="" id="" placeholder="Tu Nombre" class="border p-2  w-1/2">
            <input type="tel" name="" id="" placeholder="Tu Número" class="border p-2 w-1/2">
        </div>
        <input type="email" name="" id="" placeholder="Tu Correo Electrónico" class="border p-2 w-full mt-3">
        <textarea name="" id="" cols="10" rows="3" placeholder="Cuéntanos sobre la propiedad deseada"
            class="border p-2 mt-3 w-full"></textarea>
        <p class="font-bold text-sm mt-3">Acuerdo GDPR *</p>
        <div class="flex items-baseline space-x-2 mt-2">
            <input type="checkbox" name="" id="" class="inline-block">
            <p class="text-gray-600 text-sm">Consiento que este sitio web almacene mi información enviada para que puedan responder a mi consulta.</p>
        </div>
        <input type="submit" value="Enviar"
            class="w-full mt-6 bg-blue-600 hover:bg-blue-500 text-white font-semibold p-3">

    </form>

    @livewireScripts

</body>

</html>
