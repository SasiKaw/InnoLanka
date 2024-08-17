<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Welcome Back</title>
  @vite('resources/css/app.css')
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Roboto', sans-serif;
    }
  </style>
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">

  <div class="max-w-4xl mx-auto px-6 lg:px-8 flex justify-between items-center">
    <!-- Left side with illustrations -->
    <div class="lg:flex items-center justify-center bg-white p-10 shadow rounded-lg">
      <div class="relative">
        <img src="{{URL('images/r1.png')}}" alt="Main illustration" class="w-80 h-80">
        <img src="" alt="Secondary illustration 1" class="absolute top-0 left-0 w-20 h-20 rounded-full">
        <img src="https://placehold.co/100x100" alt="Secondary illustration 2" class="absolute bottom-0 right-0 w-20 h-20 rounded-full">
        <!-- Add more illustrations as needed -->
      </div>
    </div>

    <!-- Right side with login form -->
    <div class="w-full max-w-md">
      <div class="bg-white p-8 shadow rounded-lg">
        <h2 class="text-3xl font-bold mb-2">Welcome back 👋</h2>
        <p class="mb-8">Log in your account</p>

        <form action="#" method="POST">
          <div class="mb-4">
            <label for="email" class="sr-only">Email</label>
            <input type="email" id="email" name="email" placeholder="What is your e-mail?" class="w-full p-3 rounded bg-gray-50 border border-gray-300">
          </div>

          <div class="mb-4">
            <label for="password" class="sr-only">Password</label>
            <input type="password" id="password" name="password" placeholder="Enter your password" class="w-full p-3 rounded bg-gray-50 border border-gray-300">
          </div>

          <div class="flex items-center justify-between mb-6">
            <label for="remember" class="flex items-center">
              <input type="checkbox" id="remember" name="remember" class="form-checkbox">
              <span class="ml-2">Remember me</span>
            </label>
            <a href="#" class="text-sm text-blue-600 hover:underline">Forgot password?</a>
          </div>

          <button type="submit" class="w-full bg-blue-600 text-white p-3 rounded hover:bg-blue-700 transition duration-200">Continue</button>
        </form>

        <p class="mt-4 text-center text-sm">
          Don't have an account? <a href="#" class="text-blue-600 hover:underline">Sign up</a>
        </p>
      </div>
    </div>
  </div>

</body>
</html>
