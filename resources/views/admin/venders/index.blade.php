<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body>
@include('admin.layouts.header')

{{-- middle content section  starts --}}

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
                        <th><button class="table-sort" data-sort="sort-city">Mobile</button></th>
                        <th><button class="table-sort" data-sort="sort-type">Email</button></th>
                      </tr>
                    </thead>
                    {{-- <tbody class="table-tbody">  
                      @foreach ($customers->sortBy('customer_id') as $item)                    
                        <tr>
                            <td>{{ $item->customer_id }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->mobile }}</td>
                            <td>{{ $item->email }}</td>
                        </tr>
                        @endforeach
                    </tbody> --}}
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

<div class="modal modal-blur fade" id="customer-modal-report" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <form action="{{ route('venders.store') }}" method="POST">
            @csrf
            <div class="modal-header">
            <h5 class="modal-title">Create Customer</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <div class="mb-2">
                <label class="form-label">Name</label>
                <input type="text" class="form-control" name="name" placeholder="Your Company Name">
            </div>
            <div class="mb-2">
                <label class="form-label">Company Name</label>
                <input type="text" class="form-control" name="company_name" placeholder="Your Company Name">
            </div>
            <div class="mb-2">
                <label class="form-label">Mobile</label>    
                <input type="number" class="form-control" name="mobile" placeholder="Your Mobile">
            </div>
            {{-- <div class="mb-2">
                <label class="form-label">E-Mail</label>    
                <input type="email" class="form-control" name="email" placeholder="Your Customer E-Mail">
            </div> --}}
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

</body>
</html>