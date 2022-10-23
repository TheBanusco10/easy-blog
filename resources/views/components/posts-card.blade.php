@props(['post'])

<div class="w-full md:w-1/2 lg:1/3 bg-white shadow hover:shadow-md transition duration-300">
    <a href="{{ route('post.show', ['post_slug' => $post->post_slug]) }}">
        <img class="rounded w-full h-48 object-cover" src="{{ $post->post_image }}" alt="{{ $post->post_title }}">
        <div class="p-3">
            <p class="text-xl font-bold text-center my-4 whitespace-nowrap text-ellipsis overflow-hidden">
                {{ $post->post_title }}
            </p>
            <p class="whitespace-nowrap text-ellipsis overflow-hidden">
                {{ $post->post_content }}
            </p>
        </div>
    </a>
    <div class="p-3">
        <form action="{{ route('post.remove', ['post' => $post]) }}" method="POST">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}

            <a href="{{ route('post.editView', ['post' => $post]) }}">
                {{ __('Edit post') }}
            </a>

            <button type="button" onclick="removePost(event)">
                {{ __('Remove post') }}
            </button>
        </form>
    </div>
</div>

<script>
    function removePost(evt) {
        evt.preventDefault();

        const removePost = confirm('Are you sure?');

        if (removePost) evt.target.parentElement.submit();
    }
</script>
