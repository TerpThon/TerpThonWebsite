
    <div class="container-fluid" >
      <footer>
        <div class="row">
          <div class ="col-xs-18 social">
            <center>
            <ul>
              <li><a href="https://www.facebook.com/FTKTerpThon"><i class="footer fa fa-lg fa-facebook"></i></a></li>
              <li><a href="https://twitter.com/Terp_Thon"><i class="footer fa fa-lg fa-twitter"></i></a></li>
              <li><a href="https://www.instagram.com/terp_thon/"><i class="footer fa fa-lg fa-instagram"></i></a></li>
              <li><a href="https://www.youtube.com/user/terpthonUMD"><i class="footer fa fa-lg fa-youtube"></i></a></li>
              <li><a href="http://terpthon.tumblr.com/"><i class="footer fa fa-lg fa-tumblr"></i></a></li>
              <li><a href="https://www.linkedin.com/company/10051107?trk=tyah&trkInfo=clickedVertical%3Acompany%2Cidx%3A1-1-1%2CtarId%3A1436753424027%2Ctas%3Aterp%20thon%20"><i class="footer fa fa-lg fa-linkedin"></i></a></li>
            </ul>
          </center>
             <p> Benefiting </p>
            <br>
             <img src="//img.terpthon.org/header_imgs/cobranded.jpg" class="center-block" height="100px" </img>
             <br>
            <p>&copy; 2018 Terp Thon</p>
          </div>
        </div>
      </footer>
    </div>

    <div class="social-container">
      <a href="https://www.facebook.com/FTKTerpThon"><img src="//img.terpthon.org/header_imgs/social_icons/facebook.png"></img></a>
      <a href="https://twitter.com/Terp_Thon"><img src="//img.terpthon.org/header_imgs/social_icons/twitter.png"></img></a>
      <a href="http://instagram.com/terp_thon"><img src="//img.terpthon.org/header_imgs/social_icons/instagram.png"></img></a>
      <a href="http://www.youtube.com/user/terpthonUMD"><img src="//img.terpthon.org/header_imgs/social_icons/youtube.png"></img></a>
      <a href="http://terpthon.tumblr.com/"><img src="//img.terpthon.org/header_imgs/social_icons/tumblr.png" height="60px" width="60px"></img></a>
    </div>
<!--
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.1.min.js"><\/script>')</script>
-->
    <script src="/js/vendor/bootstrap.min.js"></script>
    <script src="/js/main.js"></script>

    <?php
      if(isset($PAGE_SETTINGS["js"])) {
        foreach($PAGE_SETTINGS["js"] as $js)
          echo '<script type="text/javascript" src="'.$js.'"></script>'."\n";
      }
      if(isset($PAGE_SETTINGS["active"])) {
        echo '<script type="text/javascript">setupNav("#nav_'.$PAGE_SETTINGS["active"].'");</script>';
      } else {
        echo '<script type="text/javascript">setupNav();</script>';
      }
    ?>

    <script>
        (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X');ga('send','pageview');
    </script>
  </body>
</html>
