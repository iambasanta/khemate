<x-frontend.app title="Collections">
    <div class="px-4 py-16 text-center sm:px-6 lg:px-8">
        <h1 class="text-4xl font-bold tracking-tight text-gray-900">{{ $category->name }}</h1>
        <p class="mx-auto mt-4 max-w-xl text-base text-gray-500">{!! $category->description  !!}</p>
    </div>

    <section class="mx-auto max-w-2xl px-4 lg:max-w-7xl lg:px-8">

         <div class="flex items-baseline justify-between border-b border-gray-200 pb-6 ">
          <h1 class="text-4xl font-bold tracking-tight text-gray-900">Products</h1>

            <div class="flex items-center">
                <div x-data="Components.menu({ open: false })" x-init="init()" @keydown.escape.stop="open = false; focusButton()" @click.away="onClickAway($event)" class="relative inline-block text-left">
                    <div>
                        <button type="button" class="group inline-flex justify-center text-sm font-medium text-gray-700 hover:text-gray-900" id="menu-button" x-ref="button" @click="onButtonClick()" @keyup.space.prevent="onButtonEnter()" @keydown.enter.prevent="onButtonEnter()" aria-expanded="false" aria-haspopup="true" x-bind:aria-expanded="open.toString()" @keydown.arrow-up.prevent="onArrowUp()" @keydown.arrow-down.prevent="onArrowDown()">
                            Sort
                            <svg class="-mr-1 ml-1 h-5 w-5 flex-shrink-0 text-gray-400 group-hover:text-gray-500" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </div>


                    <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute right-0 z-10 mt-2 w-40 origin-top-right rounded-md bg-white shadow-2xl ring-1 ring-black ring-opacity-5 focus:outline-none" x-ref="menu-items" x-description="Dropdown menu, show/hide based on menu state." x-bind:aria-activedescendant="activeDescendant" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1" @keydown.arrow-up.prevent="onArrowUp()" @keydown.arrow-down.prevent="onArrowDown()" @keydown.tab="open = false" @keydown.enter.prevent="open = false; focusButton()" @keyup.space.prevent="open = false; focusButton()">
                        <div class="py-1" role="none">
                            <a href="#" class="text-gray-500 block px-4 py-2 text-sm" x-state-description="undefined: &quot;font-medium text-gray-900&quot;, undefined: &quot;text-gray-500&quot;" :class="{ 'bg-gray-100': activeIndex === 2 }" role="menuitem" tabindex="-1" id="menu-item-2" @mouseenter="onMouseEnter($event)" @mousemove="onMouseMove($event, 2)" @mouseleave="onMouseLeave($event)" @click="open = false; focusButton()">Newest</a>
                            <a href="#" class="text-gray-500 block px-4 py-2 text-sm" x-state-description="undefined: &quot;font-medium text-gray-900&quot;, undefined: &quot;text-gray-500&quot;" :class="{ 'bg-gray-100': activeIndex === 3 }" role="menuitem" tabindex="-1" id="menu-item-3" @mouseenter="onMouseEnter($event)" @mousemove="onMouseMove($event, 3)" @mouseleave="onMouseLeave($event)" @click="open = false; focusButton()">Price: Low to High</a>
                            <a href="#" class="text-gray-500 block px-4 py-2 text-sm" x-state-description="undefined: &quot;font-medium text-gray-900&quot;, undefined: &quot;text-gray-500&quot;" :class="{ 'bg-gray-100': activeIndex === 4 }" role="menuitem" tabindex="-1" id="menu-item-4" @mouseenter="onMouseEnter($event)" @mousemove="onMouseMove($event, 4)" @mouseleave="onMouseLeave($event)" @click="open = false; focusButton()">Price: High to Low</a>

                        </div>
                    </div>

                </div>

                <button type="button" class="-m-2 ml-4 p-2 text-gray-400 hover:text-gray-500 sm:ml-6 lg:hidden" @click="open = true">
                    <span class="sr-only">Filters</span>
                    <svg class="h-5 w-5" aria-hidden="true" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M2.628 1.601C5.028 1.206 7.49 1 10 1s4.973.206 7.372.601a.75.75 0 01.628.74v2.288a2.25 2.25 0 01-.659 1.59l-4.682 4.683a2.25 2.25 0 00-.659 1.59v3.037c0 .684-.31 1.33-.844 1.757l-1.937 1.55A.75.75 0 018 18.25v-5.757a2.25 2.25 0 00-.659-1.591L2.659 6.22A2.25 2.25 0 012 4.629V2.34a.75.75 0 01.628-.74z" clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
        </div>

        <div class="pb-24 pt-12 lg:grid lg:grid-cols-3 lg:gap-x-8 xl:grid-cols-4">
            <aside>
                <h2 class="sr-only">Filters</h2>

                <button type="button" x-description="Mobile filter dialog toggle, controls the 'mobileFilterDialogOpen' state." class="inline-flex items-center lg:hidden" @click="open = true">
                    <span class="text-sm font-medium text-gray-700">Filters</span>
                    <svg class="ml-1 h-5 w-5 flex-shrink-0 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path d="M10.75 4.75a.75.75 0 00-1.5 0v4.5h-4.5a.75.75 0 000 1.5h4.5v4.5a.75.75 0 001.5 0v-4.5h4.5a.75.75 0 000-1.5h-4.5v-4.5z"></path>
                    </svg>
                </button>

                <div class="hidden lg:block">
                    <form class="space-y-10 divide-y divide-gray-200">
                        <div>
                            <fieldset>
                                <legend class="block text-sm font-medium text-gray-900">Color</legend>
                                <div class="space-y-3 pt-6">
                                    <div class="flex items-center">
                                        <input id="color-0" name="color[]" value="white" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-gray-600 focus:ring-gray-500">
                                        <label for="color-0" class="ml-3 text-sm text-gray-600">White</label>
                                    </div>
                                    <div class="flex items-center">
                                        <input id="color-1" name="color[]" value="beige" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-gray-600 focus:ring-gray-500">
                                        <label for="color-1" class="ml-3 text-sm text-gray-600">Beige</label>
                                    </div>
                                    <div class="flex items-center">
                                        <input id="color-2" name="color[]" value="blue" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-gray-600 focus:ring-gray-500">
                                        <label for="color-2" class="ml-3 text-sm text-gray-600">Blue</label>
                                    </div>
                                    <div class="flex items-center">
                                        <input id="color-3" name="color[]" value="brown" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-gray-600 focus:ring-gray-500">
                                        <label for="color-3" class="ml-3 text-sm text-gray-600">Brown</label>
                                    </div>
                                    <div class="flex items-center">
                                        <input id="color-4" name="color[]" value="green" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-gray-600 focus:ring-gray-500">
                                        <label for="color-4" class="ml-3 text-sm text-gray-600">Green</label>
                                    </div>
                                    <div class="flex items-center">
                                        <input id="color-5" name="color[]" value="purple" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-gray-600 focus:ring-gray-500">
                                        <label for="color-5" class="ml-3 text-sm text-gray-600">Purple</label>
                                    </div>

                                </div>
                            </fieldset>
                        </div>
                        <div class="pt-10">
                            <fieldset>
                                <legend class="block text-sm font-medium text-gray-900">Category</legend>
                                <div class="space-y-3 pt-6">
                                    <div class="flex items-center">
                                        <input id="category-0" name="category[]" value="new-arrivals" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-gray-600 focus:ring-gray-500">
                                        <label for="category-0" class="ml-3 text-sm text-gray-600">All New Arrivals</label>
                                    </div>
                                    <div class="flex items-center">
                                        <input id="category-1" name="category[]" value="tees" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-gray-600 focus:ring-gray-500">
                                        <label for="category-1" class="ml-3 text-sm text-gray-600">Tees</label>
                                    </div>
                                    <div class="flex items-center">
                                        <input id="category-2" name="category[]" value="crewnecks" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-gray-600 focus:ring-gray-500">
                                        <label for="category-2" class="ml-3 text-sm text-gray-600">Crewnecks</label>
                                    </div>
                                    <div class="flex items-center">
                                        <input id="category-3" name="category[]" value="sweatshirts" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-gray-600 focus:ring-gray-500">
                                        <label for="category-3" class="ml-3 text-sm text-gray-600">Sweatshirts</label>
                                    </div>
                                    <div class="flex items-center">
                                        <input id="category-4" name="category[]" value="pants-shorts" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-gray-600 focus:ring-gray-500">
                                        <label for="category-4" class="ml-3 text-sm text-gray-600">Pants &amp; Shorts</label>
                                    </div>

                                </div>
                            </fieldset>
                        </div>
                        <div class="pt-10">
                            <fieldset>
                                <legend class="block text-sm font-medium text-gray-900">Sizes</legend>
                                <div class="space-y-3 pt-6">
                                    <div class="flex items-center">
                                        <input id="sizes-0" name="sizes[]" value="xs" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-gray-600 focus:ring-gray-500">
                                        <label for="sizes-0" class="ml-3 text-sm text-gray-600">XS</label>
                                    </div>
                                    <div class="flex items-center">
                                        <input id="sizes-1" name="sizes[]" value="s" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-gray-600 focus:ring-gray-500">
                                        <label for="sizes-1" class="ml-3 text-sm text-gray-600">S</label>
                                    </div>
                                    <div class="flex items-center">
                                        <input id="sizes-2" name="sizes[]" value="m" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-gray-600 focus:ring-gray-500">
                                        <label for="sizes-2" class="ml-3 text-sm text-gray-600">M</label>
                                    </div>
                                    <div class="flex items-center">
                                        <input id="sizes-3" name="sizes[]" value="l" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-gray-600 focus:ring-gray-500">
                                        <label for="sizes-3" class="ml-3 text-sm text-gray-600">L</label>
                                    </div>
                                    <div class="flex items-center">
                                        <input id="sizes-4" name="sizes[]" value="xl" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-gray-600 focus:ring-gray-500">
                                        <label for="sizes-4" class="ml-3 text-sm text-gray-600">XL</label>
                                    </div>
                                    <div class="flex items-center">
                                        <input id="sizes-5" name="sizes[]" value="2xl" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-gray-600 focus:ring-gray-500">
                                        <label for="sizes-5" class="ml-3 text-sm text-gray-600">2XL</label>
                                    </div>

                                </div>
                            </fieldset>
                        </div>

                    </form>
                </div>
            </aside>

            <section aria-labelledby="product-heading" class="mt-6 lg:col-span-2 lg:mt-0 xl:col-span-3">
                <h2 id="product-heading" class="sr-only">Products</h2>

                <div class="grid grid-cols-1 gap-y-4 sm:grid-cols-2 sm:gap-x-6 sm:gap-y-10 lg:gap-x-8 xl:grid-cols-3">
                    @foreach( $products as $product )
                    <div class="group relative flex flex-col overflow-hidden rounded-lg border border-gray-200 bg-white">
                        <div class="aspect-h-4 aspect-w-3 bg-gray-200 sm:aspect-none group-hover:opacity-75 sm:h-96">
                            <img src="{{ $product->image }}" alt="Eight shirts arranged on table in black, olive, grey, blue, white, red, mustard, and green." class="h-full w-full object-cover object-center sm:h-full sm:w-full">
                        </div>
                        <div class="flex flex-1 flex-col space-y-2 p-4">
                            <h3 class="text-sm font-medium text-gray-900">
                                <a href="{{ route('product.show', [$product->category, $product]) }}">
                                    <span aria-hidden="true" class="absolute inset-0"></span>
                                    {{ $product->name }}
                                </a>
                            </h3>
                            <p class="text-sm text-gray-500">{!! $product->description !!}</p>
                            <div class="flex flex-1 flex-col justify-end">
                                <!-- <p class="text-sm italic text-gray-500">8 colors</p> -->
                                <p class="text-base font-medium text-gray-900">${{ $product->price }}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </section>
        </div>
    </section>

</x-frontend.app>
