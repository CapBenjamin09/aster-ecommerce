<x-layouts.client-layout title="Realizar pedido">


    <div class="max-w-xl mx-auto bg-white p-8 shadow-md rounded-md mt-10 border border-gray-600">
        <div class="text-center mb-4">
            <h1 class="text-3xl font-bold text-gray-800">Detalle de pedido</h1>
            <p class="text-sm text-gray-600 mb-5">Fecha: {{ $order->date }}</p>
        </div>

        <div class="mb-4">

            <h1 class="font-semibold text-gray-800 px-2">Pedido: {{ $order->id }}</h1>

            <table class="default">
                <tr class="border-b border-gray-300 py-2 grid grid-cols-4 gap-4">
                    <td class="font-bold text-gray-600 px-2 col-span-2">Descripción del producto</td>
                    <td class="font-bold text-gray-600 px-2">Cantidad</td>
                    <td class="font-bold text-gray-600 px-2">Precio</td>
                </tr>
                @foreach($datos as $dato)
                    <tr class=" py-2 grid grid-cols-4 gap-4">
                        <td class="text-gray-600 px-2 col-span-2">{{ $dato->product->name }}</td>
                        <td class="text-gray-600 px-2">{{ $dato->quantity }}</td>
                        <td class="text-gray-600 px-2">Q.{{ $dato->quantity * $dato->product->price }}</td>
                    </tr>
                @endforeach

                <tr class="border-t border-gray-300 py-1 grid grid-rows-4 grid-flow-col gap-4 justify-center">
                    <td class="text-gray-900 px-2 mt-10">Total: Q.{{ $total }}</td>
                </tr>

            </table>
        </div>

        <div class="mb-4">

            <p class="text-gray-800 font-bold whitespace-pre-line text-start">Detalles de facturación</p>
            <p class="text-gray-500 whitespace-pre-line text-start">Nit: C/F</p>

            <p class="text-sm text-center text-gray-600 mt-5">Gracias por su compra.</p>
        </div>

        <div class="flex justify-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-500 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
            </svg>
            <span class="text-gray-600">Número de pedido: {{ $order->id }}</span>
        </div>
        <div class="grid col-span-3">
            <div class="justify-start grid">
                <a href="{{ route('tracker.index') }}" class="hover:text-gray-400 text-blue-800 font-bold py-3 justify-between">Regresar</a>
            </div>
        </div>
    </div>


</x-layouts.client-layout>
