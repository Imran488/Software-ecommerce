@extends('master')
@include('partials.header')

<center>
    <h1><b><u>Please Login</u></b></h1><br>
    <form action="{{route('user.login')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>

        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="{{route('signup')}}" class="btn btn-primary">SignUp</a>
    </form>
    <div style="height: 100px;"></div>
</center>
