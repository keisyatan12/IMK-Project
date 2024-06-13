@extends('superadmin.layout.main-superadmin')

@section('title', 'Superadmin - Add Operator') 

@section('content')

<div class="my-4 w-full mr-10 md:mr-20">
    <div class="flex justify-between items-end">
        <div>
            <h1 class="text-xl lg:text-3xl font-bold">Add Operator</h1>
            <p class="text-sm lg:text-base">You can add operator here</p>
        </div>
    </div>
    <div class="form-container">
        <form action="/change-profile" method="POST">
            <div class="flex flex-col gap-3 mt-3">
                <div class="form-row">
                    <label class="label">Operator Name</label>
                    <div class="flex items-center gap-2">
                        <span> : </span>
                        <input type="text" class="input-field" value="Mobazane">
                    </div>
                </div>
                <div class="form-row">
                    <label class="label">Province</label>
                    <div class="flex items-center gap-2">
                        <span> : </span>
                        <input type="email" class="input-field" value="Bali">
                    </div>
                </div>
                <div class="form-row">
                    <label class="label">Username</label>
                    <div class="flex items-center gap-2">
                        <span> : </span>
                        <input type="email" class="input-field" value="MobaMobazane">
                    </div>
                </div>
                <div class="form-row">
                    <label class="label">Password</label>
                    <div class="flex items-center gap-2">
                        <span> : </span>
                        <input type="password" class="input-field" value="yakalibos">
                    </div>
                </div>
                <div class="form-row">
                    <label class="label">Email Operator</label>
                    <div class="flex items-center gap-2">
                        <span> : </span>
                        <input type="email" class="input-field" value="Mobazane@gmail.com">
                    </div>
                </div>
                <div class="mt-6 mb-4 flex flex-row justify-end gap-3">
                    <button type="button" class="py-2 px-4 rounded-md border border-blue-700">Cancel</button>
                    <button type="submit" class="py-2 px-4 rounded-md bg-blue-700 text-white">Add</button>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection
    