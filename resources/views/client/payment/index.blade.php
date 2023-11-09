{{--@php use Gloudemans\Shoppingcart\Cart; @endphp--}}
<x-layouts.client-layout title="Realizar pedido">

    <div class="">
        <!--
          Background backdrop, show/hide based on slide-over state.

          Entering: "ease-in-out duration-500"
            From: "opacity-0"
            To: "opacity-100"
          Leaving: "ease-in-out duration-500"
            From: "opacity-100"
            To: "opacity-0"
        -->

        <div class="">
            <div class="overflow-hidden">
                <div class="pointer-events-none inset-y-0 right-0 flex max-w-full pl-10">
                    <!--
                      Slide-over panel, show/hide based on slide-over state.

                      Entering: "transform transition ease-in-out duration-500 sm:duration-700"
                        From: "translate-x-full"
                        To: "translate-x-0"
                      Leaving: "transform transition ease-in-out duration-500 sm:duration-700"
                        From: "translate-x-0"
                        To: "translate-x-full"
                    -->
                    <div class="pointer-events-auto w-screen max-w-md mt-10">
                        <div class="flex h-full flex-col overflow-y-scroll bg-white shadow-xl">
                            <div class="flex-1 overflow-y-auto px-4 py-6 sm:px-6">
                                <div class="flex items-start justify-between">
                                    <h2 class="text-lg font-medium text-gray-900" id="slide-over-title">Resumen del
                                        carrito</h2>
                                    <div class="ml-3 flex h-7 items-center">
                                        <button type="button"
                                                class="relative -m-2 p-2 text-gray-400 hover:text-gray-500">
                                            <span class="absolute -inset-0.5"></span>
                                            <span class="sr-only">Close panel</span>
                                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                                 stroke="currentColor" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                      d="M6 18L18 6M6 6l12 12"/>
                                            </svg>
                                        </button>
                                    </div>
                                </div>

                                <div class="mt-8">
                                    <div class="flow-root">
                                        <ul role="list" class="-my-6 divide-y divide-gray-200">
                                            @foreach(Cart::content() as $row)
                                                <li class="flex py-6">

                                                    <div
                                                        class="h-24 w-24 flex-shrink-0 overflow-hidden rounded-md border border-gray-200">
                                                        <img src="{{ asset($row->options->image) }}"
                                                             alt="Salmon orange fabric pouch with match zipper, gray zipper pull, and adjustable hip belt."
                                                             class="h-full w-full object-cover object-center">
                                                    </div>
                                                    <div class="ml-4 flex flex-1 flex-col">
                                                        <div>
                                                            <div
                                                                class="flex justify-between text-base font-medium text-gray-900">
                                                                <h3>
                                                                    <a href="#">{{ $row->name }}</a>
                                                                </h3>
                                                                <p class="ml-4">Q.{{ $row->subtotal }}</p>
                                                            </div>
                                                            <p class="mt-1 text-sm text-gray-500">
                                                                Q.{{ $row->price }}</p>
                                                        </div>
                                                        <div class="flex flex-1 items-end justify-between text-sm">
                                                            <p class="text-gray-500">Cantidad: {{ $row->qty }}</p>
                                                        </div>
                                                    </div>

                                                </li>
                                            @endforeach
                                            <li class="flex py-6">
                                                <div
                                                    class="h-24 w-24 flex-shrink-0 overflow-hidden rounded-md border border-gray-200">
                                                    <img
                                                        src="https://tailwindui.com/img/ecommerce-images/shopping-cart-page-04-product-02.jpg"
                                                        alt="Front of satchel with blue canvas body, black straps and handle, drawstring top, and front zipper pouch."
                                                        class="h-full w-full object-cover object-center">
                                                </div>

                                                <div class="ml-4 flex flex-1 flex-col">
                                                    <div>
                                                        <div
                                                            class="flex justify-between text-base font-medium text-gray-900">
                                                            <h3>
                                                                <a href="#">Medium Stuff Satchel</a>
                                                            </h3>
                                                            <p class="ml-4">$32.00</p>
                                                        </div>
                                                        <p class="mt-1 text-sm text-gray-500">Blue</p>
                                                    </div>
                                                    <div class="flex flex-1 items-end justify-between text-sm">
                                                        <p class="text-gray-500">Qty 1</p>
                                                    </div>
                                                </div>
                                            </li>

                                            <!-- More products... -->
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="border-t border-gray-200 px-4 py-6 sm:px-6">
                                <div class="flex justify-between text-base font-medium text-gray-900">
                                    <p>Total</p>
                                    <p>Q.{{ Cart::subtotal() }}</p>
                                </div>
                                <p class="mt-0.5 text-sm text-gray-500">Total calculado sin envios, ni iva.</p>
                                <div class="flex">
                                    <a href="{{ route('cart.index') }}"
                                       class="cursor-pointer font-medium mt-10 text-gray-800 hover:text-yellow-600">Editar
                                        Carrito</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container justify-center py-20 px-20">
        <div class="max-w-2l bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">


            <div class="bg-white min-h-screen flex items-center justify-center">

                <div class="bg-white p-8 w-full lg:w-2/3">
                    <h1 class="text-2xl font-bold mb-4 text-center">Formulario de Pedido</h1>

                    <form method="post" action="{{ route('payment.store') }}" class="space-y-4">
                        @csrf
                        <!-- Datos personales -->
                        <div>
                            <h2 class="text-lg font-semibold mb-2">Datos Personales</h2>
                            <div class="grid grid-cols-2 gap-4">
                                <div>
                                    <label for="name">Nombre Completo</label>
                                    <input type="text" id="name" value="{{ auth()->user()->name }}"
                                           class="border text-gray-500 p-2 rounded-md w-full" disabled>
                                </div>
                                <div>
                                    <label for="phone">Teléfono</label>
                                    <input type="text" id="phone" value="{{ auth()->user()->phone }}"
                                           class="border text-gray-500 p-2 rounded-md w-full" disabled>
                                </div>
                            </div>
                            <label for="email">Correo Electrónico</label>
                            <input type="email" id="email" value="{{ auth()->user()->email }}"
                                   class="border text-gray-500 p-2 rounded-md w-full" disabled>
                            <input type="hidden" id="user_id" name="user_id" value="{{ auth()->user()->id }}">
                        </div>

                        <!-- Dirección de envío -->
                        <div>
                            <h2 class="text-lg font-semibold mb-2">Dirección de Envío</h2>
                            <label for="address">Dirección</label>
                            <input type="text" id="address" name="address" value="{{ old('address') }}"
                                   class="border p-2 rounded-md w-full">
                            @error('address')
                            <p class="text-red-700 my-1 rounded-lg text-sm">{{ $message }}</p>
                            @enderror
                            <div class="grid grid-cols-2 gap-4">
                                <div>
                                    <label for="department">Departamento</label>
                                    <input type="text" id="department" name="department" value="{{ old('department') }}"
                                           class="border p-2 rounded-md w-full">
                                    @error('department')
                                    <p class="text-red-700 my-1 rounded-lg text-sm">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div>
                                    <label for="zip">Código Postal (opcional)</label>
                                    <input type="text" id="zip" name="zip" value="{{ old('zip') }}"
                                           class="border p-2 rounded-md w-full">
                                </div>
                            </div>
                        </div>

                        <!-- Detalles de factura -->
                        <div>
                            <h2 class="text-lg font-semibold mb-2">Detalles de Facturación</h2>
                            <label for="card_number">Número de Tarjeta</label>
                            <input type="text" id="card_number" name="card_number" placeholder="123456789012"
                                   value="{{ old('card_number') }}" class="border p-2 rounded-md w-full">
                            @error('card_number')
                            <p class="text-red-700 my-1 rounded-lg text-sm">{{ $message }}</p>
                            @enderror
                            <div class="grid grid-cols-3 gap-4">
                                <div>
                                    <label for="month_expiration">M/M</label>
                                    <input type="text" id="month_expiration" name="month_expiration"
                                           value="{{ old('month_expiration') }}" placeholder="Mes de expiración"
                                           class="border p-2 rounded-md w-full">
                                    @error('month_expiration')
                                    <p class="text-red-700 my-1 rounded-lg text-sm">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div>
                                    <label for="year_expiration">Y/Y</label>
                                    <input type="text" id="year_expiration" name="year_expiration"
                                           value="{{ old('year_expiration') }}" placeholder="Año de expiración"
                                           class="border p-2 rounded-md w-full">
                                    @error('year_expiration')
                                    <p class="text-red-700 my-1 rounded-lg text-sm">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div>
                                    <label for="cvv">CVV</label>
                                    <input type="text" id="cvv" name="cvv" placeholder="###" value="{{ old('cvv') }}"
                                           class="border p-2 rounded-md w-full">
                                    @error('cvv')
                                    <p class="text-red-700 my-1 rounded-lg text-sm">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <!-- Tipo de pago -->
                        {{--                    <div>--}}
                        {{--                        <h2 class="text-lg font-semibold mb-2">Tipo de Pago</h2>--}}
                        {{--                        <select id="payment-method" class="border p-2 rounded-md w-full">--}}
                        {{--                            <option value="visa">Visa</option>--}}
                        {{--                            <option value="mastercard">Mastercard</option>--}}
                        {{--                            <option value="paypal">PayPal</option>--}}
                        {{--                        </select>--}}
                        {{--                    </div>--}}

                        <input type="hidden" name="cart" id="cart" value="{{ json_encode(Cart::content()) }}">
                        <button type="submit" class="bg-blue-500 text-white font-semibold py-2 rounded-md w-full">
                            Realizar Pedido
                        </button>
                    </form>
                </div>

                <script>
                    const form = document.getElementById('order-form');

                    form.addEventListener('submit', function (event) {
                        event.preventDefault();

                        // Lógica para procesar el pedido (simulado)
                        // Aquí se podría enviar la información a un servidor para procesar el pedido.

                        alert('¡Pedido realizado con éxito!');
                        // Aquí podrías redirigir al usuario a una página de confirmación, etc.
                    });
                </script>
            </div>


        </div>


    </div>


</x-layouts.client-layout>>

