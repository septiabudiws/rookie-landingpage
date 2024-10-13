<x-layout-landing>
    <x-slot:title>Contact</x-slot:title>

    <!-- main content -->
    <main class=" px-10 w-full h-auto sm:w-4/5 sm:px-2 mx-auto text-slate-700">
        <h1 class="font-bold text-base sm:text-xl mb-2">Contact Us</h1>
        <p class="font-light text-base mb-4">
            Hey, thanks for visiting! Got any questions, suggestions, or just want to chat? Go ahead and fill out the form below, and we’ll get back to you soon! It usually takes about 24-48 hours, but we always try to respond as quickly as possible.
        </p>
        <div class="sm:flex">

            <form action="" method="" class=" sm:w-3/5">
                <ul>
                    <label for="nama" class="text-sm font-semibold">Full Name</label>
                    <li class="mt-1 border-slate-300 focus-within:outline focus-within:outline-1 focus-within:outline-slate-400 border sm:py-2 py-1 px-2 rounded-md w-full flex items-center mb-2 ">
                        <input type="text" name="nama" id="nama" placeholder="Ethan Parker" required class="outline-none bg-transparent placeholder:text-xs sm:placeholder:text-sm placeholder:font-light text-xs w-full">
                    </li>
                    <label for="nama" class="text-sm font-semibold">Subject</label>
                    <li class="mt-1 border-slate-300 focus-within:outline focus-within:outline-1 focus-within:outline-slate-400  border sm:py-2 py-1 px-2 rounded-md w-full flex items-center mb-2 ">
                        <input type="text" name="nama" id="nama" placeholder="Web programming" required class="outline-none bg-transparent placeholder:text-xs sm:placeholder:text-sm placeholder:font-light text-xs w-full">
                    </li>
                    <label for="nama" class="text-sm font-semibold">Message</label>
                    <li class="mt-1 border-slate-300 focus-within:outline focus-within:outline-1 focus-within:outline-slate-400  border py-1 px-2 rounded-md w-full flex items-center mb-2">
                        <textarea name="" id="" placeholder="Type your message here" class="outline-none bg-transparent placeholder:text-xs sm:placeholder:text-sm placeholder:font-light resize-none w-full h-40 text-xs"></textarea>
                    </li>
                    <li class="flex justify-start mt-5">
                        <button type="submit" class="text-sm font-semibold  sm:py-2 sm:px-5 py-1 px-4 rounded-full bg-blue-500 text-slate-50 hover:bg-blue-300 hover:text-slate-600 transition-all shadow-md sm:font-medium">Send</button>
                    </li>
                </ul>
            </form>
            
            <div class="sm:w-2/5 sm:flex items-center justify-end hidden  rounded-xl">
                <img src="../foto/roket.png" alt="" class="w-3/6">
            </div>
        </div>
    </main>
    <!-- main content -->
</x-layout-landing>