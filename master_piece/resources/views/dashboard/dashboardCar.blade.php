
@extends('dashboard.common.master2')
@section('content2')
   
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Car Table </h3>
    
            </div>
            <div class="row">
             
              
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title"><a href={{route('dashboardCar.create')}} class="btn btn-primary ">Add</a></h4>
                    <div class="table-responsive">
                      <table class="table table-striped">
                        <thead>
                          
                              
                         
                          <tr>
                            <th> Id </th>
                            <th> Driver name </th>
                            <th> Driver email </th>
                            <th> Driver mobile number </th>
                       
                            <th> Car image </th>
                             <th> Car number </th>
                            <th> Car model </th>
                            <th> Car color </th>
                            <th> Car description </th>
                             <th> Car action</th>
                          </tr>
                        </thead>
                        <tbody>

                          @foreach ($car as $item)
                          <tr>
                
                            <td> {{$item->id}} </td>
                        
                            <td>
                               {{  $item->driver_fname}} {{ $item->driver_lname}}
                            </td>
                            <td>
                                    {{ $item->driver_email}} 
                                  </td>
                                  <td>
                                    {{ $item->driver_mobile}}
                                  </td>
                            <td class="py-1">
                             <img src="{{asset('upload/'.$item->car_image )}}" alt="">
                            </td>
                            <td> {{$item->car_number}} </td>
                            <td>{{$item->car_model}} </td>
                            <td>{{$item->car_color}} </td>
                            <td>{{$item->car_description}} </td>
                            <td> 
                               <form action=" {{ route('dashboardCar.destroy',$item->id) }}" method="POST"> 
                             <a href="{{route('dashboardCar.edit',$item->id) }}" class="btn btn-secondary"> Edit</a> 
                              @csrf
                      @method('DELETE')
                              <button class="btn btn-danger" type="submit">Delete</button>
                            </td>
                          </tr>
                        @endforeach  

                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
 
   
            </div>
          </div>
          <!-- content-wrapper ends -->


@endsection