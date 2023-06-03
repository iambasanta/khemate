<x-admin.app title="Orders">
    <div class="sm:flex sm:items-center">
        <div class="sm:flex-auto">
            <h1 class="text-base font-semibold leading-6 text-gray-900">Orders</h1>
            <p class="mt-2 text-sm text-gray-700">A list of all orders.</p>
        </div>
        <div class="mt-4 sm:ml-16 sm:mt-0 sm:flex-none">
            <button type="button" class="block rounded-md bg-gray-800 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-gray-600 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-gray-600">Export</button>
        </div>
    </div>
    <div class="mt-8 flow-root">
        <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                @if(!$orders->count())
                <div class="bg-white px-4 py-12">
                    <div class="text-center">
                        <h3 class="mt-2 text-sm font-semibold text-gray-900">No orders</h3>
                    </div>
                </div>
                @else
                <table class="min-w-full divide-y divide-gray-300">
                    <thead>
                        <tr>
                            <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-0">#Order No.</th>
                            <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Order Date</th>
                            <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Customer Name</th>
                            <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Email</th>
                            <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Total Price</th>
                            <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Status</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200 bg-white">
                        @foreach( $orders as $order )
                        <tr>
                            <td class="whitespace-nowrap py-2 pl-4 pr-3 text-sm text-gray-500 sm:pl-0">{{ $order->number }}</td>
                            <td class="whitespace-nowrap px-2 py-2 text-sm font-medium text-gray-900">{{ $order->formatted_created_at }}</td>
                            <td class="whitespace-nowrap px-2 py-2 text-sm text-gray-900">{{ $order->user->name }}</td>
                            <td class="whitespace-nowrap px-2 py-2 text-sm text-gray-500">{{ $order->user->email }}</td>
                            <td class="whitespace-nowrap px-2 py-2 text-sm text-gray-500">${{ $order->total_price }}</td>
                            <td class="whitespace-nowrap px-2 py-2 text-sm text-gray-500">
                                <span class="inline-flex rounded-full bg-gray-100 px-2 text-xs font-semibold leading-5 text-gray-800">{{ $order->status }}</span>
                            </td>

                            <td class="flex space-x-6 px-3 py-4">
                                <a href="{{ route('admin.orders.show', $order) }}" class="inline-flex text-gray-600 hover:text-gray-800">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mr-1">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div>
                    {{ $orders->links() }}
                </div>
                @endif
            </div>
        </div>
    </div>

    <x-notify/>
</x-admin.app>
