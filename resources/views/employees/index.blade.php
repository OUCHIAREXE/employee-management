@extends('adminlte::page')

@section('plugins.Datatables', true)




@section("title")
    Employees
@endsection
@section("content")
    <div class="container">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <div class="card my-5">
                    <div class="card-header bg-primary">
                        <div class="text-center text-uppercase">
                            <h3 class="text-light"><b>List of Employees</b></h3>
                            
                        </div>
                    </div>
                    <div class="card-body">
                        <table id="myTable" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Full Name</th>
                                    <th>Registration Number</th>
                                    <th>Department</th>
                                    <th>Phone</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($employes as $key => $employe)
                                    <tr>
                                            <td>{{ $key+1 }}</td>
                                            <td>{{ $employe->fullname }}</td>
                                            <td>{{ $employe->registration_number}}</td>
                                            <td>{{ $employe->department }}</td>
                                            <td>{{ $employe->phone }}</td>
                                            <td class="d-flex justify-content-center aligh-items-center">
                                                <a href="{{route('employees.show',$employe->registration_number)}}" class="btn btn-sm btn-outline-primary">
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                                <a href="{{route('employees.edit',$employe->registration_number)}}" class="btn btn-sm btn-outline-success mx-2">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                <form  id="deleteForm" action="{{route('employees.destroy',$employe->registration_number)}}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button onclick="deleteEmp()" type="submit" class="btn btn-sm btn-outline-danger">
                                                        <i class="fas fa-trash"></i>
                                                    </button>
                                                </form>
                                            </td>
                                    </tr>
                                @endforeach
                          
                            </tbody>
                            
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script>
        $(document).ready( function () {
            $('#myTable').DataTable({
                dom : 'Bfrtip',
                buttons : [
                    'copy', 'csv', 'excel', 'pdf', 'print',
                ]
            });
        })
        function deleteEmp(){
            event.preventDefault();
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('deleteForm').submit();
                }
            })
        }
    </script>
    @if (session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Success...',
                text: "{{session('success')}}",
            })
        </script>
    
    @endif
@endsection