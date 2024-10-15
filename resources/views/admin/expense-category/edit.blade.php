<x-app-layout>
    <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">

        <!-- Dashboard actions -->
        <div class="sm:flex sm:justify-between sm:items-center mb-8">

            <!-- Left: Title -->
            <div class="mb-4 sm:mb-0">
                <h1 class="text-2xl md:text-3xl text-gray-800 dark:text-gray-100 font-bold">Edit Category: {{ $category->id }}</h1>
            </div>

        </div>
        <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
            <form class="space-y-6" method="POST" action="{{ route('expense-category.update', $category->id) }}" enctype="multipart/form-data">
                @csrf
                @include('admin.expense-category.fields')
                <div class="flex items-center justify-between">
                    <button type="submit"
                            class="px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-violet-600 hover:bg-violet-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-violet-500">
                        Edit Category
                    </button>

                    <x-danger-button
                        x-data=""
                        x-on:click.prevent="$dispatch('open-modal', 'confirm-category-deletion')"
                    >{{ __('Delete Category') }}</x-danger-button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
<x-modal name="confirm-category-deletion" focusable>
    <form method="post" action="{{ route('expense-category.delete', $category->id) }}" class="p-6">
        @csrf
        @method('delete')

        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Delete Category: ' . $category->id) }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __('Are you sure you want to delete this category? The data will be permanently removed. This action cannot be undone.') }}
        </p>

        <div class="mt-6 flex justify-end">
            <x-secondary-button x-on:click="$dispatch('close')">
                {{ __('Cancel') }}
            </x-secondary-button>

            <x-danger-button class="ms-3">
                {{ __('Delete Category') }}
            </x-danger-button>
        </div>
    </form>
</x-modal>
