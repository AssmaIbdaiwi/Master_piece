
@extends('dashboard.common.master2')
@section('content2')
   
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> User Table </h3>
    
            </div>
            <div class="row">
             
              
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title"><a href={{route('dashboardUser.create')}} class="btn btn-primary ">Add</a></h4>
                    <div class="table-responsive">
                      <table class="table table-striped">
                        <thead>
                          
                              
                         
                          <tr>
                            <th> Id </th>
                            <th> User name </th>
                            <th> User image </th>
                             <th> User email </th>
                            <th> User password </th>
                            <th> User mobile </th>
                            <th> User address </th>
                             <th> User action</th>
                          </tr>
                        </thead>
                        <tbody>

                          @foreach ($user as $item)
                          <tr>
                
                            <td> {{$item->id}} </td>
                        
                            <td>
                               {{  $item->name}}
                            </td>
                            <td class="py-1">
                             <img src="{{asset('upload/'.$item->image )}}" alt="">
                            </td>
                            <td> {{$item->email}} </td>
                            <td>{{$item->password}} </td>
                            <td>{{$item->mobile}} </td>
                            <td>{{$item->address}} </td>
                            <td> 
                               <form action=" {{ route('dashboardUser.destroy',$item->id) }}" method="POST"> 
                             <a href="{{route('dashboardUser.edit',$item->id) }}" class="btn btn-secondary"> Edit</a> 
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