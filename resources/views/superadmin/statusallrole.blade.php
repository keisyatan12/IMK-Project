@extends('superadmin.layout.main-superadmin')

@section('title', 'Superadmin - Status All Role') 

@section('content')

<div class="my-4 w-full mr-10 lg:mr-20 overflow-auto">
    <div class="flex justify-between md:items-end md:flex-row flex-col">
        <div>
            <h1 class="text-xl lg:text-3xl font-bold">Edit Status All Role</h1>
            <p class="text-sm lg:text-base">You can manage all roles here</p>

            <h2 class="mt-6 text-lg lg:text-xl font-semibold">Role List</h2>
        </div>
    </div>
    <table class="mt-6 w-full">
        <thead class="bg-blue-800 rounded-xl border border-blue-800">
            <tr class="rounded-md">
                <th class="text-white text-center px-3 lg:px-10 py-1 lg:py-3">Username</th>
                <th class="text-white text-center px-3 lg:px-10 py-1 lg:py-3">Province</th>
                <th class="text-white text-center px-3 lg:px-10 py-1 lg:py-3">Status</th>
                <th class="text-white text-center px-3 lg:px-10 py-1 lg:py-3">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr class="border border-yellow-500">
                <td class="lg:px-10 px-3 py-1 lg:py-3 text-center">FannyLightborn</td>
                <td class="lg:px-10 px-3 py-1 lg:py-3 text-center">Bali</a></td>
                <td class="lg:px-10 px-3 py-1 lg:py-3 text-center">SuperAdmin</td>
                <td class="lg:px-10 px-3 py-1 lg:py-3 text-center">
                    <div class="flex-container">
                        <button class="py-1 px-3 bg-white border-blue-800 text-black border rounded-md">Change
                            Roles</button>
                    </div>
                </td>
            </tr>
            <tr class="border border-yellow-500">
                <td class="lg:px-10 px-3 py-1 lg:py-3 text-center">Moskov</td>
                <td class="lg:px-10 px-3 py-1 lg:py-3 text-center">Bali</a></td>
                <td class="lg:px-10 px-3 py-1 lg:py-3 text-center">Operator</td>
                <td class="lg:px-10 px-3 py-1 lg:py-3 text-center">
                    <div class="flex-container">
                        <button class="py-1 px-3 bg-white border-blue-800 border text-black rounded-md">Change
                            Roles</button>
                    </div>
                </td>
            </tr>
            <tr class="border border-yellow-500">
                <td class="lg:px-10 px-3 py-1 lg:py-3 text-center">Cecilion</td>
                <td class="lg:px-10 px-3 py-1 lg:py-3 text-center">North Sumatera</a></td>
                <td class="lg:px-10 px-3 py-1 lg:py-3 text-center">Operator</td>
                <td class="lg:px-10 px-3 py-1 lg:py-3 text-center">
                    <div class="flex-container">
                        <button class="py-1 px-3 bg-white border-blue-800 text-black border rounded-md">Change
                            Roles</button>
                    </div>
                </td>
            </tr>
            <tr class="border border-yellow-500">
                <td class="lg:px-10 px-3 py-1 lg:py-3 text-center">YuZhong</td>
                <td class="lg:px-10 px-3 py-1 lg:py-3 text-center">North Sumatera</a></td>
                <td class="lg:px-10 px-3 py-1 lg:py-3 text-center">Operator</td>
                <td class="lg:px-10 px-3 py-1 lg:py-3 text-center">
                    <div class="flex-container">
                        <button class="py-1 px-3 bg-white border-blue-800 text-black border rounded-md ">Change
                            Roles</button>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
    <div class="flex justify-end md:flex-row flex-col gap-3 md:items-center mt-6">
        <div class="flex gap-2 flex-row items-center">
            <span class="py-2 px-4 bg-yellow-100 rounded-md text-black">
                < </span>
                    <span class="py-2 px-4 bg-yellow-100 rounded-md text-black"> 1 </span>
                    <span>/ 5</span>
                    <span class="py-2 px-4 bg-yellow-100 rounded-md text-black"> > </span>
        </div>
    </div>
</div>
@endsection
    
