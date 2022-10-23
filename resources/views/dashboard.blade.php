<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="container m-auto w-7/12 py-12 flex justify-end">
        <button class="bg-emerald-700 rounded p-2 text-white">
            {{ __('Add post')  }}
        </button>
    </div>
</x-app-layout>
