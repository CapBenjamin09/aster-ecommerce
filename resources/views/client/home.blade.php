<x-layouts.client-layout title="Inicio">

    <div class="justify-center mx-auto">
    <div class="container">

    <div class="flex-nowrap overflow-x-scroll mx-3 scroll-smooth">
    <div
        id="direction-example"
        data-te-infinite-scroll-init
        data-te-infinite-direction="x"
        class="flex flex-nowrap overflow-x-scroll max-w-fit whitespace-nowrap text-center">

        {{--        INICIO DE CATEGORIA--}}
        @foreach($categories as $category)
        <span class="mx-5 text-center flex-col py-2">
        <div class="flex-nowrap justify-center">
            <span class="mx-4 py-1 [&>svg]:w-14">

            <a href="{{ route('home.category', $category) }}">
            <img
            src="{{ asset($category->image_path) }}"
            class="w-32 rounded-full"
            alt="{{ $category->name }}">

            <div class="w-32 mb-2 flex justify-center"><span class="whitespace-pre-wrap">{{ $category->name }}</span></div>
            </a>

            </span>

        </div>

        </span>
        @endforeach
        {{--        FIN DE CATEGORIA--}}

    </div>
    </div>

{{--        CARROUSEL--}}

        <div class="flex justify-center px-20 mt-10">
        <div
            id="carouselExampleControls"
            class="relative"
            data-te-carousel-init
            data-te-ride="carousel">
            <!--Carousel items-->
            <div
                class="mx-6 rounded-2xl relative w-full overflow-hidden after:clear-both after:block after:content-['']">
                <!--First item-->
                <div
                    class="relative float-left -mr-[100%] w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none"
                    data-te-carousel-item
                    data-te-carousel-active>
                    <a href="http://aster-ecommerce.test/home/21/product">
                    <img
                        src="https://cdn.kemik.gt/2023/11/XIAOMI-NOV-BANNER-WEB.jpg"
                        class="block w-full rounded-2xl"
                        alt="Wild Landscape" />
                    </a>
                </div>
                <!--Second item-->
                <div
                    class="relative float-left -mr-[100%] hidden w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none"
                    data-te-carousel-item>
                    <a href="http://aster-ecommerce.test/home/21/product">
                    <img
                        src="https://cdn.kemik.gt/2023/11/PRIMUS-NOV-BANNER-WEB.jpg"
                        class="block w-ful rounded-2xl"
                        alt="Camera" />
                    </a>
                </div>
                <!--Third item-->
                <div
                    class="relative float-left -mr-[100%] hidden w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none"
                    data-te-carousel-item>
                    <a href="http://aster-ecommerce.test/home/21/product">
                    <img
                        src="https://cdn.kemik.gt/2023/11/HP-NOV-BANNER-WEB.jpg"
                        class="block w-full rounded-2xl"
                        alt="Exotic Fruits" />
                    </a>
                </div>

                <div
                    class="relative float-left -mr-[100%] hidden w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none"
                    data-te-carousel-item>
                    <a href="http://aster-ecommerce.test/home/21/product">
                    <img
                        src="https://cdn.kemik.gt/2023/11/BANNER%20WEB%20MOLVU%20BIX%20-%20KEMIK.jpg"
                        class="block w-full rounded-2xl"
                        alt="Camera" />
                    </a>
                </div>
                <div
                    class="relative float-left -mr-[100%] hidden w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none"
                    data-te-carousel-item>
                    <a href="http://aster-ecommerce.test/home/21/product">
                    <img
                        src="https://cdn.kemik.gt/2023/10/TP-LINK-OCT-BANNER-WEB.jpg"
                        class="block w-full rounded-2xl"
                        alt="Camera" />
                    </a>
                </div>

            </div>

            <!--Carousel controls - prev item-->
            <button
                class="absolute bottom-0 left-0 top-0 z-[1] flex w-[15%] items-center justify-center border-0 bg-none p-0 text-center text-white opacity-50 transition-opacity duration-150 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-white hover:no-underline hover:opacity-90 hover:outline-none focus:text-white focus:no-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none"
                type="button"
                data-te-target="#carouselExampleControls"
                data-te-slide="prev">
    <span class="inline-block h-8 w-8">
      <svg
          xmlns="http://www.w3.org/2000/svg"
          fill="none"
          viewBox="0 0 24 24"
          stroke-width="1.5"
          stroke="currentColor"
          class="h-6 w-6">
        <path
            stroke-linecap="round"
            stroke-linejoin="round"
            d="M15.75 19.5L8.25 12l7.5-7.5" />
      </svg>
    </span>
                <span
                    class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]"
                >Previous</span
                >
            </button>
            <!--Carousel controls - next item-->
            <button
                class="absolute bottom-0 right-0 top-0 z-[1] flex w-[15%] items-center justify-center border-0 bg-none p-0 text-center text-white opacity-50 transition-opacity duration-150 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-white hover:no-underline hover:opacity-90 hover:outline-none focus:text-white focus:no-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none"
                type="button"
                data-te-target="#carouselExampleControls"
                data-te-slide="next">
    <span class="inline-block h-8 w-8">
      <svg
          xmlns="http://www.w3.org/2000/svg"
          fill="none"
          viewBox="0 0 24 24"
          stroke-width="1.5"
          stroke="currentColor"
          class="h-6 w-6">
        <path
            stroke-linecap="round"
            stroke-linejoin="round"
            d="M8.25 4.5l7.5 7.5-7.5 7.5" />
      </svg>
    </span>
                <span
                    class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]"
                >Next</span
                >
            </button>
        </div>
        </div>

{{--        PRODUCTOS RECIENTES--}}


        <div class="bg-white pl-10">

            <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">

                <h1 class="text-center mb-10 text-5xl font-extrabold dark:text-white"><small class="ml-2 font-semibold text-gray-500 dark:text-gray-400">Productos recientes</small></h1>

                <div class="grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">
                    @foreach($products as $product)
                    <a href="{{ route('home.product', $product) }}" class="group">
                        <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
                            <img src="{{ asset($product->image_path) }}" alt="Tall slender porcelain bottle with natural clay textured body and cork stopper." class="h-full w-full object-cover object-center group-hover:opacity-75">
                        </div>
                        <h3 class="mt-4 text-sm text-gray-700">{{ $product->name }}</h3>
                        <p class="mt-1 text-lg font-medium text-gray-900">Q.{{ $product->price }}</p>
                    </a>
                    @endforeach
                    <!-- More products... -->
                </div>
            </div>
        </div>



    </div>
    </div>

</x-layouts.client-layout>
