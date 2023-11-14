<x-layouts.admin-layout title="Listado de pedidos">


<div class="container mx-auto px-10">

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <div class="flex items-center flex-column flex-wrap md:flex-row space-y-5 md:space-y-0 pb-4 bg-white">

            </div>
        <div>
            <h2 class="text-3xl font-semibold text-center text-gray-800 mb-10">
                Listado de pedidos
            </h2>
        </div>

            <label for="table-search" class="sr-only">Search</label>
            <div class="relative">
                <div class="absolute inset-y-0 right-0 start-0 flex items-center ml-5 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                    </svg>
                </div>
                <input type="text" id="table-search-users" class="block p-2 ps-10 m-3 text-sm text-gray-900 border border-gray-300 rounded-lg w-96 bg-gray-50 focus:ring-blue-500 focus:border-blue-500" placeholder="Search for payment">
            </div>
        </div>
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 mt-10">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">


                <tr>

                <th scope="col" class="px-6 py-3">
                    Name
                </th>
                <th scope="col" class="px-6 py-3">
                    Número de orden
                </th>
                <th scope="col" class="px-6 py-3">
                    Status
                </th>
                <th scope="col" class="px-6 py-3">
                    Action
                </th>
            </tr>
            </thead>
            <tbody>
            @foreach($managements as $management)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">

                <th scope="row" class="flex items-center px-3 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                    <div class="ps-3">
                        <div class="text-base font-semibold">{{$management->user->name}}</div>
                        <div class="font-normal text-gray-500">{{$management->user->email}}</div>
                    </div>
                </th>
                <td class="px-6 py-4">
                    {{$management->id}}
                </td>
                <td class="px-6 py-4">
                    <div class="flex items-center">
                        @php
                        switch ($management->status){
                                case 'En Proceso':
                                    $class = 'h-2.5 w-2.5 rounded-full bg-orange-400 me-2';
                                    break;
                                case 'Enviado':
                                    $class = 'h-2.5 w-2.5 rounded-full bg-yellow-400 me-2';
                                    break;
                                case 'Finalizado':
                                    $class = 'h-2.5 w-2.5 rounded-full bg-green-500 me-2';
                                    break;
                            }
                        @endphp
                        <div class="{{$class}}"></div> {{$management->status}}
                        </div>
                </td>
                <td class="px-6 py-4">
                    <a href="{{ route('management.edit', $management) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Revisar</a>
                </td>
            </tr>

            @endforeach
            </tbody>
        </table>
    </div>


</x-layouts.admin-layout>
