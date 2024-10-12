@extends('layouts.app')

@section('content')
    <div class="header flex justify-between">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Receipts>
        </h2>
        {{-- <div class="flex border border-gray-300 rounded-full w-max overflow-hidden">
            <form class="flex"
                hx-get="/api/confirmations"
                hx-swap="innerHTML"
                hx-trigger="keyup, submit, change"
                hx-target="#table">
                <select id="field" name="field" required class="p-2 px-4 border-0 outline-none">
                    <option value="fullname">by name</option>
                    <option value="date_of_birth">by birthdate</option>
                    <option value="residence">by address</option>
                    <option value="more">...more</option>
                </select>
                <div class="border-l border-gray-300"></div>
                <input type="text" name="filter" placeholder="Search..." class="py-2 px-6 border-0 outline-none" autocomplete="off">
            </form>
        </div> --}}
    </div>

    <div class="max-w-2xl mx-auto mt-10 bg-white p-8 shadow-md rounded-lg">
        <h2 class="text-2xl font-semibold text-gray-800 mb-6">Receipts Form</h2>
        <form action="/receipt/create" method="POST" class="space-y-6">
            @csrf
            @method('POST')

            <!-- name -->
            <div class="mb-4">
                <label for="name" class="block mb-2">Name</label>
                <input type="text" id="name" class="w-full p-2 border border-gray-300 rounded" name="name">
            </div>

            <!-- amount -->
            <div class="mb-4">
                <label for="amount" class="block mb-2">Amount</label>
                <input type="number" id="amount" class="w-full p-2 border border-gray-300 rounded" name="amount">
            </div>

            <!-- date_paid -->
            <div class="mb-4">
                <label for="date_paid" class="block mb-2">Date Paid</label>
                <input type="date" id="date_paid" class="w-full p-2 border border-gray-300 rounded" name="date_paid">
            </div>

            <!-- receivers_name -->
            <div class="mb-4">
                <label for="receivers_name" class="block mb-2">Received By</label>
                <input type="text" id="receivers_name" class="w-full p-2 border border-gray-300 rounded" name="receivers_name">
            </div>

            <!-- church -->
            <div class="hidden">
                <label for="church_id" class="block text-sm font-medium text-gray-700">Church</label>
                <input type="number" name="church_id" id="church_id" class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500" value="{{ Auth::user()->church->id }}">
            </div>

            <button type="submit" class="w-full py-2 px-4 bg-blue-600 text-white font-semibold rounded-md shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                Submit
            </button>
        </form>
    </div>

@endsection
