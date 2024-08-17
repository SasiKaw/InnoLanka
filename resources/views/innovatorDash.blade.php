@extends('layout')


@section('content')
<body class="bg-gray-100">
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
                <a href="{{ url('/ideaPost') }}"><button
                        class="mr-2 flex flex-row items-center jus rounded-lg bg-blue-400 px-4 py-1.5 leading-none text-white"><i
                            class="fa fa-plus mr-2"></i> New idea</button></a>
                <div>
                    <i class="fa-regular fas fa-bell fa-xl mr-6"></i>
                    <i class="fa-regular fas fa-user-circle fa-xl"></i>
                </div>
            </div>
        </div>
    </header>

    <div class="mx-auto max-w-6xl px-4 sm:px-6 lg:px-8">
        <div class="mt-6 flex items-center justify-between rounded-t-xl bg-white p-4 shadow-sm">
            <h1 class="flex-grow text-3xl font-bold">John's Dashboard</h1>
        </div>

        <div class="grid grid-cols-1 gap-4 rounded-b-xl bg-white p-4 shadow-sm md:grid-cols-3">
            <div class="flex items-center rounded-lg bg-blue-100 p-4 shadow">
                <div class="mr-4 text-blue-600">
                    <i class="fas fa-file-alt fa-2x"></i>
                </div>
                <div>
                    <p class="text-sm text-gray-600">New projects</p>
                    <p class="text-xl font-semibold">0</p>
                </div>
            </div>

            <div class="flex items-center rounded-lg bg-blue-100 p-4 shadow">
                <div class="mr-4 text-blue-600">
                    <i class="fas fa-spinner fa-2x"></i>
                </div>
                <div>
                    <p class="text-sm text-gray-600">Ongoing projects</p>
                    <p class="text-xl font-semibold">0</p>
                </div>
            </div>

            <div class="flex items-center rounded-lg bg-red-100 p-4 shadow">
                <div class="mr-4 text-red-600">
                    <i class="fas fa-check-circle fa-2x"></i>
                </div>
                <div>
                    <p class="text-sm text-gray-600">Completed projects</p>
                    <p class="text-xl font-semibold">0</p>
                </div>
            </div>
        </div>

        <div class="my-6 rounded-xl bg-white p-4 shadow-lg">
            <div class="mb-4 border-b">
                <ul class="-mb-px flex flex-wrap" id="myTab" data-tabs-toggle="#myTabContent" role="tablist">
                    <li class="mr-2" role="presentation">
                        <button
                            class="group inline-block rounded-t-lg border-b-2 border-transparent p-4 hover:border-gray-300 hover:text-gray-600"
                            id="new-tab" data-tabs-target="#new" type="button" role="tab" aria-controls="new"
                            aria-selected="false">New</button>
                    </li>
                    <li class="mr-2" role="presentation">
                        <button
                            class="group inline-block rounded-t-lg border-b-2 border-transparent p-4 hover:border-gray-300 hover:text-gray-600"
                            id="in-progress-tab" data-tabs-target="#in-progress" type="button" role="tab"
                            aria-controls="in-progress" aria-selected="false">In progress</button>
                    </li>
                    <li role="presentation">
                        <button
                            class="group inline-block rounded-t-lg border-b-2 border-transparent p-4 hover:border-gray-300 hover:text-gray-600"
                            id="completed-tab" data-tabs-target="#completed" type="button" role="tab"
                            aria-controls="completed" aria-selected="false">Completed</button>
                    </li>
                </ul>
            </div>

            <div id="myTabContent">
                <div class="hidden rounded-lg bg-gray-50 p-4" id="new" role="tabpanel" aria-labelledby="new-tab">
                </div>
                <div class="hidden rounded-lg bg-gray-50 p-4" id="in-progress" role="tabpanel"
                    aria-labelledby="in-progress-tab"></div>
                <div class="hidden rounded-lg bg-gray-50 p-4" id="completed" role="tabpanel"
                    aria-labelledby="completed-tab">
                    <!-- Content for Completed tab -->
                </div>
            </div>
        </div>
    </div>

    <script>
        // Simple tab interface script
        let tabs = document.querySelectorAll('[data-tabs-toggle]');
        for (let i = 0; i < tabs.length; i++) {
            tabs[i].addEventListener('click', function(e) {
                e.preventDefault();
                let target = this.dataset.tabsTarget;
                let tabContents = document.querySelectorAll('#myTabContent > div');
                for (let j = 0; j < tabContents.length; j++) {
                    tabContents[j].classList.add('hidden');
                    if (tabContents[j].id === target) {
                        tabContents[j].classList.remove('hidden');
                    }
                }

                let tabs = document.querySelectorAll('#myTab button');
                for (let k = 0; k < tabs.length; k++) {
                    tabs[k].classList.remove('text-blue-600', 'border-blue-600');
                    tabs[k].classList.add('hover:text-gray-600', 'hover:border-gray-300');
                    if (tabs[k].dataset.tabsTarget === target) {
                        tabs[k].classList.add('text-blue-600', 'border-blue-600');
                        tabs[k].classList.remove('hover:text-gray-600', 'hover:border-gray-300');
                    }
                }
            });
        }
    </script>
</body>
@endsection
