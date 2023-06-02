<x-admin.app title="Categories | Create">
    <form action="{{ route('admin.categories.store') }}" method="POST">
        @csrf
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <div x-data="{ name: '{{ old('name') }}' }" class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-3">
                        <label for="name" class="block text-sm font-medium leading-6 text-gray-900">Category Name</label>
                        <div class="mt-2">
                            <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-gray-500 sm:max-w-md">
                                <input x-model="name" type="text" name="name" id="name" autocomplete="name" value="{{ old('name') }}" class="block flex-1 border-0 bg-transparent py-1.5 pl-2 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="Accessories">
                            </div>
                            @error('name')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="sm:col-span-3">
                        <label for="slug" class="block text-sm font-medium leading-6 text-gray-900">Slug</label>
                        <div class="mt-2">
                            <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-gray-500 sm:max-w-md">
                                <input x-slug="name" type="text" name="slug" id="slug" autocomplete="slug" value="{{ old('slug') }}" class="block flex-1 border-0 bg-transparent py-1.5 pl-2 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="accessories">
                            </div>
                            @error('slug')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="sm:col-span-4">
                        <div class="flex items-center gap-x-3">
                            <input type="hidden" name="is_visible" value="0" />
                            <input id="is_visible" name="is_visible" type="checkbox" value="1" {{ old('is_visible') ? 'checked' : '' }} class="h-4 w-4 rounded-md border-gray-300 text-gray-600 focus:ring-gray-600">
                            <label for="is_visible" class="block text-sm font-medium leading-6 text-gray-900">Visible to customers</label>
                        </div>
                        @error('is_visible')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="col-span-full">
                        <label for="description" class="block text-sm font-medium leading-6 text-gray-900">Description</label>
                        <div class="mt-2">
                            <x-trix :value="old('description')" />
                        </div>
                        <p class="mt-3 text-sm leading-6 text-gray-600">Write a few sentences about category.</p>
                        @error('description')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                </div>
            </div>

            <div class="mt-6 flex items-center justify-end gap-x-6">
                <a href="{{ route('admin.categories.index') }}" class="text-sm font-semibold leading-6 text-gray-900">Cancel</a>
                <button type="submit" class="rounded-md bg-gray-800 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-gray-600 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-gray-500">Add Category</button>
            </div>
    </form>
</x-admin.app>
