
@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')

    <h1 class="text-2xl sm:text-3xl font-bold text-gray-800 mb-2">
        Welcome to Dashboard
    </h1>

    <p class="text-gray-600 mb-6">
        This page uses a reusable Laravel Blade layout.
    </p>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">

        <div class="bg-white p-6 rounded-xl shadow">
            <p class="text-gray-500">Total Users</p>
            <p class="text-3xl font-bold text-blue-600 mt-2">120</p>
        </div>

        <div class="bg-white p-6 rounded-xl shadow">
            <p class="text-gray-500">Total Orders</p>
            <p class="text-3xl font-bold text-green-600 mt-2">85</p>
        </div>

        <div class="bg-white p-6 rounded-xl shadow">
            <p class="text-gray-500">Total Revenue</p>
            <p class="text-3xl font-bold text-purple-600 mt-2">$950</p>
        </div>

    </div>

@endsection
