<!-- resources/views/components/modal.blade.php -->
<div x-data="{ open: @entangle($attributes->wire('model')) }" @keydown.escape="open = false" class="fixed inset-0 z-50 flex items-center justify-center hidden" :class="{ 'hidden': !open, 'flex': open }">
    <div class="fixed inset-0 bg-black opacity-50" @click="open = false"></div>
    <div class="bg-white rounded-lg overflow-hidden shadow-xl transform transition-all sm:max-w-lg sm:w-full">
        <div class="px-4 py-5 sm:p-6">
            <h3 class="text-lg leading-6 font-medium text-gray-900">{{ $title }}</h3>
            <div class="mt-2">
                {{ $slot }}
            </div>
        </div>
        <div class="px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
            <button @click="open = false" type="button" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-red-600 text-base font-medium text-white hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:ml-3 sm:w-auto sm:text-sm">
                Close
            </button>
        </div>
    </div>
</div>
