@extends('layouts.main')
@section('title', 'Home')

@section('content')

<div class="">
    <div class="relative flex flex-col justify-start items-center bg-[#FFB22E]/75 w-full bg-cover bg-center z-5 pt-32">

        <div class="flex flex-col w-full lg:w-1/2 justify-center items-center mx-5 z-10">
            <h1 class="text-4xl md:text-6xl font-bold text-white">
                Central Find
            </h1>
            <h1 class="text-xl px-3 md:text-2xl w-full text-center font-light text-white">
                A collection of resources to help you start, grow, or manage a Central Florida business
            </h1>

            <div class="mt-5 w-full">
                <form action="{{ route('resources.index') }}" class="flex gap-2 justify-center w-full">
                    <input class="text-2xl pl-4 bg-white/75 w-1/2 h-13 md:h-16 placeholder:text-2xl rounded-3xl" type="text" name="query" placeholder="Search...">
                    <button class="text-2xl bg-[#FFB22E] h-13 md:h-16 w-1/3 rounded-4xl hover:bg-[#A36700]" type="submit">Search</button>
                </form>
            </div>
            @error('query') <p class="text-red-500 text-center sm:text-md md:text-xl">{{$message}}</p> @enderror
        </div>

        <!-- Image Carousel -->
        <div class="flex flex-row w-full justify-center items-center rounded px-5">
            <div class="w-full h-96 max-w-6xl mt-16 overflow-clip">
                <ul class="flex flex-row carousel-horizontal gap-6">
                    @foreach ($resources as $resource)
                    <a target="_blank" href="{{ route('resources.show', $resource->id) }}" class="">
                        <li
                            class="flex-none rounded-lg shadow-lg h-32 w-64 lg:h-64 lg:w-96 bg-white/75 flex flex-col items-center justify-center p-6 hover:bg-[#FFB22E]/75">
                            <div>
                                <h1 class="mt-5 text-md lg:text-2xl w-full font-medium text-center">
                                    {{ $resource->title }}
                                </h1>

                                <p class="mt-auto hidden md:text-sm lg:text-base text-center line-clamp-2 lg:line-clamp-5">
                                  {{ ($resource->description) }}
                                </p>
                            </div>

                        </li>
                    </a>
                    @endforeach

                        @foreach ($resources as $resource)
                            <a target="_blank" href="{{ route('resources.show', $resource->id) }}" class="">
                                <li
                                    class="flex-none rounded-lg shadow-lg h-32 w-full lg:h-64 lg:w-96 bg-white/75 flex flex-col items-center justify-center p-6 hover:bg-[#FFB22E]/75">
                                    <div>
                                        <h1 class="mt-5 text-md lg:text-2xl w-full font-medium text-center">
                                            {{ $resource->title }}
                                        </h1>

                                        <p class="mt-auto hidden md:text-sm lg:text-base line-clamp-2 lg:line-clamp-5">
                                            {{ ($resource->description) }}
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
        <div class="">
            <livewire:featured-resources />
        </div>

    </section>
</div>


@endsection
