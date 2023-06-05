<footer aria-labelledby="footer-heading" class="bg-gray-50">
    <h2 id="footer-heading" class="sr-only">Footer</h2>
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="border-t border-gray-200 py-20">
            <div class="md:flex md:justify-center">
                <x-application-logo/>
            </div>
            <div class="mx-auto mt-16 max-w-5xl xl:grid xl:grid-cols-2 xl:gap-8">
                <div class="grid grid-cols-2 gap-8 xl:col-span-2">
                    <div class="space-y-12 md:grid md:grid-cols-2 md:gap-8 md:space-y-0">
                        <div>
                            <h3 class="text-sm font-medium text-gray-900">Products</h3>
                            <ul role="list" class="mt-6 space-y-6">
                                <li class="text-sm">
                                    <a href="{{ route('collections.products', 'clothing') }}" class="text-gray-500 hover:text-gray-600">Clothing</a>
                                </li>
                                <li class="text-sm">
                                    <a href="{{ route('collections.products', 'shoes') }}" class="text-gray-500 hover:text-gray-600">Shoes</a>
                                </li>
                                <li class="text-sm">
                                <li class="text-sm">
                                    <a href="{{ route('collections.products', 'accessories') }}" class="text-gray-500 hover:text-gray-600">Accessories</a>
                                </li>
                            </ul>
                        </div>

                        <div>
                            <h3 class="text-sm font-medium text-gray-900">Customer Service</h3>
                            <ul role="list" class="mt-6 space-y-6">
                                <li class="text-sm">
                                    <a href="#" class="text-gray-500 hover:text-gray-600">Contact</a>
                                </li>
                                <li class="text-sm">
                                    <a href="#" class="text-gray-500 hover:text-gray-600">Shipping</a>
                                </li>
                                <li class="text-sm">
                                    <a href="#" class="text-gray-500 hover:text-gray-600">Returns</a>
                                </li>
                                <li class="text-sm">
                                    <a href="#" class="text-gray-500 hover:text-gray-600">Warranty</a>
                                </li>
                                <li class="text-sm">
                                    <a href="#" class="text-gray-500 hover:text-gray-600">FAQ</a>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class="space-y-12 md:grid md:grid-cols-2 md:gap-8 md:space-y-0">
                        <div>
                            <h3 class="text-sm font-medium text-gray-900">Company</h3>
                            <ul role="list" class="mt-6 space-y-6">
                                <li class="text-sm">
                                    <a href="#" class="text-gray-500 hover:text-gray-600">Who we are</a>
                                </li>
                                <li class="text-sm">
                                    <a href="#" class="text-gray-500 hover:text-gray-600">Terms &amp; Conditions</a>
                                </li>
                                <li class="text-sm">
                                    <a href="#" class="text-gray-500 hover:text-gray-600">Privacy</a>
                                </li>

                            </ul>
                        </div>
                        <div>
                            <h3 class="text-sm font-medium text-gray-900">Legal</h3>
                            <ul role="list" class="mt-6 space-y-6">
                                <li class="text-sm">
                                    <a href="#" class="text-gray-500 hover:text-gray-600">Terms of Service</a>
                                </li>
                                <li class="text-sm">
                                    <a href="#" class="text-gray-500 hover:text-gray-600">Return Policy</a>
                                </li>
                                <li class="text-sm">
                                    <a href="#" class="text-gray-500 hover:text-gray-600">Privacy Policy</a>
                                </li>
                                <li class="text-sm">
                                    <a href="#" class="text-gray-500 hover:text-gray-600">Shipping Policy</a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="border-t border-gray-100 py-10 text-center">
            <p class="text-sm text-gray-500">© 2021 Your Company, Inc. All rights reserved.</p>
        </div>
    </div>
</footer>
