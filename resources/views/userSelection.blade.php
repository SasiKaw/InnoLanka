<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Selection</title>
  @vite('resources/css/app.css')
  <style>
    body {
      font-family: 'Open Sans', sans-serif;
    }
  </style>
</head>
<body class="bg-gray-100 h-screen flex items-center justify-center" style="background-image:url('images/user-sec-2.png')">

  <div class="bg-white p-8 rounded-lg shadow-xl max-w-2xl ">
    <div class="flex justify-center mb-10">
      <a href="{{route('home')}}"><img src="{{URL('images/logo.png')}}" alt="Logo representing user selection" class="h-16"></a>
    </div>

    <h2 class="text-2xl text-center font-bold mb-6">What best describes you?</h2>

    <form>
      <div class="mb-4">
        <label class="flex items-center">
          <input type="radio" name="userType" value="student" class="text-blue-600 focus:ring-blue-500">
          <span class="ml-2">I'm a student innovator</span>
        </label>
      </div>

      <div class="mb-4">
        <label class="flex items-center">
          <input type="radio" name="userType" value="advisor" class="text-blue-600 focus:ring-blue-500">
          <span class="ml-2">I'm a advisor</span>
        </label>
      </div>

      <div class="mb-6">
        <label class="flex items-center">
          <input type="radio" name="userType" value="funder" class="text-blue-600 focus:ring-blue-500">
          <span class="ml-2">I'm a funder</span>
        </label>
      </div>

      <a href="{{}}"><button type="submit" class="w-full bg-blue-600 text-white py-2 rounded-md font-semibold hover:bg-blue-700">Continue</button></a>
    </form>
  </div>

</body>
</html>
