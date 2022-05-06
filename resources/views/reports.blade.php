<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    
    <div class="container">
        <main>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
               Data of Registered Citizens
                </div>
            </div>
        </div>
    </div>

    <div class="list-group">
        @foreach ($citizen as $citizen )
        <a href="#" class="list-group-item list-group-item-action d-flex gap-3 py-3 mb-3" aria-current="true">
          <img src="https://github.com/twbs.png" alt="twbs" width="32" height="32" class="rounded-circle flex-shrink-0">
          <div class="d-flex gap-2 w-100 justify-content-between">
            <div>
              <h6 class="mb-0">Fetch ward with citizen relationship</h6>
            
              <p class="mb-0 opacity-75">Name: {{$citizen->name}} </p>
              <p class="mb-0 opacity-75">Name: {{$citizen->gender}} </p>
              <p class="mb-0 opacity-75">Ward: {{$citizen['ward']['name']}} </p> 
              
            </div>
            <small class="opacity-50 text-nowrap">now</small>
          </div>
        </a>
        @endforeach
        <br/>

       
      </div>


      {{-- <div class="list-group">
        @foreach ($ward as $ward )
        <a href="#" class="list-group-item list-group-item-action d-flex gap-3 py-3 mb-3" aria-current="true">
          <img src="https://github.com/twbs.png" alt="twbs" width="32" height="32" class="rounded-circle flex-shrink-0">
          <div class="d-flex gap-2 w-100 justify-content-between">
            <div>
              <h6 class="mb-0">Fetch citizen with ward realtionship</h6>
              
            </div>
            <small class="opacity-50 text-nowrap">now</small>
          </div>
        </a>
        @endforeach
        <br/>

       
      </div>
     --}}


        
      </div>



        </main>
    </div>
    
</x-app-layout>