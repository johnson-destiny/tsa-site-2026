@extends('layouts.main')
@section('title', 'Home')

@section('content')


<!-- style="background-image: url('{{ asset('images/background.jpg') }}');" -->
<!-- bg-[#FFE5B8] -->
<div class="">
    <div class="relative flex flex-col justify-center items-center bg-[#FFB22E]/75 w-full h-screen bg-cover bg-center z-5">
        <!-- <div class="absolute inset-0 bg-black/75 z-0">
        </div> -->
        <div class="flex flex-col w-1/2 justify-center items-center mx-5 z-10">
            <!-- These will be a marquee thing that rotates through on the nonprofits 
             and grants part. We can come up with some words related to business that go
             along with this. -->
            <h1 class="text-2xl md:text-6xl font-bold text-white flex md:space-x-5">
                <!-- <span>Find Central Florida</span>
                <span class="rounded bg-white text-white">
                    <livewire:cycling-text />
                </span> -->
                Central FI
            </h1>
            <h1 class="text-2xl md:text-2xl w-3/4 text-center font-light text-white">A collection of resources to help you start, grow, or manage a Central Florida business</h1>
            <div class="mt-5 w-full">
                <!-- <livewire:search-directory /> -->
            </div>

            <div class="mt-5 w-full">
                <form action="{{ route('resources.index') }}" class="flex gap-2 justify-center">
                    <input class="text-2xl pl-4 bg-white/75 w-1/2 h-13 md:h-16 placeholder:text-2xl rounded-3xl" type="text" name="query" placeholder="Search...">
                    <button class="text-2xl bg-[#FFB22E] h-13 md:h-16 w-1/4 md:w-1/8 rounded-4xl hover:bg-[#A36700]" type="submit">Search</button>
                </form>
            </div>

        </div>

        <div class="flex flex-row w-full justify-center items-center rounded mx-5">
            <!-- Image Carousel -->
            <div class="w-full h-96 max-w-6xl mt-16 overflow-clip">
                <ul class="flex flex-row carousel-horizontal gap-6">
                    @foreach ($resources as $resource)
                    <a target="_blank" href="{{ $resource->link }}">
                        <li
                            class="flex-none rounded-lg shadow-lg h-64 w-96 bg-white/75 flex flex-col items-center justify-center p-6 hover:bg-[#FFB22E]/75">
                            <div>
                                <h1 class="mt-5 text-2xl w-full font-medium text-center">
                                    {{ $resource->title }}
                                </h1>

                                <p class="mt-auto">
                                    {{ Str::limit($resource->description, 180) }}
                                </p>
                            </div>

                        </li>
                    </a>
                    @endforeach

                    @foreach ($resources as $resource)
                    <a target="_blank" href="{{ $resource->link }}">
                        <li
                            class="flex-none rounded shadow-lg h-64 w-96 bg-white/75 flex flex-col items-center justify-center p-6 hover:bg-[#FFB22E]/75">

                            <div>
                                <h1 class="mt-5 text-2xl w-full font-medium text-center">
                                    {{ $resource->title }}
                                </h1>

                                <p class="mt-auto text-sm">
                                    {{ Str::limit($resource->description, 180) }}
                                </p>
                            </div>

                        </li>
                    </a>
                    @endforeach


                </ul>
            </div>

        </div>
    </div>

    <section class="">
        <livewire:featured-resources />
    </section>
</div>
</div>



@endsection