{{-- <div class="flex my-4 items-start">
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
        <a href="audit-logs.html" class="flex items-center bg-yellow-300 rounded-md gap-3 px-4 py-2">
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
</div> --}}

<div class="flex my-4 items-start">
    <div id="sidebar-parent" class="w-28 md:block hidden md:w-80 h-full -translate-x-full transition-all bg-yellow-200 rounded-xl md:py-8 py-2 px-2 md:px-4 gap-4">
        <a href="dashboardsup" class=" flex items-center gap-3 px-4 py-2 hover:bg-yellow-100 rounded-md {{request()->is('dashboardsup') ? 'bg-yellow-100' : ''}}">
            <img src="{{ asset('images/image-3.svg') }}" alt="home"/>
            <span class="text-black text-base hidden md:block">Dashboard</span>
        </a>
        <div class="relative">
            <div id="superadmin-button-usermanagement" class=" flex items-center gap-3 px-4 py-2 hover:bg-yellow-100 rounded-md cursor-pointer">
                <img src="{{ asset('images/image-4.svg') }}" alt="user management" />
                <span class="text-black text-base hidden md:block">User Management</span>
            </div>
            <div id="superadmin-menu-usermanagement" class="hidden md:flex flex-col ml-7 space-y-2 rounded p-4">
                <a href="addoperator" class="text-black hover:bg-yellow-100 p-2 rounded-md {{request()->is('addoperator') ? 'bg-yellow-100' : ''}}">Add Operator</a>
                <a href="tutorcriteriainbox" class="text-black hover:bg-yellow-100 p-2 rounded-md {{request()->is('tutorcriteriainbox') ? 'bg-yellow-100' : ''}}">Edit Operator</a>
                <a href="statusallrole" class="text-black hover:bg-yellow-100 p-2 rounded-md {{request()->is('statusallrole') ? 'bg-yellow-100' : ''}}">Edit Status All Role</a>
            </div>
        </div>
        <div class="relative">
            <div id="superadmin-button-tutormanagement" class=" flex items-center gap-3 px-4 py-2 hover:bg-yellow-100 rounded-md cursor-pointer">
                <img src="{{ asset('images/image-5.svg') }}" alt="user management" />
                <span class="text-black text-base hidden md:block">Tutor Management</span>
            </div>
            <div id="superadmin-menu-tutormanagement" class="hidden md:flex flex-col ml-7 space-y-2 rounded p-4">
                <a href="tutorlist" class="text-black hover:bg-yellow-100 p-2 rounded-md {{request()->is('tutorlist') ? 'bg-yellow-100' : ''}}">Tutor List</a>
                <a href="tutorcriteriainbox" class="text-black hover:bg-yellow-100 p-2 rounded-md {{request()->is('tutorcriteriainbox') ? 'bg-yellow-100' : ''}}">Tutor criteria inbox</a>
                <a href="tutorreview" class="text-black hover:bg-yellow-100 p-2 rounded-md {{request()->is('tutorreview') ? 'bg-yellow-100' : ''}}">Tutor Review</a>
            </div>
        </div>
        <a href="audit" class=" flex items-center gap-3 px-4 py-2 hover:bg-yellow-100 rounded-md">
            <img src="{{ asset('images/image-6.svg') }}" alt="user management" />
            <span class="text-black text-base hidden md:block">Audit Logs</span>
        </a>
        <div class="relative">
            <div id="superadmin-button-payment" class=" flex items-center gap-3 px-4 py-2 hover:bg-yellow-100 rounded-md cursor-pointer">
                <img src="{{ asset('images/image-5.svg') }}" alt="user management" />
                <span class="text-black text-base hidden md:block">Payment</span>
            </div>
            <div id="superadmin-menu-payment" class="hidden md:flex flex-col ml-7 space-y-2 rounded p-4">
                <a href="paymentoperator" class="text-black hover:bg-yellow-100 p-2 rounded-md {{request()->is('paymentoperator') ? 'bg-yellow-100' : ''}}">For operator</a>
                <a href="paymentparent" class="text-black hover:bg-yellow-100 p-2 rounded-md {{request()->is('paymentparent') ? 'bg-yellow-100' : ''}}">From parent</a>
                <a href="#" class="text-black hover:bg-yellow-100 p-2 rounded-md {{request()->is('tutor-review-parent') ? 'bg-yellow-100' : ''}}">For tutor</a>
                <a href="#" class="text-black hover:bg-yellow-100 p-2 rounded-md {{request()->is('tutor-review-parent') ? 'bg-yellow-100' : ''}}">Commision fee</a>
            </div>
        </div>
        <a href="parentsprofile" class="flex items-center gap-3 px-4 py-2 hover:bg-yellow-100 rounded-md">
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