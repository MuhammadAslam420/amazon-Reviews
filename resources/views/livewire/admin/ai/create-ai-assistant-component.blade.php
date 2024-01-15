<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Ai Assistant') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-end p-1">
                <a href="{{ route('admin.ai_assistant') }}" wire:navigate class="btn btn-sm p-2 bg-green-500 text-white rounded-md">Ai Assitants</a>
            </div>
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-3">
                <h1 class="card-title">Create AI Form</h1>
                <div class="relative overflow-x-auto p-5">
                    <form enctype="multipart/form-data" wire:submit.prevent='createAi'>
                        <div>
                            <x-label for="name" value="{{ __('Name') }}" />
                            <x-input id="name" class="block mt-1 w-full" type="text" name="name"   wire:model='name' wire:keyup='genSlug' />
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mt-4">
                            <x-label for="slug" value="{{ __('Slug') }}" />
                            <x-input id="slug" class="block mt-1 w-full" type="text" name="slug" wire:model='slug'  />
                            @error('slug')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mt-4">
                            <x-label for="title" value="{{ __('title') }}" />
                            <x-input id="title" class="block mt-1 w-full" type="text" name="title" wire:model='title'  />
                            @error('title')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                       
                        <div class="mt-4">
                            <x-label for="prompt" value="{{ __('Prompt') }}" />
                            <textarea id="prompt" name="prompt" wire:model='prompt' rows="3" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
                            @error('prompt')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mt-4">
                            <x-label for="status" value="{{ __('Status') }}" />
                            <select id="status" name="stattus" wire:model='status' class="block mt-1 w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                              <option value="">Select Status</option>
                              <option value="active">Active</option>
                              <option value="inactive">InActive</option>
                            </select>
                            @error('status')
                            <span class="text-danger">{{ $message }}</span>
                           @enderror
                        </div>
                        <div class="mt-4">
                            <x-label for="category_id" value="{{ __('Category') }}" />
                            <select id="category_id" name="stattus" wire:model='category_id' class="block mt-1 w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                              <option value="">Select Catgeory</option>
                              @foreach ($categories as $category)
                              <option value="{{ $category->id }}">{{ $category->name }}</option>
                              @endforeach
                            </select>
                            @error('category_id')
                            <span class="text-danger">{{ $message }}</span>
                           @enderror
                        </div>
                        <div class="mt-4">
                            <x-label for="logo" value="{{ __('Ai Logo / Image') }}" />
                            <x-input id="logo" class="block mt-1 w-full" type="file" name="logo" wire:model='logo'  />
                            @error('logo')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mt-4">
                            <div class="col-span-full">
                                <label for="cover-photo" class="block text-sm font-medium leading-6 text-gray-900">AI Image</label>
                                <div class="mt-2 flex justify-center rounded-lg border border-dashed border-gray-900/25 px-6 py-10">
                                  <div class="text-center">
                                    <svg class="mx-auto h-12 w-12 text-gray-300" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                                      <path fill-rule="evenodd" d="M1.5 6a2.25 2.25 0 012.25-2.25h16.5A2.25 2.25 0 0122.5 6v12a2.25 2.25 0 01-2.25 2.25H3.75A2.25 2.25 0 011.5 18V6zM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0021 18v-1.94l-2.69-2.689a1.5 1.5 0 00-2.12 0l-.88.879.97.97a.75.75 0 11-1.06 1.06l-5.16-5.159a1.5 1.5 0 00-2.12 0L3 16.061zm10.125-7.81a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0z" clip-rule="evenodd" />
                                    </svg>
                                    <div class="mt-4 flex text-sm leading-6 text-gray-600">
                                      <label for="file-upload" class="relative cursor-pointer rounded-md bg-white font-semibold text-indigo-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 hover:text-indigo-500">
                                        <span>Upload a file</span>
                                          @if($logo)
                                          <img src="{{ $logo->temporaryurl() }}" alt="">
                                          @endif
                                      </label>
                                      
                                    </div>
                                    <p class="text-xs leading-5 text-gray-600">PNG, JPG, GIF up to 10MB</p>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="flex items-center justify-end mt-2">
                            <x-button class="ms-4">
                                {{ __('Create AI') }}
                            </x-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>