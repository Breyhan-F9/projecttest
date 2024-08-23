<!-- resources/views/edit-post.blade.php -->

@extends('layout.main')

@section('container')

<section class="">
  <div class="py-8 px-4 mx-auto max-w-2xl">
      <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Edit Post</h2>
      <form action="{{ route('post.update', $post->id) }}" method="POST">
        @csrf
        @method('PUT') <!-- Laravel's method spoofing for PUT requests -->

        <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
            <div class="sm:col-span-2">
                <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>
                <input type="text" name="title" id="title" value="{{ old('title', $post->title) }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Type post title" required>
            </div>
            <div class="sm:col-span-2">
              <label for="content" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Content</label>
              <textarea id="content" name="content" rows="8" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Your content here">{{ old('content', $post->content) }}</textarea>
            </div>
            <div class="w-full">
                <label for="user_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">User ID</label>
                <input type="text" name="user_id" id="user_id" value="{{ old('user_id', $post->user_id) }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="User ID" disabled>
            </div>
        </div>
        <button type="submit" class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-blue-700 rounded-lg focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-900 hover:bg-blue-800">
            Update Post
        </button>
      </form>
  </div>
</section>

@endsection
