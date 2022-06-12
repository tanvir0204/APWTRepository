@extends('layouts.app')
@section('Contain')
<h4 class= "text-center">Login to your account</h4>
<form action="{{route('login')}}" class="w-50 mx-auto" method="post">
{{csrf_field()}}
<div class="form-group">
        <span>Username</span>
        <input type="text" name="username" value="{{old('username')}}" class="form-control">
        @error('username')
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
    <br>
    <input type="submit" class="btn btn-success" value="LOGIN" >                  
</form>
@endsection