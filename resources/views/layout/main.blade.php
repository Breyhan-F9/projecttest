<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Laravel</title>
  @vite('resources/css/app.css')
</head>
<body class="bg-gray-900">
  <header class="bg-white shadow-md rounded-md shadow-slate-400">
    <nav class="mx-auto flex max-w-7xl items-center justify-between p-6 lg:px-8" aria-label="Global">
      <div class="flex lg:flex-1">
        <a href="/" class="-m-1.5 p-1.5">
          <span class="sr-only">Company</span>
          <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="">
        </a>
      </div>
      <div class="flex lg:hidden">
        <button type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
          <span class="sr-only">Open main menu</span>
          <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
          </svg>
        </button>
      </div>
      <div class="hidden lg:flex lg:gap-x-12">
        <div class="relative">
          <button type="button" class="flex items-center gap-x-1 text-sm font-semibold leading-6 text-gray-900" aria-expanded="false">
            Product
          </button>
        
        </div>
  
        <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Features</a>
        @auth
        @if (auth()->user()->role == 'author')
        <a href="/post" class="text-sm font-semibold leading-6 text-gray-900">Post</a>
        @endif
        @if (auth()->user()->role == 'admin')
           <a href="/account"  class="text-sm font-semibold leading-6 text-gray-900">Account</a>
           <a href="/post" class="text-sm font-semibold leading-6 text-gray-900">Post</a>
        @else 
   @endif
   @endauth
      </div>
      @auth
                <!-- User profile dropdown -->
                <div class="hidden lg:flex lg:flex-1  lg:justify-end">
                    <button type="button" class="flex text-sm bg-gray-800 rounded-full focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" aria-expanded="false" data-dropdown-toggle="dropdown-user">
                        <span class="sr-only">Open user menu</span>
                        <img class="w-8 h-8 rounded-full" src="" alt="user photo">
                    </button>
                    <div class="z-50  hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow dark:bg-gray-700 dark:divide-gray-600" id="dropdown-user">
                        <div class="px-4 py-3">
                            <p class="text-sm text-gray-900 dark:text-white">
                                {{ Auth::user()->username }}
                            </p>
                            <p class="text-sm font-medium text-gray-900 truncate dark:text-gray-300">
                                {{ Auth::user()->role }}
                            </p>
                        </div>
                        <ul class="py-1">
                            <li>
                                <a href="" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
                            </li>
                            <li>
                                <a href="/logout" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white">Log out</a>
                                  </li>
                        </ul>
                    </div>
                </div>
            @else
            <div class="hidden lg:flex lg:flex-1 lg:justify-end">
              <a href="{{ route('login') }}" class="text-sm font-semibold leading-6 text-gray-900">Log in <span aria-hidden="true">&rarr;</span></a>
            </div>
                
            @endauth
      </div>
    </nav>
   
  </header>
  <div class="container">
    @yield('container')

  </div>
</body>
<script>
  document.addEventListener('DOMContentLoaded', function () {
      const dropdownButton = document.querySelector('[data-dropdown-toggle="dropdown-user"]');
      const dropdownMenu = document.getElementById('dropdown-user');

      dropdownButton.addEventListener('click', () => {
          dropdownMenu.classList.toggle('hidden');
      });

      document.addEventListener('click', (event) => {
          if (!dropdownButton.contains(event.target) && !dropdownMenu.contains(event.target)) {
              dropdownMenu.classList.add('hidden');
          }
      });
  });
</script>
</html>