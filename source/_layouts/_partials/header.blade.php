<header class="top-0 left-0 z-40  w-full bg-white dark:bg-gray-900" x-data="data()" x-cloak>
    <nav class="container mx-auto flex sm:flex-row justify-between items-center py-8 px-6">
        <div class="hidden md:flex mb-4 sm:mb-0">
            <a href="/" aria-current="page" class="inline-flex">
                <svg class="feather feather-code h-10 w-10 dark:text-white" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"  viewBox="0 0 24 24">
                    <defs/>
                    <path d="M16 18l6-6-6-6M8 6l-6 6 6 6"/>
                </svg> 
            </a>
        </div>
        <ul class="hidden md:flex  tracking-wide   items-center space-x-8 dark:text-white">
            <li>
                <a href="javascript:void(0);" x-show="theme === false" @click="toggle()"  class=" hover:bg-gray-500">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-moon">
                        <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path>
                    </svg>
                </a>
                <a href="javascript:void(0);" x-show="theme === true" @click="toggle()"  class=" hover:bg-gray-500">
                    <svg class="feather feather-sun" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" >
                        <circle cx="12" cy="12" r="5">
                        </circle><path d="M12 1v2M12 21v2M4.22 4.22l1.42 1.42M18.36 18.36l1.42 1.42M1 12h2M21 12h2M4.22 19.78l1.42-1.42M18.36 5.64l1.42-1.42"></path>
                    </svg>
                </a>
            </li>
            @foreach ($page->urls as $url)
            <li>
                <a href="{{$url->url}}" data-cypress="projects" class="text-copy-primary hover:text-gray-600">
                {{$url->title}}
                </a>
            </li>
            @endforeach
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
                <button x-show="theme === false" @click="toggle()" class="flex lg:hidden justify-center items-center  dark:text-white focus:outline-none h-10 pl-5 pr-3">
                    <svg class="feather feather-moon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path>
                    </svg>
                </button> 
                <button x-show="theme === true" @click="toggle()" class="flex lg:hidden justify-center items-center  dark:text-white focus:outline-none h-10 pl-5 pr-3">
                    <svg class="feather feather-sun" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" >
                        <circle cx="12" cy="12" r="5">
                        </circle><path d="M12 1v2M12 21v2M4.22 4.22l1.42 1.42M18.36 18.36l1.42 1.42M1 12h2M21 12h2M4.22 19.78l1.42-1.42M18.36 5.64l1.42-1.42"></path>
                    </svg>
                </button>
            </div>
            <button x-show="mobileMenu === false" @click="mobileMenu = true" class="flex justify-center items-center  dark:text-white h-10 lg:hidden focus:outline-none">
                <svg class="h-10 w-7 dark:text-white" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" ><path d="M4 6h16M4 12h16M4 18h16"></path></svg>
            </button>
            <button x-show="mobileMenu === true" @click="mobileMenu = false" class="flex justify-center items-center  dark:text-white h-10 lg:hidden focus:outline-none">
                <svg class="h-10 w-7 dark:text-white" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" ><path d="M6 18L18 6M6 6l12 12"></path></svg>
            </button>
        </div>
        
    </nav>
    <nav class="lg:hidden" x-show="mobileMenu">
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
                    <a href="/about" class="mb-4 block font-normal   text-gray-900 dark:text-white">
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
        function data() {
            return {
                mobileMenu: false,
                theme: localStorage.theme == 'dark' ?? false,
                toggle() { 
                    let htmlClasses = document.querySelector('html').classList;
                    if(localStorage.theme == 'dark') {
                        htmlClasses.remove('dark');
                        localStorage.removeItem('theme');
                        this.theme = false;
                    } else {
                        htmlClasses.add('dark');
                        localStorage.theme = 'dark';
                        this.theme = true;
                    }
                }
            }
    }
    </script>