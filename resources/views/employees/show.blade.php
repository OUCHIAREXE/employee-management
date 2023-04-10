@extends('adminlte::page')

@section('plugins.Datatables', true)




@section("title")
    Show Employe
@endsection
@section("content")
    <div class="container">
        <div class="row">
            <div class="col-md-7 mx-auto">
                <div class="card my-5">
                    <div class="card-header bg-primary">
                        <div class="text-center text-uppercase">
                            <h3 class="text-light"> <b>Show Profile Of {{$employe->fullname}}</b></h3>
                        </div>
                    </div>
                    <div class="card-body">
                            <form>
                                <center>
                                    <a href="{{route('employees.certificaterequest', $employe->registration_number)}}" class="btn btn-outline-danger">Work Certificate</a>
                                    <a href="{{route('employees.vacationrequest', $employe->registration_number)}}" class="btn btn-outline-success">Vacation Request</a>
                                </center>
                                <hr>
                                <div class="form-groupe mb-3">
                                    <label for="fullname">Full Name</label>
                                    <input type="text" name="fullname" disabled id="fullname" disabled class="form-control @error('fullname') is-invalid @enderror" value="{{ $employe->fullname}}">
                                </div>
                                <div class="form-groupe mb-3">
                                    <label for="department">Department</label>
                                    <input type="text" name="department" id="department" disabled class="form-control @error('department') is-invalid @enderror" value="{{old('department' , $employe->department)}}">
                                </div>
                                <div class="form-groupe mb-3">
                                    <label for="hire_date">Hire Date</label>
                                    <input type="date" name="hire_date" id="hire_date" disabled class="form-control @error('hire_date') is-invalid @enderror" value="{{old('hire_date' , $employe->hire_date)}}">
                                <div class="form-groupe mb-3">
                                    <label for="phone">Phone</label>
                                    <input type="text" name="phone" id="phone" disabled class="form-control @error('phone') is-invalid @enderror" value="{{old('phone' , $employe->phone)}}">
                                </div>
                                <div class="form-groupe mb-3">
                                    <label for="registration_number">Registration Number</label>
                                    <input type="text" name="registration_number" id="registration_number" class="form-control @error('registration_number') is-invalid @enderror" disabled  value="{{old('registration_number' , $employe->registration_number)}}">
                                </div>
                                <div class="form-groupe mb-3">
                                    <label for="address">Address</label>
                                    <input type="text" name="address" id="address"  disabled class="form-control @error('address') is-invalid @enderror" value="{{old('address' , $employe->address)}}">
                                </div>
                                <div class="form-groupe mb-3">
                                    <label for="address">City</label>
                                    <input type="text" name="city" id="city" disabled  class="form-control @error('city') is-invalid @enderror" value="{{$employe->city}}">
                                </div>
                            </form>
                        </div>
                </div>
            </div>
        </div>
    </div>
@endsection
