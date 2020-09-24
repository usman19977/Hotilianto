<footer class="plus_border">
    <div class="container margin_60_35">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <h3 data-target="#collapse_ft_1">Quick Links</h3>
                <div class="collapse dont-collapse-sm" id="collapse_ft_1">
                    <ul class="links">
                        <li><a href="#0">About us</a></li>
                        <li><a href="#0">Faq</a></li>
                        <li><a href="#0">Help</a></li>
                        <li><a href="#0">My account</a></li>
                        <li><a href="#0">Create account</a></li>
                        <li><a href="#0">Contacts</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <h3 data-target="#collapse_ft_2">Categories</h3>
                <div class="collapse dont-collapse-sm" id="collapse_ft_2">
                    <ul class="links">
                        <li><a href="#0">Shops</a></li>
                        <li><a href="#0">Hotels</a></li>
                        <li><a href="#0">Restaurants</a></li>
                        <li><a href="#0">Bars</a></li>
                        <li><a href="#0">Events</a></li>
                        <li><a href="#0">Fitness</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <h3 data-target="#collapse_ft_3">Contacts</h3>
                <div class="collapse dont-collapse-sm" id="collapse_ft_3">
                    <ul class="contacts">
                        <li>
                            <i class="ti-home"></i>97845 Baker st. 567<br />Los Angeles -
                            US
                        </li>
                        <li><i class="ti-headphone-alt"></i>+39 06 97240120</li>
                        <li>
                            <i class="ti-email"></i><a href="#0">info@sparker.com</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <h3 data-target="#collapse_ft_4">Keep in touch</h3>
                <div class="collapse dont-collapse-sm" id="collapse_ft_4">
                    <div id="newsletter">
                        <div id="message-newsletter"></div>
                        <form
                            method="post"
                            action="assets/newsletter.php"
                            name="newsletter_form"
                            id="newsletter_form"
                        >
                            <div class="form-group">
                                <input
                                    type="email"
                                    name="email_newsletter"
                                    id="email_newsletter"
                                    class="form-control"
                                    placeholder="Your email"
                                />
                                <input
                                    type="submit"
                                    value="Submit"
                                    id="submit-newsletter"
                                />
                            </div>
                        </form>
                    </div>
                    <div class="follow_us">
                        <h5>Follow Us</h5>
                        <ul>
                            <li>
                                <a href="#0"><i class="ti-facebook"></i></a>
                            </li>
                            <li>
                                <a href="#0"><i class="ti-twitter-alt"></i></a>
                            </li>
                            <li>
                                <a href="#0"><i class="ti-google"></i></a>
                            </li>
                            <li>
                                <a href="#0"><i class="ti-pinterest"></i></a>
                            </li>
                            <li>
                                <a href="#0"><i class="ti-instagram"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- /row-->
        <hr />
        <div class="row">
            <div class="col-lg-6">
                <ul id="footer-selector">
                    <li>
                        <div class="styled-select" id="lang-selector">
                            <select>
                                <option value="English" selected="">English</option>
                                <option value="French">French</option>
                                <option value="Spanish">Spanish</option>
                                <option value="Russian">Russian</option>
                            </select>
                        </div>
                    </li>
                    <li>
                        <div class="styled-select" id="currency-selector">
                            <select>
                                <option value="US Dollars" selected="">US Dollars</option>
                                <option value="Euro">Euro</option>
                            </select>
                        </div>
                    </li>
                    <li><img src="img\cards_all.svg" alt="" /></li>
                </ul>
            </div>
            <div class="col-lg-6">
                <ul id="additional_links">
                    <li><a href="#0">Terms and conditions</a></li>
                    <li><a href="#0">Privacy</a></li>
                    <li><span>© 2020 Sparker</span></li>
                </ul>
            </div>
        </div>
    </div>
</footer>

<!-- Sign In Popup -->
<div id="sign-in-dialog" class="zoom-anim-dialog mfp-hide">
    <div class="small-dialog-header">
        <h3>Sign In</h3>
    </div>
    <form>
        <div class="sign-in-wrapper">


            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" name="email" id="email">
                <i class="icon_mail_alt"></i>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" name="password" id="password" value="">
                <i class="icon_lock_alt"></i>
            </div>
            <div class="clearfix add_bottom_15">
                <div class="checkboxes float-left">
                    <label class="container_check">Remember me
                        <input type="checkbox">
                        <span class="checkmark"></span>
                    </label>
                </div>
                <div class="float-right mt-1"><a id="forgot" href="/forget">Forgot Password?</a></div>
            </div>
            <div class="text-center"><input type="submit" value="Log In" class="btn_1 full-width"></div>
            <div class="text-center">
                Don’t have an account? <a href="/register">Sign up</a>
            </div>

        </div>
    </form>
    <!--form -->
</div>
<!-- /Sign In Popup -->
