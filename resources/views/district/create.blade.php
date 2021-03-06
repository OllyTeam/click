@include('layouts.admintop')
        <div class="page-title">
           <div class="container">
              <h1>Province</h1>
           </div>
           <!--end container-->
        </div>
        <!--============ End Page Title =====================================================================--><!--end background-->
        <div class="col-md-8">
          {!! Form::open(['action'=>'DistrictController@store','method'=>'POST']) !!}
        <div class="form-group row">
           <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Province') }}</label>
           <div class="col-md-6">
              <select name="province">
                 @if(count($pro) > 0)    
                    @foreach($pro as $index => $po)
                      <option value="{{$po->id}}"> {{$po->name}} </option>
                    @endforeach
                 @endif
              </select>
           </div>
        </div>
        <div class="form-group row">
           <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
           <div class="col-md-6">
              <input id="name" type="text" required class="form-control" name="name" placeholder="District Name"  autofocus>
           </div>
        </div>
        <div class="form-group row mb-0">
           <div class="col-md-8 offset-md-8">
              <input type="submit" name="sub" value="Save" class="btn btn-primary">
           </div>
        </div>
    {!! Form::close() !!}
        
        </div>    


        