<x-layouts.admin-layout title="Ventas">


    <div class="container mx-auto px-10">

        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <div class="flex items-center flex-column flex-wrap md:flex-row space-y-5 md:space-y-0 pb-4 bg-white">

            </div>
            <div>
                <h2 class="text-3xl font-semibold text-center text-gray-800 mb-10">
                    Ventas
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
            <div class="text-2xl flex justify-end mr-5 font-semibold">Total de ventas: &nbsp; Q.{{ $total }}</div>
        </div>
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 mt-10">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50">


            <tr>

                <th scope="col" class="px-6 py-3">
                    Número de orden
                </th>
                <th scope="col" class="px-6 py-3">
                    Fecha
                </th>
                <th scope="col" class="px-6 py-3">
                    Total de pedido
                </th>
                <th scope="col" class="px-6 py-3">
                    Cantidad de productos
                </th>
                <th scope="col" class="px-6 py-3">
                    Estado
                </th>
            </tr>
            </thead>
            <tbody>
            @foreach($orders as $order)

                <tr class="bg-white border-b hover:bg-gray-50 ">

                    <th scope="row" class="flex items-center px-3 py-4 text-gray-900 whitespace-nowrap">
                        <div class="ps-3">
                            <div class="text-base font-semibold">{{$order['id'] }}</div>
{{--                            <div class="font-normal text-gray-500">{{$order->user->email}}</div>--}}
                        </div>
                    </th>
                    <td class="px-6 py-4">
                        {{$order['date']}}
                    </td>
                    <td class="px-6 py-4">
                        Q.{{$order['subtotal']}}
                    </td>
                    <td class="px-6 py-4">
                        {{$order['total_products']}}
                    </td>
                    <td class="px-6 py-4">
                        <div class="flex items-center">
                            @php
                                switch ($order['status']){
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
                            <div class="{{$class}}"></div> {{$order['status']}}
                        </div>
                    </td>

                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="mt-5">
            {{--{{ $orders->links() }}--}}
        </div>
    </div>



</x-layouts.admin-layout>
