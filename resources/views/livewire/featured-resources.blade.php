<div class="bg-[#FFD48A] text-[#472D00] py-5 shadow-lg">
    <div class="flex mx-20">
        <div class="bg-white/35 shadow-lg rounded-l-xl h-96 flex flex-col">
            <h1 class="text-2xl font-medium pt-5 px-5 text-start ">Featured Resources</h1>
            <button wire:click="findRecords('grants')" class="{{ $selected === 'grants' ? 'bg-[#FF4A2E]/50' : '' }} text-xl font-medium py-3 hover:bg-[#FF4A2E]/30 px-5 text-start wobble transition-transform duration-300 ease-in-out hover:scale-110">Grants</button>
            <button wire:click="findRecords('training')" class="{{ $selected === 'training' ? 'bg-[#FF4A2E]/50' : '' }} text-xl font-medium py-3 hover:bg-[#FF4A2E]/30 px-5 text-start wobble transition-transform duration-300 ease-in-out hover:scale-110">Training</button>
            <button wire:click="findRecords('orlando')" class="{{ $selected === 'orlando' ? 'bg-[#FF4A2E]/50' : '' }} text-xl font-medium py-3 hover:bg-[#FF4A2E]/30 px-5 text-start wobble transition-transform duration-300 ease-in-out hover:scale-110">Orlando-Based</button>
            <button wire:click="findRecords('tampa')" class="{{ $selected === 'tampa' ? 'bg-[#FF4A2E]/50' : '' }} text-xl font-medium py-3 hover:bg-[#FF4A2E]/30 px-5 text-start wobble transition-transform duration-300 ease-in-out hover:scale-110">Tampa-Based</button>
            <button wire:click="findRecords('daytona')" class="{{ $selected === 'daytona' ? 'bg-[#FF4A2E]/50' : '' }} text-xl font-medium py-3 hover:bg-[#FF4A2E]/30 px-5 text-start wobble transition-transform duration-300 ease-in-out hover:scale-110">Daytona-Based</button>
        </div>

        <div class="w-full grid grid-cols-3 bg-white/75 items-center gap-3 px-3 shadow-lg">
            @if ($selected === '' || $selected === null)
            <h1 class="text-center col-span-3 text-3xl w-full">Click a category to view featured resources!</h1>
            @endif

            @if (!empty($selected) && $resources->isEmpty())
            <h1 class="text-center col-span-3 text-3xl w-full">No resources in this category. Check back later!</h1>
            @endif

            @foreach($resources as $resource)
            <a target="_blank" href="{{ $resource->link }}">
                <div class="shadow-2xl rounded-lg flex  flex-col flex-1 h-64 items-center bg-[#2E7BFF]/30 transition-transform duration-300 ease-in-out hover:scale-110">
                    <h1 class="text-2xl text-[#472D00] font-bold text-center py-5">{{ $resource->title }} </h1>
                    <p class="text-[#472D00] text-center">{{ $resource->description }}</p>
                </div>
            </a>
            @endforeach
        </div>
    </div>


</div>