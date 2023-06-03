<div x-show="open" class="relative z-50 lg:hidden" x-description="Off-canvas menu for mobile, show/hide based on off-canvas menu state." x-ref="dialog" aria-modal="true">

    <div x-show="open" x-transition:enter="transition-opacity ease-linear duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition-opacity ease-linear duration-300" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="fixed inset-0 bg-gray-900/80" x-description="Off-canvas menu backdrop, show/hide based on off-canvas menu state."></div>


    <div class="fixed inset-0 flex">

        <div x-show="open" x-transition:enter="transition ease-in-out duration-300 transform" x-transition:enter-start="-translate-x-full" x-transition:enter-end="translate-x-0" x-transition:leave="transition ease-in-out duration-300 transform" x-transition:leave-start="translate-x-0" x-transition:leave-end="-translate-x-full" x-description="Off-canvas menu, show/hide based on off-canvas menu state." class="relative mr-16 flex w-full max-w-xs flex-1" @click.away="open = false">

            <div x-show="open" x-transition:enter="ease-in-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="ease-in-out duration-300" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" x-description="Close button, show/hide based on off-canvas menu state." class="absolute left-full top-0 flex w-16 justify-center pt-5">
                <button type="button" class="-m-2.5 p-2.5" @click="open = false">
                    <span class="sr-only">Close sidebar</span>
                    <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>

            <!-- Sidebar component, swap this element with another sidebar if you like -->
            <div class="flex grow flex-col gap-y-5 overflow-y-auto bg-white px-6 pb-4">
                <div class="flex h-16 shrink-0 items-center">
                    <x-application-logo class="fill-current text-gray-800" />
                </div>
                <nav class="flex flex-1 flex-col">
                    <ul role="list" class="flex flex-1 flex-col gap-y-7">
                        <li>
                            <ul role="list" class="-mx-2 space-y-1">

                                <li>
                                    <a href="{{ route('admin.home') }}"
                                        class="{{ request()->routeIs('admin.home') ? 'text-gray-800 bg-gray-100' : 'text-gray-700 ' }} hover:text-gray-800 hover:bg-gray-100 group flex gap-x-3 rounded-md p-2 text-sm leading-6 font-semibold"
                                        x-state-description="undefined: &quot;bg-gray-100 text-gray-800&quot;, undefined: &quot;text-gray-700 hover:text-gray-800 hover:bg-gray-100&quot;">
                                        <svg class="{{ request()->routeIs('admin.home') ? 'text-gray-800' : 'text-gray-400 ' }} h-6 w-6 shrink-0 group-hover:text-gray-800" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25">
                                            </path>
                                        </svg>
                                        Dashboard
                                    </a>
                                </li>

                                <li>
                                    <a href="{{ route('admin.categories.index') }}"
                                        class="{{ request()->routeIs('admin.categories.index') ? 'text-gray-800 bg-gray-100' : 'text-gray-700 ' }} hover:text-gray-800 hover:bg-gray-100 group flex gap-x-3 rounded-md p-2 text-sm leading-6 font-semibold"
                                        x-state-description="undefined: &quot;bg-gray-100 text-gray-800&quot;, undefined: &quot;text-gray-700 hover:text-gray-800 hover:bg-gray-100&quot;">
                                        <svg class="{{ request()->routeIs('admin.categories.index') ? 'text-gray-800' : 'text-gray-400 ' }} h-6 w-6 shrink-0 group-hover:text-gray-800" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M9.568 3H5.25A2.25 2.25 0 003 5.25v4.318c0 .597.237 1.17.659 1.591l9.581 9.581c.699.699 1.78.872 2.607.33a18.095 18.095 0 005.223-5.223c.542-.827.369-1.908-.33-2.607L11.16 3.66A2.25 2.25 0 009.568 3z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 6h.008v.008H6V6z" />
                                        </svg>
                                        Categories
                                    </a>
                                </li>

                                <li>
                                    <a href="{{ route('admin.products.index') }}"
                                        class="{{ request()->routeIs('admin.products.index') ? 'text-gray-800 bg-gray-100' : 'text-gray-700 ' }} hover:text-gray-800 hover:bg-gray-100 group flex gap-x-3 rounded-md p-2 text-sm leading-6 font-semibold"
                                        x-state-description="undefined: &quot;bg-gray-100 text-gray-800&quot;, undefined: &quot;text-gray-700 hover:text-gray-800 hover:bg-gray-100&quot;">
                                        <svg class="{{ request()->routeIs('admin.products.index') ? 'text-gray-800' : 'text-gray-400 ' }} h-6 w-6 shrink-0 group-hover:text-gray-800" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3.17 7.44 12 12.55l8.77-5.08M12 21.61v-9.07"/>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.93 2.48 4.59 5.44c-1.21.67-2.2 2.35-2.2 3.73v5.65c0 1.38.99 3.06 2.2 3.73l5.34 2.97c1.14.63 3.01.63 4.15 0l5.34-2.97c1.21-.67 2.2-2.35 2.2-3.73V9.17c0-1.38-.99-3.06-2.2-3.73l-5.34-2.97c-1.15-.63-3.01-.63-4.15.01Z"/>
                                        </svg>
                                        Products
                                    </a>
                                </li>

                                <li>
                                    <a href="{{ route('admin.orders.index') }}"
                                        class="{{ request()->routeIs('admin.orders.index') ? 'text-gray-800 bg-gray-100' : 'text-gray-700 ' }} hover:text-gray-800 hover:bg-gray-100 group flex gap-x-3 rounded-md p-2 text-sm leading-6 font-semibold"
                                        x-state-description="undefined: &quot;bg-gray-100 text-gray-800&quot;, undefined: &quot;text-gray-700 hover:text-gray-800 hover:bg-gray-100&quot;">
                                        <svg class="{{ request()->routeIs('admin.orders.index') ? 'text-gray-800' : 'text-gray-400 ' }} h-6 w-6 shrink-0 group-hover:text-gray-800" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 2v10c0 1.1-.9 2-2 2H2V6c0-2.21 1.79-4 4-4h9Z"/>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M22 14v3c0 1.66-1.34 3-3 3h-1c0-1.1-.9-2-2-2s-2 .9-2 2h-4c0-1.1-.9-2-2-2s-2 .9-2 2H5c-1.66 0-3-1.34-3-3v-3h11c1.1 0 2-.9 2-2V5h1.84c.72 0 1.38.39 1.74 1.01L20.29 9H19c-.55 0-1 .45-1 1v3c0 .55.45 1 1 1h3Z"/>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8 22a2 2 0 1 0 0-4 2 2 0 0 0 0 4ZM16 22a2 2 0 1 0 0-4 2 2 0 0 0 0 4ZM22 12v2h-3c-.55 0-1-.45-1-1v-3c0-.55.45-1 1-1h1.29L22 12Z"/>
                                        </svg>
                                        Orders
                                    </a>
                                </li>

                                <li>
                                    <a href="{{ route('admin.payments.index') }}"
                                        class="{{ request()->routeIs('admin.payments.index') ? 'text-gray-800 bg-gray-100' : 'text-gray-700 ' }} hover:text-gray-800 hover:bg-gray-100 group flex gap-x-3 rounded-md p-2 text-sm leading-6 font-semibold"
                                        x-state-description="undefined: &quot;bg-gray-100 text-gray-800&quot;, undefined: &quot;text-gray-700 hover:text-gray-800 hover:bg-gray-100&quot;">
                                        <svg class="{{ request()->routeIs('admin.payments.index') ? 'text-gray-800' : 'text-gray-400 ' }} h-6 w-6 shrink-0 group-hover:text-gray-800" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M2.5 11.51V7.84c0-1.19.73-2.25 1.84-2.67l7.94-3c1.24-.46 2.57.45 2.57 1.78v3.8M22.559 13.97v2.06c0 .55-.44 1-1 1.02h-1.96c-1.08 0-2.07-.79-2.16-1.87-.06-.63.18-1.22.6-1.63.37-.38.88-.6 1.44-.6h2.08c.56.02 1 .47 1 1.02ZM7 12h7"/>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M18.04 13.55c-.42.41-.66 1-.6 1.63.09 1.08 1.08 1.87 2.16 1.87h1.9v1.19c0 2.07-1.69 3.76-3.76 3.76H7.64C8.47 21.27 9 20.2 9 19a3.999 3.999 0 0 0-6.5-3.12v-4.37c0-2.07 1.69-3.76 3.76-3.76h11.48c2.07 0 3.76 1.69 3.76 3.76v1.44h-2.02c-.56 0-1.07.22-1.44.6Z"/>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5" d="M9 19c0 1.2-.53 2.27-1.36 3A4 4 0 0 1 5 23c-2.21 0-4-1.79-4-4 0-1.26.58-2.39 1.5-3.12A3.999 3.999 0 0 1 9 19Z"/><path stroke="#7C7C7C" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5" d="M5.25 17.75v1.5L4 20"/>
                                        </svg>
                                        Payments
                                    </a>
                                </li>

                            </ul>
                        </li>

                        <li>
                            <div class="text-xs font-semibold leading-6 text-gray-400">Your actions</div>
                            <ul role="list" class="-mx-2 mt-2 space-y-1">

                                <li>
                                    <a href=""
                                        class=""
                                        x-state-description="undefined: &quot;bg-gray-100 text-gray-800&quot;, undefined: &quot;text-gray-700 hover:text-gray-800 hover:bg-gray-100&quot;">
                                        <svg class="text-gray-400 h-6 w-6 shrink-0 group-hover:text-gray-800" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 2H9C4 2 2 4 2 9v6c0 3.78 1.14 5.85 3.86 6.62.22-2.6 2.89-4.65 6.14-4.65 3.25 0 5.92 2.05 6.14 4.65C20.86 20.85 22 18.78 22 15V9c0-5-2-7-7-7Zm-3 12.17c-1.98 0-3.58-1.61-3.58-3.59C8.42 8.6 10.02 7 12 7s3.58 1.6 3.58 3.58-1.6 3.59-3.58 3.59Z"/>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15.58 10.58c0 1.98-1.6 3.59-3.58 3.59s-3.58-1.61-3.58-3.59C8.42 8.6 10.02 7 12 7s3.58 1.6 3.58 3.58Z"/>
                                        </svg>
                                        User
                                    </a>
                                </li>

                                <li>
                                    <form method="POST" action="">

                                        <a href=""
                                            onclick="event.preventDefault(); this.closest('form').submit();"
                                            class="text-gray-700 hover:text-gray-800 hover:bg-gray-100 group flex gap-x-3 rounded-md p-2 text-sm leading-6 font-semibold"
                                            x-state-description="undefined: &quot;bg-gray-100 text-gray-800&quot;, undefined: &quot;text-gray-700 hover:text-gray-800 hover:bg-gray-100&quot;">
                                            <svg class="h-6 w-6 shrink-0 text-gray-400 group-hover:text-gray-800" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8.9 7.56c.31-3.6 2.16-5.07 6.21-5.07h.13c4.47 0 6.26 1.79 6.26 6.26v6.52c0 4.47-1.79 6.26-6.26 6.26h-.13c-4.02 0-5.87-1.45-6.2-4.99M15 12H3.62M5.85 8.65 2.5 12l3.35 3.35"/>
                                            </svg>
                                            Logout
                                        </a>
                                    </form>
                                </li>

                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>

    </div>
