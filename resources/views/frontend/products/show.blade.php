<x-frontend.app title="Product Name">
    <div class="pt-10 sm:pt-16">
        <nav aria-label="Breadcrumb">
            <ol role="list" class="mx-auto flex max-w-2xl items-center space-x-2 px-4 sm:px-6 lg:max-w-7xl lg:px-8">
                <li>
                    <div class="flex items-center">
                        <a href="{{ route('home') }}" class="mr-2 text-sm font-medium text-gray-900">Home</a>
                        <svg width="16" height="20" viewBox="0 0 16 20" fill="currentColor" aria-hidden="true" class="h-5 w-4 text-gray-300">
                            <path d="M5.697 4.34L8.98 16.532h1.327L7.025 4.341H5.697z"></path>
                        </svg>
                    </div>
                </li>
                <li>
                    <div class="flex items-center">
                        <a href="{{ route('collections') }}" class="mr-2 text-sm font-medium text-gray-900">Collections</a>
                        <svg width="16" height="20" viewBox="0 0 16 20" fill="currentColor" aria-hidden="true" class="h-5 w-4 text-gray-300">
                            <path d="M5.697 4.34L8.98 16.532h1.327L7.025 4.341H5.697z"></path>
                        </svg>
                    </div>
                </li>
                <li>
                    <div class="flex items-center">
                        <a href="{{ route('collections.products', $product->category->name) }}" class="mr-2 text-sm font-medium text-gray-900">{{ $product->category->name }}</a>
                        <svg width="16" height="20" viewBox="0 0 16 20" fill="currentColor" aria-hidden="true" class="h-5 w-4 text-gray-300">
                            <path d="M5.697 4.34L8.98 16.532h1.327L7.025 4.341H5.697z"></path>
                        </svg>
                    </div>
                </li>

                <li class="text-sm">
                    <a href="#" aria-current="page" class="font-medium text-gray-500 hover:text-gray-600">{{ $product->name }}</a>
                </li>
            </ol>
        </nav>

        <!-- Image gallery -->
        <div class="mx-auto mt-6 max-w-2xl sm:px-6 lg:grid lg:max-w-7xl lg:grid-cols-3 lg:gap-x-8 lg:px-8">
            <div class="aspect-h-4 aspect-w-3 hidden overflow-hidden rounded-lg lg:block">
                <img src="{{ $product->image }}" alt="Two each of gray, white, and black shirts laying flat." class="h-full w-full object-cover object-center">
            </div>
            <div class="hidden lg:grid lg:grid-cols-1 lg:gap-y-8">
                <div class="aspect-h-2 aspect-w-3 overflow-hidden rounded-lg">
                    <img src="{{ $product->image }}" alt="Model wearing plain black basic tee." class="h-full w-full object-cover object-center">
                </div>
                <div class="aspect-h-2 aspect-w-3 overflow-hidden rounded-lg">
                    <img src="{{ $product->image }}" alt="Model wearing plain gray basic tee." class="h-full w-full object-cover object-center">
                </div>
            </div>
            <div class="aspect-h-5 aspect-w-4 lg:aspect-h-4 lg:aspect-w-3 sm:overflow-hidden sm:rounded-lg">
                <img src="{{ $product->image }}" alt="Model wearing plain white basic tee." class="h-full w-full object-cover object-center">
            </div>
        </div>

        <!-- Product info -->
        <div class="mx-auto max-w-2xl px-4 pt-10 sm:px-6 lg:grid lg:max-w-7xl lg:grid-cols-3 lg:grid-rows-[auto,auto,1fr] lg:gap-x-8 lg:px-8 lg:pt-16">
            <div class="lg:col-span-2 lg:border-r lg:border-gray-200 lg:pr-8">
                <h1 class="text-2xl font-bold tracking-tight text-gray-900 sm:text-3xl">{{ $product->name }}</h1>
            </div>

            <!-- Options -->
            <div class="mt-4 lg:row-span-3 lg:mt-0">
                <h2 class="sr-only">Product information</h2>
                <p class="text-3xl tracking-tight text-gray-900">${{ $product->price }}</p>

                <!-- Reviews -->
                <div class="mt-6">
                    <h3 class="sr-only">Reviews</h3>
                    <div class="flex items-center">
                        <div class="flex items-center">
                            <svg class="text-gray-900 h-5 w-5 flex-shrink-0" x-state:on="Active" x-state:off="Default" x-state-description="Active: &quot;text-gray-900&quot;, Default: &quot;text-gray-200&quot;" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd"></path>
                            </svg>
                            <svg class="text-gray-900 h-5 w-5 flex-shrink-0" x-state-description="undefined: &quot;text-gray-900&quot;, undefined: &quot;text-gray-200&quot;" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd"></path>
                            </svg>
                            <svg class="text-gray-900 h-5 w-5 flex-shrink-0" x-state-description="undefined: &quot;text-gray-900&quot;, undefined: &quot;text-gray-200&quot;" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd"></path>
                            </svg>
                            <svg class="text-gray-900 h-5 w-5 flex-shrink-0" x-state-description="undefined: &quot;text-gray-900&quot;, undefined: &quot;text-gray-200&quot;" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd"></path>
                            </svg>
                            <svg class="text-gray-200 h-5 w-5 flex-shrink-0" x-state-description="undefined: &quot;text-gray-900&quot;, undefined: &quot;text-gray-200&quot;" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd"></path>
                            </svg>

                        </div>
                        <p class="sr-only">4 out of 5 stars</p>
                    </div>
                </div>

                <form class="mt-10">
                    <!-- Colors -->
                    <div>
                        <h3 class="text-sm font-medium text-gray-900">Color</h3>

                        <fieldset x-data="window.Components.radioGroup({ initialCheckedIndex: 0 })" x-init="init()" class="mt-4">
                            <legend class="sr-only">Choose a color</legend>
                            <div class="flex items-center space-x-3">
                                <label x-radio-group-option="" class="relative -m-0.5 flex cursor-pointer items-center justify-center rounded-full p-0.5 focus:outline-none ring-gray-400" x-description="Active and Checked: &quot;ring ring-offset-1&quot;	Not Active and Checked: &quot;ring-2&quot;" :class="{ 'ring ring-offset-1': (active === 'White') &amp;&amp; (value === 'White'), 'undefined': !(active === 'White') || !(value === 'White'), 'ring-2': !(active === 'White') &amp;&amp; (value === 'White'), 'undefined': (active === 'White') || !(value === 'White') }">
                                    <input type="radio" x-model="value" name="color-choice" value="White" class="sr-only" aria-labelledby="color-choice-0-label">
                                    <span id="color-choice-0-label" class="sr-only">White</span>
                                    <span aria-hidden="true" class="h-8 w-8 bg-white rounded-full border border-black border-opacity-10"></span>
                                </label>
                                <label x-radio-group-option="" class="relative -m-0.5 flex cursor-pointer items-center justify-center rounded-full p-0.5 focus:outline-none ring-gray-400" x-description="Active and Checked: &quot;ring ring-offset-1&quot;	Not Active and Checked: &quot;ring-2&quot;" :class="{ 'ring ring-offset-1': (active === 'Gray') &amp;&amp; (value === 'Gray'), 'undefined': !(active === 'Gray') || !(value === 'Gray'), 'ring-2': !(active === 'Gray') &amp;&amp; (value === 'Gray'), 'undefined': (active === 'Gray') || !(value === 'Gray') }">
                                    <input type="radio" x-model="value" name="color-choice" value="Gray" class="sr-only" aria-labelledby="color-choice-1-label">
                                    <span id="color-choice-1-label" class="sr-only">Gray</span>
                                    <span aria-hidden="true" class="h-8 w-8 bg-gray-200 rounded-full border border-black border-opacity-10"></span>
                                </label>
                                <label x-radio-group-option="" class="relative -m-0.5 flex cursor-pointer items-center justify-center rounded-full p-0.5 focus:outline-none ring-gray-900" x-description="Active and Checked: &quot;ring ring-offset-1&quot;	Not Active and Checked: &quot;ring-2&quot;" :class="{ 'ring ring-offset-1': (active === 'Black') &amp;&amp; (value === 'Black'), 'undefined': !(active === 'Black') || !(value === 'Black'), 'ring-2': !(active === 'Black') &amp;&amp; (value === 'Black'), 'undefined': (active === 'Black') || !(value === 'Black') }">
                                    <input type="radio" x-model="value" name="color-choice" value="Black" class="sr-only" aria-labelledby="color-choice-2-label">
                                    <span id="color-choice-2-label" class="sr-only">Black</span>
                                    <span aria-hidden="true" class="h-8 w-8 bg-gray-900 rounded-full border border-black border-opacity-10"></span>
                                </label>

                            </div>
                        </fieldset>
                    </div>

                    <!-- Sizes -->
                    <div class="mt-10">
                        <div class="flex items-center justify-between">
                            <h3 class="text-sm font-medium text-gray-900">Size</h3>
                            <a href="#" class="text-sm font-medium text-gray-600 hover:text-gray-500">Size guide</a>
                        </div>

                        <fieldset x-data="window.Components.radioGroup({ initialCheckedIndex: 2 })" x-init="init()" class="mt-4">
                            <legend class="sr-only">Choose a size</legend>
                            <div class="grid grid-cols-4 gap-4 sm:grid-cols-8 lg:grid-cols-4">
                                <label x-radio-group-option="" class="group relative flex items-center justify-center rounded-md border py-3 px-4 text-sm font-medium uppercase hover:bg-gray-50 focus:outline-none sm:flex-1 sm:py-6 cursor-not-allowed bg-gray-50 text-gray-200" x-state:on:size.instock="In Stock" x-state:off:size.instock="Out of Stock" x-description="Active: &quot;ring-2 ring-gray-500&quot;" :class="{ 'ring-2 ring-gray-500': (active === 'XXS'), 'undefined': !(active === 'XXS') }">
                                    <input type="radio" x-model="value" name="size-choice" value="XXS" disabled="" class="sr-only" aria-labelledby="size-choice-0-label">
                                    <span id="size-choice-0-label">XXS</span>
                                    <span aria-hidden="true" class="pointer-events-none absolute -inset-px rounded-md border-2 border-gray-200">
                                        <svg class="absolute inset-0 h-full w-full stroke-2 text-gray-200" viewBox="0 0 100 100" preserveAspectRatio="none" stroke="currentColor">
                                            <line x1="0" y1="100" x2="100" y2="0" vector-effect="non-scaling-stroke"></line>
                                        </svg>
                                    </span>
                                </label>
                                <label x-radio-group-option="" class="group relative flex items-center justify-center rounded-md border py-3 px-4 text-sm font-medium uppercase hover:bg-gray-50 focus:outline-none sm:flex-1 sm:py-6 cursor-pointer bg-white text-gray-900 shadow-sm" x-state:on:size.instock="In Stock" x-state:off:size.instock="Out of Stock" x-description="Active: &quot;ring-2 ring-gray-500&quot;" :class="{ 'ring-2 ring-gray-500': (active === 'XS'), 'undefined': !(active === 'XS') }">
                                    <input type="radio" x-model="value" name="size-choice" value="XS" class="sr-only" aria-labelledby="size-choice-1-label">
                                    <span id="size-choice-1-label">XS</span>
                                    <span class="pointer-events-none absolute -inset-px rounded-md" aria-hidden="true" x-description="Active: &quot;border&quot;, Not Active: &quot;border-2&quot;	Checked: &quot;border-gray-500&quot;, Not Checked: &quot;border-transparent&quot;" :class="{ 'border': (active === 'XS'), 'border-2': !(active === 'XS'), 'border-gray-500': (value === 'XS'), 'border-transparent': !(value === 'XS') }"></span>
                                </label>
                                <label x-radio-group-option="" class="group relative flex items-center justify-center rounded-md border py-3 px-4 text-sm font-medium uppercase hover:bg-gray-50 focus:outline-none sm:flex-1 sm:py-6 cursor-pointer bg-white text-gray-900 shadow-sm" x-state:on:size.instock="In Stock" x-state:off:size.instock="Out of Stock" x-description="Active: &quot;ring-2 ring-gray-500&quot;" :class="{ 'ring-2 ring-gray-500': (active === 'S'), 'undefined': !(active === 'S') }">
                                    <input type="radio" x-model="value" name="size-choice" value="S" class="sr-only" aria-labelledby="size-choice-2-label">
                                    <span id="size-choice-2-label">S</span>
                                    <span class="pointer-events-none absolute -inset-px rounded-md" aria-hidden="true" x-description="Active: &quot;border&quot;, Not Active: &quot;border-2&quot;	Checked: &quot;border-gray-500&quot;, Not Checked: &quot;border-transparent&quot;" :class="{ 'border': (active === 'S'), 'border-2': !(active === 'S'), 'border-gray-500': (value === 'S'), 'border-transparent': !(value === 'S') }"></span>
                                </label>
                                <label x-radio-group-option="" class="group relative flex items-center justify-center rounded-md border py-3 px-4 text-sm font-medium uppercase hover:bg-gray-50 focus:outline-none sm:flex-1 sm:py-6 cursor-pointer bg-white text-gray-900 shadow-sm" x-state:on:size.instock="In Stock" x-state:off:size.instock="Out of Stock" x-description="Active: &quot;ring-2 ring-gray-500&quot;" :class="{ 'ring-2 ring-gray-500': (active === 'M'), 'undefined': !(active === 'M') }">
                                    <input type="radio" x-model="value" name="size-choice" value="M" class="sr-only" aria-labelledby="size-choice-3-label">
                                    <span id="size-choice-3-label">M</span>
                                    <span class="pointer-events-none absolute -inset-px rounded-md" aria-hidden="true" x-description="Active: &quot;border&quot;, Not Active: &quot;border-2&quot;	Checked: &quot;border-gray-500&quot;, Not Checked: &quot;border-transparent&quot;" :class="{ 'border': (active === 'M'), 'border-2': !(active === 'M'), 'border-gray-500': (value === 'M'), 'border-transparent': !(value === 'M') }"></span>
                                </label>
                                <label x-radio-group-option="" class="group relative flex items-center justify-center rounded-md border py-3 px-4 text-sm font-medium uppercase hover:bg-gray-50 focus:outline-none sm:flex-1 sm:py-6 cursor-pointer bg-white text-gray-900 shadow-sm" x-state:on:size.instock="In Stock" x-state:off:size.instock="Out of Stock" x-description="Active: &quot;ring-2 ring-gray-500&quot;" :class="{ 'ring-2 ring-gray-500': (active === 'L'), 'undefined': !(active === 'L') }">
                                    <input type="radio" x-model="value" name="size-choice" value="L" class="sr-only" aria-labelledby="size-choice-4-label">
                                    <span id="size-choice-4-label">L</span>
                                    <span class="pointer-events-none absolute -inset-px rounded-md" aria-hidden="true" x-description="Active: &quot;border&quot;, Not Active: &quot;border-2&quot;	Checked: &quot;border-gray-500&quot;, Not Checked: &quot;border-transparent&quot;" :class="{ 'border': (active === 'L'), 'border-2': !(active === 'L'), 'border-gray-500': (value === 'L'), 'border-transparent': !(value === 'L') }"></span>
                                </label>
                                <label x-radio-group-option="" class="group relative flex items-center justify-center rounded-md border py-3 px-4 text-sm font-medium uppercase hover:bg-gray-50 focus:outline-none sm:flex-1 sm:py-6 cursor-pointer bg-white text-gray-900 shadow-sm" x-state:on:size.instock="In Stock" x-state:off:size.instock="Out of Stock" x-description="Active: &quot;ring-2 ring-gray-500&quot;" :class="{ 'ring-2 ring-gray-500': (active === 'XL'), 'undefined': !(active === 'XL') }">
                                    <input type="radio" x-model="value" name="size-choice" value="XL" class="sr-only" aria-labelledby="size-choice-5-label">
                                    <span id="size-choice-5-label">XL</span>
                                    <span class="pointer-events-none absolute -inset-px rounded-md" aria-hidden="true" x-description="Active: &quot;border&quot;, Not Active: &quot;border-2&quot;	Checked: &quot;border-gray-500&quot;, Not Checked: &quot;border-transparent&quot;" :class="{ 'border': (active === 'XL'), 'border-2': !(active === 'XL'), 'border-gray-500': (value === 'XL'), 'border-transparent': !(value === 'XL') }"></span>
                                </label>
                                <label x-radio-group-option="" class="group relative flex items-center justify-center rounded-md border py-3 px-4 text-sm font-medium uppercase hover:bg-gray-50 focus:outline-none sm:flex-1 sm:py-6 cursor-pointer bg-white text-gray-900 shadow-sm" x-state:on:size.instock="In Stock" x-state:off:size.instock="Out of Stock" x-description="Active: &quot;ring-2 ring-gray-500&quot;" :class="{ 'ring-2 ring-gray-500': (active === '2XL'), 'undefined': !(active === '2XL') }">
                                    <input type="radio" x-model="value" name="size-choice" value="2XL" class="sr-only" aria-labelledby="size-choice-6-label">
                                    <span id="size-choice-6-label">2XL</span>
                                    <span class="pointer-events-none absolute -inset-px rounded-md" aria-hidden="true" x-description="Active: &quot;border&quot;, Not Active: &quot;border-2&quot;	Checked: &quot;border-gray-500&quot;, Not Checked: &quot;border-transparent&quot;" :class="{ 'border': (active === '2XL'), 'border-2': !(active === '2XL'), 'border-gray-500': (value === '2XL'), 'border-transparent': !(value === '2XL') }"></span>
                                </label>
                                <label x-radio-group-option="" class="group relative flex items-center justify-center rounded-md border py-3 px-4 text-sm font-medium uppercase hover:bg-gray-50 focus:outline-none sm:flex-1 sm:py-6 cursor-pointer bg-white text-gray-900 shadow-sm" x-state:on:size.instock="In Stock" x-state:off:size.instock="Out of Stock" x-description="Active: &quot;ring-2 ring-gray-500&quot;" :class="{ 'ring-2 ring-gray-500': (active === '3XL'), 'undefined': !(active === '3XL') }">
                                    <input type="radio" x-model="value" name="size-choice" value="3XL" class="sr-only" aria-labelledby="size-choice-7-label">
                                    <span id="size-choice-7-label">3XL</span>
                                    <span class="pointer-events-none absolute -inset-px rounded-md" aria-hidden="true" x-description="Active: &quot;border&quot;, Not Active: &quot;border-2&quot;	Checked: &quot;border-gray-500&quot;, Not Checked: &quot;border-transparent&quot;" :class="{ 'border': (active === '3XL'), 'border-2': !(active === '3XL'), 'border-gray-500': (value === '3XL'), 'border-transparent': !(value === '3XL') }"></span>
                                </label>

                            </div>
                        </fieldset>
                    </div>

                    <button type="submit" class="mt-10 flex w-full items-center justify-center rounded-md border border-transparent bg-gray-600 px-8 py-3 text-base font-medium text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2">Add to bag</button>
                </form>
            </div>

            <div class="py-10 lg:col-span-2 lg:col-start-1 lg:border-r lg:border-gray-200 lg:pb-16 lg:pr-8 lg:pt-6">
                <!-- Description and details -->
                <div>
                    <h3 class="sr-only">Description</h3>

                    <div class="space-y-6">
                        <p class="text-base text-gray-900">{!! $product->description !!}</p>
                    </div>
                </div>

                <div class="mt-10">
                    <h3 class="text-sm font-medium text-gray-900">Highlights</h3>

                    <div class="mt-4">
                        <ul role="list" class="list-disc space-y-2 pl-4 text-sm">
                            <li class="text-gray-400"><span class="text-gray-600">Hand cut and sewn locally</span></li>
                            <li class="text-gray-400"><span class="text-gray-600">Dyed with our proprietary colors</span></li>
                            <li class="text-gray-400"><span class="text-gray-600">Pre-washed &amp; pre-shrunk</span></li>
                            <li class="text-gray-400"><span class="text-gray-600">Ultra-soft 100% cotton</span></li>

                        </ul>
                    </div>
                </div>

                <section aria-labelledby="shipping-heading" class="mt-10">
                    <h2 id="shipping-heading" class="text-sm font-medium text-gray-900">Details</h2>

                    <div class="mt-4 space-y-6">
                        <p class="text-sm text-gray-600">The 6-Pack includes two black, two white, and two heather gray Basic Tees. Sign up for our subscription service and be the first to get new, exciting colors, like our upcoming "Charcoal Gray" limited release.</p>
                    </div>
                </section>
            </div>

        </div>
        <section aria-labelledby="related-products-heading" class="bg-white">
            <div class="mx-auto max-w-2xl px-4 py-24 sm:px-6 lg:max-w-7xl lg:px-8">
                <h2 id="related-products-heading" class="text-xl font-bold tracking-tight text-gray-900">Customers also purchased</h2>

                <div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
                    @foreach($alsoPurchased as $product)
                    <div class="group relative">
                        <div class="min-h-80 aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
                            <img src="{{ $product->image }}" alt="Front of men's Artwork Tee in peach with white and brown dots forming an isometric cube." class="h-full w-full object-cover object-center lg:h-full lg:w-full">
                        </div>
                        <div class="mt-4 flex justify-between">
                            <div>
                                <h3 class="text-sm text-gray-700">
                                    <a href="#">
                                        <span aria-hidden="true" class="absolute inset-0"></span>
                                        {{ $product->name }}
                                    </a>
                                </h3>
                                <!-- <p class="mt-1 text-sm text-gray-500">Black</p> -->
                            </div>
                            <p class="text-sm font-medium text-gray-900">${{ $product->price }}</p>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </section>
    </div>
</x-frontend.app>
