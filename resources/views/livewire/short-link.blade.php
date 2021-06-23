<div class="flex flex-col items-center w-full sm:justify-center">
    <div class="w-full px-6 py-4 overflow-hidden bg-white shadow-md sm:rounded-lg dark:bg-gray-800">
        <p class="mb-5 text-lg font-bold text-green-800 dark:text-gray-300"> <i class="fas fa-link fa-3x"></i> URLShortened</p>
        <div class="">
            <input wire:model="full_url" type="text"
                class="w-full px-4 py-3 bg-white rounded appearance-none border-1 dark:bg-gray-800 dark:text-gray-600 dark:hover:border-gray-400"
                placeholder="Insert URL here...">
        </div>
        <div class="flex justify-end">
            <button wire:click="save" class="px-4 py-3 mt-2 text-white bg-green-600 rounded hover:bg-green-800 dark:bg-red-400 dark:text-gray-100">Short URL</button>
        </div>

        <div class="flex flex-col mt-6 ">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8 ">
                    <div class="overflow-hidden border-b border-gray-200 shadow sm:rounded-lg">
                        @if($links->count())
                            <table class="min-w-full divide-y divide-gray-200 ">
                            <thead>
                                <tr>
                                <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-200">
                                    Original URL
                                </th>
                                <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-200">
                                    Short version
                                </th>
                                <th class="px-6 py-3 bg-gray-50 dark:bg-gray-700"></th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200 dark:bg-gray-600 dark:text-gray-200">
                                @foreach($links as $link)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-no-wrap">
                                            {{ substr($link->full_url, 0, 50) }}@if(strlen($link->full_url) > 50)...@endif
                                        </td>
                                        <td class="px-6 py-4 whitespace-no-wrap">
                                            <a href="{{ $link->shorted_url }}" target="__blank" class="inline-flex px-2 font-semibold leading-5 text-green-800 bg-green-100 rounded-full">
                                                {{ $link->shorted_url }}
                                            </a>
                                        </td>

                                        <td class="px-6 py-4 text-sm font-medium leading-5 text-right whitespace-no-wrap">
                                            <button wire:click="delete({{ $link->id }})" class="text-red-500 dark:text-red-400"><span class="fas fa-trash fa-2x"></span> </button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                            </table>
                        @else
                            <p class="p-4 text-center">No links found..</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
