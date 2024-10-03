{{-- HALAMAN HEADER ATAS --}}
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>

    </ul>
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a class="nav-link">
                <div class="h5 font-weight-bold mb-1">
                    Welcome, {{ Auth::user()->name }}
                </div>
            </a>
        </li>
        <x-dropdown align="right" width="48">
            <x-slot name="trigger">
                <div class="flex flex-row gap-1 justify-center items-center cursor-pointer">
                    <div class="avatar rounded-full bg-black w-10 h-10 flex">
                        <p class="text-white font-bold text-2xl m-auto">{{ substr(Auth::user()->name, 0, 1) }}</p>
                    </div>
                    <div class="ms-1">
                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </div>
                </div>
            </x-slot>

            <x-slot name="content">
                {{-- <x-dropdown-link :href="route('profile.edit')">
                    {{ __('Profile') }}
                </x-dropdown-link> --}}

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <a class="block w-full px-4 py-2 text-start text-sm leading-5 text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out" :href="route('logout')" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </a>
                </form>
            </x-slot>
        </x-dropdown>
    </ul>
</nav>
