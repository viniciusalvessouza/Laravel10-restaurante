<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8"> 
            <div class="flex justify-end m-2 p-2">
                <a href="{{route('admin.reservations.index')}}" class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white"> Back Reservations</a>
            </div>   
            <div class="m-2 p-2 bg-slate-100 rounded">
                <div class="space-y-8 divide-y divide-gray-200 w-1/2 mt-10">
                    <form method="POST" action="{{route('admin.reservations.store')}}" actenctype="multipart/form-data">
                        @csrf

                         <div class="sm:col-span-6">
                            <label for="first_name" class="block text-sm font-medium text-gray-700 "> First Name</label>
                            <div class="mt-1">
                                <input value="{{old('first_name')}}" type="text" id="first_name" name="first_name" class="block w-full transition @error('fisrt_name') border-red-400 @else is-valid @enderror">
                            </div>
                        </div>

                        @error('first_name')
                            <div class="text-sm text-red-400">{{ $message }}</div>
                        @enderror

                        <div class="sm:col-span-6">
                            <label for="last_name" class="block text-sm font-medium text-gray-700"> Last Name</label>
                            <div class="mt-1">
                                <input value="{{old('last_name')}}" type="text" id="last_name" name="last_name" class="block w-full transition @error('last_name') border-red-400 @else is-valid @enderror">
                            </div>
                        </div>

                        @error('last_name')
                            <div class="text-sm text-red-400">{{ $message }}</div>
                        @enderror
                        
                        <div class="sm:col-span-6">
                            <label for="email" class="block text-sm font-medium text-gray-700"> Email</label>
                            <div class="mt-1">
                                <input value="{{old('email')}}" type="email" id="email" name="email" class="block w-full transition @error('email') border-red-400 @else is-valid @enderror">
                            </div>
                        </div>

                        @error('email')
                            <div class="text-sm text-red-400">{{ $message }}</div>
                        @enderror

                        <div class="sm:col-span-6">
                            <label for="tel_number" class="block text-sm font-medium text-gray-700">Phone Numbers</label>
                            <div class="mt-1">
                                <input value="{{old('tel_number')}}" type="text" id="tel_number" name="tel_number"  class="block w-full transition @error('tel_number') border-red-400 @else is-valid @enderror">
                            </div>
                        </div>

                        @error('tel_number')
                            <div class="text-sm text-red-400">{{ $message }}</div>
                        @enderror

                         <div class="sm:col-span-6">
                            <label for="res_date" class="block text-sm font-medium text-gray-700">Reservation Date</label>
                            <div class="mt-1">
                                <input value="{{old('res_date')}}" type="datetime-local" id="res_date" name="res_date" class="block w-full transition @error('res_date') border-red-400 @else is-valid @enderror">
                            </div>
                        </div>

                        @error('res_date')
                            <div class="text-sm text-red-400">{{ $message }}</div>
                        @enderror

                        <div class="sm:col-span-6 py-6">
                            <label for="table_id" class="block text-sm font-medium text-gray-700"> Table</label>
                            <div class="mt-1">
                                <select name="table_id" id="table_id" 
                                        class="block w-full transition border-solid border border-slate-500 p-2">
                                        @foreach ($tables as $table)
                                        <option value="{{$table->id}}"> {{$table->name}} ({{$table->guest_number}} Guests)</option>
                                    @endforeach
                                          
                                </select>
                            </div>
                        </div>

                         <div class="sm:col-span-6">
                            <label for="guest_number" class="block text-sm font-medium text-gray-700"> Guest Number</label>
                            <div class="mt-1">
                                <input value="{{old('guest_number')}}" type="number" id="guest_number" name="guest_number" class="block w-full transition @error('guest_number') border-red-400 @else is-valid @enderror">
                            </div>
                        </div>

                        @error('guest_number')
                            <div class="text-sm text-red-400">{{ $message }}</div>
                        @enderror

                        <div class="mt-6 p-4">
                            <button type="submit" class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white"> Store</button>
                        </div>
                   
                    </form>
                </div>
            </div>
        </div>

    </div>
</x-admin-layout>


