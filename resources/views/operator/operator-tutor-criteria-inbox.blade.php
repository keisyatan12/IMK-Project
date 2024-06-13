@extends('operator.layout.main-operator')

@section('title', 'Operator - Tutor Criteria Inbox') 

@section('content')

<div class="my-4 w-full px-4 lg:px-20 overflow-auto">
  <div class="flex justify-between md:items-end flex-col md:flex-row">
      <div>
          <h1 class="text-xl lg:text-3xl font-bold">Tutor Management</h1>
          <p class="text-sm lg:text-base">You can manage all section related to private tutor here</p>
          <h2 class="mt-6 text-lg lg:text-xl font-semibold">Tutor Criteria Inbox</h2>
      </div>
      <h1 class="mt-6 text-lg lg:text-xl font-semibold">Sumatera Utara</h1>
  </div>
  <div class="overflow-x-auto mt-6">
      <table class="min-w-full bg-white border border-gray-200">
          <thead class="bg-blue-800">
              <tr>
                  <th class="text-white text-left px-3 lg:px-10 py-1 lg:py-3">Username</th>
                  <th class="text-white text-left px-3 lg:px-10 py-1 lg:py-3">Criteria Submitted</th>
                  <th class="text-white text-left px-3 lg:px-10 py-1 lg:py-3">Timestamp</th>
                  <th class="text-white text-left px-3 lg:px-10 py-1 lg:py-3">Actions</th>
              </tr>
          </thead>
          <tbody>
              <tr class="border border-yellow-500">
                  <td class="px-3 py-1 lg:px-10 lg:py-3 text-left">@JohnDoe</td>
                  <td class="px-3 py-1 lg:px-10 lg:py-3 text-left"><a href="tutor-criteria-inbox.html" class="underline text-blue-700">See details</a></td>
                  <td class="px-3 py-1 lg:px-10 lg:py-3 text-left">2024-05-14 08:30:00</td>
                  <td class="px-3 py-1 lg:px-10 lg:py-3 text-left">
                      <div class="flex items-center gap-2">
                          <button class="py-1 px-3 bg-blue-800 text-white rounded-md">Accept</button>
                          <button class="py-1 px-3 bg-white border-blue-800 border text-black rounded-md">Decline</button>
                      </div>
                  </td>
              </tr>
              <tr class="border border-yellow-500">
                  <td class="px-3 py-1 lg:px-10 lg:py-3 text-left">@SarahWilliams</td>
                  <td class="px-3 py-1 lg:px-10 lg:py-3 text-left"><a href="tutor-criteria-inbox.html" class="underline text-blue-700">See details</a></td>
                  <td class="px-3 py-1 lg:px-10 lg:py-3 text-left">2024-05-14 08:30:00</td>
                  <td class="px-3 py-1 lg:px-10 lg:py-3 text-left">
                      <div class="flex items-center gap-2">
                          <button class="py-1 px-3 bg-blue-800 text-white rounded-md">Accept</button>
                          <button class="py-1 px-3 bg-white border-blue-800 border text-black rounded-md">Decline</button>
                      </div>
                  </td>
              </tr>
              <tr class="border border-yellow-500">
                  <td class="px-3 py-1 lg:px-10 lg:py-3 text-left">@EmmaW</td>
                  <td class="px-3 py-1 lg:px-10 lg:py-3 text-left"><a href="tutor-criteria-inbox.html" class="underline text-blue-700">See details</a></td>
                  <td class="px-3 py-1 lg:px-10 lg:py-3 text-left">2024-05-14 08:30:00</td>
                  <td class="px-3 py-1 lg:px-10 lg:py-3 text-left">
                      <div class="flex items-center gap-2">
                          <button class="py-1 px-3 bg-blue-800 text-white rounded-md">Accept</button>
                          <button class="py-1 px-3 bg-white border-blue-800 border text-black rounded-md">Decline</button>
                      </div>
                  </td>
              </tr>
              <tr class="border border-yellow-500">
                  <td class="px-3 py-1 lg:px-10 lg:py-3 text-left">@KatteWil</td>
                  <td class="px-3 py-1 lg:px-10 lg:py-3 text-left"><a href="tutor-criteria-inbox.html" class="underline text-blue-700">See details</a></td>
                  <td class="px-3 py-1 lg:px-10 lg:py-3 text-left">2024-05-14 08:30:00</td>
                  <td class="px-3 py-1 lg:px-10 lg:py-3 text-left">
                      <div class="flex items-center gap-2">
                          <button class="py-1 px-3 bg-blue-800 text-white rounded-md">Accept</button>
                          <button class="py-1 px-3 bg-white border-blue-800 border text-black rounded-md">Decline</button>
                      </div>
                  </td>
              </tr>
          </tbody>
      </table>
  </div>
  <div class="flex justify-between flex-col md:flex-row gap-3 md:items-center mt-6">
      <div>
          <label for="role">Rows per page</label>
          <select class="py-2 px-3 bg-yellow-100 text-black rounded-md" name="role" id="role">
              <option value="1">1</option>
          </select>
      </div>
      <div class="flex gap-2 flex-row items-center">
          <button class="py-2 px-4 bg-yellow-100 rounded-md text-black">&lt;</button>
          <span class="py-2 px-4 bg-yellow-100 rounded-md text-black">1</span>
          <span>/ 1</span>
          <button class="py-2 px-4 bg-yellow-100 rounded-md text-black">&gt;</button>
      </div>
  </div>
</div>

@endsection
    