<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Posts List') }}
        </h2>
    </x-slot>

    <div class="grid grid-cols-3 place-items-center gap-3 p-5 justify-center align-content-center">
        @foreach($posts as $post)
        <div class=" w-1/2 dark:bg-gray-800 dark:text-white rounded shadow">
            <div>
                <img src="{{asset("storage/".$post->image)}}" >
            </div>
            <div class="border-0 border-bottom-1 dark:border-white">
                <h1>{{$post->title}}</h1>
            </div>
            <div>
                <p>{{$post->description}}</p>
            </div>
        </div>
        @endforeach
    </div>
</x-app-layout>
