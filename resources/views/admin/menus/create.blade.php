<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8"> 
            <div class="flex justify-end m-2 p-2">
                <a href="{{route('admin.menus.index')}}" class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white"> Back Menus</a>
            </div>   
            <div class="m-2 p-2 bg-slate-100 rounded">
                <div class="space-y-8 divide-y divide-gray-200 w-1/2 mt-10">
                    <form method="POST" action="{{route('admin.menus.store')}}" enctype="multipart/form-data">
                        @csrf
                        
                        <div class="sm:col-span-6">
                            <label for="name" class="block text-sm font-medium text-gray-700"> Name</label>
                            <div class="mt-1">
                                <input value="{{old('name')}}" type="text" id="name" name="name" wire:model.lazy="title" class="block w-full transition @error('name') border-red-400 @else is-valid @enderror">
                            </div>
                        </div>

                        @error('name')
                            <div class="text-sm text-red-400">{{ $message }}</div>
                        @enderror                        
                        
                        <div class="sm:col-span-6">
                            <label for="price" class="block text-sm font-medium text-gray-700"> Price</label>
                            <div class="mt-1">
                                <input value="{{old('price')}}" type="number" min="0" id="price" name="price" wire:model.lazy="Price" class="block w-full transition @error('price') border-red-400 @else is-valid @enderror">
                            </div>
                        </div>

                        @error('price')
                            <div class="text-sm text-red-400">{{ $message }}</div>
                        @enderror
                        
                        <div class="sm:col-span-6 py-6">
                            <label for="image" class="block text-sm font-medium text-gray-700"> Post Image</label>
                            <div class="mt-1">
                                <input type="file" id="image" name="image" wire:model="newImage" class="block w-full transition border-solid border border-slate-500 p-2 @error('image') border-red-400 @else is-valid @enderror">
                            </div>
                        </div>

                        @error('image')
                            <div class="text-sm text-red-400">{{ $message }}</div>
                        @enderror

                        <div class="sm:col-span-6 py-6">
                            <label for="description" class="block text-sm font-medium text-gray-700"> Description</label>
                            <div class="mt-1">
                                <textarea id="description" name="description" wire:model.lazy="description" class="block w-full transition @error('description') border-red-400 @else is-valid @enderror">
                                    {{old('description')}}
                                </textarea>
                            </div>
                        </div>

                        @error('description')
                            <div class="text-sm text-red-400">{{ $message }}</div>
                        @enderror

                        <div class="sm:col-span-6 py-6">
                            <label for="categories" class="block text-sm font-medium text-gray-700"> Categories</label>
                            <div class="mt-1">
                                <select multiple name="categories[]" id="categories"
                                        class="form-multiselect block w-full mt-1">
                                        @foreach ($categories as $category )
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="mt-6 p-4">
                            <button type="submit" class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white"> Store</button>
                        </div>
                   
                    </form>
                </div>
            </div>
        </div>

    </div>
</x-admin-layout>


