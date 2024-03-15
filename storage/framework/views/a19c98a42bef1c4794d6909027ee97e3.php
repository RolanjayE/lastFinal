<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page || Brand Name || Booking Reservation</title>

    

    <!-- channel manager -->
    <?php if (isset($component)) { $__componentOriginal75a18ef4527ffe57220d34046f4ee823 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal75a18ef4527ffe57220d34046f4ee823 = $attributes; } ?>
<?php $component = App\View\Components\GlobalHeaderLink::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('globalHeaderLink'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\GlobalHeaderLink::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal75a18ef4527ffe57220d34046f4ee823)): ?>
<?php $attributes = $__attributesOriginal75a18ef4527ffe57220d34046f4ee823; ?>
<?php unset($__attributesOriginal75a18ef4527ffe57220d34046f4ee823); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal75a18ef4527ffe57220d34046f4ee823)): ?>
<?php $component = $__componentOriginal75a18ef4527ffe57220d34046f4ee823; ?>
<?php unset($__componentOriginal75a18ef4527ffe57220d34046f4ee823); ?>
<?php endif; ?>

    <link rel="stylesheet" href="<?php echo e(asset('css/global.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/index.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/designSwiper.css')); ?>">

</head>
<body>


    <?php if (isset($component)) { $__componentOriginal0bee41ff742b9bf23a8d1f2138f605f9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0bee41ff742b9bf23a8d1f2138f605f9 = $attributes; } ?>
