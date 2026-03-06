@extends('layouts.main')
@section('title', 'Suggest a Resource')

@section('content')

    <div class="bg-[#FFB22E]/75 flex flex-col items-center justify-center min-h-screen text-[#472D00] px-5 pt-32">
        <div class="bg-[#FFD48A] text-[#472D00] shadow-lg w-auto flex flex-col items-center justify-center rounded-2xl">
            <div class="grid grid-cols-1 h-auto w-full max-w-2xl shadow-lg bg-white/35 rounded-2xl">
                <h1 class="text-2xl md:text-4xl font-medium py-5 text-center">
                    {{ $resource->title }}
                </h1>
                <div class="flex flex-col col-span-full items-center bg-white/75 shadow h-full mx-3 rounded-xl">
                    <p class="text-base md:text-2xl font-medium p-4">{{ $resource->description }}</p>
                </div>
                <a target="_blank" href="{{ $resource->link }}" class="rounded-2xl bg-[#FF4A2E] justify-self-center text-white px-5 py-2 my-5 font-bold">Visit Site</a>
                <p class="mb-3 justify-self-center">This link will open in a new tab.</p>
            </div>
        </div>

    </div>
@endsection
