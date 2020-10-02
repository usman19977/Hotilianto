@extends('manager.layouts.master')
@section('content')
    <div class="content-wrapper">
        <div class="container-fluid">
            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="#">Dashboard</a>
                </li>
                <li class="breadcrumb-item active"></li>
            </ol>
            <!-- Example DataTables Card-->
            <div class="card mb-3">
                <div class="card-header">
                    <i class="fa fa-users"></i> Users</div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>

                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Cnic</th>
                                <th>Role</th>
                                <th>Created At</th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Cnic</th>
                                <th>Role</th>
                                <th>Created At</th>
                            </tr>
                            </tfoot>
                            <tbody>
                            @foreach( $data as $booking )

                                <tr>
                                    <td>{{$booking->name}}</td>
                                    <td>{{$booking->email}}</td>
                                    <td>{{$booking->mobile_number}}</td>
                                    <td>{{$booking->cnic}}</td>
                                    <td>
                                    @foreach($booking->roles as $rr)
                                    {{$rr->name}}
                                    @endforeach
                                    </td>
                                    <td>{{$booking->created_at}}</td>


                                </tr>
                            @endforeach


                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
            <!-- /tables-->
        </div>
        <!-- /container-fluid-->
    </div>
@endsection
