@extends('manager.layouts.master')
@section('content')
    <div class="content-wrapper">
        <div class="container-fluid">
            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="#">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">Tables</li>
            </ol>
            <!-- Example DataTables Card-->
            <div class="card mb-3">
                <div class="card-header">
                    <i class="fa fa-table"></i> Bookings</div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>

                            <tr>
                                <th>Hall</th>
                                <th>Date Requested</th>
                                <th>Guest Requested</th>

                                <th>Client Name</th>
                                <th>Client Phone</th>
                                <th>Client CNIC</th>
                                <th>Created At</th>
                                <th>Status</th>

                                <th>Action</th>


                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th>Hall</th>
                                <th>Date Requested</th>
                                <th>Guest Requested</th>

                                <th>Client Name</th>
                                <th>Client Phone</th>
                                <th>Client CNIC</th>
                                <th>Created At</th>
                                <th>Status</th>

                                <th>Action</th>

                            </tr>
                            </tfoot>
                            <tbody>
@foreach( $data as $booking )

                            <tr>
                                <td>{{$booking->hall->name}}<br>
                                <b>GUEST RANGE : {{$booking->hall->guest_range}}</b><br>
                                    <b>PER PERSON : {{$booking->hall->price_per_guest}} RS</b>


                                </td>
                                <td>{{$booking->date_requested}}</td>
                                <td>{{$booking->guest_qty}}</td>
                                <td>{{$booking->user->name}}</td>
                                <td>{{$booking->user->mobile_number}}</td>
                                <td>{{$booking->user->cnic}}</td>
                                <td>{{$booking->created_at}}</td>
                                <td>
                                    @switch($booking->status)
                                        @case(1)

                                        <span class="badge badge-success">APPROVED</span>
                                        @break

                                        @case(0)
                                        <span class="badge badge-warning">PENDING</span>

                                        @break

                                        @case(2)
                                        <span class="badge badge-danger">REJECTED</span>

                                        @break
                                        @default
                                        <span>Something went wrong, please try again</span>
                                    @endswitch
                                </td>
                                <td>
                                    @if($role == 'administrator')
                                        <form method="post" action="{{route($booking->status == 0 || $booking->status == 2 ? 'adminBookingsApprove' : 'adminBookingsReject',['bookingId' => $booking->id])}}">
                                            @csrf
                                            <input name="_method" type="hidden" value="PUT">
                                            @if($booking->status == 1 )
                                                <input type="submit" class="btn btn-danger" value="Reject">
                                            @elseif($booking->status == 0 || $booking->status == 2 )
                                                <input type="submit" class="btn btn-success" value="Approve">
                                            @endif
                                        </form>
                                    @else
                                        <form method="post" action="{{route($booking->status == 0 || $booking->status == 2 ? 'managerBookingsApprove' : 'managerBookingsReject',['bookingId' => $booking->id])}}">
                                            @csrf
                                            <input name="_method" type="hidden" value="PUT">
                                            @if($booking->status == 1 )
                                                <input type="submit" class="btn btn-danger" value="Reject">
                                            @elseif($booking->status == 0 || $booking->status == 2 )
                                                <input type="submit" class="btn btn-success" value="Approve">
                                            @endif
                                        </form>
                                    @endif

                                </td>

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
