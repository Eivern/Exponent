<header class="flex flex-wrap sm:justify-start sm:flex-nowrap w-full text-sm py-3 fixed backdrop-blur-md z-50">
    <nav class="max-w-[85rem] w-full mx-auto px-4 flex flex-wrap basis-full items-center justify-between">
        <a class="flex-none text-xl font-semibold focus:outline-none focus:opacity-80" href="{{ route('home') }}" aria-label="Brand">
            <span class="inline-flex items-center gap-x-2 text-xl font-semibold">
                <img class="w-10 h-auto" src="{{ asset('logo/exponent-dark.png') }}" alt="Logo">
                {{ config('app.name') }}
            </span>
        </a>
        <div class="sm:order-3 flex items-center gap-x-2">
            <button type="button" class="sm:hidden hs-collapse-toggle relative size-7 flex justify-center items-center gap-x-2 rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none" id="hs-navbar-alignment-collapse" aria-expanded="false" aria-controls="hs-navbar-alignment" aria-label="Toggle navigation" data-hs-collapse="#hs-navbar-alignment">
            <svg class="hs-collapse-open:hidden shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="3" x2="21" y1="6" y2="6"/><line x1="3" x2="21" y1="12" y2="12"/><line x1="3" x2="21" y1="18" y2="18"/></svg>
            <svg class="hs-collapse-open:block hidden shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>
            <span class="sr-only">Toggle</span>
            </button>
            @auth
            <form action="{{ route('auth.logout') }}" method="POST">
                @csrf
                <button type="submit" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border shadow-sm focus:outline-none disabled:opacity-50 disabled:pointer-events-none bg-neutral-800 border-neutral-700 text-white hover:bg-neutral-700 focus:bg-neutral-700">
                    Logout &leftarrow;
                </button>
            </form>
            @else
                <a href="{{ route('auth.login.form') }}" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border shadow-sm focus:outline-none disabled:opacity-50 disabled:pointer-events-none bg-neutral-800 border-neutral-700 text-white hover:bg-neutral-700 focus:bg-neutral-700">
                    Login &rightarrow;
                </a>
            @endauth
        </div>
        <div id="hs-navbar-alignment" class="hs-collapse hidden lg:ml-auto lg:mr-12 overflow-hidden transition-all duration-300 basis-full grow sm:grow-0 sm:basis-auto sm:block sm:order-2" aria-labelledby="hs-navbar-alignment-collapse">
            <div class="flex flex-col gap-5 mt-5 sm:flex-row sm:items-center sm:mt-0 sm:ps-5">
                <a class="font-medium text-gray-600 hover:text-gray-400 focus:outline-none focus:text-blue-500" href="{{ !Route::is('home') ? route('home') : '' }}#home" aria-current="page">Home</a>
                <a class="font-medium text-gray-600 hover:text-gray-400 focus:outline-none focus:text-blue-500" href="{{ !Route::is('home') ? route('home') : '' }}#about">About</a>
                <a class="font-medium text-gray-600 hover:text-gray-400 focus:outline-none focus:text-blue-500" href="{{ !Route::is('home') ? route('home') : '' }}#projects">Projects</a>
                <a class="font-medium text-gray-600 hover:text-gray-400 focus:outline-none focus:text-blue-500" href="{{ !Route::is('home') ? route('home') : '' }}#reviews">Reviews</a>
                <a class="font-medium text-gray-600 hover:text-gray-400 focus:outline-none focus:text-blue-500" href="#">Team</a>
            </div>
        </div>
    </nav>
  </header>