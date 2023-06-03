<x-admin.app title="Payments">
    <div class="sm:flex sm:items-center">
        <div class="sm:flex-auto">
            <h1 class="text-base font-semibold leading-6 text-gray-900">Payments</h1>
            <p class="mt-2 text-sm text-gray-700">A list of all payments.</p>
        </div>
        <div class="mt-4 sm:ml-16 sm:mt-0 sm:flex-none">
            <button type="button" class="block rounded-md bg-gray-800 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-gray-600 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-gray-600">Export</button>
        </div>
    </div>
    <div class="mt-8 flow-root">
        <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                @if(!$payments->count())
                <div class="bg-white px-4 py-12">
                    <div class="text-center">
                        <h3 class="mt-2 text-sm font-semibold text-gray-900">No payments</h3>
                    </div>
                </div>
                @else
                <table class="min-w-full divide-y divide-gray-300">
                    <thead>
                        <tr>
                            <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-0">#Order No.</th>
                            <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Transaction Id</th>
                            <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Total Amount</th>
                            <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Payment Method</th>
                            <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Status</th>
                            <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Payment Date</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200 bg-white">
                        @foreach( $payments as $payment )
                        <tr>
                            <td class="whitespace-nowrap py-2 pl-4 pr-3 text-sm text-gray-500 sm:pl-0">AAPS0L</td>
                            <td class="whitespace-nowrap px-2 py-2 text-sm text-gray-900">452343</td>
                            <td class="whitespace-nowrap px-2 py-2 text-sm text-gray-500">$4,397.00</td>
                            <td class="whitespace-nowrap px-2 py-2 text-sm text-gray-500">{{ $payment->method }}</td>
                            <td class="whitespace-nowrap px-2 py-2 text-sm text-gray-500">
                                <span class="inline-flex rounded-full bg-green-100 px-2 text-xs font-semibold leading-5 text-green-800">{{ $payment->status }}</span>
                            </td>
                            <td class="whitespace-nowrap px-2 py-2 text-sm font-medium text-gray-900">04/05/2023</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div>
                    {{ $payments->links() }}
                </div>
                @endif
            </div>
        </div>
    </div>

    <x-notify/>
</x-admin.app>
