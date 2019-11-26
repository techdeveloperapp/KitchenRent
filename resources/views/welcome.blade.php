<!DOCTYPE html>
<head>

<!-- Basic Page Needs
================================================== -->
<title>Listeo</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS
================================================== -->
<link href="{{url('frontend/css/style.css')}}" rel="stylesheet" type="text/css" />
<link href="{{url('frontend/css/main-color.css')}}" rel="stylesheet" type="text/css" />

</head>

<body>

<!-- Wrapper -->
<div id="wrapper">

<!-- Header Container
================================================== -->
<header id="header-container">

    <!-- Header -->
    <div id="header">
        <div class="container">
            
            <!-- Left Side Content -->
            <div class="left-side">
                
                <!-- Logo -->
                <div id="logo">
                    <a href="#"><img src="{{url('frontend/')}}/images/logo.png" alt=""></a>
                </div>

                <!-- Mobile Navigation -->
                <div class="mmenu-trigger">
                    <button class="hamburger hamburger--collapse" type="button">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>

                <!-- Main Navigation -->
                <!-- <nav id="navigation" class="style-1">
                    <ul id="responsive">

                        <li><a class="current" href="#">Home</a>
                            <ul>
                                <li><a href="index.html">Home 1</a></li>
                                <li><a href="index-2-airbnb.html">Home 2 (Airbnb)</a></li>
                                <li><a href="index-3.html">Home 3</a></li>
                                <li><a href="index-4.html">Home 4</a></li>
                                <li><a href="index-5.html">Home 5</a></li>
                                <li><a href="index-6.html">Home 6</a></li>
                            </ul>
                        </li>

                        <li><a href="#">Listings</a>
                            <ul>
                                <li><a href="#">List Layout</a>
                                    <ul>
                                        <li><a href="listings-list-with-sidebar.html">With Sidebar</a></li>
                                        <li><a href="listings-list-full-width.html">Full Width</a></li>
                                        <li><a href="listings-list-full-width-with-map.html">Full Width + Map</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Grid Layout</a>
                                    <ul>
                                        <li><a href="listings-grid-with-sidebar-1.html">With Sidebar 1</a></li>
                                        <li><a href="listings-grid-with-sidebar-2.html">With Sidebar 2</a></li>
                                        <li><a href="listings-grid-full-width.html">Full Width</a></li>
                                        <li><a href="listings-grid-full-width-with-map.html">Full Width + Map</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Half Screen Map</a>
                                    <ul>
                                        <li><a href="listings-half-screen-map-list.html">List Layout</a></li>
                                        <li><a href="listings-half-screen-map-grid-1.html">Grid Layout 1</a></li>
                                        <li><a href="listings-half-screen-map-grid-2.html">Grid Layout 2</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Single Listings</a>
                                    <ul>
                                        <li><a href="listings-single-page.html">Single Listing 1</a></li>
                                        <li><a href="listings-single-page-2.html">Single Listing 2</a></li>
                                        <li><a href="listings-single-page-3.html">Single Listing 3</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Open Street Map</a>
                                    <ul>
                                        <li><a href="listings-half-screen-map-list-OpenStreetMap.html">Half Screen Map List Layout</a></li>
                                        <li><a href="listings-half-screen-map-grid-1-OpenStreetMap.html">Half Screen Map Grid Layout 1</a></li>
                                        <li><a href="listings-half-screen-map-grid-2-OpenStreetMap.html">Half Screen Map Grid Layout 2</a></li>
                                        <li><a href="listings-list-full-width-with-map-OpenStreetMap.html">Full Width List</a></li>
                                        <li><a href="listings-grid-full-width-with-map-OpenStreetMap.html">Full Width Grid</a></li>
                                        <li><a href="listings-single-page-OpenStreetMap.html">Single Listing</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                        <li><a href="#">User Panel</a>
                            <ul>
                                <li><a href="dashboard.html">Dashboard</a></li>
                                <li><a href="dashboard-messages.html">Messages</a></li>
                                <li><a href="dashboard-bookings.html">Bookings</a></li>
                                <li><a href="dashboard-wallet.html">Wallet</a></li>
                                <li><a href="dashboard-my-listings.html">My Listings</a></li>
                                <li><a href="dashboard-reviews.html">Reviews</a></li>
                                <li><a href="dashboard-bookmarks.html">Bookmarks</a></li>
                                <li><a href="dashboard-add-listing.html">Add Listing</a></li>
                                <li><a href="dashboard-my-profile.html">My Profile</a></li>
                                <li><a href="dashboard-invoice.html">Invoice</a></li>
                            </ul>
                        </li>

                        <li><a href="#">Pages</a>
                            <div class="mega-menu mobile-styles three-columns">

                                    <div class="mega-menu-section">
                                        <ul>
                                            <li class="mega-menu-headline">Pages #1</li>
                                            <li><a href="pages-user-profile.html"><i class="sl sl-icon-user"></i> User Profile</a></li>
                                            <li><a href="pages-booking.html"><i class="sl sl-icon-check"></i> Booking Page</a></li>
                                            <li><a href="pages-add-listing.html"><i class="sl sl-icon-plus"></i> Add Listing</a></li>
                                            <li><a href="pages-blog.html"><i class="sl sl-icon-docs"></i> Blog</a></li>
                                        </ul>
                                    </div>
        
                                    <div class="mega-menu-section">
                                        <ul>
                                            <li class="mega-menu-headline">Pages #2</li>
                                            <li><a href="pages-contact.html"><i class="sl sl-icon-envelope-open"></i> Contact</a></li>
                                            <li><a href="pages-coming-soon.html"><i class="sl sl-icon-hourglass"></i> Coming Soon</a></li>
                                            <li><a href="pages-404.html"><i class="sl sl-icon-close"></i> 404 Page</a></li>
                                            <li><a href="pages-masonry-filtering.html"><i class="sl sl-icon-equalizer"></i> Masonry Filtering</a></li>
                                        </ul>
                                    </div>

                                    <div class="mega-menu-section">
                                        <ul>
                                            <li class="mega-menu-headline">Other</li>
                                            <li><a href="pages-elements.html"><i class="sl sl-icon-settings"></i> Elements</a></li>
                                            <li><a href="pages-pricing-tables.html"><i class="sl sl-icon-tag"></i> Pricing Tables</a></li>
                                            <li><a href="pages-typography.html"><i class="sl sl-icon-pencil"></i> Typography</a></li>
                                            <li><a href="pages-icons.html"><i class="sl sl-icon-diamond"></i> Icons</a></li>
                                        </ul>
                                    </div>
                                    
                            </div>
                        </li>
                        
                    </ul>
                </nav> -->
                <div class="clearfix"></div>
                <!-- Main Navigation / End -->
                
            </div>
            <!-- Left Side Content / End -->


            <!-- Right Side Content / End -->
            <div class="right-side">
                <div class="header-widget">
                    <a href="#sign-in-dialog" class="sign-in popup-with-zoom-anim"><i class="sl sl-icon-login"></i> Sign In</a>
                    <a href="dashboard-add-listing.html" class="button border with-icon">Add Listing <i class="sl sl-icon-plus"></i></a>
                </div>
            </div>
            <!-- Right Side Content / End -->

            <!-- Sign In Popup -->
            <div id="sign-in-dialog" class="zoom-anim-dialog mfp-hide">

                <div class="small-dialog-header">
                    <h3>Sign In</h3>
                </div>

                <!--Tabs -->
                <div class="sign-in-form style-1">

                    <ul class="tabs-nav">
                        <li class=""><a href="#tab1">Log In</a></li>
                        <li><a href="#tab2">Register</a></li>
                    </ul>

                    <div class="tabs-container alt">

                        <!-- Login -->
                        <div class="tab-content" id="tab1" style="display: none;">
                            <form class="m-login__form m-form" method="POST" action="{{ route('login') }}">
                                @csrf
                                <p class="form-row form-row-wide">
                                    <label for="username">Username:
                                        <i class="im im-icon-Male"></i>
                                        <input class="form-control m-input" type="email" class="input-text form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email" autofocus>
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </label>
                                </p>

                                <p class="form-row form-row-wide">
                                    <label for="password">Password:
                                        <i class="im im-icon-Lock-2"></i>
                                        <input class="form-control m-input m-login__form-input--last" id="login_password" type="password" class="input-text form-control @error('password') is-invalid @enderror" placeholder="Password" name="password" required autocomplete="current-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </label>
                                    <span class="lost_password">
                                        <a href="#" >Lost Your Password?</a>
                                    </span>
                                </p>

                                <div class="form-row">
                                    <button type="submit" class="button border margin-top-5" name="login" value="Login">
                                        Sign In
                                    </button>
                                    <div class="checkboxes margin-top-10">
                                        <input id="remember-me" type="checkbox" name="check">
                                        <label for="remember-me">Remember Me</label>
                                    </div>
                                </div>
                                
                            </form>
                        </div>

                        <!-- Register -->
                        <div class="tab-content" id="tab2" style="display: none;">

                            <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <p class="form-row form-row-wide">
                                <label for="username2">Username:
                                    <i class="im im-icon-Male"></i>
                                    <input id="name" type="text" class="input-text form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </label>
                            </p>
                                
                            <p class="form-row form-row-wide">
                                <label for="email2">Email Address:
                                    <i class="im im-icon-Mail"></i>
                                    <input id="email" type="email" class="input-text form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </label>
                            </p>

                            <p class="form-row form-row-wide">
                                <label for="password1">Password:
                                    <i class="im im-icon-Lock-2"></i>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </label>
                            </p>

                            <p class="form-row form-row-wide">
                                <label for="password2">Repeat Password:
                                    <i class="im im-icon-Lock-2"></i>
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </label>
                            </p>

                            <button type="submit" class="button border fw margin-top-10">
                                {{ __('Register') }}
                            </button>
    
                            </form>
                        </div>

                    </div>
                </div>
            </div>
            <!-- Sign In Popup / End -->

        </div>
    </div>
    <!-- Header / End -->

