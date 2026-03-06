<form wire:submit="save" class="flex flex-col items-center flex flex-col items-center mx-3 lg:mx-5 text-[#472D00] ">
    <h1 class="text-4xl font-medium text-center">Know of a resource we don't have listed?</h1>
    <p class="py-2 text-center">Fill out this brief form and tell us about it!</p>
    <div
        class="flex flex-col bg-white/50 gap-5 pb-5 items-center pt-5 w-full px-5 rounded-tr-lg rounded-l-lg rounded-br-lg shadow items-start">
        <div class="flex flex-col w-full">
            <label class="font-medium" for="email">Email address</label>
            <input placeholder="someone@somewhere.com" class="pl-4 rounded-2xl h-10 bg-white/75" wire:model="email"  type="email"
                   name="email" id="email">
            @error('email') <p class="text-red-500">{{$message}}</p> @enderror
            <p class="pt-2 text-sm">We'll use this to get in contact with you about the resource</p>
        </div>

        <div class="flex flex-col w-full">
            <label class="font-medium" for="resource_name">Resource Title</label>
            <input placeholder="A Great Resource" class="rounded-2xl h-10 bg-white/75 pl-4" type="text" wire:model="resourceName" name="resource_name"
                   id="resource_name">
            @error('resourceName') <p class="text-red-500">{{$message}}</p> @enderror
        </div>

        <div class="flex flex-col w-full">
            <label class="font-medium" for="link">Resource Link</label>
            <input placeholder="http://somewheregreat.com" class="pl-4 rounded-2xl h-10 bg-white/75" wire:model="resourceLink" type="text"
                   name="link" id="link">
            @error('resourceLink') <p class="text-red-500">{{$message}}</p> @enderror
        </div>

        <div class="flex flex-col w-full">
            <label class="font-medium" for="description">Description</label>
            <textarea class="min-h-20 rounded-2xl bg-white/75 pl-4 pt-2" placeholder="This is an awesome resource that..."
                     wire:model="resourceDescription" name="description" id="description"></textarea>
            @error('resourceDescription') <p class="text-red-500">{{$message}}</p> @enderror
        </div>

        <div class="flex flex-col w-full">
            <input class="bg-[#2E7BFF]/75 rounded-3xl py-2 hover:bg-[#2E7BFF]/30" type="submit" value="Submit">
        </div>


    </div>

    @if (session('status'))
        <div class="alert alert-success text-2xl font-medium text-center pt-5">
            {{ session('status') }}
        </div>
    @endif
</form>
