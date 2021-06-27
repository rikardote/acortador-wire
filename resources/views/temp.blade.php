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
<body class="dark:bg-gray-700">

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">

            <button
                class="flex items-center w-20 h-10 transition duration-300 bg-white rounded-full shadow focus:outline-none"
                onclick="toggleTheme()">
                <div
                    id="switch-toggle"
                    class="relative w-12 h-12 p-1 text-white transition duration-500 transform -translate-x-2 bg-yellow-500 rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" />
                    </svg>
                </div>
            </button>

            <livewire:short-link />

        </div>
    </div>

    @livewireScripts
    <script src="{{ asset('js/app.js') }}"></script>
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

            <h1 class="mb-10 text-4xl font-bold ">Grid Template Columns</h1>
                <div class="grid grid-cols-1 gap-6 mb-6 sm:grid-cols-2">
                    <div class="p-6 bg-white rounded-lg shadow-sm">
                        <p>Col-6</p>
                    </div>
                    <div class="p-6 bg-white rounded-lg shadow-sm">
                        <p>Col-6</p>
                    </div>
                </div>
                <div class="grid grid-cols-1 gap-6 mb-6 sm:grid-cols-3">
                    <div class="p-6 bg-white rounded-lg shadow-sm">
                        <p>Col-4</p>
                    </div>
                    <div class="p-6 bg-white rounded-lg shadow-sm">
                        <p>Col-4</p>
                    </div>
                    <div class="p-6 bg-white rounded-lg shadow-sm">
                        <p>Col-4</p>
                    </div>
                </div>
                <div class="grid grid-cols-1 gap-6 mb-6 sm:grid-cols-4">
                    <div class="p-6 bg-white rounded-lg shadow-sm">
                        <p>Col-3</p>
                    </div>
                    <div class="p-6 bg-white rounded-lg shadow-sm">
                        <p>Col-3</p>
                    </div>
                    <div class="p-6 bg-white rounded-lg shadow-sm">
                        <p>Col-3</p>
                    </div>
                    <div class="p-6 bg-white rounded-lg shadow-sm">
                        <p>Col-3</p>
                    </div>
                </div>



</body>
</html>
