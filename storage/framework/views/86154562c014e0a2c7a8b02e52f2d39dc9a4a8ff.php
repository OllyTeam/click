

<?php echo $__env->make('layouts.top', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<!--============ End Main Navigation ================================================================-->
<!--============ Page Title =========================================================================-->
<div class="page-title">
   <div class="container">
      <h1 class="opacity-40 center">
         You <a href="#">think it</a>, We <a href="#">link it</a>
      </h1>
   </div>
   <!--end container-->
</div>
<!--============ End Page Title =====================================================================-->
<!--============ Hero Form ==========================================================================-->

<!--============ End Hero Form ======================================================================-->
<div class="background">
   <div class="background-image original-size">
      <img src="assets/img/hero-background-icons.jpg" alt="">
   </div>
   <!--end background-image-->
</div>
<!--end background-->
</div>
<!--end hero-wrapper-->
</header>
<!--end hero-->
<!--*********************************************************************************************************-->
<!--************ CONTENT ************************************************************************************-->
<!--*********************************************************************************************************-->
<section class="content">
   <!--============ Categories =============================================================================-->

   <!--end block-->
   <!--============ End Categories =========================================================================-->
   <!--============ Featured Ads ===========================================================================-->
   <section class="block">
      <div class="container">
         <div class="row flex-column-reverse flex-md-row">
            <div class="col-md-9" style="min-height: 300px;">
               <!--============SectionTitle===================================================================-->
               <div class="section-title clearfix">
                  <h1>Recent Ads</h1>
               </div>
               <!--============ Items ==========================================================================-->
               <?php $__currentLoopData = $service; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>                            
               <div class="items list grid-xl-3-items grid-lg-3-items grid-md-2-items">
                  <div class="item" >
                     <!--end ribbon-->
                     <div class="wrapper">
                        <div class="image">
                           <h3>
                              <a href="#" class="tag category">
                              <?php echo e($item->category->name); ?>

                              </a>
                              <a href="single-listing-1.html" class="title"><?php echo e($item->title); ?></a>
                              <span class="tag">
                              <?php if($item->type == 1): ?>
                              Offer
                              <?php else: ?>
                              Service
                              <?php endif; ?>
                              </span>
                           </h3>
                           <a href="single-listing-1.html" class="image-wrapper background-image">
                           <img src="assets/img/image-01.jpg" alt="">
                           </a>
                        </div>
                        <!--end image-->
                        <h4 class="">
                           <a href="#">
                           <?php echo e($item->district->name); ?>,<?php echo e($item->province->name); ?>

                           </a>
                        </h4>
                        <div class="meta">
                           <figure>
                              <i class="fa fa-calendar-o"></i><?php echo e($item->created_at); ?>

                           </figure>
                           <figure>
                              <a href="#">
                              <?php echo e($item->user->fname); ?>

                              </a>
                           </figure>
                        </div>
                        <!--end meta-->
                        <div class="description">
                           <p><?php echo e($item->_description); ?></p>
                        </div>
                        <!--end description-->
                        <a href=" <?php echo e(url ('/single',$item->id)); ?> " class="detail text-caps underline">Detail</a>
                     </div>
                  </div>
                  <!--end item-->
               </div>
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
            </div>
            <!--end col-md-9-->
            <!--end col-md-3-->
         </div>
      </div>
      <div class="background" data-background-color="#fff"></div>
      <!--end background-->
   </section>
   <!--============ End Featured Ads =======================================================================-->
</section>
<!--end content-->
<!--*********************************************************************************************************-->
<!--************ FOOTER *************************************************************************************-->
<!--*********************************************************************************************************-->
<?php echo $__env->make('layouts.bottom', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>