</header>
<div class="clearfix"></div>
<!-- Header Container / End -->


<!-- Banner
================================================== -->
<div class="main-search-container dark-overlay">
    <div class="main-search-inner">

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Find Nearby Attractions</h2>
                    <h4>Expolore top-rated attractions, activities and more</h4>

                    <div class="main-search-input">

                        <div class="main-search-input-item">
                            <input type="text" placeholder="What are you looking for?" value=""/>
                        </div>

                        <div class="main-search-input-item location">
                            <div id="autocomplete-container">
                                <input id="autocomplete-input" type="text" placeholder="Location">
                            </div>
                            <a href="#"><i class="fa fa-map-marker"></i></a>
                        </div>

                        <div class="main-search-input-item">
                            <select data-placeholder="All Categories" class="chosen-select" >
                                <option>All Categories</option> 
                                <option>Shops</option>
                                <option>Hotels</option>
                                <option>Restaurants</option>
                                <option>Fitness</option>
                                <option>Events</option>
                            </select>
                        </div>

                        <button class="button" onclick="window.location.href='listings-half-screen-map-list.html'">Search</button>

                    </div>
                </div>
            </div>
        </div>

    </div>
    
    <!-- Video -->
    <div class="video-container">
        <video poster="{{url('frontend/')}}/images/main-search-video-poster.jpg" loop autoplay muted>
            <source src="{{url('frontend/')}}/images/main-search-video.mp4" type="video/mp4">
        </video>
    </div>

