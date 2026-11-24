@extends('admin.layouts.app')
@section('title','Customer Invoices')
@section('content')

<div class="" style="background : var(--cardbg) min-height: 100vh; padding: 5px;">
    <div class="card">
        <div class="card-body rounded-3  box-shadow " style="background : var(--cardbg)">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <h2 class="page-title mb-0 text-secondary">Customer Listing</h2>
                </div>
                <div class="col-auto ms-auto d-print-none d-flex align-items-center gap-2">
                    <button type="button" class="btn btn-outline-secondary rounded-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-transfer-in">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M4 18v3h16v-14l-8 -4l-8 4v3" />
                        <path d="M4 14h9" />
                        <path d="M10 11l3 3l-3 3" />
                    </svg>
                    Import
                    </button>

                    <div class="dropdown">
                    <button class="btn btn-outline-secondary rounded-3 dropdown-toggle" data-bs-toggle="dropdown">
                        More Report
                    </button>
                    <div class="dropdown-menu dropdown-menu-end">
                        <a class="dropdown-item" href="#">Items</a>
                        <a class="dropdown-item" href="#">Inactive Items</a>
                    </div>
                    </div>

                    <a href="{{ route('customers.create') }}" class="btn btn-orange rounded-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="18" height="18" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none">
                        <path stroke="none" d="M0 0h24v24H0z"/>
                        <path d="M12 5v14M5 12h14"/>
                    </svg>
                    Create Customer
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body" style="background : var(--cardbg)">
            <div class="row mt-0 align-items-center">
                <div class="col-md-3">
                    <div class="input-icon">
                    <span class="input-icon-addon">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="18" height="18" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none">
                        <circle cx="10" cy="10" r="7"/>
                        <line x1="21" y1="21" x2="15" y2="15"/>
                        </svg>
                    </span>
                    <input type="text" class="form-control" placeholder="Search item..." name="search" id="searchItem">
                    </div>
                </div>

                {{-- <div class="col-auto ms-auto d-flex align-items-center gap-2">
                    <button class="btn btn-outline-secondary rounded-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="18" height="18" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none">
                            <path stroke="none" d="M0 0h24v24H0z"/>
                            <path d="M4 6h16M4 12h16M4 18h16"/>
                        </svg>
                    </button>
                </div> --}}
            </div>
        </div>
        <div class="container-xl mt-0">
            <div class="card">
                <div class="table-responsive">
                    <table class="table table-hover table-striped align-middle">
                        <thead class="table-light">
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
                         <tbody class="table-tbody" id="vendorTable">
                                @forelse ($customers->sortBy('customer_id') as $item)  
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
                                                <span class="text-green">Active</span>
                                                @elseif($item->status == 0)
                                                <span class="text-red">Inactive</span>
                                                @elseif($item->status == 2)
                                                <span class=" text-yellow">Pending</span>
                                                @else
                                                <span class="text-secondary">Unknown</span>
                                                @endif
                                            </td>
                                            <td class="sticky-action text-center">
                                                <div class="dropdown">
                                                    <!-- Three Dots Toggle Button -->
                                                    <button class="btn btn-light btn-icon" type="button" data-bs-toggle="dropdown" aria-expanded="false" title="Actions">
                                                        <svg xmlns="http://w3.org" class="icon icon-tabler icon-tabler-dots-vertical" width="14" height="14" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                            <circle cx="12" cy="12" r="1"></circle>
                                                            <circle cx="12" cy="19" r="1"></circle>
                                                            <circle cx="12" cy="5" r="1"></circle>
                                                        </svg>
                                                    </button>                      
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item" href="{{ route('customers.show', $item->customer_id) }}">
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
                                                        <form action="{{ route('customers.destroy', $item->customer_id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this vendor?');">
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
                <div class="card-footer text-muted small">
                    {{-- {{ $item->withQueryString()->links() }} --}}
                </div>
            </div>
        </div>
    </div>
      
</div>



@endsection