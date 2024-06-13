@extends('parents.layout.main-parent')

@section('content')

<div class="flex gap-6 lg:gap-14 flex-row relative min-h-screen">
    <!-- CONTENT -->
    <div class="my-8 px-4 w-full lg:w-3/4 xl:w-2/3 mx-auto overflow-auto">
        <div class="flex justify-between gap-3 md:items-end md:flex-row flex-col">
            <div>
                <h1 class="text-xl lg:text-3xl font-bold">Change Password</h1>
            </div>
        </div>

        <div class="mt-4 w-full max-w-lg p-2 mx-auto">
            <div class="flex flex-col gap-3">
                <div class="flex flex-col md:flex-row justify-between items-center">
                    <label for="old-password" class="font-bold md:w-1/3">Old Password :</label>
                    <input type="password" name="old-password" id="old-password" class="border-2 border-blue-500 rounded-lg shadow-md w-full md:w-2/3">
                </div>
                <div class="flex flex-col md:flex-row justify-between items-center">
                    <label for="new-password" class="font-bold md:w-1/3">New Password :</label>
                    <input type="password" name="new-password" id="new-password" class="border-2 border-blue-500 rounded-lg shadow-md w-full md:w-2/3">
                </div>
                <div class="flex flex-col md:flex-row justify-between items-center">
                    <label for="confirm-new-password" class="font-bold md:w-1/3">Confirm New Password :</label>
                    <input type="password" name="confirm-new-password" id="confirm-new-password" class="border-2 border-blue-500 rounded-lg shadow-md w-full md:w-2/3">
                </div>
            </div>
            <div class="mt-8 p-2 flex justify-end gap-3">
                <button class="border-2 bg-white font-semibold px-4 py-1 rounded-lg">Cancel</button>
                <button class="bg-blue-500 text-white font-semibold px-4 py-1 rounded-md">Submit</button>
            </div>
        </div>
    </div>
</div>

@endsection
    
