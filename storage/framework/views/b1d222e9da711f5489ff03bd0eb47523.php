<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SAMPLE TITLE</title>

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
    <link rel="stylesheet" href="<?php echo e(asset('css/explore-category.css')); ?>">

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



    <div class="category-img-container">
      <div class="category-img">
        <img src="<?php echo e(asset('image/img2.jpg')); ?>" alt="">
      </div>
      <div class="category-information">

      </div>
    </div>


    <div class="container-xl py-4">
      

      <div class="row">

        <div class="col-sm-12 col-md-6 col-lg-4 mt-2">
            <div class="card">
              <div style="position: absolute; top: 0; left: 0;" class="discount fw-bold text-light">20 %</div>
              <img height="200px" src="<?php echo e(asset('image/bed3.jpg')); ?>" class="card-img-top" alt="...">
  
              <div class="card-body">
                <div class="d-flex justify-content-between ">
                  <h5 class="card-title">Bed Room Two</h5>
                  <p class="card-text fs-5 fw-bold"><i class="fa-solid fa-peso-sign"></i> <u class="underline">100</u><i class="fa-solid fa-peso-sign ms-3"></i> <span class="yellow">80</span></p>
                </div>
                <p class="mt-3"><i class="fa-solid fa-circle-check yellow"></i>  Standard bed</p>
                <p class=""><i class="fa-solid fa-circle-check yellow"></i>  Maximum Occupancy: 4 people</p>
                <a href="#" class="btn btn-success btn-sm mt-3">View more</a>
              </div>
            </div>  
          </div>

          <div class="col-sm-12 col-md-6 col-lg-4 mt-2">
            <div class="card">
              <div style="position: absolute; top: 0; left: 0;" class="discount fw-bold text-light">20 %</div>
              <img height="200px" src="<?php echo e(asset('image/bed3.jpg')); ?>" class="card-img-top" alt="...">
  
              <div class="card-body">
                <div class="d-flex justify-content-between ">
                  <h5 class="card-title">Bed Room Two</h5>
                  <p class="card-text fs-5 fw-bold"><i class="fa-solid fa-peso-sign"></i> <u class="underline">100</u><i class="fa-solid fa-peso-sign ms-3"></i> <span class="yellow">80</span></p>
                </div>
                <p class="mt-3"><i class="fa-solid fa-circle-check yellow"></i>  Standard bed</p>
                <p class=""><i class="fa-solid fa-circle-check yellow"></i>  Maximum Occupancy: 4 people</p>
                <a href="#" class="btn btn-success btn-sm mt-3">View more</a>
              </div>
            </div>  
          </div>

          <div class="col-sm-12 col-md-6 col-lg-4 mt-2">
            <div class="card">
              <div style="position: absolute; top: 0; left: 0;" class="discount fw-bold text-light">20 %</div>
              <img height="200px" src="<?php echo e(asset('image/bed3.jpg')); ?>" class="card-img-top" alt="...">
  
              <div class="card-body">
                <div class="d-flex justify-content-between ">
                  <h5 class="card-title">Bed Room Two</h5>
                  <p class="card-text fs-5 fw-bold"><i class="fa-solid fa-peso-sign"></i> <u class="underline">100</u><i class="fa-solid fa-peso-sign ms-3"></i> <span class="yellow">80</span></p>
                </div>
                <p class="mt-3"><i class="fa-solid fa-circle-check yellow"></i>  Standard bed</p>
                <p class=""><i class="fa-solid fa-circle-check yellow"></i>  Maximum Occupancy: 4 people</p>
                <a href="#" class="btn btn-success btn-sm mt-3">View more</a>
              </div>
            </div>  
          </div>

          <div class="col-sm-12 col-md-6 col-lg-4 mt-2">
            <div class="card">
              <div style="position: absolute; top: 0; left: 0;" class="discount fw-bold text-light">20 %</div>
              <img height="200px" src="<?php echo e(asset('image/bed3.jpg')); ?>" class="card-img-top" alt="...">
  
              <div class="card-body">
                <div class="d-flex justify-content-between ">
                  <h5 class="card-title">Bed Room Two</h5>
                  <p class="card-text fs-5 fw-bold"><i class="fa-solid fa-peso-sign"></i> <u class="underline">100</u><i class="fa-solid fa-peso-sign ms-3"></i> <span class="yellow">80</span></p>
                </div>
                <p class="mt-3"><i class="fa-solid fa-circle-check yellow"></i>  Standard bed</p>
                <p class=""><i class="fa-solid fa-circle-check yellow"></i>  Maximum Occupancy: 4 people</p>
                <a href="#" class="btn btn-success btn-sm mt-3">View more</a>
              </div>
            </div>  
          </div>

        <div class="col-sm-12 col-md-6 col-lg-4 mt-2">
          <div class="card">
            <div style="position: absolute; top: 0; left: 0;" class="discount fw-bold text-light">20 %</div>
            <img height="200px" src="<?php echo e(asset('image/bed3.jpg')); ?>" class="card-img-top" alt="...">

            <div class="card-body">
              <div class="d-flex justify-content-between ">
                <h5 class="card-title">Bed Room Two</h5>
                <p class="card-text fs-5 fw-bold"><i class="fa-solid fa-peso-sign"></i> <u class="underline">100</u><i class="fa-solid fa-peso-sign ms-3"></i> <span class="yellow">80</span></p>
              </div>
              <p class="mt-3"><i class="fa-solid fa-circle-check yellow"></i>  Standard bed</p>
              <p class=""><i class="fa-solid fa-circle-check yellow"></i>  Maximum Occupancy: 4 people</p>
              <a href="#" class="btn btn-success btn-sm mt-3">View more</a>
            </div>
          </div>  
        </div>


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


    
</body>
</html><?php /**PATH C:\FinalProject\resources\views/randomUser/category.blade.php ENDPATH**/ ?>