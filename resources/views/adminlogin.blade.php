@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Admin Login') }}</div>

                <div class="card-body">
                    <form action="{{route('auth')}}" method="post">
                        @csrf
                      <h3>Login to Dashboard</h3>
                      <p>Please enter your user and password to continue</p>
                      <div class="mb-3">
                        <label>Admin Name</label>
                        <div class="input-group">
                          <input type="text" class="form-control" placeholder="User Name" name="name" required="">
                          <div class="invalid-feedback">Please provide a valid email.</div>
                        </div>
                      </div>
                      <div class="mb-2">
                        <label>Password</label>
                        <div class="input-group">
                          <input type="password" class="form-control" placeholder="Password" name="password" required="">
                          <div class="invalid-feedback">Please provide a password.</div>
                        </div>
                      </div>
                      <button class="btn btn-primary mt-4 d-block w-100" type="submit">Sign In</button>
                      @if (session()->has('error'))
                      <div class="alert alert-danger alert-outline" role="alert">
                        {{session('error')}}
                       </div>
                        @endif
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
