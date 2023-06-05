<div x-data="{ open: false }" @keydown.window.escape="open = false" class="bg-white">
    <!-- Mobile menu -->

    <div x-show="open" class="relative z-40 lg:hidden" x-description="Off-canvas menu for mobile, show/hide based on off-canvas menu state." x-ref="dialog" aria-modal="true">

        <div x-show="open" x-transition:enter="transition-opacity ease-linear duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition-opacity ease-linear duration-300" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" x-description="Off-canvas menu backdrop, show/hide based on off-canvas menu state." class="fixed inset-0 bg-black bg-opacity-25"></div>

        <div class="fixed inset-0 z-40 flex">

            <div x-show="open" x-transition:enter="transition ease-in-out duration-300 transform" x-transition:enter-start="-translate-x-full" x-transition:enter-end="translate-x-0" x-transition:leave="transition ease-in-out duration-300 transform" x-transition:leave-start="translate-x-0" x-transition:leave-end="-translate-x-full" x-description="Off-canvas menu, show/hide based on off-canvas menu state." class="relative flex w-full max-w-xs flex-col overflow-y-auto bg-white pb-12 shadow-xl" @click.away="open = false">
                <div class="flex px-4 pb-2 pt-5">
                    <button type="button" class="-m-2 inline-flex items-center justify-center rounded-md p-2 text-gray-400" @click="open = false">
                        <span class="sr-only">Close menu</span>
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>

                <!-- Links -->
                <div class="mt-2" x-data="Components.tabs()" @tab-click.window="onTabClick" @tab-keydown.window="onTabKeydown">
                    <div class="border-b border-gray-200">
                        <div class="-mb-px flex space-x-8 px-4" aria-orientation="horizontal" role="tablist">
                            <button id="tabs-1-tab-2" class="border-transparent text-gray-900 flex-1 whitespace-nowrap border-b-2 px-1 py-4 text-base font-medium" x-state:on="Selected" x-state:off="Not Selected" :class="{ 'border-gray-600 text-gray-600': selected, 'border-transparent text-gray-900': !(selected) }" x-data="Components.tab(0)" aria-controls="tabs-1-panel-2" role="tab" x-init="init()" @click="onClick" @keydown="onKeydown" @tab-select.window="onTabSelect" :tabindex="selected ? 0 : -1" :aria-selected="selected ? 'true' : 'false'" type="button">Collections</button>
                        </div>
                    </div>

                    <div id="tabs-1-panel-2" class="space-y-12 px-4 py-6" x-description="'Collections' tab panel, show/hide based on tab state." x-data="Components.tabPanel(0)" aria-labelledby="tabs-1-tab-2" x-init="init()" x-show="selected" @tab-select.window="onTabSelect" role="tabpanel" tabindex="0">
                        <div class="grid grid-cols-2 gap-x-4 gap-y-10">
                            <div class="group relative">
                                <div class="aspect-h-1 aspect-w-1 overflow-hidden rounded-md bg-gray-100 group-hover:opacity-75">
                                    <img src="{{ asset('assets/images/category-new-arrival.jpg') }}" alt="Hats and sweaters on wood shelves next to various colors of t-shirts on hangers." class="object-cover object-center">
                                </div>
                                <a href="{{ route('collections') }}" class="mt-6 block text-sm font-medium text-gray-900">
                                    <span class="absolute inset-0 z-10" aria-hidden="true"></span>
                                    New Arrivals
                                </a>
                                <p aria-hidden="true" class="mt-1 text-sm text-gray-500">Shop now</p>
                            </div>
                            <div class="group relative">
                                <div class="aspect-h-1 aspect-w-1 overflow-hidden rounded-md bg-gray-100 group-hover:opacity-75">
                                    <img src="{{ asset('assets/images/category-clothing.jpg') }}" alt="Model putting folded cash into slim card holder olive leather wallet with hand stitching." class="object-cover object-center">
                                </div>
                                <a href="{{ route('collections.products', 'clothing') }}" class="mt-6 block text-sm font-medium text-gray-900">
                                    <span class="absolute inset-0 z-10" aria-hidden="true"></span>
                                    Clothing
                                </a>
                                <p aria-hidden="true" class="mt-1 text-sm text-gray-500">Shop now</p>
                            </div>
                            <div class="group relative">
                                <div class="aspect-h-1 aspect-w-1 overflow-hidden rounded-md bg-gray-100 group-hover:opacity-75">
                                    <img src="{{ asset('assets/images/category-shoes.jpg') }}" alt="Model putting folded cash into slim card holder olive leather wallet with hand stitching." class="object-cover object-center">
                                </div>
                                <a href="{{ route('collections.products', 'shoes') }}" class="mt-6 block text-sm font-medium text-gray-900">
                                    <span class="absolute inset-0 z-10" aria-hidden="true"></span>
                                    Shoes
                                </a>
                                <p aria-hidden="true" class="mt-1 text-sm text-gray-500">Shop now</p>
                            </div>
                            <div class="group relative">
                                <div class="aspect-h-1 aspect-w-1 overflow-hidden rounded-md bg-gray-100 group-hover:opacity-75">
                                    <img src="{{ asset('assets/images/category-accessories.jpg') }}" alt="Grey 6-panel baseball hat with black brim, black mountain graphic on front, and light heather gray body." class="object-cover object-center">
                                </div>
                                <a href="{{ route('collections.products', 'accessories') }}" class="mt-6 block text-sm font-medium text-gray-900">
                                    <span class="absolute inset-0 z-10" aria-hidden="true"></span>
                                    Accessories
                                </a>
                                <p aria-hidden="true" class="mt-1 text-sm text-gray-500">Shop now</p>
                            </div>

                        </div>
                    </div>

                </div>

                <div class="space-y-6 border-t border-gray-200 px-4 py-6">
                    <div class="flow-root">
                        <a href="#" class="-m-2 block p-2 font-medium text-gray-900">About</a>
                    </div>

                    <div class="flow-root">
                        <a href="#" class="-m-2 block p-2 font-medium text-gray-900">Contact</a>
                    </div>

                    <div class="flow-root">
                        <a href="#" class="-m-2 block p-2 font-medium text-gray-900">Help</a>
                    </div>

                </div>

                <div class="space-y-6 border-t border-gray-200 px-4 py-6">
                    <div class="flow-root">
                        <a href="#" class="-m-2 block p-2 font-medium text-gray-900">Create an account</a>
                    </div>
                    <div class="flow-root">
                        <a href="#" class="-m-2 block p-2 font-medium text-gray-900">Sign in</a>
                    </div>
                </div>

            </div>

        </div>
    </div>


    <header class="relative">
        <nav aria-label="Top">
            <!-- Navigation -->
            <div class="bg-white">
                <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                    <div class="flex h-16 items-center justify-between">
                        <!-- Logo (lg+) -->
                        <div class="hidden lg:flex lg:flex-1 lg:items-center">
                            <a href="/">
                                <span class="sr-only">Your Company</span>
                                <x-application-logo/>
                            </a>
                        </div>

                        <div class="hidden h-full lg:flex">
                            <!-- Flyout menus -->
                            <div class="inset-x-0 bottom-0 px-4" x-data="Components.popoverGroup()" x-init="init()">
                                <div class="flex h-full justify-center space-x-8">
                                    <div class="flex" x-data="Components.popover({ open: false, focus: false })" x-init="init()" @keydown.escape="onEscape" @close-popover-group.window="onClosePopoverGroup">
                                        <div class="relative flex">
                                            <button type="button" x-state:on="Item active" x-state:off="Item inactive" class="text-gray-700 hover:text-gray-800 relative flex items-center justify-center text-sm font-medium transition-colors duration-200 ease-out" :class="{ 'text-gray-600': open, 'text-gray-700 hover:text-gray-800': !(open) }" @click="toggle" @mousedown="if (open) $event.preventDefault()" aria-expanded="false" :aria-expanded="open.toString()">
                                                Collections
                                                <span class="absolute inset-x-0 -bottom-px z-20 h-0.5 transition duration-200 ease-out" aria-hidden="true" x-state:on="Open" x-state:off="Closed" :class="{ 'bg-gray-600': open }"></span>
                                            </button>
                                        </div>


                                        <div x-show="open" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" x-description="'Women' flyout menu, show/hide based on flyout menu state." class="absolute inset-x-0 top-full z-10 bg-white text-sm text-gray-500" x-ref="panel" @click.away="open = false">
                                            <!-- Presentational element used to render the bottom shadow, if we put the shadow on the actual panel it pokes out the top, so we use this shorter element to hide the top of the shadow -->
                                            <div class="absolute inset-0 top-1/2 bg-white shadow" aria-hidden="true"></div>
                                            <!-- Fake border when menu is open -->
                                            <div class="absolute inset-0 top-0 mx-auto h-px max-w-7xl px-8" aria-hidden="true">
                                                <div class="bg-transparent h-px w-full transition-colors duration-200 ease-out" x-state:on="Open" x-state:off="Closed" :class="{ 'bg-gray-200': open, 'bg-transparent': !(open) }"></div>
                                            </div>

                                            <div class="relative">
                                                <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                                                    <div class="grid grid-cols-4 gap-x-8 gap-y-10 py-16">
                                                        <div class="group relative">
                                                            <div class="aspect-h-1 aspect-w-1 overflow-hidden rounded-md bg-gray-100 group-hover:opacity-75">
                                                                <img src="{{ asset('assets/images/category-new-arrival.jpg') }}" alt="Hats and sweaters on wood shelves next to various colors of t-shirts on hangers." class="object-cover object-center">
                                                            </div>
                                                            <a href="{{ route('collections') }}" class="mt-4 block font-medium text-gray-900">
                                                                <span class="absolute inset-0 z-10" aria-hidden="true"></span>
                                                                New Arrivals
                                                            </a>
                                                            <p aria-hidden="true" class="mt-1">Shop now</p>
                                                        </div>
                                                        <div class="group relative">
                                                            <div class="aspect-h-1 aspect-w-1 overflow-hidden rounded-md bg-gray-100 group-hover:opacity-75">
                                                                <img src="{{ asset('assets/images/category-clothing.jpg') }}" alt="Model wearing light heather gray t-shirt." class="object-cover object-center">
                                                            </div>
                                                            <a href="{{ route('collections.products', 'clothing') }}" class="mt-4 block font-medium text-gray-900">
                                                                <span class="absolute inset-0 z-10" aria-hidden="true"></span>
                                                                Clothing
                                                            </a>
                                                            <p aria-hidden="true" class="mt-1">Shop now</p>
                                                        </div>
                                                        <div class="group relative">
                                                            <div class="aspect-h-1 aspect-w-1 overflow-hidden rounded-md bg-gray-100 group-hover:opacity-75">
                                                                <img src="{{ asset('assets/images/category-shoes.jpg') }}" alt="Grey 6-panel baseball hat with black brim, black mountain graphic on front, and light heather gray body." class="object-cover object-center">
                                                            </div>
                                                            <a href="{{ route('collections.products', 'shoes') }}" class="mt-4 block font-medium text-gray-900">
                                                                <span class="absolute inset-0 z-10" aria-hidden="true"></span>
                                                                Shoes
                                                            </a>
                                                            <p aria-hidden="true" class="mt-1">Shop now</p>
                                                        </div>
                                                        <div class="group relative">
                                                            <div class="aspect-h-1 aspect-w-1 overflow-hidden rounded-md bg-gray-100 group-hover:opacity-75">
                                                                <img src="{{ asset('assets/images/category-accessories.jpg') }}" alt="Model putting folded cash into slim card holder olive leather wallet with hand stitching." class="object-cover object-center">
                                                            </div>
                                                            <a href="{{ route('collections.products', 'accessories') }}" class="mt-4 block font-medium text-gray-900">
                                                                <span class="absolute inset-0 z-10" aria-hidden="true"></span>
                                                                Accessories
                                                            </a>
                                                            <p aria-hidden="true" class="mt-1">Shop now</p>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <a href="#" class="flex items-center text-sm font-medium text-gray-700 hover:text-gray-800">About</a>
                                    <a href="#" class="flex items-center text-sm font-medium text-gray-700 hover:text-gray-800">Contact</a>
                                    <a href="#" class="flex items-center text-sm font-medium text-gray-700 hover:text-gray-800">Help</a>

                                </div>
                            </div>
                        </div>

                        <!-- Mobile menu and search (lg-) -->
                        <div class="flex flex-1 items-center lg:hidden">
                            <button type="button" x-description="Mobile menu toggle, controls the 'mobileMenuOpen' state." class="-ml-2 rounded-md bg-white p-2 text-gray-400" @click="open = true">
                                <span class="sr-only">Open menu</span>
                                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"></path>
                                </svg>
                            </button>

                        </div>

                        <!-- Logo (lg-) -->
                        <a href="/" class="lg:hidden">
                            <span class="sr-only">Your Company</span>
                            <x-application-logo/>
                        </a>

                        <div class="flex flex-1 items-center justify-end">
                            <div class="flex lg:ml-6">
                                <a href="#" class="p-2 text-gray-400 hover:text-gray-500">
                                    <span class="sr-only">Search</span>
                                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z"></path>
                                    </svg>
                                </a>
                            </div>

                            <div class="flex items-center lg:ml-8">
                                <div class="hidden lg:flex lg:flex-1 lg:items-center lg:justify-end lg:space-x-6">
                                    <a href="#" class="text-sm font-medium text-gray-700 hover:text-gray-800">Sign in</a>
                                    <span class="h-6 w-px bg-gray-200" aria-hidden="true"></span>
                                    <a href="#" class="text-sm font-medium text-gray-700 hover:text-gray-800">Create account</a>
                                </div>

                                <!-- Cart -->
                                <div class="ml-4 flow-root lg:ml-8">
                                    <a href="#" class="group -m-2 flex items-center p-2">
                                        <svg class="h-6 w-6 flex-shrink-0 text-gray-400 group-hover:text-gray-500" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z"></path>
                                        </svg>
                                        <span class="ml-2 text-sm font-medium text-gray-700 group-hover:text-gray-800">0</span>
                                        <span class="sr-only">items in cart, view bag</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>
</div>
