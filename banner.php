 <link rel="stylesheet" href="./css/banner.css">
 <!-- swiper -->
 <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
 <style>
   /* #background {
     display: none;
     position: fixed;
     min-width: 100%;
     min-height: 100%;
     width: auto;
     height: auto;
     z-index: -100;
     -webkit-transform: translateX(-50% translateY(-50%));
     transform: translateX(-50% translateY(-50%));
   }

   @media (min-width: 62em) {
     #background {
       display: block;
     }
   } */
 </style>
 <!--// swiper -->


 <!-- =====================
          HERO START
     ===================== -->


 <section class="home" style="overflow: hidden;">
   <!-- video banner -->
   <!-- <video class="video-bg" autoplay muted loop>
     <source src="video/video-banner.mp4" type="video/mp4" />
   </video> -->
   <video autoplay loop muted poster="video/video-cover.jpg" id="background">
     <source src="video/video-banner2.mp4" type="video/mp4">
   </video>

   <!--// video banner -->
   <div class="swiper heroSwiper">
     <div class="swiper-wrapper">
       <div class="swiper-slide">
         <h1 class="main-head"> Specialists in Laser Cutting, <br> Steel fabrication and Precision Machine <br> Shop Services in UAE </h1>

       </div>
       <div class="swiper-slide">
         <h2 class="main-head"> Passionately <br> Precise </h2>

       </div>
       <div class="swiper-slide">
         <h2 class="main-head"> Precision, Quality <br> & Reliability </h2>

       </div>
     </div>
     <!-- <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div> 
            <div class="swiper-pagination"></div>-->
   </div>


 </section>

 <!-- =====================
          HERO END
     ===================== -->

 <!-- hero -->
 <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <script src="./js/hero.js"></script>
 <!-- hero -->