<header class="top-0 left-0 z-40  w-full ">
    <nav class="container mx-auto flex sm:flex-row justify-between items-center py-8 px-6">
        <div class="hidden md:flex mb-4 sm:mb-0">
            <a href="/" aria-current="page" class="inline-flex">
                <svg class="feather feather-code h-10 w-10 dark:text-white" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"  viewBox="0 0 24 24">
                    <defs/>
                    <path d="M16 18l6-6-6-6M8 6l-6 6 6 6"/>
                </svg> 
            </a>
        </div>
        <ul class="hidden md:flex uppercase tracking-wide   items-center space-x-8 dark:text-white">
            <li>
                <a href="#" onclick="toggleDark(); return false;"  class=" hover:bg-gray-500">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-moon">
                        <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path>
                    </svg>
                </a>
            </li>
            <li>
                <a href="/#projects" data-cypress="projects" class="text-copy-primary hover:text-gray-600">
                Home
                </a>
            </li>
            <li>
                <a href="/#projects" data-cypress="projects" class="text-copy-primary hover:text-gray-600">
                Blog
                </a>
            </li>
            <li>
                <a href="/#projects" data-cypress="projects" class="text-copy-primary hover:text-gray-600">
                Work
                </a>
            </li>
            <li>
                <a href="/#projects" data-cypress="projects" class="text-copy-primary hover:text-gray-600">
                About
                </a>
            </li>
            <li>
                <a href="/#projects" data-cypress="projects" class="text-copy-primary hover:text-gray-600">
                Contact
                </a>
            </li>
        </ul>

        
            <div class="flex items-center lg:hidden">
            <a href="/" title="{{ $page->title }}" class="text-grey-900 dark:text-white no-underline flex items-center">
                <svg class="feather feather-code h-10 w-7 dark:text-white" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"  viewBox="0 0 24 24">
                    <defs/>
                    <path d="M16 18l6-6-6-6M8 6l-6 6 6 6"/>
                </svg>
            </a>
        </div>
        <div class="flex justify-start items-center lg:hidden">
            <div class="flex flex-1 justify-end items-center text-right px-4 lg:px-0">
                <button onclick="toggleDark(); return false;" class="flex lg:hidden justify-center items-center  dark:text-white focus:outline-none h-10 pl-5 pr-3">
                    <svg class="feather feather-moon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path>
                    </svg>
                </button> 
            </div>
            <button id="toggleMobile" class="flex justify-center items-center  dark:text-white h-10 lg:hidden focus:outline-none">
                <svg class="h-10 w-7 dark:text-white" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" ><path d="M4 6h16M4 12h16M4 18h16"></path></svg>
            </button>
        </div>
        
    </nav>
    <nav id="mobile-nav" class="hidden lg:hidden">
        <div class="max-w-4xl mx-auto">
            <ul class="my-0 pt-4 list-none border-t-2 dark:border-t border-b-2 dark:border-b border-gray-200 dark:border-gray-500 mx-6">
                <li>
                    <a href="#" class="mb-4 block font-bold text-gray-900 dark:text-white">
                        Home
                    </a>
                </li>
                <li>
                    <a href="#" class="mb-4 block font-normal   text-gray-900 dark:text-white">
                        Blog
                    </a>
                </li>
                <li>
                    <a href="#" class="mb-4 block font-normal   text-gray-900 dark:text-white">
                        Work
                    </a>
                </li>
                <li>
                    <a href="#" class="mb-4 block font-normal   text-gray-900 dark:text-white">
                        About
                    </a>
                </li>
                <li>
                    <a href="#" class="mb-4 block font-normal   text-gray-900 dark:text-white">
                        Contact
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    </header>

    <script>
        var toggleDark = function(){
            let htmlClasses = document.querySelector('html').classList;
            if(localStorage.theme == 'dark') {
                htmlClasses.remove('dark');
                localStorage.removeItem('theme');
            } else {
                htmlClasses.add('dark');
                localStorage.theme = 'dark';
            }
        }

        document.getElementById("toggleMobile").addEventListener("click", function(){
            let nav = document.getElementById("mobile-nav");
            if(nav.classList.contains("hidden")){
                nav.classList.remove("hidden");
            }else{
                nav.classList.add("hidden");
            }
            
        });
    </script>