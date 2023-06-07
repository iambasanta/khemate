<x-frontend.layout>

    <x-frontend.nav/>

    <div x-data="{ open: false }" @keydown.window.escape="open = false" class="bg-white">
        <main>
            {{ $slot }}

            <section aria-labelledby="perks-heading" class="border-t border-gray-200 bg-gray-50">
                <h2 id="perks-heading" class="sr-only">Our perks</h2>

                <div class="mx-auto max-w-7xl px-4 py-24 sm:px-6 sm:py-32 lg:px-8">
                    <div class="grid grid-cols-1 gap-y-12 sm:grid-cols-2 sm:gap-x-6 lg:grid-cols-4 lg:gap-x-8 lg:gap-y-0">
                        <div class="text-center md:flex md:items-start md:text-left lg:block lg:text-center">
                            <div class="md:flex-shrink-0">
                                <div class="flow-root">
                                    <img class="-my-1 mx-auto h-24 w-auto" src="{{ asset('assets/icons/returns.svg') }}" alt="">
                                </div>
                            </div>
                            <div class="mt-6 md:ml-4 md:mt-0 lg:ml-0 lg:mt-6">
                                <h3 class="text-base font-medium text-gray-900">Free returns</h3>
                                <p class="mt-3 text-sm text-gray-500">Not what you expected? Place it back in the parcel and attach the pre-paid postage stamp.</p>
                            </div>
                        </div>
                        <div class="text-center md:flex md:items-start md:text-left lg:block lg:text-center">
                            <div class="md:flex-shrink-0">
                                <div class="flow-root">
                                    <img class="-my-1 mx-auto h-24 w-auto" src="{{ asset('assets/icons/calendar.svg') }}" alt="">
                                </div>
                            </div>
                            <div class="mt-6 md:ml-4 md:mt-0 lg:ml-0 lg:mt-6">
                                <h3 class="text-base font-medium text-gray-900">Same day delivery</h3>
                                <p class="mt-3 text-sm text-gray-500">We offer a delivery service that has never been done before. Checkout today and receive your products within hours.</p>
                            </div>
                        </div>
                        <div class="text-center md:flex md:items-start md:text-left lg:block lg:text-center">
                            <div class="md:flex-shrink-0">
                                <div class="flow-root">
                                    <img class="-my-1 mx-auto h-24 w-auto" src="{{ asset('assets/icons/gift.svg') }}" alt="">
                                </div>
                            </div>
                            <div class="mt-6 md:ml-4 md:mt-0 lg:ml-0 lg:mt-6">
                                <h3 class="text-base font-medium text-gray-900">All year discount</h3>
                                <p class="mt-3 text-sm text-gray-500">Looking for a deal? You can use the code "ALLYEAR" at checkout and get money off all year round.</p>
                            </div>
                        </div>
                        <div class="text-center md:flex md:items-start md:text-left lg:block lg:text-center">
                            <div class="md:flex-shrink-0">
                                <div class="flow-root">
                                    <img class="-my-1 mx-auto h-24 w-auto" src="{{ asset('assets/icons/planet.svg') }}" alt="">
                                </div>
                            </div>
                            <div class="mt-6 md:ml-4 md:mt-0 lg:ml-0 lg:mt-6">
                                <h3 class="text-base font-medium text-gray-900">For the planet</h3>
                                <p class="mt-3 text-sm text-gray-500">We’ve pledged 1% of sales to the preservation and restoration of the natural environment.</p>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
        </main>
    </div>

    <x-notify />

    <x-frontend.footer/>
</x-frontend.layout>

