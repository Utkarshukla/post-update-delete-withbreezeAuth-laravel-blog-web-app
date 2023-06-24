<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit Post') }}
    </x-slot>
    </h2>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">



                    <form method="POST">
                        @csrf
                        <!--Name input-->

                        <div>
                            <x-input-label for="password" :value="__('Title')" />
                            <x-text-input id="password" name="title" type="text" value="{{ $post->title }}"
                                class="mt-1 block w-full" autocomplete="new-title" />
                            {{-- <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" /> --}}
                        </div>
                        <br>
                        <!--story input-->
                        <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your
                            story</label>
                        <textarea id="message" rows="4" name="story"
                            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Write your thoughts here...">{{ $post->story }}</textarea>

                        <br>




                        <!--Submit button-->
                        
                        <button
                            class="bg-blue-500 hover:bg-blue-400 text-red-600 font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded">
                            Submit
                        </button>
                    </form>

                </div>
            </div>
        </div>
    </div>

</x-app-layout>
