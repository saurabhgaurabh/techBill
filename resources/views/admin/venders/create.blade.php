@extends('admin.layouts.app')
@section('title','Create Vendor')
@section('content')

<div class="page-body">
    <div class="container-xl">
        <div class="page-header d-print-none mb-3">
            <div class="row align-items-center">
                <div class="col">
                    {{-- <h2 class="page-title">
                        Create Vendor
                    </h2> --}}
                </div>
                <div class="col-auto">
                    <a href="{{ route('venders.index') }}" class="btn btn-orange">
                        Back
                    </a>
                </div>
            </div>
        </div>
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">
                Create Vender
            </h3>
            <div class="ms-auto">
                    
                <label class="form-check form-switch">
                    <input class="form-check-input"                      
                     <a href="#" class="btn btn-primary d-none d-sm-inline-block" data-bs-toggle="modal" data-bs-target="#without-gst-modal-report">
                    </a>
                    <span class="form-check-label"> Without GSTIN </span>
                </label>
            </div>
</div>

            <form action="{{ route('venders.store') }}" method="POST">
                @csrf
                <div class="card-body">
                    <div class="row">   
                        <h2 class="card-title">Basic Information</h2>
                        <div class="row">        
                            <div class="col-md-3 mb-2">
                                <label class="form-label">Name*</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" name="name" placeholder="Your Name">
                                    @error('name') <span class="text-danger"> {{ $message }} </span>  @enderror
                            </div>
                            <div class="col-md-3 mb-2">
                                <label class="form-label">Company Name*</label>
                                <input type="text" class="form-control @error('company_name') is-invalid @enderror" value="{{old('company_name')}}" name="company_name" placeholder="Your Company Name">
                                @error('company_name') <span class="text-danger">{{$message}}</span>@enderror
                            </div>
                            <div class="col-lg-3 mb-2">
                                <label class="form-label">Mobile*</label>    
                                <input type="number" class="form-control @error('mobile') is-invalid @enderror" value="{{old('mobile')}}" maxlength="10" name="mobile" placeholder="Your Mobile">
                                @error('mobile') <span class="text-danger">{{$message}}</span> @enderror
                            </div>
                            <div class="col-lg-3 mb-2">
                                <label class="form-label">E-Mail</label>    
                                <input type="email" class="form-control" name="email" placeholder="Your Customer E-Mail">
                            </div>
                        </div>
                    </div></br>
                    <div class="row">
                        <h2 class="card-title">GST/Tax/Identity</h2>
                        <div class="col-lg-3 mb-2">
                            <label class="form-label">GSTIN*</label>    
                            <input type="text" class="form-control @error('gstin') is-invalid @enderror" value="{{old('gstin')}}" name="gstin" placeholder="Your Customer GSTIN Number">
                           @error('gstin') <span class="text-danger">{{$message}}</span> @enderror
                        </div>
                        <div class=" col-lg-3 mb-2">
                            <label class="form-label">Pan*</label>    
                            <input type="text" class="form-control @error('pan') is-invalid @enderror" value="{{old('pan')}}" name="pan" placeholder="Your Permanent Account Number">
                             @error('pan') <span class="text-danger">{{$message}}</span> @enderror
                        </div>
                        <div class=" col-lg-3 mb-2">
                            <label class="form-label">Document ID</label>    
                            <input type="file" class="form-control" name="document_id" placeholder="Your Document ID">
                        </div>
                    </div></br>
                    <div class="row">
                        <h2 class="card-title">Address Information</h2>
                        <div class="col-lg-3 mb-2">
                            <label class="form-label">Address Line1*</label>    
                            <input type="longtext" class="form-control @error('address_line1') is-invalid @enderror" value="{{old('address_line1')}}" name="address_line1" placeholder="Your AddressLine1">
                             @error('address_line1') <span class="text-danger">{{$message}}</span> @enderror
                        </div>
                        <div class="col-lg-3 mb-2">
                            <label class="form-label">Address Line2</label>    
                            <input type="longtext" class="form-control" name="address_line2" placeholder="Your AddressLine2">
                        </div>
                        <div class="col-lg-2 mb-2">
                            <label class="form-label">City</label>    
                            <input type="text" class="form-control" name="city" placeholder="Your City">
                        </div>
                        <div class="col-lg-2 mb-2">
                            <label class="form-label">State</label>    
                            <input type="text" class="form-control" name="state" placeholder="Your State">
                        </div>
                        <div class="col-lg-2 mb-2">
                            <label class="form-label">Pin Code</label>    
                            <input type="number" class="form-control @error('pincode') is-invalid @enderror" value="{{old('pincode')}}" name="pincode" placeholder="Your Pin Code">
                               @error('pincode') <span class="text-danger">{{$message}}</span> @enderror
                        </div>
                        <div class="col-lg-6 mb-2">
                            <label class="form-label">Notes</label>    
                            <input type="longtext" class="form-control" name="notes" placeholder="Your Notes ">
                        </div>
                    </div>  
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-orange ms-auto">
                            <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 5l0 14" /><path d="M5 12l14 0" /></svg>
                            Create Vender
                        </button>
                    </div>
            </form>     
        </div>
    </div>
</div>

<div class="modal modal-blur fade" id="without-gst-modal-report" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <form action="{{ route('withoutgst.store') }}" method="POST">
            @csrf
            <div class="modal-header">
            <h5 class="modal-title">Create Unregister Vender </h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">        
                    <div class="col-md-6 mb-2">
                        <label class="form-label">Name*</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" name="name" placeholder="Your Name">
                            @error('name') <span class="text-danger"> {{ $message }} </span>  @enderror
                    </div>                           
                    <div class="col-lg-6 mb-2">
                        <label class="form-label">Mobile*</label>    
                        <input type="number" class="form-control @error('mobile')vis-invalid @enderror" maxlength="10" name="mobile" placeholder="Your Mobile">
                        @error('mobile') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-link link-secondary" data-bs-dismiss="modal">
                    Cancel
                </button>
                <button type="submit" class="btn btn-orange ms-auto">
                    <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 5l0 14" /><path d="M5 12l14 0" /></svg>
                    Create Vender
                </button>
            </div>
            </form>
        </div>
    </div>
</div>

@endsection




