@extends('layouts.appAdmin')
@section('content')

<div class="flex flex-col px-20 py-10">
    <div class="flex items-center justify-start">
    <a href="/admin/elections" class="px-5 cursor-pointer"><</a><h1 class="p-2 font-bold text-xl">Modifier elections</h1>
    </div>
    <div class="w-full px-8   mx-auto">
        <div class="p-6  w-full border border-gray-300 sm:rounded-md">
        <form
            method="post"
            action="{{url('elections/update/'.$election->id)}}"
            enctype="multipart/form-data"
          >
          @method('PUT')
          @csrf
            <label class="block mb-6">
              <span class="text-gray-700">name</span>
              <input
                name="name"
                value="{{ old('name', $election->name) }}"
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
                    <div class="text-red-700">{{ $message }}</div>
            @enderror
            <!-- Date début -->
            <label class="block mb-6">
                <span class="text-gray-700">Date début</span>
                <input
                    name="start"
                    id="startDate"
                    value="{{ old('start', date('Y-m-d', strtotime($election->start))) }}"
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
                    value="{{ old('end', date('Y-m-d', strtotime($election->end))) }}"
                    type="date"
                    class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                />
            </label>
            @error('end')
                <div class="text-red-700">{{ $message }}</div>
            @enderror

            <label class="block mb-6">
              <span class="text-gray-700">Your photo</span>
              <input
                name="image"
                type="file"
                value="{{ $election->image }}"
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
                update
              </button>
            </div>
            <div>

            </div>
          </form>
        </div>
      </div>

  </div>
  <script>
    // JavaScript to automatically update Date fin when Date début changes
    document.getElementById('startDate').addEventListener('change', function () {
        var startDate = new Date(this.value);
        var endDate = new Date(startDate);
        endDate.setDate(startDate.getDate() + 7);

        // Format the endDate as 'yyyy-MM-dd'
        var formattedEndDate = endDate.toISOString().split('T')[0];

        // Set the value of the endDate input
        document.getElementById('endDate').value = formattedEndDate;
    });
</script>
@endsection
