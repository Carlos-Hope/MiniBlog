<x-app-layout>
    <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
        <form method="POST" action="{{ route('blog.update', $blog) }}">
            @csrf
            @method('patch')
            <textarea name="message" placeholder="{{ __('What\'s on your mind?') }}"
                class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">{{ old('message', $blog->message) }}</textarea>
            <x-input-error :messages="$errors->store->get('message')" class="mt-2" />
                <div class="flex justify-between">
                    <a class="mt-6 border p-1" href="{{ route('blog.index') }}">Cancel</a>
                    <x-primary-button class="mt-4">{{ __('Valider') }}</x-primary-button>
                </div>

        </form>
    </div>
</x-app-layout>
