<header class="text-gray-600 body-font border-b border-gray-100">
    <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
        <a href="{{ route('listings.index') }}" class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
            <img src="{{ asset('images/briefcase.png') }}" alt="Briefcase Image" style="width: 40px; height: 40px;">
            <span class="ml-3 text-xl">Hummingbed Job Platform</span>
        </a>
        <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">
            <a href="{{ route('login') }}" class="mr-5 hover:text-gray-900">Employers</a>
        </nav>
        <a href="{{ route('listings.create') }}" class="inline-flex items-center bg-red-500 text-white border-0 py-1 px-3 focus:outline-none hover:bg-red-700 rounded text-base mt-4 md:mt-0">Post Job
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
                <path d="M5 12h14M12 5l7 7-7 7"></path>
            </svg>
        </a>
    </div>
</header>
