@extends('_layouts.main')

@section('body')
<section class="px-3 lg:px-0 ">
  <div class="mt-16 mx-auto max-w-7xl px-4 sm:mt-24 sm:px-6">
    <div class="text-center">
      <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white sm:text-5xl md:text-6xl">
        <span class="block">Recent Works</span>
      </h1>
      <p class="mt-3 max-w-md mx-auto text-base text-gray-500 dark:text-white sm:text-lg md:mt-5 md:text-xl md:max-w-3xl">
        My recent projects with I worked in last 5 years.
        </p>
    </div>
</div>

<div class="relative pt-16 pb-32 lg:overflow-hidden">
  @foreach ($page->projects as $project)
    @if ($loop->first)
    <div class="relative">
    @else
    <div class="mt-24">
    @endif

    @if ($loop->even)
    <div class="lg:mx-auto lg:max-w-7xl lg:px-8 lg:grid lg:grid-cols-2 lg:grid-flow-col-dense lg:gap-24">
      <div class="px-4 max-w-xl mx-auto sm:px-6 lg:py-32 lg:max-w-none lg:mx-0 lg:px-0 lg:col-start-2">
        <div>
          <div class="mt-6">
            <h2 class="text-3xl font-extrabold tracking-tight text-gray-900 dark:text-white">
              {{$project->title}}
            </h2>
            <p class="mt-4 text-lg text-gray-500 dark:text-white">
              {{$project->description}}
            </p>
            <div class="mt-6">
              <a target="_blank" rel="nofollow" class="text-base font-medium dark:text-white" 
              href="https://clickandcollection.com/?utm_source=jumpstartpro">
                See Website →
              </a>
            </div>
          </div>
        </div>
        <div class="mt-8 border-t border-gray-200 pt-6">
          
        </div>
        
        
      </div>
      <div class="mt-12 sm:mt-16 lg:mt-0 lg:col-start-1">
        <div class="pr-4 -ml-48 sm:pr-6 md:-ml-16 lg:px-0 lg:m-0 lg:relative lg:h-full">
          <img class="w-full rounded-xl shadow-xl ring-1 ring-black ring-opacity-5 lg:absolute lg:right-0 lg:h-full lg:w-auto lg:max-w-none" 
          src="{{$project->image}}">
        </div>
      </div>
    </div>
    @else

    <div class="lg:mx-auto lg:max-w-7xl lg:px-8 lg:grid lg:grid-cols-2 lg:grid-flow-col-dense lg:gap-24">
      <div class="px-4 max-w-xl mx-auto sm:px-6 lg:py-16 lg:max-w-none lg:mx-0 lg:px-0">
        <div>
          <div class="mt-6">
            <h2 class="text-3xl font-extrabold tracking-tight text-gray-900 dark:text-white">
              {{$project->title}}
            </h2>
            <p class="mt-4 text-lg text-gray-500 dark:text-white">
              {{$project->description}}
            </p>
            <div class="mt-6">
              <a target="_blank" rel="nofollow" class="text-base font-medium dark:text-white" href="https://clickandcollection.com/?utm_source=jumpstartpro">
                See Website →
              </a>
            </div>
          </div>
        </div>
        <div class="mt-8 border-t border-gray-200 pt-6">
          
        </div>
      </div>
      <div class="mt-12 sm:mt-16 lg:mt-0">
        <div class="pl-4 -mr-48 sm:pl-6 md:-mr-16 lg:px-0 lg:m-0 lg:relative lg:h-full">
          <img class="w-full rounded-xl shadow-xl ring-1 ring-black ring-opacity-5 lg:absolute lg:left-0 lg:h-full lg:w-auto lg:max-w-none" 
          src="{{$project->image}}">
        </div>
      </div>
    </div>
    @endif
  </div>
  @endforeach 
</div>
  
    
      
       
</section>
@endsection