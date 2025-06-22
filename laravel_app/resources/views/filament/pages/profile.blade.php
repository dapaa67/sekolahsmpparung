<x-filament::page>
    <form wire:submit.prevent="save" class="space-y-6 max-w-xl mx-auto">

        <div>
            <label for="name" class="block text-sm font-medium text-gray-700">Nama</label>
            <input wire:model.defer="name" type="text" id="name"
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-primary-500 focus:ring-primary-500">
        </div>

        <div>
            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
            <input wire:model.defer="email" type="email" id="email"
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-primary-500 focus:ring-primary-500">
        </div>

        <div>
            <label for="password" class="block text-sm font-medium text-gray-700">Password Baru</label>
            <input wire:model.defer="password" type="password" id="password"
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-primary-500 focus:ring-primary-500">
        </div>

        <div>
            <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Konfirmasi Password</label>
            <input wire:model.defer="password_confirmation" type="password" id="password_confirmation"
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-primary-500 focus:ring-primary-500">
        </div>

        <x-filament::button type="submit">
            Simpan Perubahan
        </x-filament::button>

    </form>
</x-filament::page>
