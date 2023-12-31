<!-- Main navigation container -->
<nav
    class="flex-no-wrap relative flex w-full items-center justify-between bg-orange-600 py-2 shadow-md shadow-black/5 lg:flex-wrap lg:justify-start lg:py-4">
    <div class="flex w-full flex-wrap items-center justify-between px-3">
        <!-- Hamburger button for mobile view -->
        <button
            class="block border-0 bg-transparent px-2 text-neutral-500 hover:no-underline hover:shadow-none focus:no-underline focus:shadow-none focus:outline-none focus:ring-0 lg:hidden"
            type="button"
            data-te-collapse-init
            data-te-target="#navbarSupportedContent1"
            aria-controls="navbarSupportedContent1"
            aria-expanded="false"
            aria-label="Toggle navigation">
            <!-- Hamburger icon -->
            <span class="[&>svg]:w-7">
        <svg
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 24 24"
            fill="currentColor"
            class="h-7 w-7">
          <path
              fill-rule="evenodd"
              d="M3 6.75A.75.75 0 013.75 6h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 6.75zM3 12a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 12zm0 5.25a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75a.75.75 0 01-.75-.75z"
              clip-rule="evenodd" />
        </svg>
      </span>
        </button>

        <!-- Collapsible navigation container -->
        <div
            class="!visible hidden flex-grow basis-[100%] items-center lg:!flex lg:basis-auto"
            id="navbarSupportedContent1"
            data-te-collapse-item>
            <!-- Logo -->
            <a
                class="flex justify-center items-center mb-2 w-20 h-auto text-neutral-900 hover:text-neutral-900 focus:text-neutral-900 lg:mb-0 lg:mt-0"
                href="{{ route('home') }}">
                <img
                    src="{{ asset('img/navbar-client.png') }}"
                    style="height: 40px"
                    alt="TE Logo"
                    loading="lazy" />
            </a>
            <!-- Left navigation links -->
            <ul
                class="list-style-none mr-auto flex flex-col lg:flex-row pl-5"
                data-te-navbar-nav-ref>
                <li class="mb-4 lg:mb-0 lg:pr-2" data-te-nav-item-ref>
                    <!-- Dashboard link -->
                    <a
                        class="text-white transition duration-200 hover:text-neutral-700 hover:ease-in-out focus:text-neutral-700 disabled:text-black/30 motion-reduce:transition-none lg:px-2 [&.active]:text-black/90"
                        href="{{ route('home') }}"
                        data-te-nav-link-ref
                    >Home</a>
                </li>
                <!-- Team link -->
                <li class="mb-4 lg:mb-0 lg:pr-2" data-te-nav-item-ref>
                    <a
                        class="text-white transition duration-200 hover:text-neutral-700 hover:ease-in-out focus:text-neutral-700 disabled:text-black/30 motion-reduce:transition-none lg:px-2 [&.active]:text-black/90"
                        href="{{ route('tracker.index') }}"
                        data-te-nav-link-ref
                    >Rastrear Pedido</a
                    >
                </li>
                <!-- Projects link -->

            </ul>
        </div>



        <!-- Right elements -->
        <div class="relative flex items-center">


            <!-- Cart Icon -->


            <a
                class="mr-4 text-white transition duration-200 hover:text-neutral-700 hover:ease-in-out focus:text-neutral-700 disabled:text-black/30 motion-reduce:transition-none [&.active]:text-black/90"
                href="{{ route('cart.index') }}">
                <span class="[&>svg]:w-5">
                  <svg
                      xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 24 24"
                      fill="currentColor"
                      class="h-5 w-5">
                    <path
                        fill-rule="evenodd"
                        d="M2.25 2.25a.75.75 0 000 1.5h1.386c.17 0 .318.114.362.278l2.558 9.592a3.752 3.752 0 00-2.806 3.63c0 .414.336.75.75.75h15.75a.75.75 0 000-1.5H5.378A2.25 2.25 0 017.5 15h11.218a.75.75 0 00.674-.421 60.358 60.358 0 002.96-7.228.75.75 0 00-.525-.965A60.864 60.864 0 005.68 4.509l-.232-.867A1.875 1.875 0 003.636 2.25H2.25zM3.75 20.25a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0zM16.5 20.25a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0z" />
                  </svg>
                </span>
            </a>

            <!-- Container with two dropdown menus -->
            <div
                class="relative"
                data-te-dropdown-ref
                data-te-dropdown-alignment="end">
                <!-- First dropdown trigger -->
                <a
                    class="hidden-arrow mr-4 flex items-center text-white transition duration-200 hover:text-neutral-700 hover:ease-in-out focus:text-neutral-700 disabled:text-black/30 motion-reduce:transition-none [&.active]:text-black/90"
                    href="#"
                    id="dropdownMenuButton1"
                    role="button"
                    data-te-dropdown-toggle-ref
                    aria-expanded="false">
                    <!-- Dropdown trigger icon -->
                    <span class="[&>svg]:w-5">
            <svg
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 24 24"
                fill="currentColor"
                class="h-5 w-5">
              <path
                  fill-rule="evenodd"
                  d="M5.25 9a6.75 6.75 0 0113.5 0v.75c0 2.123.8 4.057 2.118 5.52a.75.75 0 01-.297 1.206c-1.544.57-3.16.99-4.831 1.243a3.75 3.75 0 11-7.48 0 24.585 24.585 0 01-4.831-1.244.75.75 0 01-.298-1.205A8.217 8.217 0 005.25 9.75V9zm4.502 8.9a2.25 2.25 0 104.496 0 25.057 25.057 0 01-4.496 0z"
                  clip-rule="evenodd" />
            </svg>
          </span>
                    <!-- Notification counter -->
                    <span
                        class="absolute -mt-4 ml-2.5 rounded-full bg-danger px-[0.35em] py-[0.15em] text-[0.6rem] font-bold leading-none text-white"
                    >1</span
                    >
                </a>
                <!-- First dropdown menu -->
                <ul
                    class="absolute z-[1000] float-left m-0 hidden min-w-max list-none overflow-hidden rounded-lg border-none bg-white bg-clip-padding text-left text-base shadow-lg dark:bg-neutral-700 [&[data-te-dropdown-show]]:block"
                    aria-labelledby="dropdownMenuButton1"
                    data-te-dropdown-menu-ref>
                    <!-- First dropdown menu items -->
                    <li>
                        <a
                            class="block w-full whitespace-nowrap bg-transparent px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400"
                            href="#"
                            data-te-dropdown-item-ref
                        >Action</a>
                    </li>
                    <li>
                        <a
                            class="block w-full whitespace-nowrap bg-transparent px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400"
                            href="#"
                            data-te-dropdown-item-ref
                        >Another action</a
                        >
                    </li>
                    <li>
                        <a
                            class="block w-full whitespace-nowrap bg-transparent px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400"
                            href="#"
                            data-te-dropdown-item-ref
                        >Something else here</a
                        >
                    </li>
                </ul>
            </div>

            <!-- Second dropdown container -->
            <div
                class="relative"
                data-te-dropdown-ref
                data-te-dropdown-alignment="end">
                <!-- Second dropdown trigger -->
                <a
                    class="hidden-arrow flex items-center whitespace-nowrap transition duration-150 ease-in-out motion-reduce:transition-none"
                    href="#"
                    id="dropdownMenuButton2"
                    role="button"
                    data-te-dropdown-toggle-ref
                    aria-expanded="false">
                    <!-- User avatar -->
                    <img
                        src="{{ asset('img/icon_user.jpg') }}"
                        class="rounded-full"
                        style="height: 25px; width: 25px"
                        alt=""
                        loading="lazy" />
                </a>
                <!-- Second dropdown menu -->
                <ul
                    class="absolute z-[1000] float-left m-0 hidden min-w-max list-none overflow-hidden rounded-lg border-none bg-white bg-clip-padding text-left text-base shadow-lg [&[data-te-dropdown-show]]:block"
                    aria-labelledby="dropdownMenuButton2"
                    data-te-dropdown-menu-ref>
                    <!-- Second dropdown menu items -->

                    @guest
                    <li>
                        <a
                            class="block w-full whitespace-nowrap bg-transparent px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400"
                            href="{{ route('session.index') }}"
                            data-te-dropdown-item-ref
                        >Iniciar sesión</a>
                    </li>
                    <li>
                        <a
                            class="block w-full whitespace-nowrap bg-transparent px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400"
                            href="{{ route('register.index') }}"
                            data-te-dropdown-item-ref
                        >Crear cuenta</a
                        >
                    </li>
                    @endguest
                    @auth
                        <li>
                            <a
                                class="block w-full whitespace-nowrap bg-transparent px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400"
                                href="{{ route('profile.index', auth()->user()->id)}}"
                                data-te-dropdown-item-ref
                            >Perfil</a
                            >
                        </li>
                         <li>
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                        <button
                            class="block w-full whitespace-nowrap bg-transparent px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400"
                            type="submit"
                            data-te-dropdown-item-ref
                        >Cerrar sesión</button>
                        </form>
                        </li>
                    @endauth
                </ul>

            </div>
        </div>
    </div>
</nav>
