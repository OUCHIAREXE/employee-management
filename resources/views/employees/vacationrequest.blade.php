@extends('adminlte::page')


@section('title')
    Vacation Request
@endsection

@section('content')
    <div class="container">
        <div class="row" id="myTable">
            <div class="col-md-8 mx-auto">
                <div class="card p-3 my-5">
                    <div class="cart-header">
                        <center>
                            <h3> Vacation Request</h3>
                        </center>
                    </div>
                    <div class="card-body">
                        <p class="lead">
                            <b>Dear {{$employe->fullname}}</b>
                        </p>
                        <p>
                            I am writing to request a vacation from <b>{{date('d-m-Y')}}</b> to <b>{{date('d-m-Y')}}</b> for the purpose of <b>_________________________</b>.
                        </p>
                        <p>
                            I will be available by phone at <b>{{$employe->phone}}</b> during my absence.
                        </p>
                        <p>
                            I look forward to your approval of this request.
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