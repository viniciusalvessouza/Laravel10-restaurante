<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8"> 
            <div class="flex justify-end m-2 p-2">
                <a href="{{route('admin.categories.index')}}" class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white"> Back Categories</a>
            </div>   
            <div class="m-2 p-2 bg-slate-100 rounded">
                <div class="space-y-8 divide-y divide-gray-200 w-1/2 mt-10">
                    <form method="POST" action="{{route('admin.categories.update',$category->id)}}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="sm:col-span-6">
                            <label for="name" class="block text-sm font-medium text-gray-700"> Post Title</label>
                            <div class="mt-1">
                                <input type="text" id="name" name="name" value ="{{$category->name}}" class="block w-full appearence-none bg-white border-gray-400 rounded-md py-2 px-3 text-base leading-normal @error('name') border-red-400 @else is-valid @enderror">
                            </div>
                        </div>
                        
                        @error('name')
                            <div class="text-sm text-red-400">{{ $message }}</div>
                        @enderror

                        <div class="sm:col-span-6 py-6">
                            <label for="image" class="block text-sm font-medium text-gray-700"> Post Image</label>
                            <div >
                                <img class="w-32 h-32" src="{{Storage::url($category->image)}}" alt="">
                            </div>
                            <div class="mt-1">
                                <input type="file" id="image" name="image" wire:model="newImage" class="block w-full  appearence-none bg-white border-gray-400 rounded-md py-2 @error('image') border-red-400 @else is-valid @enderror">
                            </div>
                        </div>

                        @error('image')
                            <div class="text-sm text-red-400">{{ $message }}</div>
                        @enderror

 
                        <div class="sm:col-span-6 py-6">
                            <label for="description" class="block text-sm font-medium text-gray-700"> Description</label>
                            <div class="mt-1">
                                <textarea id="description" name="description" wire:model.lazy="description" class="shadow-sm focus:ring-indigo-500 appearence-none bg-white @error('description') border-red-400 @else is-valid @enderror">
                                {{$category->description}}
                                </textarea>
                            </div>
                        </div>

                        @error('description')
                            <div class="text-sm text-red-400">{{ $message }}</div>
                        @enderror

                        <div class="mt-6 p-4">
                            <button type="submit" class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white"> Update</button>
                        </div>
                   
                    </form>
                </div>
            </div>
        </div>

    </div>
</x-admin-layout>


