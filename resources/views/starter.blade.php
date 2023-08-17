@extends('layout.template')
@section('titre', "Titre de la page")

@section('contenu')
<div class="row">
    <div class="dashbd-detail-tabs">
        <div class="col-xl-12 com-md-12 col-sm-12 px-0">
            <ul class="nav  nav-tabs" role="tablist" id="myTab">
                <li role="presentation">
                    <a class="active" href="#activity" aria-controls="activity" role="tab"
                        data-toggle="tab">Activity</a>
                </li>
                <li role="presentation">
                    <a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Profile Details</a>
                </li>
                <li role="presentation">
                    <a href="#my-lisitngs" aria-controls="my-lisitngs" role="tab" data-toggle="tab">Listings</a>
                </li>
                <li role="presentation">
                    <a href="#followers" aria-controls="followers" role="tab" data-toggle="tab">Followers</a>
                </li>
                <li role="presentation">
                    <a href="#following" aria-controls="following" role="tab" data-toggle="tab">Following</a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" role="tabpanel" id="activity">
                    <div class="video-block section-padding">
                        <div class="row lr-row">
                            <div class="col-md-12">
                                <div class=" locatins">
                                    <div class="comment-post">
                                        <div class="comment-img">
                                            <img src="images/icon/comment1.png" alt="comment">
                                        </div>
                                        <form>
                                            <textarea class="text-post" name="post" placeholder="Write your activity">
                    </textarea>
                                            <input type="submit" value="Post">
                                        </form>
                                    </div>
                                </div>
                                <div class=" locatins">
                                    <div class="heading1">
                                        <img src="images/homepage/recomanded/04_dp.png" alt="">
                                        <h3>Rock Smith</h3>
                                        <p>jan 2, 2019 at 7.00 pm</p>
                                    </div>
                                    <div class="sub-heading">
                                        <span>@jassica</span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                        Sed placerat placerat dignissim. Cras sit amet posuere metus, eu pharetra urna.
                                        Praesent tortor purus, gravida id massa non, hendrerit accumsan metus.</div>
                                    <div class="user-reply">
                                        <div class="heading1">
                                            <img src="images/homepage/latest/02_dp.png" alt="">
                                            <h3>Jassica William</h3>
                                            <p>jan 2, 2019 at 7.00 pm</p>
                                        </div>
                                        <div class="sub-heading">Thank You Mr. John</div>
                                    </div>
                                    <div class="user-reply">
                                        <div class="comment-post">
                                            <div class="comment-img">
                                                <img src="images/icon/comment1.png" alt="comment">
                                            </div>
                                            <form>
                                                <textarea class="text-post" name="post" placeholder="Reply comment">
                        </textarea>
                                                <input type="submit" value="Reply">
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" role="tabpanel" id="profile">
                    <div class="row lr-row">
                        <div class="col-md-6">
                            <div class=" locatins">
                                <div class="heading">
                                    <img src="images/svg/menu1.svg" alt="">
                                    <h3>About</h3>
                                </div>
                                <div class="sub-heading">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris
                                    a interdum neque. Nullam mi sem, tristique vel volutpat ac, consectetur sit amet
                                    massa. Curabitur at ipsum leo. Morbi porttitor lorem velit, at lacinia magna pretium
                                    at. Duis id mattis nisl. In sit amet eros sed lorem hendrerit ornare quis in mauris.
                                    Sed nec purus euismod, pharetra nibh a, aliquet lorem.. Suspendisse pretium
                                    ullamcorper neque et aliquam.</div>
                                <div class="clearfix">
                                </div>
                            </div>
                            <div class="locatins heading">
                                <div class="heading">
                                    <img src="images/svg/location.svg" alt="">
                                    <h3>Location</h3>
                                </div>
                                <div class="map">
                                    <div id='map'>
                                    </div>
                                    <div id='geocoder' class='geocoder'>
                                    </div>
                                </div>
                                <div class="clearfix">
                                </div>
                            </div>
                            <div class="locatins heading">
                                <div class="heading">
                                    <img src="images/svg/location.svg" alt="">
                                    <h3>Address</h3>
                                </div>
                                <div class="sub-heading">567/2 Street West 1111, Delhi, India</div>
                                <div class="clearfix">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="box-left">
                                <div class="rightboxs">
                                    <div class="heading">
                                        <img src="images/svg/email.svg" alt="">
                                        <h3>Email Address</h3>
                                    </div>
                                    <p>
                                        <a href="https://gambolthemes.net/cdn-cgi/l/email-protection"
                                            class="__cf_email__"
                                            data-cfemail="32605d5159415f5b465a72555f535b5e1c515d5f">[email&#160;protected]</a>
                                    </p>
                                </div>
                            </div>
                            <div class="box-left">
                                <div class="rightboxs">
                                    <div class="heading">
                                        <img src="images/svg/phone.svg" alt="">
                                        <h3>Phone Number</h3>
                                    </div>
                                    <p>
                                        <a href="#">+1234567890</a>
                                    </p>
                                </div>
                            </div>
                            <div class="box-left">
                                <div class="rightboxs">
                                    <div class="heading">
                                        <img src="images/svg/url.svg" alt="">
                                        <h3>Website</h3>
                                    </div>
                                    <p>
                                        <a href="#">www.yoursite.com</a>
                                    </p>
                                </div>
                            </div>
                            <div class="box-left">
                                <div class="rightboxs">
                                    <div class="heading">
                                        <img src="images/svg/follow.svg" alt="">
                                        <h3>Follow us</h3>
                                    </div>
                                    <p>
                                        <a href="#">
                                            <i class="fa fa-facebook" aria-hidden="true"></i>
                                        </a>
                                        <a href="#">
                                            <i class="fa fa-twitter" aria-hidden="true"></i>
                                        </a>
                                        <a href="#">
                                            <i class="fa fa-linkedin" aria-hidden="true"></i>
                                        </a>
                                        <a href="#">
                                            <i class="fa fa-google" aria-hidden="true"></i>
                                        </a>
                                        <a href="#">
                                            <i class="fa fa-dribbble" aria-hidden="true"></i>
                                        </a>
                                        <a href="#">
                                            <i class="fa fa-lastfm-square" aria-hidden="true"></i>
                                        </a>
                                    </p>
                                </div>
                            </div>
                            <div class="box-left">
                                <div class="rightboxs">
                                    <div class="heading">
                                        <img src="images/svg/location.svg" alt="">
                                        <h3>Region</h3>
                                    </div>
                                    <p>India</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" role="tabpanel" id="my-lisitngs">
                    <div class="video-block section-padding">
                        <div class="row">
                            <div class="tabby">
                                <div class="col-xl-3 col-sm-6">
                                    <div class="box">
                                        <div class="box-img">
                                            <a href="event_listing_detail_view.html" target="_blank">
                                                <div class="over-bg">
                                                </div>
                                            </a>
                                            <img src="images/homepage/latest/01_img.jpg" class="img" alt="" title="">
                                            <div class="box-heading1">
                                                <a href="event_listing_detail_view.html">Global Festival</a>
                                                <div class="box-heading2">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                                        preserveAspectRatio="xMidYMid" width="12" height="14"
                                                        class="location-icon" viewBox="0 0 12 14">
                                                        <path
                                                            d="M6.720,10.847 C6.242,11.332 5.477,11.332 4.998,10.847 C2.719,8.534 1.555,6.413 1.555,4.454 C1.555,1.994 3.482,-0.000 5.859,-0.000 C8.236,-0.000 10.163,1.994 10.163,4.454 C10.163,6.413 8.999,8.534 6.720,10.847 ZM8.934,4.454 C8.934,2.697 7.557,1.273 5.859,1.273 C4.161,1.273 2.785,2.697 2.785,4.454 C2.785,6.004 3.793,7.842 5.859,9.938 C7.925,7.842 8.934,6.004 8.934,4.454 ZM5.859,6.045 C4.840,6.045 4.015,5.191 4.015,4.136 C4.015,3.082 4.840,2.227 5.859,2.227 C6.878,2.227 7.704,3.082 7.704,4.136 C7.704,5.191 6.878,6.045 5.859,6.045 ZM5.859,4.773 C6.199,4.773 6.474,4.488 6.474,4.136 C6.474,3.785 6.199,3.500 5.859,3.500 C5.520,3.500 5.244,3.785 5.244,4.136 C5.244,4.488 5.520,4.773 5.859,4.773 ZM2.165,9.509 C2.483,9.385 2.838,9.552 2.957,9.881 C3.076,10.210 2.915,10.577 2.597,10.700 C1.895,10.973 1.555,11.285 1.555,11.454 C1.555,11.987 3.462,12.727 5.859,12.727 C8.256,12.727 10.163,11.987 10.163,11.454 C10.163,11.285 9.823,10.973 9.122,10.700 C8.804,10.577 8.643,10.210 8.762,9.881 C8.881,9.552 9.235,9.385 9.553,9.509 C10.684,9.948 11.393,10.598 11.393,11.454 C11.393,13.031 8.895,14.000 5.859,14.000 C2.823,14.000 0.326,13.031 0.326,11.454 C0.326,10.598 1.034,9.948 2.165,9.509 Z">
                                                        </path>
                                                    </svg>India</div>
                                            </div>
                                            <div class="favorite">
                                                <i class="far fa-heart"></i>
                                            </div>
                                        </div>
                                        <div class="box-radius">
                                            <img src="images/homepage/latest/01_dp.png" class="img" alt="" title="">
                                        </div>
                                        <div class="box-heading3">
                                            <a href="user_detail_view.html">By Rock Smith</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-sm-6">
                                    <div class="box">
                                        <div class="box-img">
                                            <a href="realestate_sell_listing_detail_view.html">
                                                <div class="over-bg">
                                                </div>
                                            </a>
                                            <img src="images/homepage/realestate/ig-1.jpg" class="img" alt="" title="">
                                            <div class="box-heading1">
                                                <a href="realestate_sell_listing_detail_view.html">House for Sale</a>
                                                <div class="box-heading2">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                                        preserveAspectRatio="xMidYMid" width="12" height="14"
                                                        class="location-icon" viewBox="0 0 12 14">
                                                        <path
                                                            d="M6.720,10.847 C6.242,11.332 5.477,11.332 4.998,10.847 C2.719,8.534 1.555,6.413 1.555,4.454 C1.555,1.994 3.482,-0.000 5.859,-0.000 C8.236,-0.000 10.163,1.994 10.163,4.454 C10.163,6.413 8.999,8.534 6.720,10.847 ZM8.934,4.454 C8.934,2.697 7.557,1.273 5.859,1.273 C4.161,1.273 2.785,2.697 2.785,4.454 C2.785,6.004 3.793,7.842 5.859,9.938 C7.925,7.842 8.934,6.004 8.934,4.454 ZM5.859,6.045 C4.840,6.045 4.015,5.191 4.015,4.136 C4.015,3.082 4.840,2.227 5.859,2.227 C6.878,2.227 7.704,3.082 7.704,4.136 C7.704,5.191 6.878,6.045 5.859,6.045 ZM5.859,4.773 C6.199,4.773 6.474,4.488 6.474,4.136 C6.474,3.785 6.199,3.500 5.859,3.500 C5.520,3.500 5.244,3.785 5.244,4.136 C5.244,4.488 5.520,4.773 5.859,4.773 ZM2.165,9.509 C2.483,9.385 2.838,9.552 2.957,9.881 C3.076,10.210 2.915,10.577 2.597,10.700 C1.895,10.973 1.555,11.285 1.555,11.454 C1.555,11.987 3.462,12.727 5.859,12.727 C8.256,12.727 10.163,11.987 10.163,11.454 C10.163,11.285 9.823,10.973 9.122,10.700 C8.804,10.577 8.643,10.210 8.762,9.881 C8.881,9.552 9.235,9.385 9.553,9.509 C10.684,9.948 11.393,10.598 11.393,11.454 C11.393,13.031 8.895,14.000 5.859,14.000 C2.823,14.000 0.326,13.031 0.326,11.454 C0.326,10.598 1.034,9.948 2.165,9.509 Z">
                                                        </path>
                                                    </svg>India</div>
                                            </div>
                                            <div class="favorite">
                                                <i class="far fa-heart"></i>
                                            </div>
                                        </div>
                                        <div class="box-radius">
                                            <img src="images/homepage/latest/01_dp.png" class="img" alt="" title="">
                                        </div>
                                        <div class="box-heading3">
                                            <a href="user_detail_view.html">By Rock Smith</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-sm-6">
                                    <div class="box">
                                        <div class="box-img">
                                            <a href="cinema_listing_detail_view.html">
                                                <div class="over-bg">
                                                </div>
                                            </a>
                                            <img src="images/homepage/place/9_img.jpg" class="img" alt="" title="">
                                            <div class="box-heading1">
                                                <a href="cinema_listing_detail_view.html">Pixel Cinema</a>
                                                <div class="box-heading2">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                                        preserveAspectRatio="xMidYMid" width="12" height="14"
                                                        class="location-icon" viewBox="0 0 12 14">
                                                        <path
                                                            d="M6.720,10.847 C6.242,11.332 5.477,11.332 4.998,10.847 C2.719,8.534 1.555,6.413 1.555,4.454 C1.555,1.994 3.482,-0.000 5.859,-0.000 C8.236,-0.000 10.163,1.994 10.163,4.454 C10.163,6.413 8.999,8.534 6.720,10.847 ZM8.934,4.454 C8.934,2.697 7.557,1.273 5.859,1.273 C4.161,1.273 2.785,2.697 2.785,4.454 C2.785,6.004 3.793,7.842 5.859,9.938 C7.925,7.842 8.934,6.004 8.934,4.454 ZM5.859,6.045 C4.840,6.045 4.015,5.191 4.015,4.136 C4.015,3.082 4.840,2.227 5.859,2.227 C6.878,2.227 7.704,3.082 7.704,4.136 C7.704,5.191 6.878,6.045 5.859,6.045 ZM5.859,4.773 C6.199,4.773 6.474,4.488 6.474,4.136 C6.474,3.785 6.199,3.500 5.859,3.500 C5.520,3.500 5.244,3.785 5.244,4.136 C5.244,4.488 5.520,4.773 5.859,4.773 ZM2.165,9.509 C2.483,9.385 2.838,9.552 2.957,9.881 C3.076,10.210 2.915,10.577 2.597,10.700 C1.895,10.973 1.555,11.285 1.555,11.454 C1.555,11.987 3.462,12.727 5.859,12.727 C8.256,12.727 10.163,11.987 10.163,11.454 C10.163,11.285 9.823,10.973 9.122,10.700 C8.804,10.577 8.643,10.210 8.762,9.881 C8.881,9.552 9.235,9.385 9.553,9.509 C10.684,9.948 11.393,10.598 11.393,11.454 C11.393,13.031 8.895,14.000 5.859,14.000 C2.823,14.000 0.326,13.031 0.326,11.454 C0.326,10.598 1.034,9.948 2.165,9.509 Z">
                                                        </path>
                                                    </svg>India</div>
                                            </div>
                                            <div class="favorite">
                                                <i class="far fa-heart"></i>
                                            </div>
                                        </div>
                                        <div class="box-radius">
                                            <img src="images/homepage/latest/01_dp.png" class="img" alt="" title="">
                                        </div>
                                        <div class="box-heading3">
                                            <a href="user_detail_view.html">By Rock Smith</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-sm-6">
                                    <div class="box">
                                        <div class="box-img">
                                            <a href="cafe_listing_detail_view.html">
                                                <div class="over-bg">
                                                </div>
                                            </a>
                                            <img src="images/homepage/latest/03_img.jpg" class="img" alt="" title="">
                                            <div class="box-heading1">
                                                <a href="cafe_listing_detail_view.html">Coffee House</a>
                                                <div class="box-heading2">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                                        preserveAspectRatio="xMidYMid" width="12" height="14"
                                                        class="location-icon" viewBox="0 0 12 14">
                                                        <path
                                                            d="M6.720,10.847 C6.242,11.332 5.477,11.332 4.998,10.847 C2.719,8.534 1.555,6.413 1.555,4.454 C1.555,1.994 3.482,-0.000 5.859,-0.000 C8.236,-0.000 10.163,1.994 10.163,4.454 C10.163,6.413 8.999,8.534 6.720,10.847 ZM8.934,4.454 C8.934,2.697 7.557,1.273 5.859,1.273 C4.161,1.273 2.785,2.697 2.785,4.454 C2.785,6.004 3.793,7.842 5.859,9.938 C7.925,7.842 8.934,6.004 8.934,4.454 ZM5.859,6.045 C4.840,6.045 4.015,5.191 4.015,4.136 C4.015,3.082 4.840,2.227 5.859,2.227 C6.878,2.227 7.704,3.082 7.704,4.136 C7.704,5.191 6.878,6.045 5.859,6.045 ZM5.859,4.773 C6.199,4.773 6.474,4.488 6.474,4.136 C6.474,3.785 6.199,3.500 5.859,3.500 C5.520,3.500 5.244,3.785 5.244,4.136 C5.244,4.488 5.520,4.773 5.859,4.773 ZM2.165,9.509 C2.483,9.385 2.838,9.552 2.957,9.881 C3.076,10.210 2.915,10.577 2.597,10.700 C1.895,10.973 1.555,11.285 1.555,11.454 C1.555,11.987 3.462,12.727 5.859,12.727 C8.256,12.727 10.163,11.987 10.163,11.454 C10.163,11.285 9.823,10.973 9.122,10.700 C8.804,10.577 8.643,10.210 8.762,9.881 C8.881,9.552 9.235,9.385 9.553,9.509 C10.684,9.948 11.393,10.598 11.393,11.454 C11.393,13.031 8.895,14.000 5.859,14.000 C2.823,14.000 0.326,13.031 0.326,11.454 C0.326,10.598 1.034,9.948 2.165,9.509 Z">
                                                        </path>
                                                    </svg>India</div>
                                            </div>
                                            <div class="favorite">
                                                <i class="far fa-heart"></i>
                                            </div>
                                        </div>
                                        <div class="box-radius">
                                            <img src="images/homepage/latest/01_dp.png" class="img" alt="" title="">
                                        </div>
                                        <div class="box-heading3">
                                            <a href="user_detail_view.html">By Rock Smith</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-sm-6">
                                    <div class="box">
                                        <div class="box-img">
                                            <a href="restaurant_listing_detail_view.html">
                                                <div class="over-bg">
                                                </div>
                                            </a>
                                            <img src="images/homepage/latest/03_img.jpg" class="img" alt="" title="">
                                            <div class="box-heading1">
                                                <a href="restaurant_listing_detail_view.html">Basant Restaurant</a>
                                                <div class="box-heading2">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                                        preserveAspectRatio="xMidYMid" width="12" height="14"
                                                        class="location-icon" viewBox="0 0 12 14">
                                                        <path
                                                            d="M6.720,10.847 C6.242,11.332 5.477,11.332 4.998,10.847 C2.719,8.534 1.555,6.413 1.555,4.454 C1.555,1.994 3.482,-0.000 5.859,-0.000 C8.236,-0.000 10.163,1.994 10.163,4.454 C10.163,6.413 8.999,8.534 6.720,10.847 ZM8.934,4.454 C8.934,2.697 7.557,1.273 5.859,1.273 C4.161,1.273 2.785,2.697 2.785,4.454 C2.785,6.004 3.793,7.842 5.859,9.938 C7.925,7.842 8.934,6.004 8.934,4.454 ZM5.859,6.045 C4.840,6.045 4.015,5.191 4.015,4.136 C4.015,3.082 4.840,2.227 5.859,2.227 C6.878,2.227 7.704,3.082 7.704,4.136 C7.704,5.191 6.878,6.045 5.859,6.045 ZM5.859,4.773 C6.199,4.773 6.474,4.488 6.474,4.136 C6.474,3.785 6.199,3.500 5.859,3.500 C5.520,3.500 5.244,3.785 5.244,4.136 C5.244,4.488 5.520,4.773 5.859,4.773 ZM2.165,9.509 C2.483,9.385 2.838,9.552 2.957,9.881 C3.076,10.210 2.915,10.577 2.597,10.700 C1.895,10.973 1.555,11.285 1.555,11.454 C1.555,11.987 3.462,12.727 5.859,12.727 C8.256,12.727 10.163,11.987 10.163,11.454 C10.163,11.285 9.823,10.973 9.122,10.700 C8.804,10.577 8.643,10.210 8.762,9.881 C8.881,9.552 9.235,9.385 9.553,9.509 C10.684,9.948 11.393,10.598 11.393,11.454 C11.393,13.031 8.895,14.000 5.859,14.000 C2.823,14.000 0.326,13.031 0.326,11.454 C0.326,10.598 1.034,9.948 2.165,9.509 Z">
                                                        </path>
                                                    </svg>India</div>
                                            </div>
                                            <div class="favorite">
                                                <i class="far fa-heart"></i>
                                            </div>
                                        </div>
                                        <div class="box-radius">
                                            <img src="images/homepage/latest/01_dp.png" class="img" alt="" title="">
                                        </div>
                                        <div class="box-heading3">
                                            <a href="user_detail_view.html">By Rock Smith</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-sm-6">
                                    <div class="box">
                                        <div class="box-img">
                                            <a href="cafe_listing_detail_view.html">
                                                <div class="over-bg">
                                                </div>
                                            </a>
                                            <img src="images/homepage/place/8_img.jpg" class="img" alt="" title="">
                                            <div class="box-heading1">
                                                <a href="cafe_listing_detail_view.html">Coffee House</a>
                                                <div class="box-heading2">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                                        preserveAspectRatio="xMidYMid" width="12" height="14"
                                                        class="location-icon" viewBox="0 0 12 14">
                                                        <path
                                                            d="M6.720,10.847 C6.242,11.332 5.477,11.332 4.998,10.847 C2.719,8.534 1.555,6.413 1.555,4.454 C1.555,1.994 3.482,-0.000 5.859,-0.000 C8.236,-0.000 10.163,1.994 10.163,4.454 C10.163,6.413 8.999,8.534 6.720,10.847 ZM8.934,4.454 C8.934,2.697 7.557,1.273 5.859,1.273 C4.161,1.273 2.785,2.697 2.785,4.454 C2.785,6.004 3.793,7.842 5.859,9.938 C7.925,7.842 8.934,6.004 8.934,4.454 ZM5.859,6.045 C4.840,6.045 4.015,5.191 4.015,4.136 C4.015,3.082 4.840,2.227 5.859,2.227 C6.878,2.227 7.704,3.082 7.704,4.136 C7.704,5.191 6.878,6.045 5.859,6.045 ZM5.859,4.773 C6.199,4.773 6.474,4.488 6.474,4.136 C6.474,3.785 6.199,3.500 5.859,3.500 C5.520,3.500 5.244,3.785 5.244,4.136 C5.244,4.488 5.520,4.773 5.859,4.773 ZM2.165,9.509 C2.483,9.385 2.838,9.552 2.957,9.881 C3.076,10.210 2.915,10.577 2.597,10.700 C1.895,10.973 1.555,11.285 1.555,11.454 C1.555,11.987 3.462,12.727 5.859,12.727 C8.256,12.727 10.163,11.987 10.163,11.454 C10.163,11.285 9.823,10.973 9.122,10.700 C8.804,10.577 8.643,10.210 8.762,9.881 C8.881,9.552 9.235,9.385 9.553,9.509 C10.684,9.948 11.393,10.598 11.393,11.454 C11.393,13.031 8.895,14.000 5.859,14.000 C2.823,14.000 0.326,13.031 0.326,11.454 C0.326,10.598 1.034,9.948 2.165,9.509 Z">
                                                        </path>
                                                    </svg>India</div>
                                            </div>
                                            <div class="favorite">
                                                <i class="far fa-heart"></i>
                                            </div>
                                        </div>
                                        <div class="box-radius">
                                            <img src="images/homepage/latest/01_dp.png" class="img" alt="" title="">
                                        </div>
                                        <div class="box-heading3">
                                            <a href="user_detail_view.html">By Rock Smith</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-sm-6">
                                    <div class="box">
                                        <div class="box-img">
                                            <a href="realestate_rent_listing_detail_view.html">
                                                <div class="over-bg">
                                                </div>
                                            </a>
                                            <img src="images/homepage/realestate/ig-15.jpg" class="img" alt="" title="">
                                            <div class="box-heading1">
                                                <a href="realestate_rent_listing_detail_view.html">Shop for Rent</a>
                                                <div class="box-heading2">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                                        preserveAspectRatio="xMidYMid" width="12" height="14"
                                                        class="location-icon" viewBox="0 0 12 14">
                                                        <path
                                                            d="M6.720,10.847 C6.242,11.332 5.477,11.332 4.998,10.847 C2.719,8.534 1.555,6.413 1.555,4.454 C1.555,1.994 3.482,-0.000 5.859,-0.000 C8.236,-0.000 10.163,1.994 10.163,4.454 C10.163,6.413 8.999,8.534 6.720,10.847 ZM8.934,4.454 C8.934,2.697 7.557,1.273 5.859,1.273 C4.161,1.273 2.785,2.697 2.785,4.454 C2.785,6.004 3.793,7.842 5.859,9.938 C7.925,7.842 8.934,6.004 8.934,4.454 ZM5.859,6.045 C4.840,6.045 4.015,5.191 4.015,4.136 C4.015,3.082 4.840,2.227 5.859,2.227 C6.878,2.227 7.704,3.082 7.704,4.136 C7.704,5.191 6.878,6.045 5.859,6.045 ZM5.859,4.773 C6.199,4.773 6.474,4.488 6.474,4.136 C6.474,3.785 6.199,3.500 5.859,3.500 C5.520,3.500 5.244,3.785 5.244,4.136 C5.244,4.488 5.520,4.773 5.859,4.773 ZM2.165,9.509 C2.483,9.385 2.838,9.552 2.957,9.881 C3.076,10.210 2.915,10.577 2.597,10.700 C1.895,10.973 1.555,11.285 1.555,11.454 C1.555,11.987 3.462,12.727 5.859,12.727 C8.256,12.727 10.163,11.987 10.163,11.454 C10.163,11.285 9.823,10.973 9.122,10.700 C8.804,10.577 8.643,10.210 8.762,9.881 C8.881,9.552 9.235,9.385 9.553,9.509 C10.684,9.948 11.393,10.598 11.393,11.454 C11.393,13.031 8.895,14.000 5.859,14.000 C2.823,14.000 0.326,13.031 0.326,11.454 C0.326,10.598 1.034,9.948 2.165,9.509 Z">
                                                        </path>
                                                    </svg>India</div>
                                            </div>
                                            <div class="favorite">
                                                <i class="far fa-heart"></i>
                                            </div>
                                        </div>
                                        <div class="box-radius">
                                            <img src="images/homepage/latest/01_dp.png" class="img" alt="" title="">
                                        </div>
                                        <div class="box-heading3">
                                            <a href="user_detail_view.html">By Rock Smith</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-sm-6">
                                    <div class="box">
                                        <div class="box-img">
                                            <a href="historical_listing_detail_view.html">
                                                <div class="over-bg">
                                                </div>
                                            </a>
                                            <img src="images/homepage/place/ig-14.jpg" class="img" alt="" title="">
                                            <div class="box-heading1">
                                                <a href="historical_listing_detail_view.html">Historical Place</a>
                                                <div class="box-heading2">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                                        preserveAspectRatio="xMidYMid" width="12" height="14"
                                                        class="location-icon" viewBox="0 0 12 14">
                                                        <path
                                                            d="M6.720,10.847 C6.242,11.332 5.477,11.332 4.998,10.847 C2.719,8.534 1.555,6.413 1.555,4.454 C1.555,1.994 3.482,-0.000 5.859,-0.000 C8.236,-0.000 10.163,1.994 10.163,4.454 C10.163,6.413 8.999,8.534 6.720,10.847 ZM8.934,4.454 C8.934,2.697 7.557,1.273 5.859,1.273 C4.161,1.273 2.785,2.697 2.785,4.454 C2.785,6.004 3.793,7.842 5.859,9.938 C7.925,7.842 8.934,6.004 8.934,4.454 ZM5.859,6.045 C4.840,6.045 4.015,5.191 4.015,4.136 C4.015,3.082 4.840,2.227 5.859,2.227 C6.878,2.227 7.704,3.082 7.704,4.136 C7.704,5.191 6.878,6.045 5.859,6.045 ZM5.859,4.773 C6.199,4.773 6.474,4.488 6.474,4.136 C6.474,3.785 6.199,3.500 5.859,3.500 C5.520,3.500 5.244,3.785 5.244,4.136 C5.244,4.488 5.520,4.773 5.859,4.773 ZM2.165,9.509 C2.483,9.385 2.838,9.552 2.957,9.881 C3.076,10.210 2.915,10.577 2.597,10.700 C1.895,10.973 1.555,11.285 1.555,11.454 C1.555,11.987 3.462,12.727 5.859,12.727 C8.256,12.727 10.163,11.987 10.163,11.454 C10.163,11.285 9.823,10.973 9.122,10.700 C8.804,10.577 8.643,10.210 8.762,9.881 C8.881,9.552 9.235,9.385 9.553,9.509 C10.684,9.948 11.393,10.598 11.393,11.454 C11.393,13.031 8.895,14.000 5.859,14.000 C2.823,14.000 0.326,13.031 0.326,11.454 C0.326,10.598 1.034,9.948 2.165,9.509 Z">
                                                        </path>
                                                    </svg>India</div>
                                            </div>
                                            <div class="favorite">
                                                <i class="far fa-heart"></i>
                                            </div>
                                        </div>
                                        <div class="box-radius">
                                            <img src="images/homepage/latest/01_dp.png" class="img" alt="" title="">
                                        </div>
                                        <div class="box-heading3">
                                            <a href="user_detail_view.html">By Rock Smith</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="view-spinner">
                            <span>No More</span>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" role="tabpanel" id="followers">
                    <div class="video-block section-padding">
                        <div class="row">
                            <div class="col-lg-12 col-sm-12">
                                <div class="promote-title-hd">
                                    <h2>Followers</h2>
                                </div>
                            </div>
                        </div>
                        <div class="my-all-lisitngs">
                            <div class="row">
                                <div class="col-lg-3 col-sm-12">
                                    <div class="my-listing-dt-all-follow">
                                        <div class=" my-lisiting-picy">
                                            <a href="user_detail_view.html">
                                                <img src="images/my_profile/dp-1.jpg" alt="">
                                            </a>
                                        </div>
                                        <a href="user_detail_view.html">
                                            <h4>John Doe</h4>
                                        </a>
                                        <p>
                                            <i class="fas fa-map-marker-alt"></i>India</p>
                                        <div class="dashboard-main-dt-follow">
                                            <ul>
                                                <li>
                                                    <div class="lisitng-dt2">
                                                        <ins>15</ins>
                                                        <span>Listings</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="lisitng-dt2">
                                                        <ins>150</ins>
                                                        <span>Followers</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="lisitng-dt2">
                                                        <ins>265</ins>
                                                        <span>Following</span>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <button class="folow-btn" type="button">Follow</button>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-12">
                                    <div class="my-listing-dt-all-follow">
                                        <div class=" my-lisiting-picy">
                                            <a href="user_detail_view.html">
                                                <img src="images/my_profile/dp-8.jpg" alt="">
                                            </a>
                                        </div>
                                        <a href="user_detail_view.html">
                                            <h4>Jassica William</h4>
                                        </a>
                                        <p>
                                            <i class="fas fa-map-marker-alt"></i>Paris</p>
                                        <div class="dashboard-main-dt-follow">
                                            <ul>
                                                <li>
                                                    <div class="lisitng-dt2">
                                                        <ins>12</ins>
                                                        <span>Listings</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="lisitng-dt2">
                                                        <ins>470</ins>
                                                        <span>Followers</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="lisitng-dt2">
                                                        <ins>45</ins>
                                                        <span>Following</span>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <button class="folow-btn" type="button">Following</button>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-12">
                                    <div class="my-listing-dt-all-follow">
                                        <div class=" my-lisiting-picy">
                                            <a href="user_detail_view.html">
                                                <img src="images/my_profile/dp-3.jpg" alt="">
                                            </a>
                                        </div>
                                        <a href="user_detail_view.html">
                                            <h4>Johnson Dua</h4>
                                        </a>
                                        <p>
                                            <i class="fas fa-map-marker-alt"></i>India</p>
                                        <div class="dashboard-main-dt-follow">
                                            <ul>
                                                <li>
                                                    <div class="lisitng-dt2">
                                                        <ins>1</ins>
                                                        <span>Listings</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="lisitng-dt2">
                                                        <ins>110</ins>
                                                        <span>Followers</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="lisitng-dt2">
                                                        <ins>185</ins>
                                                        <span>Following</span>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <button class="folow-btn" type="button">Following</button>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-12">
                                    <div class="my-listing-dt-all-follow">
                                        <div class=" my-lisiting-picy">
                                            <a href="user_detail_view.html">
                                                <img src="images/my_profile/dp-4.jpg" alt="">
                                            </a>
                                        </div>
                                        <a href="user_detail_view.html">
                                            <h4>Albert Smith</h4>
                                        </a>
                                        <p>
                                            <i class="fas fa-map-marker-alt"></i>USA</p>
                                        <div class="dashboard-main-dt-follow">
                                            <ul>
                                                <li>
                                                    <div class="lisitng-dt2">
                                                        <ins>10</ins>
                                                        <span>Listings</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="lisitng-dt2">
                                                        <ins>95</ins>
                                                        <span>Followers</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="lisitng-dt2">
                                                        <ins>45</ins>
                                                        <span>Following</span>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <button class="folow-btn" type="button">Follow</button>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-12">
                                    <div class="my-listing-dt-all-follow">
                                        <div class=" my-lisiting-picy">
                                            <a href="user_detail_view.html">
                                                <img src="images/my_profile/dp-7.jpg" alt="">
                                            </a>
                                        </div>
                                        <a href="user_detail_view.html">
                                            <h4>Zoena Singh</h4>
                                        </a>
                                        <p>
                                            <i class="fas fa-map-marker-alt"></i>India</p>
                                        <div class="dashboard-main-dt-follow">
                                            <ul>
                                                <li>
                                                    <div class="lisitng-dt2">
                                                        <ins>5</ins>
                                                        <span>Listings</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="lisitng-dt2">
                                                        <ins>15</ins>
                                                        <span>Followers</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="lisitng-dt2">
                                                        <ins>5</ins>
                                                        <span>Following</span>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <button class="folow-btn" type="button">Following</button>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-12">
                                    <div class="my-listing-dt-all-follow">
                                        <div class=" my-lisiting-picy">
                                            <a href="user_detail_view.html">
                                                <img src="images/my_profile/dp-5.jpg" alt="">
                                            </a>
                                        </div>
                                        <a href="user_detail_view.html">
                                            <h4>Jass Singh</h4>
                                        </a>
                                        <p>
                                            <i class="fas fa-map-marker-alt"></i>India</p>
                                        <div class="dashboard-main-dt-follow">
                                            <ul>
                                                <li>
                                                    <div class="lisitng-dt2">
                                                        <ins>12</ins>
                                                        <span>Listings</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="lisitng-dt2">
                                                        <ins>150</ins>
                                                        <span>Followers</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="lisitng-dt2">
                                                        <ins>198</ins>
                                                        <span>Following</span>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <button class="folow-btn" type="button">Follow</button>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-12">
                                    <div class="my-listing-dt-all-follow">
                                        <div class=" my-lisiting-picy">
                                            <a href="user_detail_view.html">
                                                <img src="images/my_profile/dp-2.jpg" alt="">
                                            </a>
                                        </div>
                                        <a href="user_detail_view.html">
                                            <h4>Joy Dua</h4>
                                        </a>
                                        <p>
                                            <i class="fas fa-map-marker-alt"></i>India</p>
                                        <div class="dashboard-main-dt-follow">
                                            <ul>
                                                <li>
                                                    <div class="lisitng-dt2">
                                                        <ins>10</ins>
                                                        <span>Listings</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="lisitng-dt2">
                                                        <ins>120</ins>
                                                        <span>Followers</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="lisitng-dt2">
                                                        <ins>165</ins>
                                                        <span>Following</span>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <button class="folow-btn" type="button">Following</button>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-12">
                                    <div class="my-listing-dt-all-follow">
                                        <div class=" my-lisiting-picy">
                                            <a href="user_detail_view.html">
                                                <img src="images/my_profile/dp-6.jpg" alt="">
                                            </a>
                                        </div>
                                        <a href="user_detail_view.html">
                                            <h4>Brook Doe</h4>
                                        </a>
                                        <p>
                                            <i class="fas fa-map-marker-alt"></i>Canada</p>
                                        <div class="dashboard-main-dt-follow">
                                            <ul>
                                                <li>
                                                    <div class="lisitng-dt2">
                                                        <ins>11</ins>
                                                        <span>Listings</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="lisitng-dt2">
                                                        <ins>110</ins>
                                                        <span>Followers</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="lisitng-dt2">
                                                        <ins>125</ins>
                                                        <span>Following</span>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <button class="folow-btn" type="button">Follow</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" role="tabpanel" id="following">
                    <div class="video-block section-padding">
                        <div class="row">
                            <div class="col-lg-12 col-sm-12">
                                <div class="promote-title-hd">
                                    <h2>Following</h2>
                                </div>
                            </div>
                        </div>
                        <div class="my-all-lisitngs">
                            <div class="row">
                                <div class="col-lg-3 col-sm-12">
                                    <div class="my-listing-dt-all-follow">
                                        <div class=" my-lisiting-picy">
                                            <a href="user_detail_view.html">
                                                <img src="images/my_profile/dp-1.jpg" alt="">
                                            </a>
                                        </div>
                                        <a href="user_detail_view.html">
                                            <h4>John Doe</h4>
                                        </a>
                                        <p>
                                            <i class="fas fa-map-marker-alt"></i>India</p>
                                        <div class="dashboard-main-dt-follow">
                                            <ul>
                                                <li>
                                                    <div class="lisitng-dt2">
                                                        <ins>15</ins>
                                                        <span>Listings</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="lisitng-dt2">
                                                        <ins>150</ins>
                                                        <span>Followers</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="lisitng-dt2">
                                                        <ins>265</ins>
                                                        <span>Following</span>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <button class="folow-btn" type="button">Follow</button>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-12">
                                    <div class="my-listing-dt-all-follow">
                                        <div class=" my-lisiting-picy">
                                            <a href="user_detail_view.html">
                                                <img src="images/my_profile/dp-8.jpg" alt="">
                                            </a>
                                        </div>
                                        <a href="user_detail_view.html">
                                            <h4>Jassica William</h4>
                                        </a>
                                        <p>
                                            <i class="fas fa-map-marker-alt"></i>Paris</p>
                                        <div class="dashboard-main-dt-follow">
                                            <ul>
                                                <li>
                                                    <div class="lisitng-dt2">
                                                        <ins>12</ins>
                                                        <span>Listings</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="lisitng-dt2">
                                                        <ins>470</ins>
                                                        <span>Followers</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="lisitng-dt2">
                                                        <ins>45</ins>
                                                        <span>Following</span>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <button class="folow-btn" type="button">Follow</button>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-12">
                                    <div class="my-listing-dt-all-follow">
                                        <div class=" my-lisiting-picy">
                                            <a href="user_detail_view.html">
                                                <img src="images/my_profile/dp-3.jpg" alt="">
                                            </a>
                                        </div>
                                        <a href="user_detail_view.html">
                                            <h4>Johnson Dua</h4>
                                        </a>
                                        <p>
                                            <i class="fas fa-map-marker-alt"></i>India</p>
                                        <div class="dashboard-main-dt-follow">
                                            <ul>
                                                <li>
                                                    <div class="lisitng-dt2">
                                                        <ins>1</ins>
                                                        <span>Listings</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="lisitng-dt2">
                                                        <ins>110</ins>
                                                        <span>Followers</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="lisitng-dt2">
                                                        <ins>185</ins>
                                                        <span>Following</span>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <button class="folow-btn" type="button">Following</button>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-12">
                                    <div class="my-listing-dt-all-follow">
                                        <div class=" my-lisiting-picy">
                                            <a href="user_detail_view.html">
                                                <img src="images/my_profile/dp-4.jpg" alt="">
                                            </a>
                                        </div>
                                        <a href="user_detail_view.html">
                                            <h4>Albert Smith</h4>
                                        </a>
                                        <p>
                                            <i class="fas fa-map-marker-alt"></i>USA</p>
                                        <div class="dashboard-main-dt-follow">
                                            <ul>
                                                <li>
                                                    <div class="lisitng-dt2">
                                                        <ins>10</ins>
                                                        <span>Listings</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="lisitng-dt2">
                                                        <ins>95</ins>
                                                        <span>Followers</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="lisitng-dt2">
                                                        <ins>45</ins>
                                                        <span>Following</span>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <button class="folow-btn" type="button">Follow</button>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-12">
                                    <div class="my-listing-dt-all-follow">
                                        <div class=" my-lisiting-picy">
                                            <a href="user_detail_view.html">
                                                <img src="images/my_profile/dp-7.jpg" alt="">
                                            </a>
                                        </div>
                                        <a href="user_detail_view.html">
                                            <h4>Zoena Singh</h4>
                                        </a>
                                        <p>
                                            <i class="fas fa-map-marker-alt"></i>India</p>
                                        <div class="dashboard-main-dt-follow">
                                            <ul>
                                                <li>
                                                    <div class="lisitng-dt2">
                                                        <ins>5</ins>
                                                        <span>Listings</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="lisitng-dt2">
                                                        <ins>15</ins>
                                                        <span>Followers</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="lisitng-dt2">
                                                        <ins>5</ins>
                                                        <span>Following</span>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <button class="folow-btn" type="button">Follow</button>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-12">
                                    <div class="my-listing-dt-all-follow">
                                        <div class=" my-lisiting-picy">
                                            <a href="user_detail_view.html">
                                                <img src="images/my_profile/dp-5.jpg" alt="">
                                            </a>
                                        </div>
                                        <a href="user_detail_view.html">
                                            <h4>Jass Singh</h4>
                                        </a>
                                        <p>
                                            <i class="fas fa-map-marker-alt"></i>India</p>
                                        <div class="dashboard-main-dt-follow">
                                            <ul>
                                                <li>
                                                    <div class="lisitng-dt2">
                                                        <ins>12</ins>
                                                        <span>Listings</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="lisitng-dt2">
                                                        <ins>150</ins>
                                                        <span>Followers</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="lisitng-dt2">
                                                        <ins>198</ins>
                                                        <span>Following</span>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <button class="folow-btn" type="button">Following</button>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-12">
                                    <div class="my-listing-dt-all-follow">
                                        <div class=" my-lisiting-picy">
                                            <a href="user_detail_view.html">
                                                <img src="images/my_profile/dp-2.jpg" alt="">
                                            </a>
                                        </div>
                                        <a href="user_detail_view.html">
                                            <h4>Joy Dua</h4>
                                        </a>
                                        <p>
                                            <i class="fas fa-map-marker-alt"></i>India</p>
                                        <div class="dashboard-main-dt-follow">
                                            <ul>
                                                <li>
                                                    <div class="lisitng-dt2">
                                                        <ins>10</ins>
                                                        <span>Listings</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="lisitng-dt2">
                                                        <ins>120</ins>
                                                        <span>Followers</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="lisitng-dt2">
                                                        <ins>165</ins>
                                                        <span>Following</span>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <button class="folow-btn" type="button">Follow</button>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-12">
                                    <div class="my-listing-dt-all-follow">
                                        <div class=" my-lisiting-picy">
                                            <a href="user_detail_view.html">
                                                <img src="images/my_profile/dp-6.jpg" alt="">
                                            </a>
                                        </div>
                                        <a href="user_detail_view.html">
                                            <h4>Brook Doe</h4>
                                        </a>
                                        <p>
                                            <i class="fas fa-map-marker-alt"></i>Canada</p>
                                        <div class="dashboard-main-dt-follow">
                                            <ul>
                                                <li>
                                                    <div class="lisitng-dt2">
                                                        <ins>11</ins>
                                                        <span>Listings</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="lisitng-dt2">
                                                        <ins>110</ins>
                                                        <span>Followers</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="lisitng-dt2">
                                                        <ins>125</ins>
                                                        <span>Following</span>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <button class="folow-btn" type="button">Following</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<a class="scroll-to-top rounded" href="#page-top">
    <i class="ti-arrow-up"></i>
</a>
<script data-cfasync="false" src="{{asset('../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js')}}">
</script>
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('vendor/jquery-easing/jquery.easing.min.js')}}"></script>
<script src="{{asset('../../../../api.mapbox.com/mapbox-gl-js/v0.54.0/mapbox-gl.js')}}"></script>
<script src="{{asset('js/sb-admin.min.js')}}"></script>
<script src="{{asset('js/you-listing.js')}}"></script>
<script src="{{asset('js/menurght.js')}}"></script>
<script src="{{asset('js/crausal1.js')}}"></script>
<script src="{{asset('js/photoswipe.min.js')}}"></script>
<script src="{{asset('js/photoswipe-ui-default.min.js')}}"></script>
<script src="{{asset('js/select-new.js')}}"></script>
<script src="{{asset('js/slick.min.js')}}"></script>
<script src="{{asset('assets/vendors/jquery.min.js')}}"></script>
<script src="{{asset('assets/owlcarousel/owl.carousel.js')}}"></script>
<script>
    mapboxgl.accessToken = 'pk.eyJ1IjoiZ2FtYm9sIiwiYSI6ImNqdm03bzYydDE2cW00YWwyeHprd3FqamcifQ.HBy4R4sRcXgbgn2OteqFkQ';

    var monument = [2.317600, 48.866500];
    var map = new mapboxgl.Map({
        container: 'map',
        style: 'mapbox://styles/gambol/cjvm8v0mj3t6s1cqptgyqcnfn',
        center: monument,
        zoom: 10
    });

    // create the popup
    var popup = new mapboxgl.Popup({
            offset: 25
        })
        .setText('Coffee House');

    // create DOM element for the marker
    var el = document.createElement('div');
    el.id = 'marker';

    // create the marker
    new mapboxgl.Marker(el)
        .setLngLat(monument)
        .setPopup(popup) // sets a popup on this marker
        .addTo(map);

    // Add zoom and rotation controls to the map.
    map.addControl(new mapboxgl.NavigationControl());

</script>
<script>
    window.oncontextmenu = function () {
        return false;
    }
    $(document).keydown(function (event) {
        if (event.keyCode == 123) {
            return false;
        } else if ((event.ctrlKey && event.shiftKey && event.keyCode == 73) || (event.ctrlKey && event
                .shiftKey && event.keyCode == 74)) {
            return false;
        }
    });

</script>
@endsection
