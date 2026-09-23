<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body>
@include('admin.layouts.header')

{{-- middle content section  starts --}}

@if(session('success'))
<script>
Swal.fire({
    icon: 'success',
    title: 'Success!',
    text: '{{ session('success') }}',
    confirmButtonText: 'OK'
});
</script>
@endif

<div class="page-wrapper">
    <div class="page-header d-print-none">      
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                <!-- Page pre-title -->
                <h2 class="page-title">
                    Customers
                </h2>
                </div>
                <!-- Page title actions -->
                <div class="col-auto ms-auto d-print-none">
                <div class="btn-list">
                    <a href="#" class="btn btn-primary d-none d-sm-inline-block" data-bs-toggle="modal" data-bs-target="#customer-modal-report">
                    <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 5l0 14" /><path d="M5 12l14 0" /></svg>
                    Create Customer
                    </a>
                    {{-- <a href="#" class="btn btn-primary d-sm-none btn-icon" data-bs-toggle="modal" data-bs-target="#modal-report" aria-label="Create new report">
                    <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 5l0 14" /><path d="M5 12l14 0" /></svg>
                    </a> --}}
                </div>
                <div class="btn-list">
                 <a href="{{ route('venders.create') }}" class="btn btn-primary"> Add Vendor</a>
                    {{-- <a href="#" class="btn btn-primary d-sm-none btn-icon" data-bs-toggle="modal" data-bs-target="#modal-report" aria-label="Create new report">
                    <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 5l0 14" /><path d="M5 12l14 0" /></svg>
                    </a> --}}
                </div>
                </div>
            </div>
        </div>
    </div>
        <!-- Page body -->
        <div class="page-body">
          <div class="container-xl">
            <div class="card">
              <div class="card-body">
                <div id="table-default" class="table-responsive">
                  <table class="table">
                    <thead>
                      <tr class="table-primary">
                        <th><button class="table-sort" data-sort="sort-name">Id</button></th>
                        <th><button class="table-sort" data-sort="sort-name">Name</button></th>
                        <th><button class="table-sort" data-sort="sort-type">Company Name</button></th>
                        <th><button class="table-sort" data-sort="sort-city">Mobile</button></th>
                        <th><button class="table-sort" data-sort="sort-city">Email</button></th>
                        <th><button class="table-sort" data-sort="sort-city">GSTIN</button></th>
                        <th><button class="table-sort" data-sort="sort-city">Pan</button></th>
                        <th><button class="table-sort" data-sort="sort-city">Address</button></th>
                        <th><button class="table-sort" data-sort="sort-city">Notes</button></th>
                        <th><button class="table-sort" data-sort="sort-city">Action</button></th>
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
                                    <td>{{ $item->pan }}</td>`
                                    <td>{{ $item->address_line1 }}</td>
                                    <td>{{ $item->notes }}</td>
                                    <td>
                                    <div class="d-flex align-items-center gap-2">
                                        <a href="{{ route('venders.edit', $item->vendor_id) }}"
                                        class="btn btn-sm btn-warning">
                                            <i class="ti ti-edit"></i> Edit
                                        </a>
                                        <form action="{{ route('venders.destroy', $item->vendor_id) }}"
                                            method="POST"
                                            onsubmit="return confirm('Are you sure you want to delete this vendor?');">
                                            @csrf
                                            @method('DELETE')
                                            <button
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
{{-- middle content section  ends --}}

@include('admin.layouts.footer')
<script src="{{ asset('assets/js/app.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
</script>