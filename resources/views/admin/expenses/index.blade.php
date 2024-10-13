<x-app-layout>
    <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">

        <!-- Dashboard actions -->
        <div class="sm:flex sm:justify-between sm:items-center mb-8">

            <!-- Left: Title -->
            <div class="mb-4 sm:mb-0">
                <h1 class="text-2xl md:text-3xl text-gray-800 dark:text-gray-100 font-bold">Expenses</h1>
            </div>

            <a href="{{ route('expense.create') }}" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-violet-600 hover:bg-violet-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-violet-500">
                Create Expense
            </a>

        </div>

        <div class="bg-white shadow-md rounded-lg overflow-x-auto">
            <table class="min-w-full divide-y divide-violet-200">
                <thead class="bg-violet-100">
                <tr>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-violet-800 uppercase tracking-wider">
                        Date
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-violet-800 uppercase tracking-wider">
                        Title
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-violet-800 uppercase tracking-wider">
                        Category
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-violet-800 uppercase tracking-wider">
                        Amount
                    </th>
                    <th scope="col" class="relative px-6 py-3">
                        <span class="sr-only">Actions</span>
                    </th>
                </tr>
                </thead>
                <tbody class="bg-white divide-y divide-violet-100">
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm text-violet-900">2023-05-15</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm text-violet-900">Office Supplies</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-violet-100 text-violet-800">
                                Business
                            </span>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm text-violet-900">$150.00</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                        <a href="#" class="inline-flex items-center p-1 border border-violet-300 rounded-md text-violet-600 hover:bg-violet-100 hover:text-violet-900 mr-2 transition duration-150 ease-in-out">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
                            </svg>
                            <span class="sr-only">Edit</span>
                        </a>
                        <a href="#" class="inline-flex items-center p-1 border border-violet-300 rounded-md text-violet-600 hover:bg-violet-100 hover:text-violet-900 mr-2 transition duration-150 ease-in-out">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                                <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">Show</span>
                        </a>
                        <button class="inline-flex items-center p-1 border border-red-300 rounded-md text-red-600 hover:bg-red-100 hover:text-red-900 transition duration-150 ease-in-out">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">Delete</span>
                        </button>
                    </td>
                </tr>
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm text-violet-900">2023-05-18</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm text-violet-900">Client Lunch</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-violet-100 text-violet-800">
                                Meals
                            </span>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm text-violet-900">$75.50</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                        <a href="#" class="inline-flex items-center p-1 border border-violet-300 rounded-md text-violet-600 hover:bg-violet-100 hover:text-violet-900 mr-2 transition duration-150 ease-in-out">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
                            </svg>
                            <span class="sr-only">Edit</span>
                        </a>
                        <a href="#" class="inline-flex items-center p-1 border border-violet-300 rounded-md text-violet-600 hover:bg-violet-100 hover:text-violet-900 mr-2 transition duration-150 ease-in-out">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                                <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">Show</span>
                        </a>
                        <button class="inline-flex items-center p-1 border border-red-300 rounded-md text-red-600 hover:bg-red-100 hover:text-red-900 transition duration-150 ease-in-out">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">Delete</span>
                        </button>
                    </td>
                </tr>
                <!-- Add more rows as needed -->
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
