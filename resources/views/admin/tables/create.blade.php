<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

        

            <div class="flex justify-end m-2 p-2">
                <a href="{{ route('admin.categories.index') }}" class="px-2 py-2 bg-blue-600 hover:bg-blue-500 rounded-md text-white">Go Back</a>
            </div>

            <div class="w-full max-w-lg">
                <form enctype="multipart/form-data" class="mb-4 rounded-2xl bg-white px-8 pt-6 pb-8 shadow-md">
                    <div class="mb-3">
                        <label class="mb-2 block text-sm font-bold text-gray-700" for="name"> Category Name </label>
                        <input class="focus:shadow-outline w-full appearance-none rounded border py-2 px-3 leading-tight text-gray-700 shadow focus:outline-none" id="name" type="text" placeholder="New Category..." />
                    </div>
                    <div class="mb-1">
                        <label class="mb-2 block text-sm font-bold text-gray-700" for="image"> Category Image </label>
                        <input class="focus:shadow-outline mb-3 w-full appearance-none rounded border py-2 px-3 leading-tight text-gray-700 shadow focus:outline-none" id="image" type="file" />
                    </div>
                    <div class="mb-2">
                        <label class="mb-2 block text-sm font-bold text-gray-700" for="body"> Category Description </label>
                        <textarea class="focus:shadow-outline mb-3 w-full appearance-none rounded border py-2 px-3 leading-tight text-gray-700 shadow focus:outline-none" id="body"></textarea>
                    </div>
                    <div class="flex items-center justify-between">
                        <button type="submit" class="focus:shadow-outline rounded bg-blue-500 py-2 px-4 font-bold text-white hover:bg-blue-700 focus:outline-none">Create</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</x-admin-layout>