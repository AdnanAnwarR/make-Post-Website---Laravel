<x-layout :title="$title">
    {{-- <article class="p-8 max-w-screen-md border-b border-gray-600">
        <h2 class="mb-1 text-3xl font-bold tracking-tight text-gray-900">{{ $post['title'] }}</h2>
        <div class="text-base text-gray-500 ">
            By <a href="/authors/{{ $post->author->username }}" class="text-gray-900 hover:underline">{{ $post->author->name }} </a> in <a class="text-gray-900 hover:underline" href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a> | {{ $post->tanggal_post }}
        </div>
        <p class="my-4 font-light">{{ ($post['body']) }}</p>
        <a class="font-medium text-blue-500 hover:underline" href="/posts">&laquo; Back to all post</a>
    </article> --}}

    <!--
Install the "flowbite-typography" NPM package to apply styles and format the article content:

URL: https://flowbite.com/docs/components/typography/
-->

<main class="pt-8 pb-16 lg:pt-16 lg:pb-24 bg-white dark:bg-gray-900 antialiased">
  <div class="flex justify-between px-4 mx-auto max-w-screen-xl ">
      <article class="mx-auto w-full max-w-4xl format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
         <a class="font-medium text-blue-500 text-xs hover:underline" href="/posts">&laquo; Back to all post</a>
          <header class="my-4 lg:mb-6 not-format">
              <address class="flex items-center mb-6 not-italic">
                  <div class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white">
                      <img class="mr-4 w-16 h-16 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-2.jpg" alt="{{ $post->author->name }}">
                      <div>
                          <a href="/posts?author={{ $post->author->username }}" rel="author" class="text-xl font-bold text-gray-900 dark:text-white">{{ $post->author->name }}</a>
                        <a class="text-gray-900 hover:underline block" href="/posts?category={{ $post->category->slug }}">
                            <span class="{{ $post->category->color }} text-grey-900 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-primary-200 dark:text-primary-800">
                                {{ $post->category->name }}
                            </span>
                        </a>
                          <p class="text-base text-gray-500 dark:text-gray-400">{{ $post->created_at->diffForHumans() }}</p>
                      </div>
                  </div>
              </address>
              <h1 class="mb-4 text-3xl font-extrabold leading-tight text-gray-900 lg:mb-6 lg:text-4xl dark:text-white">{{ $post['title'] }}</h1>
          </header>
          <p>{{ $post['body'] }}</p>
      </article>
  </div>
</main>
</x-layout>
