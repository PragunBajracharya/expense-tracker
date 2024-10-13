<x-app-layout>
    <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">

        <!-- Dashboard actions -->
        <div class="sm:flex sm:justify-between sm:items-center mb-8">

            <!-- Left: Title -->
            <div class="mb-4 sm:mb-0">
                <h1 class="text-2xl md:text-3xl text-gray-800 dark:text-gray-100 font-bold">Create Expense</h1>
            </div>

        </div>
        <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
            <form class="space-y-6" method="POST" action="{{ route('expense.store') }}" enctype="multipart/form-data">
                @csrf
                @include('admin.expenses.fields')
            </form>
        </div>
    </div>
</x-app-layout>
