<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Post') }}
        </h2>
       
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="flex flex-col">
                        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                          <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                            <div class="overflow-hidden">
                              @if (session()->has('status'))
                              {{session('status')}}
                                  
                              @endif
                              <table class="min-w-full text-left text-sm font-light">
                                <thead class="border-b font-medium dark:border-neutral-500">
                                  <tr>
                                    <th scope="col" class="px-6 py-4">Post ID</th>
                                    <th scope="col" class="px-6 py-4">Title</th>
                                    <th scope="col" class="px-6 py-4">Story</th>
                                    <th scope="col" class="px-6 py-4"></th>
                                    <th scope="col" class="px-6 py-4">Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                    @foreach ($post as $d)
                               
                                  <tr class="border-b dark:border-neutral-500">
                                    <td class="whitespace-nowrap px-6 py-4 font-medium">{{$d->id}}</td>
                                    <td class="whitespace-nowrap px-6 py-4">{{$d->title}}</td>
                                    <td class="whitespace-nowrap px-6 py-4">{{substr($d->story,0 ,20)}}</td>
                                    <td class="whitespace-nowrap text-orange-500  px-6 py-4"><a href={{asset('/post-edit/'.$d->id)}} >Edit</a></td>
                                    <td class="whitespace-nowrap text-red-600 px-6 py-4"><a href={{asset('/post-delete/'.$d->id)}} >Delete</a></td>
                                  </tr>
                                  <br>
                                  @endforeach
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                      </div>
               
                </div>
            </div>
        </div>
    </div>



 


</x-app-layout>
