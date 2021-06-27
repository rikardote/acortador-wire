<nav>
    <div class="flex p-6 bg-white shadow-sm">
        <h6 class="flex-grow text-2xl font-bold"> Templune </h6>
        <p>Ricardo Fuentes</p>
    </div>
    <div class="flex h-screen">
        <div class="hidden w-64 p-6 border-r border-gray-200 md:block">
            <h6 class="mb-4 font-bold">Acciones Rapidas</h6>
            <ul>
                <li class="flex mb-8">
                    <div class="p-2 mr-3 bg-white rounded-lg shadow-sm">
                        <img src="{{ asset('/img/home.svg') }}" alt="">
                    </div>
                    <span class="self-center">Inicio</span>
                </li>
                <li class="flex mb-8">
                    <div class="p-2 mr-3 bg-white rounded-lg shadow-sm">
                        <img src="{{ asset('/img/users.svg') }}" alt="">
                    </div>
                    <span class="self-center">Usuarios</span>
                </li>
                <li class="flex mb-8">
                    <div class="p-2 mr-3 bg-white rounded-lg shadow-sm">
                        <img src="{{ asset('/img/chart-bar.svg') }}" alt="">
                    </div>
                    <span class="self-center">Ventas</span>
                </li>
            </ul>
            <h6 class="mb-4 font-bold">Configuracion</h6>
            <ul>
                <li class="flex mb-8">
                    <div class="p-2 mr-3 bg-white rounded-lg shadow-sm">
                        <img src="{{ asset('/img/user.svg') }}" alt="">
                    </div>
                    <span class="self-center">Perfil</span>
                </li>
                <li class="flex mb-8">
                    <div class="p-2 mr-3 bg-white rounded-lg shadow-sm">
                        <img src="{{ asset('/img/cog.svg') }}" alt="">
                    </div>
                    <span class="self-center">Ajustes</span>
                </li>
            </ul>
        </div>
        <div class="w-full p-6">
            <div class="grid grid-cols-1 gap-4 bg-white rounded shadow-sm sm:grid-cols-2 xl:grid-cols-4">
                <div class="flex flex-col items-center px-4 py-6 border-b sm:border-0 xl:border-r">
                    <div class="flex items-center mb-2">
                        <p class="mr-2 text-base">Ingresos</p>
                        <p class="text-green-500 bg-green-100 rounded-full font-bold py-0.5 px-2">10.20%</p>
                    </div>

                    <p class="mb-2 text-3xl font-bold">$325,000.00</p>
                    <a href="" class="flex text-blue-400">Ver informacion
                        <svg class="w-5 ml-1" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>

                    </a>
                </div>
                <div class="flex flex-col items-center px-4 py-6 border-0 border-b sm xl:border-r">
                    <div class="flex items-center mb-2">
                        <p class="mr-2 text-base">Impresiones</p>
                        <p class="text-green-500 bg-green-100 rounded-full font-bold py-0.5 px-2">10.20%</p>
                    </div>
                    <p class="mb-2 text-3xl font-bold">820,000</p>
                    <a href="" class="flex text-blue-400">Ver informacion
                        <svg class="w-5 ml-1" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>

                    </a>
                </div>
                <div class="flex flex-col items-center px-4 py-6 border-0 border-b sm xl:border-r">
                    <div class="flex items-center mb-2">
                        <p class="mr-2 text-base">Reproducciones</p>
                        <p class="text-green-500 bg-green-100 rounded-full font-bold py-0.5 px-2">10.20%</p>
                    </div>
                    <p class="mb-2 text-3xl font-bold">375,000</p>
                    <a href="" class="flex text-blue-400">Ver informacion
                        <svg class="w-5 ml-1" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>

                    </a>
                </div>
                <div class="flex flex-col items-center px-4 py-6 border-b sm:border-0">
                    <div class="flex items-center mb-2">
                        <p class="mr-2 text-base">Suscriptores</p>
                        <p class="text-green-500 bg-green-100 rounded-full font-bold py-0.5 px-2">10.20%</p>
                    </div>
                    <p class="mb-2 text-3xl font-bold">120,000</p>
                    <a href="" class="flex text-blue-400">Ver informacion
                        <svg class="w-5 ml-1" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>

                    </a>
                </div>
            </div>
</nav>
