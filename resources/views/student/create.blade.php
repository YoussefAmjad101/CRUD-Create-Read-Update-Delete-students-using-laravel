<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add student') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <x-success-status class="mb-4" :status="session('message')" />
        <x-validation-errors class="mb-4" :errors="$errors" />
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="py-4 px-4 bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <form action="{{ url('add-student') }}" method="POST">
                    @csrf
                    <div>
                        <x-input-label for="name" :value="__('Student Name')" />
                        <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" autofocus />
                    </div>
                    <div>
                        <x-input-label for="email" :value="__('Student E-mail')" />
                        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" autofocus />
                    </div>
                    <div>
                        <x-input-label for="phone" :value="__('Student Phone')" />
                        <x-text-input id="phone" class="block mt-1 w-full" type="text" name="phone" :value="old('phone')" autofocus />
                    </div>
                    <x-primary-button class="ml-3">
                        {{ __('Save Student') }}
                    </x-primary-button>
                </form> 
            </div>
        </div>
    </div>
</x-app-layout>