@extends('master')
@section('content')
@include('partials.header')

<center>
    <h1><b><u>Please Login</u></b></h1><br>
    <form action="{{route('user.login')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"placeholder="Enter email"required>
        </div>

        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Enter Password"required>
            <strong id="passwordHelp" class="form-text text-muted">If You Have Didnt Account SignUp First</strong>
        </div>
        <button type="submit" class="btn btn-primary">SignIn</button>
        <a href="{{route('signup')}}" class="btn btn-danger">SignUp</a>
    </form>
    <div style="height: 100px;"></div>
</center>
@endsection
