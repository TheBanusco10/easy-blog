@props(['post'])

<div class="w-full md:w-1/2 lg:1/3">
    <img class="rounded w-full h-48 object-cover" src="{{ $post->post_image }}" alt="{{ $post->post_title }}">
    <p class="text-xl font-bold text-center my-4 whitespace-nowrap text-ellipsis overflow-hidden">
        {{ $post->post_title }}
    </p>
    <p>
        {{ $post->post_content }}
    </p>
    <div class="mt-4">
        <a href="{{ route('post.show', ['post_slug' => $post->post_slug]) }}">
            {{ __('See more') }}
        </a>
        <form action="{{ route('post.remove', ['post' => $post]) }}" method="POST">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}

            <button type="submit">
                {{ __('Remove post') }}
            </button>
        </form>
    </div>
</div>
