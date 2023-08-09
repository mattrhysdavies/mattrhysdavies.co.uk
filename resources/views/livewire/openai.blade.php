<div>
    <form wire:submit.prevent="submit" class="w-1/2 mx-auto text-center">

        <input type="text" wire:model="prompt">


        <button type="submit" class="w-1/2 bg-indigo-500 rounded-lg mx-auto py-3 text-white">Submit</button>
    </form>
    <br>
    <div class="bg-gray-100 p-6 rounded-lg mt-12">
        {{ $result }}
    </div>

</div>
