<!-- component -->
<div class="min-h-screen flex justify-center bg-orange-600 absolute bottom-0 left-0">
    <div class="flex w-full max-w-xs p-4 ">
        <ul class="flex flex-col w-full">
            <li class="my-px">
                <a href="{{ route('dashboard') }}"
                   class="flex flex-row items-center h-12 px-4 rounded-lg text-gray-600 bg-gray-100">
						<span class="flex items-center justify-center text-lg text-gray-500">
							<svg fill="none"
                                 stroke-linecap="round"
                                 stroke-linejoin="round"
                                 stroke-width="2"
                                 viewBox="0 0 24 24"
                                 stroke="currentColor"
                                 class="h-6 w-6">
								<path d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
							</svg>
						</span>
                    <span class="ml-3">Dashboard</span>
                    <span class="flex items-center justify-center text-sm text-gray-500 font-semibold bg-gray-300 h-6 px-2 rounded-full ml-auto">3</span>
                </a>
            </li>
            <li class="my-px">
                <span class="flex font-medium text-sm text-white px-4 my-4 uppercase">Trading</span>
            </li>
            <li class="my-px">
                <a href="{{ route('category.index') }}"
                   class="flex flex-row items-center h-12 px-4 rounded-lg text-white hover:bg-gray-700">
						<span class="flex items-center justify-center text-lg text-white">
							<svg class="w-6 h-6 text-gray-800 dark:text-white"
                                 aria-hidden="true"
                                 xmlns="http://www.w3.org/2000/svg"
                                 fill="none"
                                 viewBox="0 0 18 18">
                            <path stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6.143 1H1.857A.857.857 0 0 0 1 1.857v4.286c0 .473.384.857.857.857h4.286A.857.857 0 0 0 7 6.143V1.857A.857.857 0 0 0 6.143 1Zm10 0h-4.286a.857.857 0 0 0-.857.857v4.286c0 .473.384.857.857.857h4.286A.857.857 0 0 0 17 6.143V1.857A.857.857 0 0 0 16.143 1Zm-10 10H1.857a.857.857 0 0 0-.857.857v4.286c0 .473.384.857.857.857h4.286A.857.857 0 0 0 7 16.143v-4.286A.857.857 0 0 0 6.143 11Zm10 0h-4.286a.857.857 0 0 0-.857.857v4.286c0 .473.384.857.857.857h4.286a.857.857 0 0 0 .857-.857v-4.286a.857.857 0 0 0-.857-.857Z"/>
                            </svg>
						</span>
                    <span class="ml-3">Categories</span>
                </a>
            </li>
            <li class="my-px">
                <a href="{{ route('product.index') }}"
                   class="flex flex-row items-center h-12 px-4 rounded-lg text-white hover:bg-gray-700">
						<span class="flex items-center justify-center text-lg text-white">
							<svg class="w-6 h-6 text-gray-800 dark:text-white"
                                 aria-hidden="true"
                                 xmlns="http://www.w3.org/2000/svg"
                                 fill="none"
                                 viewBox="0 0 18 20">
                            <path stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 5h4m-2 2V3M6 15a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm0 0h8m-8 0-1-4m9 4a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm.938-11H17l-2 7H5m0 0L3 4m0 0h2M3 4l-.792-3H1"/>
                            </svg>
						</span>
                    <span class="ml-3">Products</span>
                </a>
            </li>
            <li class="my-px">
                <a href="#"
                   class="flex flex-row items-center h-12 px-4 rounded-lg text-white hover:bg-gray-700">
						<span class="flex items-center justify-center text-lg text-white">
							<svg fill="none"
                                 stroke-linecap="round"
                                 stroke-linejoin="round"
                                 stroke-width="2"
                                 viewBox="0 0 24 24"
                                 stroke="currentColor"
                                 class="h-6 w-6">
								<path d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
							</svg>
						</span>
                    <span class="ml-3">Clients</span>
                    <span class="flex items-center justify-center text-sm text-gray-500 font-semibold bg-gray-300 h-6 px-2 rounded-full ml-auto">1k</span>
                </a>
            </li>
            <li class="my-px">
                <a href="#"
                   class="flex flex-row items-center h-12 px-4 rounded-lg text-white hover:bg-gray-700">
						<span class="flex items-center justify-center text-lg text-green-400">
							<svg fill="none"
                                 stroke-linecap="round"
                                 stroke-linejoin="round"
                                 stroke-width="2"
                                 viewBox="0 0 24 24"
                                 stroke="currentColor"
                                 class="h-6 w-6">
								<path d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"></path>
							</svg>
						</span>
                    <span class="ml-3">Add new</span>
                </a>
            </li>
            <li class="my-px">
                <span class="flex font-medium text-sm text-white px-4 my-4 uppercase">Account</span>
            </li>
            <li class="my-px">
                <a href="{{ route('users.index') }}"
                   class="flex flex-row items-center h-12 px-4 rounded-lg text-white hover:bg-gray-700">
						<span class="flex items-center justify-center text-lg text-white">
							<svg fill="none"
                                 stroke-linecap="round"
                                 stroke-linejoin="round"
                                 stroke-width="2"
                                 viewBox="0 0 24 24"
                                 stroke="currentColor"
                                 class="h-6 w-6">
								<path d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
							</svg>
						</span>
                    <span class="ml-3">Usuarios</span>
                </a>
            </li>
            <li class="my-px">
                <a href="#"
                   class="flex flex-row items-center h-12 px-4 rounded-lg text-white hover:bg-gray-700">
						<span class="flex items-center justify-center text-lg text-white">
							<svg fill="none"
                                 stroke-linecap="round"
                                 stroke-linejoin="round"
                                 stroke-width="2"
                                 viewBox="0 0 24 24"
                                 stroke="currentColor"
                                 class="h-6 w-6">
								<path d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path>
							</svg>
						</span>
                    <span class="ml-3 mx-2">Notifications</span>
                    <span class="flex items-center justify-center text-sm text-red-500 font-semibold bg-red-300 h-6 px-2 rounded-full ml-auto">10</span>
                </a>
            </li>
            <li class="my-px">
                <a href="#"
                   class="flex flex-row items-center h-12 px-4 rounded-lg text-white hover:bg-gray-700">
						<span class="flex items-center justify-center text-lg text-white">
							<svg fill="none"
                                 stroke-linecap="round"
                                 stroke-linejoin="round"
                                 stroke-width="2"
                                 viewBox="0 0 24 24"
                                 stroke="currentColor"
                                 class="h-6 w-6">
								<path d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
								<path d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
							</svg>
						</span>
                    <span class="ml-3">Settings</span>
                </a>
            </li>
            <li class="my-px">
                <form action="{{ route('logout') }}" method="POST" class="flex flex-row items-center h-12 px-4 rounded-lg text-white hover:bg-gray-700">
                    @csrf
                <button type="submit"
                   class="flex flex-row items-center h-12 rounded-lg text-white hover:bg-gray-700">
						<span class="flex items-center justify-center text-lg text-red-50">
							<svg fill="none"
                                 stroke-linecap="round"
                                 stroke-linejoin="round"
                                 stroke-width="2"
                                 viewBox="0 0 24 24"
                                 stroke="currentColor"
                                 class="h-6 w-6">
								<path d="M8 11V7a4 4 0 118 0m-4 8v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2z"></path>
							</svg>
						</span>
                    <span class="ml-3">Logout</span>
                </button>
                </form>
            </li>
        </ul>
    </div>
</div>

