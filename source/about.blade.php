@extends('_layouts.main')

@section('body')
<div class="container max-w-3xl mx-auto xl:max-w-5xl px-4 xl:px-0">
    <div class="overflow-hidden">
        <div class="relative px-4 pb-16 mx-auto max-w-7xl">
            <div class="mx-auto text-base max-w-prose lg:max-w-none" style="opacity: 1; transform: none;">
                <h1 class="font-source-sans-pro tracking-tight text-gray-900 dark:text-gray-100 text-4xl xl:text-5xl font-extrabold leading-tight xl:leading-tight mb-8">
                About
                </h1>
            </div>

            <div class="flex justify-between">
                <div class="flex h-full w-72">
                    <div class="aspect-w-3 aspect-h-2 sm:aspect-w-3 sm:aspect-h-4">
                        <img class="object-cover rounded-lg shadow-lg" src="{{$page->profile_picture}}" alt="Jake Prins">
                    </div>
                </div>
                <div class="flex">
                    <div class="space-y-1 text-lg font-medium leading-6 ml-12">
                    <h3>{{$page->name}}</h3>
                    <p class="text-indigo-600">Full-stack Developer</p>
                    <div class="text-lg">
                        <p class="text-gray-500">
                            I am a full-stack developer using both PHP and JavaScript at my work.
                        </p>
                    </div>
                    <ul class="flex space-x-5">
                        <li>
                            <a href="https://twitter.com/jakeprins_nl" class="text-gray-400 hover:text-gray-500">
                        <span class="sr-only">Twitter</span>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true"><path d="M6.29 18.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0020 3.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.073 4.073 0 01.8 7.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 010 16.407a11.616 11.616 0 006.29 1.84"></path></svg>
                    </a>
                    </li>
                    </ul>
                    </div>
                    
                </div>
            </div>
            
        </div>
    </div>
</div>
@endsection