<x-layouts.client-layout title="Rastreo de Pedido">

    <div class="flex-col justify-center mx-auto">
        <div class="flex justify-center items-center mx-auto my-10 py-20">
            <div class="mx-auto max-w-md px-10">
                <form action="{{ route('tracker.index') }}" method="get">
                    @csrf
                    <label for="website-admin" class="block mb-2 text-sm font-medium text-gray-900 text-center">Número de pedido</label>
                    <div class="flex">
                        <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-l-xl">
                            <svg class="w-6 h-6 text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 16">
                                <path d="M19.9 6.58c0-.009 0-.019-.006-.027l-2-4A1 1 0 0 0 17 2h-4a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v9a1 1 0 0 0 1 1h.3c-.03.165-.047.332-.051.5a3.25 3.25 0 1 0 6.5 0A3.173 3.173 0 0 0 7.7 12h4.6c-.03.165-.047.332-.051.5a3.25 3.25 0 1 0 6.5 0 3.177 3.177 0 0 0-.049-.5h.3a1 1 0 0 0 1-1V7a.99.99 0 0 0-.1-.42ZM16.382 4l1 2H13V4h3.382ZM4.5 13.75a1.25 1.25 0 1 1 0-2.5 1.25 1.25 0 0 1 0 2.5Zm11 0a1.25 1.25 0 1 1 0-2.5 1.25 1.25 0 0 1 0 2.5Z"/>
                            </svg>
                        </span>
                        <input type="text" id="tracker" value="{{ $tracker }}" name="tracker" class="rounded-r-xl bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5 " placeholder="##">
                    </div>
                    @error('tracker')
                    <p class="text-red-700 mt-2 rounded-lg text-center text-sm">{{ $message }}</p>
                    @enderror
                    <div class="flex justify-center mx-auto">
                        <button type="submit" class="my-4 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-10 py-2.5  mb-2">Consultar el estado de mi pedido</button>
                    </div>
                </form>
            </div>

            <img src="{{ asset('img/cargo-express.png')}}" class="w-[1100px] flex justify-end items-end rounded-2xl" alt="">
        </div>

        <div class="mb-10">
            @if(isset($order))
                <h1 class="text-center font-semibold text-2xl mb-5">DETALLE</h1>
                <table class="w-full text-sm text-left text-gray-500">
                    <thead class="text-xs text-white uppercase bg-blue-950">
                    <tr>
                        <th scope="col" class="px-10 py-3">
                            No. Orden
                        </th>
                        <th scope="col" class="px-10 py-3">
                            Fecha
                        </th>
                        <th scope="col" class="px-10 py-3">
                            Estado
                        </th>
                        <th scope="col" class="px-10 py-3">
                            Acciones
                        </th>

                    </tr>
                    </thead>
                    <tbody>

                    <tr class="bg-gray-100 divide-y divide-slate-200">
                        <td class="px-10 py-4 font-medium text-gray-900 whitespace-nowrap">
                            {{ $order->id }}
                        </td>
                        <td class="px-10 py-4">
                            {{ $order->date }}
                        </td>
                        <td class="px-10 py-4">
                            {{ $order->status }}
                        </td>
                        <td class="px-10 py-4">
                            <a href="{{route('tracker.show', $order)}}" class="font-medium text-blue-600 hover:underline">Ver detalle</a>
                        </td>

                    </tr>

                    </tbody>
                </table>
            @endif
        </div>
    </div>



</x-layouts.client-layout>
