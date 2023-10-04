<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8"> 
            <div class="flex justify-end m-2 p-2">
                <a href="{{route('admin.categories.create')}}" class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white"> New Category</a>
            </div>   
            <div class="relative overflow-x-auto shadow-lg">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 ">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Name
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Image
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Description
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Options
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
                            @if ($loop->index%2 === 0 )
                                <tr class="bg-white border-b dark:bg-gray-600 dark:border-gray-700 hover:bg-indigo-200">
                            @else
                             <tr class="bg-slate-200 border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-indigo-200">
                            @endif
                            
                                <td class="px-6 py-4 ">
                                    {{$category->name}}
                                </td>
                                <td class="px-6 py-4">
                                    <img src="{{Storage::url($category->image)}}" alt="image missed" class="w-16 h-16 rounded ">
                                </td>
                                <td class="px-6 py-4">
                                    {{$category->description}}
                                </td>
                                <td class="px-6 py-4">
                                    <div class="flex space-x-2">
                                        <a  href="{{route('admin.categories.edit', $category->id)}}"
                                            class="px-4 py-2 bg-green-500 hover:bg-green-700 rounded-lg text-white">
                                              Edit
                                        </a>
                                        <form   action="{{route('admin.categories.destroy', $category->id)}}" method="POST" onsubmit="return confirm('are you sure?')"
                                                class="px-4 py-2 bg-red-500 hover:bg-red-700 rounded-lg text-white">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit">Delete</button>
                                        </form>
                                    </div>
                                </td>

                            </tr>
                        @endforeach
                        
                        
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</x-admin-layout>
