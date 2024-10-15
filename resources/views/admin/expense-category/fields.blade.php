<div>
    <label for="title" class="block font-medium text-sm text-gray-700 dark:text-gray-300">Title</label>
    <input type="text" id="title" name="title" required
           value="@if(!empty($category->title)){{ $category->title }}@endif"
           class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm mt-1 block w-full">
</div>
<div>
    <label for="description" class="block font-medium text-sm text-gray-700 dark:text-gray-300">Description</label>
    <textarea id="description" name="description" rows="3"
              class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm mt-1 block w-full">@if(!empty($category->description)){{ $category->description }}@endif</textarea>
</div>
