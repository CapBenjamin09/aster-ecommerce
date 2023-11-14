<x-layouts.client-layout title="Ordene de usuario #{{ $order->id ?? '' }}">
    <div class="max-w-xl mx-auto bg-white p-8 shadow-md rounded-md mt-10 border border-gray-600">
        <div class="text-center mb-4">
            <p class="tracking-tight text-gray-500 md:text-lg mb-1">Hola, {{ auth()->user()->name }}</p>
            <h1 class="text-3xl font-bold text-gray-800">Pedido realizado!</h1>
            <p class="text-sm text-gray-600 mb-5">Fecha: {{ $order->date }}</p>
        </div>

        <div class="mb-4">

            <h1 class="font-semibold text-gray-800 px-2">Pedido: {{ $order->id }}</h1>
            <h1 class="font-semibold text-right text-gray-800 px-2">Estado: {{ $order->status }}</h1>

            <table class="default">
                <tr class="border-b border-gray-300 py-2 grid grid-cols-4 gap-4">
                    <td class="font-bold text-gray-600 px-2 col-span-2">Descripción del producto</td>
                    <td class="font-bold text-gray-600 px-2">Cantidad</td>
                    <td class="font-bold text-gray-600 px-2">Precio</td>
                </tr>
                @foreach($details as $detail)
                    <tr class=" py-2 grid grid-cols-4 gap-4">
                        <td class="text-gray-600 px-2 col-span-2">{{ $detail->product->name }}</td>
                        <td class="text-gray-600 px-2">{{ $detail->quantity }}</td>
                        <td class="text-gray-600 px-2">Q.{{ $detail->quantity * $detail->product->price }}</td>
                    </tr>
                @endforeach

                <tr class="border-t border-gray-300 py-1 grid grid-rows-4 grid-flow-col gap-4 justify-center">
                    <td class="text-gray-900 px-2 ">Total: Q.{{ $total }}</td>
                </tr>

            </table>
        </div>

        <div class="mb-4">
            <p class="text-sm text-center text-gray-600">Gracias por su compra.</p>
        </div>

{{--        <div class="flex justify-center">--}}
{{--            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-500 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">--}}
{{--                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>--}}
{{--            </svg>--}}
{{--            <span class="text-gray-600">Número de pedido: {{ $order->id }}</span>--}}
{{--        </div>--}}
        <div class="grid col-span-3">
            <div class="justify-start grid">
                <a href="{{ route('profileOrder.index', auth()->user()) }}" class="hover:text-gray-400 text-blue-800 font-bold py-3 justify-between">Regresar</a>
            </div>
{{--            <div class="col-start-3">--}}
{{--                <form action="{{ route('payment.download') }}" method="post">--}}
{{--                    @csrf--}}
{{--                    <button class="hover:text-gray-400 text-gray-800 font-bold py-3 justify-between">Descargar en PDF</button>--}}
{{--                </form>--}}
{{--            </div>--}}
        </div>
    </div>
</x-layouts.client-layout>
