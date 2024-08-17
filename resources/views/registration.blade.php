<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up for InnoLanka</title>
    @vite('resources/css/app.css')

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.getElementById('registrationForm');

            form.addEventListener('submit', function(event) {
                // Prevent form submission if validation fails
                if (!validateForm()) {
                    event.preventDefault();
                }
            });

            function validateForm() {
                let isValid = true;

                // Validate first name and last name for only letters and not empty
                const firstName = document.getElementById('first-name');
                const lastName = document.getElementById('last-name');
                const nameRegex = /^[A-Za-z\s]+$/;

                if (firstName.value.trim() === '') {
                    displayError(firstName, 'First name cannot be empty.');
                    isValid = false;
                } else if (!nameRegex.test(firstName.value)) {
                    displayError(firstName, 'First name must contain only letters.');
                    isValid = false;
                } else {
                    clearError(firstName);
                }

                if (lastName.value.trim() === '') {
                    displayError(lastName, 'Last name cannot be empty.');
                    isValid = false;
                } else if (!nameRegex.test(lastName.value)) {
                    displayError(lastName, 'Last name must contain only letters.');
                    isValid = false;
                } else {
                    clearError(lastName);
                }

                // Validate username for length and not empty
                const username = document.getElementById('username');
                if (username.value.trim() === '') {
                    displayError(username, 'Username cannot be empty.');
                    isValid = false;
                } else if (username.value.length < 4) {
                    displayError(username, 'Username must be longer than 3 characters.');
                    isValid = false;
                } else {
                    clearError(username);
                }

                // Validate password for length and not empty
                const password = document.getElementById('password');
                if (password.value.trim() === '') {
                    displayError(password, 'Password cannot be empty.');
                    isValid = false;
                } else if (password.value.length < 9) {
                    displayError(password, 'Password must be longer than 8 characters.');
                    isValid = false;
                } else {
                    clearError(password);
                }

                return isValid;
            }

            function displayError(inputElement, message) {
                const errorSpan = inputElement.nextElementSibling;
                errorSpan.textContent = message;
            }

            function clearError(inputElement) {
                const errorSpan = inputElement.nextElementSibling;
                errorSpan.textContent = '';
            }
        });
        </script>



</head>

<body class="bg-white bg-no-repeat bg-center relative" style="background-image: URL('images/r2.png')">
    <img src="{{ URL('images\logo.png') }}" alt="" class="size-20 absolute mt-7 ml-10">
    <div class="min-h-screen flex flex-col justify-center items-center">
        <div class="mb-10">
            <h2 class="text-4xl font-bold text-gray-900 bg-white p-5 text-center rounded-lg shadow-2xl">Sign up for
                InnoLanka</h2>
        </div>

        <form class="w-full max-w-lg bg-white bg-opacity-95 shadow-2xl rounded-lg p-8" id="registrationForm">
            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-black text-xs font-bold mb-2" for="first-name">
                        First Name
                    </label>
                    <input
                        class="appearance-none block w-full border rounded py-3 px-4 mb-3 leading-tight bg-white border-gray-300 focus:outline-sky-400"
                        id="first-name" type="text" placeholder="Jane">
                     
                </div>
                <div class="w-full md:w-1/2 px-3">
                    <label class="block uppercase tracking-wide text-black text-xs font-bold mb-2" for="last-name">
                        Last Name
                    </label>
                    <input
                        class="appearance-none block w-full border rounded py-3 px-4 leading-tight  bg-white border-gray-300 focus:outline-sky-400"
                        id="last-name" type="text" placeholder="Doe">
                    <span class="error-msg text-red-600"></span>
                </div>
            </div>
            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full px-3">
                    <label class="block uppercase tracking-wide text-black text-xs font-bold mb-2" for="username">
                        Username
                    </label>
                    <input
                        class="appearance-none block w-full border rounded py-3 px-4 mb-3 leading-tight  bg-white border-gray-300 focus:outline-sky-400"
                        id="username" type="text" placeholder="jane.doe">
                    <span class="error-msg text-red-600"></span>
                </div>
            </div>
            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full px-3">
                    <label class="block uppercase tracking-wide text-black text-xs font-bold mb-2" for="password">
                        Password
                    </label>
                    <input
                        class="appearance-none block w-full border rounded py-3 px-4 mb-3 leading-tight  bg-white border-gray-300 focus:outline-sky-400"
                        id="password" type="password" placeholder="******************">
                    <span class="error-msg text-red-600"></span>
                </div>
            </div>
            <div class="flex items-center justify-between">
                <button
                    class="w-full shadow bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                    type="submit">
                    Sign Up
                </button>
            </div>
            <div class="mt-4 text-center">
                <p class="text-gray-600">Already a user? <a href="#"
                        class="text-blue-500 hover:text-blue-700">Login</a></p>
            </div>
        </form>
    </div>
</body>

</html>
