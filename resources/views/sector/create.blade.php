@include('layouts.admintop')
        <div class="page-title">
           <div class="container">
              <h1>Province</h1>
           </div>
           <!--end container-->
        </div>
        <!--============ End Page Title =====================================================================--><!--end background-->
        <div class="col-md-8">
          {!! Form::open(['action'=>'SectorController@store','method'=>'POST']) !!}
        <div class="form-group row">
          <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('District') }}</label>
           <div class="col-md-6">
              <select name="district">
                 @if(count($districts) > 0)    
                    @foreach($districts as $index => $district)
                      <option value="{{$district->id}}"> {{$district->name}} </option>
                    @endforeach
                 @endif
              </select>
           </div>
        </div>
        <div class="form-group row">
           <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
           <div class="col-md-6">
              <input id="name" type="text" required class="form-control" name="name" placeholder="Sector Name"  autofocus>
           </div>
        </div>
        <div class="form-group row mb-0">
           <div class="col-md-8 offset-md-8">
              <input type="submit" name="sub" value="Save" class="btn btn-primary">
           </div>
        </div>
    {!! Form::close() !!}
        
        </div>    


        