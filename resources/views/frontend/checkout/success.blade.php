<x-frontend.app title="Checkout | Success">
    <div class="flex items-center justify-center h-screen">
        <div>
            <div class="flex flex-col items-center space-y-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-green-600 w-32 h-32">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.182 15.182a4.5 4.5 0 01-6.364 0M21 12a9 9 0 11-18 0 9 9 0 0118 0zM9.75 9.75c0 .414-.168.75-.375.75S9 10.164 9 9.75 9.168 9 9.375 9s.375.336.375.75zm-.375 0h.008v.015h-.008V9.75zm5.625 0c0 .414-.168.75-.375.75s-.375-.336-.375-.75.168-.75.375-.75.375.336.375.75zm-.375 0h.008v.015h-.008V9.75z" />
                </svg>

                <h1 class="text-4xl font-bold">Thank You !</h1>
                <p>{{ $customer->name}}, Your order has been completed!</p>
                <a href="{{ route('home') }}"
                    class="inline-flex items-center px-4 py-2 text-white bg-gray-600 border border-gray-600 rounded-full hover:bg-gray-700 focus:outline-none focus:ring">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3 mr-2" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M7 16l-4-4m0 0l4-4m-4 4h18" />
                    </svg>
                    <span class="text-sm font-medium">
                        Home
                    </span>
                </a>
            </div>
        </div>
    </div>
</x-frontend.app>
