@extends('projects.layout')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.getElementById('ideaPostForm');

            form.addEventListener('submit', function(event) {
                // Prevent form submission if validation fails
                if (!validateForm()) {
                    event.preventDefault();
                }
            });

            function validateForm() {
                let isValid = true;

                const projectTitle = document.getElementById('project-title');
                const projectDescription = document.getElementById('project-description');
                const nameRegex = /^[A-Za-z\s]+$/;

                // Clear previous errors
                clearError(projectTitle);
                clearError(projectDescription);

                if (projectTitle.value.trim() === '') {
                    displayError(projectTitle, 'Project title cannot be empty.');
                    isValid = false;
                } else if (!nameRegex.test(projectTitle.value)) {
                    displayError(projectTitle, 'Project title must contain only letters.');
                    isValid = false;
                }

                if (projectDescription.value.trim() === '') {
                    displayError(projectDescription, 'Project description cannot be empty.');
                    isValid = false;
                }

                return isValid;
            }

            function displayError(inputElement, message) {
                const errorSpan = inputElement.nextElementSibling;
                errorSpan.textContent = message;
                errorSpan.style.display = 'block';
            }

            function clearError(inputElement) {
                const errorSpan = inputElement.nextElementSibling;
                errorSpan.textContent = '';
                errorSpan.style.display = 'none';
            }
        });
    </script>



</head>

<body>
    @section('content')

        <div class="bg-white shadow overflow-hidden sm:rounded-lg">
            <div class="px-4 py-5 bg-gray-50 sm:px-6">
                <div class="text-lg leading-6 font-medium text-gray-900">Project Idea Page</div>
            </div>
            <div class="border-t border-gray-200">
                <div class="flex h-screen items-center justify-center space-x-10 bg-gray-100">
                    <div class="w-full max-w-2xl px-4 sm:px-8 md:px-16 py-8 rounded-lg bg-white shadow-lg">
                        <h2 class="text-xl sm:text-2xl md:text-3xl font-bold mb-4">Submit a Project Idea</h2>
                        <p class="mb-6">We're excited to see what you come up with.</p>

                        @if (session('message'))
                            <div class="bg-green-200 text-green-800 p-4 mb-4 rounded-md">
                                {{ session('message') }}
                            </div>
                        @endif

                        <form id="ideaPostForm" action="{{ route('projects.store') }}" method="POST">
                            @csrf
                            <div class="mb-4">
                                <label for="project-title" class="block text-sm font-semibold mb-2">Project Title</label>
                                <input type="text" id="project-title" name="title"
                                    placeholder="Enter your project title"
                                    class="w-full rounded-md border border-gray-300 p-2 focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50" />
                                <span class="error-msg text-red-600"></span>
                            </div>

                            <div class="mb-4">
                                <label for="project-description" class="block text-sm font-semibold mb-2">Please provide a
                                    brief
                                    description of your project idea including the problem you are solving and how your
                                    project
                                    will
                                    make an impact. (500 characters minimum)</label>
                                <textarea id="project-description" name="description" rows="4" placeholder="Describe your project idea here"
                                    class="w-full rounded-md border border-gray-300 p-2 focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50"></textarea>
                                <span class="error-msg text-red-600"></span>
                            </div>

                            <div class="mb-6">
                                <label for="categories" class="block text-sm font-semibold mb-2 text-black">Choose a
                                    category</label>
                                <select id="categories" name="category"
                                    class="block w-full rounded-lg border border-gray-300 p-2.5 text-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50">
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->category }}">{{ $category->category }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div
                                class="mt-5 flex flex-col sm:flex-row justify-end items-center space-y-4 sm:space-y-0 sm:space-x-8">
                                <a href="{{ route('projects') }}"><button type="button"
                                        class="w-full sm:w-auto rounded-md bg-gray-300 px-4 py-2 text-gray-700 hover:bg-gray-400">Cancel</button></a>
                                <input type="submit"
                                    class="w-full sm:w-auto rounded-md bg-blue-600 px-4 py-2 text-white hover:bg-blue-700">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @stop

</body>

</html>
