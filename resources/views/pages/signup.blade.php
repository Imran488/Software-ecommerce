@extends('master')
@section('content')
@include('partials.header')
<center>
    <h1><b><u>SignUp Here</u></b></h1><br>
    <form action="{{route('user.signup')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <input type="name" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"placeholder="Enter Your Name"required>
        </div>


        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"placeholder="Enter email"required>
            <strong id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</strong>
        </div>

        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password"required>
            <strong id="passwordHelp" class="form-text text-muted">Password Should be Strong.</strong>
        </div>

        <div class="form-group">
            <label for="exampleInputPassword1">Mobile Number</label>
            <input type="number" name="mobile" class="form-control" id="exampleInputPassword1" placeholder="Enter Your Contact Number"required>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="{{route('login')}}" class="btn btn-danger">Cancel</a>
    </form>
    <div style="height: 100px;"></div>
</center>
@endsection
