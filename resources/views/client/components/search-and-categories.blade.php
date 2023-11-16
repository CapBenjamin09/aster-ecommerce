<div class="mt-8 px-20 flex">

    <div
        class="relative"
        data-te-dropdown-ref
        data-te-dropdown-alignment="end">
        <!-- First dropdown trigger -->
        <a
            class="flex-shrink-0 z-10 inline-flex items-center py-[7px] px-4 text-sm font-medium text-center text-gray-900 bg-gray-100 border border-gray-300 rounded-l-full hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100"
            href="#"
            id="dropdownMenuButton1"
            role="button"
            data-te-dropdown-toggle-ref
            aria-expanded="false">
            Categories

            <span>
                             <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                             <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                             </svg>
                            </span>
        </a>
        <!-- First dropdown menu -->
        <ul
            class="absolute z-[1000] float-left h-96 w-[800px] hidden min-w-max list-none overflow-hidden rounded-lg border-none bg-white bg-clip-padding text-left text-base shadow-lg [&[data-te-dropdown-show]]:block"
            aria-labelledby="dropdownMenuButton1"
            data-te-dropdown-menu-ref>
            <!-- First dropdown menu items -->
            @foreach($categories as $category)
                <li>
                    <a
                        class="block w-full whitespace-nowrap bg-transparent px-4 py-3 text-sm font-normal text-neutral-700 hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400"
                        href="{{ route('home.category', $category) }}"
                        data-te-dropdown-item-ref
                    >{{ $category->name }}</a
                    >
                </li>
            @endforeach
        </ul>
    </div>

    {{--        SEARCH PRODUCTS--}}
    <form action="{{ route('home.searchProduct') }}" method="get">
{{--        @csrf--}}
        <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only">Search</label>
        <div class="relative">

            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events">
                <button type="submit">
                    <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                    </svg>
                </button>
            </div>
            <input type="search" id="search" name="search" class="block py-1.5 pl-10 w-96 text-sm text-gray-900 border border-gray-300 rounded-r-full bg-gray-50 focus:ring-yellow-100 focus:border-gray-100" placeholder="Search...">

        </div>

    </form>
</div>
