@extends('manager.layouts.master')
@section('content')
    <div class="content-wrapper">
        <div class="container-fluid">
            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{route('dashboard')}}">Dashboard</a>
                </li>
                <li class="breadcrumb-item active"></li>
            </ol>
            <div class="box_general padding_bottom">
                <div class="header_box version_2">
                    <i class="fa fa-file"></i>Add Banquet
                </div>

                <form action="{{$role == 'administrator' ? route('hall.store') : route('managerStoreHall')}}"  enctype="multipart/form-data" method="post">
                    @csrf

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Banquet Name</label>
                            <input type="text" required name="name" class="form-control" placeholder="Banquet Name">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Banquet Address</label>
                            <input type="text" required name="address" class="form-control" placeholder="Banquet Address">
                        </div>
                    </div>

                </div>
                <!-- /row-->
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>City</label>
                            <div class="styled-select">
                                <select name="city_id" required>
                                    @foreach($cities as $city)
                                        <option value="{{$city->id}}">{{$city->name}}</option>
                                    @endforeach



                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Venue Type</label>
                            <div class="styled-select">
                                <select name="venuetype_id" required>
                                    @foreach($venuw_types as $venueType)
                                        <option value="{{$venueType->id}}">{{$venueType->name}}</option>
                                    @endforeach



                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /row-->

                <!-- /row-->
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Guest Range</label>
                            <input type="number" required min="1" class="form-control" name="guest_range">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Price / Per guest</label>
                            <input type="number" required min="1" class="form-control" name="price_per_guest">
                        </div>
                    </div>

                </div>
                <!-- /row-->

                <!-- /row-->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Menus</label>
                                <table id="pricing-list-container" style="width:100%;">
                                    <tr class="pricing-list-item">
                                        <td>
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <div class="form-group">
                                                        <input type="text" name='menuitem[]' class="form-control" placeholder="Item">
                                                    </div>
                                                </div>
                                                <div class="col-md-5">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" placeholder="Description">
                                                    </div>
                                                </div>

                                                <div class="col-sm-2">
                                                    <div class="form-group">
                                                        <a class="delete" href="#"><i class="fa fa-fw fa-remove"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                                <a class="btn_1 gray add-pricing-list-item"><i class="fa fa-fw fa-plus-circle"></i>Add Item</a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Photos</label>
                                <input required type="file" id="file1"  class="form-control" name="photos[]" multiple />
                                <button id="rmv1" type="button" class="btn-danger">Remove Photos</button>
                            </div>
                        </div>
                    </div>
             <div class="row">

                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Description</label>
                                <textarea required name="details" class="form-control"  rows="5">
                            </textarea>
                            </div>
                        </div>
                    </div>
                <!-- /row-->
                    <p><input type="submit" class="btn_1 medium" value="Save"></p>
            </div>

            <!-- /box_general-->


            <!-- /box_general-->

            </form>
        </div>
        <!-- /.container-fluid-->
    </div>
    <script>
        document.getElementById('rmv1').onclick = function() {
            var file = document.getElementById("file1");
            file.value = file.defaultValue;
        }
    </script>
@endsection
