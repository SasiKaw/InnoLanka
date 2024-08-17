<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lecturer CRUD Application</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    @vite('resources/css/app.css')
</head>
<body>
  <!-- Header -->
  <header class="bg-blue-900 py-4 text-white">
    <div class="container mx-auto flex items-center justify-between">
        <div class="flex items-center space-x-4 px-5">
            <img src="{{ URL('images\logo.png') }}" alt="InnoLanka Logo" class="absolute z-10 mt-14 size-20" />
            <div class="flex px-20">
                <a href="#" class="text-sm ml-20">Projects showcase</a>
            </div>
        </div>
        <div class="flex items-center space-x-4 px-10">
            <a href="{{ route('projects.create') }}"><button
                    class="mr-2 flex flex-row items-center jus rounded-lg bg-blue-400 px-4 py-1.5 leading-none text-white"><i
                        class="fa fa-plus mr-2"></i>New idea</button></a>
            <div>
                <i class="fa-regular fas fa-bell fa-xl mr-6"></i>
                <i class="fa-regular fas fa-user-circle fa-xl"></i>
            </div>
        </div>
    </div>
</header>

@yield('content')

</body>
</html>
