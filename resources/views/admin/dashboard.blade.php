@extends('admin.layouts.app')

@section('title', 'TechNest Accounting Software - Dashboard')



@section('content')
 <div class="page-wrapper" style="background-color: #e2e6ff; min-height: 100vh; padding: 5px;"  >
    <!-- Page header -->
    <div class="card">
        <div class="page-header d-print-none">
            <div class="container-xl">
                <div class="row g-2 align-items-center">
                    <div class="col">
                        <h3 class="h3">Dashboard</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <div class="page-body">
        <div class="container-xl">
            <div class="row row-deck row-cards">
                <div class="col-sm-6 col-lg-3">
                    <div class="card ">
                        <div class="card-body">
                            <!-- Header -->
                            <div class="d-flex align-items-center mb-3">
                                <div>
                                    <div class="text-secondary text-uppercase fw-bold small">
                                        Total Sales
                                    </div>
                                    <div class="fs-1 fw-bold text-dark mt-1">
                                        ₹2,45,680
                                    </div>
                                </div>
                                <div class="ms-auto">
                                    <span class="avatar avatar-sm bg-orange-lt">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-lg text-orange" width="18" height="18" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M15 5h-8" /><path d="M15 9h-8" /> <path d="M9 5c3 0 5 2 5 4s-2 4-5 4h-1l6 6" /></svg>
                                    </span>
                                </div>
                            </div>
                            <!-- Stats -->
                            <div class="row text-center">
                                <div class="col">
                                    <div class="text-secondary small">
                                        Invoices
                                    </div>
                                    <div class="fw-bold fs-3">
                                        356
                                    </div>
                                </div>
                                <div class="col border-start">
                                    <div class="text-secondary small">
                                        Growth
                                    </div>
                                    <div class="text-success fw-bold d-flex justify-content-center align-items-center">
                                        +18%
                                    </div>
                                </div>
                                <div class="col border-start">
                                    <div class="text-secondary small">
                                        Today
                                    </div>
                                    <div class="fw-bold fs-3 text-orange">
                                        ₹18.5K
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <div class="page-body">
        <div class="col-auto">
            <div class="card card-sm">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-10">
                        <h3 class="h3">Business Operations</h3>
                        <div class="row row-cards">
                            <div class="col-sm-6 col-lg-3">
                                <div class="card ">
                                    <div class="card-body">
                                        <!-- Header -->
                                        <div class="d-flex align-items-center mb-3">
                                            <div>
                                                <div class="text-secondary text-uppercase fw-bold small">
                                                    Total Sales
                                                </div>
                                                <div class="fs-1 fw-bold text-dark mt-1">
                                                    ₹2,45,680
                                                </div>
                                            </div>
                                            <div class="ms-auto">
                                                <span class="avatar avatar-sm bg-success-lt">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-lg text-success" width="18" height="18" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M15 5h-8" /><path d="M15 9h-8" /> <path d="M9 5c3 0 5 2 5 4s-2 4-5 4h-1l6 6" /></svg>
                                                </span>
                                            </div>
                                        </div>
                                        <!-- Stats -->
                                        <div class="row text-center">
                                            <div class="col">
                                                <div class="text-secondary small">
                                                    Invoices
                                                </div>
                                                <div class="fw-bold fs-3">
                                                    356
                                                </div>
                                            </div>
                                            <div class="col border-start">
                                                <div class="text-secondary small">
                                                    Growth
                                                </div>
                                                <div class="text-success fw-bold d-flex justify-content-center align-items-center">
                                                    +18%
                                                </div>
                                            </div>
                                            <div class="col border-start">
                                                <div class="text-secondary small">
                                                    Today
                                                </div>
                                                <div class="fw-bold fs-3 text-success">
                                                    ₹18.5K
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="card ">
                                    <div class="card-body">
                                        <!-- Header -->
                                        <div class="d-flex align-items-center mb-3">
                                            <div>
                                                <div class="text-secondary text-uppercase fw-bold small">
                                                    Total Purchases
                                                </div>
                                                <div class="fs-1 fw-bold text-dark mt-1">
                                                    ₹2,45,680
                                                </div>
                                            </div>
                                            <div class="ms-auto">
                                                <span class="avatar avatar-sm bg-primary-lt">
                                                   <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-shopping-bag">	<path stroke="none" d="M0 0h24v24H0z" fill="none" />	<path d="M6.331 8h11.339a2 2 0 0 1 1.977 2.304l-1.255 8.152a3 3 0 0 1 -2.966 2.544h-6.852a3 3 0 0 1 -2.965 -2.544l-1.255 -8.152a2 2 0 0 1 1.977 -2.304" />	<path d="M9 11v-5a3 3 0 0 1 6 0v5" /></svg>                     
                                                 </span>          
                                            </div>                                                
                                        </div>  
                                         <!-- Stats -->
                                        <div class="row text-center">
                                                <div class="col">
                                                    <div class="text-secondary small">
                                                        Invoices
                                                    </div>
                                                    <div class="fw-bold fs-3">
                                                        356
                                                    </div>
                                                </div>
                                                <div class="col border-start">
                                                    <div class="text-secondary small">
                                                        Growth
                                                    </div>
                                                    <div class="text-success fw-bold d-flex justify-content-center align-items-center">
                                                        +18%
                                                    </div>
                                                </div>
                                                <div class="col border-start">
                                                    <div class="text-secondary small">
                                                        Today
                                                    </div>
                                                    <div class="fw-bold fs-3 text-primary">
                                                        ₹18.5K
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="card ">
                                    <div class="card-body">
                                        <!-- Header -->
                                        <div class="d-flex align-items-center mb-3">
                                            <div>
                                                <div class="text-secondary text-uppercase fw-bold small">
                                                    Total Expenses
                                                </div>
                                                <div class="fs-1 fw-bold text-dark mt-1">
                                                    ₹2,45,680
                                                </div>
                                            </div>
                                            <div class="ms-auto">
                                                <span class="avatar avatar-sm bg-danger-lt">
                                                   <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-stack-middle">	<path stroke="none" d="M0 0h24v24H0z" fill="none" />	<path d="M16 10l4 -2l-8 -4l-8 4l4 2" />	<path d="M12 12l-4 -2l-4 2l8 4l8 -4l-4 -2l-4 2" fill="currentColor" />	<path d="M8 14l-4 2l8 4l8 -4l-4 -2" /></svg>
                                                </span>
                                            </div>
                                        </div>
                                        <!-- Stats -->
                                        <div class="row text-center">
                                            <div class="col">
                                                <div class="text-secondary small">
                                                    Invoices
                                                </div>
                                                <div class="fw-bold fs-3">
                                                    356
                                                </div>
                                            </div>
                                            <div class="col border-start">
                                                <div class="text-secondary small">
                                                    Growth
                                                </div>
                                                <div class="text-success fw-bold d-flex justify-content-center align-items-center">
                                                    +18%
                                                </div>
                                            </div>
                                            <div class="col border-start">
                                                <div class="text-secondary small">
                                                    Today
                                                </div>
                                                <div class="fw-bold fs-3 text-danger">
                                                    ₹18.5K
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card card-sm">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-12">
                        <h3 class="h3">Revenue Projection</h3>
                        <div class="row row-cards">
                            <div class="col-sm-6 col-lg-3">
                            <div class="card card-sm">
                                <div class="card-body p-3">
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                    <span class="bg-yellow-lt avatar avatar-square">
                                        <!-- Download SVG icon from http://tabler.io/icons/icon/activity -->
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon"><path d="M3 12h4l3 8l4 -16l3 8h4"></path></svg>
                                    </span>
                                    </div>

                                    <div class="col">
                                    <div class="subheader">Activities</div>
                                    <div class="h3 m-0 p-0">318</div>
                                    </div>

                                    <div class="col-auto">
                                    <span class="text-green d-inline-flex align-items-center lh-1">
                                        <span class="visually-hidden">Increased by </span>+22%
                                        <!-- Download SVG icon from http://tabler.io/icons/icon/arrow-up -->
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon ms-0 icon-sm">
                                        <path d="M12 5l0 14"></path>
                                        <path d="M18 11l-6 -6"></path>
                                        <path d="M6 11l6 -6"></path>
                                        </svg>
                                    </span>
                                    </div>
                                </div>
                                </div>
                            </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                            <div class="card card-sm">
                                <div class="card-body p-3">
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                    <span class="bg-red-lt avatar avatar-square">
                                        <!-- Download SVG icon from http://tabler.io/icons/icon/clock -->
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                        <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0"></path>
                                        <path d="M12 7v5l3 3"></path>
                                        </svg>
                                    </span>
                                    </div>

                                    <div class="col">
                                    <div class="subheader">Tasks due</div>
                                    <div class="h3 m-0 p-0">12</div>
                                    </div>

                                    <div class="col-auto">
                                    <span class="text-red d-inline-flex align-items-center lh-1">
                                        <span class="visually-hidden">Decreased by </span>-3 urgent
                                        <!-- Download SVG icon from http://tabler.io/icons/icon/arrow-down -->
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon ms-0 icon-sm">
                                        <path d="M12 5l0 14"></path>
                                        <path d="M18 13l-6 6"></path>
                                        <path d="M6 13l6 6"></path>
                                        </svg>
                                    </span>
                                    </div>
                                </div>
                                </div>
                            </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                            <div class="card card-sm">
                                <div class="card-body p-3">
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                    <span class="bg-cyan-lt avatar avatar-square">
                                        <!-- Download SVG icon from http://tabler.io/icons/icon/user-plus -->
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                        <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0"></path>
                                        <path d="M16 19h6"></path>
                                        <path d="M19 16v6"></path>
                                        <path d="M6 21v-2a4 4 0 0 1 4 -4h4"></path>
                                        </svg>
                                    </span>
                                    </div>

                                    <div class="col">
                                    <div class="subheader">Leads added</div>
                                    <div class="h3 m-0 p-0">148</div>
                                    </div>

                                    <div class="col-auto">
                                    <span class="text-green d-inline-flex align-items-center lh-1">
                                        <span class="visually-hidden">Increased by </span>+31%
                                        <!-- Download SVG icon from http://tabler.io/icons/icon/arrow-up -->
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon ms-0 icon-sm">
                                        <path d="M12 5l0 14"></path>
                                        <path d="M18 11l-6 -6"></path>
                                        <path d="M6 11l6 -6"></path>
                                        </svg>
                                    </span>
                                    </div>
                                </div>
                                </div>
                            </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                            <div class="card card-sm">
                                <div class="card-body p-3">
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                    <span class="bg-green-lt avatar avatar-square">
                                        <!-- Download SVG icon from http://tabler.io/icons/icon/trending-up -->
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                                        <path d="M3 17l6 -6l4 4l8 -8"></path>
                                        <path d="M14 7l7 0l0 7"></path>
                                        </svg>
                                    </span>
                                    </div>

                                    <div class="col">
                                    <div class="subheader">Churn rate</div>
                                    <div class="h3 m-0 p-0">1.8%</div>
                                    </div>

                                    <div class="col-auto">
                                    <span class="text-red d-inline-flex align-items-center lh-1">
                                        <span class="visually-hidden">Decreased by </span>-0.3%
                                        <!-- Download SVG icon from http://tabler.io/icons/icon/arrow-down -->
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon ms-0 icon-sm">
                                        <path d="M12 5l0 14"></path>
                                        <path d="M18 13l-6 6"></path>
                                        <path d="M6 13l6 6"></path>
                                        </svg>
                                    </span>
                                    </div>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 
 </div>
       
