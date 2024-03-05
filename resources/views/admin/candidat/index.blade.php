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
                <th scope="col" class="px-6 py-4">First</th>
                <th scope="col" class="px-6 py-4">Last</th>
                <th scope="col" class="px-6 py-4">Handle</th>
              </tr>
            </thead>
            <tbody>
              <tr class="border-b border-neutral-200 ">
                <td class="whitespace-nowrap px-6 py-4 font-medium">1</td>
                <td class="whitespace-nowrap px-6 py-4">Mark</td>
                <td class="whitespace-nowrap px-6 py-4">Otto</td>
                <td class="whitespace-nowrap px-6 py-4">@mdo</td>
              </tr>
              <tr class="border-b border-neutral-200 ">
                <td class="whitespace-nowrap px-6 py-4 font-medium">2</td>
                <td class="whitespace-nowrap px-6 py-4">Jacob</td>
                <td class="whitespace-nowrap px-6 py-4">Thornton</td>
                <td class="whitespace-nowrap px-6 py-4">@fat</td>
              </tr>
              <tr class="border-b border-neutral-200 ">
                <td class="whitespace-nowrap px-6 py-4 font-medium">3</td>
                <td class="whitespace-nowrap px-6 py-4">Larry</td>
                <td class="whitespace-nowrap px-6 py-4">Wild</td>
                <td class="whitespace-nowrap px-6 py-4">@twitter</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection
