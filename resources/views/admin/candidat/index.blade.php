@extends('layouts.appAdmin')
@section('content')

<div class="flex flex-col px-6 py-10">
    <div class="flex justify-between">
    <h1 class="p-2 font-bold text-xl">les candidats</h1>
    <a href="/admin/candidats/add" class="text-white flex items-center bg-gray-900 hover:bg-gray-500 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-1 mr-2 ">Ajouter</a>
    </div>
    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
      <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
        <div class="overflow-hidden">
          <table
            class="min-w-full text-left text-sm border font-light text-surface ">
            <thead
              class="border-b border-neutral-200 font-medium ">
              <tr>
                <th scope="col" class="px-6 py-4">#</th>
                <th scope="col" class="px-6 py-4">name</th>
                <th scope="col" class="px-6 py-4">election</th>
                <th scope="col" class="px-6 py-4">action</th>
              </tr>
            </thead>
            @foreach ($candidats as $candid)
            <tbody>
              <tr class="border-b border-neutral-200 ">
                <td class="whitespace-nowrap px-6 py-4 font-medium flex items-center">
                    <img src="{{ asset('assets/uploads/candidats/' . $candid->image) }}" alt="Candidate Image" class="w-10 h-10 mr-2">
                    {{ $candid->id }}
                </td>
                <td class="whitespace-nowrap px-6 py-4">{{ $candid->name }}</td>
                <td class="whitespace-nowrap px-6 py-4">{{ $candid->election->name }}</td>
                <td class="whitespace-nowrap px-6 py-4 flex">
                    <a href="{{ url('candidats/edit/'.$candid->id) }}" class="text-white flex items-center bg-green-600 hover:bg-gray-900 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-1 mr-2 ">edit</a>
                    <a href="{{ url('candidats/delete/'.$candid->id) }}" class="text-white flex items-center bg-red-600 hover:bg-gray-900 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-1 mr-2 ">delete</a>
                </td>
              </tr>
                @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection
