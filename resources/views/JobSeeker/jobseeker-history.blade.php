@extends('JobSeeker.layout.main-jobseeker')

@section('title', 'Jobseeker - History') 

@section('content')

<div class="my-4 w-full px-4 lg:px-20 overflow-auto min-h-screen">
    <div class="flex flex-col gap-4 h-full">
        <!-- Header -->
        <div class="flex justify-between gap-3 items-start md:items-end flex-col md:flex-row">
            <div>
                <h1 class="text-2xl lg:text-3xl font-bold">History JobSeeker</h1>
                <p class="text-sm lg:text-base mt-1">Welcome, John Doe. You can see the log activities from all users here.</p>
            </div>
            <div class="flex flex-col gap-2">
                <label for="role" class="text-sm lg:text-base">Filter by status</label>
                <select class="py-2 px-3 border border-yellow-500 rounded-md bg-white text-black" name="role" id="role">
                    <option value="hire">hire</option>
                    <option value="pending">pending</option>
                    <option value="reject">reject</option>
                </select>
            </div>
        </div>

        <!-- Cards -->
        <div class="flex flex-col gap-4 text-black">
            <!-- Card Template -->
            <div class="flex justify-between bg-slate-300 p-3 rounded-lg">
                <div class="flex gap-4">
                    <span class="bg-slate-100 rounded-md p-1 w-16 h-16 flex items-center justify-center overflow-hidden">
                        <img src="" alt="profile-1" class="object-cover w-full h-full">
                    </span>
                    <span class="flex flex-col gap-1">
                        <p class="text-xs">@adam</p>
                        <p class="text-base">Adam Gunawan</p>
                        <p class="text-lg font-bold">SMP</p>
                    </span>
                </div>
                <div class="flex justify-center items-center">
                    <span class="bg-green-600 rounded-full py-1 px-8">
                        <p class="text-white font-medium text-lg">Hire</p>
                    </span>
                </div>
            </div>

            <!-- Duplicate the card template for other statuses -->
            <div class="flex justify-between bg-slate-300 p-3 rounded-lg">
                <div class="flex gap-4">
                    <span class="bg-slate-100 rounded-md p-1 w-16 h-16 flex items-center justify-center overflow-hidden">
                        <img src="" alt="profile-1" class="object-cover w-full h-full">
                    </span>
                    <span class="flex flex-col gap-1">
                        <p class="text-xs">@adam</p>
                        <p class="text-base">Adam Gunawan</p>
                        <p class="text-lg font-bold">SMP</p>
                    </span>
                </div>
                <div class="flex justify-center items-center">
                    <span class="bg-gray-600 rounded-full py-1 px-8">
                        <p class="text-white font-medium text-lg">Pending</p>
                    </span>
                </div>
            </div>

            <div class="flex justify-between bg-slate-300 p-3 rounded-lg">
                <div class="flex gap-4">
                    <span class="bg-slate-100 rounded-md p-1 w-16 h-16 flex items-center justify-center overflow-hidden">
                        <img src="" alt="profile-1" class="object-cover w-full h-full">
                    </span>
                    <span class="flex flex-col gap-1">
                        <p class="text-xs">@adam</p>
                        <p class="text-base">Adam Gunawan</p>
                        <p class="text-lg font-bold">SMP</p>
                    </span>
                </div>
                <div class="flex justify-center items-center">
                    <span class="bg-red-600 rounded-full py-1 px-8">
                        <p class="text-white font-medium text-lg">Reject</p>
                    </span>
                </div>
            </div>

            <!-- Add more cards as needed -->
            <!-- ... -->

        </div>

        <!-- Pagination -->
        <div class="flex justify-between md:flex-row flex-col gap-3 md:items-center mt-6">
            <div>
                <label for="rows" class="mr-2">Rows per page</label>
                <select class="py-2 px-3 bg-yellow-100 text-black rounded-md" name="rows" id="rows">
                    <option value="5">5</option>
                    <option value="10">10</option>
                </select>
            </div>
            <div class="flex gap-2 items-center">
                <button class="py-2 px-4 bg-yellow-100 text-black rounded-md">&lt;</button>
                <span class="py-2 px-4 bg-yellow-100 text-black rounded-md">1</span>
                <span>/ 1</span>
                <button class="py-2 px-4 bg-yellow-100 text-black rounded-md">&gt;</button>
            </div>
        </div>
    </div>
</div>

@endsection
