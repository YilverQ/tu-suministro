 <link rel="stylesheet" href="css/bjqs.css">

    <!-- load jQuery and the plugin -->
    <script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
    <script src="js/bjqs-1.3.min.js"></script>
    

      <!--  Outer wrapper for presentation only, this can be anything you like -->
      <div id="banner-slide">

        <!-- start Basic Jquery Slider -->
        <ul class="bjqs">
          <li><img src="images/img/banner01.jpg" title=""></li>
          <li><img src="images/img/banner02.jpg" title=""></li>
          <li><img src="images/img/banner03.jpg" title=""></li>
          <li><img src="images/img/banner04.jpg" title=""></li>
          <li><img src="images/img/banner05.jpg" title=""></li>
        </ul>
        <!-- end Basic jQuery Slider -->

      </div>
      <!-- End outer wrapper -->
      
      <!-- attach the plug-in to the slider parent element and adjust the settings as required -->
      <script class="secret-source">
        jQuery(document).ready(function($) {
          
          $('#banner-slide').bjqs({
            animtype      : 'slide',
            height        : 320,
            width         : 990,
            responsive    : true,
            randomstart   : true
          });
          
        });
      </script>

    </div>