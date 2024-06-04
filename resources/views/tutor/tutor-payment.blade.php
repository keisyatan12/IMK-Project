@extends('tutor.layout.maintutor')
@section('title','Tutor - Pembayaran')
@section('content')
<div class="w-full my-4 mr-10 lg:mr-20 overflow-auto flex flex-col">
    <div class="my-4 w-full mr-10 md:mr-20 overflow-auto">
        <div class="flex justify-between md:items-end flex-col md:flex-row">
            <div>
                <h1 class="text-xl lg:text-3xl font-bold">Payment</h1>
                <p class="text-sm lg:text-base">You can check all payment status here</p>
            </div>

        </div>
        <table class="mt-6 w-full">
            <thead class="bg-blue-800 rounded-xl border border-blue-800">
                <tr class="rounded-md">
                    <th class="text-white text-left px-3 py-1 lg:px-10 lg:py-3">Username</th>
                    <th class="text-white text-left px-3 py-1 lg:px-10 lg:py-3">Province</th>
                    <th class="text-white text-left px-3 py-1 lg:px-10 lg:py-3">Payment date</th>
                    <th class="text-white text-left px-3 py-1 lg:px-10 lg:py-3">Status</th>
                    <th class="text-white text-left px-3 py-1 lg:px-10 lg:py-3">Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr class="border border-yellow-500">
                    <td class="lg:px-10 lg:py-3 px-3 py-1 text-left">@JohnDoe</td>
                    <td class="lg:px-10 lg:py-3 px-3 py-1 text-left">Sumatera Utara</td>
                    <td class="lg:px-10 lg:py-3 px-3 py-1 text-left">-</td>
                    <td class="lg:px-10 lg:py-3 px-3 py-1 text-left">
                        <p class="py-2 px-2 rounded-md text-sm bg-red-300 text-black text-center">Not Completed
                        </p>
                    </td>
                    <td class="lg:px-10 lg:py-3 px-3 py-1 text-left"><a href="payment-for-operator-detaill.html"
                            class="underline text-blue-700">See details</a></td>
                </tr>
                <tr class="border border-yellow-500">
                    <td class="lg:px-10 lg:py-3 px-3 py-1 text-left">@SarahWiliams</td>
                    <td class="lg:px-10 lg:py-3 px-3 py-1 text-left">Sumatera Utara</td>
                    <td class="lg:px-10 lg:py-3 px-3 py-1 text-left">1 january 2024</td>
                    <td class="lg:px-10 lg:py-3 px-3 py-1 text-left">
                        <p class="py-2 px-2 rounded-md text-sm bg-green-300 text-black text-center">Completed
                        </p>
                    </td>
                    <td class="lg:px-10 lg:py-3 px-3 py-1 text-left"><a href="payment-for-operator-detaill.html"
                            class="underline text-blue-700">See details</a></td>
                </tr>
                <tr class="border border-yellow-500">
                    <td class="lg:px-10 lg:py-3 px-3 py-1 text-left">@EmmaW</td>
                    <td class="lg:px-10 lg:py-3 px-3 py-1 text-left">Sumatera Utara</td>
                    <td class="lg:px-10 lg:py-3 px-3 py-1 text-left">1 january 2024</td>
                    <td class="lg:px-10 lg:py-3 px-3 py-1 text-left">
                        <p class="py-2 px-2 rounded-md text-sm bg-green-300 text-black text-center">Completed
                        </p>
                    </td>
                    <td class="lg:px-10 lg:py-3 px-3 py-1 text-left"><a href="payment-for-operator-detaill.html"
                            class="underline text-blue-700">See details</a></td>
                </tr>
                <tr class="border border-yellow-500">
                    <td class="lg:px-10 lg:py-3 px-3 py-1 text-left">@KatteWil</td>
                    <td class="lg:px-10 lg:py-3 px-3 py-1 text-left">Sumatera Utara</td>
                    <td class="lg:px-10 lg:py-3 px-3 py-1 text-left">1 january 2024</td>
                    <td class="lg:px-10 lg:py-3 px-3 py-1 text-left">
                        <p class="py-2 px-2 rounded-md text-sm bg-green-300 text-black text-center">Completed
                        </p>
                    </td>
                    <td class="lg:px-10 lg:py-3 px-3 py-1 text-left"><a href="payment-for-operator-detaill.html"
                            class="underline text-blue-700">See details</a></td>
                </tr>
            </tbody>
        </table>

        <div class="flex justify-between gap-3 md:items-center md:flex-row flex-col mt-6">
            <div>
                <label for="role">Rows per page</label>
                <select class="py-2 px-3 bg-yellow-100 text-black rounded-md" name="role" id="role">
                    <option value="1">1</option>
                </select>
            </div>
            <div class="flex gap-2 flex-row items-center">
                <span class="py-2 px-4 bg-yellow-100 rounded-md text-black">
                    < </span>
                        <span class="py-2 px-4 bg-yellow-100 rounded-md text-black"> 1 </span>
                        <span>/ 1</span>
                        <span class="py-2 px-4 bg-yellow-100 rounded-md text-black"> > </span>
            </div>
        </div>
    </div>

</div>

@endsection