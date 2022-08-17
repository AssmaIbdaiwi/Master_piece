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
                    <h4 class="card-title">    <button class="btn btn-primary me-2">Back</button></h4>
                  
                    <form class="forms-sample" action="{{route('dashboardCar.update',$car->id)}}" method="POST" enctype="multipart/form-data">
                       @method('PATCH')
                      @csrf
                   
                                   <div class="form-group">
                        <label for="exampleSelectGender">Driver Name</label>
                        <select class="form-control" id="exampleSelectGender"  name="driver_id">
                         @foreach ($driver as $item) <option value="{{$item->id}}">{{$item->name}}</option> @endforeach
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3">Car number</label>
                        <input type="text" class="form-control" id="exampleInputEmail3" placeholder="Car number" name="car_number">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword4">Car model</label>
                        <input type="text" class="form-control" id="exampleInputPassword4" placeholder="Car model" name="car_model">
                      </div>

                      <div class="form-group">
                        <label>Car image upload</label>
                        <div class="input-group col-xs-12">
                          <input type="file" class="form-control file-upload-info" placeholder="Upload Image" name="car_image">

                        </div>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputCity1">Car color</label>
                        <input type="text" class="form-control" id="exampleInputCity1" placeholder="Car color" name="car_color">
                      </div>
                      <div class="form-group">
                        <label for="exampleTextarea1">Car description</label>
                        <textarea class="form-control" id="exampleTextarea1" rows="4" name="car_description"></textarea>
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