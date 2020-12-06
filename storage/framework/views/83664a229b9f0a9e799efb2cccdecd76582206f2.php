<?php if($allsettings->maintenance_mode == 0): ?>
<?php echo $__env->make('version', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title><?php echo e($item['item']->item_name); ?> - <?php echo e($allsettings->site_title); ?></title>
    <?php echo $__env->make('stylesheet', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('dynamic-style', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>

<body class="preload single_prduct2">

    <?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <section class="bg-position-center-top" style="background-image: url('<?php echo e(url('/')); ?>/public/storage/settings/<?php echo e($allsettings->site_banner); ?>'); padding-bottom: 1px;">
        <div class="container content_above mb-lg-3 pb-4 pt-5">
            <div class="row">
                <div class="col-md-6 offset-md-1">
                    <h1 class="text-white line-height-base">
                    <?php echo e($item['item']->item_name); ?>

                    </h1>
                </div>

                <div class="col-md-3 offset-md-1">
                    <ul class="breadcrumb">
                        <li style="list-style:none;">
                            <a class="text-white line-height-base" href="<?php echo e(URL::to('/')); ?>"><?php echo e(Helper::translation(2862,$translate)); ?> / </a>
                        </li>
                        <li class="active" style="list-style:none;">
                            <a class="text-white line-height-base" href="<?php echo e(URL::to('/item')); ?>/<?php echo e($item['item']->item_slug); ?>/<?php echo e($item['item']->item_id); ?>"><?php echo e($item['item']->item_name); ?></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>


    <section class="container mb-3 pb-3"  style="margin-top: -3rem">
        <div class="bg-light box-shadow-lg rounded-lg overflow-hidden">
            <div class="row">
          <!-- Content-->
                <section class="col-lg-8 pt-2 pt-lg-4 pb-4 mb-lg-3">
                    <div class="pt-2 px-4 pr-lg-0 pl-xl-5">

                      <div class="item-preview item-preview2">
                        <div class="prev-slide">
                          <?php if($item['item']->video_preview_type!=''): ?>
                            <?php if($item['item']->video_preview_type == 'youtube'): ?>
                              <?php if($item['item']->video_url != ''): ?>
                                <?php
                                $link = $item['item']->video_url;
                                $video_id = explode("?v=", $link);
                                $video_id = $video_id[1];
                                ?>
                                <iframe width="100%" height="430" src="https://www.youtube.com/embed/<?php echo e($video_id); ?>?rel=0&version=3&loop=1&playlist=<?php echo e($video_id); ?>" frameborder="0" allow="autoplay" scrolling="no">
                                </iframe>        
                              <?php else: ?>
                                <img src="<?php echo e(url('/')); ?>/resources/views/assets/no-video.png" alt="<?php echo e($item['item']->item_name); ?>" class="single-thumbnail">
                              <?php endif; ?>
                            <?php endif; ?>

                            <?php if($item['item']->video_preview_type == 'mp4'): ?>
                              <?php if($item['item']->video_file != ''): ?>
                                  <?php if($allsettings->site_s3_storage == 1): ?>
                                    <?php $videofileurl = Storage::disk('s3')->url($item['item']->video_file); ?>
                                    <video width="100%" height="430" controls loop><source src="<?php echo e($videofileurl); ?>" type="video/mp4">Your browser does not support the video tag.</video>             
                                  <?php else: ?>
                                    <video width="100%" height="430" controls loop><source src="<?php echo e(url('/')); ?>/public/storage/items/<?php echo e($item['item']->video_file); ?>" type="video/mp4">Your browser does not support the video tag.</video>
                                  <?php endif; ?>
                              <?php else: ?>
                                  <img src="<?php echo e(url('/')); ?>/resources/views/assets/no-video.png" alt="<?php echo e($item['item']->item_name); ?>" class="single-thumbnail">
                              <?php endif; ?>
                             <?php endif; ?>
                            <?php else: ?>  
                              <?php if($item['item']->item_preview!=''): ?>
                                <a class="gallery-item rounded-lg mb-grid-gutter" href="<?php echo e(url('/')); ?>/public/storage/items/<?php echo e($item['item']->item_preview); ?>" data-sub-html="Sed do eiusmod tempor">
                                  <img src="<?php echo e(url('/')); ?>/public/storage/items/<?php echo e($item['item']->item_preview); ?>" alt="<?php echo e($item['item']->item_name); ?>" class="single-thumbnail">
                                </a>
                              <?php else: ?>
                                <a class="gallery-item rounded-lg mb-grid-gutter" href="<?php echo e(url('/')); ?>/public/storage/items/<?php echo e($item['item']->item_preview); ?>" data-sub-html="Sed do eiusmod tempor">
                                    <img src="<?php echo e(url('/')); ?>/public/img/no-image.png" alt="<?php echo e($item['item']->item_name); ?>" class="single-thumbnail">
                                </a>
                              <?php endif; ?>
                            <?php endif; ?>
                                   
                        </div>
                        <div class="item__preview-thumb d-flex flex-wrap justify-content-between align-items-center border-top pt-3">

                                <div class="action-btns py-2 mr-2">
                                    <?php if($item['item']->demo_url != ''): ?><a href="<?php echo e($item['item']->demo_url); ?>" class="btn btn-outline-accent btn-sm" target="_blank"><?php echo e(Helper::translation(3049,$translate)); ?></a><?php endif; ?>
                                    <?php if($getcount != 0): ?><a href="<?php echo e(url('/')); ?>/public/storage/items/<?php echo e($item_image['item']->item_image); ?>" class="btn btn-outline-accent btn-sm" data-lightbox-gallery="mygallery"><?php echo e(Helper::translation(3050,$translate)); ?></a><?php endif; ?>
                                    <?php if(Auth::guest()): ?>
                                    <a href="javascript:void(0);" class="btn btn-outline-accent btn-sm" onClick="alert('Login user only');">
                                        <span class="lnr lnr-heart"></span><?php echo e(Helper::translation(3051,$translate)); ?>

                                    </a>
                                    <?php endif; ?>
                                    <?php if(Auth::check()): ?>
                                    <?php if($item['item']->user_id != Auth::user()->id): ?>
                                    

                                    <a href="<?php echo e(url('/item')); ?>/<?php echo e(base64_encode($item['item']->item_id)); ?>/favorite/<?php echo e(base64_encode($item['item']->item_liked)); ?>" class="btn btn-outline-accent btn-sm">
                                        <span class="lnr lnr-heart"></span><?php echo e(Helper::translation(3051,$translate)); ?>

                                    </a>
                                    <?php endif; ?>
                                    <?php endif; ?>
                                    <?php /*?>@if($item['item']->video_url != '')
                                    <a id="feberr-video" video-url="{{ $item['item']->video_url }}" class="btn btn--sm btn--icon theme-button videobtn"><span class="lnr lnr-camera-video"></span> Video</a>
                                    @endif<?php */?>
                                </div>

                            <div class="py-2">
                                <i class="dwg-share-alt font-size-lg align-middle text-muted mr-2"></i>

                                <a class="social-btn sb-outline sb-facebook sb-sm ml-2 share-button" data-share-url="<?php echo e(URL::to('/item')); ?>/<?php echo e($item['item']->item_slug); ?>/<?php echo e($item['item']->item_id); ?>" data-share-network="facebook" data-share-text="<?php echo e($item['item']->item_shortdesc); ?>" data-share-title="<?php echo e($item['item']->item_name); ?>" data-share-via="<?php echo e($allsettings->site_title); ?>" data-share-tags="" data-share-media="<?php echo e(url('/')); ?>/public/storage/items/<?php echo e($item['item']->item_thumbnail); ?>" href="javascript:void(0)"><i class="dwg-facebook"></i>
                                </a>       

                                <a class="social-btn sb-outline sb-twitter sb-sm ml-2 share-button" data-share-url="<?php echo e(URL::to('/item')); ?>/<?php echo e($item['item']->item_slug); ?>/<?php echo e($item['item']->item_id); ?>" data-share-network="twitter" data-share-text="<?php echo e($item['item']->item_shortdesc); ?>" data-share-title="<?php echo e($item['item']->item_name); ?>" data-share-via="<?php echo e($allsettings->site_title); ?>" data-share-tags="" data-share-media="<?php echo e(url('/')); ?>/public/storage/items/<?php echo e($item['item']->item_thumbnail); ?>" href="javascript:void(0)"><i class="dwg-twitter"></i>
                                </a>

                                <a class="social-btn sb-outline sb-pinterest sb-sm ml-2 share-button" data-share-url="<?php echo e(URL::to('/item')); ?>/<?php echo e($item['item']->item_slug); ?>/<?php echo e($item['item']->item_id); ?>" data-share-network="googleplus" data-share-text="<?php echo e($item['item']->item_shortdesc); ?>" data-share-title="<?php echo e($item['item']->item_name); ?>" data-share-via="<?php echo e($allsettings->site_title); ?>" data-share-tags="" data-share-media="<?php echo e(url('/')); ?>/public/storage/items/<?php echo e($item['item']->item_thumbnail); ?>" href="javascript:void(0)"><i class="dwg-google"></i>
                                </a>

                                <a class="social-btn sb-outline sb-linkedin sb-sm ml-2 share-button" data-share-url="<?php echo e(URL::to('/item')); ?>/<?php echo e($item['item']->item_slug); ?>/<?php echo e($item['item']->item_id); ?>" data-share-network="linkedin" data-share-text="<?php echo e($item['item']->item_shortdesc); ?>" data-share-title="<?php echo e($item['item']->item_name); ?>" data-share-via="<?php echo e($allsettings->site_title); ?>" data-share-tags="" data-share-media="<?php echo e(url('/')); ?>/public/storage/items/<?php echo e($item['item']->item_thumbnail); ?>" href="javascript:void(0)"><i class="dwg-linkedin"></i>
                                </a>

                            </div>


                                
                    
                    
                            </div>
                            <?php $no = 1; ?>
                            <?php $__currentLoopData = $item_allimage; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($no != 1): ?>
                            <a href="<?php echo e(url('/')); ?>/public/storage/items/<?php echo e($image->item_image); ?>" class="lightbox" data-lightbox-gallery="mygallery" hidden></a>
                            <?php endif; ?>
                            <?php $no++; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            
                            <!-- end /.item__action -->

                            <!-- end /.item__preview-thumb-->
                        </div>
                        <!-- end /.item__preview-thumb-->

                    </div>

                    
                </section>


            <!-- Sidebar-->
                <aside class="col-lg-4">
                    <hr class="d-lg-none">
                    <form action="http://digitbull.com/cart" class="setting_form" method="post" id="order_form" enctype="multipart/form-data">
                        <?php echo e(csrf_field()); ?> 
                        <div class="cz-sidebar-static h-100 ml-auto border-left">
                            <div class="bg-secondary rounded p-3 mb-4">
                                <p><?php echo e(Helper::translation(3065,$translate)); ?> 
                                    <strong><?php echo e(Helper::translation(3040,$translate)); ?></strong>. <?php echo e(Helper::translation(3066,$translate)); ?>

                                </p>
                                <div align="center">

                                    <?php if(Auth::guest()): ?>
                                    <a href="<?php echo e(URL::to('/login')); ?>" class="btn btn-primary btn-sm"> <i class="fa fa-download"></i> <?php echo e(Helper::translation(3067,$translate)); ?> (<?php echo e($item['item']->download_count); ?>)</a>
                                    <?php else: ?>
                                    <a href="<?php echo e(URL::to('/item')); ?>/<?php echo e(base64_encode($item['item']->item_token)); ?>" class="btn btn-primary btn-smn" download> <i class="fa fa-download"></i> <?php echo e(Helper::translation(3067,$translate)); ?> (<?php echo e($item['item']->download_count); ?>)</a>
                                    <?php endif; ?>

                                </div>
                            </div>




                            <div class="accordion" id="licenses">
                                <div class="card border-top-0 border-left-0 border-right-0">
                                    <div class="card-header d-flex justify-content-between align-items-center py-3 border-0">
                                        <div class="custom-control custom-radio">

                                            <input class="custom-control-input" type="radio" name="item_price" value="MTM=_regular" id="opt1" checked="" style="padding-top: -100px">
                                            <label class="custom-control-label font-weight-medium text-dark" for="opt1" data-toggle="collapse" data-target="#standard-license" aria-expanded="true" data-price="13"><?php echo e(Helper::translation(3072,$translate)); ?></label>

                                        </div>
                                        <h5 class="mb-0 text-accent font-weight-normal">$<?php echo e($item['item']->regular_price); ?></h5>
                                    </div>
                                    <div class="collapse show" id="standard-license" data-parent="#licenses" style="">
                                        <div class="card-body py-0 pb-2">
                                            
                                            <ul class="list-unstyled font-size-sm">
                                               <li>
                                                    <div class="item-features">
                                                        <ul>
                                                           <li><span class="lnr lnr-checkmark-circle right font-size-ms"></span> <?php echo e(Helper::translation(3068,$translate)); ?> <?php echo e($allsettings->site_title); ?></li>
                                                           <?php if($item['item']->future_update == 1): ?>
                                                           <li><span class="lnr lnr-checkmark-circle righ font-size-mst"></span>  <?php echo e(Helper::translation(3069,$translate)); ?></li>
                                                           <?php else: ?>
                                                           <li><span class="lnr lnr-cross-circle wrong font-size-ms"></span>  <?php echo e(Helper::translation(3069,$translate)); ?></li>
                                                           <?php endif; ?>
                                                           
                                                           <?php if($item['item']->item_support == 1): ?>
                                                           <li><span class="lnr lnr-checkmark-circle right font-size-ms"></span> <?php echo e(Helper::translation(3070,$translate)); ?> <?php echo e($item['item']->username); ?></li>
                                                           <?php else: ?>
                                                           <li><span class="lnr lnr-cross-circle wrong font-size-ms"></span> <?php echo e(Helper::translation(3070,$translate)); ?> <?php echo e($item['item']->username); ?></li>
                                                           <?php endif; ?>
                                                           
                                                        </ul>
                                                    </div>
                                               </li>
                                              
                                            </ul>

                                        </div>
                                    </div>
                                </div>

                                <?php if($item['item']->item_flash == 1)
                                { 
                                $item_price = round($item['item']->regular_price/2);
                                $extend_item_price = round($item['item']->extended_price/2);
                                } 
                                else 
                                { 
                                $item_price = $item['item']->regular_price;
                                $extend_item_price = $item['item']->extended_price; 
                                } 
                                ?>


                                <?php if($item['item']->extended_price != 0): ?>
                                
                                <div class="card border-bottom-0 border-left-0 border-right-0">
                                    <div class="card-header d-flex justify-content-between align-items-center py-3 border-0">
                                        <div class="custom-control custom-radio">
                                            <input class="custom-control-input" type="radio" name="item_price" id="license-ext" value="MTM1_extended">
                                            <label class="custom-control-label font-weight-medium text-dark collapsed" for="license-ext" data-toggle="collapse" data-target="#extended-license" aria-expanded="false"><?php echo e(Helper::translation(3073,$translate)); ?></label>
                                        </div>
                                        <h5 class="mb-0 text-accent font-weight-normal">$<?php echo e($item['item']->extended_price); ?></h5>
                                    </div>
                                    <div class="collapse" id="extended-license" data-parent="#licenses" style="">
                                        <div class="card-body py-0 pb-2">
                                             
                                        </div>
                                    </div>
                                </div>
                                <?php endif; ?>

                            </div>
                        
                            <hr>
                            
                            <p class="mt-2 mb-3"><a href="javascript:void(0)" data-toggle="modal" data-target="#myModal" class="font-size-xs">What does support include?</a></p>
                            <div class="modal fade" id="myModal" aria-hidden="true" style="display: none;">
                                <div class="modal-dialog modal-xl">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">What does support include?</h4>
                                            <button type="button" class="close" data-dismiss="modal">×</button>
                                        </div>
                                        <div class="modal-body">
                                            <p><strong>Regular License</strong></p>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                                            <p><strong>Extended License</strong></p>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                                            <p>&nbsp;</p>                   
                                        </div>
                                    </div>
                                </div>
                            </div>
                          

                            <div class="purchase-button">
                               <?php if(Auth::guest()): ?>
                               <a href="javascript:void(0);" class="btn btn-primary btn-shadow btn-block mt-4" onClick="alert('Login user only');">
                                    <span class="lnr lnr-cart"></span> <?php echo e(Helper::translation(3074,$translate)); ?></a>
                               <?php endif; ?> 
                               <?php if(Auth::check()): ?>
                               <?php if($item['item']->user_id == Auth::user()->id): ?>
                               <a href="<?php echo e(URL::to('/edit-item')); ?>/<?php echo e($item['item']->item_token); ?>" class="btn btn--md theme-button"><?php echo e(Helper::translation(2935,$translate)); ?></a>
                               <?php else: ?>
                               <input type="hidden" name="user_id" value="<?php echo e(Auth::user()->id); ?>">
                               <input type="hidden" name="item_id" value="<?php echo e($item['item']->item_id); ?>">
                               <input type="hidden" name="item_name" value="<?php echo e($item['item']->item_name); ?>">
                               <input type="hidden" name="item_user_id" value="<?php echo e($item['item']->user_id); ?>">
                               <input type="hidden" name="item_token" value="<?php echo e($item['item']->item_token); ?>">
                               <?php if($checkif_purchased == 0): ?>
                               <?php if(Auth::user()->id != 1): ?>
                             <!--   <button type="submit" class="btn btn--md theme-button cart-btn"><span class="lnr lnr-cart"></span> <?php echo e(Helper::translation(3074,$translate)); ?></button> -->
                                <button type="submit" class="btn btn-primary btn-shadow btn-block mt-4"><i class="dwg-cart font-size-lg mr-2"></i><?php echo e(Helper::translation(3074,$translate)); ?></button>
                               <?php endif; ?> 
                               <?php endif; ?>    
                               <?php endif; ?>
                               <?php endif; ?>    
                                
                            </div>

                            

                        
                            <div class="bg-secondary rounded p-3 mt-4 mb-2"><i class="dwg-download h5 text-muted align-middle mb-0 mt-n1 mr-2"></i>
                                <span class="d-inline-block h6 mb-0 mr-1"><?php echo e($item['item']->item_sold); ?></span><span class="font-size-sm"><?php echo e(Helper::translation(3039,$translate)); ?></span>
                            </div>

                            <div class="bg-secondary rounded p-3 mb-2">
                                <div class="rating product--rating" align="center"> 
                                
                                <ul>
                                    <?php if($getreview == 0): ?>
                                    <li>
                                        <span class="fa fa-star-o"></span>
                                    </li>
                                    <li>
                                        <span class="fa fa-star-o"></span>
                                    </li>
                                    <li>
                                        <span class="fa fa-star-o"></span>
                                    </li>
                                    <li>
                                        <span class="fa fa-star-o"></span>
                                    </li>
                                    <li>
                                        <span class="fa fa-star-o"></span>
                                    </li>
                                    <?php else: ?>
                                    <?php if($count_rating == 0): ?>
                                    <li>
                                        <span class="fa fa-star-o"></span>
                                    </li>
                                    <li>
                                        <span class="fa fa-star-o"></span>
                                    </li>
                                    <li>
                                        <span class="fa fa-star-o"></span>
                                    </li>
                                    <li>
                                        <span class="fa fa-star-o"></span>
                                    </li>
                                    <li>
                                        <span class="fa fa-star-o"></span>
                                    </li>
                                    
                                    <?php endif; ?>
                                    
                                    <?php if($count_rating == 1): ?>
                                    <li>
                                        <span class="fa fa-star"></span>
                                    </li>
                                    <li>
                                        <span class="fa fa-star-o"></span>
                                    </li>
                                    <li>
                                        <span class="fa fa-star-o"></span>
                                    </li>
                                    <li>
                                        <span class="fa fa-star-o"></span>
                                    </li>
                                    <li>
                                        <span class="fa fa-star-o"></span>
                                    </li>
                                    
                                    <?php endif; ?>
                                    
                                    
                                    <?php if($count_rating == 2): ?>
                                    <li>
                                        <span class="fa fa-star"></span>
                                    </li>
                                    <li>
                                        <span class="fa fa-star"></span>
                                    </li>
                                    <li>
                                        <span class="fa fa-star-o"></span>
                                    </li>
                                    <li>
                                        <span class="fa fa-star-o"></span>
                                    </li>
                                    <li>
                                        <span class="fa fa-star-o"></span>
                                    </li>
                                    
                                    <?php endif; ?>
                                    
                                                                       
                                    <?php if($count_rating == 3): ?>
                                    <li>
                                        <span class="fa fa-star"></span>
                                    </li>
                                    <li>
                                        <span class="fa fa-star"></span>
                                    </li>
                                    <li>
                                        <span class="fa fa-star"></span>
                                    </li>
                                    <li>
                                        <span class="fa fa-star-o"></span>
                                    </li>
                                    <li>
                                        <span class="fa fa-star-o"></span>
                                    </li>
                                    
                                    <?php endif; ?>
                                    
                                    <?php if($count_rating == 4): ?>
                                    <li>
                                        <span class="fa fa-star"></span>
                                    </li>
                                    <li>
                                        <span class="fa fa-star"></span>
                                    </li>
                                    <li>
                                        <span class="fa fa-star"></span>
                                    </li>
                                    <li>
                                        <span class="fa fa-star"></span>
                                    </li>
                                    <li>
                                        <span class="fa fa-star-o"></span>
                                    </li>
                                    
                                    <?php endif; ?>
                                    
                                    <?php if($count_rating == 5): ?>
                                    <li>
                                        <span class="fa fa-star"></span>
                                    </li>
                                    <li>
                                        <span class="fa fa-star"></span>
                                    </li>
                                    <li>
                                        <span class="fa fa-star"></span>
                                    </li>
                                    <li>
                                        <span class="fa fa-star"></span>
                                    </li>
                                    <li>
                                        <span class="fa fa-star"></span>
                                    </li>
                                    
                                    <?php endif; ?>
                                    
                                    
                                    <?php endif; ?>
                                </ul>
                                <span class="rating__count">( <?php echo e($getreview); ?> <?php echo e(Helper::translation(3080,$translate)); ?> )</span>
                            </div>
                            </div>

                            <div class="bg-secondary rounded p-3 mb-4"><i class="dwg-chat h5 text-muted align-middle mb-0 mt-n1 mr-2"></i>
                                <span class="d-inline-block h6 mb-0 mr-1"><?php echo e($comment_count); ?></span><span class="font-size-sm"><?php echo e(Helper::translation(3054,$translate)); ?></span>
                            </div>

                            <ul class="list-unstyled font-size-sm">
                                <li class="d-flex justify-content-between mb-3 pb-3 border-bottom">
                                    <span class="text-dark font-weight-medium"><?php echo e(Helper::translation(3082,$translate)); ?></span>
                                    <span class="text-muted"><?php echo e(date("d F Y", strtotime($item['item']->created_item))); ?></span>
                                </li>
                                <li class="d-flex justify-content-between mb-3 pb-3 border-bottom">
                                    <span class="text-dark font-weight-medium"><?php echo e(Helper::translation(3083,$translate)); ?></span>
                                    <span class="text-muted"><?php echo e(date("d F Y", strtotime($item['item']->updated_item))); ?> </span>
                                </li>
                                <li class="d-flex justify-content-between mb-3 pb-3 border-bottom">
                                    <span class="text-dark font-weight-medium"><?php echo e(Helper::translation(3084,$translate)); ?></span>
                                    <span class="text-muted"><?php echo e($category_name); ?></span>
                                </li>
                                <li class="d-flex justify-content-between mb-3 pb-3 border-bottom">
                                    <span class="text-dark font-weight-medium"><?php echo e(Helper::translation(2937,$translate)); ?></span>
                                    <span class="text-muted"><?php echo e(str_replace('-',' ',$item['item']->item_type)); ?></span>
                                </li>
                                <?php if(count($viewattribute['details']) != 0): ?>
                                <?php $__currentLoopData = $viewattribute['details']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $view_attribute): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li class="d-flex justify-content-between mb-3 pb-3 border-bottom">
                                    <span class="text-dark font-weight-medium"><?php echo e($view_attribute->item_attribute_label); ?></span>
                                    <span class="text-muted"><?php echo e($view_attribute->item_attribute_values); ?></span>
                                </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>
                                <li class="justify-content-between pb-3 border-bottom">
                                    <span class="text-dark font-weight-medium"><?php echo e(Helper::translation(2974,$translate)); ?></span>
                                    <p class="info">
                                    
                                    <?php $__currentLoopData = $item_tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tags): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <span class="text-right">
                                        <a href="<?php echo e(url('/tag')); ?>/item/<?php echo e(strtolower(str_replace(' ','-',$tags))); ?>" class="item-tags item-tags-color"><?php echo e($tags); ?></a>
                                    </span>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </form>
                </aside>
            </div>
        </div>
    </section>






















    <section class="single-product-desc">
        <div class="container">
        <div>
                   
        <?php if($message = Session::get('success')): ?>
               <div class="alert alert-success" role="alert">
                                <span class="alert_icon lnr lnr-checkmark-circle"></span>
                                <?php echo e($message); ?>

                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span class="lnr lnr-cross" aria-hidden="true"></span>
                                </button>
                            </div>
        <?php endif; ?>
        
        
        <?php if($message = Session::get('error')): ?>
        <div class="alert alert-danger" role="alert">
                                <span class="alert_icon lnr lnr-warning"></span>
                                <?php echo e($message); ?>

                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span class="lnr lnr-cross" aria-hidden="true"></span>
                                </button>
                            </div>
        <?php endif; ?>
        
        <?php if(!$errors->isEmpty()): ?>
        <div class="alert alert-danger" role="alert">
        <span class="alert_icon lnr lnr-warning"></span>
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
         
        <?php echo e($error); ?>


       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span class="lnr lnr-cross" aria-hidden="true"></span>
        </button>
        </div>
        <?php endif; ?>
        
                    
                </div>
            <div class="row">
                <div class="col-lg-12">
                    

                    <div class="item-info">
                        <div class="item-navigation">
                            <ul class="nav nav-tabs">
                                <li>
                                    <a href="#product-details" class="active" aria-controls="product-details" role="tab" data-toggle="tab"><?php echo e(Helper::translation(3053,$translate)); ?></a>
                                </li>
                                <li>
                                    <a href="#product-comment" aria-controls="product-comment" role="tab" data-toggle="tab"><?php echo e(Helper::translation(3054,$translate)); ?> <span>(<?php echo e($comment_count); ?>)</span></a>
                                </li>
                                <li>
                                    <a href="#product-review" aria-controls="product-review" role="tab" data-toggle="tab"><?php echo e(Helper::translation(3043,$translate)); ?>

                                        <span>(<?php echo e($getreview); ?>)</span>
                                    </a>
                                </li>
                                <?php if(Auth::guest()): ?>
                                <li>
                                    <a href="#product-support" aria-controls="product-support" role="tab" data-toggle="tab"><?php echo e(Helper::translation(3055,$translate)); ?></a>
                                </li>
                                <?php endif; ?>
                                <?php if(Auth::check()): ?>
                                <?php if($item['item']->user_id != Auth::user()->id): ?>
                                 <li>
                                    <a href="#product-support" aria-controls="product-support" role="tab" data-toggle="tab"><?php echo e(Helper::translation(3055,$translate)); ?></a>
                                </li>
                                <?php endif; ?>
                                <?php endif; ?>
                                
                                
                                
                            </ul>
                        </div>
                        <!-- end /.item-navigation -->

                        <div class="tab-content">
                        
                                                    
                            <div class="tab-pane fade show product-tab active" id="product-details">
                                <div class="tab-content-wrapper">
                                    <?php echo html_entity_decode($item['item']->item_desc); ?>

                                </div>
                            </div>
                            <!-- end /.tab-content -->

                            <div class="fade tab-pane product-tab" id="product-comment">
                                <div class="thread">
                                
                                                                
                                    <ul class="media-list thread-list" id="listShow">
                                        
                                        
                                        <?php $__currentLoopData = $comment['view']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $parent): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li class="single-thread commli-item">
                                            <div class="media">
                                                <div class="media-left">
                                                <a href="<?php echo e(URL::to('/user')); ?>/<?php echo e($parent->username); ?>">
                                                       
                                                        <?php if($parent->user_photo!=''): ?>
                                                    <img  src="<?php echo e(url('/')); ?>/public/storage/users/<?php echo e($parent->user_photo); ?>" alt="<?php echo e($parent->username); ?>" class="media-object">
                                                    <?php else: ?>
                                                    <img src="<?php echo e(url('/')); ?>/public/img/no-user.png" alt="<?php echo e($parent->username); ?>" class="media-object">
                                                    <?php endif; ?>
                                                    </a>
                                                    
                                                </div>
                                                <div class="media-body">
                                                    <div>
                                                        <div class="media-heading">
                                                            <a href="<?php echo e(URL::to('/user')); ?>/<?php echo e($parent->username); ?>">
                                                                <h4><?php echo e($parent->username); ?></h4>
                                                            </a>
                                                            <span><?php echo e(date('d F Y, H:i:s', strtotime($parent->comm_date))); ?></span>
                                                        </div>
                                                        
                                                        <?php if($parent->id == $item['item']->user_id): ?>
                                                        <span class="comment-tag buyer"><?php echo e(Helper::translation(3057,$translate)); ?></span>
                                                        <?php endif; ?>
                                                        <?php if(Auth::check()): ?>
                                                        <?php if($item['item']->user_id == Auth::user()->id): ?>
                                                        <a href="javascript:void(0);" class="reply-link theme-color"><?php echo e(Helper::translation(3056,$translate)); ?></a>
                                                        <?php endif; ?>
                                                        <?php if($parent->comm_user_id == Auth::user()->id): ?>
                                                        <a href="javascript:void(0);" class="reply-link theme-color"><?php echo e(Helper::translation(3056,$translate)); ?></a>
                                                        <?php endif; ?>
                                                        <?php endif; ?>
                                                    </div>
                                                    <p><?php echo e($parent->comm_text); ?></p>
                                                </div>
                                            </div>
                                            
                                            
                                            <ul class="children">
                                            <?php $__currentLoopData = $parent->replycomment; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $child): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <li class="single-thread depth-2">
                                                    <div class="media">
                                                        <div class="media-left">
                                                            <a href="<?php echo e(URL::to('/user')); ?>/<?php echo e($child->username); ?>">
                                                       
                                                        <?php if($child->user_photo!=''): ?>
                                                    <img  src="<?php echo e(url('/')); ?>/public/storage/users/<?php echo e($child->user_photo); ?>" alt="<?php echo e($child->username); ?>" class="media-object">
                                                    <?php else: ?>
                                                    <img src="<?php echo e(url('/')); ?>/public/img/no-user.png" alt="<?php echo e($child->username); ?>" class="media-object">
                                                    <?php endif; ?>
                                                    </a>
                                                        </div>
                                                        <div class="media-body">
                                                            <div class="media-heading">
                                                                <a href="<?php echo e(URL::to('/user')); ?>/<?php echo e($child->username); ?>">
                                                                <h4><?php echo e($child->username); ?></h4>
                                                                </a>
                                                                <span><?php echo e(date('d F Y, H:i:s', strtotime($child->comm_date))); ?></span>
                                                            </div>
                                                            <?php if($child->id == $item['item']->user_id): ?>
                                                            <span class="comment-tag buyer"><?php echo e(Helper::translation(3057,$translate)); ?></span>
                                                            <?php endif; ?>
                                                            <!--<span class="comment-tag author">Author</span>-->
                                                            <p><?php echo e($child->comm_text); ?></p>
                                                        </div>
                                                    </div>

                                                </li>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </ul>
                                            
                                            <!-- comment reply -->
                                            <?php if(Auth::check()): ?>
                                            <div class="media depth-2 reply-comment">
                                                <div class="media-left">
                                                    <a href="<?php echo e(URL::to('/user')); ?>/<?php echo e(Auth::user()->username); ?>">
                                                       
                                                        <?php if(Auth::user()->user_photo!=''): ?>
                                        <img  src="<?php echo e(url('/')); ?>/public/storage/users/<?php echo e(Auth::user()->user_photo); ?>" alt="<?php echo e(Auth::user()->username); ?>" class="media-object">
                                        <?php else: ?>
                                        <img src="<?php echo e(url('/')); ?>/public/img/no-user.png" alt="<?php echo e(Auth::user()->username); ?>" class="media-object">
                                        <?php endif; ?>
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <form action="<?php echo e(route('reply-post-comment')); ?>" class="comment-reply-form" id="item_form" method="post" enctype="multipart/form-data">
                                                    <?php echo e(csrf_field()); ?>

                                                    <textarea name="comm_text" placeholder="<?php echo e(Helper::translation(3059,$translate)); ?>" data-bvalidator="required"></textarea>
                                                    <input type="hidden" name="comm_user_id" value="<?php echo e(Auth::user()->id); ?>">
                                                    <input type="hidden" name="comm_item_user_id" value="<?php echo e($item['item']->user_id); ?>">
                                                    <input type="hidden" name="comm_item_id" value="<?php echo e($item['item']->item_id); ?>">
                                                    <input type="hidden" name="comm_id" value="<?php echo e($parent->comm_id); ?>">
                                                    <input type="hidden" name="comm_item_url" value="<?php echo e(URL::to('/item')); ?>/<?php echo e($item['item']->item_slug); ?>/<?php echo e($item['item']->item_id); ?>">
                                                   <button class="btn btn--sm theme-button"><?php echo e(Helper::translation(3058,$translate)); ?></button>
                                                </form>
                                                </div>
                                            </div>
                                            <?php endif; ?>
                                            <!-- comment reply -->
                                        </li>
                                       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                       
                                       
                                       
                                    </ul>
                                    <!-- end /.media-list -->

                                    <div class="pagination-area pagination-area2">
                                        <nav class="navigation pagination" role="navigation">
                                           <div class="pagination-area">
                                                <div class="turn-page" id="commpager"></div>
                                           </div> 
                                        </nav>
                                    </div>
                                    <!-- end /.comment pagination area -->

                                    <?php if(Auth::check()): ?>
                                    <?php if($item['item']->user_id != Auth::user()->id): ?>
                                    <div class="comment-form-area">
                                        <h4>Leave a comment</h4>
                                        <!-- comment reply -->
                                        <div class="media comment-form">
                                            <div class="media-left">
                                            <a href="<?php echo e(URL::to('/user')); ?>/<?php echo e(Auth::user()->username); ?>">
                                                       
                                                        <?php if(Auth::user()->user_photo!=''): ?>
                                        <img  src="<?php echo e(url('/')); ?>/public/storage/users/<?php echo e(Auth::user()->user_photo); ?>" alt="<?php echo e(Auth::user()->username); ?>" class="media-object">
                                        <?php else: ?>
                                        <img src="<?php echo e(url('/')); ?>/public/img/no-user.png" alt="<?php echo e(Auth::user()->username); ?>" class="media-object">
                                        <?php endif; ?>
                                                    </a>
                                                
                                            </div>
                                            <div class="media-body">
                                                <form action="<?php echo e(route('post-comment')); ?>" class="comment-reply-form" id="item_form" method="post" enctype="multipart/form-data">
                                                <?php echo e(csrf_field()); ?>

                                                    <textarea name="comm_text" placeholder="<?php echo e(Helper::translation(3059,$translate)); ?>" data-bvalidator="required"></textarea>
                                                    <input type="hidden" name="comm_user_id" value="<?php echo e(Auth::user()->id); ?>">
                                                    <input type="hidden" name="comm_item_user_id" value="<?php echo e($item['item']->user_id); ?>">
                                                    <input type="hidden" name="comm_item_id" value="<?php echo e($item['item']->item_id); ?>">
                                                    <input type="hidden" name="comm_item_url" value="<?php echo e(URL::to('/item')); ?>/<?php echo e($item['item']->item_slug); ?>/<?php echo e($item['item']->item_id); ?>">
                                                   <button class="btn btn--sm theme-button"><?php echo e(Helper::translation(3058,$translate)); ?></button>
                                                </form>
                                            </div>
                                        </div>
                                        <!-- comment reply -->
                                    </div>
                                    <?php endif; ?>
                                    <?php endif; ?>
                                    
                                    
                                </div>
                                <!-- end /.comments -->
                            </div>
                            <!-- end /.product-comment -->

                            <div class="tab-pane fade product-tab" id="product-review">
                                <div class="thread thread_review">
                                    <ul class="media-list thread-list" id="listShow">
                                        <?php $__currentLoopData = $getreviewdata['view']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rating): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li class="single-thread li-item">
                                            <div class="media">
                                                <div class="media-left">
                                                    <a href="<?php echo e(URL::to('/user')); ?>/<?php echo e($rating->username); ?>">
                                                       
                                                        <?php if($rating->user_photo!=''): ?>
                                        <img  src="<?php echo e(url('/')); ?>/public/storage/users/<?php echo e($rating->user_photo); ?>" alt="<?php echo e($rating->username); ?>" class="media-object">
                                        <?php else: ?>
                                        <img src="<?php echo e(url('/')); ?>/public/img/no-user.png" alt="<?php echo e($rating->username); ?>" class="media-object">
                                        <?php endif; ?>
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <div class="clearfix">
                                                        <div class="pull-left">
                                                            <div class="media-heading">
                                                                <a href="<?php echo e(URL::to('/user')); ?>/<?php echo e($rating->username); ?>">
                                                                    <h4><?php echo e($rating->username); ?></h4>
                                                                </a>
                                                                <span><?php echo e(date('d F Y H:i:s', strtotime($rating->rating_date))); ?></span>
                                                            </div>
                                                            <div class="rating product--rating">
                                                                <ul>
                                                                    <?php if($rating->rating == 0): ?>
                                                                    <li>
                                                                        <span class="fa fa-star-o"></span>
                                                                    </li>
                                                                    <li>
                                                                        <span class="fa fa-star-o"></span>
                                                                    </li>
                                                                    <li>
                                                                        <span class="fa fa-star-o"></span>
                                                                    </li>
                                                                    <li>
                                                                        <span class="fa fa-star-o"></span>
                                                                    </li>
                                                                    <li>
                                                                        <span class="fa fa-star-o"></span>
                                                                    </li>
                                                                    <?php endif; ?>
                                                                    <?php if($rating->rating == 1): ?>
                                                                    <li>
                                                                        <span class="fa fa-star"></span>
                                                                    </li>
                                                                    <li>
                                                                        <span class="fa fa-star-o"></span>
                                                                    </li>
                                                                    <li>
                                                                        <span class="fa fa-star-o"></span>
                                                                    </li>
                                                                    <li>
                                                                        <span class="fa fa-star-o"></span>
                                                                    </li>
                                                                    <li>
                                                                        <span class="fa fa-star-o"></span>
                                                                    </li>
                                                                    <?php endif; ?>
                                                                    <?php if($rating->rating == 2): ?>
                                                                    <li>
                                                                        <span class="fa fa-star"></span>
                                                                    </li>
                                                                    <li>
                                                                        <span class="fa fa-star"></span>
                                                                    </li>
                                                                    <li>
                                                                        <span class="fa fa-star-o"></span>
                                                                    </li>
                                                                    <li>
                                                                        <span class="fa fa-star-o"></span>
                                                                    </li>
                                                                    <li>
                                                                        <span class="fa fa-star-o"></span>
                                                                    </li>
                                                                    <?php endif; ?>
                                                                    <?php if($rating->rating == 3): ?>
                                                                    <li>
                                                                        <span class="fa fa-star"></span>
                                                                    </li>
                                                                    <li>
                                                                        <span class="fa fa-star"></span>
                                                                    </li>
                                                                    <li>
                                                                        <span class="fa fa-star"></span>
                                                                    </li>
                                                                    <li>
                                                                        <span class="fa fa-star-o"></span>
                                                                    </li>
                                                                    <li>
                                                                        <span class="fa fa-star-o"></span>
                                                                    </li>
                                                                    <?php endif; ?>
                                                                    <?php if($rating->rating == 4): ?>
                                                                    <li>
                                                                        <span class="fa fa-star"></span>
                                                                    </li>
                                                                    <li>
                                                                        <span class="fa fa-star"></span>
                                                                    </li>
                                                                    <li>
                                                                        <span class="fa fa-star"></span>
                                                                    </li>
                                                                    <li>
                                                                        <span class="fa fa-star"></span>
                                                                    </li>
                                                                    <li>
                                                                        <span class="fa fa-star-o"></span>
                                                                    </li>
                                                                    <?php endif; ?>
                                                                    <?php if($rating->rating == 5): ?>
                                                                    <li>
                                                                        <span class="fa fa-star"></span>
                                                                    </li>
                                                                    <li>
                                                                        <span class="fa fa-star"></span>
                                                                    </li>
                                                                    <li>
                                                                        <span class="fa fa-star"></span>
                                                                    </li>
                                                                    <li>
                                                                        <span class="fa fa-star"></span>
                                                                    </li>
                                                                    <li>
                                                                        <span class="fa fa-star"></span>
                                                                    </li>
                                                                    <?php endif; ?>
                                                                </ul>
                                                            </div>
                                                            <span class="review_tag"><?php echo e($rating->rating_reason); ?></span>
                                                        </div>
                                                        
                                                    </div>
                                                    <p><?php echo e($rating->rating_comment); ?></p>
                                                </div>
                                            </div>

                                        </li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                        
                                    </ul>
                                    <!-- end /.media-list -->

                                    <div class="pagination-area pagination-area2">
                                        <nav class="navigation pagination " role="navigation">
                                          <div class="pagination-area">
                                            <div class="turn-page" id="pager"></div>
                                          </div>  
                                        </nav>
                                    </div>
                                    <!-- end /.comment pagination area -->
                                </div>
                                <!-- end /.comments -->
                            </div>
                            <!-- end /.product-comment -->

                            <div class="tab-pane fade product-tab" id="product-support">
                                <div class="support">
                                    <div class="support__title">
                                        <h3><?php echo e(Helper::translation(3060,$translate)); ?></h3>
                                    </div>
                                    <div class="support__form">
                                        <div class="usr-msg">
                                            <?php if(Auth::guest()): ?>
                                            <p><?php echo e(Helper::translation(3061,$translate)); ?>

                                                <a href="<?php echo e(URL::to('/login')); ?>" class="theme-color"><?php echo e(Helper::translation(3020,$translate)); ?></a> <?php echo e(Helper::translation(3062,$translate)); ?></p>
                                                <?php endif; ?>

                                            <?php if(Auth::check()): ?>
                                            <form action="<?php echo e(route('support')); ?>" class="support_form" id="support_form" method="post" enctype="multipart/form-data">
                                            <?php echo e(csrf_field()); ?>

                                                <div class="form-group">
                                                    <label for="subj"><?php echo e(Helper::translation(3063,$translate)); ?>:</label>
                                                    <input type="text" id="support_subject" name="support_subject" class="text_field" placeholder="Enter your subject" data-bvalidator="required">
                                                </div>

                                                <div class="form-group">
                                                    <label for="supmsg"><?php echo e(Helper::translation(2918,$translate)); ?>: </label>
                                                    <textarea class="text_field" id="support_msg" name="support_msg" placeholder="Enter your message" data-bvalidator="required"></textarea>
                                                </div>
                                                <input type="hidden" name="to_address" value="<?php echo e($item['item']->email); ?>">
                                                <input type="hidden" name="to_name" value="<?php echo e($item['item']->username); ?>">
                                                <input type="hidden" name="from_address" value="<?php echo e(Auth::user()->email); ?>">
                                                <input type="hidden" name="from_name" value="<?php echo e(Auth::user()->username); ?>">
                                                <input type="hidden" name="item_url" value="<?php echo e(URL::to('/item')); ?>/<?php echo e($item['item']->item_slug); ?>/<?php echo e($item['item']->item_id); ?>">
                                                <button type="submit" class="btn btn--md theme-button"><?php echo e(Helper::translation(3064,$translate)); ?></button>
                                            </form>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end /.product-support -->

                            
                            <!-- end /.product-faq -->
                        </div>
                        <!-- end /.tab-content -->
                    </div>
                    <!-- end /.item-info -->
                </div>
                <!-- end /.col-md-8 -->

                <div class="col-lg-4">
             
                <div  class="col-lg-4" align="center">
                </div>
                <form action="<?php echo e(route('cart')); ?>" class="setting_form" method="post" id="order_form" enctype="multipart/form-data">
                <?php echo e(csrf_field()); ?> 
                <?php if($item['item']->item_flash == 1)
                { 
                $item_price = round($item['item']->regular_price/2);
                $extend_item_price = round($item['item']->extended_price/2);
                } 
                else 
                { 
                $item_price = $item['item']->regular_price;
                $extend_item_price = $item['item']->extended_price; 
                } 
                ?>
                    <aside class="sidebar sidebar--single-product">
                        
                        <!-- end /.sidebar--card -->
                        <?php if($item['item']->item_featured == 'yes'): ?>
                        <div class="sidebar-card card--metadata">
                            <div>
                                    <img src="<?php echo e(url('/')); ?>/public/storage/badges/<?php echo e($badges['setting']->featured_item_icon); ?>" border="0" class="single-badges" title="Featured Item"> <?php echo e(Helper::translation(3075,$translate)); ?> <?php echo e($allsettings->site_title); ?>

                            </div>
                            
                        </div>    
                        <?php endif; ?>
                        <?php if($sold_amount >= $badges['setting']->author_sold_level_six): ?>
                        <div class="sidebar-card card--metadata">
                            <div>
                                    <img src="<?php echo e(url('/')); ?>/public/storage/badges/<?php echo e($badges['setting']->power_elite_author_icon); ?>" border="0" class="single-badges" title="<?php echo e($badges['setting']->author_sold_level_six_label); ?> : Sold more than <?php echo e($allsettings->site_currency); ?> <?php echo e($badges['setting']->author_sold_level_six); ?>+ on <?php echo e($allsettings->site_title); ?>"> <?php echo e($badges['setting']->author_sold_level_six_label); ?>

                            </div>
                            
                        </div> 
                        <?php endif; ?>
                 
                    </aside>
                    </form>
                </div>
                <!-- end /.col-md-4 -->
            </div>
            <!-- end /.row -->
        </div>
        <!-- end /.container -->
    </section>
    <!--===========================================
        END SINGLE PRODUCT DESCRIPTION AREA
    ===============================================-->



    <!--============================================
        START MORE PRODUCT ARE
    ==============================================-->

<section class="container mb-lg-1" data-aos="fade-up" data-aos-delay="200">
    <div class="container" id="demo">

        <div class="col-md-12 pt-4 mb-4">
            <div class="section-title">
                <h1><?php echo e(Helper::translation(3087,$translate)); ?>

                    <span class="highlighted">by <?php echo e($item['item']->username); ?></span>
                </h1>
            </div>
        </div>
        
        <div id="demo" class="box jplist"> 
          
            <div class="row pt-2 mx-n2">
                <?php $__currentLoopData = $itemData['item']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                
                    <div class="col-lg-4 col-md-6 col-sm-6 px-2 mb-grid-gutter">
                   
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
    
</body>

</html>
<?php else: ?>
<?php echo $__env->make('503', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\wrappixels\resources\views/item.blade.php ENDPATH**/ ?>