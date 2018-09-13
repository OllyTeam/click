@include('layouts.top')



                <!--============ Hero Form ==========================================================================-->
                <div class="collapse" id="collapseMainSearchForm">
                        <div class="container">
                            <!--Main Form-->
                            
                            <!--end main-search-form-->
                            <!--Alternative Form-->
                    
                            <!--end alternative-search-form-->
                        </div>
                        <!--end container-->
                    <!--end hero-form-->
                </div>
                <!--end collapse-->
                <!--============ End Hero Form ======================================================================-->
                <!--============ Page Title =========================================================================-->
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
                                <a class="nav-link active icon" href="#">
                                    <i class="fa fa-user"></i>My job offers 
                                </a>
                                <a class="nav-link icon" href="{{url('/offer')}}">
                                    <i class="fa fa-heart"></i>My Profile
                                </a>
                                <a class="nav-link icon" href="bookmarks.html">
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
                                                {{ Form::open(['action'=>'OfferController@store','method'=>'POST']) }}
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <label for="name" class="col-form-label required">Offer Employer Owner Name / Company Name</label>
                                                        <input name="name" type="text" class="form-control" id="name" placeholder="Your Name" >
                                                    </div>
                                                    <!--end form-group-->
                                                </div>
                                                <!--end col-md-8-->
                                            </div>
                                            <!--end row-->
                                            <div class="form-group">
                                                <label for="location" class="col-form-label required">Position</label>
                                                <input name="location" type="text" class="form-control" id="input-location2" placeholder="Your Location"  >
                                            </div>
                                            <!--end form-group-->
                                            <div class="form-group">
                                                <label for="about" class="col-form-label required">Description</label>
                                                <textarea name="about" id="about" class="form-control" rows="4" placeholder="Enter the Description"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="location" class="col-form-label required">Compensation</label>
                                                <input name="location" type="text" class="form-control" id="input-location2" placeholder="Your Location"  >
                                            </div>
                                            <div class="form-group">
                                                    <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label for="title" class="col-form-label required">Province</label>
                                                        <select  name="province" data-dependent="district"  id="province" >
                                                                        <option value="">-</option>
                                                                        @foreach($province as $item)
                                                                            <option value="{{$item->id}}">{{$item->name}}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                                <!--end form-group-->
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                <label for="name" class="col-form-label required ">District</label>
                                                                    <div id="district2" >
                                                                        <select name="sector">
                                                                            
                                                                        </select>
                                                                    
                                                                    </div>
                                                                </div>
                                                                <!--end form-group-->
                                                            </div>
                                                            <!--end col-md-4-->
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label for="name" class="col-form-label required">Sector</label>
                                                                
                                                                    <div id="sector" name="sector2">
                                                                        <select></select>
                                                                    </div>
                                                                </div>
                                                                <!--end form-group-->
                                                            </div>
                                                    </div>
                                            </div>
                                            <!--end form-group-->
                                        </section>

                                        <section>
                                            <h2>Personal Info</h2>
                                            <div class="form-group">
                                                <label for="phone" class="col-form-label required">Phone</label>
                                                <input name="phone" type="text" class="form-control" id="phone" placeholder="Your Phone" >
                                            </div>
                                            <!--end form-group-->
                                            <div class="form-group">
                                                <label for="email" class="col-form-label required">Email</label>
                                                <input name="email" type="email" class="form-control" id="email" placeholder="Your Email" >
                                            </div>
                                            <!--end form-group-->
                                             <div class="form-group">
                                                <label for="email" class="col-form-label required">Languages</label>
                                                <input name="Language" type="text" class="form-control" id="email" placeholder="Your Language">
                                            </div>
                                        </section>

                                        <section class="clearfix">
                                            <button type="submit" class="btn btn-primary float-right">Save Changes</button>
                                        </section>
                                    </div>
                                    <!--end col-md-8-->
                                    <div class="col-md-4">
                                        <div class="profile-image">
                                            <div class="image background-image">
                                                <img src="assets/img/author-09.jpg" alt="">
                                            </div>
                                            <div class="single-file-input">
                                                <!-- <input type="file" id="user_image" name="user_image"> -->
                                                <div class="btn btn-framed btn-primary small">Upload a picture</div>
                                            </div>
                                        </div>
                                        {{  csrf_field() }}
                                    </div>
                                    <!--end col-md-3-->
                                </div>
                                {{ Form::close() }}
                        </div>
                    </div>
                    <!--end row-->
                </div>
                <!--end container-->
            </section>
            <!--end block-->
        </section>
        <!--end content-->
       <script>

$(document).ready(function(){

    $('#province').on('change',function(e){
        if($(this).val() != '')
        {

                var select = $(this).attr("id");
                var value = $(this).val();
                var dependent = $(this).data('dependent');
                var _token = $('input[name="_token"]').val();

                $.ajax({
                            url:"{{url('dynamicdata.fetch')}}",
                            method:"POST",
                            data:{select:select, value:value, _token:_token,dependent:dependent},
                            success:function(result)
                            {

                                     var myDiv = document.getElementById("district2");
                                     document.getElementById("district2").innerHTML = ""; 
                                     document.getElementById("sector").value =""; 

                                    

                                    var selectList = document.createElement("select");
                                    selectList.id = "mySelect";
                                    selectList.name = "district";
                                    myDiv.appendChild(selectList);

                                    //Create and append the options
                                    for (var i = 0; i < result.length; i++) 
                                    {
                                        var option = document.createElement("option");
                                         option.value = result[i].id;
                                         option.text = result[i].name;
                                         selectList.appendChild(option);
                                         console.log(result[i].id,result[i].name);
                                    }

                            }
                        });
        }   
    });
///--------------------------------------------------------------------------------------------------

    $('#district2').on('click',function(){
        var value2 = $("#mySelect").val();
        if (value2 != "")
        {
            $.ajax({
                    url:"{{url('dynamicdata2.fetch')}}",
                    method:"POST",
                    data:{value2:value2,_token: '{!! csrf_token() !!}'},
                        success:function(data)
                        {
                            var myDiv2 = document.getElementById("sector");
                            myDiv2.innerHTML = "";

                            var selectList2 = document.createElement("select");
                            selectList2.id = "mySelect2";
                            selectList2.name = "sector";
                            myDiv2.appendChild(selectList2);

                                for(var j = 0; j < data.length; j++)
                                {
                                    var option2 = document.createElement("option");
                                    option2.value = data[j].id;
                                    option2.text = data[j].name;
                                    selectList2.appendChild(option2);
                                    console.log(data[j].id,data[j].name);
                                }
                        }
                    });
        }
        
    });


//-----------------------------------------------------------------------------------------------    
});    

</script>

@include('layouts.bottom')

