<div>
    <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
        <div class="mt-8 text-2xl">
            What would you like for Christmas?
        </div>
        <div>
            <div class="relative text-gray-700">
                <form wire:submit.prevent="addWish">
                    <input wire:model.debounce.100ms="newWish" class="w-full h-10 pl-3 pr-8 text-base placeholder-gray-600 border rounded-lg focus:shadow-outline" type="text" name="wish" placeholder="Watchu want?!" required/>
                    <button type="submit" class="absolute inset-y-0 right-0 flex items-center px-4 font-bold text-white bg-indigo-600 rounded-r-lg hover:bg-indigo-500 focus:bg-indigo-700">
                        Please :)
                    </button>
                </form>
            </div>
        </div>
    </div>

    @if ($wishes->isNotEmpty())
        <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
            <table class="table-fixed w-full">
                <thead>
                    <tr>
                        <th class="w-1/2 px-4 py-2">Wishes</th>
                        <th class="w-1/6 px-4 py-2"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($wishes as $wish)
                        <tr>
                            <td class="border px-4 py-2">{{ $wish->title }}</td>
                            <td class="border px-4 py-2">
                                <svg wire:click="destroyWish({{ $wish->id }})" class="h-5 w-5 fill-current text-red-500 cursor-pointer ml-auto mr-auto hover:text-red-400 active:bg-red-600" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M5.5 1C5.22386 1 5 1.22386 5 1.5C5 1.77614 5.22386 2 5.5 2H9.5C9.77614 2 10 1.77614 10 1.5C10 1.22386 9.77614 1 9.5 1H5.5ZM3 3.5C3 3.22386 3.22386 3 3.5 3H5H10H11.5C11.7761 3 12 3.22386 12 3.5C12 3.77614 11.7761 4 11.5 4H11V12C11 12.5523 10.5523 13 10 13H5C4.44772 13 4 12.5523 4 12V4L3.5 4C3.22386 4 3 3.77614 3 3.5ZM5 4H10V12H5V4Z" />
                                </svg>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif
</div>