</div>



<!-- Content
================================================== -->
<div class="container">
    <div class="row">

        <div class="col-md-12">
            <h3 class="headline centered margin-top-75">
                Browse Categories
            </h3>
        </div>

    </div>
</div>


<!-- Category Boxes -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="categories-boxes-container margin-top-5 margin-bottom-30">
                
                <!-- Box -->
                <a href="listings-list-with-sidebar.html" class="category-small-box">
                    <i class="im im-icon-Hamburger"></i>
                    <h4>Eat & Drink</h4>
                    <span class="category-box-counter">12</span>
                </a>

                <!-- Box -->
                <a href="listings-list-with-sidebar.html" class="category-small-box">
                    <i class="im  im-icon-Sleeping"></i>
                    <h4>Hotels</h4>
                    <span class="category-box-counter">32</span>
                </a>

                <!-- Box -->
                <a href="listings-list-with-sidebar.html" class="category-small-box">
                    <i class="im im-icon-Shopping-Bag"></i>
                    <h4>Shops</h4>
                    <span class="category-box-counter">11</span>
                </a>

                <!-- Box -->
                <a href="listings-list-with-sidebar.html" class="category-small-box">
                    <i class="im im-icon-Cocktail"></i>
                    <h4>Nightlife</h4>
                    <span class="category-box-counter">15</span>
                </a>

                <!-- Box -->
                <a href="listings-list-with-sidebar.html" class="category-small-box">
                    <i class="im im-icon-Electric-Guitar"></i>
                    <h4>Events</h4>
                    <span class="category-box-counter">21</span>
                </a>

                <!-- Box -->
                <a href="listings-list-with-sidebar.html" class="category-small-box">
                    <i class="im im-icon-Dumbbell"></i>
                    <h4>Fitness</h4>
                    <span class="category-box-counter">28</span>
                </a>

            </div>
        </div>
    </div>
