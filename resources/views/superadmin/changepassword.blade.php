@extends('superadmin.layout.main-superadmin')

@section('title', 'Superadmin - Payment Operator Detail') 

@section('content')

<div class="my-4 w-full mr-10 md:mr-20">
    <div class="flex justify-between items-end">
        <div>
            <h1 class="text-xl lg:text-3xl font-bold">Change Username and Password</h1>
            <p class="text-sm lg:text-base">You can manage your account profile here</p>
        </div>
    </div>
    <div class="form-container">
        <form action="/change-profile" method="POST">
            <div class="flex flex-col gap-3 mt-3">
                <div class="form-row">
                    <label class="label">Username</label>
                    <div class="flex items-center gap-2">
                        <span> : </span>
                        <input type="text" class="input-field" value="DilanPros99">
                    </div>
                </div>
                <div class="form-row">
                    <label class="label">Old Password</label>
                    <div class="flex items-center gap-2">
                        <span> : </span>
                        <input type="password" class="input-field" value="bintangskibidi">
                    </div>
                </div>
                <div class="form-row">
                    <label class="label">New Password</label>
                    <div class="flex items-center gap-2">
                        <span> : </span>
                        <input type="password" class="input-field" value="cihuyanjaymabar">
                    </div>
                </div>
                <div class="form-row">
                    <label class="label">Confirm New Password</label>
                    <div class="flex items-center gap-2">
                        <span> : </span>
                        <input type="password" class="input-field" value="cihuyanjaymabar">
                    </div>
                </div>
                <div class="form-row">
                    <label class="label">Email for Verification Code</label>
                    <div class="flex items-center gap-2">
                        <span> : </span>
                        <input type="email" class="input-field" value="bali93fanny@gmail.com">
                    </div>
                </div>
                <div class="form-row">
                    <label class="label">Verification Code</label>
                    <div class="flex items-center gap-2">
                        <span> : </span>
                        <input type="text" class="input-field" value="12345">
                    </div>
                </div>
                <div class="mt-6 mb-4 flex flex-row justify-end gap-3">
                    <button type="button" class="py-2 px-4 rounded-md border border-blue-700">Decline</button>
                    <button type="button" class="py-2 px-4 rounded-md border border-blue-700">Get Code</button>
                    <button type="submit" class="py-2 px-4 rounded-md bg-blue-700 text-white">Accept</button>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection

    