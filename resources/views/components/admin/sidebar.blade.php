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