</div>
<!-- Category Boxes / End -->


<!-- Fullwidth Section -->
<section class="fullwidth margin-top-65 padding-top-75 padding-bottom-70" data-background-color="#f8f8f8">

    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <h3 class="headline centered margin-bottom-45">
                    Most Visited Places
                    <span>Discover top-rated local businesses</span>
                </h3>
            </div>
        </div>
    </div>

    <!-- Carousel / Start -->
    <div class="simple-fw-slick-carousel dots-nav">

        <!-- Listing Item -->
        <div class="fw-carousel-item">
            <a href="listings-single-page.html" class="listing-item-container compact">
                <div class="listing-item">
                    <img src="{{url('frontend/')}}/images/listing-item-01.jpg" alt="">

                    <div class="listing-badge now-open">Now Open</div>

                    <div class="listing-item-content">
                        <div class="numerical-rating" data-rating="3.5"></div>
                        <h3>Tom's Restaurant</h3>
                        <span>964 School Street, New York</span>
                    </div>
                    <span class="like-icon"></span>
                </div>
            </a>
        </div>
        <!-- Listing Item / End -->

        <!-- Listing Item -->
        <div class="fw-carousel-item">
            <a href="listings-single-page.html" class="listing-item-container compact">
                <div class="listing-item">
                    <img src="{{url('frontend/')}}/images/listing-item-02.jpg" alt="">
                    <div class="listing-item-details">
                        <ul>
                            <li>Friday, August 10</li>
                        </ul>
                    </div>
                    <div class="listing-item-content">
                        <div class="numerical-rating" data-rating="5.0"></div>
                        <h3>Sticky Band</h3>
                        <span>Bishop Avenue, New York</span>
                    </div>
                    <span class="like-icon"></span>
                </div>
            </a>
        </div>
        <!-- Listing Item / End -->     

        <!-- Listing Item -->
        <div class="fw-carousel-item">
            <a href="listings-single-page.html" class="listing-item-container compact">
                <div class="listing-item">
                    <img src="{{url('frontend/')}}/images/listing-item-03.jpg" alt="">
                    <div class="listing-item-details">
                        <ul>
                            <li>Starting from $59 per night</li>
                        </ul>
                    </div>
                    <div class="listing-item-content">
                        <div class="numerical-rating" data-rating="2.0"></div>
                        <h3>Hotel Govendor</h3>
                        <span>778 Country Street, New York</span>
                    </div>
                    <span class="like-icon"></span>
                </div>

            </a>
        </div>
        <!-- Listing Item / End -->

        <!-- Listing Item -->
        <div class="fw-carousel-item">
            <a href="listings-single-page.html" class="listing-item-container compact">
                <div class="listing-item">
                    <img src="{{url('frontend/')}}/images/listing-item-04.jpg" alt="">

                    <div class="listing-badge now-open">Now Open</div>

                    <div class="listing-item-content">
                        <div class="numerical-rating" data-rating="5.0"></div>
                        <h3>Burger House</h3>
                        <span>2726 Shinn Street, New York</span>
                    </div>
                    <span class="like-icon"></span>
                </div>
            </a>
        </div>
        <!-- Listing Item / End -->

        <!-- Listing Item -->
        <div class="fw-carousel-item">
            <a href="listings-single-page.html" class="listing-item-container compact">
                <div class="listing-item">
                    <img src="{{url('frontend/')}}/images/listing-item-05.jpg" alt="">
                    <div class="listing-item-content">
                        <div class="numerical-rating" data-rating="3.5"></div>
                        <h3>Airport</h3>
                        <span>1512 Duncan Avenue, New York</span>
                    </div>
                    <span class="like-icon"></span>
                </div>
            </a>
        </div>
        <!-- Listing Item / End -->

        <!-- Listing Item -->
        <div class="fw-carousel-item">
            <a href="listings-single-page.html" class="listing-item-container compact">
                <div class="listing-item">
                    <img src="{{url('frontend/')}}/images/listing-item-06.jpg" alt="">

                    <div class="listing-badge now-closed">Now Closed</div>

                    <div class="listing-item-content">
                        <div class="numerical-rating" data-rating="4.5"></div>
                        <h3>Think Coffee</h3>
                        <span>215 Terry Lane, New York</span>
                    </div>
                    <span class="like-icon"></span>
                </div>
            </a>
        </div>
        <!-- Listing Item / End -->

    </div>
    <!-- Carousel / End -->


