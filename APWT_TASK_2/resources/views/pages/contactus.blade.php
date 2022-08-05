@extends('layouts.app')
@section('Contain')
<h4 class= "text-center">How Can We Help You?</h4>
<form action="{{route('contactus')}}"  class="w-50 mx-auto" method="post">
    <!-- Cross Site Request Forgery-->
    {{csrf_field()}}

    <div class="   form-group">
        <span>Name</span>
        <input type="text" name="name" value="{{old('name')}}" class="form-control">
        @error('name')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <div class="   form-group">
        <span>Email</span>
        <input type="text" name="email" value="{{old('email')}}" class="form-control">
        @error('email')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
<br>

    <div class="form-group">
     <textarea rows="4" cols="100"  name="comment" placeholder="Enter Text"></textarea>
    </div>
    <input type="submit" class="btn btn-success" value="Send" >                  
</form>
@endsection