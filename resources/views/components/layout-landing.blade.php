<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Turbo Rookie | {{ $title }}</title>
    {{-- <link rel="stylesheet" href="css/style.css"> --}}
    @vite('resources/css/app.css')
  </head>
  <body>

    <!-- navbar -->
    <nav class="w-full flex justify-between px-6 md:px-10 items-center h-14 shadow-md text-sm text-slate-700 bg-white sticky top-0 z-50 mb-8">
      <h1 class="font-extrabold text-lg">Turbo Rookie</h1>
      <ul class="hidden sm:flex">
        <li class="px-3 font-medium hover:text-slate-400 transition-all">
          <a href="/">Home</a>
        </li>
        <li class="px-3 font-medium hover:text-slate-400 transition-all">
          <a href="/about">About</a>
        </li>
        <li class="px-3 font-medium hover:text-slate-400 transition-all">
          <a href="/project">Project</a>
        </li>
        <li class="px-3 font-medium hover:text-slate-400 transition-all">
          <a href="/contact">Contact</a>
        </li>
        <li class="px-3 font-medium hover:text-slate-400 transition-all">
          <a href="/blog">Blog</a>
        </li>
      </ul>
        <div class="flex sm:hidden">
            <button type="button" id="tombolmenu" class="cursor-pointer">
                <svg
                class="w-6 h-6 text-slate-700 hover:text-slate-400 transition-all"
                aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg"
                width="24"
                height="24"
                fill="none"
                viewBox="0 0 24 24"
                >
                <path
                    stroke="currentColor"
                    stroke-linecap="round"
                    stroke-width="2"
                    d="M5 7h14M5 12h14M5 17h10"
                />
                </svg>
            </button>
            <a href="" class="cursor-pointer px-5 py-1 rounded-full  bg-blue-500 text-slate-50 hover:bg-blue-300 hover:text-slate-600 ml-2 font-medium shadow-md transition-all">
                <span class="">Join</span>
            </a>
        </div>
      <a href="" class="px-4 py-2 bg-blue-500 rounded-3xl shadow-md text-slate-50 hover:bg-blue-300 hover:text-slate-600 cursor-pointer font-medium sm:block hidden transition-all">
        <span>Join With Us</span>
      </a>
    </nav>
    <!-- navbar -->

    <!-- menu toggle -->
    <div class="hidden rounded-2xl shadow-lg w-36  py-5 fixed top-16 right-10 bg-white text-slate-700" id="menu">
        <ul class="pl-4">
          <li class="py-1 hover:text-slate-400 transition-all">           
              <a href="home.html" class="flex items-start">
                  <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m4 12 8-8 8 8M6 10.5V19a1 1 0 0 0 1 1h3v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3h3a1 1 0 0 0 1-1v-8.5"/>
                  </svg>                  
                  <span class="ml-1">Home</span>
              </a>
          </li>
          <li class="py-1 hover:text-slate-400 transition-all">
              <a href="/about" class="flex items-start">
                  <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                      <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M4.5 17H4a1 1 0 0 1-1-1 3 3 0 0 1 3-3h1m0-3.05A2.5 2.5 0 1 1 9 5.5M19.5 17h.5a1 1 0 0 0 1-1 3 3 0 0 0-3-3h-1m0-3.05a2.5 2.5 0 1 0-2-4.45m.5 13.5h-7a1 1 0 0 1-1-1 3 3 0 0 1 3-3h3a3 3 0 0 1 3 3 1 1 0 0 1-1 1Zm-1-9.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0Z"/>
                  </svg>                      
                  <span class="pl-1">About</span>
              </a>
          </li>
          <li class="py-1 hover:text-slate-400 transition-all">
              <a href="/project" class="flex items-start">
                  <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.5 8H4m0-2v13a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1V9a1 1 0 0 0-1-1h-5.032a1 1 0 0 1-.768-.36l-1.9-2.28a1 1 0 0 0-.768-.36H5a1 1 0 0 0-1 1Z"/>
                  </svg>
                  <span class="pl-1">Project</span>
              </a>
          </li>
          <li class="py-1 hover:text-slate-400 transition-all">
              <a href="/contact" class="flex items-start">
                  <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.427 14.768 17.2 13.542a1.733 1.733 0 0 0-2.45 0l-.613.613a1.732 1.732 0 0 1-2.45 0l-1.838-1.84a1.735 1.735 0 0 1 0-2.452l.612-.613a1.735 1.735 0 0 0 0-2.452L9.237 5.572a1.6 1.6 0 0 0-2.45 0c-3.223 3.2-1.702 6.896 1.519 10.117 3.22 3.221 6.914 4.745 10.12 1.535a1.601 1.601 0 0 0 0-2.456Z"/>
                  </svg>                  
                  <span class="pl-1">Contact</span>
              </a>
          </li>
          <li class="py-1 hover:text-slate-400 transition-all">
            <a href="/blog" class="flex items-start">
                <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.427 14.768 17.2 13.542a1.733 1.733 0 0 0-2.45 0l-.613.613a1.732 1.732 0 0 1-2.45 0l-1.838-1.84a1.735 1.735 0 0 1 0-2.452l.612-.613a1.735 1.735 0 0 0 0-2.452L9.237 5.572a1.6 1.6 0 0 0-2.45 0c-3.223 3.2-1.702 6.896 1.519 10.117 3.22 3.221 6.914 4.745 10.12 1.535a1.601 1.601 0 0 0 0-2.456Z"/>
                </svg>                  
                <span class="pl-1">Blog</span>
            </a>
        </li>
        </ul>
    </div>
    <!-- menu toggle -->

    {{ $slot }}

    <!-- footer -->
     <footer class="w-full text-center text-slate-700  text-xs mt-10 pb-4">
        <p class="mb-3 text-[10px] sm:text[12px]">@2024 Turbo Rookie</p>
        <p class="sm:text-sm">Made by Turbo Rookie</p>
       </footer>
      <!-- footer -->
      <script src="../js/script.js"></script>
    </body>
  </html>