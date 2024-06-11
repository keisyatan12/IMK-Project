<nav class="bg-[#001840] mx-auto w-full py-4 px-8">
    <div class="container mx-auto flex justify-between w-full">
        <div class="flex flex-row gap-3 items-center">
            <img src="{{ asset('images/logo.png') }}" alt="logo" class="w-14"/>
            <span class="text-white md:block hidden font-bold text-xl">Private Tutor Indonesia</span>
        </div>
        <div class="flex items-center gap-3 ">
            <button onclick="toggleDarkMode()" class="flex items-center space-x-2 px-3 py-3 bg-white/10 text-white rounded-md">
                <img src="{{ asset('images/moon.svg') }}" alt="moon" class="w-6"/>
            </button>
            <button id="navbar-burger" class="items-center px-3 py-2 mt-2 mr-4 text-gray-200 border border-gray-400 rounded md:hidden hover:bg-blue-800">
              <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="20" height="20" viewBox="0,0,256,256"
                style="fill:#FFFFFF;">
                <g fill="#ffffff" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                  <g transform="scale(5.12,5.12)"><path d="M3,9c-0.36064,-0.0051 -0.69608,0.18438 -0.87789,0.49587c-0.18181,0.3115 -0.18181,0.69676 0,1.00825c0.18181,0.3115 0.51725,0.50097 0.87789,0.49587h44c0.36064,0.0051 0.69608,-0.18438 0.87789,-0.49587c0.18181,-0.3115 0.18181,-0.69676 0,-1.00825c-0.18181,-0.3115 -0.51725,-0.50097
                    -0.87789,-0.49587zM3,24c-0.36064,-0.0051 -0.69608,0.18438 -0.87789,0.49587c-0.18181,0.3115 -0.18181,0.69676 0,1.00825c0.18181,0.3115 0.51725,0.50097 0.87789,0.49587h44c0.36064,0.0051 0.69608,-0.18438 0.87789,-0.49587c0.18181,-0.3115 0.18181,-0.69676 0,-1.00825c-0.18181,-0.3115 -0.51725,-0.50097 -0.87789,-0.49587zM3,39c-0.36064,-0.0051
                    -0.69608,0.18438 -0.87789,0.49587c-0.18181,0.3115 -0.18181,0.69676 0,1.00825c0.18181,0.3115 0.51725,0.50097 0.87789,0.49587h44c0.36064,0.0051 0.69608,-0.18438 0.87789,-0.49587c0.18181,-0.3115 0.18181,-0.69676 0,-1.00825c-0.18181,-0.3115 -0.51725,-0.50097 -0.87789,-0.49587z">
                    </path></g></g>
              </svg>
            </button>

            <div class="relative text-left md:block hidden">
              <div>
                <button type="button" class="inline-flex w-full justify-center gap-x-3 items-center rounded-md px-3 py-2 text-sm font-semibold text-white hover:bg-white/10" id="menu-button" aria-expanded="true" aria-haspopup="true">
                    <img src="{{ asset('images/profile.png') }}" alt="profile" class="w-8"/>
                    <p>John Doe</p>
                    <svg class="-mr-1 h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                      <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                    </svg>
                </button>
              </div>

              <div class="absolute right-0 z-10 mt-2 w-56 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none dropdown-menu-profile hidden" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                <div class="py-1" role="none">
                  <a href="parentsprofile" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-0">Profile</a>
                  <form method="POST" action="#" role="none">
                    <button type="submit" class="text-gray-700 block w-full px-4 py-2 text-left text-sm" role="menuitem" tabindex="-1" id="menu-item-3">Logout</button>
                  </form>
                </div>
              </div>
            </div>
        </div>
    </div>
    <div id="navbar-menu" class="bg-[#001840] text-white py-4 px-8 md:hidden -translate-y-full duration-500 transition-all z-50 fixed top-0 left-0 right-0 max-h-96 overflow-y-auto">
      <div class="flex justify-end ">
        <button id="navbar-burger-close" class="items-center px-3 py-2 mt-2 mr-4 text-gray-200 border border-gray-400 rounded md:hidden hover:bg-blue-800">
          <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="20" height="20" viewBox="0 0 50 50"
            style="fill:#FFFFFF;">
            <path d="M 7.71875 6.28125 L 6.28125 7.71875 L 23.5625 25 L 6.28125 42.28125 L 7.71875 43.71875 L 25 26.4375 L 42.28125 43.71875 L 43.71875 42.28125 L 26.4375 25 L 43.71875 7.71875 L 42.28125 6.28125 L 25 23.5625 Z"></path>
          </svg>
        </button>
      </div>
      <ul class="flex flex-col gap-4 mt-16">
          <li><a href="#" class="flex justify-between items-center py-2 text-lg">Profil <span>&rarr;</span></a></li>
          <li><a href="#" class="flex justify-between items-center py-2 text-lg">Dashboard <span>&rarr;</span></a></li>
          <li><a href="#" class="flex justify-between items-center py-2 text-lg">Cari Tutor <span>&rarr;</span></a></li>
          <li><a href="#" class="flex justify-between items-center py-2 text-lg">List Pelamar Tutor <span>&rarr;</span></a></li>
          <li><a href="#" class="flex justify-between items-center py-2 text-lg">Tutor Review <span>&rarr;</span></a></li>
          <li><a href="#" class="flex justify-between items-center py-2 text-lg">Pembayaran <span>&rarr;</span></a></li>
          <li><a href="#" class="flex justify-between items-center py-2 text-lg">Log out <span>&rarr;</span></a></li>
      </ul>
  </div>
</nav>
