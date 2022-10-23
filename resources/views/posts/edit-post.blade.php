<x-app-layout>
    <x-header :header="__('Editing post')"/>

    <section class="container w-11/12 md:w-7/12 mx-auto pt-12">
        <form action="{{ route('post.edit', ['id' => $post->id]) }}" method="POST">
            {{ csrf_field() }}
            {{ method_field('PATCH') }}

            <x-auth-validation-errors class="mb-4" :errors="$errors"/>

            <x-input class="{{ $errors->has('post_title') ? 'border-red-600' : '' }}" type="text" name="post_title"
                     placeholder="Post title *" value="{{ $post->post_title }}"/>
            <x-input class="{{ $errors->has('post_slug') ? 'border-red-600' : '' }}" type="text" name="post_slug"
                     placeholder="Slug *" value="{{ $post->post_slug }}" hint="{{ __('This field must be unique') }}"/>
            <x-input type="url" name="post_image" placeholder="URL image" value="{{ $post->post_image }}"/>
            <x-textarea name="post_content" placeholder="Post content" value="{{ $post->post_content }}"/>

            <button class="block ml-auto bg-emerald-700 text-white p-2" type="submit">
                {{ __('Edit post') }}
            </button>
        </form>
    </section>
</x-app-layout>
