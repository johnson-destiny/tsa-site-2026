<form wire:submit="search" class="flex gap-2 justify-center">
    <input class="text-2xl pl-4 bg-white/75 w-1/2 h-13 md:h-16 placeholder:text-2xl rounded-3xl" type="text" wire:model="query" placeholder="Search...">
    <button class="text-2xl bg-[#FFB22E] h-13 md:h-16 w-1/4 md:w-1/8 rounded-4xl hover:bg-[#A36700]" type="submit">Search</button>
</form>