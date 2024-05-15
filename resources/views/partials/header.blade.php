<nav class="bg-[#001840] mx-auto w-full py-4 px-8">
    <div class="container mx-auto flex justify-between w-full">
        <div class="flex flex-row gap-3 items-center">
            <img src="{{ ('images/logo.png') }}" alt="logo" class="w-14"/>
            <span class="text-white md:block hidden font-bold text-xl">Private Tutor Indonesia</span>
        </div>
        <div class="flex items-center gap-3">
            <button onclick="toggleDarkMode()" class="flex items-center space-x-2 px-3 py-3 bg-white/10 text-white rounded-md">
                <img src="{{ ('images/moon.svg') }}" alt="moon" class="w-6"/>
            </button>
            
            <div class="relative inline-block text-left">
              <div>
                <button type="button" class="inline-flex w-full justify-center gap-x-3 items-center rounded-md px-3 py-2 text-sm font-semibold text-white hover:bg-white/10" id="menu-button" aria-expanded="true" aria-haspopup="true">
                    <img src="{{ ('images/profile.png') }}" alt="profile" class="w-8"/>
                    <p>John Doe</p>
                    <svg class="-mr-1 h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                      <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                    </svg>
                </button>
              </div>
          
              <div class="absolute right-0 z-10 mt-2 w-56 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none dropdown-menu-profile hidden" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                <div class="py-1" role="none">
                  <a href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-0">Profile</a>
                  <form method="POST" action="#" role="none">
                    <button type="submit" class="text-gray-700 block w-full px-4 py-2 text-left text-sm" role="menuitem" tabindex="-1" id="menu-item-3">Logout</button>
                  </form>
                </div>
              </div>
            </div>
        </div>
    </div>
</nav>