<div class="relative z-10" role="dialog" aria-modal="true">
    <!-- Background backdrop, show/hide based on modal state. -->
    <div class="fixed inset-0 bg-gray-500 bg-opacity-25 transition-opacity" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="ease-out duration-200" x-transition:leave-start="opacity-100" x-transition:leave-to="opacity-0" ></div>

    <div class="fixed inset-0 z-10 overflow-y-auto p-4 sm:p-6 md:p-20">
        <!-- Command palette, show/hide based on modal state. -->
        <div class="mx-auto max-w-2xl transform divide-y divide-gray-500 divide-opacity-10 overflow-hidden rounded-xl bg-white bg-opacity-80 shadow-2xl ring-1 ring-black ring-opacity-5 backdrop-blur backdrop-filter transition-all" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100" x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95"
        >
            <div class="relative">
                <svg class="pointer-events-none absolute left-4 top-3.5 h-5 w-5 text-gray-900 text-opacity-40" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M9 3.5a5.5 5.5 0 100 11 5.5 5.5 0 000-11zM2 9a7 7 0 1112.452 4.391l3.328 3.329a.75.75 0 11-1.06 1.06l-3.329-3.328A7 7 0 012 9z" clip-rule="evenodd" />
                </svg>
                <input type="text" class="h-12 w-full border-0 bg-transparent pl-11 pr-4 text-gray-900 focus:ring-0 sm:text-sm" placeholder="Search...">
            </div>

            <!-- Default state, show/hide based on command palette state. -->
            <ul class="max-h-80 scroll-py-2 divide-y divide-gray-500 divide-opacity-10 overflow-y-auto">
                <li class="p-2">
                    <h2 class="mb-2 mt-4 px-3 text-xs font-semibold text-gray-900">Recent searches</h2>
                    <ul class="text-sm text-gray-700">
                        <!-- Active: "bg-gray-900 bg-opacity-5 text-gray-900" -->
                        <li class="group flex cursor-default select-none items-center rounded-md px-3 py-2">
                            <span class="ml-3 flex-auto truncate">Workflow Inc. / Website Redesign</span>
                            <!-- Not Active: "hidden" -->
                            <span class="ml-3 hidden flex-none text-gray-500">Jump to...</span>
                        </li>
                    </ul>
                </li>
                <li class="p-2">
                    <h2 class="sr-only">Quick actions</h2>
                    <ul class="text-sm text-gray-700">
                        <!-- Active: "bg-gray-900 bg-opacity-5 text-gray-900" -->
                        <li class="group flex cursor-default select-none items-center rounded-md px-3 py-2">
                            <!-- Not Active: "text-opacity-40" -->
                            <span class="ml-3 flex-auto truncate">Product name</span>
                        </li>
                        <li class="group flex cursor-default select-none items-center rounded-md px-3 py-2">
                            <span class="ml-3 flex-auto truncate">Product name</span>
                        </li>
                    </ul>
                </li>
            </ul>

            <!-- Empty state, show/hide based on command palette state. -->
            <div class="px-6 py-14 text-center sm:px-14">
                <p class="mt-4 text-sm text-gray-900">We couldn't find any product with that term. Please try again.</p>
            </div>
        </div>
    </div>
</div>
