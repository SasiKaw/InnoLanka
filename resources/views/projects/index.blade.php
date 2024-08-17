@extends('projects.layout')

@section('content')
    <div class="mx-auto max-w-6xl px-4 sm:px-6 lg:px-8">
        <div class="mt-6 flex items-center justify-between rounded-t-xl bg-white p-4 shadow-sm">
            <h1 class="text-3xl font-bold">John's Dashboard</h1>
        </div>

        @if(session('flash-message'))
            <div class="fixed inset-0 flex items-center justify-center">
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative transform scale-0">
                    <strong class="font-bold">Success!</strong>
                    <span class="block sm:inline">{{ session('flash-message') }}</span>
                    <button class="absolute bottom-0 left-1/2 transform -translate-x-1/2 px-4 py-3 bg-green-500 text-white rounded" onclick="this.parentElement.parentElement.remove()">
                        Okay
                    </button>
                </div>
            </div>
        @endif

        @if(session('update_message'))
            <div class="fixed inset-0 flex items-center justify-center">
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative transform scale-0">
                    <strong class="font-bold">Success!</strong>
                    <span class="block sm:inline">{{ session('update_message') }}</span>
                    <button class="absolute bottom-0 left-1/2 transform -translate-x-1/2 px-4 py-3 bg-green-500 text-white rounded" onclick="this.parentElement.parentElement.remove()">
                        Okay
                    </button>
                </div>
            </div>
        @endif

        <div class="grid grid-cols-1 gap-4 rounded-b-xl bg-white p-4 shadow-sm md:grid-cols-3">

        </div>

        <div class="mt-10">
            <div class="bg-white shadow overflow-hidden sm:rounded-lg">
                <div class="p-4">
                    <div class="align-middle inline-block min-w-full">
                        <div class="shadow overflow-hidden sm:rounded-lg">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead>
                                    <tr>
                                        <th
                                            class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                            #</th>
                                        <th
                                            class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                            Title</th>
                                        <th class="px-6 py-3 bg-gray-50"></th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    @foreach ($projects as $item)
                                        <tr>
                                            <td class="px-6 py-4 whitespace-no-wrap">{{ $loop->iteration }}</td>
                                            <td class="px-6 py-4 whitespace-no-wrap">
                                                <div class="flex items-center space-x-3">
                                                    <div
                                                        class="text-sm leading-5 font-medium text-gray-900 bg-blue-100 rounded-full py-1 px-3">
                                                        {{ $item->title }}</div>
                                                    <div class="flex justify-center">
                                                        <a href="{{ url('/projects/' . $item->id) }}"
                                                            class="text-indigo-600 hover:text-indigo-900 mr-2"
                                                            title="View project idea ">View</a>
                                                        <a href="{{ url('/projects/' . $item->id . '/edit') }}"
                                                            class="text-indigo-600 hover:text-indigo-900"
                                                            title="Edit project idea">Edit</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td
                                                class="px-6 py-4 whitespace-no-wrap text-right text-sm leading-5 font-medium">
                                                <form method="POST" action="{{ url('/projects' . '/' . $item->id) }}"
                                                    accept-charset="UTF-8" class="inline" style="display:inline">
                                                    {{ method_field('DELETE') }}
                                                    {{ csrf_field() }}
                                                    <button type="submit" class="text-white p-2 bg-red-600 rounded-xl hover:text-red-900"
                                                        title="Delete project idea"
                                                        onclick="return confirm('Confirm delete?')">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
