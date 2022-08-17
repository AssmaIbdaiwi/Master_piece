   @extends('dashboard.common.master2')
@section('content2')
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Add user </h3>

            </div>
            <div class="row">
            
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">    <button class="btn btn-primary me-2">Back</button></h4>
                  
                    <form class="forms-sample" action="{{route('dashboardUser.store')}}" method="POST" enctype="multipart/form-data">
                      @csrf
                                   {{-- <div class="form-group">
                        <label for="exampleSelectGender">Driver Name</label>
                        <select class="form-control" id="exampleSelectGender"  name="driver_id">
                         @foreach ($driver as $item) <option value="{{$item->id}}">{{$item->name}} </option> @endforeach
                        </select>
                      </div> --}}
                      <div class="form-group">
                        <label for="exampleInputEmail3">User name</label>
                        <input type="text" class="form-control" id="exampleInputEmail3"  name="name"  >
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword4">User email</label>
                        <input type="email" class="form-control" id="exampleInputPassword4" name="email" >
                      </div>

                      <div class="form-group">
                        <label>User image upload</label>
                        <div class="input-group col-xs-12">
                          <input type="file" class="form-control file-upload-info" placeholder="Upload Image" name="image">

                        </div>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputCity1">User password</label>
                        <input type="password" class="form-control" id="exampleInputCity1"  name="password"  >
                      </div>
                          <div class="form-group">
                        <label for="exampleInputCity1">User mobile</label>
                        <input type="text" class="form-control" id="exampleInputCity1"  name="mobile" >
                      </div>
                                   <div class="form-group">
                        <label for="exampleInputCity1">User address</label>
                        <input type="text" class="form-control" id="exampleInputCity1"  name="address" >
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