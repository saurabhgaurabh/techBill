@extends('admin.layouts.app')

@section('title','Create Vendor')


@section('content')

<div class="page-body">
    <div class="container-xl">
        <div class="page-header d-print-none mb-3">
            <div class="row align-items-center">
                <div class="col">
                    <h2 class="page-title">
                        Create Vendor
                    </h2>
                </div>
                <div class="col-auto">
                    <a href="{{ route('venders.index') }}" class="btn btn-secondary">
                        Back
                    </a>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">
                    Add Vendor
                </h3>
            </div>
            <form action="{{ route('venders.store') }}" method="POST">
                @csrf
                <div class="card-body">
                    <div class="row">   
                        <h2 class="card-title">Basic Information</h2>
                        <div class="row">        
                            <div class="col-md-3 mb-2">
                                <label class="form-label">Name*</label>
                                <input type="text" class="form-control" name="name" placeholder="Your Name">
                            </div>
                            <div class="col-md-3 mb-2">
                                <label class="form-label">Company Name</label>
                                <input type="text" class="form-control" name="company_name" placeholder="Your Company Name">
                            </div>
                            <div class="col-lg-3 mb-2">
                                <label class="form-label">Mobile*</label>    
                                <input type="number" class="form-control" name="mobile" placeholder="Your Mobile">
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
                            <label class="form-label">GSTIN</label>    
                            <input type="text" class="form-control" name="gstin" placeholder="Your Customer GSTIN Number">
                        </div>
                        <div class=" col-lg-3 mb-2">
                            <label class="form-label">Pan</label>    
                            <input type="text" class="form-control" name="pan" placeholder="Your Permanent Account Number">
                        </div>
                        <div class=" col-lg-3 mb-2">
                            <label class="form-label">Document ID</label>    
                            <input type="file" class="form-control" name="document_id" placeholder="Your Document ID">
                        </div>
                    </div></br>
                    <div class="row">
                        <h2 class="card-title">Address Information</h2>
                        <div class="col-lg-3 mb-2">
                            <label class="form-label">Address Line1</label>    
                            <input type="longtext" class="form-control" name="address_line1" placeholder="Your AddressLine1">
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
                        {{-- <div class="col-lg-2 mb-2">
                            <label class="form-label">State Code</label>    
                            <input type="number" class="form-control" name="state_code" placeholder="Your State Code">
                        </div> --}}
                        <div class="col-lg-2 mb-2">
                            <label class="form-label">Pin Code</label>    
                            <input type="number" class="form-control" name="pin_code" placeholder="Your Pin Code">
                        </div>
                        <div class="col-lg-6 mb-2">
                            <label class="form-label">Notes</label>    
                            <input type="longtext" class="form-control" name="notes" placeholder="Your Notes ">
                        </div>
                    </div>  
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary ms-auto">
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

