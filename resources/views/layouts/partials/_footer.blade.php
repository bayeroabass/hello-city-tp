<footer class="text-gray-400">
    <p>&copy; Copyright  {{date('Y')}}

        @if (!Route::is('about'))

        &middot; <a href="{{ route('about') }}" class="text-indigo-500 underline hover:text-indigo-600">About Us</a>
        @endif

    </p>
</footer>
