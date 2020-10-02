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
                    <i class="fa fa-table"></i> My Halls</div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>

                            <tr>
                                <th>Name</th>
                                <th>Address</th>
                                <th>Guest Range</th>

                                <th>Price Per Guest</th>
                                <th>Details</th>
                                <th>Created At</th>
                                <th>Status</th>

                                <th >Action</th>


                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th>Name</th>
                                <th>Address</th>
                                <th>Guest Range</th>

                                <th>Price Per Guest</th>
                                <th>Details</th>
                                <th>Created At</th>
                                <th>Status</th>

                                <th >Action</th>

                            </tr>
                            </tfoot>
                            <tbody>
                            @foreach( $data as $booking )

                                <tr>
                                    <td>{{$booking['name']}}</td>
                                    <td>{{$booking['address']}}</td>
                                    <td>{{$booking['guest_range']}}</td>
                                    <td>{{$booking['price_per_guest']}}</td>
                                    <td>{{$booking['details']}}</td>
                                    <td>{{$booking['created_at']}}</td>
                                    <td>
                                        @switch($booking['status'])
                                            @case(1)

                                            <span class="badge badge-success">APPROVED</span>
                                            @break

                                            @case(0)
                                            <span class="badge badge-danger">PENDING</span>

                                            @break
                                            @case(2)
                                            <span class="badge badge-danger">REJECTED</span>

                                            @break

                                            @default
                                            <span>Something went wrong, please try again</span>
                                        @endswitch
                                    </td>

 @if($role == 'administrator')
                                        <td>
                                            <form method="post" action="{{route($booking->status == 0 || $booking->status == 2 ? 'adminhallApprove' : 'adminhallReject',['hallId' => $booking->id])}}">
                                                @csrf
                                                <input name="_method" type="hidden" value="PUT">
                                                @if($booking->status == 1 )
                                                    <input type="submit" class="btn btn-danger" value="Reject">
                                                @elseif($booking->status == 0 || $booking->status == 2 )
                                                    <input type="submit" class="btn btn-success" value="Approve">
                                                @endif
                                            </form>
                                            <a href="/hall/{{$booking['id']}}">  <button class="btn-sm btn-info"  >View</button></a>
                                        </td>
                                        @else
     <td>   <a href="/hall/{{$booking['id']}}">  <button class="btn-sm btn-info"  >View</button></a></td>

                                    @endif




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
