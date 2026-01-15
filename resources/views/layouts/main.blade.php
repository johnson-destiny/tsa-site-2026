<html>

<head>
    <title>@yield('title')- Resource Directory</title>
    @vite('resources/css/app.css')
</head>

<body class="font-montserrat">
    <nav class="text-white fixed w-full bg-transparent py-4 backdrop-filter backdrop-blur-md top-0 z-1000">
        <div class="flex flex-col justify-left px-4 space-y-5">
            
            <div class="flex flex-row font-bold space-x-20">
                <a href="#" class="font-extrabold justify-left">Site Name/Logo Here</a>
                <div class="flex flex-row space-x-10 justify-center">
                    <a href="#">View Resources</a>
                <a href="#">About Us</a>
                <a href="#">Sources</a>
                </div>
                
            </div>
        </div>
    </nav>

    <!--This is where the rest of the content from the other pages will fill in-->
    <main>
        @yield('content')
    </main>
</body>

</html>
