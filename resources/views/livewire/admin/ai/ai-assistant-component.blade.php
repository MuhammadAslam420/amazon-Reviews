<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Ai Assistant') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-end p-1">
                <a href="{{ route('admin.create_ai') }}" wire:navigate
                    class="btn btn-sm p-2 bg-green-500 text-white rounded-md">Create New Ai</a>
            </div>

            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">


                <div class="relative overflow-x-auto p-5">
                    <div class="lg:flex  sm:grid-cols-2 lg:justify-end sm:justify-center p-2">
                        <div>
                            <label for="search"
                                class="block text-sm font-medium leading-6 text-gray-900">Searching</label>
                            <div class="relative mt-2 rounded-md shadow-sm">
                                <input type="text" name="search" id="search" wire:model.live='search'
                                    class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset  placeholder:text-gray-400   sm:text-sm sm:leading-6"
                                    placeholder="search by name...">
                            </div>
                        </div>
                        <div>
                            <label for="sorting"
                                class="block text-sm font-medium leading-6 text-gray-900">Filter</label>
                            <div class="relative mt-2 rounded-md shadow-sm bg-white inset-y-0 right-0 p-2">
                                <div class="flex items-center">
                                    <label for="status" class="sr-only">Status</label>
                                    <select id="status" name="status" wire:model.live='status'
                                        class="h-full rounded-md border-0 bg-transparent py-0 pl-2 pr-7 text-gray-500   sm:text-sm">
                                        <option value="all">Choose Status</option>
                                        <option value="active">Active</option>
                                        <option value="inactive">InActive</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div>
                            <label for="sorting"
                                class="block text-sm font-medium leading-6 text-gray-900">Sorting</label>
                            <div class="relative mt-2 rounded-md shadow-sm bg-white inset-y-0 right-0 p-2">
                                <div class="flex items-center">
                                    <label for="sorting" class="sr-only">Sorting</label>
                                    <select id="sorting" name="sorting" wire:model.live='sorting'
                                        class="h-full rounded-md border-0 bg-transparent py-0 pl-2 pr-7 text-gray-500   sm:text-sm">
                                        <option value="all">Choose Sorting Type</option>
                                        <option value="asc">Old</option>
                                        <option value="desc">New</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div>
                            <label for="sorting" class="block text-sm font-medium leading-6 text-gray-900">Page
                                Size</label>
                            <div class="relative mt-2 rounded-md shadow-sm bg-white inset-y-0 right-0 p-2">
                                <div class="flex items-center">
                                    <label for="perPage" class="sr-only">Per Page Size</label>
                                    <select id="perPage" name="perPage" wire:model.live='perPage'
                                        class="h-full rounded-md border-0 bg-transparent py-0 pl-2 pr-7 text-gray-500   sm:text-sm">
                                        <option value="8">Default Page size</option>
                                        <option value="12">12</option>
                                        <option value="16">16</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid lg:grid-cols-4 md:grid-cols-1 sm:grid-cols-1 p-5">
                        @forelse($ais as $ai)
                        <div class="col-spans-1 ">
                            <div
                                class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                                <div class="flex justify-end px-4 pt-4">
                                    <x-dropdown align="right" width="60">
                                        <x-slot name="trigger">
                                            <button type="button"
                                                class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition ease-in-out duration-150">
                                                <svg class="w-5 h-5" aria-hidden="true"
                                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                    viewBox="0 0 16 3">
                                                    <path
                                                        d="M2 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm6.041 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM14 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Z" />
                                                </svg>
                                            </button>
                                        </x-slot>
                                        <x-slot name="content">
                                            <div class="w-auto">
                                                <x-dropdown-link
                                                    href="{{ route('admin.edit_ai',['id'=>$ai->id]) }}" class="text-primary font-bold" wire:navigate>
                                                    {{ __('Edit') }}
                                                </x-dropdown-link>
                                                <x-dropdown-link
                                                    href="{{ route('admin.edit_ai',['id'=>$ai->id]) }}" class="text-daanger font-bold" >
                                                    {{ __('Delete') }}
                                                </x-dropdown-link>
                                            </div>
                                        </x-slot>
                                    </x-dropdown>
                                </div>
                                <div class="flex flex-col items-center pb-10">
                                    <img class="w-24 h-24 mb-3 rounded-full shadow-lg bg-slate-100"
                                        src="{{ asset('assets/images/ai') }}/{{ $ai->logo }}" alt="Bonnie image" />
                                    <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">{{ $ai->name }}
                                    </h5>
                                    <span class="text-sm text-gray-500 dark:text-gray-400">{{ $ai->catgeory->name
                                        }}</span>
                                    <div class="flex mt-4 md:mt-6">
                                        @if($ai->status ==='active')
                                        <a href="#"
                                            class="inline-flex items-center px-2 py-2 text-sm font-medium text-center text-white bg-green-700 rounded-lg hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800"
                                            style="text-transform: capitalize;">{{$ai->status}}</a>
                                        @else
                                        <a href="#"
                                            class="inline-flex items-center px-2 py-2 text-sm font-medium text-center text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800"
                                            style="text-transform: capitalize;">{{$ai->status}}</a>
                                        @endif
                                    </div>
                                </div>
                            </div>

                        </div>
                        @empty
                        Oops no data found...
                        @endforelse
                    </div>
                    {{ $ais->links() }}
                </div>


            </div>
        </div>
    </div>
</div>