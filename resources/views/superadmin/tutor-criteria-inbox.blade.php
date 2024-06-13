@extends('superadmin.layout.main-superadmin')

@section('title', 'Superadmin - Tutor Criteria Inbox') 

@section('content')

<div class="my-4 w-full mr-10 lg:mr-20 overflow-auto">
    <div class="flex justify-between md:items-end md:flex-row flex-col">
        <div>
            <h1 class="text-xl lg:text-3xl font-bold">Tutor Management</h1>
            <p class="text-sm lg:text-base">You can manage all section related to private tutor here</p>

            <h2 class="mt-6 text-lg lg:text-xl font-semibold">Tutor Criteria Inbox</h2>
        </div>
        <div class="flex flex-col gap-2">
            <label for="role" class="text-sm lg:text-base">Filter by province</label>
            <select class="py-2 px-3 border border-yellow-500 rounded-md text-black bg-white" name="role" id="role">
                <option value="Admin">Sumatera Utara</option>
                <option value="Parents">Jawa tengah</option>
                <option value="Job seeker">Kalimantan</option>
                <option value="Superadmin">Bali</option>
            </select>
        </div>
    </div>
    <table class="mt-6 w-full">
      <thead class="bg-blue-800 rounded-xl border border-blue-800">
        <tr class="rounded-md">
          <th class="text-white text-left px-3 lg:px-10 py-1 lg:py-3">Username</th>
          <th class="text-white text-left px-3 lg:px-10 py-1 lg:py-3">Criteria Submitted</th>
          <th class="text-white text-left px-3 lg:px-10 py-1 lg:py-3">Timestamp</th>
          <th class="text-white text-left px-3 lg:px-10 py-1 lg:py-3">Actions</th>
        </tr>
      </thead>
      <tbody>
        <tr class="border border-yellow-500">
          <td class="lg:px-10 px-3 py-1 lg:py-3 text-left">@JohnDoe</td>
          <td class="lg:px-10 px-3 py-1 lg:py-3 text-left"><a href="tutor-criteria-inbox.html" class="underline text-blue-700">See details</a></td>
          <td class="lg:px-10 px-3 py-1 lg:py-3 text-left">2024-05-14 08:30:00</td>
          <td class="lg:px-10 px-3 py-1 lg:py-3 text-left">
            <div class="flex items-center gap-2">
                <button class="py-1 px-3 bg-blue-800 text-white rounded-md">Accept</button>
                <button class="py-1 px-3 bg-white border-blue-800 text-black border rounded-md">Decline</button>
            </div>
          </td>
        </tr>
        <tr class="border border-yellow-500">
          <td class="lg:px-10 px-3 py-1 lg:py-3 text-left">@SarahWilliams</td>
          <td class="lg:px-10 px-3 py-1 lg:py-3 text-left"><a href="tutor-criteria-inbox.html" class="underline text-blue-700">See details</a></td>
          <td class="lg:px-10 px-3 py-1 lg:py-3 text-left">2024-05-14 08:30:00</td>
          <td class="lg:px-10 px-3 py-1 lg:py-3 text-left">
            <div class="flex items-center gap-2">
                <button class="py-1 px-3 bg-blue-800 text-white rounded-md">Accept</button>
                <button class="py-1 px-3 bg-white border-blue-800 border text-black rounded-md">Decline</button>
            </div>
          </td>
        </tr>
        <tr class="border border-yellow-500">
          <td class="lg:px-10 px-3 py-1 lg:py-3 text-left">@EmmaW</td>
          <td class="lg:px-10 px-3 py-1 lg:py-3 text-left"><a href="tutor-criteria-inbox.html" class="underline text-blue-700">See details</a></td>
          <td class="lg:px-10 px-3 py-1 lg:py-3 text-left">2024-05-14 08:30:00</td>
          <td class="lg:px-10 px-3 py-1 lg:py-3 text-left">
            <div class="flex items-center gap-2">
                <button class="py-1 px-3 bg-blue-800 text-white rounded-md">Accept</button>
                <button class="py-1 px-3 bg-white border-blue-800 border rounded-md text-black">Decline</button>
            </div>
          </td>
        </tr>
        <tr class="border border-yellow-500">
          <td class="lg:px-10 px-3 py-1 lg:py-3 text-left">@KatteWil</td>
          <td class="lg:px-10 px-3 py-1 lg:py-3 text-left"><a href="tutor-criteria-inbox.html" class="underline text-blue-700">See details</a></td>
          <td class="lg:px-10 px-3 py-1 lg:py-3 text-left">2024-05-14 08:30:00</td>
          <td class="lg:px-10 px-3 py-1 lg:py-3 text-left">
            <div class="flex items-center gap-2">
                <button class="py-1 px-3 bg-blue-800 text-white rounded-md">Accept</button>
                <button class="py-1 px-3 bg-white border-blue-800 border rounded-md text-black">Decline</button>
            </div>
          </td>
        </tr>
      </tbody>
    </table>
    <div class="flex justify-between md:flex-row flex-col gap-3 md:items-center mt-6">
        <div>
            <label for="role">Rows per page</label>
            <select class="py-2 px-3 bg-yellow-100 text-black rounded-md" name="role" id="role">
                <option value="1">1</option>
            </select>
        </div>
        <div class="flex gap-2 flex-row items-center">
            <span class="py-2 px-4 bg-yellow-100 rounded-md text-black"> < </span>
            <span class="py-2 px-4 bg-yellow-100 rounded-md text-black"> 1 </span>
            <span>/ 1</span>
            <span class="py-2 px-4 bg-yellow-100 rounded-md text-black"> > </span>
        </div>
    </div>
</div>
@endsection
    