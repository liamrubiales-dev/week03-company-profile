<nav class="bg-black shadow-md sticky top-0 z-50">
    <div class="max-w-6xl mx-auto px-6 py-4 flex items-center justify-between">
        <a href="{{ url('/') }}" class="text-2xl font-bold text-yellow-400">
            JYP<span class="text-white">Tech</span>
        </a>

        <ul class="hidden md:flex items-center gap-8 font-medium">
            <li>
                <a href="{{ url('/') }}" class="hover:text-yellow-400 transition {{ request()->is('/') ? 'text-yellow-400' : 'text-gray-200' }}">
                    Home
                </a>
            </li>
            <li>
                <a href="{{ url('/about') }}" class="hover:text-yellow-400 transition {{ request()->is('about') ? 'text-yellow-400' : 'text-gray-200' }}">
                    About
                </a>
            </li>
            <li>
                <a href="{{ url('/services') }}" class="hover:text-yellow-400 transition {{ request()->is('services') ? 'text-yellow-400' : 'text-gray-200' }}">
                    Services
                </a>
            </li>
            <li>
                <a href="{{ url('/contact') }}" class="hover:text-yellow-400 transition {{ request()->is('contact') ? 'text-yellow-400' : 'text-gray-200' }}">
                    Contact
                </a>
            </li>
        </ul>

        <a href="{{ url('/contact') }}" class="hidden md:inline-block bg-yellow-400 text-black font-semibold px-5 py-2 rounded-lg hover:bg-yellow-300 transition">
            Get in Touch
        </a>

        <button class="md:hidden text-white" onclick="document.getElementById('mobile-menu').classList.toggle('hidden')">
            ☰
        </button>
    </div>

    <div id="mobile-menu" class="hidden md:hidden px-6 pb-4 flex flex-col gap-3 font-medium bg-black">
        <a href="{{ url('/') }}" class="text-gray-200 hover:text-yellow-400">Home</a>
        <a href="{{ url('/about') }}" class="text-gray-200 hover:text-yellow-400">About</a>
        <a href="{{ url('/services') }}" class="text-gray-200 hover:text-yellow-400">Services</a>
        <a href="{{ url('/contact') }}" class="text-gray-200 hover:text-yellow-400">Contact</a>
    </div>
</nav>