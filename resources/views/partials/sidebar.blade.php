<div class="flex my-4 items-start">
    {{-- INI SIDEBAR --}}
    <div class="w-28 md:w-80 sidebar h-full bg-yellow-200 rounded-xl md:py-8 py-2 px-2 md:px-4 gap-4">
        <a href="jobseeker-dashboard" class=" flex items-center gap-3 px-4 py-2">
            <img src="{{ asset('images/image-3.svg') }}" alt="home" />
            <span class="text-black text-base hidden md:block">Dashboard</span>
        </a>
        <a href="jobseeker-alljob" class=" flex items-center gap-3 px-4 py-2">
            <img src="{{ asset('images/image-4.svg') }}" alt="user management" />
            <span class="text-black text-base hidden md:block">All Job</span>
        </a>

        <a href="#" class="flex items-center gap-3 px-4 py-2">
            <img src="{{ asset('images/image-8.svg') }}" alt="home" />
            <span class="text-black text-base hidden md:block">Profile</span>
        </a>
        <a href="#" class="flex items-center gap-3 px-4 py-2">
            <img src="{{ asset('images/image-9.svg') }}" alt="user management" />
            <span class="text-black text-base hidden md:block">Log out</span>
        </a>
    </div>
    <button id="sidebar-toggle" class="text-gray-700 mt-6 -ml-4 focus:outline-none">
        <img src="{{ asset('images/menu.svg') }}" alt="menu" class="w-12" />
    </button>
    <script>

    </script>
</div>