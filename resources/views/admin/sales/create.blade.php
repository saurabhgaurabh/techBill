@extends('admin.layouts.app')
@section('title','Create Vendor')
@section('content')
<div class="page-body">    
    <div class="card p-2 mb-2 ">
        <div class="d-flex justify-content-between align-items-center mt-2 pb-1">                
            <div class="d-flex align-items-center">
                <a href="{{ route('sales.index') }}"
                class="btn btn-icon btn-ghost-secondary me-2"
                aria-label="Back to Vendors"
                title="Back to Vendors">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-chevron-left">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M15 6l-6 6l6 6" />
                    </svg>
                </a>                
                <h2 class="fw-bold mb-1">
                    Create New Sales Invoice
                </h2>
            </div>
            <div>
                <button class="btn btn-outline-secondary">Cancel</button>
                <button class="btn text-white" style="background:#eb5a25;">Save Invoice</button>
            </div>
        </div>
    </div>
    <div class="container-xl bg-white p-2 ">
        <div class="invoice-wrapper rounded-3 p-2">        
            {{-- Customer Details --}}
            @include('admin.sales.partials.customer-card')
            {{-- Invoice Details --}}
            @include('admin.sales.partials.invoice-card')
            {{-- Items --}}
            @include('admin.sales.partials.items-table')
            <div class="row">
                <div class="col-lg-8">
                    @include('admin.sales.partials.remarks-card')
                </div>
                <div class="col-lg-4">
                    @include('admin.sales.partials.summary-card')
                </div>
            </div>
        </div>
    </div>
</div>
<style>
body{
    background:#f8fafc;
}
.invoice-wrapper{
    background:#f2f3f5;
    border:1.5px solid #e5e7eb;
    padding:25px;
}
.invoice-section{
    padding:20px 0;
    border-bottom:1px solid #e5e7eb;
}
.section-title{
    font-size:16px;
    font-weight:700;
    color:#1e293b;
    margin-bottom:18px;
}
.form-control,
.form-select{
    height:42px;
    border-radius:6px;
    border:1px solid #dbe2ea;
    font-size:14px;
}
.form-control:focus,
.form-select:focus{
    border-color:#0b1b3f;
    box-shadow:none;
}
.btn{
    border-radius:6px;
}
</style>
@endsection