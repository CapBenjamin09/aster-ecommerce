<x-layouts.client-layout title="{{ $product->name }}">
    <div class="justify-center mx-auto">

        <nav aria-label="Breadcrumb">
            <ol role="list" class=" mt-6 flex max-w-2xl items-center  sm:px-6 lg:max-w-7xl lg:px-8">

                    <li>
                        <div class="flex items-center">
                            <a href="{{ route('home') }}" class="mr-2 text-sm font-medium text-gray-900">Inicio</a>
                            <svg width="16" height="20" viewBox="0 0 16 20" fill="currentColor" aria-hidden="true" class="h-5 w-4 text-gray-300">
                                <path d="M5.697 4.34L8.98 16.532h1.327L7.025 4.341H5.697z" />
                            </svg>
                        </div>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <a href="{{ route('home.category', $product->category->id) }}" class="mr-2 text-sm font-medium text-gray-900">{{$product->category->name}}</a>
                            <svg width="16" height="20" viewBox="0 0 16 20" fill="currentColor" aria-hidden="true" class="h-5 w-4 text-gray-300">
                                <path d="M5.697 4.34L8.98 16.532h1.327L7.025 4.341H5.697z" />
                            </svg>
                        </div>
                    </li>
                    <li class="text-sm">
                        <a href="#" aria-current="page" class="font-medium text-gray-500 hover:text-gray-600"> {{ $product->name }}  </a>
                    </li>
                </ol>
            </nav>

            <div class="justify-center p-5">

                <div class="container justify-center">

                    <hr class="h-px w-auto my-8 bg-gray-200 border-0">
                    <!-- Product info -->
            <div class="flex justify-center mx-auto max-w-2xl px-4 pb-16 pt-10 sm:px-6 lg:grid lg:max-w-7xl lg:grid-cols-3 md:grid-cols-2 lg:grid-rows-[auto,auto,1fr] lg:gap-x-8 lg:px-8 lg:pb-24 lg:pt-16">


                <div class="flex justify-center lg:col-span-2 lg:border-r lg:border-gray-200 lg:pr-8 mb-10">
                    <h1 class="text-2xl font-bold tracking-tight text-gray-900 sm:text-3xl">{{ $product->name }}</h1>
                </div>

                <!-- Options -->
                <div class="mt-4 lg:row-span-3 lg:mt-0">
                    <h2 class="sr-only">Product information</h2>
                    <p class="text-3xl tracking-tight text-gray-900">Q {{ $product->price  }}</p>

                    <!-- Reviews -->
                    <div class="mt-6">
                        <h3 class="sr-only">Reviews</h3>
                        <div class="flex items-center">
                            <div class="flex items-center">
                                <!-- Active: "text-gray-900", Default: "text-gray-200" -->
                                <svg class="text-gray-900 h-5 w-5 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
                                </svg>
                                <svg class="text-gray-900 h-5 w-5 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
                                </svg>
                                <svg class="text-gray-900 h-5 w-5 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
                                </svg>
                                <svg class="text-gray-900 h-5 w-5 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
                                </svg>
                                <svg class="text-gray-200 h-5 w-5 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <p class="sr-only">4 out of 5 stars</p>
                            <a href="#" class="ml-3 text-sm font-medium text-yellow-600 hover:text-yellow-500">117 reviews</a>
                        </div>
                    </div>

                    <form class="mt-10" action="{{ route('cart.add') }}" method="post">
                        @csrf
                        <!-- Colors -->
                        <div>
                            <h3 class="text-sm font-medium text-gray-900">Cantidad de artículos disponibles</h3>

                            <fieldset class="mt-4">
                                <div class="flex items-center space-x-3 bg-yellow-100 w-20 justify-center rounded-md shadow">
                                    <!--
                                      Active and Checked: "ring ring-offset-1"
                                      Not Active and Checked: "ring-2"
                                    -->
                                    <label class="focus:outline-none bg-yellow-100 text-gray-600 relative -m-0.5 flex pointer-events-none items-center justify-center rounded-lg p-0.5 ring-gray-400">
                                        {{ $product->stock }}
                                    </label>

                                </div>
                            </fieldset>

                        </div>
                        <div class="mt-5">
                            <label for="quantity" class="block text-sm font-medium text-gray-700">Cantidad</label>
                            <input type="number" id="quantity" name="quantity" class="w-16 border rounded p-2 text-center" value="1">
                            @error('quantity')
                                <x-error-alert title="Error">
                                    {{ $message }}
                                </x-error-alert>
                            @enderror
                        </div>
                        <!-- Sizes -->
                        <div class="mt-5">
                            <div class="flex items-center justify-between">
                                <a href="#" class="ml-2 text-sm font-medium text-yellow-600 hover:text-yellow-500">Detalle</a>
                            </div>

                            <fieldset class="mt-4">
                                <legend class="sr-only">Choose a size</legend>
                                    <!-- Active: "ring-2 ring-indigo-500" -->
                                    <label class="px-2 group relative flex items-center py-3 text-sm font-light sm:flex-1 sm:py-6">
                                            {{ $product->detail }}
                                    </label>
                            </fieldset>
                        </div>
                            <input type="hidden" id="product_id" name="product_id" value="{{ $product->id }}" >
                            <input type="hidden" id="product_stock" name="product_stock" value="{{ $product->stock }}" >
                            <input type="hidden" id="product_image" name="product_image" value="{{ $product->image_path }}" >
                            <button type="submit" class="mt-10 flex w-full items-center justify-center rounded-md border border-transparent bg-yellow-500 px-8 py-3 text-base font-medium text-gray-800 hover:bg-yellow-300 focus:outline-none focus:ring-2 focus:ring-gray-400 focus:ring-offset-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="mr-2 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                                </svg>
                                Add to bag
                            </button>
                        </form>
                </div>



                <div class="py-10 lg:col-span-2 lg:col-start-1 lg:border-r lg:border-gray-200 lg:pb-16 lg:pr-8 lg:pt-6">
                    <!-- Description and details -->
                    <div>
                        <h3 class="sr-only">Description</h3>

                        <div class="aspect-h-2 aspect-w-3 overflow-hidden rounded-lg px-10 flex justify-center">
                            <img src="{{ asset($product->image_path) }}" alt="{{ $product->name }}" class="h-96 w-96 object-cover object-center border border-gray-300 rounded-2xl">
                        </div>


                </div>


            </div>

            </div>
                    <hr class="h-px w-full my-8 bg-gray-200 border-0">
    </div>

    </div>
    </div>

</x-layouts.client-layout>
