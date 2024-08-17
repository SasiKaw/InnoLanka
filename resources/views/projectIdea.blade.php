<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Submit a Project Idea</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    @vite('resources/css/app.css')
</head>

<body >
    <!-- Header -->
    <header class="bg-blue-900 py-4 text-white">
        <div class="container mx-auto flex flex-wrap items-center justify-between">
            <div class="flex items-center space-x-4 px-5">
                <img src="{{ URL('images/logo.png') }}" alt="InnoLanka Logo" class="size-20 absolute mt-14 z-10">
                <nav class="hidden md:flex items-center">
                    <a href="#" class="text-sm ml-60">Projects showcase</a>
                </nav>
            </div>
            <div class="flex items-center space-x-4 px-10">
                <a href="#"><button class="flex items-center rounded-lg bg-blue-400 px-4 py-1.5 text-white">
                        <i class="fa fa-plus mr-2"></i> New idea</button></a>
                <div>
                    <i class="fa-regular fas fa-bell fa-xl mr-6"></i>
                    <i class="fa-regular fas fa-user-circle fa-xl"></i>
                </div>
            </div>
        </div>
    </header>
    <div class="flex h-screen items-center justify-center space-x-10 bg-gray-100">
        <div class="w-full max-w-2xl px-4 sm:px-8 md:px-16 py-8 rounded-lg bg-white shadow-lg">
            <h2 class="text-xl sm:text-2xl md:text-3xl font-bold mb-4">Submit a Project Idea</h2>
            <p class="mb-6">We're excited to see what you come up with.</p>

            @if (session('success'))
                <div>
                    {{ session('success') }}
                </div>
            @endif

            <form action="{{route('store.idea')}}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="project-title" class="block text-sm font-semibold mb-2">Project Title</label>
                    <input type="text" id="project-title" name="project-title" placeholder="Enter your project title"
                        class="w-full rounded-md border border-gray-300 p-2 focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50" />
                </div>

                <div class="mb-4">
                    <label for="project-description" class="block text-sm font-semibold mb-2">Please provide a brief
                        description of your project idea including the problem you are solving and how your project will
                        make an impact. (500 characters minimum)</label>
                    <textarea id="project-description" name="project-description" rows="4"
                        placeholder="Describe your project idea here"
                        class="w-full rounded-md border border-gray-300 p-2 focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50"></textarea>
                </div>

                <div class="mb-6">
                    <label for="categories" class="block text-sm font-semibold mb-2 text-black">Choose a category</label>
                    <select id="categories" name="category"
                        class="block w-full rounded-lg border border-gray-300 p-2.5 text-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50">
                        @foreach ($categories as $category)
                            <option value="{{$category->category}}">{{$category->category}}</option>
                        @endforeach
                    </select>
                </div>

                <div
                    class="mt-5 flex flex-col sm:flex-row justify-end items-center space-y-4 sm:space-y-0 sm:space-x-8">
                    <button type="button"
                        class="w-full sm:w-auto rounded-md bg-gray-300 px-4 py-2 text-gray-700 hover:bg-gray-400">Cancel</button>
                    <button type="submit"
                        class="w-full sm:w-auto rounded-md bg-blue-600 px-4 py-2 text-white hover:bg-blue-700">Submit</button>
                </div>
            </form>
        </div>
    </div>

</body>

</html>