</section>
<!-- Fullwidth Section / End -->


<!-- Container -->
<div class="container">
    <div class="row">

        <div class="col-md-12">
            <h3 class="headline centered margin-bottom-35 margin-top-70">Popular Cities <span>Browse listings in popular places</span></h3>
        </div>
        
        <div class="col-md-4">

            <!-- Image Box -->
            <a href="listings-list-with-sidebar.html" class="img-box" data-background-image="{{url('frontend/')}}/images/popular-location-01.jpg">
                <div class="img-box-content visible">
                    <h4>New York </h4>
                    <span>14 Listings</span>
                </div>
            </a>

        </div>  
            
        <div class="col-md-8">

            <!-- Image Box -->
            <a href="listings-list-with-sidebar.html" class="img-box" data-background-image="{{url('frontend/')}}/images/popular-location-02.jpg">
                <div class="img-box-content visible">
                    <h4>Los Angeles</h4>
                    <span>24 Listings</span>
                </div>
            </a>

        </div>  

        <div class="col-md-8">

            <!-- Image Box -->
            <a href="listings-list-with-sidebar.html" class="img-box" data-background-image="{{url('frontend/')}}/images/popular-location-03.jpg">
                <div class="img-box-content visible">
                    <h4>San Francisco </h4>
                    <span>12 Listings</span>
                </div>
            </a>

        </div>  
            
        <div class="col-md-4">

            <!-- Image Box -->
            <a href="listings-list-with-sidebar.html" class="img-box" data-background-image="{{url('frontend/')}}/images/popular-location-04.jpg">
                <div class="img-box-content visible">
                    <h4>Miami</h4>
                    <span>9 Listings</span>
                </div>
            </a>

        </div>

    </div>
</div>
<!-- Container / End -->


<!-- Flip banner -->
<a href="listings-half-screen-map-list.html" class="flip-banner parallax margin-top-65" data-background="{{url('frontend/')}}/images/slider-bg-02.jpg" data-color="#f91942" data-color-opacity="0.85" data-img-width="2500" data-img-height="1666">
    <div class="flip-banner-content">
        <h2 class="flip-visible">Expolore top-rated attractions nearby</h2>
        <h2 class="flip-hidden">Browse Listings <i class="sl sl-icon-arrow-right"></i></h2>
    </div>
</a>
<!-- Flip banner / End -->


<!-- Footer
================================================== -->
<div id="footer">
    <!-- Main -->
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-sm-6">
                <img class="footer-logo" src="{{url('frontend/')}}/images/logo.png" alt="">
                <br><br>
                <p>Morbi convallis bibendum urna ut viverra. Maecenas quis consequat libero, a feugiat eros. Nunc ut lacinia tortor morbi ultricies laoreet ullamcorper phasellus semper.</p>
            </div>

            <div class="col-md-4 col-sm-6 ">
                <h4>Helpful Links</h4>
                <ul class="footer-links">
                    <li><a href="#">Login</a></li>
                    <li><a href="#">Sign Up</a></li>
                    <li><a href="#">My Account</a></li>
                    <li><a href="#">Add Listing</a></li>
                    <li><a href="#">Pricing</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                </ul>

                <ul class="footer-links">
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Our Partners</a></li>
                    <li><a href="#">How It Works</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
                <div class="clearfix"></div>
            </div>      

            <div class="col-md-3  col-sm-12">
                <h4>Contact Us</h4>
                <div class="text-widget">
                    <span>12345 Little Lonsdale St, Melbourne</span> <br>
                    Phone: <span>(123) 123-456 </span><br>
                    E-Mail:<span> <a href="#">office@example.com</a> </span><br>
                </div>

                <ul class="social-icons margin-top-20">
                    <li><a class="facebook" href="#"><i class="icon-facebook"></i></a></li>
                    <li><a class="twitter" href="#"><i class="icon-twitter"></i></a></li>
                    <li><a class="gplus" href="#"><i class="icon-gplus"></i></a></li>
                    <li><a class="vimeo" href="#"><i class="icon-vimeo"></i></a></li>
                </ul>

            </div>

        </div>
        
        <!-- Copyright -->
        <div class="row">
            <div class="col-md-12">
                <div class="copyrights">© 2019 Listeo. All Rights Reserved.</div>
            </div>
        </div>

    </div>

