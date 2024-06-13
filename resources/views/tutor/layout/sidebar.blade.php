{{-- <div class="flex my-4 items-start">
    <div class="w-28 md:w-80 sidebar h-auto bg-yellow-200 rounded-xl md:py-8 py-6 px-2 md:px-4 gap-4">
        <a href="/tutordashboard"
            class=" mb-2 flex items-center  {{ request()->is('tutordashboard') ? 'bg-yellow-300 border-yellow-600 border-2 scale-105 translate-x-4 shadow-md shadow-yellow-600' : '' }} gap-3 px-4 py-2 hover:bg-yellow-300 hover:translate-x-4 hover:shadow-md hover:shadow-yellow-600 rounded-xl">
            <img src="{{ ('images/image-3.svg') }}" class=" w-7 h-7" alt="Dashboard" />
            <span class="text-black text-base hidden md:block">Dashboard</span>
        </a>
        <a href="/tutorschedule"
            class=" mb-2 flex items-center  {{ request()->is('tutorschedule') ? 'bg-yellow-300 border-yellow-600 border-2 scale-105 translate-x-4 shadow-md shadow-yellow-600' : '' }} gap-3 px-4 py-2 hover:bg-yellow-300 hover:translate-x-4 hover:shadow-md hover:shadow-yellow-600 rounded-xl">
            <img src="{{ ('images/calendar.png') }}" class=" w-7 h-7" alt="Schedule" />
            <span class="text-black text-base hidden md:block">Schedule</span>
        </a>
        <a href="/tutorpayment"
            class=" mb-2 flex items-center  {{ request()->is('tutorpayment') ? 'bg-yellow-300 border-yellow-600 border-2 scale-105 translate-x-4 shadow-md shadow-yellow-600' : '' }} gap-3 px-4 py-2 hover:bg-yellow-300 hover:translate-x-4 hover:shadow-md hover:shadow-yellow-600 rounded-xl">
            <img src="{{ ('images/cash-payment.png') }}" class=" w-7 h-7" alt="Payment" />
            <span class="text-black text-base hidden md:block">Payment</span>
        </a>

        <a href="/tutorprofile"
            class=" mb-2 flex items-center  {{ request()->is('tutorprofile*') ? 'bg-yellow-300 border-yellow-600 border-2 scale-105 translate-x-4 shadow-md shadow-yellow-600' : '' }} gap-3 px-4 py-2 hover:bg-yellow-300 hover:translate-x-4 hover:shadow-md hover:shadow-yellow-600 rounded-xl">
            <img src="{{ ('images/image-8.svg') }}" class=" w-7 h-7" alt="Profile" />
            <span class="text-black text-base hidden md:block">Profile</span>
        </a>

        <div class=" mt-40">
            <a href="#"
                class="flex items-center gap-3 px-4 py-2 hover:bg-yellow-300 hover:shadow-md hover:shadow-yellow-600 rounded-xl">
                <img src="{{ ('images/image-9.svg') }}" alt="logout" />
                <span class="text-black text-base hidden md:block">Log out</span>
            </a>
        </div>

    </div>
    <button id="sidebar-toggle" class="text-gray-700 mt-6 -ml-4 focus:outline-none">
        <img src="{{ ('images/menu.svg') }}" alt="menu" class="w-12" />
    </button>
</div> --}}

<div class="flex my-4 items-start">
    <div id="sidebar-parent" class="w-28 md:block hidden md:w-80 h-full -translate-x-full transition-all bg-yellow-200 rounded-xl md:py-8 py-2 px-2 md:px-4 gap-4">
        <a href="tutordashboard" class=" flex items-center gap-3 px-4 py-2 hover:bg-yellow-100 rounded-md {{request()->is('tutordashboard') ? 'bg-yellow-100' : ''}}">
            <img src="{{ asset('images/image-3.svg') }}" alt="home"/>
            <span class="text-black text-base hidden md:block">Dashboard</span>
        </a>
        <a href="tutorschedule" class=" flex items-center gap-3 px-4 py-2 hover:bg-yellow-100 rounded-md {{request()->is('tutorschedule') ? 'bg-yellow-100' : ''}}">
            <img src="{{ asset('images/calendar.png') }}" alt="home" class=" w-7 h-7" alt="Schedule"/>
            <span class="text-black text-base hidden md:block">Schedule</span>
        </a>
        <a href="tutorpayment" class=" flex items-center gap-3 px-4 py-2 hover:bg-yellow-100 rounded-md {{request()->is('tutorpayment') ? 'bg-yellow-100' : ''}}">
            <img src="{{ asset('images/cash-payment.png') }}" alt="user management" class=" w-7 h-7"/>
            <span class="text-black text-base hidden md:block">Pembayaran</span>
        </a>
        <a href="tutorprofile" class="flex items-center gap-3 px-4 py-2 hover:bg-yellow-100 rounded-md {{request()->is('tutorprofile') ? 'bg-yellow-100' : ''}}">
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