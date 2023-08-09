<div>
    <p>{{ $success }}</p>

    <div class="bg-gray-100 rounded-xl text-center py-10 px-6">

        <form name="contactForm" wire:submit.prevent="sendEmail">

            <div class="w-1/2 mx-auto">
                <label>Name</label>
                <input type="text" wire:model="name">
                <div class="text-left text-red-600 mb-10">
                    @error('name')
                    <span>{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="w-1/2 mx-auto">
                <label>Email</label>
                <input type="text" wire:model="email">
                <div class="text-left text-red-600 mb-10">
                    @error('email')
                    <span>{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="w-1/2 mx-auto">
                <label>Message</label>
                <textarea wire:model="message"></textarea>
                <div class="text-left text-red-600 mb-10">
                    @error('message')
                    <span>{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <button type="submit" class="bg-indigo-500 py-4 px-6 rounded-full text-white">Submit</button>
        </form>

    </div>


</div>


