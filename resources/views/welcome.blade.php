@extends('layouts.app')

@section('title')
    Welcome Page
@endsection
@section('content')
    <div class="container">
        <div class="row my-5">
            <div class="col-md-6 mx-auto">
            <div class="card">
                <div class="card-header bg-primary">
                    <center>
                     <h5 class="text-light">Welcome to the Employee Management System</h5>
                    </center>
                </div>
                <div class="card-body">
                    @guest
                        <div class="row">
                            <div class="col-md-6">
                                <a href="{{ route('login') }}" class="btn btn-success btn-block">Login</a>
                            </div>
                        </div>
                    @endguest
                    @auth
                        <div class="row">
                            <div class="col-md-6">
                                <a href="{{ url('admin/home') }}" class="btn btn-outline-success btn-block">Home</a>
                            </div>
                            <div class="col-md-6">
                            </div>
                        </div>

                    @endauth

                </div>
            </div>
        </div>
    </div>
@endsection
