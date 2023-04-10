@extends('adminlte::page')


@section('title')
    Certificate Request
@endsection

@section('content')
    <div class="container">
        <div class="row" id="myTable">
            <div class="col-md-8 mx-auto">
                <div class="card p-3 my-5">
                    <div class="cart-header">
                        <center>
                            <h3>CERTIFICATE OF EMPLOYMENT</h3>
                        </center>
                    </div>
                    <div class="card-body">
                        <p class="lead">
                            
    
                            <b>Dear {{$employe->fullname}}</b>
                        </p>
                        <p>
                            This is to certify that <b>{{$employe->fullname}}</b> has been employed by <b>Company Name</b> since <b>{{$employe->hire_date}}</b> as a <b>{{$employe->department}}</b> and is currently working as a <b>{{$employe->department}}</b> in our company.
                        </p>
                        <p>
                            This certificate is issued at the request of <b>{{$employe->fullname}}</b> for the purpose of <b>_________________________</b>.
                        </p>
                        <p>
                            <b>Company Name</b> wishes <b>{{$employe->fullname}}</b> all the best in his/her future endeavors.
                        </p>
                        <p>
                            <b>OUCHIA33R</b>
                        </p>
                        <p>
                            <b>Signature</b>
                        </p>
                        <p>
                            <b>_________________________</b>
                        </p>
                        <p>
                            Agadir, <b>{{date('d-m-Y')}}</b>
                        </p>    
                    </div>
                    <div class="my-5 " id="printLink">
                        <center>
                            <a href="#"  
                                onclick="
                                document.getElementById('printLink').style.display = 'none'; 
                                window.print(); " 
                                class="btn btn-primary">
                                <i class="fas fa-print" ></i>
                            </a>
                        </center>
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
                'pdf', 'print',
                ]
            });
        })
        
    </script>
@endsection