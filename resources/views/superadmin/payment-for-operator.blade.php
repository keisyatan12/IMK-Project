<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/@heroicons/react@1.0.5/dist/index.css" rel="stylesheet">
    @vite('resources/css/app.css')
    @vite('resources/css/output.css')
    <title>Superadmin - Payment for Operator</title>
</head>

<body>

    @include('partials/header')

    <div class="flex gap-6 lg:gap-14 flex-row relative">
        <div class="flex my-4 items-start">
            <div class="w-28 md:w-80 sidebar h-auto bg-yellow-200 rounded-xl md:py-8 py-2 px-2 md:px-4 gap-4">
                <a href="index.html" class="flex items-center gap-3 px-4 py-2">
                    <img src="{{ ('images/image-3.svg') }}" alt="home" />
                    <span class="text-black text-base hidden md:block">Dashboard</span>
                </a>
                <a href="#" class="flex items-center gap-3 px-4 py-2">
                    <img src="{{ ('images/image-4.svg') }}" alt="user management" />
                    <span class="text-black text-base hidden md:block">User management</span>
                </a>
                <div>
                    <a href="tutor-management.html" class="flex items-center gap-3 px-4 py-2">
                        <img src="{{ ('images/image-5.svg') }}" alt="home" />
                        <span class="text-black text-base hidden md:block">Tutor management</span>
                    </a>
                    <ul class="ml-2 md:ml-14 py-3 flex flex-col gap-1 text-black">
                        <li class="py-2 px-4">
                            <a href="tutor-list.html" class="text-xs md:text-base">Tutor list</a>
                        </li>
                        <li class="py-2 px-4">
                            <a href="tutor-criteria-inbox.html" class="text-xs md:text-base">Tutor criteria inbox</a>
                        </li>
                        <li class="py-2 px-4 ">
                            <a href="tutor-review.html" class="text-xs md:text-base">Tutor review</a>
                        </li>
                    </ul>
                </div>
                <a href="audit-logs.html" class="flex items-center gap-3 px-4 py-2">
                    <img src="{{ ('images/image-6.svg') }}" alt="user management" />
                    <span class="text-black text-base hidden md:block">Audit logs</span>
                </a>
                <div>
                    <a href="payment-for-operator.html"
                        class="flex items-center bg-yellow-300 rounded-md gap-3 px-4 py-2">
                        <img src="{{ ('images/image-5.svg') }}" alt="home" />
                        <span class="text-black text-base hidden md:block">Payment</span>
                    </a>
                    <ul class="ml-2 md:ml-14 py-3 flex flex-col gap-1 text-black">
                        <li class="py-2 px-4 bg-yellow-400 rounded-md">
                            <a class="text-xs md:text-base" href="payment-for-operator.html">For operator</a>
                        </li>
                        <li class="py-2 px-4">
                            <a class="text-xs md:text-base" href="payment-from-parent.html">From parent</a>
                        </li>
                        <li class="py-2 px-4 ">
                            <a class="text-xs md:text-base" href="#">For tutor</a>
                        </li>
                        <li class="py-2 px-4 ">
                            <a class="text-xs md:text-base" href="#">Commision fee</a>
                        </li>
                    </ul>
                </div>
                <a href="#" class="flex items-center gap-3 px-4 py-2">
                    <img src="{{ ('images/image-8.svg') }}" alt="home" />
                    <span class="text-black text-base hidden md:block">Profile</span>
                </a>
                <a href="#" class="flex items-center gap-3 px-4 py-2">
                    <img src="{{ ('images/image-9.svg') }}" alt="user management" />
                    <span class="text-black text-base hidden md:block">Log out</span>
                </a>
            </div>
            <button id="sidebar-toggle" class="text-gray-700 mt-6 -ml-4 focus:outline-none">
                <img src="{{ ('images/menu.svg') }}" alt="menu" class="w-12" />
            </button>
        </div>

        <div class="my-4 w-full mr-10 md:mr-20 overflow-auto">
            <div class="flex justify-between md:items-end flex-col md:flex-row">
                <div>
                    <h1 class="text-xl lg:text-3xl font-bold">Payment</h1>
                    <p class="text-sm lg:text-base">You can check all payment status here</p>

                    <h2 class="mt-6 text-lg lg:text-xl font-semibold">For operator</h2>
                </div>
                <div class="flex flex-col gap-2">
                    <label for="role" class="text-sm lg:text-base">Filter by province</label>
                    <select class="py-2 px-3 border border-yellow-500 text-black rounded-md bg-white" name="role"
                        id="role">
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
                            <p class="py-2 px-2 rounded-md text-sm bg-red-300 text-black text-center">Not Completed</p>
                        </td>
                        <td class="lg:px-10 lg:py-3 px-3 py-1 text-left"><a href="payment-for-operator-detaill.html"
                                class="underline text-blue-700">See details</a></td>
                    </tr>
                    <tr class="border border-yellow-500">
                        <td class="lg:px-10 lg:py-3 px-3 py-1 text-left">@SarahWiliams</td>
                        <td class="lg:px-10 lg:py-3 px-3 py-1 text-left">Sumatera Utara</td>
                        <td class="lg:px-10 lg:py-3 px-3 py-1 text-left">1 january 2024</td>
                        <td class="lg:px-10 lg:py-3 px-3 py-1 text-left">
                            <p class="py-2 px-2 rounded-md text-sm bg-green-300 text-black text-center">Completed</p>
                        </td>
                        <td class="lg:px-10 lg:py-3 px-3 py-1 text-left"><a href="payment-for-operator-detaill.html"
                                class="underline text-blue-700">See details</a></td>
                    </tr>
                    <tr class="border border-yellow-500">
                        <td class="lg:px-10 lg:py-3 px-3 py-1 text-left">@EmmaW</td>
                        <td class="lg:px-10 lg:py-3 px-3 py-1 text-left">Sumatera Utara</td>
                        <td class="lg:px-10 lg:py-3 px-3 py-1 text-left">1 january 2024</td>
                        <td class="lg:px-10 lg:py-3 px-3 py-1 text-left">
                            <p class="py-2 px-2 rounded-md text-sm bg-green-300 text-black text-center">Completed</p>
                        </td>
                        <td class="lg:px-10 lg:py-3 px-3 py-1 text-left"><a href="payment-for-operator-detaill.html"
                                class="underline text-blue-700">See details</a></td>
                    </tr>
                    <tr class="border border-yellow-500">
                        <td class="lg:px-10 lg:py-3 px-3 py-1 text-left">@KatteWil</td>
                        <td class="lg:px-10 lg:py-3 px-3 py-1 text-left">Sumatera Utara</td>
                        <td class="lg:px-10 lg:py-3 px-3 py-1 text-left">1 january 2024</td>
                        <td class="lg:px-10 lg:py-3 px-3 py-1 text-left">
                            <p class="py-2 px-2 rounded-md text-sm bg-green-300 text-black text-center">Completed</p>
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

    @include('partials/footer')
</body>

</html>