</div>
<!-- Footer / End -->


<!-- Back To Top Button -->
<div id="backtotop"><a href="#"></a></div>


</div>
<!-- Wrapper / End -->



<!-- Scripts
================================================== -->
<script type="text/javascript" src="{{url('frontend/')}}/scripts/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="{{url('frontend/')}}/scripts/jquery-migrate-3.1.0.min.js"></script>
<script type="text/javascript" src="{{url('frontend/')}}/scripts/mmenu.min.js"></script>
<script type="text/javascript" src="{{url('frontend/')}}/scripts/chosen.min.js"></script>
<script type="text/javascript" src="{{url('frontend/')}}/scripts/slick.min.js"></script>
<script type="text/javascript" src="{{url('frontend/')}}/scripts/rangeslider.min.js"></script>
<script type="text/javascript" src="{{url('frontend/')}}/scripts/magnific-popup.min.js"></script>
<script type="text/javascript" src="{{url('frontend/')}}/scripts/waypoints.min.js"></script>
<script type="text/javascript" src="{{url('frontend/')}}/scripts/counterup.min.js"></script>
<script type="text/javascript" src="{{url('frontend/')}}/scripts/jquery-ui.min.js"></script>
<script type="text/javascript" src="{{url('frontend/')}}/scripts/tooltips.min.js"></script>
<script type="text/javascript" src="{{url('frontend/')}}/scripts/custom.js"></script>

<!-- Google Autocomplete -->
<script>
  function initAutocomplete() {
    var input = document.getElementById('autocomplete-input');
    var autocomplete = new google.maps.places.Autocomplete(input);

    autocomplete.addListener('place_changed', function() {
      var place = autocomplete.getPlace();
      if (!place.geometry) {
        return;
      }
    });

    if ($('.main-search-input-item')[0]) {
        setTimeout(function(){ 
            $(".pac-container").prependTo("#autocomplete-container");
        }, 300);
    }
}
</script>
<script src="https://maps.googleapis.com/maps/api/js?libraries=places&callback=initAutocomplete"></script>

<!-- Style Switcher
================================================== -->
<script src="{{url('frontend/')}}/scripts/switcher.js"></script>

<div id="style-switcher">
    <h2>Color Switcher <a href="#"><i class="sl sl-icon-settings"></i></a></h2>
    
    <div>
        <ul class="colors" id="color1">
            <li><a href="#" class="main" title="Main"></a></li>
            <li><a href="#" class="blue" title="Blue"></a></li>
            <li><a href="#" class="green" title="Green"></a></li>
            <li><a href="#" class="orange" title="Orange"></a></li>
            <li><a href="#" class="navy" title="Navy"></a></li>
            <li><a href="#" class="yellow" title="Yellow"></a></li>
            <li><a href="#" class="peach" title="Peach"></a></li>
            <li><a href="#" class="beige" title="Beige"></a></li>
            <li><a href="#" class="purple" title="Purple"></a></li>
            <li><a href="#" class="celadon" title="Celadon"></a></li>
            <li><a href="#" class="red" title="Red"></a></li>
            <li><a href="#" class="brown" title="Brown"></a></li>
            <li><a href="#" class="cherry" title="Cherry"></a></li>
            <li><a href="#" class="cyan" title="Cyan"></a></li>
            <li><a href="#" class="gray" title="Gray"></a></li>
            <li><a href="#" class="olive" title="Olive"></a></li>
        </ul>
    </div>
        
</div>
<!-- Style Switcher / End -->


</body>
</html>