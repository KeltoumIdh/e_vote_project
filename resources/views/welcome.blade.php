@extends('layouts.app')
@section('content')

<div class="text-center mb-4">
    <h1 class="text-2xl font-semibold">All Candidates</h1>
</div>

<div class="flex justify-center items-center h-full mt-8">
    <div class="space-y-4">
        <!-- First Box -->
        <div class="max-w-xs bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <div class="flex items-center p-4">
                <img class="w-10 h-10 rounded-full shadow-lg" src="/docs/images/people/profile-picture-5.jpg" alt="">
                <div class="ml-4 font-medium dark:text-white">
                    <div>Participant 1</div>
                    <div class="text-sm text-gray-500 dark:text-gray-400">aaaa</div>
                </div>
            </div>
            <div class="flex justify-end pb-4 pr-4">
                <button onclick="showPasswordInput(this)" class="px-4 py-2 text-sm font-medium text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Vote</button>
            </div>
            <div class="password-input hidden p-4">
                <input type="password" placeholder="Enter your password" class="border border-gray-300 p-2 rounded-md">
                <button class="px-4 py-2 mt-2 text-sm font-medium text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
            </div>
        </div>

        <!-- Second Box -->
        <div class="max-w-xs bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <div class="flex items-center p-4">
                <img class="w-10 h-10 rounded-full shadow-lg" src="/docs/images/people/profile-picture-5.jpg" alt="">
                <div class="ml-4 font-medium dark:text-white">
                    <div>Participant 2</div>
                    <div class="text-sm text-gray-500 dark:text-gray-400">zzzz</div>
                </div>
            </div>
            <div class="flex justify-end pb-4 pr-4">
                <button onclick="showPasswordInput(this)" class="px-4 py-2 text-sm font-medium text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Vote</button>
            </div>
            <div class="password-input hidden p-4">
                <input type="password" placeholder="Enter your password" class="border border-gray-300 p-2 rounded-md">
                <button class="px-4 py-2 mt-2 text-sm font-medium text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
            </div>
        </div>

        <!-- Third Box -->
        <div class="max-w-xs bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <div class="flex items-center p-4">
                <img class="w-10 h-10 rounded-full shadow-lg" src="/docs/images/people/profile-picture-5.jpg" alt="">
                <div class="ml-4 font-medium dark:text-white">
                    <div>Participant 3</div>
                    <div class="text-sm text-gray-500 dark:text-gray-400">eeee</div>
                </div>
            </div>
            <div class="flex justify-end pb-4 pr-4">
                <button onclick="showPasswordInput(this)" class="px-4 py-2 text-sm font-medium text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Vote</button>
            </div>
            <div class="password-input hidden p-4">
                <input type="password" placeholder="Enter your password" class="border border-gray-300 p-2 rounded-md">
                <button class="px-4 py-2 mt-2 text-sm font-medium text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
            </div>
        </div>

        <!-- Fourth Box -->
        <div class="max-w-xs bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <div class="flex items-center p-4">
                <img class="w-10 h-10 rounded-full shadow-lg" src="/docs/images/people/profile-picture-5.jpg" alt="">
                <div class="ml-4 font-medium dark:text-white">
                    <div>Participant 4</div>
                    <div class="text-sm text-gray-500 dark:text-gray-400">rrrr</div>
                </div>
            </div>
            <div class="flex justify-end pb-4 pr-4">
                <button onclick="showPasswordInput(this)" class="px-4 py-2 text-sm font-medium text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Vote</button>
            </div>
            <div class="password-input hidden p-4">
                <input type="password" placeholder="Enter your password" class="border border-gray-300 p-2 rounded-md">
                <button class="px-4 py-2 mt-2 text-sm font-medium text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
            </div>
        </div>

        <!-- Fifth Box -->
        <div class="max-w-xs bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <div class="flex items-center p-4">
                <img class="w-10 h-10 rounded-full shadow-lg" src="/docs/images/people/profile-picture-5.jpg" alt="">
                <div class="ml-4 font-medium dark:text-white">
                    <div>Participant 5</div>
                    <div class="text-sm text-gray-500 dark:text-gray-400">tttt</div>
                </div>
            </div>
            <div class="flex justify-end pb-4 pr-4">
                <button onclick="showPasswordInput(this)" class="px-4 py-2 text-sm font-medium text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Vote</button>
            </div>
            <div class="password-input hidden p-4">
                <input type="password" placeholder="Enter your password" class="border border-gray-300 p-2 rounded-md">
                <button class="px-4 py-2 mt-2 text-sm font-medium text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
            </div>
        </div>

        <!-- Sixth Box -->
        <div class="max-w-xs bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <div class="flex items-center p-4">
                <img class="w-10 h-10 rounded-full shadow-lg" src="/docs/images/people/profile-picture-5.jpg" alt="">
                <div class="ml-4 font-medium dark:text-white">
                    <div>Participant 6</div>
                    <div class="text-sm text-gray-500 dark:text-gray-400">yyyy</div>
                </div>
            </div>
            <div class="flex justify-end pb-4 pr-4">
                <button onclick="showPasswordInput(this)" class="px-4 py-2 text-sm font-medium text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Vote</button>
            </div>
            <div class="password-input hidden p-4">
                <input type="password" placeholder="Enter your password" class="border border-gray-300 p-2 rounded-md">
                <button class="px-4 py-2 mt-2 text-sm font-medium text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
            </div>
        </div>
    </div>
</div>

<script>
    function showPasswordInput(button) {
        var passwordInput = button.parentNode.nextElementSibling;
        var allPasswordInputs = document.querySelectorAll('.password-input');
        
        // Hide all password inputs
        allPasswordInputs.forEach(function(element) {
            element.classList.add('hidden');
        });

        // Show password input of clicked box
        if (passwordInput.classList.contains('hidden')) {
            passwordInput.classList.remove('hidden');
        } else {
            passwordInput.classList.add('hidden');
        }
    }
</script>

@endsection
