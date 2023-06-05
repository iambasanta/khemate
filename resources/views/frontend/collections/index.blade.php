<x-frontend.app title="Collections">
    <div class="mx-auto max-w-7xl px-4 py-24 sm:px-6 sm:py-32 lg:px-8">
        <h2 class="text-2xl font-bold tracking-tight text-gray-900">Shop by Collection</h2>
        <p class="mt-4 text-base text-gray-500">Each season, we collaborate with world-class designers to create a collection inspired by the natural world.</p>

        <div class="mt-10 flow-root">
            <div class="-my-2">
                <div class="relative box-content h-80 overflow-x-auto py-2 xl:overflow-visible">
                    <div
                        class="min-w-screen-xl absolute flex space-x-8 px-4 sm:px-6 lg:px-8 xl:relative xl:grid xl:grid-cols-5 xl:gap-x-8 xl:space-x-0 xl:px-0">
                        <a href="{{ route('collections') }}"
                            class="relative flex h-80 w-56 flex-col overflow-hidden rounded-lg p-6 hover:opacity-75 xl:w-auto">
                            <span aria-hidden="true" class="absolute inset-0">
                                <img src="{{ asset('assets/images/category-new-arrival.jpg') }}" alt=""
                                    class="h-full w-full object-cover object-center">
                            </span>
                            <span aria-hidden="true"
                                class="absolute inset-x-0 bottom-0 h-2/3 bg-gradient-to-t from-gray-800 opacity-50"></span>
                            <span class="relative mt-auto text-center text-xl font-bold text-white">New Arrivals</span>
                        </a>
                        <a href="{{ route('collections.products', 'clothing') }}"
                            class="relative flex h-80 w-56 flex-col overflow-hidden rounded-lg p-6 hover:opacity-75 xl:w-auto">
                            <span aria-hidden="true" class="absolute inset-0">
                                <img src="{{ asset('assets/images/category-clothing.jpg') }}" alt=""
                                    class="h-full w-full object-cover object-center">
                            </span>
                            <span aria-hidden="true"
                                class="absolute inset-x-0 bottom-0 h-2/3 bg-gradient-to-t from-gray-800 opacity-50"></span>
                            <span class="relative mt-auto text-center text-xl font-bold text-white">Clothing</span>
                        </a>
                        <a href="{{ route('collections.products', 'shoes') }}"
                            class="relative flex h-80 w-56 flex-col overflow-hidden rounded-lg p-6 hover:opacity-75 xl:w-auto">
                            <span aria-hidden="true" class="absolute inset-0">
                                <img src="{{ asset('assets/images/category-shoes.jpg') }}" alt=""
                                    class="h-full w-full object-cover object-center">
                            </span>
                            <span aria-hidden="true"
                                class="absolute inset-x-0 bottom-0 h-2/3 bg-gradient-to-t from-gray-800 opacity-50"></span>
                            <span class="relative mt-auto text-center text-xl font-bold text-white">Shoes</span>
                        </a>
                        <a href="{{ route('collections.products', 'accessories') }}"
                            class="relative flex h-80 w-56 flex-col overflow-hidden rounded-lg p-6 hover:opacity-75 xl:w-auto">
                            <span aria-hidden="true" class="absolute inset-0">
                                <img src="{{ asset('assets/images/category-accessories.jpg') }}" alt=""
                                    class="h-full w-full object-cover object-center">
                            </span>
                            <span aria-hidden="true"
                                class="absolute inset-x-0 bottom-0 h-2/3 bg-gradient-to-t from-gray-800 opacity-50"></span>
                            <span class="relative mt-auto text-center text-xl font-bold text-white">Accessories</span>
                        </a>
                        <a href="{{ route('collections') }}"
                            class="relative flex h-80 w-56 flex-col overflow-hidden rounded-lg p-6 hover:opacity-75 xl:w-auto">
                            <span aria-hidden="true" class="absolute inset-0">
                                <img src="{{ asset('assets/images/category-sale.jpg') }}" alt=""
                                    class="h-full w-full object-cover object-center">
                            </span>
                            <span aria-hidden="true"
                                class="absolute inset-x-0 bottom-0 h-2/3 bg-gradient-to-t from-gray-800 opacity-50"></span>
                            <span class="relative mt-auto text-center text-xl font-bold text-white">Sale</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-6 sm:hidden">
            <a href="#" class="block text-sm font-semibold text-gray-600 hover:text-gray-500">
                Browse all categories
                <span aria-hidden="true"> →</span>
            </a>
        </div>
    </div>
</x-frontend.app>
