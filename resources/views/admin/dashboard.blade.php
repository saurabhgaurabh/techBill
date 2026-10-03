@extends('admin.layouts.app')

@section('title', 'TechNest Accounting Software - Dashboard')



@section('content')
 <div class="page-wrapper" style="background-color: #ebf1ff; min-height: 100vh; padding: 5px;"  >
    <div class="row">
        <div class="col-md-9">
            <div class="card rounded-3">
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
            <div class="page-body">
                <div class="col-auto">
                    <div class="card card-sm rounded-3">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-12">
                                <h3 class="h3">Business Operations</h3>
                                <div class="row row-cards">
                                    <div class="col-sm-8 col-lg-4 col-md-4">
                                        <div class="card rounded-4">
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
                                                        <span class="avatar avatar-sm bg-success-lt rounded-4">
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
                                    <div class="col-sm-8 col-lg-4 col-md-4">
                                        <div class="card rounded-4">
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
                                                        <span class="avatar avatar-sm bg-primary-lt rounded-4">
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
                                    <div class="col-sm-8 col-lg-4 col-md-4">
                                        <div class="card rounded-4">
                                            <div class="card-body" style="background-color: #fff1f3; border-radius: 10px;">
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
                                                        <span class="avatar avatar-sm bg-danger-lt rounded-4">
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
                    <div class="card card-sm rounded-3 mt-1">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-12">
                                <h3 class="h3">Revenue Projection</h3>
                                <div class="row row-cards">
                                    <div class="col-sm-6 col-lg-6 col-md-6">
                                        <div class="card card-sm rounded-3">
                                            <div class="card-body p-3">
                                            <div class="row align-items-center">
                                                <div class="col-auto">
                                                <span class="bg-green-lt avatar avatar-square rounded-5">
                                                 <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-lg text-success" width="18" height="18" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M15 5h-8" /><path d="M15 9h-8" /> <path d="M9 5c3 0 5 2 5 4s-2 4-5 4h-1l6 6" /></svg>
                                                </span>
                                                </div>
                                                <div class="col">
                                                    <div class="subheader">Total Recievable Amount</div>
                                                    <div class="h3 m-0 p-0">₹12</div>
                                                </div>

                                                <div class="col-auto">
                                                     <span class="text-green d-inline-flex align-items-center lh-1">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-trending-up"> <path stroke="none" d="M0 0h24v24H0z" fill="none" /><path d="M3 17l6 -6l4 4l8 -8" /><path d="M14 7l7 0l0 7" /></svg>
                                                        100 %
                                                    </span>
                                                    <div class="text-muted">vs last month</div>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-6 col-md-6">
                                        <div class="card card-sm rounded-3">
                                            <div class="card-body p-3">
                                            <div class="row align-items-center">
                                                <div class="col-auto">
                                                <span class="bg-red-lt avatar avatar-square rounded-5">
                                                  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-lg text-danger" width="18" height="18" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M15 5h-8" /><path d="M15 9h-8" /> <path d="M9 5c3 0 5 2 5 4s-2 4-5 4h-1l6 6" /></svg>
                                                </span>
                                                </div>
                                                    <div class="col">
                                                    <div class="subheader">Total Payable Amount</div>
                                                    <div class="h3 m-0 p-0">₹12</div>                                    
                                                </div>

                                                <div class="col-auto">
                                                    <span class="text-green d-inline-flex align-items-center lh-1">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-trending-up"> <path stroke="none" d="M0 0h24v24H0z" fill="none" /><path d="M3 17l6 -6l4 4l8 -8" /><path d="M14 7l7 0l0 7" /></svg>
                                                    100 %
                                                    </span>
                                                    <div class="text-muted">vs last month</div>
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
            <div class="col-md-3 col-sm-3 col-lg-3">
                <div class="card rounded-3"
                {{-- style="background-color: #e7ebfb; " --}}
                >
                    <div class="card-body p-3">
                        <h3 class="card-title">Need help? We've got your back</h3>
                        <h5 class="card-subtitle text-muted">Perhaps you can find the answers in our collections.</h5>
                    </div>
                    {{-- Card Row --}}
                    <div class="row row-cards align-items-center g-2 p-2">
                        <div class="col-md-4">
                            <div class="card rounded-3">
                                <div class="card-body text-center p-2">
                                    <span class="avatar avatar-sm bg-primary-lt mx-auto mb-2 rounded-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"fill="none"stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"class="icon icon-tabler icon-tabler-calendar-event"> <path stroke="none" d="M0 0h24v24H0z" fill="none"/> <path d="M4 7a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2z"/><path d="M16 3v4"/><path d="M8 3v4"/> <path d="M4 11h16"/> <path d="M8 15h2v2h-2z"/></svg>
                                    </span>
                                    <span class="text-secondary fw-bold">
                                        Book Demo
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card rounded-3">
                                <div class="card-body text-center p-2">
                                    <span class="avatar avatar-sm bg-purple-lt mx-auto mb-2 rounded-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-brand-hipchat">	<path stroke="none" d="M0 0h24v24H0z" fill="none" /><path d="M17.802 17.292s.077 -.055 .2 -.149c1.843 -1.425 3 -3.49 3 -5.789c0 -4.286 -4.03 -7.764 -9 -7.764c-4.97 0 -9 3.478 -9 7.764c0 4.288 4.03 7.646 9 7.646c.424 0 1.12 -.028 2.088 -.084c1.262 .82 3.104 1.493 4.716 1.493c.499 0 .734 -.41 .414 -.828c-.486 -.596 -1.156 -1.551 -1.416 -2.29l-.002 .001" /><path d="M7.5 13.5c2.5 2.5 6.5 2.5 9 0" /></svg>                                </span>
                                    <span class="text-secondary fw-bold">
                                        Live Chat
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card rounded-3">
                                <div class="card-body text-center p-2">
                                    <span class="avatar avatar-sm bg-cyan-lt mx-auto mb-2 rounded-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-video">   <path stroke="none" d="M0 0h24v24H0z" fill="none" />  <path d="M15 10l4.553 -2.276a1 1 0 0 1 1.447 .894v6.764a1 1 0 0 1 -1.447 .894l-4.553 -2.276v-4" />  <path d="M3 8a2 2 0 0 1 2 -2h8a2 2 0 0 1 2 2v8a2 2 0 0 1 -2 2h-8a2 2 0 0 1 -2 -2l0 -8" />  </svg>
                                    </span>
                                    <span class="text-secondary fw-bold">
                                        Video Guide
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row row-cards align-items-center g-2 p-2">
                        <div class="col-md-4">
                            <div class="card rounded-3">
                                <div class="card-body text-center p-2">
                                    <span class="avatar avatar-sm bg-primary-lt mx-auto mb-2 rounded-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-mail">   <path stroke="none" d="M0 0h24v24H0z" fill="none" />  <path d="M3 7a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10" />  <path d="M3 7l9 6l9 -6" /></svg>
                                    </span>
                                    <span class="text-secondary fw-bold">
                                        Email Support
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card rounded-3">
                                <div class="card-body text-center p-2">
                                    <span class="avatar avatar-sm bg-success-lt mx-auto mb-2 rounded-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-brand-whatsapp"><path stroke="none" d="M0 0h24v24H0z" fill="none" />  <path d="M3 21l1.65 -3.8a9 9 0 1 1 3.4 2.9l-5.05 .9" /><path d="M9 10a.5 .5 0 0 0 1 0v-1a.5 .5 0 0 0 -1 0v1a5 5 0 0 0 5 5h1a.5 .5 0 0 0 0 -1h-1a.5 .5 0 0 0 0 1" /></svg>
                                    </span>
                                    <span class="text-secondary fw-bold">
                                        Chat WhatsApp
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card rounded-3">
                                <div class="card-body text-center p-2">
                                    <span class="avatar avatar-sm bg-dark-lt mx-auto mb-2 rounded-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-info-octagon"> <path stroke="none" d="M0 0h24v24H0z" fill="none" /> <path d="M12.802 2.165l5.575 2.389c.48 .206 .863 .589 1.07 1.07l2.388 5.574c.22 .512 .22 1.092 0 1.604l-2.389 5.575c-.206 .48 -.589 .863 -1.07 1.07l-5.574 2.388c-.512 .22 -1.092 .22 -1.604 0l-5.575 -2.389a2.036 2.036 0 0 1 -1.07 -1.07l-2.388 -5.574a2.036 2.036 0 0 1 0 -1.604l2.389 -5.575c.206 -.48 .589 -.863 1.07 -1.07l5.574 -2.388a2.036 2.036 0 0 1 1.604 0" /> <path d="M12 9h.01" /><path d="M11 12h1v4h1" /> </svg>
                                    </span>
                                    <span class="text-secondary fw-bold">
                                        Help Desk
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>    
                
                <div class="card card-sm rounded-3 mt-2 shadow-sm">
                    <div class="card-body p-3">
                        <h3 class="card-title mb-1">Follow Us</h3>
                        <h4 class="card-subtitle text-muted mb-3">
                            Don't miss any updates.
                        </h4>
                        <div class="d-flex gap-5 flex-wrap">
                            <!-- Facebook -->
                            <a href="#" class="social-icon facebook" target="_blank" >
                                <span class="avatar avatar-sm bg-facebook-lt rounded-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-brand-meta">	<path stroke="none" d="M0 0h24v24H0z" fill="none" />	<path d="M12 10.174c1.766 -2.784 3.315 -4.174 4.648 -4.174c2 0 3.263 2.213 4 5.217c.704 2.869 .5 6.783 -2 6.783c-1.114 0 -2.648 -1.565 -4.148 -3.652a27.627 27.627 0 0 1 -2.5 -4.174" />	<path d="M12 10.174c-1.766 -2.784 -3.315 -4.174 -4.648 -4.174c-2 0 -3.263 2.213 -4 5.217c-.704 2.869 -.5 6.783 2 6.783c1.114 0 2.648 -1.565 4.148 -3.652c1 -1.391 1.833 -2.783 2.5 -4.174" /></svg>
                                </span>
                            </a>

                            <!-- Instagram -->
                            <a href="#" class="social-icon instagram" target="_blank">
                            <span class="avatar avatar-sm bg-instagram-lt rounded-4 ">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-brand-instagram"><path stroke="none" d="M0 0h24v24H0z" fill="none" /><path d="M4 8a4 4 0 0 1 4 -4h8a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-8a4 4 0 0 1 -4 -4l0 -8" /><path d="M9 12a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" /><path d="M16.5 7.5v.01" /></svg>                        </a>
                                </span>
                            <!-- LinkedIn -->
                            <a href="#" class="social-icon linkedin" target="_blank">
                            <span class="avatar avatar-sm bg-linkedin-lt rounded-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-brand-linkedin">	<path stroke="none" d="M0 0h24v24H0z" fill="none" />	<path d="M8 11v5" />	<path d="M8 8v.01" />	<path d="M12 16v-5" />	<path d="M16 16v-3a2 2 0 1 0 -4 0" />	<path d="M3 7a4 4 0 0 1 4 -4h10a4 4 0 0 1 4 4v10a4 4 0 0 1 -4 4h-10a4 4 0 0 1 -4 -4l0 -10" /></svg>
                            </span>
                            </a>

                            <!-- YouTube -->
                            <a href="#" class="social-icon youtube" target="_blank">
                                <span class="avatar avatar-sm bg-youtube-lt rounded-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-brand-youtube">	<path stroke="none" d="M0 0h24v24H0z" fill="none" />	<path d="M2 8a4 4 0 0 1 4 -4h12a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-12a4 4 0 0 1 -4 -4v-8" />	<path d="M10 9l5 3l-5 3l0 -6" /></svg>                            
                                </span>
                            </a>

                            <!-- WhatsApp -->
                            <a href="#" class="social-icon whatsapp" target="_blank">
                            <span class="avatar avatar-sm bg-twitter-lt rounded-4 ">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-brand-x">	<path stroke="none" d="M0 0h24v24H0z" fill="none" />	<path d="M4 4l11.733 16h4.267l-11.733 -16l-4.267 0" />	<path d="M4 20l6.768 -6.768m2.46 -2.46l6.772 -6.772" /></svg>                            </span>
                            </a>

                        </div>

                    </div>
                </div>
                <div class="card card-sm rounded-3 mt-2 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Recent Activity</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
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