@endsection

@section('customer-modal')
<div class="modal modal-blur fade" id="modal-report" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title">Create Customer Report</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <div class="mb-3">
            <label class="form-label">Name</label>
            <input type="text" class="form-control" name="example-text-input" placeholder="Your report name">
        </div>
        <label class="form-label">Report type</label>
        <div class="form-selectgroup-boxes row mb-3">
            <div class="col-lg-6">
            <label class="form-selectgroup-item">
                <input type="radio" name="report-type" value="1" class="form-selectgroup-input" checked>
                <span class="form-selectgroup-label d-flex align-items-center p-3">
                <span class="me-3">
                    <span class="form-selectgroup-check"></span>
                </span>
                <span class="form-selectgroup-label-content">
                    <span class="form-selectgroup-title strong mb-1">Simple</span>
                    <span class="d-block text-muted">Provide only basic data needed for the report</span>
                </span>
                </span>
            </label>
            </div>
            <div class="col-lg-6">
            <label class="form-selectgroup-item">
                <input type="radio" name="report-type" value="1" class="form-selectgroup-input">
                <span class="form-selectgroup-label d-flex align-items-center p-3">
                <span class="me-3">
                    <span class="form-selectgroup-check"></span>
                </span>
                <span class="form-selectgroup-label-content">
                    <span class="form-selectgroup-title strong mb-1">Advanced</span>
                    <span class="d-block text-muted">Insert charts and additional advanced analyses to be inserted in the report</span>
                </span>
                </span>
            </label>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8">
            <div class="mb-3">
                <label class="form-label">Report url</label>
                <div class="input-group input-group-flat">
                <span class="input-group-text">
                    https://tabler.io/reports/
                </span>
                <input type="text" class="form-control ps-0"  value="report-01" autocomplete="off">
                </div>
            </div>
            </div>
            <div class="col-lg-4">
            <div class="mb-3">
                <label class="form-label">Visibility</label>
                <select class="form-select">
                <option value="1" selected>Private</option>
                <option value="2">Public</option>
                <option value="3">Hidden</option>
                </select>
            </div>
            </div>
        </div>
        </div>
        <div class="modal-body">
        <div class="row">
            <div class="col-lg-6">
            <div class="mb-3">
                <label class="form-label">Client name</label>
                <input type="text" class="form-control">
            </div>
            </div>
            <div class="col-lg-6">
            <div class="mb-3">
                <label class="form-label">Reporting period</label>
                <input type="date" class="form-control">
            </div>
            </div>
            <div class="col-lg-12">
            <div>
                <label class="form-label">Additional information</label>
                <textarea class="form-control" rows="3"></textarea>
            </div>
            </div>
        </div>
        </div>
        <div class="modal-footer">
        <a href="#" class="btn btn-link link-secondary" data-bs-dismiss="modal">
            Cancel
        </a>
        <a href="#" class="btn btn-orange ms-auto" data-bs-dismiss="modal">
            <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 5l0 14" /><path d="M5 12l14 0" /></svg>
            Create new report
        </a>
        </div>
    </div>
    </div>
</div>
@endsection