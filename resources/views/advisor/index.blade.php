@extends('advisor.layout')

@section('content')
    <!-- Main Content -->
    <div class="mx-auto max-w-6xl px-4 sm:px-6 lg:px-8">
        <div class="mt-6 flex items-center justify-between rounded-t-xl bg-white p-4 shadow-sm">
            <h1 class="text-3xl font-bold">John's Dashboard</h1>
        </div>

        <div class="grid grid-cols-1 gap-4 ml-64 rounded-b-xl bg-white p-4 shadow-sm md:grid-cols-3">
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
                    <p class="text-sm text-gray-600">Reviewed projects</p>
                    <p class="text-xl font-semibold">0</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Search Projects Button -->
    <div class="text-center mt-10">
        <button class="bg-blue-500 text-white px-6 py-2 rounded-full text-lg hover:bg-blue-600 transition-colors">Search
            Project Ideas</button>
    </div>
    </div>
    </div>
@endsection
