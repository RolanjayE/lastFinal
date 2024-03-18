<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>

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
    <link rel="stylesheet" href="<?php echo e(asset('css/admin/admin-global.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/admin/dashboard.css')); ?>">



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script> 
        $(document).ready(function(){
            $("#flip").click(function(){
                $("#panel").slideToggle("slow");
            });
        });
    </script>

</head>
<body>

    <style>
        /* body {
        background: #eee;
        font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
        font-size: 14px;
        color: #000;
        margin: 0;
        padding: 0;
        } */

    </style>

    <div id="panel" class="admin-show-menu bg-dark">
        <ul>
            <li><a href="">Overview</a></li>
            <li><a href="">User</a></li>
            <li><a href="">Booking</a></li>
            <li><a href="">Payment</a></li>
            <li><a href="">Content</a></li>
            <li><a href="">Reporting and Analytics:</a></li>
            <li><a href="">Feedback</a></li>
            <li><a href="">Category</a></li>
            <li><a href="">Settings</a></li>
        </ul>
    </div>

    <div style="min-height: 100vh" class="admin bg-dark text-light">
        
        <div class="container-xxl">

            
            <div class="admin-header">
                <div class="flex-three">
                    <div class="flex-three-box d-flex">
                        <i id="flip" class="admin-menu fa-solid fa-bars mt-2 fs-4"></i>
                        <div class="img-admin-logo"><img style="width: 35px; height 35px" src="<?php echo e(asset('image/logo2.png')); ?>" alt=""></div>
                    </div>
                    <div class="flex-three-box center-header">
                        <ul>
                            <li><a href="">Overview</a></li>
                            <li><a href="">User</a></li>
                            <li><a href="">Booking</a></li>
                            <li><a href="">Payment</a></li>
                            <li><a href="">Content</a></li>
                            <li><a href="">Reporting and Analytics:</a></li>
                        </ul>
                    </div>
                    <div class="flex-three-box">
                        <div class="dropdown show">
                            <a class="btn text-light dropdown-toggle btn-sm" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa-regular fa-user"></i> Admin
                            </a>
                          
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                              <a class="dropdown-item" href="#">Profile</a>
                              <a class="dropdown-item" href="#">Log-out</a>
                            </div>
                          </div>
                    </div>
                </div>
            </div>
            


            
            <div class="admin-dashboard-main row">
                
                <div class="admin-left col-xl-3 col-sm-12">
                    <ul>
                        <li><a href=""><i class="fa-solid fa-comments"></i> Feedback</a></li>
                        <li><a href=""><i class="fa-solid fa-list"></i> Category</a></li>
                        <li><a href=""><i class="fa-solid fa-list"></i> Refund</a></li>
                        <li><a href=""><i class="fa-solid fa-gear"></i> Settings</a></li>
                    </ul>
                </div>

                <div class="admin-center col-lg-6 col-sm-12">

                    <p class="fs-3">Overview</p>
                    <div class="grid-three">
                        <div class="grid-three-box admin-yellow">
                            <p class="fw-bold p1">USER <br> MANAGEMENT</p>
                            <div class="admin-box-link mp-4">
                                <a class="text-dark" href=""><i class="fa-solid fa-circle-arrow-right fs-4"> 10</i></a>
                            </div>
                        </div>
                        <div class="grid-three-box admin-green">
                            <p class="fw-bold p1">BOOKING <br>MANAGEMENT</p>
                            <div class="admin-box-link mp-4">
                                <a class="text-dark" href=""><i class="fa-solid fa-circle-arrow-right fs-4"> 100</i></a>
                            </div>
                        </div>
                        <div class="grid-three-box admin-violet">
                            <p class="fw-bold p1">PAYMENT <br> MANAGEMENT</p>
                            <div class="admin-box-link mp-4">
                                <a class="text-dark" href=""><i class="fa-solid fa-circle-arrow-right fs-4"> 30</i></a>
                            </div>
                        </div>
                    </div>



                    <div class="center-second mt-4 pt-4">
                        <p class="fs-5">New Facilities</p>
                        <p class="fs-6" style="color: gray">New facilities added you can click view button to redirect to booking management page</p>

                        <div class="latest-booking">
                            
                            <div class="book-box">
                                <div class="img-box">
                                    <img style="border-radius: 10px" width="45px" height="45px" src="<?php echo e(asset('image/bed3.jpg')); ?>" alt="">
                                </div>
                                <div class="info-one">
                                    <p class="p2">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Asperiores atque eveniet voluptates deleniti fugiat pariatur?</p>
                                </div>
                                <div class="info-two">
                                    <p class="fs-4"><i class="fa-solid fa-circle-right green"></i></p>
                                </div>
                            </div>

                            
                            <div class="book-box">
                                <div class="img-box">
                                    <img style="border-radius: 10px" width="45px" height="45px" src="<?php echo e(asset('image/bed3.jpg')); ?>" alt="">
                                </div>
                                <div class="info-one">
                                    <p class="p2">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Asperiores atque eveniet voluptates deleniti fugiat pariatur?</p>
                                </div>
                                <div class="info-two">
                                    <p class="fs-4"><i class="fa-solid fa-circle-right green"></i></p>
                                </div>
                            </div>

                            <div class="book-box">
                                <div class="img-box">
                                    <img style="border-radius: 10px" width="45px" height="45px" src="<?php echo e(asset('image/bed3.jpg')); ?>" alt="">
                                </div>
                                <div class="info-one">
                                    <p class="p2">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Asperiores atque eveniet voluptates deleniti fugiat pariatur?</p>
                                </div>
                                <div class="info-two">
                                    <p class="fs-4"><i class="fa-solid fa-circle-right green"></i></p>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

                <div class="admin-right col-xl-3 col-sm-12">
                    <li><a href="" class="text-light fs-6 fw-bold"> Latest Reason</a></li>
                    <div class="row">
                        <div class="col-sm-12">
                            <p class="fs-6 mt-4" style="color: gray">" Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi eum corporis sunt quibusdam quod quam ipsum sequi, nulla cumque aliquid recusandae sit culpa facilis, ratione dolores vero, tenetur mollitia sapiente. "</p>

                            <p class="fs-6 mt-4" style="color: gray">" Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi eum corporis sunt quibusdam quod quam ipsum sequi, nulla cumque aliquid recusandae sit culpa facilis, ratione dolores vero, tenetur mollitia sapiente. "</p>


                            <a href="" class="btn btn-success btn-sm">Refund</a>
                        </div>

                        <div class="col-sm-12">
                            
                        </div>
                    </div>
                </div>

            </div>
            



          


        </div>

    </div>


    
</body>
</html><?php /**PATH C:\FinalProject\resources\views/admin/admin-dashboard.blade.php ENDPATH**/ ?>