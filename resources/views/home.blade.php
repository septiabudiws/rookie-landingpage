<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Turbo Rookie | Home</title>
    <script src="https://cdn.tailwindcss.com"></script>
  </head>
  <body>

    <!-- navbar -->
    <nav class="w-full flex justify-between px-6 md:px-10 items-center h-14 shadow-md text-sm text-slate-700 bg-white sticky top-0">
      <h1 class="font-extrabold text-lg">Turbo Rookie</h1>
      <ul class="hidden sm:flex">
        <li class="px-3 font-medium hover:text-slate-400">
          <a href="">Home</a>
        </li>
        <li class="px-3 font-medium hover:text-slate-400">
          <a href="">About</a>
        </li>
        <li class="px-3 font-medium hover:text-slate-400">
          <a href="">Project</a>
        </li>
        <li class="px-3 font-medium hover:text-slate-400">
          <a href="">Contact</a>
        </li>
        <li class="px-3 font-medium hover:text-slate-400">
          <a href="">Blog</a>
        </li>
      </ul>
        <div class="flex sm:hidden">
            <button type="button" id="tombolmenu" class="cursor-pointer">
                <svg
                class="w-6 h-6 text-slate-700 hover:text-slate-400"
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
            <a href="" class="cursor-pointer px-5 py-1 rounded-full  bg-blue-400 text-slate-50 hover:bg-blue-300 hover:text-slate-600 ml-2 font-medium shadow-md">
                <span class="">Join</span>
            </a>
        </div>
      <a href="" class="px-4 py-2 bg-blue-400 rounded-3xl shadow-md text-slate-50 hover:bg-blue-300 hover:text-slate-600 cursor-pointer font-medium sm:block hidden">
        <span>Join With Us</span>
      </a>
    </nav>
    <!-- navbar -->

    <!-- menu toggle -->
    <div class="hidden rounded-2xl shadow-lg w-36  py-5 fixed top-16 right-10 bg-white" id="menu">
      <ul class="pl-4">
        <li class="py-1 hover:text-slate-400">           
            <a href="" class="flex items-start">
                <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m4 12 8-8 8 8M6 10.5V19a1 1 0 0 0 1 1h3v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3h3a1 1 0 0 0 1-1v-8.5"/>
                </svg>                  
                <span class="ml-1">Home</span>
            </a>
        </li>
        <li class="py-1 hover:text-slate-400">
            <a href="" class="flex items-start">
                <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M4.5 17H4a1 1 0 0 1-1-1 3 3 0 0 1 3-3h1m0-3.05A2.5 2.5 0 1 1 9 5.5M19.5 17h.5a1 1 0 0 0 1-1 3 3 0 0 0-3-3h-1m0-3.05a2.5 2.5 0 1 0-2-4.45m.5 13.5h-7a1 1 0 0 1-1-1 3 3 0 0 1 3-3h3a3 3 0 0 1 3 3 1 1 0 0 1-1 1Zm-1-9.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0Z"/>
                </svg>                      
                <span class="pl-1">About</span>
            </a>
        </li>
        <li class="py-1 hover:text-slate-400">
            <a href="" class="flex items-start">
                <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.5 8H4m0-2v13a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1V9a1 1 0 0 0-1-1h-5.032a1 1 0 0 1-.768-.36l-1.9-2.28a1 1 0 0 0-.768-.36H5a1 1 0 0 0-1 1Z"/>
                </svg>
                <span class="pl-1">Project</span>
            </a>
        </li>
        <li class="py-1 hover:text-slate-400">
            <a href="" class="flex items-start">
                <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.427 14.768 17.2 13.542a1.733 1.733 0 0 0-2.45 0l-.613.613a1.732 1.732 0 0 1-2.45 0l-1.838-1.84a1.735 1.735 0 0 1 0-2.452l.612-.613a1.735 1.735 0 0 0 0-2.452L9.237 5.572a1.6 1.6 0 0 0-2.45 0c-3.223 3.2-1.702 6.896 1.519 10.117 3.22 3.221 6.914 4.745 10.12 1.535a1.601 1.601 0 0 0 0-2.456Z"/>
                </svg>                  
                <span class="pl-1">Contact</span>
            </a>
        </li>
        <li class="py-1 hover:text-slate-400">
            <a href="" class="flex items-start">
                <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 19V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v13H7a2 2 0 0 0-2 2Zm0 0a2 2 0 0 0 2 2h12M9 3v14m7 0v4"/>
                </svg>                  
                <span class="pl-1">Blog</span>
            </a>
        </li>
      </ul>
    </div>
    <!-- menu toggle -->

    <!-- main content -->
     <main class=" px-10 w-full h-auto sm:w-4/5 sm:px-2 mx-auto pt-8">
      
      <header class="w-full sm:h-[470px] h-72 rounded-2xl overflow-hidden flex items-center pt-20 mb-6 text-slate-700" style="background-image: url(foto/placeholder\ foto.jpg); background-size: cover; background-position: center;">
        <div class="px-7 md:px-8 text-center">
          <h1 class="text-xl sm:text-2xl font-bold">Master web development</h1>
          <p class="text-xs sm:text-sm font-thin mb-3 sm:mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos adipisci quam perferendis commodi, at voluptatem. Nulla iste eaque vitae repudiandae?Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dicta, corporis.</p>
          <a href="" class="py-2 px-3 bg-blue-400 rounded-full text-sm shadow-md font-medium text-slate-50 hover:bg-blue-300 hover:text-slate-600 cursor-pointer">Contact Us</a>
        </div>
      </header>

      <div class="text-slate-700 w-full">
        <h1 class="font-bold text-base sm:text-xl">Why Turbo Rookie ?</h1>

        <h2 class="font-semibold text-sm sm:text-base mt-2">Our values</h2>
        <div class="flex  justify-center flex-wrap">
          <div class="w-full sm:w-36 shadow-lg p-2 sm:p-4 rounded-xl mx-1 my-2">
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"     height="24" fill="none" viewBox="0 0 24 24">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
            </svg>
            <h3 class="font-semibold text-sm sm:text-base">Eficiency</h3>
            <p class="font-thin text-xs sm:text-sm">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Asperiores, voluptates!</p>  
          </div>
          <div class="w-full sm:w-36 shadow-lg p-2 sm:p-4 rounded-xl mx-1 my-2">
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
              <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M4.5 17H4a1 1 0 0 1-1-1 3 3 0 0 1 3-3h1m0-3.05A2.5 2.5 0 1 1 9 5.5M19.5 17h.5a1 1 0 0 0 1-1 3 3 0 0 0-3-3h-1m0-3.05a2.5 2.5 0 1 0-2-4.45m.5 13.5h-7a1 1 0 0 1-1-1 3 3 0 0 1 3-3h3a3 3 0 0 1 3 3 1 1 0 0 1-1 1Zm-1-9.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0Z"/>
            </svg>            
            <h3 class="font-semibold text-sm sm:text-base">Community first</h3>
            <p class="font-thin text-xs sm:text-sm">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Asperiores, voluptates!</p>  
          </div>
          <div class="w-full sm:w-36 shadow-lg p-2 sm:p-4 rounded-xl mx-1 my-2">
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18.5A2.493 2.493 0 0 1 7.51 20H7.5a2.468 2.468 0 0 1-2.4-3.154 2.98 2.98 0 0 1-.85-5.274 2.468 2.468 0 0 1 .92-3.182 2.477 2.477 0 0 1 1.876-3.344 2.5 2.5 0 0 1 3.41-1.856A2.5 2.5 0 0 1 12 5.5m0 13v-13m0 13a2.493 2.493 0 0 0 4.49 1.5h.01a2.468 2.468 0 0 0 2.403-3.154 2.98 2.98 0 0 0 .847-5.274 2.468 2.468 0 0 0-.921-3.182 2.477 2.477 0 0 0-1.875-3.344A2.5 2.5 0 0 0 14.5 3 2.5 2.5 0 0 0 12 5.5m-8 5a2.5 2.5 0 0 1 3.48-2.3m-.28 8.551a3 3 0 0 1-2.953-5.185M20 10.5a2.5 2.5 0 0 0-3.481-2.3m.28 8.551a3 3 0 0 0 2.954-5.185"/>
            </svg>      
            <h3 class="font-semibold text-sm sm:text-base">Growth mindset</h3>
            <p class="font-thin text-xs sm:text-sm">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Asperiores, voluptates!</p>  
          </div>
          <div class="w-full sm:w-36 shadow-lg p-2 sm:p-4 rounded-xl mx-1 my-2">
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.99 9H15M8.99 9H9m12 3a9 9 0 1 1-18 0 9 9 0 0 1 18 0ZM7 13c0 1 .507 2.397 1.494 3.216a5.5 5.5 0 0 0 7.022 0C16.503 15.397 17 14 17 13c0 0-1.99 1-4.995 1S7 13 7 13Z"/>
            </svg>                               
            <h3 class="font-semibold text-sm sm:text-base">Empathy</h3>
            <p class="font-thin text-xs sm:text-sm">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Asperiores, voluptates!</p>  
          </div>
          <div class="w-full sm:w-36 shadow-lg p-2 sm:p-4 rounded-xl mx-1 my-2">
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.5 11.5 11 14l4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
            </svg>                      
            <h3 class="font-semibold text-sm sm:text-base">Quality over quantity</h3>
            <p class="font-thin text-xs sm:text-sm">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Asperiores, voluptates!</p>  
          </div>
          <div class="w-full sm:w-36 shadow-lg p-2 sm:p-4 rounded-xl mx-1 my-2">
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 4h3a1 1 0 0 1 1 1v15a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V5a1 1 0 0 1 1-1h3m0 3h6m-6 7 2 2 4-4m-5-9v4h4V3h-4Z"/>
            </svg>             
            <h3 class="font-semibold text-sm sm:text-base">Real project</h3>
            <p class="font-thin text-xs sm:text-sm">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Asperiores, voluptates!</p>  
          </div>
        </div>

        <h2 class="font-semibold text-sm sm:text-base mt-2">What you'll learn</h2>
        <div class="flex  justify-center flex-wrap">
          <a href="" class="w-28 sm:w-36 hover:shadow-2xl p-2  rounded-xl mx-1 my-2">
            <img src="../foto/html.png" alt="">
            <p class="text-center font-semibold text-sm sm:text-base">HTML</p>
          </a>
          <a href="" class="w-28 sm:w-36 hover:shadow-2xl p-2 rounded-xl mx-1 my-2">
            <img src="../foto/css.png" alt="">
            <p class="text-center font-semibold text-sm sm:text-base">CSS</p>
          </a>
          <a href="" class="w-28 sm:w-36 hover:shadow-2xl p-2  rounded-xl mx-1 my-2">
            <img src="../foto/php.png" alt="" >
            <p class="text-center font-semibold text-sm sm:text-base">PHP</p>
          </a>
          <a href="" class="w-28 sm:w-36 hover:shadow-2xl p-2  rounded-xl mx-1 my-2">
            <img src="../foto/bootstrap.png" alt="" >
            <p class="text-center font-semibold text-sm sm:text-base">Bootstrap</p>
          </a>
          <a href="" class="w-28 sm:w-36 hover:shadow-2xl p-2  rounded-xl mx-1 my-2">
            <img src="../foto/laravel.png" alt="">
            <p class="text-center font-semibold text-sm sm:text-base">Laravel</p>
          </a>
          <a href="" class="w-28 sm:w-36 hover:shadow-2xl p-2  rounded-xl mx-1 my-2">
            <img src="../foto/git.png" alt="" >
            <p class="text-center font-semibold text-sm sm:text-base">Git</p>
          </a>
        </div>
      </div>
     </main>
    <!-- main content -->

    <!-- footer -->
     <footer class="w-full text-center text-slate-700  text-xs mt-10 pb-4">
      <p class="mb-3 text-[10px] sm:text[12px]">@2024 Turbo Rookie</p>
      <p class="sm:text-sm">Made by Turbo Rookie</p>
     </footer>
    <!-- footer -->
    <script src="{{ asset('js/script.js') }}"></script>
  </body>
</html>
