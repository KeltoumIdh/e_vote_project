@extends('layouts.appAdmin')
@section('content')

<div class="flex flex-col px-20 py-10">
    <div class="flex items-center justify-start">
    <a href="/admin/candidats" class="px-5 cursor-pointer"><</a><h1 class="p-2 font-bold text-xl">Modifier candidats</h1>
    </div>
    <div class="w-full px-8   mx-auto">
        <div class="p-6  w-full border border-gray-300 sm:rounded-md">
        <form
            method="get"
            action="https://herotofu.com/start"
            enctype="multipart/form-data"
          >
          @csrf
            <label class="block mb-6">
              <span class="text-gray-700">Your name</span>
              <input
                name="name"
                type="text"
                class="
                  block
                  w-full
                  mt-1
                  border-gray-300
                  rounded-md
                  shadow-sm
                  focus:border-indigo-300
                  focus:ring
                  focus:ring-indigo-200
                  focus:ring-opacity-50
                "
                placeholder="Joe Bloggs"
              />
            </label>
            <label class="block mb-6">
              <span class="text-gray-700"
                >choisie une Election</span
              >
              <select
                name="present"
                class="py-2
                  block
                  w-full
                  mt-1
                  border-gray-300
                  rounded-md
                  shadow-sm
                  focus:border-indigo-300
                  focus:ring
                  focus:ring-indigo-200
                  focus:ring-opacity-50
                "
              >
                <option>gaming club</option>
                <option>shcool delege</option>
                <option>art club</option>
                <option>football club</option>
              </select>
            </label>
            <label class="block mb-6">
              <span class="text-gray-700">Your photo</span>
              <input
                name="photo"
                type="file"
                class="
                  block
                  w-full
                  mt-1
                  focus:border-indigo-300
                  focus:ring
                  focus:ring-indigo-200
                  focus:ring-opacity-50
                "
              />
            </label>



            <div class="mb-6">
              <button
                type="submit"
                class="text-white flex items-center bg-gray-900 hover:bg-gray-500 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-1 mr-2 "
              >
                Create
              </button>
            </div>
            <div>

            </div>
          </form>
        </div>
      </div>

  </div>
@endsection
