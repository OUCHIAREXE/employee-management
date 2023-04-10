@extends('adminlte::page')

@section('plugins.Datatables', true)




@section("title")
    Update Employe
@endsection
@section("content")
    <div class="container">
        <div class="row">
            <div class="col-md-7 mx-auto">
                <div class="card my-5">
                    <div class="card-header bg-primary">
                        <div class="text-center text-uppercase">
                            <h3 class="text-light"> <b>Update Profile Of {{$employe->fullname}}</b></h3>
                        </div>
                    </div>
                    <div class="card-body">
                            <form action="{{route('employees.update', $employe->registration_number)}}" method="POST" class="mt-3">
                                @csrf
                                @method('PUT')
                                <div class="form-groupe mb-3">
                                    <label for="fullname">Full Name</label>
                                    <input type="text" name="fullname" id="fullname" class="form-control @error('fullname') is-invalid @enderror" value="{{old('fullname', $employe->fullname)}}">
                                    @error('fullname')
                                        <div class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-groupe mb-3">
                                    <label for="department">Department</label>
                                    <input type="text" name="department" id="department" class="form-control @error('department') is-invalid @enderror" value="{{old('department' , $employe->department)}}">
                                    @error('department')
                                        <div class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-groupe mb-3">
                                    <label for="hire_date">Hire Date</label>
                                    <input type="date" name="hire_date" id="hire_date" class="form-control @error('hire_date') is-invalid @enderror" value="{{old('hire_date' , $employe->hire_date)}}">
                                    @error('hire_date')
                                        <div class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                    @enderror
                                <div class="form-groupe mb-3">
                                    <label for="phone">Phone</label>
                                    <input type="text" name="phone" id="phone" class="form-control @error('phone') is-invalid @enderror" value="{{old('phone' , $employe->phone)}}">
                                    @error('phone')
                                        <div class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-groupe mb-3">
                                    <label for="registration_number">Registration Number</label>
                                    <input type="text" name="registration_number" id="registration_number" class="form-control @error('registration_number') is-invalid @enderror" value="{{old('registration_number' , $employe->registration_number)}}">
                                    @error('registration_number')
                                        <div class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-groupe mb-3">
                                    <label for="address">Address</label>
                                    <input type="text" name="address" id="address" class="form-control @error('address') is-invalid @enderror" value="{{old('address' , $employe->address)}}">
                                    @error('address')
                                        <div class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-groupe mb-3">
                                    <label for="address">City</label>
                                    <input type="text" name="city" id="city" class="form-control @error('city') is-invalid @enderror" value="{{old('city', $employe->city)}}">
                                    @error('city')
                                        <div class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-groupe mb-3">
                                    <button class="btn btn-outline-primary" type=submit>
                                        Submit
                                    </button>

                                </div>
                            </form>
                        </div>
                </div>
            </div>
        </div>
    </div>
@endsection
