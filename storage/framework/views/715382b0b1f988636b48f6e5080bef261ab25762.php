<?php if($allsettings->maintenance_mode == 0): ?>
<?php echo $__env->make('version', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title><?php echo e(Helper::translation(3016,$translate)); ?> - <?php echo e($allsettings->site_title); ?></title>
    <?php echo $__env->make('stylesheet', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('dynamic-style', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>

<body class="preload term-condition-page">

    <?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
<section class="bg-position-center-top" style="background-image: url('<?php echo e(url('/')); ?>/public/storage/settings/<?php echo e($allsettings->site_banner); ?>');">
    <div class="container">
        <div class="row jplist-panel">
                <div class="col-md-8 offset-md-2 pb-4 pt-5">
                    <div class="search">
                        <div class="col-lg-9 col-md-12 text-center mx-auto pb-4">
                            <h3 class="text-white line-height-base"><?php echo e(Helper::translation(3016,$translate)); ?></h3>
                            <h4 class="h4 text-white font-weight-light"><?php echo e(Helper::translation(3017,$translate)); ?></h4>
                        </div>
                        <div class="countdown-timer">
                            <ul id="example">
                            <li class="pt-2 pb-1 mb-2"><span class="days">00</span><div><?php echo e(Helper::translation(2995,$translate)); ?></div></li>
                            <li class="pt-2 pb-1 mb-2"><span class="hours">00</span><div><?php echo e(Helper::translation(2996,$translate)); ?></div></li>
                            <li class="pt-2 pb-1 mb-2"><span class="minutes">00</span><div><?php echo e(Helper::translation(2997,$translate)); ?></div></li>
                            <li class="pt-2 pb-1 mb-2"><span class="seconds">00</span><div><?php echo e(Helper::translation(2998,$translate)); ?></div></li>
                        </ul>
                        </div>
                        
                    </div>
                </div>
            </div>
    </div>
</section>



<section class="products section--padding2" data-aos="fade-up" data-aos-delay="200">
    <div class="container" id="demo">

        <div class="row pt-2 mx-n2">
            <?php $__currentLoopData = $itemData['item']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            
                <div class="col-lg-3 col-md-4 col-sm-6 px-2 mb-grid-gutter">
                    <div class="card product-card-alt">
                        <div class="product-thumb">
                            <div class="product-card-actions">
                                <a class="btn btn-light btn-icon btn-shadow font-size-base mx-2" href="<?php echo e(URL::to('/item')); ?>/<?php echo e($item->item_slug); ?>/<?php echo e($item->item_id); ?>"><?php echo e(Helper::translation(2999,$translate)); ?></i></a>
                                <a class="btn btn-light btn-icon btn-shadow font-size-base mx-2" href="<?php echo e(url('/preview')); ?>/<?php echo e($item->item_slug); ?>/<?php echo e($item->item_id); ?>" target="_blank"><?php echo e(Helper::translation(3000,$translate)); ?></a>
                            </div>
                            <a class="product-thumb-overlay" href="<?php echo e(URL::to('/item')); ?>/<?php echo e($item->item_slug); ?>/<?php echo e($item->item_id); ?>"></a>
                            <?php if($item->item_preview!=''): ?>
                                <img src="<?php echo e(url('/')); ?>/public/storage/items/<?php echo e($item->item_preview); ?>" alt="<?php echo e($item->item_name); ?>">
                            <?php else: ?>
                                <img src="<?php echo e(url('/')); ?>/public/img/no-image.png" alt="<?php echo e($item->item_name); ?>">
                            <?php endif; ?>
                        </div>
                        
                        <div class="card-body">
                            <div class="d-flex flex-wrap justify-content-between align-items-start pb-2">
                                <div class="text-muted font-size-xs mr-1">
                                    <a class="product-meta font-weight-medium" href="<?php echo e(URL::to('/shop')); ?>/item-type/<?php echo e($item->item_type); ?>"><?php echo e(str_replace('-',' ',$item->item_type)); ?></a>
                                </div>
                                <?php
                                if(count($item->ratings) != 0)
                                {
                                $top = 0;
                                $bottom = 0;
                                
                                foreach($item->ratings as $view)
                                { 
                                if($view->rating == 1){ $value1 = $view->rating*1; } else { $value1 = 0; }
                                if($view->rating == 2){ $value2 = $view->rating*2; } else { $value2 = 0; }
                                if($view->rating == 3){ $value3 = $view->rating*3; } else { $value3 = 0; }
                                if($view->rating == 4){ $value4 = $view->rating*4; } else { $value4 = 0; }
                                if($view->rating == 5){ $value5 = $view->rating*5; } else { $value5 = 0; }
                                $top += $value1 + $value2 + $value3 + $value4 + $value5;
                                $bottom += $view->rating;
                                }
                                
                                if(!empty(round($top/$bottom)))
                                    {
                                    $count_rating = round($top/$bottom);
                                    }
                                    else
                                    {
                                    $count_rating = 0;
                                    }
                                }
                                else
                                {
                                    $count_rating = 0;
                                }  
                                ?>


                                <div class="star-rating">
                                    <?php if($count_rating == 0): ?>
                                        <i class="sr-star dwg-star"></i>
                                        <i class="sr-star dwg-star"></i>
                                        <i class="sr-star dwg-star"></i>
                                        <i class="sr-star dwg-star"></i>
                                        <i class="sr-star dwg-star"></i>
                                    <?php endif; ?>
                                    <?php if($count_rating == 1): ?>
                                        <i class="sr-star dwg-star-filled active"></i>
                                        <i class="sr-star dwg-star"></i>
                                        <i class="sr-star dwg-star"></i>
                                        <i class="sr-star dwg-star"></i>
                                        <i class="sr-star dwg-star"></i>
                                    <?php endif; ?>
                                    <?php if($count_rating == 2): ?>
                                        <i class="sr-star dwg-star-filled active"></i>
                                        <i class="sr-star dwg-star-filled active"></i>
                                        <i class="sr-star dwg-star"></i>
                                        <i class="sr-star dwg-star"></i>
                                        <i class="sr-star dwg-star"></i>
                                    <?php endif; ?>
                                    <?php if($count_rating == 3): ?>
                                        <i class="sr-star dwg-star-filled active"></i>
                                        <i class="sr-star dwg-star-filled active"></i>
                                        <i class="sr-star dwg-star-filled active"></i>
                                        <i class="sr-star dwg-star"></i>
                                        <i class="sr-star dwg-star"></i>
                                    <?php endif; ?>
                                    <?php if($count_rating == 4): ?>
                                        <i class="sr-star dwg-star-filled active"></i>
                                        <i class="sr-star dwg-star-filled active"></i>
                                        <i class="sr-star dwg-star-filled active"></i>
                                        <i class="sr-star dwg-star-filled active"></i>
                                        <i class="sr-star dwg-star"></i>
                                    <?php endif; ?>
                                    <?php if($count_rating == 5): ?>
                                        <i class="sr-star dwg-star-filled active"></i>
                                        <i class="sr-star dwg-star-filled active"></i>
                                        <i class="sr-star dwg-star-filled active"></i>
                                        <i class="sr-star dwg-star-filled active"></i>
                                        <i class="sr-star dwg-star-filled active"></i>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <h3 class="product-title font-size-sm mb-2">
                                <a href="<?php echo e(URL::to('/item')); ?>/<?php echo e($item->item_slug); ?>/<?php echo e($item->item_id); ?>"><?php echo e(substr($item->item_name,0,20).'...'); ?></a>
                            </h3>

                            <div class="d-flex flex-wrap justify-content-between align-items-center">
                                <div class="font-size-sm mr-2">
                                <i class="dwg-download text-muted mr-1"></i><?php echo e($item->download_count); ?><span class="font-size-xs ml-1">Sales</span>
                                </div>
                                <div>
                                    <?php if($item->free_download == 1): ?>
                                        <del class="price-old"><?php echo e($allsettings->site_currency); ?><?php echo e($item->regular_price); ?></del>
                                        <span class="price-badge rounded-sm py-1 px-2"><?php echo e(Helper::translation(2992,$translate)); ?></span>
                                    <?php else: ?>
                                        <?php if($item->item_flash == 1): ?>
                                            <span class="flash"><?php echo e(round($item->regular_price/2)); ?> <?php echo e($allsettings->site_currency); ?></span>
                                        <?php else: ?>
                                            <span><?php echo e($item->regular_price); ?> <?php echo e($allsettings->site_currency); ?></span>
                                        <?php endif; ?>
                                    <?php endif; ?>
                                </div>
                                

                            </div>

                        </div>

                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
        </div>
                   
        </div> 
    </div>
</section>



<?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
<?php echo $__env->make('javascript', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  
<?php if(!empty($allsettings->site_free_end_date)): ?>
	<script type="text/javascript">
            $('#example').countdown({
                date: '<?php echo e(date("m/d/Y H:i:s", strtotime($allsettings->site_free_end_date))); ?>',
                offset: -8,
                day: 'Day',
                days: 'Days'
            }, function () {
                
            });
    </script>
<?php endif; ?> 
</body>

</html>
<?php else: ?>
    <?php echo $__env->make('503', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\wrappixels\resources\views/free-items.blade.php ENDPATH**/ ?>