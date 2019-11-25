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