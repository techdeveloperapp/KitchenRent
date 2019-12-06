@extends('layouts.frontend.app')
@section('title', 'Homepage')
@section('content')
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
@endsection