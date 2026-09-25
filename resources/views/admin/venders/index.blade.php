@extends('admin.layouts.app')
@section('title','Vendors')
@section('content')
@push('styles')

<style>
  
thead th{
    position:sticky;
    top:0;
    background:#fff;
    z-index:100;
}
.table td,
.table th{
    border:1px solid #e5e7eb;
}
tbody tr:nth-child(even){
    background:#fafafa;
}

tbody tr:hover{
    background:#fff2ee;
}
table td{
    font-size: 0.8rem
}

</style>

@endpush


<div class="page-wrapper"> 
        <!-- Page body -->
        <div class="page-body">
          <div class="container-xl">
            <div class="card">
                <div class="page-header d-print-none">      
                    <div class="container-xl">
                        <div class="row g-2 align-items-center">
                            <div class="col-md-4">
                                <h2 class="page-title">
                                    Venders
                                </h2>
                                <span>Venders Description</span>
                            </div>
                            <div class="col-md-3">
                                <div class="input-icon">
                                    <span class="input-icon-addon">
                                        <svg xmlns="http://www.w3.org/2000/svg" 
                                            class="icon" 
                                            width="24" 
                                            height="24" 
                                            viewBox="0 0 24 24" 
                                            stroke-width="2" 
                                            stroke="currentColor" 
                                            fill="none" 
                                            stroke-linecap="round" 
                                            stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z"/>
                                            <circle cx="10" cy="10" r="7"/>
                                            <line x1="21" y1="21" x2="15" y2="15"/>
                                        </svg>
                                    </span>
                                    <input type="text" 
                                        class="form-control" 
                                        placeholder="Search vendor..."
                                        id="searchVendor">
                                </div>
                            </div>
                            <!-- Page title actions -->
                            <div class="col-auto ms-auto d-print-none"> 
                                <div class="btn-list col-md-4">
                                <a href="{{ route('venders.create') }}" class="btn btn-primary">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 5l0 14" /><path d="M5 12l14 0" /></svg>
                                    Create Vender</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
              <div class="card-body">
                <div id="table-default" class="table-responsive">
                  <table class="table">
                    <thead>
                      <tr class="table-primary">
                        <th>ID</th>
                        <th>Name</th>
                        <th>Company Name</th>
                        <th>Mobile</th>
                        <th>Email</th>
                        <th>GSTIN</th>
                        <th>Pan</th>
                        <th>Address One</th>
                        <th>Address Two</th>
                        <th>City</th>
                        <th>State</th>
                        <th>Pin Code</th>
                        <th>Notes</th>
                        <th>Status</th>
                        <th>Actions</th>
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
                    <tbody class="table-tbody">
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
                                    <td>{{ $item->status }}</td>
                                    <td class="align-middle text-center">
                                    <div class="d-inline-flex align-items-center gap-2"">
                                        <a href="{{ route('venders.edit', $item->vendor_id) }}"
                                        class="btn btn-warning btn-sm">
                                            <i class="ti ti-edit"></i> Edit
                                        </a>
                                        <form action="{{ route('venders.destroy', $item->vendor_id) }}"
                                            method="POST" class="m-0 p-0"
                                            onsubmit="return confirm('Are you sure you want to delete this vendor?');">
                                            @csrf
                                            @method('DELETE')
                                            <button
                                               type="submit"
                                                class="btn btn-danger btn-sm deleteVendor"
                                                data-id="{{ $item->vendor_id }}">
                                                Delete
                                            </button>
                                        </form>
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
              </div>                    
                <div class="d-flex justify-content-end mt-3">
                    {{ $venders->links() }}
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

<script src="{{ asset('assets/js/app.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>

<script>
// $(document).on('click', '.deleteVendor', function () {

//     let id = $(this).data('id');

//     if (!confirm('Are you sure you want to delete this vendor?')) {
//         return;
//     }
//     $.ajax({
//         url: '/venders/' + id,
//         type: 'DELETE',
//         data: {
//             _token: $('meta[name="csrf-token"]').attr('content')
//         },
//         success: function (response) {
//             alert(response.message);
//             location.reload();
//         },
//         error: function () {
//             alert('Something went wrong.');
//         }
//     });

// });

<script>
$(document).ready(function () {

    $('.deleteVendor').click(function () {

        let vendorId = $(this).data('id');
        let row = $(this).closest('tr');

        Swal.fire({
            title: 'Delete Vendor?',
            text: "This action cannot be undone!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#6c757d',
            confirmButtonText: 'Yes, Delete',
            cancelButtonText: 'Cancel'
        }).then((result) => {

            if (result.isConfirmed) {

                $.ajax({
                    url: '/venders/' + vendorId,
                    type: 'POST',
                    data: {
                        _token: $('meta[name="csrf-token"]').attr('content'),
                        _method: 'DELETE'
                    },

                    success: function (response) {

                        row.fadeOut(300, function () {
                            $(this).remove();
                        });

                        Swal.fire({
                            icon: 'success',
                            title: 'Deleted!',
                            text: response.message,
                            timer: 1800,
                            showConfirmButton: false
                        });

                    },

                    error: function () {

                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: 'Something went wrong!'
                        });

                    }

                });

            }

        });

    });

});
</script>

</script>