<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/@heroicons/react@1.0.5/dist/index.css" rel="stylesheet">
    @vite('resources/css/app.css')
    @vite('resources/css/output.css')
    <title>Superadmin - Audit</title>
</head>

<body>

    @include('partials/header')

    <div class="flex gap-6 lg:gap-14 flex-row relative">

        <!-- SIDEBAR -->
        <div class="flex my-4 items-start">
            <div class="w-28 md:w-80 sidebar h-auto bg-blue-200 rounded-xl md:py-8 py-2 px-2 md:px-4 gap-4">
                <a href="index.html" class="flex items-center gap-3 px-4 py-2">
                    <img src="{{ 'images/image-3.svg' }}" alt="home" />
                    <span class="text-black text-base hidden md:block">Dashboard</span>
                </a>
                <div>
                    <a href="tutor-management.html" class="flex bg-blue-300 items-center gap-3 px-4 py-2">
                        <img src="{{ 'images/image-5.svg' }}" alt="home" />
                        <span class="text-black  font-bold text-base hidden md:block">Profile</span>
                    </a>
                    <ul class="ml-2 md:ml-14 py-3 flex flex-col gap-1 text-black">
                        <li class="py-2 px-4">
                            <a href="tutor-list.html" class="text-xs md:text-base">Edit profile</a>
                        </li>
                        <li class="py-2 px-4 bg-blue-500 rounded-lg">
                            <a href="tutor-criteria-inbox.html" class="text-xs text-white md:text-base">Change
                                password</a>
                        </li>
                    </ul>
                </div>

                <a href="#" class="flex items-center gap-3 px-4 py-2">
                    <img src="{{ 'images/image-9.svg' }}" alt="user management" />
                    <span class="text-black text-base hidden md:block">Log out</span>
                </a>
            </div>
            <button id="sidebar-toggle" class="text-gray-700 mt-6 -ml-4 focus:outline-none">
                <img src="{{ 'images/menu.svg' }}" alt="menu" class="w-12" />
            </button>
        </div>

        <!-- CONTENT -->
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

    </div>

    @include('partials/footer')
</body>

</html>
