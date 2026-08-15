<nav class="bg-white shadow-md sticky top-0 z-50">
    <div class="max-w-6xl mx-auto px-6 py-4 flex items-center justify-between">
        <a href="{{ url('/') }}" class="text-2xl font-bold text-indigo-600">
            Your<span class="text-gray-800">Company</span>
        </a>

        <ul class="hidden md:flex items-center gap-8 font-medium">
            <li>
                <a href="{{ url('/') }}" class="hover:text-indigo-600 transition {{ request()->is('/') ? 'text-indigo-600' : 'text-gray-700' }}">
                    Home
                </a>
            </li>
            <li>
                <a href="{{ url('/about') }}" class="hover:text-indigo-600 transition {{ request()->is('about') ? 'text-indigo-600' : 'text-gray-700' }}">
                    About
                </a>
            </li>
            <li>
                <a href="{{ url('/services') }}" class="hover:text-indigo-600 transition {{ request()->is('services') ? 'text-indigo-600' : 'text-gray-700' }}">
                    Services
                </a>
            </li>
            <li>
                <a href="{{ url('/contact') }}" class="hover:text-indigo-600 transition {{ request()->is('contact') ? 'text-indigo-600' : 'text-gray-700' }}">
                    Contact
                </a>
            </li>
        </ul>

        <a href="{{ url('/contact') }}" class="hidden md:inline-block bg-indigo-600 text-white px-5 py-2 rounded-lg hover:bg-indigo-700 transition">
            Get in Touch
        </a>

        <button class="md:hidden text-gray-700" onclick="document.getElementById('mobile-menu').classList.toggle('hidden')">
            ☰
        </button>
    </div>

    <div id="mobile-menu" class="hidden md:hidden px-6 pb-4 flex flex-col gap-3 font-medium">
        <a href="{{ url('/') }}" class="hover:text-indigo-600">Home</a>
        <a href="{{ url('/about') }}" class="hover:text-indigo-600">About</a>
        <a href="{{ url('/services') }}" class="hover:text-indigo-600">Services</a>
        <a href="{{ url('/contact') }}" class="hover:text-indigo-600">Contact</a>
    </div>
</nav>