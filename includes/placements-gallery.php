<!-- placements-gallery -->
<section>
  <!-- <h2 style="margin-left: 15px;" class="text-capitalize">placement <span class="half">gallery</span></h2> -->
  <h2 class="text-capitalize text-center fw-bolder section-heading">placement gallery</h2>
  <!-- Swiper -->
  <div class="swiper mySwiper">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <img src="./images/temp.png" height="300px"/>
      </div>
      <div class="swiper-slide">
        <img src="./images/temp1.png" height="300px"/>
      </div>
      <div class="swiper-slide">
        <img src="./images/temp2.png" height="300px"/>
      </div>
      <div class="swiper-slide">
        <img src="./images/temp3.png" height="300px"/>
      </div>
      <div class="swiper-slide">
        <img src="./images/temp4.png" height="300px"/>
      </div>
      <div class="swiper-slide">
        <img src="./images/temp5.png" height="300px"/>
      </div>
      <div class="swiper-slide">
        <img src="./images/temp6.png" height="300px"/>
      </div>
    </div>
  </div>
</section>

<script src='./js/swiper-bundle.min.js'></script>
 <!-- Initialize Swiper -->
 <script>
  var swiper = new Swiper(".mySwiper", {
   effect: "coverflow",
   grabCursor: true,
   centeredSlides: true,
   slidesPerView: "auto",
   coverflowEffect: {
     rotate: 40,
     stretch: 1,
     depth: 10,
     modifier: 1,
     slideShadows: true,
   },
   loop: true,
 });

</script>