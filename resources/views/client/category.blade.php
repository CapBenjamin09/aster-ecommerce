<x-layouts.client-layout title="{{ $category->name }}">

{{--    INICIO--}}

    <div class="justify-center mx-auto">

        <nav aria-label="Breadcrumb">
            <ol role="list" class="ml-5 mt-6 flex max-w-2xl items-center space-x-2 px-4 sm:px-6 lg:max-w-7xl lg:px-8">

                <li>
                    <div class="flex items-center">
                        <a href="{{ route('home') }}" class="mr-2 text-sm font-medium text-gray-900">Inicio</a>
                        <svg width="16" height="20" viewBox="0 0 16 20" fill="currentColor" aria-hidden="true" class="h-5 w-4 text-gray-300">
                            <path d="M5.697 4.34L8.98 16.532h1.327L7.025 4.341H5.697z" />
                        </svg>
                    </div>
                </li>
                <li class="text-sm">
                    <a href="#" aria-current="page" class="font-medium text-gray-500 hover:text-gray-600"> {{$category->name}} </a>
                </li>

            </ol>
        </nav>

        <div class="grid grid-cols-5 mt-5">
        <div class="bg-white  col-start-1 col-end-2 border-r-2 border-gray-100">


            <div class="px-10 mt-20 flex justify-center">
            <div class="w-48 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg">

                <button disabled type="button" class="w-full px-4 py-2 font-medium text-left bg-gray-100 rounded-b-lg cursor-not-allowed">
                    Filtros
                </button>
                <button type="button" class="w-full px-4 py-2 font-medium text-left border-b border-gray-200 cursor-pointer hover:bg-gray-100 hover:text-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-700 focus:text-blue-700">
                    Settings
                </button>
                <button type="button" class="w-full px-4 py-2 font-medium text-left border-b border-gray-200 cursor-pointer hover:bg-gray-100 hover:text-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-700 focus:text-blue-700">
                    Messages
                </button>
                <button type="button" class="w-full px-4 py-2 font-medium text-left border-b border-gray-200 cursor-pointer hover:bg-gray-100 hover:text-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-700 focus:text-blue-700">
                    Total de productos:<span class="inline-flex items-center justify-center px-2 ml-3 text-sm font-medium text-gray-100 bg-gray-400 rounded-full">
                        {{ $products->count() }} </span>
                </button>

            </div>
            </div>


        </div>

        <div class="bg-white col-end-7 col-span-5">
            <div class="container">

            <div class="mx-auto max-w-2xl px-4 py-5 sm:px-6 sm:py-10 lg:max-w-7xl lg:px-8">

                <h1 class="text-center mb-10 text-5xl font-extrabold dark:text-white"><small class="ml-2 font-semibold text-gray-500 dark:text-gray-400">{{ $category->name }}</small></h1>

                <div class="grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">
                    @foreach($products as $product)
                        <a href="{{ route('home.product', $product) }}" class="group rounded-2xl border border-gray-300">
                            <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden bg-gray-200 xl:aspect-h-8 xl:aspect-w-7 rounded-2xl group hover:opacity-75">
                                <img src="{{ asset($product->image_path) }}" alt="Tall slender porcelain bottle with natural clay textured body and cork stopper." class="h-full w-full object-center">
                            </div>
                            <h3 class="px-2 mt-4 text-sm text-gray-700">{{ $product->name }}</h3>
                            <p class="px-2 mt-1 mb-2 text-lg font-medium text-gray-900">Q.{{ $product->price }}</p>
                        </a>
                    @endforeach
                    <!-- More products... -->
                </div>
            </div>
        </div>

    </div>

    </div>
    </div>
{{--FIN--}}
</x-layouts.client-layout>>

