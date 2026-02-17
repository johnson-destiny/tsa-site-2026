@extends('layouts.main')
@section('title', 'Home')

@section('content')

<div class="">
    <div class="relative flex flex-col justify-start items-center bg-[#FFB22E]/75 w-full bg-cover bg-center z-5 pt-32">
        <div class="flex flex-col w-full lg:w-1/2 justify-center items-center mx-5 z-10">
            <h1 class="text-2xl md:text-6xl font-bold text-white flex md:space-x-5">
                Central FI
            </h1>
            <h1 class="text-xl md:text-2xl w-full text-center font-light text-white">
                A collection of resources to help you start, grow, or manage a Central Florida business
            </h1>
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

        <!-- Image Carousel -->
        <div class="flex flex-row w-full justify-center items-center rounded mx-5">
            <div class="w-full h-96 max-w-6xl mt-16 overflow-clip">
                <ul class="flex flex-row carousel-horizontal gap-6">
                    @foreach ($resources as $resource)
                    <a target="_blank" href="{{ $resource->link }}" class="">
                        <li
                            class="flex-none rounded-lg shadow-lg w-64 h-32 lg:h-64 lg:w-96 bg-white/75 flex flex-col items-center justify-center p-6 hover:bg-[#FFB22E]/75 ">
                            <div>
                                <h1 class="mt-5 text-md lg:text-2xl w-full font-medium text-center">
                                    {{ $resource->title }}
                                </h1>

                                <p class="mt-auto text-sm lg:text-base line-clamp-2 lg:line-clamp-5">
                                  {{ ($resource->description) }}
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
        <div class="">
            <livewire:featured-resources />
        </div>

    </section>
</div>
</div>



@endsection
