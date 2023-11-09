@php use Gloudemans\Shoppingcart\Facades\Cart; @endphp
<x-layouts.client-layout title="Carrito de compras">

    <div class="container mx-auto flex justify-center mt-10 mb-20">
        <div class="w-3/4">
            <h1 class="text-3xl font-bold mb-6 text-center">Carrito de Compras</h1>

            @foreach(Cart::content() as $row)
            <div class="bg-white p-6 rounded-lg shadow-md mb-6">
                <div class="flex items-center mb-4">
                    <img src="{{ asset($row->options->image) }}" alt="Producto" class="w-20 h-20 object-cover rounded">
                    <div class="ml-6 flex-grow">
                        <h2 class="text-xl font-bold">{{ $row->name }}</h2>
                        <p class="text-gray-600">Precio: Q.{{ $row->price }}</p>
                    </div>
                    <div class="flex items-center justify-end">
                        <form action="{{ route('cart.remove') }}" method="post">
                            @csrf
                            <input type="hidden" id="rowId" name="rowId" value="{{ $row->rowId }}" >
                            <button class="text-red-500 font-bold px-5">
                                <svg class="w-6 h-6 text-red-700" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h16M7 8v8m4-8v8M7 1h4a1 1 0 0 1 1 1v3H6V2a1 1 0 0 1 1-1ZM3 5h12v13a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V5Z"/>
                                </svg>
                            </button>
                        </form>
                    </div>
                </div>
                <div class="flex justify-between items-center border-t border-gray-300 pt-4">
                    <div class="text-left">
                        <p class="text-gray-600">Cantidad:</p>
                        <p class="font-bold text-center">{{ $row->qty }}</p>
                    </div>
                    <div class="text-right">
                        <p class="text-gray-600">Subtotal:</p>
                        <p class="font-bold">Q.{{ $row->subtotal }}</p>
                    </div>
                </div>
            </div>
            @endforeach
            <!-- Repetir el bloque para otros productos si es necesario -->

            <div class="bg-white p-6 rounded-lg shadow-md">
                <div class="flex justify-between mb-4">
                    <p class="text-gray-600">Total:</p>
                    <p class="font-bold">Q.{{ Cart::subtotal() }}</p>
                </div>
                <button class="w-full bg-blue-500 hover:bg-blue-700 text-white font-bold py-3 rounded">Pagar</button>
            </div>
        </div>
    </div>


</x-layouts.client-layout>
