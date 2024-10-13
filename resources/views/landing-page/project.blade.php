<x-layout-landing>
    <x-slot:title>Project</x-slot:title>

    <!-- main content -->
    <main class=" px-10 w-full h-auto sm:w-4/5 sm:px-2 mx-auto">
        <header class="w-full sm:h-[470px] h-72 rounded-2xl overflow-hidden flex items-end pb-6 sm:pt-32 mb-6 text-slate-700 bg-cover bg-center bg-no-repeat" style="background-image: url(foto/profil_rookie.jpg);">
            <div class="px-7 md:px-8">
                <h1 class="text-lg sm:text-2xl font-bold text-slate-50">Transforming Ideas into Reality</h1>
                <p class="text-xs sm:text-sm font-thin mb-3 sm:mb-5 text-slate-50">At Turbo Rookie, we empower our community to turn innovative ideas into impactful web projects. Explore our portfolio of successful collaborations, showcasing the creativity and expertise of our members in the ever-evolving digital landscape.</p>
                <form action="" method="">
                    <div class="flex items-center bg-white w-fit sm:py-[6px] sm:px-4 py-1 px-3 sm:rounded-xl rounded-lg">
                        <input type="email" name="email" placeholder="Discover our projects" class="placeholder:text-sm placeholder:text-left pl-1 bg-transparent outline-none " required>
                        <button type="submit" class="bg-blue-500 sm:py-[6px] sm:px-4 py-1 px-1 rounded-full text-slate-50 hover:bg-blue-300 hover:text-slate-600 font-medium sm:text-sm text-xs shadow-md transition-all" title="subscribe">
                            <span class="hidden sm:inline">Search</span>
                            <svg class="w-5 h-5 sm:hidden" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="m21 21-3.5-3.5M17 10a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z"/>
                              </svg>                                                 
                        </button>
                    </div>
                </form>
            </div>
          </header>

          <div class="text-sm text-slate-700 w-full">
            <h2 class="font-semibold sm:text-base mt-4">Completed Project</h2>
            <div class="flex  justify-center flex-wrap">
                <div class="w-full md:w-80 sm:w-60 shadow-lg p-2 sm:p-4 rounded-xl mx-1 my-2 justify-center flex">
                    <figure class="text-sm">
                        <div class="overflow-hidden rounded-lg mb-1">
                        <img src="../foto/project1.jpg" alt="" class="transition-all hover:scale-[1.2] w-80 sm:w-72">
                        </div>
                        <figcaption class="font-medium"><a href="/detail" class="hover:underline transition-all">Lorem ipsum dolor sit amet.</a></figcaption>
                        <p class="text-xs font-normal">by ahmeid</p>
                        <p class="text-sm font-light">React, Node.js, MongoDB</p>
                    </figure>
                </div>
                <div class="w-full md:w-80 sm:w-60 shadow-lg p-2 sm:p-4 rounded-xl mx-1 my-2 justify-center flex">
                    <figure class="text-sm">
                        <div class="overflow-hidden rounded-lg mb-1">
                        <img src="../foto/project2.jpg" alt="" class="transition-all hover:scale-[1.2] w-80 sm:w-72">
                        </div>
                        <figcaption class="font-medium"><a href="/detail" class="hover:underline transition-all">Lorem ipsum dolor sit amet.</a></figcaption>
                        <p class="text-xs font-normal">by ahmeid</p>
                        <p class="text-sm font-light">React, Node.js, MongoDB</p>
                    </figure>
                </div>
                <div class="w-full md:w-80 sm:w-60 shadow-lg p-2 sm:p-4 rounded-xl mx-1 my-2 justify-center flex">
                    <figure class="text-sm">
                        <div class="overflow-hidden rounded-lg mb-1">
                        <img src="../foto/project3.jpg" alt="" class="transition-all hover:scale-[1.2] w-80 sm:w-72">
                        </div>
                        <figcaption class="font-medium"><a href="/detail" class="hover:underline transition-all">Lorem ipsum dolor sit amet.</a></figcaption>
                        <p class="text-xs font-normal">by ahmeid</p>
                        <p class="text-sm font-light">React, Node.js, MongoDB</p>
                    </figure>
                </div>
            </div>

            <h2 class="font-semibold sm:text-base mt-4">Ongoing Project</h2>
            <div class="flex  justify-center flex-wrap">
                <div class="w-full md:w-80 sm:w-60 shadow-lg p-2 sm:p-4 rounded-xl mx-1 my-2 justify-center flex">
                    <figure class="text-sm">
                        <div class="overflow-hidden rounded-lg mb-1">
                        <img src="../foto/project4.jpg" alt="" class="transition-all hover:scale-[1.2] w-80 sm:w-72">
                        </div>
                        <figcaption class="font-medium"><a href="/detail" class="hover:underline transition-all">Lorem ipsum dolor sit amet.</a></figcaption>
                        <p class="text-xs font-normal">by ahmeid</p>
                        <p class="text-sm font-light">React, Node.js, MongoDB</p>
                    </figure>
                </div>
                <div class="w-full md:w-80 sm:w-60 shadow-lg p-2 sm:p-4 rounded-xl mx-1 my-2 justify-center flex">
                    <figure class="text-sm">
                        <div class="overflow-hidden rounded-lg mb-1">
                        <img src="../foto/project5.jpg" alt="" class="transition-all hover:scale-[1.2] w-80 sm:w-72">
                        </div>
                        <figcaption class="font-medium"><a href="/detail" class="hover:underline transition-all">Lorem ipsum dolor sit amet.</a></figcaption>
                        <p class="text-xs font-normal">by ahmeid</p>
                        <p class="text-sm font-light">React, Node.js, MongoDB</p>
                    </figure>
                </div>
            </div>

        </div>
    </main>
    <!-- main content -->
     
</x-layout-landing>