@include('layouts.admintop')
<!--============ Page Title =========================================================================-->
<div class="page-title">
   <div class="container">
      <h1>province</h1>
   </div>
   <!--end container-->
</div>
<!--============ End Page Title =====================================================================-->
<div class="background"></div>
<!--end background-->
</div>
<!--end hero-wrapper-->
</header>
<section class="content">
      <div class="container">
         <div class="row">
            <div class="col-md-3">
               <nav class="nav flex-column side-nav">
                    <a class="nav-link  icon" href="{{url('/home')}}">
                        <i class="fa fa-user"></i>My Profile
                    </a>
                    <a class="nav-link active icon" href="{{url('/province')}}">
                        <i class="fa fa-heart"></i>Province
                    </a>
                    <a class="nav-link icon" href="{{url('/district')}}">
                        <i class="fa fa-star"></i>district
                    </a>
                    <a class="nav-link icon" href="{{url('/sector')}}">
                        <i class="fa fa-recycle"></i>Sector
                    </a>
                    <a class="nav-link icon" href="{{url('/category')}}">
                        <i class="fa fa-check"></i>Category
                    </a>
                    <a href="{{route('logout')}}">
                          Logout
                    </a>
               </nav>
            </div>
            <!--end col-md-3-->
            <div class="col-md-9">
               <div class="row">
                  <div class="col-md-8">
                    <a href="{{ url ('province/create')}}" class="btn btn-primary">Add New Province</a>
                     <br>
                     <br>
                     <span class="col-md-4" style="font-size:18px;">
                        @if(count($pro) > 0)
                        <table class="table" style="">
                           <thead class="thead-dark" style="">
                              <tr>
                                 <th scope="col">No</th>
                                 <th scope="col">Name</th>
                                 <th scope="col">Action</th>
                              </tr>
                           </thead>
                           <tbody>
                              @foreach($pro as $index => $po)
                              <tr>
                                 <th scope="row">{{$index+1}}</th>
                                 <td >{{$po->name}}</td>
                                 <td>
                                    {!! Form::open(['action'=>['ProvinceController@destroy', $po->id ],'method'=>'POST','class'=>'pull-right']) !!} 
                                    {{ Form::hidden('_method','DELETE') }} 
                                    {{ Form::submit('Delete',['class'=>'btn btn-danger']) }}
                                    {!!Form::close()!!}
                                 </td>
                              </tr>
                              @endforeach
                           </tbody>
                        </table>
                        @endif
                     </span>
                  </div>
               </div>
               <!--end col-md-8-->
               <!--end col-md-3-->
            </div>
         </div>
      </div>
      <!--end row-->
      </div>
      <!--end container-->
   </section>
   <!--end block-->
</section>
<!--end content-->
@include('layouts.bottom')