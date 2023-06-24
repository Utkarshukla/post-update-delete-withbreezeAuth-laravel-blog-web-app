<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Post') }}
        </h2>

    </x-slot>

    <div
        class="block max-w-sm rounded-lg bg-slate-300 p-6 shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">
        <form method="POST">
            @csrf
            <!--title input-->
            <div>
                <x-input-label for="title" :value="__('Title')" />
                <x-text-input id="title" name="title" type="text" class="mt-1 block w-full"
                    autocomplete="new-title" />
                {{-- <x-input-error :messages="$errors->updatetitle->get('title')" class="mt-2" /> --}}
            </div>

<br>
            <!--story input-->
            <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your
                story</label>
            <textarea id="message" rows="4" name="story"
                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Write your thoughts here..."></textarea>

            <br>

           

            <!--Submit button-->
            <button
                class="bg-blue-500 hover:bg-blue-400 text-red-600 font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded">
                Submit
            </button>
        </form>
    </div>



</x-app-layout>
