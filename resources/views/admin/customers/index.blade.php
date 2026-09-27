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
.custom-pagination .page-item.active .page-link {
    background-color: #eb5a25;
    border-color: #f76707;
}

.custom-pagination .page-link {
    color: #f3a877;
}

</style>

@endpush

<div class="page-wrapper"> 
    <div class="page-body">
        <div class="container-xl">
            <div class="card">
                <div class="page-header d-print-none">      
                    <div class="container-xl">
                        <div class="row g-2 align-items-center">
                            <div class="col">
                                <h2 class="page-title">
                                    Customers 
                                </h2>
                            </div>
                            <!-- Search + Create Button -->
                            <div class="col-auto ms-auto d-print-none">
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
                                        </div >
                                    <!-- Create Button -->
                                    <a href="{{ route('customers.create') }}" class="btn btn-orange">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="18" height="18" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"><path stroke="none" d="M0 0h24v24H0z"/> <path d="M12 5l0 14"/>  <path d="M5 12l14 0"/>   </svg>
                                        Create Customers
                                    </a>
                                </div>
                            </div>
                        </div></br>
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
                        <tbody class="table-tbody" id="vendorTable">
                            @forelse ($customers->sortBy('customers_id') as $item)  
                                <tr>
                                    <td>{{ $item->customer_id }}</td>
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
                                            <span class="badge  bg-green">Active</span>
                                            @elseif($item->status == 0)
                                            <span class="badge bg-red">Inactive</span>
                                            @elseif($item->status == 2)
                                            <span class="badge bg-yellow text-dark">Pending</span>
                                            @else
                                            <span class="badge bg-secondary">Unknown</span>
                                            @endif
                                        </td>
                                        <td class="text-center">
                                            <div class="d-flex justify-content-center align-items-center gap-2">
                                                {{-- <a href="{{ route('venders.show',$item->vendor_id) }}" class="btn btn-sm btn-cyan" title="View">
                                                    <i class="bi bi-eye"></i>
                                                </a> --}}
                                                {{-- <a href="{{ route('venders.edit',$item->vendor_id) }}" class="btn btn-sm btn-success" title="Edit">
                                                     <i class="bi bi-pencil"></i>
                                                </a> --}}
                                                {{-- <form action="{{ route('venders.destroy',$item->vendor_id) }}" 
                                                    method="POST"
                                                    onsubmit="return confirm('Are you sure you want to delete this vendor?');">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" 
                                                            class="btn btn-sm btn-danger"
                                                            title="Delete">
                                                        <i class="bi bi-trash"></i>
                                                    </button>
                                                </form> --}}
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
                {{-- pagignation --}}
                <div class="d-flex justify-content-end mt-3 custom-pagination">
                    {{-- {{ $customers->links()}} --}}
                    {{ $customers->withQueryString()->links() }}
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

<div class="modal modal-blur fade" id="customer-modal-report" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <form action="{{ route('customers.store') }}" method="POST">
            @csrf
            <div class="modal-header">
            <h5 class="modal-title">Create Customer</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <div class="mb-2">
                <label class="form-label">Name</label>
                <input type="text" class="form-control" name="name" placeholder="YourCustomer Name">
            </div>
            <div class="mb-2">
                <label class="form-label">Mobile</label>
                <input type="number" class="form-control" name="mobile" placeholder="Your Customer Mobile">
            </div>
            <div class="mb-2">
                <label class="form-label">E-Mail</label>    
                <input type="email" class="form-control" name="email" placeholder="Your Customer E-Mail">
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