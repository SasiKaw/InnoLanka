@extends('projects.layout')

@section('content')
<div class="max-w-4xl mx-auto px-4 py-6 sm:px-0 bg-white">
    <div class="p-6">
        <div class="bg-white p-4 flex justify-between">
            <h5 class="text-3xl font-bold text-gray-900">{{ $projects->title }}</h5>
            <div class="bg-white shadow-lg rounded-lg p-4 w-72">
                <div class="flex items-center">
                    <h6 class="text-md font-semibold text-gray-900 leading-8">Status</h6>
                    <h6 class="ml-6 leading-8 bg-purple-500 text-white text-sm rounded-xl font-semibold p-1">{{ ucfirst($projects->status) }}</h6>
                </div>
                <h6 class="text-md font-semibold text-gray-900 leading-8">Advisor</h6>
                <h6 class="text-md font-semibold text-gray-900 leading-8">Funder</h6>
                <h6 class="text-md font-semibold text-gray-900 leading-8">Investment</h6>
            </div>
        </div>
        <div class="flex items-center justify-start -mt-32 ml-4">
            <i class="fas fa-tags text-green-500 ml-2"></i>
            <p class="text-base font-bold text-blue-500 ml-2">{{ $projects}}</p>
        </div>
        <div class="mt-20">
            <h4 class="text-2xl font-medium text-gray-900">Description</h4>
            <div class="mt-2 p-4 bg-white shadow-lg rounded-lg h-64 overflow-y-auto">
                <p class="text-lg text-gray-800">{{ $projects->description }}</p>
            </div>
        </div>
    </div>
</div>
@endsection


