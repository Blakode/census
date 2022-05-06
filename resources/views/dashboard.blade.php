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
                Register a citizen    
                </div>
                <span class="ml-3 pr-6"><a href="{{route('user.index')}}">View Reports</a></span>
            </div>
        </div>
    </div>

    <div class="form">
        @if (session()->has('message'))
        <div class="col-md-4 col-sm-3">
            <p class="h4">{{ session()->get('message') }}</p>
        </div>
        @endif
    </div>

        <div class="col-md-7 col-lg-8">
          <h4 class="mb-3">Citizen Registration</h4>
          
          <form action="{{route('user.store')}}" method="POST" >
              @csrf
            <div class="row g-3">
              <div class="col-sm-6">
                <label for="firstName" class="form-label">First name</label>
                <input type="text" class="form-control" id="firstName" placeholder="first name" name="fname"  required>
                <div class="invalid-feedback">
                  Valid first name is required.
                </div>
              </div>
  
              <div class="col-sm-6">
                <label for="lastName" class="form-label">Last name</label>
                <input type="text" class="form-control" id="lastName" placeholder="last name" name="lname" required>
                <div class="invalid-feedback">
                  Valid last name is required.
                </div>
              </div>

              <div class="col-md-5">
                <label for="gender" class="form-label">Gender</label>
                <select class="form-select" id="gender" name="gender" required>
                  <option value="">Choose...</option>
                  <option value="male">male</option>
                  <option value="female">female</option>
                  <option value="rather not say">rather not say</option>
                </select>
                <div class="invalid-feedback">
                  Please select a valid gender.
                </div>
              </div>
  
  
              <div class="col-12">
                <label for="address" class="form-label">Address</label>
                <input type="text" class="form-control" id="address" name="address" placeholder="1234 Main St" required>
                <div class="invalid-feedback">
                  Please enter your shipping address.
                </div>
              </div>
  
              <div class="col-12">
                <label for="phone" class="form-label">Mobile No <span class="text-muted">(+234)</span></label>
                <input type="number" class="form-control" id="phone" name='phone' placeholder="input citizen's contact">
              </div>
  
              <div class="col-md-5">
                <label for="ward" class="form-label">Ward</label>
                <select class="form-select" id="ward" name='ward' required>
                    <option value="">Choose...</option>
                    @foreach ($ward as $ward)
                    <option value="{{$ward->id}}">{{$ward->name}}</option>
                    @endforeach
                </select>
                <div class="invalid-feedback">
                  Please select a valid country.
                </div>
              </div>
  
              <div class="col-md-4">
                <label for="state" class="form-label">State</label>
                <select class="form-select" id="state" name="state" required>
                    <option value="">Choose...</option>
                    @foreach ($state as  $state)
                    <option value="{{$state->id}}">{{$state->name}}</option>
                    @endforeach
                </select>
                <div class="invalid-feedback">
                  Please provide a valid state.
                </div>
              </div>
  
              <div class="col-md-3">
                <label for="LGA" class="form-label">LGA</label>
                <select class="form-select" id="LGA" name="LGA" required>
                    <option value="">Choose...</option>
                    @foreach ($lga as  $lga)
                    <option value="{{$lga->id}}">{{$lga->name}}</option>
                    @endforeach
                </select>
                <div class="invalid-feedback">
                  Please provide a valid state.
                </div>
              </div>
            </div>
        <br/>
            <button class="w-100 btn btn-primary " type="submit">submit</button>
          </form>
            <hr class="my-4">
            
    </div>
        </main>
    </div>
    
</x-app-layout>
