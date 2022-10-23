<x-app-layout>
    <x-header :header="__('Adding new post')"/>

    <section class="pt-12">
        <form action="{{ route('post.create') }}" method="POST">
            {{ csrf_field() }}

            <x-auth-validation-errors class="mb-4" :errors="$errors"/>

            <input type="text" name="post_title" placeholder="Post title">
            <input type="text" name="post_slug" placeholder="Slug">
            <input type="url" name="post_image" placeholder="URL image">
            <textarea name="post_content" id="" cols="30" rows="10" placeholder="Post content"></textarea>

            <button type="submit">
                {{ __('Add post') }}
            </button>
        </form>
    </section>
</x-app-layout>
