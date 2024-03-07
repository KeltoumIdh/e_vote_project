@extends('layouts.appAdmin')
@section('content')

<div class="flex flex-col px-20 py-10">
    <div class="flex items-center justify-start">
    <a href="/admin/elections" class="px-5 cursor-pointer"><</a><h1 class="p-2 font-bold text-xl">Ajouter des elections</h1>
    </div>
    <div class="w-full px-8   mx-auto">
        <div class="p-6  w-full border border-gray-300 sm:rounded-md">
        <form
            method="POST"
            action="{{url('elections/add')}}"
            enctype="multipart/form-data"
        >
        {{ csrf_field() }}
        <label class="block mb-6">
            <span class="text-gray-700"> name</span>
              <input
                name="name"
                value="{{ old('name') }}"
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
            @error('name')
                        <div class=" text-red-700 ">{{ $message }}</div>
                    @enderror
            <!-- Date début -->
            <label class="block mb-6">
                <span class="text-gray-700">Date début</span>
                <input
                    name="start"
                    id="startDate"
                    value="{{ old('start') }}"
                    type="date"
                    class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                />
            </label>
            @error('start')
                <div class="text-red-700">{{ $message }}</div>
            @enderror

            <!-- Date fin -->
            <label class="block mb-6">
                <span class="text-gray-700">Date fin</span>
                <input
                    name="end"
                    id="endDate"
                    value="{{ old('end') }}"
                    type="date"
                    class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                />
            </label>
            @error('end')
                <div class="text-red-700">{{ $message }}</div>
            @enderror

            <label class="block mb-6">
              <span class="text-gray-700">photo</span>
              <input
                name="image"
                type="file"
                value="{{ old('image') }}"
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

            @error('image')
            <div class="text-red-700">{{ $message }}</div>
        @enderror



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
  <script>
    document.addEventListener('DOMContentLoaded', function () {
        const startDateInput = document.getElementById('startDate');
        const endDateInput = document.getElementById('endDate');

        startDateInput.addEventListener('change', function () {
            const startDate = new Date(startDateInput.value);
            const endDate = new Date(startDate.getTime() + 7 * 24 * 60 * 60 * 1000); // 7 days in milliseconds

            const endYear = endDate.getFullYear();
            const endMonth = ('0' + (endDate.getMonth() + 1)).slice(-2); // Months are zero-based
            const endDay = ('0' + endDate.getDate()).slice(-2);

            endDateInput.value = `${endYear}-${endMonth}-${endDay}`;
        });
    });
</script>
@endsection
