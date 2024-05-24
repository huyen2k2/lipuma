<footer>
         <div class="footer">
            <div class="bg_in">
               <div class = "footer-content">
                  <div class = "footer-left">
                     <div class = "footer-left-top">
                        © 2023 Công Ty TNHH LIPUMA
                     </div>
                     <div class = "footer-left-bottom">
                        <ul>
                           <li><a href="#">Thông tin pháp luật</a></li>
                           <li>|</li>
                           <li><a href="#">Chính sách và quyền riêng tư</a></li>
                           <li>|</li>
                           <li><a href="#">Cài đặt quyền riêng tư</a></li>
                        </ul>
                     </div>
                  </div>
                  <div class = "footer-right">
                     <ul>
                        <li><a href="https://www.facebook.com/profile.php?id=100010290423127"><i class="fa-brands fa-facebook"></i></a></li>
                        <li><a href="mailto:jerrystreetchorrus@example.com"><i class="fa-solid fa-envelope"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                     </ul>
                  </div>
               </div>
               <!-- <div class="clear"></div> -->
            </div>
            <!-- <div class="clear"></div> -->
         </div>
         <!-- <div class="clear"></div>
         <div class="clear"></div> -->
</footer>
       <link async rel="stylesheet" href="<?php echo BASE_URL ?>/public/css/cssfooter.css"/>
       <!-- <link async rel="stylesheet" href="<?php echo BASE_URL ?>/public/css/style.css"/> -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
       <script defer type="text/javascript" src="<?php echo BASE_URL ?>/public/js/bootstrap.js"></script>
      <script defer type="text/javascript" src="<?php echo BASE_URL ?>/public/js/sweet-alert.js"></script>
      <script defer type="text/javascript" src="<?php echo BASE_URL ?>/public/js/jquery.flexslider-min.js"></script>
      <script defer src="<?php echo BASE_URL ?>/public/js/owl.carousel.js" type="text/javascript"></script>
      <script defer src="<?php echo BASE_URL ?>/public/js/jquery.lazyload.min.js" type="text/javascript"></script>
      <script defer type="text/javascript" src="<?php echo BASE_URL ?>/public/js/script_ex.js"></script>
      <script defer type="text/javascript" src="<?php echo BASE_URL ?>/public/js/script_menu.js"></script>
      <!-- <link rel="stylesheet" type="text/css" href="template/Default/js/sweet-alert.css"/> -->
      <div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v9.0&appId=297476534767349&autoLogAppEvents=1" nonce="6Np37FtJ"></script>

    <script type="text/javascript">
      $(document).ready(function() {

        var sync1 = $("#sync1");
        var sync2 = $("#sync2");
        var slidesPerPage = 5; //globaly define number of elements per page
        var syncedSecondary = true;

        sync1.owlCarousel({
          items : 1,
          slideSpeed : 2000,
          nav: false,
          autoplay: true,
          dots: false,
          loop: true,
          responsiveRefreshRate : 200,
          navText: ['<svg width="10%" height="10%" viewBox="0 0 11 20"><path style="fill:none;stroke-width: 2px;stroke: #000;" d="M9.554,1.001l-8.607,8.607l8.607,8.606"/></svg>',
          '<svg width="3%" height="3%" viewBox="0 0 11 20" version="1.1"><path style="fill:none;stroke-width: 2px;stroke: #000;" d="M1.054,18.214l8.606,-8.606l-8.606,-8.607"/></svg>'],
        }).on('changed.owl.carousel', syncPosition);

        sync2
          .on('initialized.owl.carousel', function () {
            sync2.find(".owl-item").eq(0).addClass("current");
          })
          .owlCarousel({
          items : slidesPerPage,
          dots: false,
          nav: false,
          smartSpeed: 200,
          slideSpeed : 500,
          slideBy: slidesPerPage, //alternatively you can slide by 1, this way the active slide will stick to the first item in the second carousel
          responsiveRefreshRate : 100
        }).on('changed.owl.carousel', syncPosition2);

        function syncPosition(el) {
          //if you set loop to false, you have to restore this next line
          //var current = el.item.index;
          
          //if you disable loop you have to comment this block
          var count = el.item.count-1;
          var current = Math.round(el.item.index - (el.item.count/2) - .5);
          
          if(current < 0) {
            current = count;
          }
          if(current > count) {
            current = 0;
          }
          
          //end block

          sync2
            .find(".owl-item")
            .removeClass("current")
            .eq(current)
            .addClass("current");
          var onscreen = sync2.find('.owl-item.active').length - 1;
          var start = sync2.find('.owl-item.active').first().index();
          var end = sync2.find('.owl-item.active').last().index();
          https://thietbivanphong123.com/data/upload/ST8000VN004.jpg
          if (current > end) {
            sync2.data('owl.carousel').to(current, 100, true);
          }
          if (current < start) {
            sync2.data('owl.carousel').to(current - onscreen, 100, true);
          }
        }
        
        function syncPosition2(el) {
          if(syncedSecondary) {
            var number = el.item.index;
            sync1.data('owl.carousel').to(number, 100, true);
          }
        }
        
        sync2.on("click", ".owl-item", function(e){
          e.preventDefault();
          var number = $(this).index();
          sync1.data('owl.carousel').to(number, 300, true);
        });
      });
  </script> 
   
      <div style="height: 1840px;position: fixed;width: 100%;top: 0px;left: 0px;right: 0px;bottom: 0px;z-index: 1001;background: #000 none repeat scroll 0% 0%;opacity: 0.3;display: none;text-align:center" id="khungnen"></div>
      <div style="display: none;left: 70%;margin-left: -309px;z-index: 1002;position: fixed;top: 40%;margin-top: 0px;" id="loadding">
         <img src="image/loader.gif" />
      </div>
   </body>
</html>