<?php $component = App\View\Components\GuessHeader::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('guessHeader'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\GuessHeader::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal0bee41ff742b9bf23a8d1f2138f605f9)): ?>
<?php $attributes = $__attributesOriginal0bee41ff742b9bf23a8d1f2138f605f9; ?>
<?php unset($__attributesOriginal0bee41ff742b9bf23a8d1f2138f605f9); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0bee41ff742b9bf23a8d1f2138f605f9)): ?>
<?php $component = $__componentOriginal0bee41ff742b9bf23a8d1f2138f605f9; ?>
<?php unset($__componentOriginal0bee41ff742b9bf23a8d1f2138f605f9); ?>
<?php endif; ?>


    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active c-item">
            <img src="<?php echo e(asset('image/img1.jpg')); ?>" class="d-block w-100 c-img" alt="...">
            <div class="carousel-caption d-md-block c-con">
                <h5 class="fs-1 fs-md-3 fs-lg-4 fs-xl-6">Seaside Escapes Made Simple – Reserve Your Slice of Paradise!</h5>
                <p>Savor the sea breeze and book your beachfront escape effortlessly. Your ideal beach retreat is just a click away..</p>
                <div class="btn-container">
                    <a class="TWOBTN" href="./explore.html">EXPLORE</a>
                    <a class="ONEBTN" href="">ABOUT US</a>
                </div>
            </div>
          </div>
          <div class="carousel-item c-item">
            <img src="<?php echo e(asset('image/img2.jpg')); ?>" class="d-block w-100 c-img" alt="...">
            <div class="carousel-caption d-md-block c-con">
                <h5 class="fs-1 fs-md-3 fs-lg-4 fs-xl-6">Coastal Dreams Begin Here – Book Your Perfect Beach Getaway!</h5>
                <p>Indulge in coastal luxury. Your beachfront escape starts with a simple reservation. Dive into your dream vacation.</p>
                <div class="btn-container">
                    <a class="TWOBTN" href="./explore.html">EXPLORE</a>
                    <a class="ONEBTN" href="">ABOUT US</a>
                </div>
            </div>
          </div>
          <div class="carousel-item c-item">
            <img src="<?php echo e(asset('image/img3.jpeg')); ?>" class="d-block w-100 c-img" alt="...">
            <div class="carousel-caption d-md-block c-con">
                <h5 class="fs-1 fs-md-3 fs-lg-4 fs-xl-6">Waves of Adventure Await – Secure Your Beachfront Bliss!</h5>
                <p>Embark on a journey of sun, sand, and serenity. Don't miss out – reserve your beachfront haven today!</p>
                <div class="btn-container">
                    <a class="TWOBTN" href="./explore.html">EXPLORE</a>
                    <a class="ONEBTN" href="">ABOUT US</a>
                </div>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>


    <div class="container mt-5">
        <p class="fs-2 fw-bold text-center">ROOMS FEATURES</p>
        <a href="" class="btn btn-outline-success d-block mx-auto">VISIT ROOMS</a>
    </div>

   <swiper-container class="mySwiper" pagination="true" effect="coverflow" grab-cursor="true" centered-slides="true"
    slides-per-view="auto" coverflow-effect-rotate="50" coverflow-effect-stretch="0" coverflow-effect-depth="100"
    coverflow-effect-modifier="1" coverflow-effect-slide-shadows="true">
    <swiper-slide>
      <img src=" https://swiperjs.com/demos/images/nature-1.jpg" />
    </swiper-slide>
    <swiper-slide>
      <img src="https://swiperjs.com/demos/images/nature-2.jpg" />
    </swiper-slide>
    <swiper-slide>
      <img src="https://swiperjs.com/demos/images/nature-3.jpg" />
    </swiper-slide>
    <swiper-slide>
      <img src="https://swiperjs.com/demos/images/nature-4.jpg" />
    </swiper-slide>
    <swiper-slide>
      <img src="https://swiperjs.com/demos/images/nature-5.jpg" />
    </swiper-slide>
    <swiper-slide>
      <img src="https://swiperjs.com/demos/images/nature-6.jpg" />
    </swiper-slide>
    <swiper-slide>
      <img src="https://swiperjs.com/demos/images/nature-7.jpg" />
    </swiper-slide>
    <swiper-slide>
      <img src="https://swiperjs.com/demos/images/nature-8.jpg" />
    </swiper-slide>
    <swiper-slide>
      <img src="https://swiperjs.com/demos/images/nature-9.jpg" />
    </swiper-slide>
  </swiper-container>


  <div class="bg-dark pb-4 pt-4" id="location">
      <div class="container">
        <div class="row grid-two">
          <div style="overflow: hidden; height: 400px;" class="col">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3942.5543950873944!2d125.08618347316629!3d8.827863791225667!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33002efb842680ff%3A0xaa6b01647f4eca75!2sVilla%20Cristina&#39;s%20Resort!5e0!3m2!1sen!2sph!4v1709987098109!5m2!1sen!2sph" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
          <div class="col">
            <p class="fs-2 fw-bold yellow mt-4">How To Get There</p>
            <p class="fs-6 text-light"><i class="fa-solid fa-phone me-2 yellow"></i> 09051578190</p>
            <p class="fs-6 text-light"><i class="fa-solid fa-envelope me-2 yellow"></i> RolanJayIsabida46@gmail.com || Bussness@gmail.com</p>
            <p class="fs-6 text-light"><i class="fa-solid fa-location-arrow yellow"></i> Gingoog, Misamis Oriental, San Juan</p>
            <img width="100%" height="190px" src="<?php echo e(asset('image/intrance.jfif')); ?>" alt="">
          </div>
        </div>
      </div>
  </div>


  <div class="testimony bg-dark pt-4 pb-4">
    <div class="container text-light pt-4">
      <p class="fs-2 fw-bold text-center pt-4 pb-4 yellow">Guest Testimonials</p>
      <div class="row">

        <div class="col-sm-12 col-lg-6">
          <div class="p-4 mb-3 white">
            <blockquote class="blockquote text-center">
              <p class="mb-0 fs-6"><span class="yellow fs-1">"</span> Booking our beach getaway through this reservation platform was an absolute breeze! The options were fantastic, and the process was so simple. Our vacation in Miami was a dream come true <br> <span class="yellow fs-1">"</span></p>
              <footer class="blockquote-footer mt-3">ROLAN JAY ISABIDA</footer>
            </blockquote>
          </div>
        </div>

        <div class="col-sm-12 col-lg-6">
          <div class="p-4 mb-3 white">
            <blockquote class="blockquote text-center">
              <p class="mb-0 fs-6"><span class="yellow fs-1">"</span> Booking our beach getaway through this reservation platform was an absolute breeze! The options were fantastic, and the process was so simple. Our vacation in Miami was a dream come true <br> <span class="yellow fs-1">"</span></p>
              <footer class="blockquote-footer mt-3">ROLAN JAY ISABIDA</footer>
          </blockquote>
          </div>
        </div>

      </div>
    </div>
  </div>






 <div class="contaier p-4" id="faq-id">

   <p class="fs-2 fw-bold text-center pt-4 pb-4">Frequently Asked Questions</p>
    <div class="accordion" id="accordionExample">
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingOne">
          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            How do I make a reservation?
          </button>
        </h2>
        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
          </div>
        </div>
      </div>

      <div class="accordion-item">
        <h2 class="accordion-header" id="headingTwo">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            Can I modify or cancel my reservation?
          </button>
        </h2>
        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
          </div>
        </div>
      </div>

      <div class="accordion-item">
        <h2 class="accordion-header" id="headingTwo">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            What payment methods are accepted?
          </button>
        </h2>
        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
          </div>
        </div>
      </div>

      <div class="accordion-item">
        <h2 class="accordion-header" id="headingThree">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
            Is my personal information secure during the reservation process?
          </button>
        </h2>
        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
          </div>
        </div>
      </div>

      <div class="accordion-item">
        <h2 class="accordion-header" id="headingThree">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
            How can I retrieve my booking confirmation?
          </button>
        </h2>
        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
          </div>
        </div>
      </div>


    </div>

 </div>





 <div class="about-us pt-4 pb-4">
  <div class="container text-center">
    <p class="fs-2 fw-bold text-center pt-4 pb-4 pt-4">Welcome Im CampanyName</p>
    <p class="fs-6 text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum minima odio perferendis suscipit repudiandae id quidem tempore laboriosam tempora earum minus at, facilis repellendus voluptate aliquid quibusdam quos commodi magni?</p>
    <button class="btn btn-outline-success" type="submit">Learn More</button>
  </div>
</div>



<?php if (isset($component)) { $__componentOriginal53b3d5b7767736cb5b7a9ce149893f80 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal53b3d5b7767736cb5b7a9ce149893f80 = $attributes; } ?>
<?php $component = App\View\Components\GuessFooter::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('guessFooter'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\GuessFooter::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal53b3d5b7767736cb5b7a9ce149893f80)): ?>
<?php $attributes = $__attributesOriginal53b3d5b7767736cb5b7a9ce149893f80; ?>
<?php unset($__attributesOriginal53b3d5b7767736cb5b7a9ce149893f80); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal53b3d5b7767736cb5b7a9ce149893f80)): ?>
<?php $component = $__componentOriginal53b3d5b7767736cb5b7a9ce149893f80; ?>
<?php unset($__componentOriginal53b3d5b7767736cb5b7a9ce149893f80); ?>
<?php endif; ?>



     



  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>

 
    
</body>
</html><?php /**PATH C:\FinalProject\resources\views/randomUser/welcome.blade.php ENDPATH**/ ?>