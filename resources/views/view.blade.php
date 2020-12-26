@extends('base')
@section('main')
<div class="row">
<div class="col-sm-12">
    <h1 class="display-3">Details</h1>    
  <table class="table table-striped">
    <thead>
        <tr>
          <td>id</td>
          <td>Name</td>
          <td>Phone Number</td>
          <td>Email</td>
          <td>Birth Date</td>
          <td>Age</td>
          <td>Occupation</td>
          <td>Address</td>
          <td>PostCode</td>
          <td>City</td>
          <td>State</td>
        </tr>
    </thead>
    <tbody>
        @foreach($userDetails as $userDetails)
        <tr>
            <td>{{$userDetails->id}}</td>
            <td>{{$userDetails->name}}</td>
            <td>{{$userDetails->phoneNum}}</td>
            <td>{{$userDetails->email}}</td>
            <td>{{$userDetails->birthdate}}</td>
            <td>{{$userDetails->age}}</td>
            <td>{{$userDetails->occupation}}</td>
            <td>{{$userDetails->address}}</td>
            <td>{{$userDetails->postcode}}</td>
            <td>{{$userDetails->city}}</td>
            <td>{{$userDetails->state}}</td>
            <td>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
</div>
@endsection