<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Laravel</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

  <!-- Styles -->
  <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.3.5/dist/alpine.min.js" defer></script>
  <script src="https://unpkg.com/embla-carousel/embla-carousel.umd.js"></script>
  <!-- Scripts -->
  @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="antialiased">
  <nav class="flex items-center justify-between flex-wrap p-6 fixed w-full z-10 top-0" x-data="{ isOpen: false }" @keydown.escape="isOpen = false" :class="{ 'shadow-lg bg-indigo-900' : isOpen , 'bg-blue-800' : !isOpen}">
    <!--Logo etc-->
    <div class="flex items-center flex-shrink-0 text-white mr-6">
      <a class="text-white no-underline hover:text-white hover:no-underline" href="#">
        <span class="text-2xl pl-2"><i class="em em-grinning"></i> Medihome Rebrand</span>
      </a>
    </div>

    <!--Toggle button (hidden on large screens)-->
    <button @click="isOpen = !isOpen" type="button" class="block lg:hidden px-2 text-gray-500 hover:text-white focus:outline-none focus:text-white" :class="{ 'transition transform-180': isOpen }">
      <svg class="h-6 w-6 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
        <path x-show="isOpen" fill-rule="evenodd" clip-rule="evenodd" d="M18.278 16.864a1 1 0 0 1-1.414 1.414l-4.829-4.828-4.828 4.828a1 1 0 0 1-1.414-1.414l4.828-4.829-4.828-4.828a1 1 0 0 1 1.414-1.414l4.829 4.828 4.828-4.828a1 1 0 1 1 1.414 1.414l-4.828 4.829 4.828 4.828z" />
        <path x-show="!isOpen" fill-rule="evenodd" d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z" />
      </svg>
    </button>

    <!--Menu-->
    <div class="w-full flex-grow lg:flex lg:items-center lg:w-auto" :class="{ 'block shadow-3xl': isOpen, 'hidden': !isOpen }" @click.away="isOpen = false" x-show.transition="true">
      <ul class="pt-6 lg:pt-0 list-reset lg:flex justify-end flex-1 items-center">
        <li class="mr-3">
          <a class="inline-block py-2 px-4 text-white no-underline" href="#" @click="isOpen = false">Home
          </a>
        </li>

        <li class="mr-3">
          <a class="inline-block text-white no-underline hover:text-gray-200 hover:text-underline py-2 px-4" href="#" @click="isOpen = false">About
          </a>
        </li>

        <li class="mr-3">
          <a class="inline-block text-white no-underline hover:text-gray-200 hover:text-underline py-2 px-4" href="#" @click="isOpen = false">Services
          </a>
        </li>
        <li class="mr-3">
          <a class="inline-block text-white no-underline hover:text-gray-200 hover:text-underline py-2 px-4" href="#" @click="isOpen = false">FAQ
          </a>
        </li>

        @auth
        <a href="{{ url('/dashboard') }}" class="inline-block text-white no-underline hover:text-gray-200 hover:text-underline py-2 px-4">Dashboard</a>
        @else
        <a href="{{ route('login') }}" class="inline-block text-white no-underline hover:text-gray-200 hover:text-underline py-2 px-4">Log in</a>

        @if (Route::has('register'))
        <a href="{{ route('register') }}" class="inline-block text-white no-underline hover:text-gray-200 hover:text-underline py-2 px-4 rounded-3xl border-2 border-white">Register</a>
        @endif
        @endauth

      </ul>
    </div>
  </nav>

  <!--Container for content-->
  <div class="container bg-white mt-24 md:mt-18">
    <!-- Embla -->
    <div class="embla">
      <div class="embla__viewport">
        <div class="embla__container">
          <div class="embla__slide">
            <!-- <div class="embla__slide__number"><span>1</span></div> -->
            <div class="flex flex-row">

            </div>
          </div>
          <div class="embla__slide">
            <div class="embla__slide__number"><span>2</span></div>Slide 2
          </div>
          <div class="embla__slide">
            <div class="embla__slide__number"><span>3</span></div>Slide 3
          </div>
        </div>
      </div>
    </div>


    <!-- php artisan queue:work & 
while true; do 
  echo "=> Running scheduler"
  php artisan schedule:work || true;
  echo "=> sleeping for 60 seconds"
  sleep 60;
done -->

  </div>
  <script src="https://unpkg.com/embla-carousel/embla-carousel.umd.js"></script>
  <script src="https://unpkg.com/embla-carousel-autoplay/embla-carousel-autoplay.umd.js"></script>
  
</body>

</html>