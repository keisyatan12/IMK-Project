<div class="flex my-4 items-start">
    <div id="sidebar-parent" class="w-28 md:block hidden md:w-80 h-full -translate-x-full transition-all bg-yellow-200 rounded-xl md:py-8 py-2 px-2 md:px-4 gap-4">
        <a href="jobseeker-homedashboard" class=" flex items-center gap-3 px-4 py-2 hover:bg-yellow-100 rounded-md {{request()->is('jobseeker-homedashboard') ? 'bg-yellow-100' : ''}}">
            <img src="{{ asset('images/image-3.svg') }}" alt="home"/>
            <span class="text-black text-base hidden md:block">Dashboard</span>
        </a>
        <a href="jobseeker-alljob" class=" flex items-center gap-3 px-4 py-2 hover:bg-yellow-100 rounded-md {{request()->is('jobseeker-alljob') ? 'bg-yellow-100' : ''}}">
            <img src="{{ asset('images/image-4.svg') }}" alt="home"/>
            <span class="text-black text-base hidden md:block">All Job</span>
        </a>
        <a href="jobseeker-history" class=" flex items-center gap-3 px-4 py-2 hover:bg-yellow-100 rounded-md {{request()->is('jobseeker-history') ? 'bg-yellow-100' : ''}}">
            <img src="{{ asset('images/image-6.svg') }}" alt="user management" />
            <span class="text-black text-base hidden md:block">Application History</span>
        </a>
        <a href="jobseeker-profil" class="flex items-center gap-3 px-4 py-2 hover:bg-yellow-100 rounded-md {{request()->is('jobseeker-profil') ? 'bg-yellow-100' : ''}}">
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