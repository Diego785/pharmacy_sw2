<div x-data="{ sidebarOpen: false }" class="flex h-screen bg-gray-200">
    <div :class="sidebarOpen ? 'block' : 'hidden'" @click="sidebarOpen = false"
        class="fixed inset-0 z-20 transition-opacity bg-black opacity-50 lg:hidden"></div>

    <div :class="sidebarOpen ? 'translate-x-0 ease-out' : '-translate-x-full ease-in'"
        class="fixed inset-y-0 left-0 z-30 w-64 overflow-y-auto transition duration-300 transform bg-white lg:translate-x-0 lg:static lg:inset-0">
        <div class="flex items-center justify-center mt-8">
            <div class="flex items-center">
                <img class="logo"
                    src="https://electtrotech.com/cdn/shop/files/logo-no-background.png?height=628&pad_color=ffffff&v=1693521614&width=1200"
                    alt="">

            </div>
        </div>

        <nav class="mt-10">
            {{-- <a href="http://3.135.182.212:8000/"
                class="flex items-center px-6 py-2 mt-4 text-gray-100 bg-gray-700 bg-opacity-25" href="#">
                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z"></path>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z"></path>
                </svg>

                <span class="mx-3">Dashboard</span>
            </a> --}}
            <!----------------------------------------------------->
            <ul class="flex flex-col mt-4 space-x-6 text-sm font-medium lg:flex-row xl:space-x-8 lg:mt-0">

                <!---->
                <li x-data="{ subMenuOpen: false }">
                    <a @click="subMenuOpen = !subMenuOpen"
                        class="flex items-center px-6 py-2 mt-4 text-gray-500 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100"
                        href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
                            <path
                                d="M7.5 6.5C7.5 8.981 9.519 11 12 11s4.5-2.019 4.5-4.5S14.481 2 12 2 7.5 4.019 7.5 6.5zM20 21h1v-1c0-3.859-3.141-7-7-7h-4c-3.86 0-7 3.141-7 7v1h17z">
                            </path>
                        </svg>

                        <span class="mx-3">usuarios</span>
                    </a>

                    <!-- Submenu -->
                    <ul x-show="subMenuOpen" class="ml-4 mt-2 space-y-2 text-sm font-medium text-gray-100">
                        <li>
                            <a href="{{ URL::to('users') }}"
                                class="flex items-center px-6 py-2 mt-4 text-gray-500 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100">


                                Usuarios</a>
                        </li>
                        <li>
                            <a href="{{ URL::to('roles') }}"
                                class="flex items-center px-6 py-2 mt-4 text-gray-500 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100">
                                Roles</a>
                        </li>
                    </ul>
                    <ul class="flex flex-col mt-4 space-x-6 text-sm font-medium lg:flex-row xl:space-x-8 lg:mt-0">
                        <!------------------>
                        <li x-data="{ subMenuOpen: false }">
                            <a @click="subMenuOpen = !subMenuOpen"
                                class="flex items-center px-6 py-2 mt-4 text-gray-500 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100"
                                href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
                                    <path
                                        d="M12.586 2.586A2 2 0 0 0 11.172 2H4a2 2 0 0 0-2 2v7.172a2 2 0 0 0 .586 1.414l8 8a2 2 0 0 0 2.828 0l7.172-7.172a2 2 0 0 0 0-2.828l-8-8zM7 9a2 2 0 1 1 .001-4.001A2 2 0 0 1 7 9z">
                                    </path>
                                </svg>
                                <span class="mx-3">Ventas</span>
                            </a>

                            <!-- Submenu -->

                            <ul x-show="subMenuOpen" class="ml-4 mt-2 space-y-2 text-sm font-medium text-gray-100">
                                <li>
                                    <a href="{{ URL::to('clientes') }}"
                                        class="flex items-center px-6 py-2 mt-4 text-gray-500 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100">


                                        Clientes</a>
                                </li>
                                <li>
                                    <a href="{{ URL::to('facturas') }}"
                                        class="flex items-center px-6 py-2 mt-4 text-gray-500 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100">
                                        Facturas</a>
                                </li>

                            </ul>
                        </li>
                    </ul>
                    <ul class="flex flex-col mt-4 space-x-6 text-sm font-medium lg:flex-row xl:space-x-8 lg:mt-0">
                        <!---------->
                        <li x-data="{ subMenuOpen: false }">
                            <a @click="subMenuOpen = !subMenuOpen"
                                class="flex items-center px-6 py-2 mt-4 text-gray-500 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100"
                                href="#">
                                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10">
                                    </path>
                                </svg>

                                <span class="mx-3">Productos</span>
                            </a>

                            <!-- Submenu -->
                            <ul x-show="subMenuOpen" class="ml-4 mt-2 space-y-2 text-sm font-medium text-gray-100">
                                <li>
                                    <a href="{{ URL::to('productos') }}"
                                        class="flex items-center px-6 py-2 mt-4 text-gray-500 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100">
                                        Productos</a>
                                </li>
                                <li>
                                    <a href="{{ URL::to('categoria') }}"
                                        class="flex items-center px-6 py-2 mt-4 text-gray-500 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100">
                                        Categoria</a>
                                </li>
                                <li>
                                    <a href="{{ URL::to('inventarios') }}"
                                        class="flex items-center px-6 py-2 mt-4 text-gray-500 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100">
                                        Inventario</a>
                                </li>
                                <li>
                                    <a href="{{ URL::to('nota-bajas') }}"
                                        class="flex items-center px-6 py-2 mt-4 text-gray-500 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100">
                                        Registro de Bajas</a>
                                </li>
                                <li>
                                    <a href="{{ URL::to('nota-devolucions') }}"
                                        class="flex items-center px-6 py-2 mt-4 text-gray-500 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100">
                                        Registro de Devoluciones</a>
                                </li>
                                <li>
                                    <a href="{{ URL::to('proveedors') }}"
                                        class="flex items-center px-6 py-2 mt-4 text-gray-500 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100">
                                        Proveedores</a>
                                </li>
                            </ul>
                        </li>
                        <!------>
                    </ul>
                    {{-- <ul class="flex flex-col mt-4 space-x-6 text-sm font-medium lg:flex-row xl:space-x-8 lg:mt-0">
                  
                    <li x-data="{ subMenuOpen: false }">
                        <a @click="subMenuOpen = !subMenuOpen"
                            class="flex items-center px-6 py-2 mt-4 text-gray-500 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100"
                            href="#">
                            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z">
                        </path>
                    </svg>

                    <span class="mx-3">Reportes</span>
                        </a>

                        <!-- Submenu -->
                        <ul x-show="subMenuOpen" class="ml-4 mt-2 space-y-2 text-sm font-medium text-gray-100">
                            <li>
                                <a href="#" class="flex items-center px-6 py-2 mt-4 text-gray-500 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100">
                                    Subitem 1</a>
                            </li>
                            <li>
                                <a href="#" class="flex items-center px-6 py-2 mt-4 text-gray-500 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100">
                                    Subitem 2</a>
                            </li>
                        </ul> --}}
                </li>
            </ul>
            <ul class="flex flex-col mt-4 space-x-6 text-sm font-medium lg:flex-row xl:space-x-8 lg:mt-0">

                <!---->
                <li x-data="{ subMenuOpen: false }">
                    <a @click="subMenuOpen = !subMenuOpen"
                        class="flex items-center px-6 py-2 mt-4 text-gray-500 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100"
                        href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
                            <path
                                d="m5.705 3.71-1.41-1.42C1 5.563 1 7.935 1 11h1l1-.063C3 8.009 3 6.396 5.705 3.71zm13.999-1.42-1.408 1.42C21 6.396 21 8.009 21 11l2-.063c0-3.002 0-5.374-3.296-8.647zM12 22a2.98 2.98 0 0 0 2.818-2H9.182A2.98 2.98 0 0 0 12 22zm7-7.414V10c0-3.217-2.185-5.927-5.145-6.742C13.562 2.52 12.846 2 12 2s-1.562.52-1.855 1.258C7.184 4.073 5 6.783 5 10v4.586l-1.707 1.707A.996.996 0 0 0 3 17v1a1 1 0 0 0 1 1h16a1 1 0 0 0 1-1v-1a.996.996 0 0 0-.293-.707L19 14.586z">
                            </path>
                        </svg>

                        <span class="mx-3">Notificaciones</span>
                    </a>

                    <!-- Submenu -->
                    <ul x-show="subMenuOpen" class="ml-4 mt-2 space-y-2 text-sm font-medium text-gray-100">
                        <li>
                            <a href="{{ URL::to('notificacions') }}"
                                class="flex items-center px-6 py-2 mt-4 text-gray-500 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100">
                                Notificaciones</a>
                        </li>
                        <li>
                            <a href="{{ URL::to('pedido-productos') }}"
                                class="flex items-center px-6 py-2 mt-4 text-gray-500 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100">
                                Pedidos</a>
                        </li>
                    </ul>
                </li>

            </ul>
            <!---------------------------------------------------------------------------------------------->

        </nav>
    </div>
