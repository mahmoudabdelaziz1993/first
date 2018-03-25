@extends('layout.main')
@section('title','LOGIN | PAGE')
@section('name','LOGIN | PAGE')
@section("content")
    @if ($errors->any())
        <div class="alert alert-warning">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="raw">
        <div class="col-md-6">
            <form action="{{route('sign')}}" method="post">
                <div class="form-group">
                    <label for="E.mail">Email</label>
                    <input type="text" name="email" id="email" class="form-control">
                </div>

                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" class="form-control">
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="text" name="password" id="password" class="form-control">
                </div>
                <button type="submit" class="btn bg-primary">register</button>
                <input type="hidden" name="_token" value="{{Session::token()}}">

            </form>
        </div>
        <div class="col-md-6">
            <h3> Login Here</h3>
            <form action="{{route('signin')}}" method="post">
                <div class="form-group">
                    <label for="E.mail">Email</label>
                    <input type="text" name="email" id="email" class="form-control">
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="text" name="password" id="password" class="form-control">
                </div>
                <button type="submit" class="btn bg-primary">Login</button>
                <input type="hidden" name="_token" value="{{Session::token()}}">

            </form>
        </div>
    </div>

@endsection