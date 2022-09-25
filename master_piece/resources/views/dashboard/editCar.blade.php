@extends('dashboard.common.master2')
@section('content2')
   
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Edit Car</h3>

            </div>
            <div class="row">
            
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">  <a href='/dashboardCar'>  <button class="btn btn-primary me-2">Back</button></a></h4>
                  
                    <form class="forms-sample" action="{{route('dashboardCar.update',$car->id)}}" method="POST" enctype="multipart/form-data">
                       @method('PATCH')
                      @csrf
             <div class="row">

<div class="col form-group">
  <label for="exampleSelectGender">User Id</label>
  <select class="form-control" id="exampleSelectGender" name="user_driver_id" required>
    @foreach ($driver as $item) <option value="{{$item->id}}">{{ $item->id}} {{ $item->name }} </option> @endforeach
  </select>
</div>
<div class="row">
  {{-- <div class="form-group"> --}}

    <div class="col form-group">
      <label for="exampleSelectGender">Driver Name</label>
      {{-- <select class="form-control" id="exampleSelectGender" name="driver_fname">
        @foreach ($driver as $item) <option value="{{$item->id}}">{{ $item->name }} </option> @endforeach
      </select> --}}

      <input type="text" class="form-control" id="exampleInputPassword4" placeholder="Driver First Name"
        name="driver_fname" required>
    </div>
    {{--
  </div> --}}
            
              {{-- <div class="form-group"> --}}
                <div class="col form-group">
                  <label for="exampleSelectGender">Driver Last Name</label>
                  <input type="text" class="form-control" id="exampleInputPassword4" placeholder="Driver Last Name"
                    name="driver_lname">
                </div>
                {{--
              </div> --}}
            
            
            </div>
            
            
            <div class="row">
              {{-- <div class="form-group"> --}}
                <div class="col form-group">
                  <label for="exampleSelectGender">Driver Email</label>
                  <input type="text" class="form-control" id="exampleInputPassword4" placeholder="Driver Last Name"
                    name="driver_lname">
                </div>
                {{--
              </div> --}}
            
              {{-- <div class="form-group"> --}}
                <div class="col form-group">
                  <label for="exampleSelectGender">Driver Mobile</label>
                  <input type="text" class="form-control" id="exampleInputPassword4" placeholder="Driver Mobile"
                    name="driver_mobile">
                </div>
                {{--
              </div> --}}
            
            
            </div>
            
            <div class="row">
              {{-- <div class="form-group"> --}}
                <div class="col form-group">
                  <label for="exampleSelectGender">Driver Address</label>
                  <input type="text" class="form-control" id="exampleInputPassword4" placeholder="Driver Address"
                    name="driver_address">
                </div>
                {{--
              </div> --}}
            
              {{-- <div class="form-group"> --}}
                <div class="col form-group">
                  <label for="exampleSelectGender">Driver Gender</label><br>
                  <div class="form-control">
                    <label for="male"> male
                      <input class="" type="radio" id="male" name="gender" value="male"></label>
                    <label for="female">female
                      <input class="" type="radio" id="female" name="gender" value="female"></label>
                  </div>
                </div>
                {{--
              </div> --}}
            
            </div>
            
            
            <div class="row">
              {{-- <div class="form-group"> --}}
                <div class="col form-group">
                  <label for="exampleSelectGender">Driver Image</label>
                  <div class="input-group col-xs-12">
                    <input type="file" name="driver_image">
            
                  </div>
                </div>
                {{--
              </div> --}}
            
              {{-- <div class="form-group"> --}}
                <div class="col form-group">
                  <label for="exampleSelectGender">Driver ID Card</label>
                  <div class="input-group col-xs-12">
                    <input type="file" name="id_card">
            
                  </div>
                </div>
                {{--
              </div> --}}
            
            
            </div>
            
            <hr />
            <h4 style="padding-bottom: 3%">Car Information</h4>
            <div class="row">
              <div class="col form-group">
                <label for="exampleInputEmail3">Car number</label>
                <input type="text" class="form-control" id="exampleInputEmail3" placeholder="Car number" name="car_number">
              </div>
              <div class="col form-group">
                <label for="exampleInputPassword4">Car model</label>
                <input type="text" class="form-control" id="exampleInputPassword4" placeholder="Car model" name="car_model">
              </div>
            </div>
            
            <div class="row">
              <div class="col form-group">
                <label for="exampleInputCity1">Car color</label>
                <input type="text" class="form-control" id="exampleInputCity1" placeholder="Car color" name="car_color">
              </div>
              <div class="col form-group">
                <label for="exampleTextarea1">Car description</label>
                <textarea class="form-control" id="exampleTextarea1" rows="4" name="car_description"></textarea>
              </div>
            </div>
<div class="col form-group">
      <label>Car image upload</label>
      {{-- <input type="file" name="car_image" class="file-upload-default" name="car_image"> --}}
      <div class="input-group col-xs-12">
        <input type="file" name="car_image" required>
        {{-- <span class="input-group-append">
          <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
        </span> --}}
      </div>
    </div>
    <button type="submit" class="btn btn-primary me-2">Submit</button>
    {{-- <button class="btn btn-dark">Cancel</button> --}}
    </form>
</div>
                  </div>
                  </div>
                  
                  
                  </div>
                  </div>
          <!-- content-wrapper ends -->
@endsection