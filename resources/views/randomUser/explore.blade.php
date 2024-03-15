<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expore || Available services || Company Name</title>

     <!-- channel manager -->
    <x-globalHeaderLink />

    <link rel="stylesheet" href="{{ asset('css/global.css') }}">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('css/desgn.css') }}">
    <link rel="stylesheet" href="{{ asset('css/explore.css') }}">


</head>
<body>

    
   <x-guessHeader />


    <div class="main-con">
        <div class="row g-0">
            <div class="col-sm-12 col-md-6">
                <img height="100%" src="{{ asset('image/bed3.jpg') }}" alt="">
            </div>
            <div class="col-sm-12 col-md-6 d-flex align-items-center px-4 py-4 myBg text-light">
                <div>
                    <p class="fs-3 fw-bold ">ROOMS</p>
                    <p class="fs-6">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quidem ipsum impedit mollitia nemo iure necessitatibus nihil, corporis doloremque saepe minima eveniet a veniam error similique consectetur! Eveniet debitis blanditiis ab?</p>
                    <a href="{{ route('category') }}" class="myBtn mt-3">CHECK AVAILABLE</a>
                </div>
            </div>

            <div class="col-sm-12 col-md-6 d-flex align-items-center px-4 py-4 myBg text-light">
                <div>
                    <p class="fs-3 fw-bold ">CATTEGES</p>
                    <p class="fs-6">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quidem ipsum impedit mollitia nemo iure necessitatibus nihil, corporis doloremque saepe minima eveniet a veniam error similique consectetur! Eveniet debitis blanditiis ab?</p>
                    <a href="./exploreCategory.html" class="myBtn mt-3">CHECK AVAILABLE</a>
                </div>
            </div>

            <div class="col-sm-12 col-md-6">
                <img height="100%" src="{{ asset('image/cattage1.jpg') }}" alt="">
            </div>


            <div class="col-sm-12 col-md-6">
                <img height="100%" src="{{ asset('image/eventVenue.jpg') }}" alt="">
            </div>

            <div class="col-sm-12 col-md-6 d-flex align-items-center px-4 py-4 myBg text-light">
                <div>
                    <p class="fs-3 fw-bold ">EVENT SPACE</p>
                    <p class="fs-6">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quidem ipsum impedit mollitia nemo iure necessitatibus nihil, corporis doloremque saepe minima eveniet a veniam error similique consectetur! Eveniet debitis blanditiis ab?</p>
                    <a href="./exploreCategory.html" class="myBtn mt-3">CHECK AVAILABLE</a>
                </div>
            </div>


            <div class="col-sm-12 col-md-6 d-flex align-items-center px-4 py-4 myBg text-light">
                <div>
                    <p class="fs-3 fw-bold ">TENT / CLAMPING</p>
                    <p class="fs-12">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quidem ipsum impedit mollitia nemo iure necessitatibus nihil, corporis doloremque saepe minima eveniet a veniam error similique consectetur! Eveniet debitis blanditiis ab?</p>
                    <a href="./exploreCategory.html" class="myBtn mt-3">CHECK AVAILABLE</a>
                </div>
            </div>

            <div class="col-sm-12 col-md-6">
                <img height="100%" src="{{ asset('image/tent.webp') }}" alt="">
            </div>


        </div>
    </div>



    

<div class="footers bg-dark">
  
    <!-- Remove the container if you want to extend the Footer to full width. -->
   <div class="container">
     <footer class="text-center text-lg-start text-white" >
       <div class="container p-4 pb-0">
         <section class="">
           <div class="row">
             <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
               <h6 class="text-uppercase mb-4 font-weight-bold">Company name </h6>
               <p> Here you can use rows and columns to organize your footer
                 content. Lorem ipsum dolor sit amet, consectetur adipisicing
                 elit. </p>
             </div>
             <hr class="w-100 clearfix d-md-none" />
             <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
               <h6 class="text-uppercase mb-4 font-weight-bold">CATEGORIES</h6>
               <p><a class="text-white">ROOMS</a></p>
               <p><a class="text-white">CATTAGE</a></p>
               <p><a class="text-white">EVENT SPACE</a></p>
             </div>
             <!-- Grid column -->
   
             <hr class="w-100 clearfix d-md-none" />
   
             <!-- Grid column -->
             <hr class="w-100 clearfix d-md-none" />
   
             <!-- Grid column -->
             <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
               <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
               <p><i class="fas fa-home mr-3"></i> SAN JUAN GWAPO P-4</p>
               <p><i class="fas fa-envelope mr-3"></i> info@gmail.com</p>
               <p><i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
               <p><i class="fas fa-print mr-3"></i> + 01 234 567 89</p>
             </div>
             <!-- Grid column -->
   
             <!-- Grid column -->
             <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
               <h6 class="text-uppercase mb-4 font-weight-bold">Follow us</h6>
   
               <!-- Facebook -->
               <a class="btn btn-primary btn-floating m-1" style="background-color: #3b5998"href="#!"   role="button" ><i class="fab fa-facebook-f"></i></a>
   
               <!-- Twitter -->
               <a
                  class="btn btn-primary btn-floating m-1"
                  style="background-color: #55acee"
                  href="#!"
                  role="button"
                  ><i class="fab fa-twitter"></i
                 ></a>
   
               <!-- Google -->
               <a
                  class="btn btn-primary btn-floating m-1"
                  style="background-color: #dd4b39"
                  href="#!"
                  role="button"
                  ><i class="fab fa-google"></i
                 ></a>
   
               <!-- Instagram -->
               <a
                  class="btn btn-primary btn-floating m-1"
                  style="background-color: #ac2bac"
                  href="#!"
                  role="button"
                  ><i class="fab fa-instagram"></i
                 ></a>
   
               <!-- Linkedin -->
               <a
                  class="btn btn-primary btn-floating m-1"
                  style="background-color: #0082ca"
                  href="#!"
                  role="button"
                  ><i class="fab fa-linkedin-in"></i
                 ></a>
               <!-- Github -->
               <a
                  class="btn btn-primary btn-floating m-1"
                  style="background-color: #333333"
                  href="#!"
                  role="button"
                  ><i class="fab fa-github"></i
                 ></a>
             </div>
           </div>
           <!--Grid row-->
         </section>
         <!-- Section: Links -->
       </div>
       <!-- Grid container -->
   
       <!-- Copyright -->
       <div
            class="text-center p-3"
            style="background-color: rgba(0, 0, 0, 0.2)"
            >
         © 2020 Copyright:
         <a class="text-white" href="https://mdbootstrap.com/"
            >LAWAY-LAWAY</a
           >
       </div>
       <!-- Copyright -->
     </footer>
     <!-- Footer -->
   </div>
   </div>
   
   
   <div class="arrow-up text-center pt-3">
     <a href="#main-top"><i class="fa-solid fa-arrow-up fs-5 fw-bold"></i></a>
   </div>
   


</body>
</html>