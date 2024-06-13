@extends('superadmin.layout.main-superadmin')

@section('title', 'Superadmin - Audit') 

@section('content')

<div class="my-4 w-full mr-10 lg:mr-20 overflow-auto">
    <div class="flex justify-between gap-3 md:items-end md:flex-row flex-col">
        <div>
            <h1 class="text-xl lg:text-3xl font-bold">Audit Logs</h1>
            <p class="text-sm lg:text-base">Welcome, John Doe. You can see the log activities from all user here.</p>
        </div>
        <div class="flex flex-col gap-2">
            <label for="role" class="text-sm lg:text-base">Select by role</label>
            <select class="py-2 px-3 border border-yellow-500 rounded-md bg-white text-black" name="role" id="role">
                <option value="Admin">Admin</option>
                <option value="Parents">Parents</option>
                <option value="Job seeker">Job Seeker</option>
                <option value="Superadmin">Superadmin</option>
            </select>
        </div>
    </div>
    <table class="mt-6 w-full">
      <thead class="bg-blue-800 rounded-xl border border-blue-800">
        <tr class="rounded-md">
          <th class="text-white text-left px-3 py-1 lg:px-10 lg:py-3">Username</th>
          <th class="text-white text-left px-3 py-1 lg:px-10 lg:py-3">Role</th>
          <th class="text-white text-left px-3 py-1 lg:px-10 lg:py-3">Actions</th>
          <th class="text-white text-left px-3 py-1 lg:px-10 lg:py-3">Timestamp</th>
        </tr>
      </thead>
      <tbody>
        <tr class="border border-yellow-500">
          <td class="lg:px-10 lg:py-3 px-3 py-1 text-left">@JohnDoe</td>
          <td class="lg:px-10 lg:py-3 px-3 py-1 text-left">Job Seeker</td>
          <td class="lg:px-10 lg:py-3 px-3 py-1 text-left">Insert</td>
          <td class="lg:px-10 lg:py-3 px-3 py-1 text-left">2024-05-14 08:30:00</td>
        </tr>
        <tr class="border border-yellow-500">
          <td class="lg:px-10 lg:py-3 px-3 py-1 text-left">@SarahWilliams</td>
          <td class="lg:px-10 lg:py-3 px-3 py-1 text-left">Admin</td>
          <td class="lg:px-10 lg:py-3 px-3 py-1 text-left">Update</td>
          <td class="lg:px-10 lg:py-3 px-3 py-1 text-left">2024-05-14 08:30:00</td>
        </tr>
        <tr class="border border-yellow-500">
          <td class="lg:px-10 lg:py-3 px-3 py-1 text-left">@EmmaW</td>
          <td class="lg:px-10 lg:py-3 px-3 py-1 text-left">Parents</td>
          <td class="lg:px-10 lg:py-3 px-3 py-1 text-left">Insert</td>
          <td class="lg:px-10 lg:py-3 px-3 py-1 text-left">2024-05-14 08:30:00</td>
        </tr>
        <tr class="border border-yellow-500">
          <td class="lg:px-10 lg:py-3 px-3 py-1 text-left">@KatteWil</td>
          <td class="lg:px-10 lg:py-3 px-3 py-1 text-left">Superdmin</td>
          <td class="lg:px-10 lg:py-3 px-3 py-1 text-left">Delete</td>
          <td class="lg:px-10 lg:py-3 px-3 py-1 text-left">2024-05-14 08:30:00</td>
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
            <span class="py-2 px-4 bg-yellow-100 text-black rounded-md"> < </span>
            <span class="py-2 px-4 bg-yellow-100 text-black rounded-md"> 1 </span>
            <span>/ 1</span>
            <span class="py-2 px-4 bg-yellow-100 rounded-md text-black"> > </span>
        </div>
    </div>
</div>

@endsection
    