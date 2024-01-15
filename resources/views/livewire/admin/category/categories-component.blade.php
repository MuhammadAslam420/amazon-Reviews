<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Categories') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-end p-2">
                <div>
                    <label for="search" class="block text-sm font-medium leading-6 text-gray-900">Searching</label>
                    <div class="relative mt-2 rounded-md shadow-sm">
                      <input type="text" name="search" id="search" wire:model.live='search' class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset  placeholder:text-gray-400   sm:text-sm sm:leading-6" placeholder="search by name...">
                    </div>
                </div>
                <div>
                    <label for="sorting" class="block text-sm font-medium leading-6 text-gray-900">Filter</label>
                    <div class="relative mt-2 rounded-md shadow-sm bg-white inset-y-0 right-0 p-2">
                      <div class="flex items-center">
                        <label for="status" class="sr-only">Status</label>
                        <select id="status" name="status" wire:model.live='status' class="h-full rounded-md border-0 bg-transparent py-0 pl-2 pr-7 text-gray-500   sm:text-sm">
                            <option value="all">Choose Status</option>
                            <option value="active">Active</option>
                            <option value="inactive">InActive</option>
                          </select>
                      </div>
                    </div>
                </div>
                <div>
                    <label for="sorting" class="block text-sm font-medium leading-6 text-gray-900">Sorting</label>
                    <div class="relative mt-2 rounded-md shadow-sm bg-white inset-y-0 right-0 p-2">
                      <div class="flex items-center">
                        <label for="sorting" class="sr-only">Sorting</label>
                        <select id="sorting" name="sorting" wire:model.live='sorting' class="h-full rounded-md border-0 bg-transparent py-0 pl-2 pr-7 text-gray-500   sm:text-sm">
                          <option value="all">Choose Sorting Type</option>
                          <option value="asc">Old</option>
                          <option value="desc">New</option>
                        </select>
                      </div>
                    </div>
                </div>
                <div>
                    <label for="sorting" class="block text-sm font-medium leading-6 text-gray-900">Page Size</label>
                    <div class="relative mt-2 rounded-md shadow-sm bg-white inset-y-0 right-0 p-2">
                      <div class="flex items-center">
                        <label for="perPage" class="sr-only">Per Page Size</label>
                        <select id="perPage" name="perPage" wire:model.live='perPage' class="h-full rounded-md border-0 bg-transparent py-0 pl-2 pr-7 text-gray-500   sm:text-sm">
                          <option value="8">Default Page size</option>
                          <option value="12">12</option>
                          <option value="16">16</option>
                        </select>
                      </div>
                    </div>
                </div>
            </div>
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">


                <div class="relative overflow-x-auto">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-3 py-3">
                                   ID
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Category
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Slug
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Status
                                </th>
                                <th scope="col" class="px-6 py-3">
                                   Date
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Action
                                 </th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($categories as $category)
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <td class="px-3 py-4">
                                    {{ $category->id }}
                                </td>
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    <p>
                                        <img class="inline-block h-6 w-6 rounded-full ring-2 ring-white" src="{{ asset('assets/images/categories') }}/{{ $category->logo }}" alt="">

                                        <span>{{ $category->name }}</span>
                                    </p>
                                </th>
                                <td class="px-6 py-4">
                                    {{ $category->slug }}
                                </td>
                                <td class="px-6 py-4">
                                    @if($category->status ==='active')
                                    <span class="btn btn-sm bg-green-700 text-white font-bold rounded-md p-1">{{ $category->status }}</span>
                                    @else
                                    <span class="btn btn-sm bg-red-600 text-white font-bold rounded-md p-1">{{ $category->status }}</span>
                                    @endif
                                </td>
                                <td class="px-6 py-4">
                                   {{\Carbon\Carbon::parse($category->created_at)->isoFormat('MMM Do YYYY')}}
                                </td>
                                <td class="px-6 py-4">
                                    <a href="#" class="text-indigo-700 font-bold">Edit</a>
                                    <a href="#" class="text-red-700 font-bold">Delete</a>
                                 </td>
                            </tr>
                            @empty
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                              Oops no catgeory found...!
                            </tr>
                            @endforelse
                            
                           
                        </tbody>
                    </table>
                </div>

                {{ $categories->links() }}
            </div>
        </div>
    </div>
</div>