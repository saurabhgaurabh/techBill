@extends('admin.layouts.app')
@section('title','Sales Invoices')
@section('content')

<div class="card">
    <div class="card-body rounded-3  box-shadow " style="background : var(--cardbg)">
        <div class="row g-2 align-items-center">
            <div class="col">
                <h2 class="page-title mb-0">Item</h2>
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
                    <a class="dropdown-item" href="#">Stock Summary</a>
                    <a class="dropdown-item" href="#">Sales Report</a>
                </div>
                </div>

                <a href="#" class="btn btn-orange rounded-3">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="18" height="18" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none">
                    <path stroke="none" d="M0 0h24v24H0z"/>
                    <path d="M12 5v14M5 12h14"/>
                </svg>
                Create Item
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

            <div class="col-auto ms-auto d-flex align-items-center gap-2">
                <button class="btn btn-outline-secondary rounded-3">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="18" height="18" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none">
                    <path stroke="none" d="M0 0h24v24H0z"/>
                    <path d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
                More Filter
                </button>
            </div>
        </div>
    </div>
</div>
{{-- <div class="page-header d-print-none mt-3">
    <div class="container-xl">
        <div class="row g-2 align-items-center">
            <div class="col">
                <h2 class="page-title mb-0">Item</h2>
            </div>
            <div class="col-auto ms-auto d-print-none d-flex align-items-center gap-2">
                <button type="button" class="btn btn-outline-secondary">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="18" height="18" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none">
                    <path stroke="none" d="M0 0h24v24H0z"/>
                    <path d="M4 4h16v16H4z"/>
                    <path d="M8 12h8"/>
                </svg>
                Import
                </button>

                <div class="dropdown">
                <button class="btn btn-outline-secondary dropdown-toggle" data-bs-toggle="dropdown">
                    More Report
                </button>
                <div class="dropdown-menu dropdown-menu-end">
                    <a class="dropdown-item" href="#">Stock Summary</a>
                    <a class="dropdown-item" href="#">Sales Report</a>
                </div>
                </div>

                <a href="#" class="btn btn-primary">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="18" height="18" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none">
                    <path stroke="none" d="M0 0h24v24H0z"/>
                    <path d="M12 5v14M5 12h14"/>
                </svg>
                Create Item
                </a>
            </div>
        </div>

        <!-- Filter & Search -->
        <div class="row mt-3 align-items-center">
            <div class="col-md-6">
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

            <div class="col-auto ms-auto d-flex align-items-center gap-2">
                <button class="btn btn-outline-secondary">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="18" height="18" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none">
                    <path stroke="none" d="M0 0h24v24H0z"/>
                    <path d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
                More Filter
                </button>
            </div>
        </div>
    </div>
</div> --}}

<!-- Table -->
<div class="container-xl mt-3">
  <div class="card">
    <div class="table-responsive">
      <table class="table table-hover table-striped align-middle">
        <thead class="table-light">
          <tr>
            <th>Name</th>
            <th>Type</th>
            <th>Unit</th>
            <th>Group</th>
            <th>Category</th>
            <th>Manage Stock</th>
            <th>MRP</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><a href="#" class="text-primary">Foundary furnace</a></td>
            <td>Goods</td>
            <td>PCS</td>
            <td></td>
            <td></td>
            <td>Normal</td>
            <td></td>
            <td><a href="#" class="text-primary">Edit</a></td>
          </tr>
          <tr>
            <td><a href="#" class="text-primary">black powder</a></td>
            <td>Goods</td>
            <td>KGS</td>
            <td>Ceramic Pot</td>
            <td>japani Pot</td>
            <td>Normal</td>
            <td></td>
            <td><a href="#" class="text-primary">Edit</a></td>
          </tr>
          <tr>
            <td><a href="#" class="text-primary">Foundary repairing material</a></td>
            <td>Goods</td>
            <td>KGS</td>
            <td></td>
            <td></td>
            <td>Normal</td>
            <td></td>
            <td><a href="#" class="text-primary">Edit</a></td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="card-footer text-muted small">
      1–3 of 3 Records
    </div>
  </div>
</div>

@endsection
