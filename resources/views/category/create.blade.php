@include('layouts.admintop') 
    <div class="page-title">
       <div class="container">
          <h1>category</h1>
       </div>
       <!--end container-->
    </div>

    <section class="block">
        <div class="container">
    <!--end col-md-3-->
                <div class="row">
                    <div class="col-md-8">
                        {!! Form::open(['action'=>'CategoryController@store','method'=>'POST']) !!}
                            <div class="form-group row">
                               <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
                               <div class="col-md-6">
                                  <input id="name" type="text" required class="form-control" name="name" placeholder="category Name"  autofocus>
                               </div>
                            </div>
                            <div class="form-group row mb-0">
                               <div class="col-md-8 offset-md-8">
                                  <input type="submit" name="sub" value="Save" class="btn btn-primary">
                               </div>
                            </div>
                        {!! Form::close() !!} 
                    </div>  
                </div>
        </div>
    </section>
