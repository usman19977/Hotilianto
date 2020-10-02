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
                                <th>Review</th>
                                <th>Rated</th>
                                <th>Reviewer Name</th>
                                <th>Reviewer Email</th>
                                <th>Created At</th>
                                <th>Status</th>
                                <th>Action</th>


                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th>Hall</th>
                                <th>Review</th>
                                <th>Rated</th>
                                <th>Reviewer Name</th>
                                <th>Reviewer Email</th>
                                <th>Created At</th>
                                <th>Status</th>
                                <th>Action</th>

                            </tr>
                            </tfoot>
                            <tbody>
                            @foreach( $data as $booking )

                                <tr>
                                    <td>{{$booking->hall->name}}</td>
                                    <td>{{$booking->person_review}}</td>
                                    <td>
                                        <div class="rating">
                                            @for($i= 1;$i<=$booking->value;$i++)
                                                @if($i>5)
                                                    @break(0);
                                                @endif
                                                <i class="icon_star" style="color: @if($booking->value<3) orange @else green @endif"></i>
                                            @endfor

                                            @if(5-$booking->value > 0)
                                                @for($i= 1;$i<=5-$booking->value;$i++)
                                                    <i class="icon_star" style="color: gainsboro"></i>
                                                @endfor
                                            @endif

                                        </div>
                                    </td>

                                    <td>{{$booking->person_name}}</td>
                                    <td>{{$booking->person_email}}</td>
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
                                            <form method="post" action="{{route($booking->status == 0 || $booking->status == 2 ? 'adminReviewApprove' : 'adminReviewReject',['reviewId' => $booking->id])}}">
                                                @csrf
                                                <input name="_method" type="hidden" value="PUT">
                                                @if($booking->status == 1 )
                                                    <input type="submit" class="btn btn-danger" value="Reject">
                                                @elseif($booking->status == 0 || $booking->status == 2 )
                                                    <input type="submit" class="btn btn-success" value="Approve">
                                                @endif
                                            </form>
                                            @else
                                        <form method="post" action="{{route($booking->status == 0 || $booking->status == 2 ? 'managerReviewApprove' : 'managerReviewReject',['reviewId' => $booking->id])}}">
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
