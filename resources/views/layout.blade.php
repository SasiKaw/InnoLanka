<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body>
    <!-- Header -->
    <header class="bg-blue-900 text-white py-4 ">
        <div class="container mx-auto flex justify-between items-center">
            <div class="flex items-center space-x-4 px-5">
                <img src="{{URL('images\logo.png')}}" alt="InnoLanka Logo" class="size-20 absolute mt-14 z-10">
                <nav class="flex space-x-4 items-center px-20">
                    <a href="#" class=" bg-white text-black p-2 text-sm rounded-lg">Why InnoLanka</a>
                    <a href="#" class="">Projects</a>
                </nav>
            </div>
            <div class="flex space-x-4 items-center px-10">
                <a href="#" class="">Log in</a>
                <a href="{url{''}}" class=" bg-sky-400 rounded-tl-2xl rounded-br-xl p-1 w-20 text-center">Sign in</a>
            </div>
        </div>
    </header>
    @yield('content')
</body>

</html>
