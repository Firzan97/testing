@extends('base')
@section('main')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
 
    <!-- <h1 class="display-3">Insert your Details</h1> -->
    <h1> Insert Your Details</h1>
  <div>
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="POST" action="/insertDetails">
          @csrf
          <div class="form-group">    
              <label for="name">Name:</label>
              <input type="text" class="form-control" name="name"/>
          </div>
          <div class="form-group">
              <label for="phoneNum">Phone Number:</label>
              <input type="text" class="form-control" name="phoneNum"/>
          </div>
          <div class="form-group">
              <label for="email">Email:</label>
              <input type="text" class="form-control" name="email"/>
          </div>
          <div class="form-group">
              <label for="birthdate">Birthdate:</label>
              <input type="date" class="form-control" name="birthdate"/>
          </div>
          <div class="form-group">
              <label for="age">Age:</label>
              <input type="text" class="form-control" name="age"/>
          </div>
          <div class="form-group">
              <label for="occupation">Occupation:</label>
              <input type="text" class="form-control" name="occupation"/>
          </div>      
          <div class="form-group">
              <label for="gender">Gender:</label>
              <input type="text" class="form-control" name="gender"/>
          </div> 
          <div class="form-group">
              <label for="address">Address:</label>
              <input type="text" class="form-control" name="address"/>
          </div>     
          <div class="form-group">
              <label for="postcode">Postcode:</label>
              <input type="text" class="form-control" name="postcode"/>
          </div>            
          <div class="form-group">
              <label for="city">City:</label>
              <input type="text" class="form-control" name="city"/>
          </div>        
          <div class="form-group">
              <label for="state">State:</label>
              <input type="text" class="form-control" name="state"/>
          </div>    
          <button type="submit" class="btn btn-primary-outline">Save Details </button>
      </form>
  </div>
</div>
</div>
@endsection