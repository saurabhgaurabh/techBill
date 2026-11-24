@extends('admin.layouts.app')
@section('title','Sales Invoices')
@section('content')

<div class="" style="background : var(--cardbg) min-height: 100vh; padding: 5px;">
    <div class="card">
        <div class="card-body rounded-3  box-shadow " style="background : var(--cardbg)">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <h2 class="page-title mb-0 text-secondary">Sales Listing</h2>
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

                    <a href="" class="btn btn-orange rounded-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="18" height="18" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none">
                        <path stroke="none" d="M0 0h24v24H0z"/>
                        <path d="M12 5v14M5 12h14"/>
                    </svg>
                    Create Sales
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
                                <th>ID</th>
                                <th>Invoice No</th>
                                <th>Series ID</th>
                                <th>Customer ID</th>
                                <th>Invoice Date</th>
                                <th>Supply Place</th>
                                <th>Supply Type</th>
                                <th>Payment Mode</th>
                                <th>Payment Status</th>
                                <th>Subtotal</th>
                                <th>Discount</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($salesdata as $item)
                            <tr>
                                <td class="text-secondary">{{$item->sale_id}}.</td>
                                <td><a href="#" class="text-primary">{{$item->invoice_no}}</a></td>
                                <td class="text-secondary">{{$item->series_id}}</td>
                                <td class="text-secondary"> {{ $item->customer->name ?? '-' }}</td>
                                <td class="text-secondary">{{$item->invoice_date}}</td>
                                <td class="text-secondary">{{$item->place_of_supply}}</td>
                                <td class="text-secondary">{{$item->supply_type}}</td>
                                <td class="text-cyan">{{$item->payment_mode}}</td>
                                <td class="text-secondary">
                                    @if($item->payment_status == 'Pending')
                                    <span class="text-warning">Pending</span>
                                    @elseif($item->payment_status == 'Partial')
                                    <span class="text-primary">Partial</span>
                                    @elseif($item->payment_status == 'Paid') 
                                    <span class="text-success">Paid</span>
                                    @else
                                      <span class="text-secondary">Unknown</span>
                                    @endif
                                <td class="text-secondary">{{$item->subtotal}}</td>
                                <td class="text-secondary">{{$item->discount_amount}}</td>
                                <td><a href="#" class="text-primary">Edit</a></td>
                            </tr>
                            @endforeach
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