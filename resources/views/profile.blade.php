<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Information Form</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-white-200">
    <div class="min-h-screen flex flex-col justify-center items-center rounded-lg shadow-xl">
        <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-2xl">
            <div class="flex flex-col items-center mb-8">
                <div class="w-24 h-24 bg-blue-200 rounded-full flex items-center justify-center mb-2">
                    <i class="fas fa-user text-white text-3xl"></i>
                </div>
                <button class="text-blue-600 hover:text-blue-800 text-sm font-semibold flex items-center">
                    <i class="fas fa-camera mr-2"></i> Upload Profile Photo
                </button>
            </div>

            <h2 class="text-2xl font-bold text-gray-900 mb-6">Profile Information</h2>

            <div class="mb-4 grid grid-cols-2 gap-4">
                <input type="text" placeholder="First Name" class="col-span-1 p-3 border border-gray-300 rounded-md">
                <input type="text" placeholder="Last Name" class="col-span-1 p-3 border border-gray-300 rounded-md">
            </div>

            <div class="mb-4">
                <input type="text" placeholder="Username" class="w-full p-3 border border-gray-300 rounded-md">
            </div>

            <div class="mb-4">
                <input type="email" placeholder="Email" class="w-full p-3 border border-gray-300 rounded-md">
            </div>

            <div class="mb-6 grid grid-cols-2 gap-4">
                <div class="col-span-1">
                    <select class="w-full p-3 border border-gray-300 rounded-md bg-white">
                        <option>Gender</option>
                        <option>Male</option>
                        <option>Female</option>
                        <option>Other</option>
                    </select>
                </div>
                <input type="text" placeholder="Birthday" class="col-span-1 p-3 border border-gray-300 rounded-md">
            </div>

            <h2 class="text-xl font-semibold text-gray-900 mb-6">Contact Information</h2>

            <div class="mb-4 grid grid-cols-2 gap-4">
                <div class="col-span-1">
                    <select class="w-full p-3 border border-gray-300 rounded-md bg-white">
                        <option>Country</option>
                        <!-- Add other countries as options -->
                    </select>
                </div>
                <input type="tel" placeholder="Phone" class="col-span-1 p-3 border border-gray-300 rounded-md">
            </div>

            <h2 class="text-xl font-semibold text-gray-900 mb-6">About me</h2>

            <div class="mb-4 grid grid-cols-2 gap-4">
                <div class="col-span-1">
                    <select class="w-full p-3 border border-gray-300 rounded-md bg-white">
                        <option>Interest category</option>
                        <!-- Add other categories -->
                    </select>
                </div>
            </div>

            <div class="mb-6">
                <textarea placeholder="Bio" class="w-full p-3 h-32 border border-gray-300 rounded-md"></textarea>
            </div>

            <div class="flex justify-end items-center">
                <button class="text-gray-600 hover:text-gray-800 mr-7">Skip</button>
                <button class="px-8 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600">Save profile</button>
            </div>
        </div>
    </div>
</body>

</html>
