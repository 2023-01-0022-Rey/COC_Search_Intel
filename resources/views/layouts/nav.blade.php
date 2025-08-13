<nav x-data="{ open: false }" class="fixed top-0 z-50 w-full bg-black/80 backdrop-blur-sm border-b border-gray-800" role="navigation" aria-label="Main">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 py-4 flex items-center justify-between">
        <!-- Logo - Left (flex-1 for equal width) -->
        <div class="flex-1 min-w-0">
            <a class="w-15 h-12 inline-flex items-center focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 focus:ring-offset-black rounded" href="/" aria-label="Go to home">
                <img src="{{ asset('images/TH/Icons/Logo_White.svg') }}" alt="Clash Intel" width="60" height="48" loading="eager" decoding="async" fetchpriority="high">
            </a>
        </div>

        <!-- Hamburger (Mobile) -->
        <div class="sm:hidden flex items-center">
            <button @click="open = !open" :aria-expanded="open.toString()" aria-controls="mobile-menu" aria-label="Toggle menu" class="p-2 text-white rounded focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 focus:ring-offset-black">
                <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
                <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>

        <!-- Desktop Menu -->
        <div class="hidden sm:flex flex-1 justify-center">
            <form class="w-full flex justify-center" action="{{ route('search') }}" method="POST" role="search" aria-label="Search">
                @csrf
                <div class="bg-gray-900/50 backdrop-blur-sm rounded-full border border-blue-500/30 p-2 hover:border-blue-500/60 transition-colors">
                    <label for="navbar-search" class="sr-only">Search by tag or name</label>
                    <input 
                        id="navbar-search"
                        type="text" 
                        name="tag"
                        placeholder="#88JY8P2"
                        autocomplete="off"
                        class="w-64 px-4 py-0.5 bg-transparent text-white text-center placeholder-gray-400 font-medium focus:outline-none" 
                        required
                    >
                </div>
            </form>
        </div>
        <div class="hidden sm:flex flex-1 justify-end items-center gap-6 sm:gap-8">
            <a href="{{route('rankings')}}" class="text-white hover:text-blue-400 transition-colors duration-200">Rankings</a>
            <a href="#contact" class="text-white hover:text-blue-400 transition-colors duration-200">Contact</a>
        </div>
    </div>
    <!-- Mobile Menu -->
    <div id="mobile-menu" x-cloak x-show="open" x-transition.opacity class="sm:hidden bg-black/95 border-t border-gray-800 px-4 pb-4 mobile-menu">
        <form class="w-full flex justify-center py-2" action="{{ route('search') }}" method="POST" role="search" aria-label="Search">
            @csrf
            <div class="bg-gray-900/50 backdrop-blur-sm rounded-full border border-blue-500/30 p-2 hover:border-blue-500/60 transition-colors w-full">
                <label for="navbar-search-mobile" class="sr-only">Search by tag or name</label>
                <input 
                    id="navbar-search-mobile"
                    type="text" 
                    name="tag"
                    placeholder="#88JY8P2"
                    autocomplete="off"
                    class="w-full px-4 py-0.5 bg-transparent text-white text-center placeholder-gray-400 font-medium focus:outline-none" 
                    required
                >
            </div>
        </form>
        <div class="flex flex-col gap-2 mt-2">
            <a href="{{route('rankings')}}" class="block text-white hover:text-blue-400 transition-colors duration-200 py-2">Rankings</a>
            <a href="#contact" class="block text-white hover:text-blue-400 transition-colors duration-200 py-2">Contact</a>
        </div>
    </div>
</nav>