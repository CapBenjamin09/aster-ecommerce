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
                                    <h2 class="text-lg font-medium text-gray-900" id="slide-over-title">Resumen del carrito</h2>
                                    <div class="ml-3 flex h-7 items-center">
                                        <button type="button" class="relative -m-2 p-2 text-gray-400 hover:text-gray-500">
                                            <span class="absolute -inset-0.5"></span>
                                            <span class="sr-only">Close panel</span>
                                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>

                                <div class="mt-8">
                                    <div class="flow-root">
                                        <ul role="list" class="-my-6 divide-y divide-gray-200">
                                            <li class="flex py-6">
                                                <div class="h-24 w-24 flex-shrink-0 overflow-hidden rounded-md border border-gray-200">
                                                    <img src="https://tailwindui.com/img/ecommerce-images/shopping-cart-page-04-product-01.jpg" alt="Salmon orange fabric pouch with match zipper, gray zipper pull, and adjustable hip belt."
                                                         class="h-full w-full object-cover object-center">
                                                </div>

                                                <div class="ml-4 flex flex-1 flex-col">
                                                    <div>
                                                        <div class="flex justify-between text-base font-medium text-gray-900">
                                                            <h3>
                                                                <a href="#">Throwback Hip Bag</a>
                                                            </h3>
                                                            <p class="ml-4">$90.00</p>
                                                        </div>
                                                        <p class="mt-1 text-sm text-gray-500">Salmon</p>
                                                    </div>
                                                    <div class="flex flex-1 items-end justify-between text-sm">
                                                        <p class="text-gray-500">Qty 1</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="flex py-6">
                                                <div class="h-24 w-24 flex-shrink-0 overflow-hidden rounded-md border border-gray-200">
                                                    <img src="https://tailwindui.com/img/ecommerce-images/shopping-cart-page-04-product-02.jpg" alt="Front of satchel with blue canvas body, black straps and handle, drawstring top, and front zipper pouch." class="h-full w-full object-cover object-center">
                                                </div>

                                                <div class="ml-4 flex flex-1 flex-col">
                                                    <div>
                                                        <div class="flex justify-between text-base font-medium text-gray-900">
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
                                    <p>Subtotal</p>
                                    <p>$262.00</p>
                                </div>
                                <p class="mt-0.5 text-sm text-gray-500">Shipping and taxes calculated at checkout.</p>
                                <div class="flex">
                                    <button type="button" class="font-medium mt-10 text-gray-800 hover:text-yellow-600">Remove</button>
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

                <form id="order-form" class="space-y-4">
                    <!-- Datos personales -->
                    <div>
                        <h2 class="text-lg font-semibold mb-2">Datos Personales</h2>
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <label for="first-name">Nombre</label>
                                <input type="text" id="first-name" class="border p-2 rounded-md w-full">
                            </div>
                            <div>
                                <label for="last-name">Apellido</label>
                                <input type="text" id="last-name" class="border p-2 rounded-md w-full">
                            </div>
                        </div>
                        <label for="email">Correo Electrónico</label>
                        <input type="email" id="email" class="border p-2 rounded-md w-full">
                    </div>

                    <!-- Dirección de envío -->
                    <div>
                        <h2 class="text-lg font-semibold mb-2">Dirección de Envío</h2>
                        <label for="address">Dirección</label>
                        <input type="text" id="address" class="border p-2 rounded-md w-full">
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <label for="city">Ciudad</label>
                                <input type="text" id="city" class="border p-2 rounded-md w-full">
                            </div>
                            <div>
                                <label for="zip">Código Postal</label>
                                <input type="text" id="zip" class="border p-2 rounded-md w-full">
                            </div>
                        </div>
                    </div>

                    <!-- Detalles de factura -->
                    <div>
                        <h2 class="text-lg font-semibold mb-2">Detalles de Facturación</h2>
                        <label for="card-number">Número de Tarjeta</label>
                        <input type="text" id="card-number" class="border p-2 rounded-md w-full">
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <label for="expiry">Fecha de Caducidad</label>
                                <input type="text" id="expiry" class="border p-2 rounded-md w-full">
                            </div>
                            <div>
                                <label for="cvv">CVV</label>
                                <input type="text" id="cvv" class="border p-2 rounded-md w-full">
                            </div>
                        </div>
                    </div>

                    <!-- Tipo de pago -->
                    <div>
                        <h2 class="text-lg font-semibold mb-2">Tipo de Pago</h2>
                        <select id="payment-method" class="border p-2 rounded-md w-full">
                            <option value="visa">Visa</option>
                            <option value="mastercard">Mastercard</option>
                            <option value="paypal">PayPal</option>
                        </select>
                    </div>

                    <button type="submit" class="bg-blue-500 text-white font-semibold py-2 rounded-md w-full">Realizar Pedido</button>
                </form>
            </div>

            <script>
                const form = document.getElementById('order-form');

                form.addEventListener('submit', function(event) {
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