</div>


<!-- Static sidebar for desktop -->
<div class="hidden lg:fixed lg:inset-y-0 lg:z-50 lg:flex lg:w-72 lg:flex-col">
    <!-- Sidebar component, swap this element with another sidebar if you like -->
    <div class="flex grow flex-col gap-y-5 overflow-y-auto border-r border-gray-200 bg-white px-6 pb-4">
        <div class="flex h-16 shrink-0 items-center">
            <x-application-logo class="fill-current text-gray-800" />
        </div>
        <nav class="flex flex-1 flex-col">
            <ul role="list" class="flex flex-1 flex-col gap-y-7">
                <li>
                    <ul role="list" class="-mx-2 space-y-1">

                        <li>
                            <a href="{{ route('admin.home') }}"
                                class="{{ request()->routeIs('admin.home') ? 'text-gray-800 bg-gray-100' : 'text-gray-700 ' }} hover:text-gray-800 hover:bg-gray-100 group flex gap-x-3 rounded-md p-2 text-sm leading-6 font-semibold"
                                x-state-description="undefined: &quot;bg-gray-100 text-gray-800&quot;, undefined: &quot;text-gray-700 hover:text-gray-800 hover:bg-gray-100&quot;">
                                <svg class="{{ request()->routeIs('admin.home') ? 'text-gray-800' : 'text-gray-400 ' }} h-6 w-6 shrink-0 group-hover:text-gray-800" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25">
                                    </path>
                                </svg>
                                Dashboard
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('admin.categories.index') }}"
                                class="{{ request()->routeIs('admin.categories.index') ? 'text-gray-800 bg-gray-100' : 'text-gray-700 ' }} hover:text-gray-800 hover:bg-gray-100 group flex gap-x-3 rounded-md p-2 text-sm leading-6 font-semibold"
                                x-state-description="undefined: &quot;bg-gray-100 text-gray-800&quot;, undefined: &quot;text-gray-700 hover:text-gray-800 hover:bg-gray-100&quot;">
                                <svg class="{{ request()->routeIs('admin.categories.index') ? 'text-gray-800' : 'text-gray-400 ' }} h-6 w-6 shrink-0 group-hover:text-gray-800" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9.568 3H5.25A2.25 2.25 0 003 5.25v4.318c0 .597.237 1.17.659 1.591l9.581 9.581c.699.699 1.78.872 2.607.33a18.095 18.095 0 005.223-5.223c.542-.827.369-1.908-.33-2.607L11.16 3.66A2.25 2.25 0 009.568 3z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 6h.008v.008H6V6z" />
                                </svg>
                                Categories
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('admin.products.index') }}"
                                class="{{ request()->routeIs('admin.products.index') ? 'text-gray-800 bg-gray-100' : 'text-gray-700 ' }} hover:text-gray-800 hover:bg-gray-100 group flex gap-x-3 rounded-md p-2 text-sm leading-6 font-semibold"
                                x-state-description="undefined: &quot;bg-gray-100 text-gray-800&quot;, undefined: &quot;text-gray-700 hover:text-gray-800 hover:bg-gray-100&quot;">
                                <svg class="{{ request()->routeIs('admin.products.index') ? 'text-gray-800' : 'text-gray-400 ' }} h-6 w-6 shrink-0 group-hover:text-gray-800" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3.17 7.44 12 12.55l8.77-5.08M12 21.61v-9.07"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.93 2.48 4.59 5.44c-1.21.67-2.2 2.35-2.2 3.73v5.65c0 1.38.99 3.06 2.2 3.73l5.34 2.97c1.14.63 3.01.63 4.15 0l5.34-2.97c1.21-.67 2.2-2.35 2.2-3.73V9.17c0-1.38-.99-3.06-2.2-3.73l-5.34-2.97c-1.15-.63-3.01-.63-4.15.01Z"/>
                                </svg>
                                Products
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('admin.orders.index') }}"
                                class="{{ request()->routeIs('admin.orders.index') ? 'text-gray-800 bg-gray-100' : 'text-gray-700 ' }} hover:text-gray-800 hover:bg-gray-100 group flex gap-x-3 rounded-md p-2 text-sm leading-6 font-semibold"
                                x-state-description="undefined: &quot;bg-gray-100 text-gray-800&quot;, undefined: &quot;text-gray-700 hover:text-gray-800 hover:bg-gray-100&quot;">
                                <svg class="{{ request()->routeIs('admin.orders.index') ? 'text-gray-800' : 'text-gray-400 ' }} h-6 w-6 shrink-0 group-hover:text-gray-800" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 2v10c0 1.1-.9 2-2 2H2V6c0-2.21 1.79-4 4-4h9Z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M22 14v3c0 1.66-1.34 3-3 3h-1c0-1.1-.9-2-2-2s-2 .9-2 2h-4c0-1.1-.9-2-2-2s-2 .9-2 2H5c-1.66 0-3-1.34-3-3v-3h11c1.1 0 2-.9 2-2V5h1.84c.72 0 1.38.39 1.74 1.01L20.29 9H19c-.55 0-1 .45-1 1v3c0 .55.45 1 1 1h3Z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8 22a2 2 0 1 0 0-4 2 2 0 0 0 0 4ZM16 22a2 2 0 1 0 0-4 2 2 0 0 0 0 4ZM22 12v2h-3c-.55 0-1-.45-1-1v-3c0-.55.45-1 1-1h1.29L22 12Z"/>
                                </svg>
                                Orders
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('admin.payments.index') }}"
                                class="{{ request()->routeIs('admin.payments.index') ? 'text-gray-800 bg-gray-100' : 'text-gray-700 ' }} hover:text-gray-800 hover:bg-gray-100 group flex gap-x-3 rounded-md p-2 text-sm leading-6 font-semibold"
                                x-state-description="undefined: &quot;bg-gray-100 text-gray-800&quot;, undefined: &quot;text-gray-700 hover:text-gray-800 hover:bg-gray-100&quot;">
                                <svg class="{{ request()->routeIs('admin.payments.index') ? 'text-gray-800' : 'text-gray-400 ' }} h-6 w-6 shrink-0 group-hover:text-gray-800" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M2.5 11.51V7.84c0-1.19.73-2.25 1.84-2.67l7.94-3c1.24-.46 2.57.45 2.57 1.78v3.8M22.559 13.97v2.06c0 .55-.44 1-1 1.02h-1.96c-1.08 0-2.07-.79-2.16-1.87-.06-.63.18-1.22.6-1.63.37-.38.88-.6 1.44-.6h2.08c.56.02 1 .47 1 1.02ZM7 12h7"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M18.04 13.55c-.42.41-.66 1-.6 1.63.09 1.08 1.08 1.87 2.16 1.87h1.9v1.19c0 2.07-1.69 3.76-3.76 3.76H7.64C8.47 21.27 9 20.2 9 19a3.999 3.999 0 0 0-6.5-3.12v-4.37c0-2.07 1.69-3.76 3.76-3.76h11.48c2.07 0 3.76 1.69 3.76 3.76v1.44h-2.02c-.56 0-1.07.22-1.44.6Z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5" d="M9 19c0 1.2-.53 2.27-1.36 3A4 4 0 0 1 5 23c-2.21 0-4-1.79-4-4 0-1.26.58-2.39 1.5-3.12A3.999 3.999 0 0 1 9 19Z"/><path stroke="#7C7C7C" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5" d="M5.25 17.75v1.5L4 20"/>
                                </svg>
                                Payments
                            </a>
                        </li>

                    </ul>
                </li>
                <li>
                    <div class="text-xs font-semibold leading-6 text-gray-400">Your actions</div>
                    <ul role="list" class="-mx-2 mt-2 space-y-1">
                        <li>
                            <a href=""
                                class="text-gray-700 hover:text-gray-800 hover:bg-gray-100 group flex gap-x-3 rounded-md p-2 text-sm leading-6 font-semibold"
                                x-state-description="undefined: &quot;bg-gray-100 text-gray-800&quot;, undefined: &quot;text-gray-700 hover:text-gray-800 hover:bg-gray-100&quot;">
                                <svg class="text-gray-400 h-6 w-6 shrink-0 group-hover:text-gray-800" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M18.14 21.62c-.88.26-1.92.38-3.14.38H9c-1.22 0-2.26-.12-3.14-.38.22-2.6 2.89-4.65 6.14-4.65 3.25 0 5.92 2.05 6.14 4.65Z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 2H9C4 2 2 4 2 9v6c0 3.78 1.14 5.85 3.86 6.62.22-2.6 2.89-4.65 6.14-4.65 3.25 0 5.92 2.05 6.14 4.65C20.86 20.85 22 18.78 22 15V9c0-5-2-7-7-7Zm-3 12.17c-1.98 0-3.58-1.61-3.58-3.59C8.42 8.6 10.02 7 12 7s3.58 1.6 3.58 3.58-1.6 3.59-3.58 3.59Z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15.58 10.58c0 1.98-1.6 3.59-3.58 3.59s-3.58-1.61-3.58-3.59C8.42 8.6 10.02 7 12 7s3.58 1.6 3.58 3.58Z"/>
                                </svg>
                                User
                            </a>
                        </li>

                        <li>
                            <form method="POST" action="">
                                <a href=""
                                    onclick="event.preventDefault(); this.closest('form').submit();"
                                    class="text-gray-700 hover:text-gray-800 hover:bg-gray-100 group flex gap-x-3 rounded-md p-2 text-sm leading-6 font-semibold"
                                    x-state-description="undefined: &quot;bg-gray-100 text-gray-800&quot;, undefined: &quot;text-gray-700 hover:text-gray-800 hover:bg-gray-100&quot;">
                                    <svg class="h-6 w-6 shrink-0 text-gray-400 group-hover:text-gray-800" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8.9 7.56c.31-3.6 2.16-5.07 6.21-5.07h.13c4.47 0 6.26 1.79 6.26 6.26v6.52c0 4.47-1.79 6.26-6.26 6.26h-.13c-4.02 0-5.87-1.45-6.2-4.99M15 12H3.62M5.85 8.65 2.5 12l3.35 3.35"/>
                                    </svg>
                                    Logout
                                </a>
                            </form>
                        </li>

                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</div>

<div class="sticky top-0 z-40 flex items-center gap-x-6 bg-white px-4 py-4 shadow-sm sm:px-6 lg:hidden">
    <button type="button" class="-m-2.5 p-2.5 text-gray-700 lg:hidden" @click="open = true">
        <span class="sr-only">Open sidebar</span>
        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"></path>
        </svg>
    </button>
    <div class="flex-1 text-sm font-semibold leading-6 text-gray-900">Dashboard</div>
</div>
