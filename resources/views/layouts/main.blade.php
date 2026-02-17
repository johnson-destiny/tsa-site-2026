<html>

<head>
    <title>@yield('title')- Resource Directory</title>
    @vite('resources/css/app.css')
    @livewireStyles
</head>

<body class="font-montserrat">
    <nav class="text-[#472D00] fixed w-full bg-transparent py-4 backdrop-filter backdrop-blur-md top-0 z-1000">
        <div class="flex flex-col px-4 space-y-5">
            <div class="flex flex-row font-bold space-x-5 lg:space-x-20 justify-between text-sm lg:text-base">
                <a href="{{ route('home') }}" class="font-extrabold py-2">Central FI</a>
                <div class="flex flex-row space-x-10">
                    <a href="{{ route('resources.suggest') }}" class="rounded-2xl bg-[#FF4A2E] text-white px-3 py-2">Suggest a Resource</a>
                    <div class="relative inline-block group">
                        <button class="group py-2">View Resources</button>
                        <div class="flex flex-col absolute pl-2 justify-between bg-black/75
                        backdrop-blur-sm text-lg opacity-0 invisible group-hover:block group-hover:opacity-100
                        group-hover:visible transition opacity duration-200 ease-out absolute w-32 shadow-md z-1">
                            <a href="#" class="hover:underline hover:text-white">Grants</a>
                            <a href="#" class="hover:underline hover:text-white">Businesses</a>
                            <a href="#" class="hover:underline hover:text-white">Training</a>
                        </div>
                    </div>
                    <a class="py-2">About Us</a>
                    <a class="py-2">Sources</a>
                </div>

            </div>
        </div>
    </nav>

    <!--This is where the rest of the content from the other pages will fill in-->
    <main class=" bg-[#FFB22E]/20">
        @yield('content')
    </main>
    @livewireScripts

    <footer>
        <div class="bg-[#FFB22E]/75 h-32 flex flex-col justify-center px-3">
            <h1>&copy; {{ date('Y') }} Central FI</h1>
        </div>
    </footer>
</body>

<div></div>
</html>
