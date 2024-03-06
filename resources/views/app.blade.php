@extends('layouts.app')

@section('content')

<div class="text-center mb-4">
    <h1 class="text-2xl font-semibold">All Elections</h1>
</div>

  <div class="flex flex-col items-center mt-8">
    <!-- First Box -->
    <div class="w-full max-w-md bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 mb-4">
        <div class="flex justify-center pt-4">
          <img class="w-32 h-32 mb-3 rounded-full shadow-lg" src="../../Images/gaming.jpg" alt="gaming tournament"/>
        </div>
        <div class="flex flex-col items-center pb-10">
            <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">Gaming tournament</h5>
            <span class="text-sm text-gray-500 dark:text-gray-400">Fifa 23</span>
            <div class="flex mt-4">
                <button class="px-4 py-2 text-sm font-medium text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Vote</button>
            </div>
        </div>
    </div>

    <!-- Second Box -->
    <div class="w-full max-w-md bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 mb-4">
        <div class="flex justify-center pt-4">
            <img class="w-32 h-32 mb-3 rounded-full shadow-lg" src="/docs/images/people/profile-picture-3.jpg" alt="Delegue de classe"/>
        </div>
        <div class="flex flex-col items-center pb-10">
            <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">Delegue de classe</h5>
            <span class="text-sm text-gray-500 dark:text-gray-400">3rd year</span>
            <div class="flex mt-4">
                <button class="px-4 py-2 text-sm font-medium text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Vote</button>
            </div>
        </div>
    </div>

    <!-- Third Box -->
    <div class="w-full max-w-md bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 mb-4">
        <div class="flex justify-center pt-4">
            <img class="w-32 h-32 mb-3 rounded-full shadow-lg" src="/docs/images/people/profile-picture-3.jpg" alt="Best Student"/>
        </div>
        <div class="flex flex-col items-center pb-10">
            <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">Best Student</h5>
            <span class="text-sm text-gray-500 dark:text-gray-400">3rd Year</span>
            <div class="flex mt-4">
                <button class="px-4 py-2 text-sm font-medium text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Vote</button>
            </div>
        </div>
    </div>
  </div>
@endsection
