<html>

<head>
    <title>@yield('title')- Central Find</title>
    @vite('resources/css/app.css')
    @livewireStyles
    <meta name="viewport" content="width=device-width">
</head>

<body class="font-montserrat min-h-screen flex flex-col">
    <nav class="text-[#472D00] fixed w-full bg-transparent py-4 backdrop-filter backdrop-blur-md top-0 z-1000">
        <div class="flex flex-col justify-center px-4 space-y-5">
            <div class="flex flex-row font-bold space-x-3 lg:space-x-20 justify-between text-xs lg:text-base">
                <a href="{{ route('home') }}" class="font-extrabold py-2">Central Find</a>
                <div class="flex flex-row space-x-3 md:space-x-10">
                    <a href="{{ route('resources.suggest') }}" class="rounded-2xl bg-[#FF4A2E] text-white px-3 py-2">Suggest a Resource</a>
                    <a href="{{ route('resources.index', ['query' => '']) }}" class="py-2">View Resources</a>
                    <a href="{{ route('sources.index') }}" class="py-2">References</a>
                </div>

            </div>
        </div>
    </nav>

    <!--This is where the rest of the content from the other pages will fill in-->
    <main class="flex-grow bg-[#FFB22E]/20">
        @yield('content')
    </main>
    @livewireScripts

    <footer class="">
        <div class="bg-[#FFB22E]/75 h-32 flex flex-col justify-center px-3">
            <h1>&copy; {{ date('Y') }} Central Find</h1>
        </div>
    </footer>
</body>
</html>
