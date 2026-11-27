@extends('admin.layouts.app')
@section('title','Create Vendor')
@section('content')
<div class="page-body">    
    <div class="container-xl bg-white p-2 ">
        <div class="invoice-wrapper rounded-3 p-2">        
            @include('admin.sales.partials.customer-card')
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