@extends('layouts.main')
@section('title', 'Home')

@section('content')

    <div class="relative text-center w-full h-screen bg-cover bg-center z-5"
        style="background-image: url('{{ asset('images/background.jpg') }}');">
        <div class="absolute inset-0 bg-black/50 z-0">
        </div>
        <div class="flex flex-col absolute inset-0 justify-center items-center">
            <!-- These will be a marquee thing that rotates through on the nonprofits 
             and grants part. We can come up with some words related to business that go
             along with this. -->
            <h1 class="text-6xl font-extrabold text-white">Find nonprofits, grants</h1>
            <h1 class="text-6xl font-medium text-white">To help you start your business</h1>
        </div>

        <!-- We can make a livewire component for the search bar here --> 
        
    </div>

    <div class="h-96 mt-10 text-center">
        <h1 class="text-black font-extrabold text-4xl">About Us</h1>
    </div>
    <div class="h-96 mt-10 text-center">
        <h1 class="text-black font-extrabold text-4xl">About Us</h1>
    </div>
    <div class="h-96 mt-10 text-center">
        <h1 class="text-black font-extrabold text-4xl">About Us</h1>
    </div>


@endsection
