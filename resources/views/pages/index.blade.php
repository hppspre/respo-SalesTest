
@extends('Head')
@section('SalesTeam')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 mt-4">

                <h4 class="text-uppercase text-center">List of Sales Team</h4>

                <hr>

                <a href="{{url('/add-new')}}">
                    <button type="button" class="btn btn-success btn-sm mb-4">Add New</button>
                </a>
                

                <table class="table table-dark shadow">
                    <thead>
                      <tr>
                        <th scope="col">ID </th>
                        <th scope="col">Full Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Teliphone</th>
                        <th scope="col">Joind Date</th>
                        <th scope="col">Current Route</th>
                        <th scope="col">View</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                      </tr>
                    </thead>
                    <tbody>
                        @if(count($data)===0)
                        <div class="col-md-12 text-center text-uppercase text-uppercase">
                          Sorry data not found please add the data  
                        </div>


                        @else
                          @foreach ($data as $item)
                            <tr>

                              <th scope="row">{{$item->id}}</th>
                              <td>{{$item->full_name}}</td>
                              <td>{{$item->Email_address}}</td>
                              <td>{{$item->Teliphone}}</td>
                              <td>{{$item->joind_date}}</td>
                              <td>{{$item->current_route}}</td>

                              <td><button type="button" class="btn btn-primary btn-sm view"
                                data-name={{$item->full_name}}
                                data-email={{$item->Email_address}}
                                data-teli={{$item->Teliphone}}
                                data-joindate={{$item->joind_date}}
                                data-currentRoute={{$item->current_route}}
                                data-comment={{$item->Comments}}
                                >View</button>
                              </td>

                              <td>
                                <a href="{{route('get-salesRep-data',['id'=>$item->id])}}">
                                  <button type="button" class="btn btn-warning btn-sm">Edit</button>
                                </a>
                              </td>
                              <td><button type="button" class="btn btn-danger btn-sm drop" data-id={{$item->id}}>Delete</button></td>
                            </tr>

                          @endforeach
                        @endif
                      
                    </tbody>
                  </table>
            </div>
        </div>
    </div>



   <!-- The Modal for data-->
    <div class="modal" id="sales_data">
      <div class="modal-dialog">
        <div class="modal-content">

          <!-- Modal Header -->
          <div class="modal-header">
            <h4 class="modal-title" class="name"></h4>
          </div>

          <!-- Modal body -->
          <div class="modal-body">
            <table class="table table-dark">
              <thead>
                <tr>
                  <th scope="col">Name</th>
                  <th scope="col" class="name"></th>
                </tr>  
                <tr>
                  <th scope="col">Email Address</th>
                  <th scope="col" class="email"></th>
                </tr>  
                <tr>
                  <th scope="col">Teliphone</th>
                  <th scope="col" class="teli"></th>
                </tr>
                <tr>
                  <th scope="col">Joind Date</th>
                  <th scope="col" class="joindate"></th>
                </tr>
                <tr>
                  <th scope="col">Current Route</th>
                  <th scope="col" class="currentRoute"></th>
                </tr>
                <tr>
                  <th scope="col">Comments</th>
                  <th scope="col" class="comment"></th>
                </tr>
              </thead>
            </table>
          </div>

          <!-- Modal footer -->
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          </div>

        </div>
      </div>
    </div>

 
    
@endsection