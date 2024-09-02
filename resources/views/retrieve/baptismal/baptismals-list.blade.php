@extends('layouts.app')

@section('content')
    <div class="header flex justify-between">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Register>Baptismal
        </h2>
        <div class="">

        </div>
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
                <th class="px-4 py-2 border-b-2 border-gray-300 text-left text-gray-600">Fullname</th>
                <th class="px-4 py-2 border-b-2 border-gray-300 text-left text-gray-600">Address</th>
                <th class="px-4 py-2 border-b-2 border-gray-300 text-left text-gray-600">Sex</th>
                <th class="px-4 py-2 border-b-2 border-gray-300 text-left text-gray-600">Birthdate</th>
                <th class="px-4 py-2 border-b-2 border-gray-300 text-left text-gray-600">Date of Baptism</th>
                <th class="px-4 py-2 border-b-2 border-gray-300 text-left text-gray-600">Action</th>
            </tr>
        </thead>
        <tbody id="baptismalTableList">
            @foreach ($baptismals as $baptismal)
                <tr class="bg-gray-100 border-b border-gray-200">
                    <td class="px-4 py-2">{{ $baptismal->parishioner->fullname }}</td>
                    <td class="px-4 py-2">{{ $baptismal->parishioner->residence }}</td>
                    <td class="px-4 py-2">{{ $baptismal->parishioner->sex }}</td>
                    <td class="px-4 py-2">{{ $baptismal->parishioner->date_of_birth }}</td>
                    <td class="px-4 py-2">{{ $baptismal->date_of_baptism }}</td>
                    <td class="px-4 py-2"><a href="/retrieve/baptismal/{{$baptismal->id}}">open</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
