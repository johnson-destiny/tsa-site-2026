@extends('layouts.main')
@section('title', 'Search')

@section('content')
<div class="bg-[#FFB22E]/75 flex flex-col pt-25 justify-center items-center md:pt-32 z-5 min-h-screen">
    @if (empty($resources) || $resources->isEmpty() || $query === "")
    <h1 class="text-2xl text-center ">No results found</h1>
    @else
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 mx-2 sm:mx-3 lg:mx-5">

        <h1 class="text-2xl col-span-full text-center">Results for "{{ $query }}"</h1>
        @foreach($resources as $resource)
        <a target="_blank" href="{{ route('resources.show', $resource->id) }}">
            <div class="shadow-2xl rounded-lg flex flex-col items-center bg-white/75
            transition-transform duration-300 ease-in-out hover:scale-105
            w-full sm:w-auto md:h-64 lg:w-64 lg:h-64 p-4 justify-center">
                <h1 class="lg:text-2xl line-clamp-4 md:line-clamp-none text-sm md:text-sm text-[#472D00] font-bold text-center py-5">{{ $resource->title }} </h1>
            </div>
        </a>
        @endforeach
    </div>

    <div class="grid grid-cols-2 justify-center gap-x-1 pt-10">
        @if ($resources->onFirstPage())
        <button class="flex items-center justify-center bg-[#FFB22E] text-center h-16 w-32 rounded-3xl size-2xl cursor-not-allowed" type="submit">Previous</button>
        @else
        <a href="{{ $resources->previousPageUrl() }}" class="flex items-center justify-center text-center bg-[#FFB22E] h-16 w-32 rounded-3xl size-2xl">Previous</a>
        @endif

        @if ($resources->hasMorePages())
        <a href="{{ $resources->nextPageUrl() }}" class="flex items-center justify-center text-center bg-[#FFB22E] h-16 w-32 rounded-3xl size-2xl">Next</a>
        @else
        <button class="flex items-center justify-center bg-[#FFB22E] h-16 w-32 rounded-3xl size-2xl cursor-not-allowed" type="submit">Next</button>

        @endif
    </div>
    @endif
</div>
@endsection
