<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Create Post') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    <form method="POST" action="{{route("post.store")}}" enctype="multipart/form-data" class="mt-6 space-y-6">
                        @csrf
                        <div>
                            <x-input-label>Image</x-input-label>
                            <input type="file" name="image">
                            <x-input-error class="mt-2" :messages="$errors->get('image')" />
                        </div>
                        <div>
                            <x-input-label>Title</x-input-label>
                            <x-text-input type="text" name="title"></x-text-input>
                            <x-input-error class="mt-2" :messages="$errors->get('title')" />
                        </div>
                        <div>
                            <x-input-label>Description</x-input-label>
                            <x-text-input  type="text" name="description"></x-text-input>
                            <x-input-error class="mt-2" :messages="$errors->get('description')" />
                        </div>
                        <x-primary-button type="submit">Submit</x-primary-button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
