{{-- <div id="bungkus-sidebar" class="flex py-4 items-start h-screen transition-transform fixed left-0 top-0 -translate-x-28">
    <div id="sidebar-parent" class="w-28 md:w-80 h-full max-h-full bg-yellow-200 rounded-xl md:py-8 transition py-2 px-2 md:px-4 gap-4">
        <a href="jobseeker-dashboard" class="flex items-center gap-3 px-4 py-2">
            <img src="{{ asset('images/image-3.svg') }}" alt="home"/>
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
            <img src="{{ asset('images/image-9.svg') }}" alt="user management"/>
            <span class="text-black text-base hidden md:block">Log out</span>
        </a>
    </div>
    <button id="sidebar-toggle-parent" class="text-gray-700 transition mt-6 focus:outline-none">
      <img src="{{ asset('images/menu.svg') }}" alt="menu" class="w-12"/>
    </button> 
</div> --}}

<div class="flex my-4 items-start">
    <div id="sidebar-parent" class="w-28 md:block hidden md:w-80 h-full -translate-x-full transition-all bg-yellow-200 rounded-xl md:py-8 py-2 px-2 md:px-4 gap-4">
        <a href="dashboard-parents" class=" flex items-center gap-3 px-4 py-2 hover:bg-yellow-100 rounded-md {{request()->is('dashboard-parents') ? 'bg-yellow-100' : ''}}">
            <img src="{{ asset('images/image-3.svg') }}" alt="home"/>
            <span class="text-black text-base hidden md:block">Dashboard</span>
        </a>
        <div class="relative">
            <div id="tutor-button-parent" class=" flex items-center gap-3 px-4 py-2 hover:bg-yellow-100 rounded-md cursor-pointer">
                <img src="{{ asset('images/image-5.svg') }}" alt="user management" />
                <span class="text-black text-base hidden md:block">Tutor</span>
            </div>
            <div id="tutor-menu-parent" class="hidden md:flex flex-col ml-7 space-y-2 rounded p-4">
                <a href="find-tutor-parent" class="text-black hover:bg-yellow-100 p-2 rounded-md {{request()->is('find-tutor-parent') ? 'bg-yellow-100' : ''}}">Cari Tutor</a>
                <a href="tutor-applicants-parents" class="text-black hover:bg-yellow-100 p-2 rounded-md {{request()->is('tutor-applicants-parents') ? 'bg-yellow-100' : ''}}">List Pelamar Tutor</a>
                <a href="tutor-review-parent" class="text-black hover:bg-yellow-100 p-2 rounded-md {{request()->is('tutor-review-parent') ? 'bg-yellow-100' : ''}}">Tutor Review</a>
            </div>
        </div>
        <a href="jobseeker-alljob" class=" flex items-center gap-3 px-4 py-2 hover:bg-yellow-100 rounded-md">
            <img src="{{ asset('images/image-7.svg') }}" alt="user management" />
            <span class="text-black text-base hidden md:block">Pembayaran</span>
        </a>
        <a href="#" class="flex items-center gap-3 px-4 py-2 hover:bg-yellow-100 rounded-md">
            <img src="{{ asset('images/image-8.svg') }}" alt="home " />
            <span class="text-black text-base hidden md:block">Profile</span>
        </a>
        <a href="#" class="flex items-center gap-3 px-4 py-2 hover:bg-yellow-100 rounded-md">
            <img src="{{ asset('images/image-9.svg') }}" alt="user management" />
            <span class="text-black text-base hidden md:block">Log out</span>
        </a>
    </div>
    <button id="sidebar-toggle-parent" class=" md: mt-6 -ml-14 focus:outline-none transition-all -translate-x-64 md:block hidden">
      <img src="{{ asset('images/menu.svg') }}" alt="menu" class="w-12" />
    </button>
</div>