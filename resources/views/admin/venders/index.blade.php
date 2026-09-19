<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
                      <tr>
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
                    <tbody class="table-tbody">  
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
                    </tbody>
                  </table>
                </div>
              </div>
                {{-- <div class="card-footer d-flex align-items-center justify-content-between">
                    <p class="m-0 text-muted">
                        Showing 
                        <span>{{ $venders->firstItem() ?? 0 }}</span>
                        to 
                        <span>{{ $venders->lastItem() ?? 0 }}</span>
                        of 
                        <span>{{ $venders->total() }}</span>
                        entries
                    </p> --}}
                    
                  <div class="d-flex justify-content-end mt-3">
    {{ $venders->links() }}
</div>

                {{-- </div> --}}
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
                <div class="row">            
                    <div class="col-md-6 mb-2">
                        <label class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Your Company Name">
                    </div>
                    <div class="col-md-6 mb-2">
                        <label class="form-label">Company Name</label>
                        <input type="text" class="form-control" name="company_name" placeholder="Your Company Name">
                    </div>
            </div>
            <div class="row">

                <div class="col-lg-6 mb-2">
                    <label class="form-label">Mobile</label>    
                    <input type="number" class="form-control" name="mobile" placeholder="Your Mobile">
                </div>
                <div class="col-lg-6 mb-2">
                    <label class="form-label">E-Mail</label>    
                    <input type="email" class="form-control" name="email" placeholder="Your Customer E-Mail">
                </div>
            </div>
            <div class="row">
            <div class="col-lg-6 mb-2">
                <label class="form-label">GSTIN</label>    
                <input type="text" class="form-control" name="gstin" placeholder="Your Customer GSTIN Number">
            </div>
            <div class=" col-lg-6 mb-2">
                <label class="form-label">Pan</label>    
                <input type="text" class="form-control" name="pan" placeholder="Your Permanent Account Number">
            </div>
            </div>
            <div class="mb-2">
                <label class="form-label">Address</label>    
                <input type="longtext" class="form-control" name="address_line1" placeholder="Your Address">
            </div>
            <div class="mb-2">
                <label class="form-label">Notes</label>    
                <input type="longtext" class="form-control" name="notes" placeholder="Your Notes ">
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