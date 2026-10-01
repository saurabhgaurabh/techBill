@extends('admin.layouts.app')
@section('title','Vendors')
@section('content')
@push('styles')
<link href="{{asset('dist/css/vendors.css')}}" rel="stylesheet">
@endpush


<div class="page-wrapper"> 
    <div class="page-body">
        <div class="container-xl">
            <div class="card">
                <div class="page-header d-print-none">      
                    <div class="container-xl">
                        <div class="row g-2 align-items-center">
                            <div class="col-md-12">
                               <form action="{{ route('venders.index') }}" method="GET">
                                <div class="d-flex align-items-center gap-2">
                                        <div class="input-icon">
                                            <span class="input-icon-addon">
                                                {{-- <i class="ti ti-search"></i> --}}
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="18" height="18" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"fill="none"><circle cx="10" cy="10" r="7"/> <line x1="21" y1="21" x2="15" y2="15"/> </svg>
                                            </span>
                                            <input
                                                type="text"
                                                name="search"
                                                id="searchVendor"
                                                class="form-control"
                                                placeholder="Search vendor..."
                                                value="{{ request('search') }}">

                                            </form>
                            </div>
                            <!-- Search + Create Button -->
                            <div class="col-auto ms-auto d-print-none">   
                                    <a href="{{ route('venders.create') }}" class="btn btn-orange btn-quare">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="18" height="18" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"><path stroke="none" d="M0 0h24v24H0z"/> <path d="M12 5l0 14"/>  <path d="M5 12l14 0"/>   </svg>
                                        Create Vendor
                                    </a>
                                      </div >
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="card-body"> --}}
                    <div id="table-default" class="table-responsive  vendor-table-wrapper">
                        <table class="table vendor-table table-hover">
                        <thead>
                            <tr class="table-primary">
                            <th>Id</th>
                            <th>Name</th>
                            <th>Company Name</th>
                            <th>Mobile</th>
                            <th>E-mail</th>
                            <th>Gst </th>
                            <th>Pan</th>
                            <th>Address One</th>
                            <th>Address Two</th>
                            <th>City</th>
                            <th>State</th>
                            <th>Pin Code</th>
                            <th>Notes</th>
                            <th>Status</th>
                            <th class="sticky-action">Actions</th>
                            </tr>
                        </thead>
                        {{-- <tbody class="table-tbody">  
                            @foreach ($venders->sortBy('vendors_id') as $item)                    
                            <tr>
                                <td>{{ $item->vendor_id }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->company_name }}</td>
                                <td>{{ $item->mobile }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->gstin }}</td>
                                <td>{{ $item->pan }}</td>
                                <td>{{ $item->address_line1 }}</td>
                                <td>{{ $item->notes }}</td>
                            </tr>
                            @endforeach
                        </tbody> --}}
                        <tbody class="table-tbody" id="vendorTable">
                            @forelse ($venders->sortBy('vendors_id') as $item)  
                                <tr>
                                    <td>{{ $item->vendor_id }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->company_name }}</td>
                                        <td>{{ $item->mobile }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>{{ $item->gstin }}</td>
                                        <td>{{ $item->pan }}</td>
                                        <td>{{ $item->address_line1 }}</td>
                                        <td>{{ $item->address_line2 }}</td>
                                        <td>{{ $item->city }}</td>
                                        <td>{{ $item->state }}</td>
                                        <td>{{ $item->pincode }}</td>
                                        <td>{{ $item->notes }}</td>
                                        <td>
                                            @if($item->status == 1)
                                            <span class="text-green">Active</span>
                                            @elseif($item->status == 0)
                                            <span class="text-red">Inactive</span>
                                            @elseif($item->status == 2)
                                            <span class=" text-yellow">Pending</span>
                                            @else
                                            <span class="text-secondary">Unknown</span>
                                            @endif
                                        </td>
                                        {{-- <td class="text-center">
                                            <div class="d-flex justify-content-center align-items-center gap-2">
                                                  <a href="{{ route('venders.edit',$item->vendor_id) }}" class="" title="Edit">
                                           Edit
                                                </a>
                                            </div>
                                        </td> --}}
                                        <td class="sticky-action text-center">
                                            <div class="dropdown">
                                                <!-- Three Dots Toggle Button -->
                                                <button class="btn btn-light btn-icon" type="button" data-bs-toggle="dropdown" aria-expanded="false" title="Actions">
                                                    <svg xmlns="http://w3.org" class="icon icon-tabler icon-tabler-dots-vertical" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <circle cx="12" cy="12" r="1"></circle>
                                                        <circle cx="12" cy="19" r="1"></circle>
                                                        <circle cx="12" cy="5" r="1"></circle>
                                                    </svg>
                                                </button>                      
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="{{ route('venders.show', $item->vendor_id) }}">
                                                        <svg xmlns="http://w3.org" class="icon dropdown-item-icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" /><path d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" /></svg>
                                                        View
                                                    </a>
                                                    <a class="dropdown-item" >
                                                        <svg xmlns="http://w3.org" class="icon dropdown-item-icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 20h4l10.5 -10.5a2.828 2.828 0 1 0 -4 -4l-10.5 10.5v4" /><path d="M13.5 6.5l4 4" /></svg>
                                                        Edit
                                                    </a>
                                                    <a class="dropdown-item" >
                                                        <svg xmlns="http://w3.org" class="icon dropdown-item-icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 17v2a2 2 0 0 0 2 2h12a2 2 0 0 0 2 -2v-2" /><path d="M7 11l5 5l5 -5" /><path d="M12 4v12" /></svg>
                                                        Download
                                                    </a>
                                                    <div class="dropdown-divider"></div>
                                                    <form action="{{ route('venders.destroy', $item->vendor_id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this vendor?');">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="dropdown-item text-danger w-100 text-start">
                                                            <svg xmlns="http://w3.org" class="icon dropdown-item-icon text-danger" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 7l16 0" /><path d="M10 11l0 6" /><path d="M14 11l0 6" /><path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" /><path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" /></svg>
                                                            Delete
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                            @empty
                                <tr>
                                    <td colspan="12" class="text-center">
                                        No Data Found
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                        </table>
                    </div>
                {{-- </div>                     --}}
                <div class="d-flex justify-content-end mt-3 custom-pagination">
                    {{-- {{ $venders->links()}} --}}
                    {{ $venders->withQueryString()->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
      

<div class="modal modal-blur fade" id="customer-modal-report" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="
    modal-dialog modal-lg modal-dialog-centered
     {{-- modal-dialog modal-full-width modal-dialog-centered --}}
     " role="document">
        <div class="modal-content">
            <form action="{{ route('venders.store') }}" method="POST">
            @csrf
            <div class="modal-header">
            <h5 class="modal-title">Create Customer</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">   
                <h2 class="card-title">Basic Information</h2>
                <div class="row">        
                    <div class="col-md-3 mb-2">
                        <label class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Your Name">
                    </div>
                    <div class="col-md-3 mb-2">
                        <label class="form-label">Company Name</label>
                        <input type="text" class="form-control" name="company_name" placeholder="Your Company Name">
                    </div>
            </div>
              </br>
            <div class="row">
                <h2 class="card-title">Contact Information</h2>
                <div class="col-lg-4 mb-2">
                    <label class="form-label">Mobile</label>    
                    <input type="number" class="form-control" name="mobile" placeholder="Your Mobile">
                </div>
                <div class="col-lg-4 mb-2">
                    <label class="form-label">E-Mail</label>    
                    <input type="email" class="form-control" name="email" placeholder="Your Customer E-Mail">
                </div>
            </div></br>
            <div class="row">
                <h2 class="card-title">GST/Tax/Identity</h2>
            <div class="col-lg-6 mb-2">
                <label class="form-label">GSTIN</label>    
                <input type="text" class="form-control" name="gstin" placeholder="Your Customer GSTIN Number">
            </div>
            <div class=" col-lg-6 mb-2">
                <label class="form-label">Pan</label>    
                <input type="text" class="form-control" name="pan" placeholder="Your Permanent Account Number">
            </div>
            <div class=" col-lg-6 mb-2">
                <label class="form-label">Document ID</label>    
                <input type="file" class="form-control" name="document_id" placeholder="Your Document ID">
            </div>
            </div></br>
            <div class="row">
                <h2 class="card-title">Address Information</h2>
                <div class="col-lg-6 mb-2">
                    <label class="form-label">Address Line1</label>    
                    <input type="longtext" class="form-control" name="address_line1" placeholder="Your AddressLine1">
                </div>
                <div class="col-lg-6 mb-2">
                    <label class="form-label">Address Line2</label>    
                    <input type="longtext" class="form-control" name="address_line2" placeholder="Your AddressLine2">
                </div>
                <div class="col-lg-6 mb-2">
                    <label class="form-label">City</label>    
                    <input type="text" class="form-control" name="city" placeholder="Your City">
                </div>
                <div class="col-lg-6 mb-2">
                    <label class="form-label">State</label>    
                    <input type="text" class="form-control" name="state" placeholder="Your State">
                </div>
                <div class="col-lg-6 mb-2">
                    <label class="form-label">State Code</label>    
                    <input type="number" class="form-control" name="state_code" placeholder="Your State Code">
                </div>
                <div class="col-lg-6 mb-2">
                    <label class="form-label">Pin Code</label>    
                    <input type="number" class="form-control" name="pin_code" placeholder="Your Pin Code">
                </div>
                <div class="mb-2">
                    <label class="form-label">Notes</label>    
                    <input type="longtext" class="form-control" name="notes" placeholder="Your Notes ">
                </div>
            </div>  
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-link link-secondary" data-bs-dismiss="modal">
                    Cancel
                </button>
                <button type="submit" class="btn btn-primary ms-auto">
                    <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 5l0 14" /><path d="M5 12l14 0" /></svg>
                    Create new report
                </button>
            </div>
            </form>
        </div>
    </div>
</div>

@endsection


</body>
</html>

<script>
$(document).on('click', '.deleteVendor', function () {

    let id = $(this).data('id');

    if (!confirm('Are you sure you want to delete this vendor?')) {
        return;
    }
    $.ajax({
        url: '/venders/' + id,
        type: 'DELETE',
        data: {
            _token: $('meta[name="csrf-token"]').attr('content')
        },
        success: function (response) {
            alert(response.message);
            location.reload();
        },
        error: function () {
            alert('Something went wrong.');
        }
    });

});

document.getElementById('searchVendor').addEventListener('keyup', function () {
    let value = this.value.toLowerCase();
    let rows = document.querySelectorAll('#vendorTable tr');
    rows.forEach(function(row) {
        let text = row.innerText.toLowerCase();
        if(text.includes(value)) {
            row.style.display = "";
        } 
        else {
            row.style.display = "none";
        }
    });
});


</script>
