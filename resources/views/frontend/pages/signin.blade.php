@extends('frontend.layouts.app')

@section('title')
    Tree Sharing | SignIn Page
@endsection

@section('styles')
@endsection

@section('content')
    <!-- Main Content -->
    <div class="main-content mb-5">

        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="container mt-4 mb-4">
                    <div class="login-form">
                        <h4>Login Your Account</h4>
                        <form>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                                    placeholder="Enter email">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1"
                                    placeholder="Password">
                            </div>
                            <p class="text-center">
                                <button type="submit" class="btn btn-outline-success btn-login btn-lg">Login Now</button>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- Main Content -->
@endsection

@section('scripts')
@endsection
