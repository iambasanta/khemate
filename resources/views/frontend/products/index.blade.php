<x-frontend.app title="Collections">
    <div class="px-4 py-16 text-center sm:px-6 lg:px-8">
        <h1 class="text-4xl font-bold tracking-tight text-gray-900">{{ $category->name }}</h1>
        <p class="mx-auto mt-4 max-w-xl text-base text-gray-500">{!! $category->description  !!}</p>
    </div>

    <section class="mx-auto max-w-2xl px-4 lg:max-w-7xl lg:px-8">
        <livewire:frontend.products.index :category="$category" :products="$products" />
    </section>

</x-frontend.app>
