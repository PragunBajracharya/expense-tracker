<div>
    <label for="date" class="block font-medium text-sm text-gray-700 dark:text-gray-300">Date</label>
    <input type="date" id="date" name="date" required
           class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm mt-1 block w-full">
</div>
<div>
    <label for="title" class="block font-medium text-sm text-gray-700 dark:text-gray-300">Title</label>
    <input type="text" id="title" name="title" required
           class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm mt-1 block w-full">
</div>
<div>
    <label for="category" class="block font-medium text-sm text-gray-700 dark:text-gray-300">Category</label>
    <select id="category" name="category" required
            class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm mt-1 block w-full">
        <option value="">Select a category</option>
        @foreach($expenseCategories as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endforeach
    </select>
</div>
<div>
    <label for="amount" class="block font-medium text-sm text-gray-700 dark:text-gray-300">Amount</label>
    <div class="mt-1 relative rounded-md shadow-sm">
        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
            <span class="text-violet-500 sm:text-sm">$</span>
        </div>
        <input type="number" id="amount" name="amount" required step="0.01" min="0"
               class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm mt-1 block w-full">
    </div>
</div>
<div>
    <label for="paid_by" class="block font-medium text-sm text-gray-700 dark:text-gray-300">Paid By</label>
    <select id="paid_by" name="paid_by" required
            class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm mt-1 block w-full">
        <option value="">Select who paid</option>
        @foreach($users as $user)
            <option value="{{ $user->id }}">{{ $user->name }}</option>
        @endforeach
    </select>
</div>
<div>
    <label for="remarks" class="block font-medium text-sm text-gray-700 dark:text-gray-300">Remarks</label>
    <textarea id="remarks" name="remarks" rows="3"
              class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm mt-1 block w-full"></textarea>
</div>
<div>
    <label for="receipt" class="block font-medium text-sm text-gray-700 dark:text-gray-300">Receipt Image</label>
    <input type="file" id="receipt" name="receipt" accept="image/*"
           class="mt-1 block w-full text-sm text-violet-500
                        file:mr-4 file:py-2 file:px-4
                        file:rounded-md file:border-0
                        file:text-sm file:font-semibold
                        file:bg-violet-50 file:text-violet-700
                        hover:file:bg-violet-100">
</div>
<div class="flex items-center justify-end">
    <button type="submit"
            class="px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-violet-600 hover:bg-violet-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-violet-500">
        Create Expense
    </button>
</div>
