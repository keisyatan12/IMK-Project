@extends('JobSeeker.layout.main-jobseeker')

@section('title', 'Jobseeker - Job Seeker') 

@section('content')

<div class="my-4 px-4 w-full mr-10 lg:mr-20 overflow-auto">
    <div class="flex justify-between gap-3 md:items-end md:flex-row flex-col">
        <div>
            <h1 class="text-xl lg:text-3xl font-bold">Change Password</h1>
        </div>
    </div>

    <div class="mt-4 w-[30rem] h-48 p-2">
        <div class="flex flex-col gap-3">
            <div class="flex justify-between items-center">
                <label for="" class="font-bold">Old Password :</label>
                <input type="text" name="" id=""
                    class="border-2 border-blue-500 rounded-lg shadow-md">
            </div>
            <div class="flex justify-between items-center">
                <label for="" class="font-bold">New Password :</label>
                <input type="text" name="" id=""
                    class="border-2 border-blue-500 rounded-lg shadow-md">
            </div>
            <div class="flex justify-between items-center">
                <label for="" class="font-bold">Confirm New Password :</label>
                <input type="text" name="" id=""
                    class="border-2 border-blue-500 rounded-lg shadow-md">
            </div>
        </div>
        <div class="mt-16 p-2 flex justify-end gap-3">
            <div class="">
                <button class="border-2 bg-white font-semibold px-4 py-1 rounded-lg">Cancel</button>
            </div>
            <div class="">
                <button class="bg-blue-500 text-white font-semibold px-4 py-1 rounded-md">Submit</button>
            </div>
        </div>
    </div>
</div>


@endsection


