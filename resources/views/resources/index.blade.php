@extends('layouts.main')
@section('title', 'Search')

@section('content')
<div class="bg-[#FFB22E]/75 flex flex-col justify-center items-center z-5 pt-32">
    @if (empty($resources) || $resources->isEmpty() || $query === "")
    <h1 class="text-2xl text-center ">No results found</h1>
    @else
    <div class="grid grid-cols-3 mx-20 gap-6">

        <h1 class="text-2xl col-span-3 text-center">Results for "{{ $query }}"</h1>
        @foreach($resources as $resource)
        <a target="_blank" href="{{ $resource->link }}">
            <div class="shadow-2xl rounded-lg flex col-span-1 flex-col flex-1 h-64 items-center bg-white/75 transition-transform duration-300 ease-in-out hover:scale-110">
                <h1 class="text-2xl text-[#472D00] font-bold text-center py-5">{{ $resource->title }} </h1>
                <p class="text-[#472D00] text-center">{{ $resource->description }}</p>
            </div>
        </a>
        @endforeach
    </div>

    <div class="grid grid-cols-2 justify-center gap-x-1">
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
