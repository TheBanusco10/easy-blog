<x-app-layout>
    <x-header :header="__('Dashboard')"/>

    <div class="container m-auto w-7/12 py-12 flex justify-end">
        <a href="{{ route('post.view') }}" class="bg-emerald-700 rounded p-2 text-white">
            {{ __('Add post')  }}
        </a>
    </div>

    <div class="container m-auto w-11/12 sm:w-7/12 py-12">
        <p class="font-bold text-xl mb-4">
            {{ __('Your posts') }}
        </p>
        @if (!$posts->isEmpty())
            <section class="flex justify-center flex-wrap md:flex-nowrap gap-8">
                @foreach ($posts as $post)
                    <x-posts-card :post="$post"/>
                @endforeach
            </section>
        @else
            <p>
                {{ __('You do not have posts') }}
            </p>
        @endif
    </div>
</x-app-layout>
