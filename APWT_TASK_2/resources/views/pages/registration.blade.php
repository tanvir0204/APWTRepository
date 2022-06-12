@extends('layouts.app')
@section('Contain')

<h2 class= "text-center">Register</h2>
<h6 class= "text-center">Please fill in this form to create an account.</h6>
<form action="{{route('registration')}}" class="w-50 mx-auto" method="post">
   
    {{csrf_field()}}

    <div class="form-group">
        <span>First Name</span>
        <input type="text" name="fname" value="{{old('fname')}}" class="form-control">
        @error('fname')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <div class="  form-group">
        <span>Last Name</span>
        <input type="text" name="lname" value="{{old('lname')}}" class="form-control">
        @error('lname')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <div class="  form-group">
        <span>Email</span>
        <input type="text" name="email" value="{{old('email')}}" class="form-control">
        @error('email')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <div class="  form-group">
        <span>Password</span>
        <input type="text" name="password" value="{{old('password')}}" class="form-control">
        @error('password')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <div class="  form-group">
        <span>Date of Birth</span>
        <input type="date" name="dob" value="{{old('dob')}}" class="form-control">
    </div>
    
    <div class="  form-group">
        <span>Address</span>
        <input type="text" name="address" value="{{old('address')}}" class="form-control">
        @error('address')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <br>
    <input type="submit" class="btn btn-success" value="Add" >                  
</form>
@endsection  