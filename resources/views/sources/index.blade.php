@extends('layouts.main')
@section('title', 'References')

@section('content')
    <div class="bg-[#FFB22E]/75 flex flex-col items-center min-h-screen pt-32 text-[#472D00] px-3">
        <h1 class="text-3xl font-bold">References Page</h1>
        <p class="text-center">The theme seen on this site made with Laravel, Blade, and TailwindCSS was built with ❤️ by this team.</p>
        <p class="my-3 text-center">All packages were installed by our team and do not provide any generation services. </p>

        <h1 class="self-start mt-3 text-2xl font-bold">Frameworks</h1>
        <a href="https://laravel.com/" class="flex flex-col md:flex-row items-start w-full shadow-lg rounded bg-[#FFD48A] py-3 px-3 space-x-2 mt-3">
            <h1 class="text-2xl font-medium">Laravel:</h1>
            <div class="flex flex-col">
                <p class="">This PHP-based framework helps bring all the features of the site together. Following the model-view-controller architecture (MVC), it contributes to a fast development process and is easy to maintain. </p>
                <p class="font-extrabold py-3">https://laravel.com/</p>
            </div>
        </a>

        <a href="https://laravel.com/" class="flex flex-col md:flex-row items-start w-full shadow-lg rounded bg-[#FFD48A] py-3 px-3 space-x-2 mt-3">
            <h1 class="text-2xl font-medium">Blade:</h1>
            <div class="flex flex-col">
                <p class="">Shipping with Laravel, Blade is a server-side system that helps developers to build dynamic web pages. It provides a mix of both HTML and PHP. </p>
                <p class="font-extrabold py-3">https://laravel.com/</p>
            </div>
        </a>

        <a href="https://tailwindcss.com/" class="flex flex-col md:flex-row items-start w-full shadow-lg rounded bg-[#FFD48A] py-3 px-3 space-x-2 mt-3">
            <h1 class="text-2xl font-medium">TailwindCSS:</h1>
            <div class="flex flex-col">
                <p class="">TailwindCSS is a styling framework used to design web pages inside of HTML. </p>
                <p class="font-extrabold py-3">https://tailwindcss.com/</p>
            </div>
        </a>

        <h1 class="self-start mt-10 text-2xl font-bold">Packages</h1>
        <a href="https://typesense.org/docs/guide/reference-implementations/laravel-scout-integration.html" class="flex flex-col md:flex-row items-start w-full shadow-lg rounded bg-[#FFD48A] py-3 px-3 space-x-2 mt-3">
            <h1 class="text-2xl font-medium">Laravel Scout + Typesense:</h1>
            <div class="flex flex-col w-auto">
                <p class="">This is used to implement improved search functionality.  </p>
                <p class="font-extrabold py-3">https://laravel.com/docs/12.x/scout</p>
                <p class="font-extrabold py-3">https://typesense.org/</p>
            </div>
        </a>

        <h1 class="self-start mt-10 text-2xl font-bold">Infrastructure</h1>
        <a href="https://www.squarespace.com" class="flex flex-col md:flex-row items-start w-full shadow-lg rounded bg-[#FFD48A] py-3 px-3 space-x-2 mt-3">
            <h1 class="text-2xl font-medium">SquareSpace:</h1>
            <div class="flex flex-col w-auto">
                <p class="">This is our domain registrar.</p>
                <p class="font-extrabold py-3">https://www.squarespace.com</p>
            </div>
        </a>
        <a href="https://www.digitalocean.com/" class="flex flex-col md:flex-row items-start w-full shadow-lg rounded bg-[#FFD48A] py-3 px-3 space-x-2 mt-3">
            <h1 class="text-2xl font-medium">DigitalOcean:</h1>
            <div class="flex flex-col w-auto">
                <p class="">This hosts our site's server.</p>
                <p class="font-extrabold py-3">https://www.digitalocean.com/</p>
            </div>
        </a>
        <a href="https://www.mysql.com/" class="flex flex-col md:flex-row items-start w-full shadow-lg rounded bg-[#FFD48A] py-3 px-3 space-x-2 mt-3">
            <h1 class="text-2xl font-medium">MySQL</h1>
            <div class="flex flex-col w-auto">
                <p class="">This serves as our database management system.</p>
                <p class="font-extrabold py-3">https://www.mysql.com/</p>
            </div>
        </a>
        <a href="https://github.com/johnson-destiny/tsa-site-2026" class="flex flex-col md:flex-row items-start w-full shadow-lg rounded bg-[#FFD48A] py-3 px-3 space-x-2 mt-3">
            <h1 class="text-2xl font-medium">GitHub</h1>
            <div class="flex flex-col w-auto">
                <p class="">This is used for version control.</p>
                <p class="font-extrabold py-3">https://github.com/johnson-destiny/tsa-site-2026</p>
            </div>
        </a>


    </div>
@endsection
