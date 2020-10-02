@extends('frontend.layouts.master')
@section('content')




    <main>
        <div style="background-color: #0f6674">
        <div class="container margin_60 " style="padding-top: 6%">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-6 col-md-8">
                    <div class="box_account">
                        <h3  style="color: white">Already Client</h3>
                        <div class="form_container">

                            <x-jet-validation-errors class="mb-4" style="color: red" />

                            @if (session('status'))
                                <div class="mb-4 font-medium text-sm text-green-600">
                                    {{ session('status') }}
                                </div>
                            @endif
                            <form method="POST" action="{{ route('login') }}">
                                @csrf


                                <div class="form-group">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Email*" required autofocus >
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" name="password" id="password" value="" placeholder="Password*"
                                           required autocomplete="current-password" >
                                </div>
                                <div class="clearfix add_bottom_15">
                                    <div class="checkboxes float-left">
                                        <label class="container_check">Remember me
                                            <input type="checkbox" class="form-checkbox" name="remember">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="float-right"><a id="forgot" href="javascript:void(0);">Lost Password?</a></div>
                                </div>
                                <div class="text-center"><input type="submit" value="Log In" class="btn_1 full-width"></div>
                            </form>
                            <form method="POST" action="{{ route('password.email')}}">
                                @csrf
                                <div id="forgot_pw">
                                    <div class="form-group">

                                        <input  class="form-control"type="email" name="email" id="email_forgot" placeholder="Type your email" required autofocus>
                                    </div>
                                    <p>A new password will be sent shortly.</p>
                                    <div class="text-center">
                                        <input type="submit" value="Reset Password" class="btn_1"></div>
                                </div>
                                </form>


                        </div>
                        <!-- /form_container -->
                    </div>
                    <!-- /box_account -->
                    <div class="row hidden_tablet">
                        <div class="col-md-6">
                            <ul class="list_ok">
                                <li  style="color: white">Find Locations</li>
                                <li  style="color: white">Quality Location check</li>
                                <li  style="color: white">Data Protection</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul class="list_ok">
                                <li  style="color: white">Secure Payments</li>
                                <li  style="color: white">H24 Support</li>
                            </ul>
                        </div>
                    </div>
                    <!-- /row -->
                </div>
                <div class="col-xl-6 col-lg-6 col-md-8">
                    <iv class="box_account">
                        <h3  style="color: white">New Client</h3> <small class="float-right pt-2"  style="color: white">* Required Fields</small>
                        <form method="POST" action="{{ route('register') }}" >
                            @csrf
                        <div class="form_container">
                            <div class="form-group">
                                <input type="text" name="name" required autofocus autocomplete="name"  class="form-control"  id="name" placeholder="Name*">
                            </div>
                        <div class="form-group">
                            <input type="text" name="email" required autofocus autocomplete="email"  class="form-control" id="email" placeholder="Email*">
                        </div>
                            <div class="form-group">
                                <input type="password" class="form-control" type="password" name="password" required autocomplete="new-password" placeholder="Password*">
                            </div>

                            <div class="form-group">
                                <input type="password" class="form-control" type="password" name="password_confirmation" required autocomplete="new-password" placeholder="Confrim Password*">
                            </div>

                            <div class="form-group">
                                <input  class="form-control" type="number" min="0"  name="cnic" required autocomplete="cnic" placeholder="Cnic*">
                            </div>
                            <div class="form-group">
                                <input  class="form-control" type="number"min="0" name="mobile_number" required autocomplete="mobile_number" placeholder="Phone*">
                            </div>

                            <hr>
                            <div class="form-group">
                                <label class="container_radio" style="display: inline-block; margin-right: 15px;">User
                                    <input type="radio" name="role_id" checked="" value="3">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="container_radio" style="display: inline-block;">Hall Manager
                                    <input type="radio" name="role_id" value="2">
                                    <span class="checkmark"></span>
                                </label>
                            </div>

                            <!-- /privato -->

                            <!-- /azienda -->
                            <hr>
                            <div class="form-group">
                                <label class="container_check">Accept <a href="/terms_condition">Terms and conditions</a>
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="text-center"><input type="submit" value="Register" class="btn_1 full-width"></div>

                    </form>
                        <!-- /form_container -->
                    </div>
                    <!-- /box_account -->
                </div>
            </div>
            <!-- /row -->
        </div>

        <!-- /container -->
    </main>
@endsection
