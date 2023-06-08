<x-frontend.app title="Orders">
    <div class="mx-auto max-w-7xl px-4 py-16 sm:px-6 lg:px-8 lg:pb-24">
        <div class="max-w-xl">
            <h1 class="text-2xl font-bold tracking-tight text-gray-900 sm:text-3xl">Order history</h1>
            <p class="mt-2 text-sm text-gray-500">Check the status of recent orders, manage returns, and download invoices.</p>
        </div>

        <div class="mt-16">
            <h2 class="sr-only">Recent orders</h2>

            <div class="space-y-20">
                @foreach($orders as $order)
                <div>
                    <h3 class="sr-only">Order placed on <time datetime="2021-01-22">January 22, 2021</time></h3>

                    <div class="rounded-lg bg-gray-50 px-4 py-6 sm:flex sm:items-center sm:justify-between sm:space-x-6 sm:px-6 lg:space-x-8">
                        <dl class="flex-auto space-y-6 divide-y divide-gray-200 text-sm text-gray-600 sm:grid sm:grid-cols-3 sm:gap-x-6 sm:space-y-0 sm:divide-y-0 lg:w-1/2 lg:flex-none lg:gap-x-8">
                            <div class="flex justify-between sm:block">
                                <dt class="font-medium text-gray-900">Date placed</dt>
                                <dd class="sm:mt-1">
                                    <time datetime="2021-01-22">{{ $order->formatted_created_at }}</time>
                                </dd>
                            </div>
                            <div class="flex justify-between pt-6 sm:block sm:pt-0">
                                <dt class="font-medium text-gray-900">Order number</dt>
                                <dd class="sm:mt-1">{{ $order->number }}</dd>
                            </div>
                            <div class="flex justify-between pt-6 font-medium text-gray-900 sm:block sm:pt-0">
                                <dt>Total amount</dt>
                                <dd class="sm:mt-1">${{ $order->total_price }}</dd>
                            </div>
                        </dl>
                        <a href="#" class="mt-6 flex w-full items-center justify-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2 sm:mt-0 sm:w-auto">
                            View Invoice
                            <span class="sr-only">for order {{ $order->number }}</span>
                        </a>
                    </div>

                    <table class="mt-4 w-full text-gray-500 sm:mt-6">
                        <caption class="sr-only">
                            Products
                        </caption>
                        <thead class="sr-only text-left text-sm text-gray-500 sm:not-sr-only">
                            <tr>
                                <th scope="col" class="py-3 pr-8 font-normal sm:w-2/5 lg:w-1/3">Product</th>
                                <th scope="col" class="hidden w-1/5 py-3 pr-8 font-normal sm:table-cell">Price</th>
                                <th scope="col" class="hidden py-3 pr-8 font-normal sm:table-cell">Status</th>
                                <th scope="col" class="w-0 py-3 text-right font-normal">Info</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200 border-b border-gray-200 text-sm sm:border-t">
                            @foreach($order->products as $product)
                            <tr>
                                <td class="py-6 pr-8">
                                    <div class="flex items-center">
                                        <img src="{{ $product->image }}" alt="Detail of mechanical pencil tip with machined black steel shaft and chrome lead tip." class="mr-6 h-16 w-16 rounded object-cover object-center">
                                        <div>
                                            <div class="font-medium text-gray-900">{{ $product->name }}</div>
                                            <div class="mt-1 sm:hidden">${{ $product->price }}</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="hidden py-6 pr-8 sm:table-cell">${{ $product->price }}</td>
                                <td class="hidden py-6 pr-8 sm:table-cell">Delivered {{ $order->formatted_updated_at }}</td>
                                <td class="whitespace-nowrap py-6 text-right font-medium">
                                    <a href="{{ route('product.show', [$product->category, $product]) }}" class="text-gray-600">View<span class="hidden lg:inline">Product</span><span class="sr-only">, Machined Pen and Pencil Set</span></a>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>

                @endforeach
            </div>
        </div>
    </div>
</x-frontend.app>
