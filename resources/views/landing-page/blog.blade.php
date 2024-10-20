<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Blog</title>
    
</head>
<body>
    
    <!-- main content -->
    <!-- navbar -->
    <nav class="w-full flex justify-between px-6 md:px-10 items-center h-14 shadow-md text-sm text-slate-700 bg-white sticky top-0 z-50 mb-8">
        <h1 class="font-extrabold text-lg">Turbo Rookie</h1>
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
          <div class="flex items-center space-x-4">
            <input class="px-4 py-2 border rounded-full" placeholder="Search" type="text"/>
            <button class="px-4 py-2 bg-blue-500 text-white rounded-full">
             Write
            </button>
           </div>
      </nav>
      <!-- navbar -->
    <div class="max-w-4xl mx-auto p-4">
        
        <main>
         <h1 class="text-3xl font-bold">
          Welcome to Turbo Rookie
         </h1>
         <p class="text-gray-600">
          The best place to learn web development
         </p>
         <nav class="mt-4">
            <ul class="flex space-x-4 border-b">
                <!-- Link to "All" page -->
                <li class="py-2 border-b-2 border-black"><a href="#">All</a></li>
        
                <!-- Link to "Tutorials" page -->
                <li class="py-2"><a href="#">Tutorials</a></li>
        
                <!-- Link to "Community Spotlights" page -->
                <li class="py-2"><a href="#">Community Spotlights</a></li>
        
                <!-- Link to "Announcements" page -->
                <li class="py-2"><a href="#">Announcements</a></li>
        
                <!-- Link to "News" page -->
                <li class="py-2"><a href="#">News</a></li>
        
                <!-- Link to "Events" page -->
                <li class="py-2"><a href="#">Events</a></li>
             </ul>
           </nav>
         <section class="mt-6 space-y-6">
          <article class="bg-white p-4 rounded-lg shadow">
           <div class="flex space-x-4">
            <img alt="Illustration of a person celebrating" class="w-36 h-24 object-cover rounded-lg" height="100" src="{{ asset('foto/a.jpg') }}" width="150"/>
            <div>
             <h2 class="text-lg font-semibold">
              Announcement
             </h2>
             <h3 class="text-xl font-bold">
              We are now officially in beta!
             </h3>
             <p class="text-gray-600">
              We're excited to announce that we are officially in beta! This means that we are now open to the public and you can start inviting your friends and colleagues to join the community.
             </p>
            </div>
           </div>
           <div class="text-right mt-4">
            <a href="/read" target="_self">
                <button class="px-4 py-2 bg-blue-500 text-white rounded-full">
                    Read...
                   </button>
            </a>
           </div>
          </article>
          <article class="bg-white p-4 rounded-lg shadow">
           <div class="flex space-x-4">
            <img alt="Notebook and pen on a desk" class="w-36 h-24 object-cover rounded-lg" height="100" src="{{ asset('foto/b.jpg') }}" width="150"/>
            <div>
             <h2 class="text-lg font-semibold">
              Tutorial
             </h2>
             <h3 class="text-xl font-bold">
              How to Build a Web App with React
             </h3>
             <p class="text-gray-600">
              React is a popular JavaScript library used for building user interfaces. In this tutorial, we'll walk you through the process of building a simple web app with React.
             </p>
            </div>
           </div>
           <div class="text-right mt-4">
            <a href="/read" target="_self">
                <button class="px-4 py-2 bg-blue-500 text-white rounded-full">
                    Read...
                   </button>
            </a>
           </div>
          </article>
          <article class="bg-white p-4 rounded-lg shadow">
           <div class="flex space-x-4">
            <img alt="Team of people working together" class="w-36 h-24 object-cover rounded-lg" height="100" src="{{ asset('foto/c.jpg') }}" width="150"/>
            <div>
             <h2 class="text-lg font-semibold">
              Community Spotlight
             </h2>
             <h3 class="text-xl font-bold">
              Meet the Turbo Rookie team
             </h3>
             <p class="text-gray-600">
              We're excited to introduce you to the Turbo Rookie team! We're a group of passionate developers who are on a mission to create the best web development training community on the internet.
             </p>
            </div>
           </div>
           <div class="text-right mt-4">
            <a href="/read" target="_self">
                <button class="px-4 py-2 bg-blue-500 text-white rounded-full">
                    Read...
                   </button>
            </a>
           </div>
          </article>
          <article class="bg-white p-4 rounded-lg shadow">
           <div class="flex space-x-4">
            <img alt="People working on laptops at a hackathon" class="w-36 h-24 object-cover rounded-lg" height="100" src="{{ asset('foto/d.jpg') }}" width="150"/>
            <div>
             <h2 class="text-lg font-semibold">
              Event
             </h2>
             <h3 class="text-xl font-bold">
              Join us for our first community hackathon
             </h3>
             <p class="text-gray-600">
              We're hosting our first community hackathon, and we'd love for you to join us! Whether you're a seasoned developer or just getting started, this is a great opportunity to learn new skills, build something cool, and connect with other members of the community.
             </p>
            </div>
           </div>
           <div class="text-right mt-4">
            <a href="/read" target="_self">
                <button class="px-4 py-2 bg-blue-500 text-white rounded-full">
                    Read...
                   </button>
            </a>
           </div>
          </article>
         </section>
        </main>
    </div>
     <!-- footer -->
     <footer class="w-full text-center text-slate-700  text-xs mt-10 pb-4">
        <p class="mb-3 text-[10px] sm:text[12px]">@2024 Turbo Rookie</p>
        <p class="sm:text-sm">Made by Turbo Rookie</p>
       </footer>
      <!-- footer -->

</body>
</html>
