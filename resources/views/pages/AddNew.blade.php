
@extends('Head')
@section('AddNew')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 mt-4">
                
                <h4 class="text-uppercase text-center">Add new sales representative</h4>

                <hr>

                <div class="card border-0 rounded-0 shadow">
                    <div class="card-body">

                    <a href="{{url('index')}}">
                        <button type="button" class="btn btn-success btn-sm mb-4">Back</button>
                    </a>    

                    {{-- sucess message  --}}
                    @if(Session::get('msg')!="")
                                <div class="alert alert-primary text-center" role="alert">
                                    {{Session::get('msg')}}
                                </div>
                    @endif

                    <form method="POST" action="{{route('add-new-salesRep')}}">

                        @csrf

                        <div class="form-group mt-3">
                            <label class="small">Full Name</label>
                            <br>
                            <input type="text" class="form-control @error('full_name') is-invalid @enderror" placeholder="Full Name" name='full_name'>
                            @error('full_name')
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group mt-3">
                            <label class="small">Email</label>
                            <br>
                            <input type="email" class="form-control @error('email_address') is-invalid @enderror" placeholder="Email Address" name='email_address'>
                            @error('email_address')
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group mt-3">
                            <label class="small">Teliphone</label>
                            <br>
                            <input type="number" class="form-control @error('teliphone') is-invalid @enderror" placeholder="Teliphone Number" name='teliphone'>
                            @error('teliphone')
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group mt-3">
                            <label class="small">Joind Date</label>
                            <br>
                            <input type="date" class="form-control @error('joind_date') is-invalid @enderror" placeholder="Joind date" name='joind_date'>
                            @error('joind_date')
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group mt-3">
                            {{-- <div class="form-group"> --}}
                                <label class="small"> Current Route</label>
                                <br>
                                <select class="form-control" name="current_route">
                                    <option value="Route one">one</option>
                                    <option value="Route two">two</option>
                                    <option value="Route tree">tree</option>
                                    <option value="Route four">four</option>
                                    <option value="Route Five">Five</option>
                                </select>
                                @error('joind_date')
                                    <span class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            {{-- </div> --}}
                        </div>

                        <div class="form-group mt-3">
                                <label class="small">Comments</label>
                                <br>
                                <textarea class="form-control" name="Comments" 
                                rows="4" ></textarea>
                                @error('Comments')
                                    <span class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>


                    

                        <div class="input-group mt-3">
                            <button class="btn btn-primary btn-block rounded-0 border-0 shadow-sm">Add New</button>
                        </div>
                    </form>
                    </div>
                </div>

                
            </div>
        </div>
    </div>

 
    
@endsection