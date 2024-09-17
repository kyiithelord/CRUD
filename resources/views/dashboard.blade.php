<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="bg-primary ">

                </div>
            </div>
        </div>
    </div>


    <div class="h-screen max-w-7xl mx-auto">
        <div class="flex justify-between gap-x-10">
            <div class="bg-primary-500 flex justify-center items-center w-full h-64 text-slate-300">

                <div>
                    <a href="{{ route('category.index') }}"> Manage category</a>
                </div>
            </div>

            <div class="bg-primary-500 flex justify-center items-center w-full h-64 text-slate-300">

                <div>
                    Manage Product
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
