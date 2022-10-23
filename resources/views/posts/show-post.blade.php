<x-app-layout>
    <img class="w-full h-60 object-cover" src="{{ $post->post_image }}" alt="{{ $post->post_title }}">
    <div class="container w-11/12 md:w-7/12 mx-auto mt-4">
        <p class="font-bold text-2xl text-center border-b-2 border-gray-200">
            {{ $post->post_title }}
        </p>
        <p class="mt-3">
            {{ $post->post_content }}
        </p>
        <div>
            <p>
                No comments now
            </p>
        </div>
    </div>
</x-app-layout>
