<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">

        <div class="flex justify-end m-2 p-2">
            <a href="{{route('admin.reservations.create')}}" class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white"> New Reservation</a>
        </div>

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">     
            <div class="relative overflow-x-auto shadow-lg">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 ">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                First Name
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Last Name
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Email
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Phone Number
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Reservation date
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Table
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Gest Number
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Options
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($reservations as $reservation)
                            @if ($loop->index%2 === 0 )
                                <tr class="bg-white border-b dark:bg-gray-600 dark:border-gray-700 hover:bg-indigo-200">
                            @else
                             <tr class="bg-slate-200 border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-indigo-200">
                            @endif
                            
                                <td class="px-6 py-4 ">
                                    {{$reservation->first_name}}
                                </td>

                                <td class="px-6 py-4 ">
                                    {{$reservation->last_name}}
                                </td>

                                <td class="px-6 py-4 ">
                                    {{$reservation->email}}
                                </td>
                        
                                <td class="px-6 py-4">
                                    {{$reservation->tel_number}}
                                </td>

                                <td class="px-6 py-4">
                                    {{$reservation->res_date}}
                                </td>

                                <td class="px-6 py-4 ">
                                    {{$reservation->table->name}}
                                </td>

                                <td class="px-6 py-4 ">
                                    {{$reservation->guest_number}}
                                </td>


                                <td class="px-6 py-4">
                                    <div class="flex space-x-2">
                                        <a  href="{{route('admin.reservations.edit', $reservation->id)}}"
                                            class="px-4 py-2 bg-green-500 hover:bg-green-700 rounded-lg text-white">
                                              Edit
                                        </a>
                                        <form   action="{{route('admin.reservations.destroy', $reservation->id)}}" method="POST" onsubmit="return confirm('are you sure?')"
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
