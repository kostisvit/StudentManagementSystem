@extends('layouts.app')

@section('content')


<a href="{{ route('student.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 mr-5 float-right rounded">Νέα εγγραφή</a>

<section class="py-10 bg-blueGray-50 mr-5 ml-5 mt-28">
  <h1>Total Items: {{ $students->count() }}</h1>
<!-- component -->
<div class="table w-full p-2">
  <table class="w-full border">
      <thead>
          <tr class="bg-gray-50 border-b">
              <th class="border-r p-2">
                  <input type="checkbox">
              </th>
              <th class="p-2 border-r cursor-pointer text-sm font-thin text-gray-500">
                  <div class="flex items-center justify-center">
                      ID
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l4-4 4 4m0 6l-4 4-4-4" />
                      </svg>
                  </div>
              </th>
              <th class="p-2 border-r cursor-pointer text-sm font-thin text-gray-500">
                  <div class="flex items-center justify-center">
                      Name
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l4-4 4 4m0 6l-4 4-4-4" />
                      </svg>
                  </div>
              </th>
              <th class="p-2 border-r cursor-pointer text-sm font-thin text-gray-500">
                  <div class="flex items-center justify-center">
                      Lastname
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l4-4 4 4m0 6l-4 4-4-4" />
                      </svg>
                  </div>
              </th>
              <th class="p-2 border-r cursor-pointer text-sm font-thin text-gray-500">
                  <div class="flex items-center justify-center">
                      Email
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l4-4 4 4m0 6l-4 4-4-4" />
                      </svg>
                  </div>
              </th>
              <th class="p-2 border-r cursor-pointer text-sm font-thin text-gray-500">
                  <div class="flex items-center justify-center">
                      Age
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l4-4 4 4m0 6l-4 4-4-4" />
                      </svg>
                  </div>
              </th>
              <th class="p-2 border-r cursor-pointer text-sm font-thin text-gray-500">
                <div class="flex items-center justify-center">
                    Address
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l4-4 4 4m0 6l-4 4-4-4" />
                    </svg>
                </div>
            </th>
            <th class="p-2 border-r cursor-pointer text-sm font-thin text-gray-500">
                <div class="flex items-center justify-center">
                    City
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l4-4 4 4m0 6l-4 4-4-4" />
                    </svg>
                </div>
            </th>
            <th class="p-2 border-r cursor-pointer text-sm font-thin text-gray-500">
                <div class="flex items-center justify-center">
                    Country
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l4-4 4 4m0 6l-4 4-4-4" />
                    </svg>
                </div>
            </th>
              <th class="p-2 border-r cursor-pointer text-sm font-thin text-gray-500">
                <div class="flex items-center justify-center">
                    Actions
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l4-4 4 4m0 6l-4 4-4-4" />
                    </svg>
                </div>
            </th>
          </tr>
      </thead>
      <tbody>
          <tr class="bg-gray-50 text-center">
              <td class="p-2 border-r">
                  
              </td>
              <td class="p-2 border-r">
                  <input type="text" class="border p-1">
              </td>
              <td class="p-2 border-r">
                  <input type="text" class="border p-1">
              </td>
              <td class="p-2 border-r">
                  <input type="text" class="border p-1">
              </td>
              <td class="p-2 border-r">
                  <input type="text" class="border p-1">
              </td>
              <td class="p-2">
                  <input type="text" class="border p-1">
              </td>
              <td class="p-2">
                <input type="text" class="border p-1">
            </td>
            <td class="p-2">
                <input type="text" class="border p-1">
            </td>
            <td class="p-2">
                <input type="text" class="border p-1">
            </td>
              
          </tr> 
          @foreach($students as $student)
          <tr class="bg-gray-100 text-center border-b text-sm text-gray-600">
              <td class="p-2 border-r">
                  <input type="checkbox">
              </td>
              <td class="p-2 border-r">
                {{ $student->id }}
              </td>
              <td class="p-2 border-r">
                {{ $student->firstName }}
              </td>
              <td class="p-2 border-r">
                {{ $student->lastName }}
              </td>
              <td class="p-2 border-r">
                {{ $student->email }}
              </td>
              <td class="p-2 border-r">
                {{ $student->age }}
              </td>
              <td class="p-2 border-r">
                {{ $student->address }}
              </td>
              <td class="p-2 border-r">
                {{ $student->city }}
              </td>
              <td class="p-2 border-r">
                {{ $student->country }}
              </td>
              <td>
                  <a href="#" class="bg-blue-500 p-2 text-white hover:shadow-lg text-xs font-thin">Edit</a>
                  <a href="#" class="bg-red-500 p-2 text-white hover:shadow-lg text-xs font-thin">Remove</a>
              </td>
          </tr>
          @endforeach
      </tbody>
  </table>
</div>
  
</section>



@endsection

