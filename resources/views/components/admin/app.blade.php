<x-admin.layout>
    <div x-data="{ open: false }" @keydown.window.escape="open = false">
        <x-admin.sidebar/>
        <main class="py-12 lg:pl-72">
            <div class="mx-auto max-w-7xl">
                <div class="px-4 sm:px-6 lg:px-8">
                    {{ $slot }}
                </div>
            </div>
        </main>
    </div>
</x-admin.layout>
