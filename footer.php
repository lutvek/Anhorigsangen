    <hr>

    <footer id="footer">
      <p id="footer_text">&copy; Anhörigsängen Sverige AB 2016</p>
    </footer>

    <script src="js/vendor/bootstrap.min.js"></script>

    <!-- Navbar active button -->
    <script type='text/javascript'>
      $(document).ready(function() {
        var location = window.location.href;
        if(location.indexOf('sesam') != -1) {
          $('#navsesam').addClass("active");
        } else if(location.indexOf('produkter') != -1) {
          $('#navprodukter').addClass("active");
        } else if (location.indexOf('kontakt') != -1) {
          $('#navkontakt').addClass("active");
        } else {
          $('#navhem').addClass("active");
        }
      });
    </script>

    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
    <script>
    (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
      function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
      e=o.createElement(i);r=o.getElementsByTagName(i)[0];
      e.src='//www.google-analytics.com/analytics.js';
      r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
      ga('create','UA-XXXXX-X','auto');ga('send','pageview');
    </script>
  </body>
</html>
