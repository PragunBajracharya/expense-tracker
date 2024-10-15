<x-app-layout>
    <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">

        <!-- Dashboard actions -->
        <div class="sm:flex sm:justify-between sm:items-center mb-8">

            <!-- Left: Title -->
            <div class="mb-4 sm:mb-0">
                <h1 class="text-2xl md:text-3xl text-gray-800 dark:text-gray-100 font-bold">Expenses</h1>
            </div>

            <div class="flex space-x-4">
                <div class="relative">
                    <form method="GET" action="{{ route('expense.index') }}">
                        <input type="date" id="date" name="filter" onchange="this.form.submit()"
                            class="block w-full pl-3 pr-10 py-2 text-base border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 sm:text-sm rounded-md"
                            placeholder="Filter by date">
                    </form>
                </div>
                <a href="{{ route('expense.create') }}"
                   class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-violet-600 hover:bg-violet-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-violet-500">
                    Create Expense
                </a>
            </div>
        </div>

        <div class="bg-white shadow-md rounded-lg overflow-x-auto">
            <table class="min-w-full divide-y divide-violet-200">
                <thead class="bg-violet-100">
                <tr>
                    <th scope="col"
                        class="px-6 py-3 text-left text-xs font-medium text-violet-800 uppercase tracking-wider">
                        Date
                    </th>
                    <th scope="col"
                        class="px-6 py-3 text-left text-xs font-medium text-violet-800 uppercase tracking-wider">
                        Title
                    </th>
                    <th scope="col"
                        class="px-6 py-3 text-left text-xs font-medium text-violet-800 uppercase tracking-wider">
                        Category
                    </th>
                    <th scope="col"
                        class="px-6 py-3 text-left text-xs font-medium text-violet-800 uppercase tracking-wider">
                        Amount
                    </th>
                    <th scope="col" class="relative px-6 py-3">
                        <span class="sr-only">Actions</span>
                    </th>
                </tr>
                </thead>
                <tbody class="bg-white divide-y divide-violet-100">
                @if(count($expenses) > 0)
                @foreach($expenses as $expense)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-violet-900">{{ $expense->created_at->format('Y-m-d') }}</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-violet-900">{{ $expense->title }}</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            @if($expense->expense_category_id)
                                <span
                                    class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-violet-100 text-violet-800">
                                {{ $expense->expenseCategory->title }}
                            </span>
                            @endif
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-violet-900">$ {{ $expense->amount }}</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                            <a href="{{ route('expense.edit', $expense->id) }}"
                               class="inline-flex items-center p-1 border border-violet-300 rounded-md text-violet-600 hover:bg-violet-100 hover:text-violet-900 mr-2 transition duration-150 ease-in-out">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                     fill="currentColor">
                                    <path
                                        d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"/>
                                </svg>
                                <span class="sr-only">Edit</span>
                            </a>
                            <button
                                x-on:click.prevent="$dispatch('open-modal', 'confirm-expense-deletion-{{ $expense->id }}')"
                                class="inline-flex items-center p-1 border border-red-300 rounded-md text-red-600 hover:bg-red-100 hover:text-red-900 transition duration-150 ease-in-out">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                     fill="currentColor">
                                    <path fill-rule="evenodd"
                                          d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                          clip-rule="evenodd"/>
                                </svg>
                                <span class="sr-only">Delete</span>
                            </button>
                        </td>
                    </tr>
                @endforeach
                @else
                    <tr>
                        <td colspan="5" class="px-6 py-24 text-center">
                            <div class="flex flex-col items-center">
                                <svg class="w-16 h-16 text-violet-400 mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                </svg>
                                <h3 class="text-lg font-medium text-violet-900 mb-1">No expenses yet</h3>
                                <p class="text-violet-500 mb-4">Get started by creating a new expense.</p>
                                <a href="{{ route('expense.create') }}" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-violet-600 hover:bg-violet-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-violet-500">
                                    Add Your First Expense
                                </a>
                            </div>
                        </td>
                    </tr>
                @endif
                </tbody>
            </table>
        </div>
        {{ $expenses->links() }}
    </div>
</x-app-layout>
@foreach($expenses as $expense)
    <x-modal name="confirm-expense-deletion-{{ $expense->id }}" focusable>
        <form method="post" action="{{ route('expense.delete', $expense->id) }}" class="p-6">
            @csrf
            @method('delete')

            <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                {{ __('Delete Expense: ' . $expense->id) }}
            </h2>

            <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                {{ __('Are you sure you want to delete this expense? The data will be deleted temporarily and will be moved to trash.') }}
            </p>

            <div class="mt-6 flex justify-end">
                <x-secondary-button x-on:click="$dispatch('close')">
                    {{ __('Cancel') }}
                </x-secondary-button>

                <x-danger-button class="ms-3">
                    {{ __('Delete Expense') }}
                </x-danger-button>
            </div>
        </form>
    </x-modal>
@endforeach
