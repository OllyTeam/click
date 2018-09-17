<?php echo $__env->make('layouts.top', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<div class="page-title">
   <div class="container">
      <h1>Job Offers</h1>
   </div>
   <!--end container-->
</div>
<!--============ End Page Title =====================================================================-->
<div class="background"></div>
<!--end background-->
</div>
<!--end hero-wrapper-->
</header>
<!--end hero-->
<!--*********************************************************************************************************-->
<!--************ CONTENT ************************************************************************************-->
<!--*********************************************************************************************************-->
<section class="content">
   <section class="block">
      <div class="container">
      <div class="row">
         <div class="col-md-3">
            <nav class="nav flex-column side-nav">  
               <a class="nav-link icon" href="#">
               <i class="fa fa-heart"></i>My Profile
               </a>
               <a class="nav-link active icon" href="<?php echo e(url('offer')); ?>">
               <i class="fa fa-user"></i>My job offers 
               </a>
               <a class="nav-link icon" href="<?php echo e(url('/service')); ?>">
               <i class="fa fa-star"></i>My service listings
               </a>
               <a class="nav-link icon" href="change-password.html">
               <i class="fa fa-recycle"></i>My reviews 
               </a>
               <a class="nav-link icon" href="sold-items.html">
               <i class="fa fa-check"></i>Logout
               </a>
            </nav>
         </div>
         <!--end col-md-3-->
         <div class="col-md-9">
            <div class="row">
               <div class="col-md-8">
                  <h2>Insert Job Offer Information</h2>
                  <section>
                     <div class="row">
                        <?php echo e(Form::open(['action'=>'OfferController@store','method'=>'POST'])); ?>

                        <div class="col-md-12">
                           <div class="form-group">
                              <label for="name" class="col-form-label required">Offer Employer Owner Name / Company Name</label>
                              <input name="name" type="text" class="form-control" id="name" value="<?php echo e(old('name')); ?>" placeholder="Your Name" required>
                           </div>
                           <!--end form-group-->
                        </div>
                        <div class="col-md-12">
                           <div class="form-group">
                              <label for="name" class="col-form-label required">Offer Title </label>
                              <input name="title" type="text" class="form-control" id="name" value="<?php echo e(old('title')); ?>" placeholder="Your title" required>
                           </div>
                           <!--end form-group-->
                        </div>
                        <!--end col-md-8-->
                     </div>
                     <!--end row-->
                     <div class="form-group">
                        <label for="location" class="col-form-label required">Category</label>
                        <select  name="category" >
                           <option value="">-</option>
                           <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                           <option value="<?php echo e($item->id); ?>"><?php echo e($item->name); ?></option>
                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                     </div>
                     <!--end form-group-->
                     <div class="form-group">
                        <label for="about" class="col-form-label required">Description</label>
                        <textarea name="description" id="about" class="form-control" rows="4" placeholder="Enter the Description"></textarea>
                     </div>
                     <div class="form-group">
                        <label for="location" class="col-form-label required">Compensation</label>
                        <input type="text" name="compensation" placeholder="Your compensation">
                     </div>
                     <div class="form-group">
                        <div class="row">
                           <div class="col-md-4">
                              <div class="form-group">
                                 <label for="title" class="col-form-label required">Province</label>
                                 <!-- <input type="text" name="province"> -->
                                 <select  name="province" id="province" data-dependent="district" >
                                    <option value="">-</option>
                                    <?php $__currentLoopData = $province; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($item->id); ?>"><?php echo e($item->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                 </select>
                              </div>
                              <!--end form-group-->
                           </div>
                           <div class="col-md-4">
                              <div class="form-group">
                                 <label for="name" class="col-form-label required ">District</label>
                                 <!-- <input type="text" name="district">
                                    </div> -->
                                 <select  name="district" id="district">
                                    <option value="">-</option>
                                    
                                 </select>
                                 <!--end form-group-->
                              </div>
                              <!--end col-md-4-->
                           </div>
                           <div class="col-md-4">
                              <div class="form-group">
                                 <label for="name" class="col-form-label required ">sector</label>
                                 <!-- <input type="text" name="district">
                                    </div> -->
                                 
                                 <!--end form-group-->
                              </div>
                              <!--end col-md-4-->
                           </div>
                        </div>
                        <!--end form-group-->
                  </section>
                  <section>
                  <h2>Personal Info</h2>
                  <div class="form-group">
                  <label for="phone" class="col-form-label required">Phone</label>
                  <input name="phone" type="text" class="form-control" id="phone" placeholder="Your Phone" required pattern="^(\(?\+?[0-9]*\)?)?[0-9_\- \(\)]*$" >
                  </div>
                  <!--end form-group-->
                  <div class="form-group">
                  <label for="email" class="col-form-label required">Email</label>
                  <input name="email" type="email" class="form-control" id="email" placeholder="Your Email" >
                  </div>
                  <!--end form-group-->
                  <div class="form-group">
                  <label for="email" class="col-form-label required">Languages</label>
                  <input name="language" type="text" class="form-control" id="email" placeholder="Your Language" required pattern="[a-zA-Z, ]" >
                  </div>
                  </section>
                  <section class="clearfix">
                  <button type="submit" class="btn btn-primary float-right">Save Changes</button>
                  </section>
                  </div>
                  <!--end col-md-8-->
                  <div class="col-md-4">
                     <!-- <div class="profile-image">
                        <div class="image background-image">
                            <img src="assets/img/author-09.jpg" alt="">
                        </div>
                        <div class="single-file-input">
                             <input type="file" id="user_image" name="user_image"> 
                            <div class="btn btn-framed btn-primary small">Upload a picture</div> 
                        </div>
                        </div> -->
                     <?php echo e(csrf_field()); ?>

                  </div>
                  <!--end col-md-3-->
               </div>
               <?php echo e(Form::close()); ?>

            </div>
         </div>
         <!--end row-->
      </div>
      <!--end container-->
   </section>
   <!--end block-->
</section>
<!--end content-->
<!--  -->



<script>

    $(document).ready(function () {

            $('#province').on('change', function(e){
                if ($(this).val() != '') {


                    var select = $(this).attr("id");
                    var value = $(this).val();
                    var dependent = $(this).data('dependent');
                    var _token = $('input[name="_token"]').val();

                    $.ajax({
                        url: "<?php echo e(url('dynamicdata.fetch')); ?>",
                        method: "POST",
                        data: {
                            select: select,
                            value: value,
                            _token: _token,
                            dependent: dependent
                        },
                        success: function (result) 
                        {
                            $("#"+dependent).html(result);

                            // $.each(result,function(index,item){
                            //    $('.list').append('<option value="">' + item.name + '</option>' );
                            // });

                            // var myDiv = document.getElementById("district2");
                            // document.getElementById("district2").innerHTML = "";

                            // var selectList = document.createElement("select");
                            // selectList.id = "mySelect";
                            // selectList.class = "form";
                            // myDiv.appendChild(selectList);

                            // //Create and append the options
                            // for (var i = 0; i < result.length; i++) 
                            // {
                            //     var option = document.createElement("option");
                            //     option.value = result[i].id;
                            //     option.text = result[i].name;
                            //     selectList.appendChild(option);
                            //     console.log(result[i].id, result[i].name);
                            // }

                        }
                    });
                }
            }); 

        });    
        </script>


<?php echo $__env->make('layouts.bottom', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

