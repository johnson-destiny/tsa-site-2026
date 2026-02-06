<form wire:submit="save" class="flex flex-row justify-center mx-5 my-5 ">
    <img src="{{ asset('images/downtown_orlando.jpg') }}" class="w-1/2 shadow object-cover rounded-tl-lg rounded-bl-lg">
    <div class="flex flex-col bg-[#FFB22E]/50 items-center pt-5 w-1/2 px-5 rounded-tr-lg rounded-br-lg shadow">
        <h1 class="text-3xl font-medium self-start">Suggest a Resource</h1>
        <p class="py-2 self-start">Fill out this brief form and tell us about the resource you're suggesting!</p>
        <input type="text">
    </div>
</form>