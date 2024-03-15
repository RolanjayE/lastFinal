<div class="container-fluid bg-dark" id="main-top">
    <div class="row pt-2">

      <div class="col d-flex">
        <p style="font-size: 11px;" class="text-light fade-text me-4"><i class="fa-solid fa-phone me-2"></i>+6390 5157 8190</p>
        <p style="font-size: 11px;" class="text-light"><i class="fa-solid fa-envelope me-2"></i> RolanJayIsabida46@gmail.com</p>
     </div>


    </div>
</div>


<nav class="navbar navbar-expand-lg bg-dark navbar-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"><img style="width: 35px; height: 35px;" src="<?php echo e(asset('image/logo2.png')); ?>" alt=""></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span></button>

        <div class="collapse navbar-collapse header-a-style" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

            <li class="nav-item"><a class="nav-link active text-uppercase" aria-current="page" href="<?php echo e(route('welcome')); ?>">Home</a> </li>
            <li class="nav-item"><a class="nav-link text-uppercase" href="<?php echo e(route('explore')); ?>" >explore</a></li>
            <li class="nav-item"><a class="nav-link text-uppercase" href="#faq-id" >faq</a></li>
            <li class="nav-item"><a class="nav-link text-uppercase" href="./about-us.html" >about us</a></li>
            <li class="nav-item"><a class="nav-link text-uppercase" href="#location" >Location</a></li>
            <li class="nav-item"><a class="nav-link text-uppercase" href="#" >feedback</a></li>

            <li class="nav-item dropdown header-a-style">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"> CATEGORIES</a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item text-uppercase" href="<?php echo e(route('category')); ?>">ROOMS</a></li>
                <li><a class="dropdown-item text-uppercase" href="#">Cottages/Cabanas</a></li>
                <li><a class="dropdown-item text-uppercase" href="#">Tents/Glamping</a></li>
                <li><a class="dropdown-item text-uppercase" href="#">Event Spaces</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
            </li>

            </ul>

            <div class="col d-flex justify-content-end">
              <a class="text-uppercase text-light me-4" href="" >LOGIN</a>
              <a class="text-uppercase text-light" href="" >REGISTER</a>
            </div>
      </div>
    </div>
</nav><?php /**PATH C:\FinalProject\resources\views/components/guess-header.blade.php ENDPATH**/ ?>