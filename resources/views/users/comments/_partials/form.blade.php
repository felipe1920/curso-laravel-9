@csrf

<div class="mb-6">
    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Comentário</label>
    <textarea id="body" name="body"
        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light">{{ $comment->body ?? old('body') }}</textarea>
</div>
<div class="mb-6">
    <label for="visible" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Visivel?
        <input type="checkbox" id="visible" name="visible" @if (isset($comment) && $comment->visible) checked='true' @endif
            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light">
    </label>
</div>
<button type="submit"
    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
    Salvar</button>
