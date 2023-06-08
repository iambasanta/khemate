<x-frontend.app title="Cart">
    <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:px-0">
        <h1 class="text-center text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Shopping Cart</h1>

        <div class="mt-12">
            <section aria-labelledby="cart-heading">
                <h2 id="cart-heading" class="sr-only">Items in your shopping cart</h2>

                <ul role="list" class="divide-y divide-gray-200 border-b border-t border-gray-200">
                    @foreach( Cart::content() as $item )
                    <li class="flex py-6">
                        <div class="flex-shrink-0">
                            <img src="{{ $item->model->image }}" alt="Front side of sienna cotton t-shirt." class="h-24 w-24 rounded-md object-cover object-center sm:h-32 sm:w-32">
                        </div>

                        <div class="ml-4 flex flex-1 flex-col sm:ml-6">
                            <div>
                                <div class="flex justify-between">
                                    <h4 class="text-sm">
                                        <a href="{{ route('product.show', [$item->model->category, $item->model]) }}" class="font-medium text-gray-700 hover:text-gray-800">{{ $item->model->name }}</a>
                                    </h4>
                                    <p class="ml-4 text-sm font-medium text-gray-900">${{ $item->model->price }}</p>
                                </div>
                                <!-- <p class="mt-1 text-sm text-gray-500">Sienna</p> -->
                                <!-- <p class="mt-1 text-sm text-gray-500">Large</p> -->
                            </div>

                            <div class="mt-4 flex flex-1 items-end justify-between">
                                <p class="flex items-center space-x-2 text-sm text-gray-700">
                                    <svg class="h-5 w-5 flex-shrink-0 text-green-500" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd"></path>
                                    </svg>
                                    <span>In stock</span>
                                </p>
                                <div class="ml-4">
                                    <form action="{{ route('cart.destroy', $item->rowId) }}" method="POST" >
                                        @csrf
                                        @method('DELETE')

                                        <button type="submit" class="text-sm font-medium text-gray-600 hover:text-gray-500">
                                            <span>Remove</span>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </li>
                    @endforeach

                </ul>
            </section>

            <!-- Order summary -->
            <section aria-labelledby="summary-heading" class="mt-10">
                <h2 id="summary-heading" class="sr-only">Order summary</h2>

                <div>
                    <dl class="space-y-4">
                        <div class="flex items-center justify-between">
                            <dt class="text-base font-medium text-gray-900">Subtotal</dt>
                            <dd class="ml-4 text-base font-medium text-gray-900">${{ Cart::subtotal() }}</dd>
                        </div>
                    </dl>
                    <p class="mt-1 text-sm text-gray-500">Shipping and taxes will be calculated at checkout.</p>
                </div>

                <div class="mt-10">
                    <form action="{{ route('checkout.store') }}" method="POST">
                        @csrf
                        <button class="w-full rounded-md border border-transparent bg-gray-600 px-4 py-3 text-base font-medium text-white shadow-sm hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2 focus:ring-offset-gray-50">
                            Checkout
                        </button>
                    </form>
                </div>

                <div class="mt-6 text-center text-sm">
                    <p>
                        or
                        <a href="{{ route('collections') }}" class="font-medium text-gray-600 hover:text-gray-500">
                            Continue Shopping
                            <span aria-hidden="true"> →</span>
                        </a>
                    </p>
                </div>
            </section>
        </div>
    </div>

</x-frontend.app>
