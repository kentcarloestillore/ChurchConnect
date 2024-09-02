@extends('layouts.app')

@section('content')
    <div name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Register') }}
        </h2>
    </div>

    {{-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div> --}}

    <table class="min-w-3/5 bg-white shadow-md rounded-lg mt-3 mx-auto">
        <thead>
            <tr>
                <th class="px-4 py-2 border-b-2 border-gray-300 text-left text-gray-600">Husband</th>
                <th class="px-4 py-2 border-b-2 border-gray-300 text-left text-gray-600">Wife</th>
                <th class="px-4 py-2 border-b-2 border-gray-300 text-left text-gray-600">Address</th>
                <th class="px-4 py-2 border-b-2 border-gray-300 text-left text-gray-600">Place of Marriage</th>
                <th class="px-4 py-2 border-b-2 border-gray-300 text-left text-gray-600">Date of Marriage</th>
                <th class="px-4 py-2 border-b-2 border-gray-300 text-left text-gray-600">Action</th>
            </tr>
        </thead>
        <tbody id="marriageTableList">
            @foreach ($marriages as $marriage)
                <tr class="bg-gray-100 border-b border-gray-200 fade-me-out">
                    <td class="px-4 py-2">{{ $marriage->husband->fullname ?? 'N/A'}}</td>
                    <td class="px-4 py-2">{{ $marriage->wife->fullname ?? 'N/A'}}</td>
                    <td class="px-4 py-2">{{ $marriage->husband->residence }}</td>
                    <td class="px-4 py-2">{{ $marriage->place_of_marriage }}</td>
                    <td class="px-4 py-2">{{ $marriage->date_of_marriage }}</td>
                    <td class="px-4 py-2"><a href="/retrieve/marriage/{{$marriage->id}}">open</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
