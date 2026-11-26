@extends('admin.layouts.app')
@section('title','Create Vendor')
@section('content')
<div class="page-body">
    <div class="container-xl">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <div>
                <h2 class="fw-bold mb-1">
                    Create Sales Invoice
                </h2>
                <p class="text-muted mb-0">
                    Create GST invoice quickly and easily
                </p>
            </div>
            <div>
                <button class="btn btn-outline-secondary">Cancel</button>
                <button class="btn text-white" style="background:#eb5a25;">Save Invoice</button>
            </div>
        </div>
        <div class="invoice-wrapper">
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
    background:white;
    border:1px solid #e5e7eb;
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
    border-color:#eb5a25;
    box-shadow:none;
}
.btn{
    border-radius:6px;
}
</style>
@endsection