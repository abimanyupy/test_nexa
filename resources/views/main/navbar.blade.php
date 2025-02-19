<nav class="py-2  fixed top-0 z-10 w-full bg-bg-primary  ">
    <div class=" mx-8 md:mx-20 my-8 md:my-6  min-h-max px-8 md:px-8  flex flex-wrap items-center justify-between border-t border-b border-font-primary">
        <div class="hidden md:flex md:items-center md:w-auto w-full " id="navbar-default">
            <ul
                class="flex flex-col md:flex-row md:justify-between md:items-center md:space-x-8 text-base font-normal font-['Marcellus'] uppercase tracking-widest ">
                <li>
                    <a
                        class="block py-2 pl-3 pr-4 md:p-0 @if (Request::is('home')) text-font-secondary @endif">HOME</a>
                </li>

                <li>
                    <a class="block py-2 pl-3 pr-4 text-[#362c27] md:p-0">Shop</a>
                </li>
                <li>
                    <a class="block py-2 pl-3 pr-4 text-[#362c27] md:p-0">Blog</a>
                </li>
                <li>
                    <a class="block py-2 pl-3 pr-4 text-[#362c27] md:p-0">Pages</a>

                </li>
            </ul>
        </div>

        {{-- <a class="flex items-center">
            <img src="img/logoBG.png" alt="Beanie Logo" class="h-16 w-auto">
        </a> --}}

        <div class="flex items-center space-x-4 my-4 md:my-6 ">
            <div class="relative hidden md:block">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <img src="img/iconSearch.png" alt="Icon 2" class="h-6 w-auto">
                </div>
                <input type="text" id="simple-search"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-full focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Search here..." required>
            </div>
            <a class="md:block">
                <img src="img/iconLike.png" alt="Icon 1" class="h-6 w-auto">
            </a>
            <a class="md:block">
                <img src="img/iconBag.png" alt="Icon 2" class="h-6 w-auto">
            </a>
            <span class="md:block">(01)</span>
        </div>
    </div>
</nav>
