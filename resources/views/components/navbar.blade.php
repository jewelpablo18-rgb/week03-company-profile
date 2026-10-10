<nav class="bg-white shadow sticky top-0 z-50">
    <div class="max-w-6xl mx-auto px-4 py-4 flex flex-wrap items-center justify-between">
        <a href="{{ route('home') }}" class="text-2xl font-bold text-indigo-600">Bright<span class="text-gray-800">Path</span></a>

        <input type="checkbox" id="menu-toggle" class="hidden peer">
        <label for="menu-toggle" class="md:hidden cursor-pointer text-gray-700" aria-label="Toggle menu"><x-icon name="menu" class="w-7 h-7" /></label>

        <ul class="hidden peer-checked:flex md:flex flex-col md:flex-row w-full md:w-auto gap-2 md:gap-8 mt-4 md:mt-0 font-medium">
            @foreach (['home' => 'Home', 'about' => 'About', 'services' => 'Services', 'contact' => 'Contact'] as $route => $label)
                <li>
                    <a href="{{ route($route) }}"
                       class="{{ request()->routeIs($route) ? 'text-indigo-600 border-b-2 border-indigo-600' : 'text-gray-600 hover:text-indigo-600' }}">
                        {{ $label }}
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
</nav>
