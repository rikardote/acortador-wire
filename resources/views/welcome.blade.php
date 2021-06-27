<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }}</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script>
        if (localStorage.theme === 'dark' || (!'theme' in localStorage && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.querySelector('html').classList.add('dark')
        } else if (localStorage.theme === 'dark') {
            document.querySelector('html').classList.add('dark')
        }
    </script>

</head>
<body class="bg-gray-100">
    <div class="flex p-6 bg-white shadow-sm">
        <h6 class="flex-grow text-2xl font-bold"> Systema  </h6>
        <p>Ricardo Fuentes</p>
    </div>
        <div class="flex h-screen">
            <div class="hidden w-64 p-6 border-r border-gray-200 md:block">
                <h6 class="mb-4 font-bold">Acciones Rapidas</h6>
                <ul>
                    <li class="flex mb-8">
                        <div class="p-2 mr-3 bg-white rounded-lg shadow-sm">
                            <img src="{{asset('/img/home.svg')}}" alt="">
                        </div>
                        <span class="self-center">Inicio</span>
                    </li>
                    <li class="flex mb-8">
                        <div class="p-2 mr-3 bg-white rounded-lg shadow-sm">
                            <img src="{{asset('/img/users.svg')}}" alt="">
                        </div>
                        <span class="self-center">Usuarios</span>
                    </li>
                    <li class="flex mb-8">
                        <div class="p-2 mr-3 bg-white rounded-lg shadow-sm">
                            <img src="{{asset('/img/chart-bar.svg')}}" alt="">
                        </div>
                        <span class="self-center">Ventas</span>
                    </li>
                </ul>
                <h6 class="mb-4 font-bold">Configuracion</h6>
                <ul>
                    <li class="flex mb-8">
                        <div class="p-2 mr-3 bg-white rounded-lg shadow-sm">
                            <img src="{{asset('/img/user.svg')}}" alt="">
                        </div>
                        <span class="self-center">Perfil</span>
                    </li>
                    <li class="flex mb-8">
                        <div class="p-2 mr-3 bg-white rounded-lg shadow-sm">
                            <img src="{{asset('/img/cog.svg')}}" alt="">
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
                            <svg class="w-5 ml-1" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
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
                            <svg class="w-5 ml-1" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
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
                            <svg class="w-5 ml-1" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
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
                            <svg class="w-5 ml-1" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                              </svg>

                        </a>
                    </div>
                </div>

                <div class="py-4">
                   <livewire:picaday />
                   <livewire:short-link />
                </div>

            </div>

        </div>

    @livewireScripts

    <script src="{{ asset('js/app.js') }}"></script>
    @stack('js')

    <script>
        const switchToggle = document.querySelector('#switch-toggle');
        let isDarkmode = false

        const darkIcon = `<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
        </svg>`

        const lightIcon = `<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" />
        </svg>`

        function toggleTheme (){
          isDarkmode = !isDarkmode
          localStorage.setItem('isDarkmode', isDarkmode)
          let htmlClasses = document.querySelector('html').classList;
            if(localStorage.theme == 'dark') {
                htmlClasses.remove('dark');
                localStorage.removeItem('theme')
            } else {
                htmlClasses.add('dark');
                localStorage.theme = 'dark';
            }
            switchTheme()
        }

        function switchTheme (){
          if (isDarkmode) {
            switchToggle.classList.remove('bg-yellow-500','-translate-x-2')
            switchToggle.classList.add('bg-gray-700','translate-x-full')
            setTimeout(() => {
              switchToggle.innerHTML = darkIcon
            }, 250);
          } else {
            switchToggle.classList.add('bg-yellow-500','-translate-x-2')
            switchToggle.classList.remove('bg-gray-700','translate-x-full')
            setTimeout(() => {
              switchToggle.innerHTML = lightIcon
            }, 250);
          }
        }

        switchTheme()


        </script>

</body>
</html>
