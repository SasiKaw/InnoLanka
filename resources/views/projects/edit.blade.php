@extends('projects.layout')
@section('content')

<div class="max-w-4xl mx-auto px-4 py-6 sm:px-0 bg-white shadow sm:rounded-lg">
    <div class="px-4 py-5 sm:px-6 bg-gray-100 border-b border-gray-200">
        <h3 class="text-lg leading-6 font-medium text-gray-900">Project Idea Page</h3>
    </div>
    <div class="px-4 py-5 sm:p-6">
        <form action="{{ url('projects/' .$projects->id) }}" method="post">
            {!! csrf_field() !!}
            @method("PATCH")
            <input type="hidden" name="id" value="{{$projects->id}}" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full h-10 pl-2 shadow-sm sm:text-sm border-gray-300 rounded-md">

            <div class="mb-4">
                <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                <input type="text" name="title" id="title" value="{{$projects->title}}" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full h-10 pl-2 shadow-sm sm:text-sm border-gray-300 rounded-md">
            </div>

            <div class="mb-4">
                <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                <input type="text" name="description" id="description" value="{{$projects->description}}" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full h-10 pl-2 shadow-sm sm:text-sm border-gray-300 rounded-md">
            </div>

            <div class="mb-4">
                <label for="category" class="block text-sm font-medium text-gray-700">Category</label>
                <input type="text" name="category" id="category" value="{{$projects->category}}" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full h-10 pl-2 shadow-sm sm:text-sm border-gray-300 rounded-md">
            </div>

            <div class="mb-4">
                <label for="status" class="block text-sm font-medium text-gray-700">Status</label>
                <input type="text" name="status" id="status" value="{{$projects->status}}" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full h-10 pl-2 shadow-sm sm:text-sm border-gray-300 rounded-md">
            </div>

            <div class="flex justify-end">
                <input type="submit" value="Update" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
            </div>
        </form>
    </div>
</div>

@stop
