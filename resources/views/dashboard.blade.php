<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}

            
        </h2>
        
    </x-slot>
    

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                <x-welcome />
                <a href="{{ route('posts.index') }}" class="btn" style="background-color: #007bff !important; color: white !important;">POSTS</a>
                


            </div>
        </div>
        
    </div>
</x-app-layout>
