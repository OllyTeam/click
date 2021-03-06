<!doctype html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="author" content="ThemeStarz">
      <link href=" <?php echo e(asset('https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Varela+Round')); ?>" rel="stylesheet">
      <link rel="stylesheet" href=" <?php echo e(asset('assets/bootstrap/css/bootstrap.css')); ?>" type="text/css">
      <link rel="stylesheet" href=" {asset('assets/fonts/font-awesome.css')}}" type="text/css">
      <link rel="stylesheet" href=" <?php echo e(asset('assets/css/selectize.css')); ?>" type="text/css">
      <link rel="stylesheet" href=" <?php echo e(asset('assets/css/style.css')); ?>">
      <link rel="stylesheet" href=" <?php echo e(asset('assets/css/user.css')); ?>">
      <title>The Link360 - Job Offer & Service Listing</title>
   </head>
   <body>
      <div class="page home-page">
         <!--*********************************************************************************************************-->
         <!--************ HERO ***************************************************************************************-->
         <!--*********************************************************************************************************-->
         <header class="hero">
         <div class="hero-wrapper">
            <!--============ Secondary Navigation ===============================================================-->
            <div class="secondary-navigation">
               <div class="container">
                  <ul class="left">
                     <li>
                        <span>
                        <i class="fa fa-phone"></i> +(250) 789923505
                        </span>
                     </li>
                  </ul>
                  <!--end left-->
                  
                     <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
                        <div class="container">
                           
                           <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="<?php echo e(__('Toggle navigation')); ?>">
                           <span class="navbar-toggler-icon"></span>
                           </button>
                           <div class="collapse navbar-collapse" id="navbarSupportedContent">
                              <!-- Left Side Of Navbar -->
                              <ul class="navbar-nav mr-auto">
                              </ul>
                              <!-- Right Side Of Navbar -->
                              <ul class="navbar-nav ml-auto">
                                 <!-- Authentication Links -->
                                 <?php if(auth()->guard()->guest()): ?>
                                 <li class="secondary-navigation">
                                    <a class="fa fa-sign-in" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
                                 </li>
                                 <li class="secondary-navigation">
                                    <a class="fa fa-pencil-square-o" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a>
                                 </li>
                                 <?php else: ?>
                                 <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                       <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                          onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();">
                                       <?php echo e(__('Logout')); ?>

                                       </a>
                                       <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                          <?php echo csrf_field(); ?>
                                       </form>
                                    </div>
                                 </li>
                                 <?php endif; ?>
                              </ul>
                           </div>
                        </div>
                     </nav>
                     
                  <!--end right-->
               </div>
               <!--end container-->
            </div>
            <!--============ End Secondary Navigation ===========================================================-->
            <!--============ Main Navigation ====================================================================-->
            <div class="main-navigation">
               <div class="container">
                  <nav class="navbar navbar-expand-lg navbar-light justify-content-between">
                     <a class="navbar-brand" href="index">
                     <img src="assets/img/logo1.png" alt="">
                     </a>
                     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                     <span class="navbar-toggler-icon"></span>
                     </button>
                     
                     <!--end navbar-collapse-->
                  </nav>
                  <!--end navbar-->
               </div>
               <!--end container-->
            </div>
            <!--============ End Main Navigation ================================================================-->
            <form method="POST" action="<?php echo e(route('register')); ?>" aria-label="<?php echo e(__('Register')); ?>">
            <div class="form-group row">
               <label for="fname" class="col-md-4 col-form-label text-md-right"><?php echo e(__('First Name')); ?></label>
               <div class="col-md-6">
                  <input id="fname" type="text" class="form-control<?php echo e($errors->has('fname') ? ' is-invalid' : ''); ?>" placeholder="First Name" name="fname" value="<?php echo e(old('fname')); ?>" required autofocus>
                  <?php if($errors->has('fname')): ?>
                  <span class="invalid-feedback" role="alert">
                  <strong><?php echo e($errors->first('fname')); ?></strong>
                  </span>
                  <?php endif; ?>
               </div>
            </div>
            <div class="form-group row">
               <label for="lname" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Last Name')); ?></label>
               <div class="col-md-6">
                  <input id="lname" type="text" class="form-control<?php echo e($errors->has('lname') ? ' is-invalid' : ''); ?>" name="lname" value="<?php echo e(old('lname')); ?>" placeholder="Last Name" required autofocus>
                  <?php if($errors->has('lname')): ?>
                  <span class="invalid-feedback" role="alert">
                  <strong><?php echo e($errors->first('lname')); ?></strong>
                  </span>
                  <?php endif; ?>
               </div>
            </div>
            <div class="form-group row">
               <label for="email" class="col-md-4 col-form-label text-md-right"><?php echo e(__('E-Mail ')); ?></label>
               <div class="col-md-6">
                  <input id="email" type="email" class="form-control<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>" name="email" value="<?php echo e(old('email')); ?>" required>
                  <?php if($errors->has('email')): ?>
                  <span class="invalid-feedback" role="alert">
                  <strong><?php echo e($errors->first('email')); ?></strong>
                  </span>
                  <?php endif; ?>
               </div>
            </div>
            <div class="form-group row">
               <label for="date" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Date Of Birth')); ?></label>
               <div class="col-md-6">
                  <input id="dob" type="date" class="form-control<?php echo e($errors->has('name') ? ' is-invalid' : ''); ?>" name="dob" value="<?php echo e(old('date')); ?>" required autofocus>
                  <?php if($errors->has('date')): ?>
                  <span class="invalid-feedback" role="alert">
                  <strong><?php echo e($errors->first('date')); ?></strong>
                  </span>
                  <?php endif; ?>
               </div>
            </div>
            <div class="form-group row">
               <label for="name" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Gender')); ?></label>
               <label class="framed">
               <input type="radio" name="type" value="1" required>
               Male
               </label>
               <label class="framed">
               <input type="radio" name="type" value="2" required>
               Female
               </label>
               <div class="col-md-6">
                  <?php if($errors->has('gender')): ?>
                  <span class="invalid-feedback" role="alert">
                  <strong><?php echo e($errors->first('gender')); ?></strong>
                  </span>
                  <?php endif; ?>
               </div>
            </div>
            <div class="form-group row">
               <label for="name" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Phone')); ?></label>
               <div class="col-md-6">
                  <input id="phone" type="number"  class="form-control<?php echo e($errors->has('phone') ? ' is-invalid' : ''); ?>" name="phone" value="<?php echo e(old('phone')); ?>" autofocus>
                  <?php if($errors->has('phone')): ?>
                  <span class="invalid-feedback" role="alert">
                  <strong><?php echo e($errors->first('phone')); ?></strong>
                  </span>
                  <?php endif; ?>
               </div>
            </div>
            <div class="form-group">
               
               
               <div class="col-md-6">
                  <input id="status" type="hidden" class="form-control<?php echo e($errors->has('phone') ? ' is-invalid' : ''); ?>" name="status" value="2" required autofocus>
                  
               </div>
            </div>
            <!--end form-group-->
            <div class="form-group">
               
               
               <div class="col-md-6">
                  <input id="active" type="hidden" class="form-control<?php echo e($errors->has('name') ? ' is-invalid' : ''); ?>" name="active" value="0" required autofocus>
                  
               </div>
            </div>
            <div class="form-group row">
               <label for="password" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Password')); ?></label>
               <div class="col-md-6">
                  <input id="password" type="password" class="form-control<?php echo e($errors->has('password') ? ' is-invalid' : ''); ?>" name="password" required>
                  <?php if($errors->has('password')): ?>
                  <span class="invalid-feedback" role="alert">
                  <strong><?php echo e($errors->first('password')); ?></strong>
                  </span>
                  <?php endif; ?>
               </div>
            </div>
            <div class="form-group row">
               <label for="password-confirm" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Confirm Password')); ?></label>
               <div class="col-md-6">
                  <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
               </div>
            </div>
            <div class="form-group row mb-0">
               <div class="col-md-6 offset-md-4">
                  <button type="submit" class="btn btn-primary">
                  <?php echo e(__('Register')); ?>

                  </button>
                  <?php echo e(csrf_field()); ?>

               </div>
            </div>
<?php echo Form::close(); ?>

         </div>
      </div>
      
<?php echo $__env->make('layouts.bottom', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>