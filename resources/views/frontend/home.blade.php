<x-frontend.app title="Home">

    <!-- Hero section -->
    <div class="relative overflow-hidden">
        <div class="pb-80 pt-16 sm:pb-40 sm:pt-24 lg:pb-48 lg:pt-40">
            <div class="relative mx-auto max-w-7xl px-4 sm:static sm:px-6 lg:px-8">
                <div class="sm:max-w-lg">
                    <h1 class="font text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl">Summer styles are finally here
                    </h1>
                    <p class="mt-4 text-xl text-gray-500">This year, our new summer collection will shelter you from the harsh
                        elements of a world that doesn't care if you live or die.</p>
                </div>
                <div>
                    <div class="mt-10">
                        <!-- Decorative image grid -->
                        <div aria-hidden="true"
                            class="pointer-events-none lg:absolute lg:inset-y-0 lg:mx-auto lg:w-full lg:max-w-7xl">
                            <div
                                class="absolute transform sm:left-1/2 sm:top-0 sm:translate-x-8 lg:left-1/2 lg:top-1/2 lg:-translate-y-1/2 lg:translate-x-8">
                                <div class="flex items-center space-x-6 lg:space-x-8">
                                    <div class="grid flex-shrink-0 grid-cols-1 gap-y-6 lg:gap-y-8">
                                        <div class="h-64 w-44 overflow-hidden rounded-lg sm:opacity-0 lg:opacity-100">
                                            <img src="{{ asset('assets/images/hero-image-tile-01.jpg') }}" alt=""
                                                class="h-full w-full object-cover object-center">
                                        </div>
                                        <div class="h-64 w-44 overflow-hidden rounded-lg">
                                            <img src="{{ asset('assets/images/hero-image-tile-02.jpg') }}" alt=""
                                                class="h-full w-full object-cover object-center">
                                        </div>
                                    </div>
                                    <div class="grid flex-shrink-0 grid-cols-1 gap-y-6 lg:gap-y-8">
                                        <div class="h-64 w-44 overflow-hidden rounded-lg">
                                            <img src="{{ asset('assets/images/hero-image-tile-03.jpg') }}" alt=""
                                                class="h-full w-full object-cover object-center">
                                        </div>
                                        <div class="h-64 w-44 overflow-hidden rounded-lg">
                                            <img src="{{ asset('assets/images/hero-image-tile-04.jpg') }}" alt=""
                                                class="h-full w-full object-cover object-center">
                                        </div>
                                        <div class="h-64 w-44 overflow-hidden rounded-lg">
                                            <img src="{{ asset('assets/images/hero-image-tile-05.jpg') }}" alt=""
                                                class="h-full w-full object-cover object-center">
                                        </div>
                                    </div>
                                    <div class="grid flex-shrink-0 grid-cols-1 gap-y-6 lg:gap-y-8">
                                        <div class="h-64 w-44 overflow-hidden rounded-lg">
                                            <img src="{{ asset('assets/images/hero-image-tile-06.jpg') }}" alt=""
                                                class="h-full w-full object-cover object-center">
                                        </div>
                                        <div class="h-64 w-44 overflow-hidden rounded-lg">
                                            <img src="{{ asset('assets/images/hero-image-tile-07.jpg') }}" alt=""
                                                class="h-full w-full object-cover object-center">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <a href="{{ route('collections') }}" class="inline-block rounded-md border border-transparent bg-gray-600 px-8 py-3 text-center font-medium text-white hover:bg-gray-700">Shop Collection</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section aria-labelledby="category-heading" class="bg-gray-50">
        <div class="mx-auto max-w-7xl px-4 py-24 sm:px-6 sm:py-32 lg:px-8">
            <div class="sm:flex sm:items-baseline sm:justify-between">
                <h2 id="category-heading" class="text-2xl font-bold tracking-tight text-gray-900">Shop by Category</h2>
                <a href="{{ route('collections') }}" class="hidden text-sm font-semibold text-gray-600 hover:text-gray-500 sm:block">
                    Browse all categories
                    <span aria-hidden="true"> →</span>
                </a>
            </div>

            <div class="mt-4 flow-root">
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
    </section>

    <!-- Featured section -->
    <section aria-labelledby="cause-heading">
        <div class="relative bg-gray-800 px-6 py-32 sm:px-12 sm:py-40 lg:px-16">
            <div class="absolute inset-0 overflow-hidden">
                <img src="{{ asset('assets/images/feature-section-full-width.jpg') }}" alt=""
                    class="h-full w-full object-cover object-center">
            </div>
            <div aria-hidden="true" class="absolute inset-0 bg-gray-900 bg-opacity-50"></div>
            <div class="relative mx-auto flex max-w-3xl flex-col items-center text-center">
                <h2 id="cause-heading" class="text-3xl font-bold tracking-tight text-white sm:text-4xl">Long-term thinking
                </h2>
                <p class="mt-3 text-xl text-white">We're committed to responsible, sustainable, and ethical manufacturing. Our
                    small-scale approach allows us to focus on quality and reduce our impact. We're doing our best to delay the
                    inevitable heat-death of the universe.</p>
                <a href="#" class="mt-8 block w-full rounded-md border border-transparent bg-white px-8 py-3 text-base font-medium text-gray-900 hover:bg-gray-100 sm:w-auto">Read our story</a>
            </div>
        </div>
    </section>

    <!-- Featured products section -->
    <section aria-labelledby="trending-heading">
        <div class="mx-auto max-w-7xl px-4 py-24 sm:px-6 sm:py-32 lg:px-8 lg:pt-32">
            <div class="md:flex md:items-center md:justify-between">
                <h2 id="favorites-heading" class="text-2xl font-bold tracking-tight text-gray-900">Featured Products</h2>
                <a href="{{ route('collections') }}" class="hidden text-sm font-medium text-gray-600 hover:text-gray-500 md:block">
                    Shop the collection
                    <span aria-hidden="true"> →</span>
                </a>
            </div>

            <div class="mt-6 grid grid-cols-2 gap-x-4 gap-y-10 sm:gap-x-6 md:grid-cols-4 md:gap-y-0 lg:gap-x-8">
            @foreach( $products as $product )
                <div class="group relative">
                    <div class="h-56 w-full overflow-hidden rounded-md group-hover:opacity-75 lg:h-72 xl:h-80">
                        <img src="{{ $product->image }}" alt="Product image" class="h-full w-full object-cover object-center">
                    </div>
                    <h3 class="mt-4 text-sm text-gray-700">
                        <a href="{{ route('product.show', [$product->category, $product]) }}">
                            <span class="absolute inset-0"></span>
                            {{ $product->name }}
                        </a>
                    </h3>
                    <p class="mt-1 text-sm font-medium text-gray-900">${{ $product->price }}</p>
                </div>
            @endforeach
            </div>

            <div class="mt-8 text-sm md:hidden">
                <a href="{{ route('collections') }}" class="font-medium text-gray-600 hover:text-gray-500">
                    Shop the collection
                    <span aria-hidden="true"> →</span>
                </a>
            </div>
        </div>
    </section>

    <!-- CTA section -->
    <section aria-labelledby="sale-heading">
        <div class="overflow-hidden pt-32 sm:pt-14">
            <div class="bg-gray-800">
                <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                    <div class="relative pb-16 pt-48 sm:pb-24">
                        <div>
                            <h2 id="sale-heading" class="text-4xl font-bold tracking-tight text-white md:text-5xl">
                                Final Stock.
                                <br>
                                    Up to 50% off.
                            </h2>
                            <div class="mt-6 text-base">
                                <a href="{{ route('collections') }}" class="font-semibold text-white">
                                    Shop the sale
                                    <span aria-hidden="true"> →</span>
                                </a>
                            </div>
                        </div>

                        <div class="absolute -top-32 left-1/2 -translate-x-1/2 transform sm:top-6 sm:translate-x-0">
                            <div class="ml-24 flex min-w-max space-x-6 sm:ml-3 lg:space-x-8">
                                <div class="flex space-x-6 sm:flex-col sm:space-x-0 sm:space-y-6 lg:space-y-8">
                                    <div class="flex-shrink-0">
                                        <img class="h-64 w-64 rounded-lg object-cover md:h-72 md:w-72" src="{{ asset('assets/images/final-stock-01.jpg') }}" alt="">
                                    </div>

                                    <div class="mt-6 flex-shrink-0 sm:mt-0">
                                        <img class="h-64 w-64 rounded-lg object-cover md:h-72 md:w-72" src="{{ asset('assets/images/final-stock-02.jpg') }}" alt="">
                                    </div>
                                </div>
                                <div class="flex space-x-6 sm:-mt-20 sm:flex-col sm:space-x-0 sm:space-y-6 lg:space-y-8">
                                    <div class="flex-shrink-0">
                                        <img class="h-64 w-64 rounded-lg object-cover md:h-72 md:w-72" src="{{ asset('assets/images/final-stock-04.jpg') }}" alt="">
                                    </div>

                                    <div class="mt-6 flex-shrink-0 sm:mt-0">
                                        <img class="h-64 w-64 rounded-lg object-cover md:h-72 md:w-72" src="{{ asset('assets/images/final-stock-03.jpg') }}" alt="">
                                    </div>
                                </div>
                                <div class="flex space-x-6 sm:flex-col sm:space-x-0 sm:space-y-6 lg:space-y-8">
                                    <div class="flex-shrink-0">
                                        <img class="h-64 w-64 rounded-lg object-cover md:h-72 md:w-72" src="{{ asset('assets/images/final-stock-03.jpg') }}" alt="">
                                    </div>

                                    <div class="mt-6 flex-shrink-0 sm:mt-0">
                                        <img class="h-64 w-64 rounded-lg object-cover md:h-72 md:w-72" src="{{ asset('assets/images/final-stock-02.jpg') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</x-frontend.app>
