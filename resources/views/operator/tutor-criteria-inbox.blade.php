<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/@heroicons/react@1.0.5/dist/index.css" rel="stylesheet">
    @vite('resources/css/app.css')
    @vite('resources/css/output.css')
    <title>Operator - Tutor Criteria Inbox</title>
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
                <a href="tutor-management.html" class="flex items-center bg-yellow-300 rounded-md gap-3 px-4 py-2">
                    <img src="{{ ('images/image-5.svg') }}" alt="home" />
                    <span class="text-black text-base hidden md:block">Tutor management</span>
                </a>
                <ul class="ml-2 md:ml-14 py-3 flex flex-col gap-1 text-black">
                    <li class="py-2 px-4">
                        <a href="tutor-list.html" class="text-xs md:text-base">Tutor list</a>
                    </li>
                    <li class="py-2 px-4 bg-yellow-400 rounded-md">
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
                <a href="payment-for-operator.html" class="flex items-center gap-3 px-4 py-2">
                    <img src="{{ ('images/image-5.svg') }}" alt="home" />
                    <span class="text-black text-base hidden md:block">Payment</span>
                </a>
                <ul class="ml-2 md:ml-14 py-3 flex flex-col gap-1 text-black">
                    <li class="py-2 px-4">
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
        <div class="my-4 w-full mr-10 lg:mr-20 overflow-auto">
            <div class="flex justify-between md:items-end md:flex-row flex-col">
                <div>
                    <h1 class="text-xl lg:text-3xl font-bold">Tutor Management</h1>
                    <p class="text-sm lg:text-base">You can manage all section related to private tutor here</p>

                    <h2 class="mt-6 text-lg lg:text-xl font-semibold">Tutor Criteria Inbox</h2>
                </div>
                <h1 class="mt-6 text-lg lg:text-xl font-semibold">Sumatera Utara</h1>
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
    </div>

@include('partials/footer')
</body>
</html>