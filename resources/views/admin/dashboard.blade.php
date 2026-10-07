@extends('admin.layouts.app')

@section('title', 'TechNest Accounting Software - Dashboard')
@push('styles')
<link href="{{asset('dist/css/dashboard.css')}}" rel="stylesheet">    
@endpush
@php
$dashboardCards = [
    [
        'title'=>'Revenue Projection',
        'subtitle'=>'Receivable & Payable Summary',
        'iconBg'=>'bg-orange-lt',
        'badge'=>'This Month',
        'badgeClass'=>'bg-orange-lt text-orange',
        'icon'=>'
        <svg xmlns="http://www.w3.org/2000/svg" class="icon text-orange" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
        <path d="M17 8V6a2 2 0 0 0-2-2H5a2 2 0 0 0 0 4h12"/>
        <rect x="3" y="8" width="18" height="12" rx="2"/>
        <circle cx="16" cy="14" r="1"/>
        </svg>
        ',

    'items'=>[
        [
            'title'=>'Total Receivable',
            'amount'=>'₹2,45,000',
            'trend'=>'▲ +18%',
            'trendClass'=>'text-success',
            'class'=>'success-card',
            'iconBg'=>'bg-green-lt',
            'icon'=>'
            <svg xmlns="http://www.w3.org/2000/svg" class="icon text-success" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <circle cx="12" cy="12" r="9"/>
            <path d="M12 8v8"/>
            <path d="M8 12l4 4l4-4"/>
            </svg>
            '
        ],
        [
            'title'=>'Total Payable',
            'amount'=>'₹84,500',
            'trend'=>'▲ +8%',
            'trendClass'=>'text-danger',
            'class'=>'danger-card',
            'iconBg'=>'bg-red-lt',

            'icon'=>'
            <svg xmlns="http://www.w3.org/2000/svg" class="icon text-danger" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <circle cx="12" cy="12" r="9"/>
            <path d="M12 16V8"/>
            <path d="M8 12l4-4l4 4"/>
            </svg>
            '
            ]

        ]

        ],
        [
            'title'=>'Available Income',
            'subtitle'=>'Income & Inventory Value',
            'iconBg'=>'bg-blue-lt',
            'badge'=>'Live',
            'badgeClass'=>'bg-green-lt text-success',
            'icon'=>'
            <svg xmlns="http://www.w3.org/2000/svg" class="icon text-blue" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M17 8V6a2 2 0 0 0-2-2H5a2 2 0 0 0 0 4h12"/>
            <rect x="3" y="8" width="18" height="12" rx="2"/>
            <circle cx="16" cy="14" r="1"/>
            </svg>
            ',

            'items'=>[

            [
            'title'=>'Total Income',
            'amount'=>'₹8,45,000',
            'trend'=>'▲ +25%',
            'trendClass'=>'text-primary',
            'class'=>'blue-card',
            'iconBg'=>'bg-blue-lt',

            'icon'=>'
            <svg xmlns="http://www.w3.org/2000/svg" class="icon text-blue" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M17 7l-10 10"/>
            <path d="M8 7h9v9"/>
            </svg>
            '
            ],

            [
                'title'=>'Stock On Hand',
                'amount'=>'₹1,72,000',
                'trend'=>'320 Items',
                'trendClass'=>'text-purple',
                'class'=>'purple-card',
                'iconBg'=>'bg-purple-lt',

                'icon'=>'
                <svg xmlns="http://www.w3.org/2000/svg" class="icon text-purple" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M4 7l8-4l8 4l-8 4z"/>
                <path d="M4 12l8 4l8-4"/>
                <path d="M4 17l8 4l8-4"/>
                </svg>
                '
            ]

        ]

    ]

];
$quickActions = [

    [
        'title'=>'Create Account',
        'route'=>'customers.create',
        'color'=>'teal',
        'svg'=>'<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-invoice"><path stroke="none" d="M0 0h24v24H0z" fill="none" /><path d="M14 3v4a1 1 0 0 0 1 1h4" /><path d="M19 12v7a1.78 1.78 0 0 1 -3.1 1.4a1.65 1.65 0 0 0 -2.6 0a1.65 1.65 0 0 1 -2.6 0a1.65 1.65 0 0 0 -2.6 0a1.78 1.78 0 0 1 -3.1 -1.4v-14a2 2 0 0 1 2 -2h7l5 5v4.25" /></svg> '
    ],

    [
        'title'=>'Create Items',
        'route'=>'products.create',
        'color'=>'purple',
        'svg'=>'<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-duplicate"><path stroke="none" d="M0 0h24v24H0z" fill="none" /><path d="M7 9.667a2.667 2.667 0 0 1 2.667 -2.667h8.666a2.667 2.667 0 0 1 2.667 2.667v8.666a2.667 2.667 0 0 1 -2.667 2.667h-8.666a2.667 2.667 0 0 1 -2.667 -2.667v-8.666" /><path d="M11 14h6" /><path d="M14 11v6" /><path d="M4.012 16.737a2 2 0 0 1 -1.012 -1.737v-10c0 -1.1 .9 -2 2 -2h10c.75 0 1.158 .385 1.5 1" /></svg>'
    ],

    [
        'title'=>'Create Sales Invoice',
        'route'=>'sales.create',
        'color'=>'lime',
        'svg'=>' <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-receipt"><path stroke="none" d="M0 0h24v24H0z" fill="none" /><path d="M5 21v-16a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v16l-3 -2l-2 2l-2 -2l-2 2l-2 -2l-3 2m4 -14h6m-6 4h6m-2 4h2" /></svg>'
    ],

    [
        'title'=>'Create Purchase Invoice',
        'route'=>'purchase.create',
        'color'=>'orange',
        'svg'=>'<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-shopping-bag"><path stroke="none" d="M0 0h24v24H0z" fill="none" /><path d="M6.331 8h11.339a2 2 0 0 1 1.977 2.304l-1.255 8.152a3 3 0 0 1 -2.966 2.544h-6.852a3 3 0 0 1 -2.965 -2.544l-1.255 -8.152a2 2 0 0 1 1.977 -2.304" /><path d="M9 11v-5a3 3 0 0 1 6 0v5" /></svg>'
    ],

    [
        'title'=>'Create Receipt',
        'route'=>'receipt.create',
        'color'=>'cyan',
        'svg'=>'<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-file-invoice">	<path stroke="none" d="M0 0h24v24H0z" fill="none" /><path d="M14 3v4a1 1 0 0 0 1 1h4" /><path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2" /><path d="M9 7l1 0" /><path d="M9 13l6 0" /><path d="M13 17l2 0" /></svg>'
    ],

    [
        'title'=>'Create Payment',
        'route'=>'payment.create',
        'color'=>'green',
        'svg'=>' <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-receipt-rupee"><path stroke="none" d="M0 0h24v24H0z" fill="none" /><path d="M5 21v-16a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v16l-3 -2l-2 2l-2 -2l-2 2l-2 -2l-3 2" /><path d="M15 7h-6h1a3 3 0 0 1 0 6h-1l3 3" /><path d="M9 10h6" /></svg>'
    ],

    [
        'title'=>'Create Expense',
        'route'=>'expenses.create',
        'color'=>'red',
        'svg'=>' <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-database-leak"><path stroke="none" d="M0 0h24v24H0z" fill="none" /><path d="M4 6c0 1.657 3.582 3 8 3s8 -1.343 8 -3s-3.582 -3 -8 -3s-8 1.343 -8 3" /><path d="M4 6v12c0 1.657 3.582 3 8 3s8 -1.343 8 -3v-12" /><path d="M4 15a2.4 2.4 0 0 0 2 -1a2.4 2.4 0 0 1 2 -1a2.4 2.4 0 0 1 2 1a2.4 2.4 0 0 0 2 1a2.4 2.4 0 0 0 2 -1a2.4 2.4 0 0 1 2 -1a2.4 2.4 0 0 1 2 1a2.4 2.4 0 0 0 2 1" /></svg>'
    ],

    [
        'title'=>'Create Contra',
        'route'=>'contra.create',
        'color'=>'yellow',
        'svg'=>'<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-contrast-2"><path stroke="none" d="M0 0h24v24H0z" fill="none" /><path d="M3 5a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v14a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2l0 -14" /><path d="M3 19h2.25c3.728 0 6.75 -3.134 6.75 -7s3.022 -7 6.75 -7h2.25" /></svg>'
    ],

    [
        'title'=>'Create Journal',
        'route'=>'journal.create',
        'color'=>'indigo',
        'svg'=>'<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-notebook"><path stroke="none" d="M0 0h24v24H0z" fill="none" /><path d="M6 4h11a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-11a1 1 0 0 1 -1 -1v-14a1 1 0 0 1 1 -1m3 0v18" /><path d="M13 8l2 0" /><path d="M13 12l2 0" /></svg>'
    ],

];
$businessCards = [

    [
        'title'=>'Total Sales',
        'amount'=>'₹2,45,680',
        'leftBorder' => 'border-success',
        'color'=>'green',
        'svg'=>'
        <svg xmlns="http://www.w3.org/2000/svg" 
        width="24" height="24" 
        viewBox="0 0 24 24" 
        fill="none" 
        stroke="currentColor" 
        stroke-width="2" 
        stroke-linecap="round" 
        stroke-linejoin="round">
        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
        <path d="M15 5h-8"/>
        <path d="M15 9h-8"/>
        <path d="M9 5c3 0 5 2 5 4s-2 4-5 4h-1l6 6"/>
        </svg>',
        'stats'=>[
            ['label'=>'Invoice','value'=>'356'],
            ['label'=>'Growth','value'=>'+18%'],
            ['label'=>'Today','value'=>'₹18.5K'],
        ]

    ],



    [
        'title'=>'Total Purchase',
        'amount'=>'₹1,85,420',
        'color'=>'primary',

        'svg'=>'
        <svg xmlns="http://www.w3.org/2000/svg"
        width="24" height="24"
        viewBox="0 0 24 24"
        fill="none"
        stroke="currentColor"
        stroke-width="2"
        stroke-linecap="round"
        stroke-linejoin="round">

        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>

        <path d="M6.331 8h11.339a2 2 0 0 1 1.977 2.304l-1.255 8.152a3 3 0 0 1 -2.966 2.544h-6.852a3 3 0 0 1 -2.965 -2.544l-1.255 -8.152a2 2 0 0 1 1.977 -2.304"/>

        <path d="M9 11v-5a3 3 0 0 1 6 0v5"/>

        </svg>
        ',

        'stats'=>[
            ['label'=>'Bills','value'=>'120'],
            ['label'=>'Growth','value'=>'+12%'],
            ['label'=>'Today','value'=>'₹12K'],
        ]

    ],



    [
        'title'=>'Total Expenses',
        'amount'=>'₹45,680',
        'color'=>'danger',
        'svg'=>'
        <svg xmlns="http://www.w3.org/2000/svg"
        width="24" height="24"
        viewBox="0 0 24 24"
        fill="none"
        stroke="currentColor"
        stroke-width="2"
        stroke-linecap="round"
        stroke-linejoin="round">
        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
        <path d="M12 3v18"/>
        <path d="M17 7h-6a3 3 0 0 0 0 6h2a3 3 0 0 1 0 6h-6"/>
        </svg>',
        'stats'=>[
            ['label'=>'Entries','value'=>'85'],
            ['label'=>'Month','value'=>'₹45K'],
            ['label'=>'Today','value'=>'₹2.5K'],
        ]

    ],

];
$helpCards = [

    [
        'title' => 'Book Demo',
        'url' => '#',
        'color' => 'primary',
        'svg' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
        viewBox="0 0 24 24" fill="none" stroke="currentColor"
        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
        <path d="M4 7a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2z"/>
        <path d="M16 3v4"/>
        <path d="M8 3v4"/>
        <path d="M4 11h16"/>
        <path d="M8 15h2v2h-2z"/>
        </svg>'
    ],

    [
        'title' => 'Live Chat',
        'url' => '#',
        'color' => 'purple',
        'svg' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
        viewBox="0 0 24 24" fill="none" stroke="currentColor"
        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
        <path d="M17.802 17.292s.077 -.055 .2 -.149c1.843 -1.425 3 -3.49 3 -5.789c0 -4.286 -4.03 -7.764 -9 -7.764c-4.97 0 -9 3.478 -9 7.764c0 4.288 4.03 7.646 9 7.646"/>
        <path d="M7.5 13.5c2.5 2.5 6.5 2.5 9 0"/>
        </svg>'
    ],

    [
        'title' => 'Video Guide',
        'url' => '#',
        'color' => 'cyan',
        'svg' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
        viewBox="0 0 24 24" fill="none" stroke="currentColor"
        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
        <path d="M15 10l4.553 -2.276a1 1 0 0 1 1.447 .894v6.764a1 1 0 0 1 -1.447 .894l-4.553 -2.276v-4"/>
        <path d="M3 8a2 2 0 0 1 2 -2h8a2 2 0 0 1 2 2v8a2 2 0 0 1 -2 2h-8a2 2 0 0 1 -2 -2z"/>
        </svg>'
    ],

    [
        'title' => 'Email Support',
        'url' => 'mailto:support@example.com',
        'color' => 'primary',
        'svg' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
        viewBox="0 0 24 24" fill="none" stroke="currentColor"
        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
        <path d="M3 7a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10"/>
        <path d="M3 7l9 6l9 -6"/>
        </svg>'
    ],

    [
        'title' => 'WhatsApp',
        'url' => '#',
        'color' => 'success',
        'svg' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
        viewBox="0 0 24 24" fill="none" stroke="currentColor"
        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
        <path d="M3 21l1.65 -3.8a9 9 0 1 1 3.4 2.9l-5.05 .9"/>
        <path d="M9 10a5 5 0 0 0 5 5"/>
        </svg>'
    ],

    [
        'title' => 'Help Desk',
        'url' => '#',
        'color' => 'dark',
        'svg' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
        viewBox="0 0 24 24" fill="none" stroke="currentColor"
        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
        <path d="M12 9h.01"/>
        <path d="M11 12h1v4h1"/>
        <circle cx="12" cy="12" r="9"/>
        </svg>'
    ],

];
$socialLinks = [
    [
        'name'  => 'Facebook',
        'url'   => '#',
        'color' => 'facebook',
        'svg'   => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-brand-meta">	<path stroke="none" d="M0 0h24v24H0z" fill="none" />	<path d="M12 10.174c1.766 -2.784 3.315 -4.174 4.648 -4.174c2 0 3.263 2.213 4 5.217c.704 2.869 .5 6.783 -2 6.783c-1.114 0 -2.648 -1.565 -4.148 -3.652a27.627 27.627 0 0 1 -2.5 -4.174" />	<path d="M12 10.174c-1.766 -2.784 -3.315 -4.174 -4.648 -4.174c-2 0 -3.263 2.213 -4 5.217c-.704 2.869 -.5 6.783 2 6.783c1.114 0 2.648 -1.565 4.148 -3.652c1 -1.391 1.833 -2.783 2.5 -4.174" /></svg>'
    ],

    [
        'name'  => 'Instagram',
        'url'   => '#',
        'color' => 'instagram',
        'svg'   => ' <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-brand-instagram"><path stroke="none" d="M0 0h24v24H0z" fill="none" /><path d="M4 8a4 4 0 0 1 4 -4h8a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-8a4 4 0 0 1 -4 -4l0 -8" /><path d="M9 12a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" /><path d="M16.5 7.5v.01" /></svg> '
    ],

    [
        'name'  => 'LinkedIn',
        'url'   => '#',
        'color' => 'linkedin',
        'svg'   => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-brand-linkedin">	<path stroke="none" d="M0 0h24v24H0z" fill="none" />	<path d="M8 11v5" />	<path d="M8 8v.01" />	<path d="M12 16v-5" />	<path d="M16 16v-3a2 2 0 1 0 -4 0" />	<path d="M3 7a4 4 0 0 1 4 -4h10a4 4 0 0 1 4 4v10a4 4 0 0 1 -4 4h-10a4 4 0 0 1 -4 -4l0 -10" /></svg>'
    ],

    [
        'name'  => 'YouTube',
        'url'   => '#',
        'color' => 'youtube',
        'svg'   => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-brand-youtube">	<path stroke="none" d="M0 0h24v24H0z" fill="none" />	<path d="M2 8a4 4 0 0 1 4 -4h12a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-12a4 4 0 0 1 -4 -4v-8" />	<path d="M10 9l5 3l-5 3l0 -6" /></svg>                            '
    ],

    [
        'name'  => 'Twitter',
        'url'   => '#',
        'color' => 'twitter',
        'svg'   => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-brand-x">	<path stroke="none" d="M0 0h24v24H0z" fill="none" />	<path d="M4 4l11.733 16h4.267l-11.733 -16l-4.267 0" />	<path d="M4 20l6.768 -6.768m2.46 -2.46l6.772 -6.772" /></svg>                            '
    ],

];


@endphp


@section('content')
 <div class="page-wrapper" style="background-color: #ebf1ff; min-height: 100vh; padding: 5px;"  >
    <div class="row">
        <div class="col-md-9">
            <div class="dashboard-header card border-0 shadow-sm rounded-4 mb-3" style="background-color: #F8F9FA">
                <div class="card-body py-3 px-4">
                    <div class="row align-items-center g-2">
                        <!-- Left -->
                        <div class="col-lg-6 col-md-12">
                            <span class="badge bg-orange-lt text-orange mb-2">
                                Welcome Back
                            </span>
                            <h2 class="fw-bold mb-1">
                                Good Morning,
                                <span style="color:#eb5a25;">
                                    Saurabh 👋
                                </span>
                            </h2>
                            <div class="text-secondary">
                                {{ now()->format('l, d F Y') }}
                            </div>
                        </div>
                        <!-- Right -->
                        <div class="col-lg-6">
                            <div class="d-flex justify-content-lg-end align-items-center gap-2 flex-wrap">
                                <button class="btn btn-light">Explore Plan</button>
                                <button class="btn btn-light">TechNest Services (2026-27)</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="page-body">
                <div class="col-auto">
                      <div class="row g-2 mb-3">
                        @foreach($dashboardCards as $card)
                        <div class="col-lg-6">
                            <div class="card border-0 shadow-sm rounded-4 h-100 dashboard-card" style="background: var(--cardbg)">
                                <div class="card-body p-4">
                                    <div class="d-flex justify-content-between align-items-center mb-4">
                                        <div class="d-flex align-items-center">
                                         <div class="icon-box {{ $card['iconBg'] ?? 'bg-orange-lt' }} me-3">
                                              {!! $card['icon'] !!}
                                        </div>
                                        <div>
                                        <h3 class="mb-0">{{ $card['title'] }}</h3>
                                        <small class="text-muted">
                                         {{ $card['subtitle'] }}
                                        </small>
                                    </div>
                                </div>
                                <span class="badge {{ $card['badgeClass'] }}">
                                {{ $card['badge'] }}
                                </span>
                            </div>
                            <div class="row g-3">
                                @foreach($card['items'] as $item)
                                <div class="col-md-6">
                                    <div class="mini-card {{ $item['class'] }}" style="background: var(--cardbg)">
                                        <div class="d-flex justify-content-between"> 
                                            <div>
                                                <small>{{ $item['title'] }}</small>
                                                <h2 class="fs-1 fw-bold mt-1"> {{ $item['amount'] }} </h2>
                                                <span class="{{ $item['trendClass'] }}">{{ $item['trend'] }}</span>
                                            </div>
                                       <div class="mini-icon {{ $item['iconBg'] }}">
                                            {!! $item['icon'] !!}
                                        </div>
                                    </div>
                                </div>
                            </div> @endforeach
                        </div>
                    </div>
                </div>
            </div> @endforeach
                    </div>
                    {{-- Business Operations --}}
                 <div class="card card-sm rounded-4 mb-3" style="background: var(--cardbg)">
                    <div class="card-body">
                        <h3 class="h3 mb-3">
                        Business Operations
                        </h3>
                        <div class="row row-cards">
                        @foreach($businessCards as $card)
                            <div class="col-12 col-md-6 col-xl-4">
                                <div class="card rounded-4 h-100" style="background: var(--cardbg)">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <div>
                                                <div class="text-secondary text-uppercase fw-bold small">
                                                {{ $card['title'] }}
                                                </div>
                                                <div class="fs-1 fw-bold mt-1">
                                                {{ $card['amount'] }}
                                                </div>
                                            </div>
                                            <div class="ms-auto">
                                                <div class="mini-icon bg-{{ $card['color'] }}-lt">
                                                    {!! $card['svg'] !!}
                                                </div>
                                            </div>
                                        </div>
                                    <div class="row text-center mt-4">
                                    @foreach($card['stats'] as $index=>$stat)
                                    <div class="col 
                                    {{ $index != 0 ? 'border-start':'' }}">
                                    <div class="text-secondary small">
                                    {{ $stat['label'] }}
                                    </div>
                                    <div class="fw-bold fs-3">
                                    {{ $stat['value'] }}
                                    </div>
                                </div>
                            @endforeach
                             </div>
                        </div>
                    </div>
                      </div>
                    @endforeach
                        </div>
                    </div>
                </div>
                    {{-- quick access card --}}
                <div class="card card-sm rounded-4 mt-2 mb-4" style="background: var(--cardbg)">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-start mb-3">
                            <div>
                                <h3 class="h3 mb-1">
                                    Quick Access
                                </h3>
                                <h5 class="text-muted">
                                    Get started quickly with these common actions.
                                </h5>
                            </div>
                            <button class="btn btn-outline-light btn-sm"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#moreQuickActions"
                                    aria-expanded="false">

                                <span class="view-text btn btn-light">
                                    View More
                                </span>                                   
                            </button>
                        </div>
                            {{-- quick access menues  --}}
                            <div class="row row-cards g-3" >
                                @foreach(array_slice($quickActions, 0, 6) as $action)
                                <div class="col-6 col-md-4 col-lg-3 col-xl-2">
                                    <a href="#" class="quick-card" >
                                        <div class="card rounded-4 h-100" style="background: var(--cardbg)">
                                            <div class="card-body text-center p-3">
                                                <div class="mini-icon bg-{{ $action['color'] }}-lt mx-auto mb-2">
                                                    {!! $action['svg'] !!}
                                                </div>
                                                <div class="fw-bold text-secondary">
                                                    {{ $action['title'] }}
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                @endforeach
                            </div>
                            <div class="collapse mt-3" id="moreQuickActions">
                                <div class="row row-cards g-3">
                                    @foreach(array_slice($quickActions, 6, 12) as $action)
                                    <div class="col-6 col-md-4 col-lg-3 col-xl-2">
                                        <a href="#" class="quick-card">
                                            <div class="card rounded-4 h-100" style="background: var(--cardbg)">
                                                <div class="card-body text-center p-3">
                                                    <div class="mini-icon bg-{{ $action['color'] }}-lt mx-auto mb-2">
                                                        {!! $action['svg'] !!}
                                                    </div>
                                                    <div class="fw-bold text-secondary">
                                                        {{ $action['title'] }}
                                                </div>
                                            </div>
                                        </div>
                                        </a>
                                    </div>
                                    @endforeach
                                </div>
                            </div>            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- side menues --}}
        <div class="col-md-3 col-sm-3 col-lg-3" >
            <div class="card rounded-3" style="background: var(--cardbg)">
                <div class="card-body p-3">
                    <h3 class="card-title">
                        Need help? We've got your back
                    </h3>
                    <h5 class="card-subtitle text-muted">
                        Perhaps you can find the answers in our collections.
                    </h5>
                </div>
                {{-- help section --}}
                <div class="row row-cards g-2 p-2">
                    @foreach($helpCards as $help)
                        <div class="col-6 col-md-4">                 
                            <a href="{{ $help['url'] }}"
                            class="quick-card">
                                <div class="card rounded-4 h-100" style="background: var(--cardbg)">
                                    <div class="card-body text-center p-2">
                                            <div class="mini-icon bg-{{ $help['color'] }}-lt mx-auto mb-2">
                                                {!! $help['svg'] !!}
                                            </div>
                                        <div class="text-secondary fw-bold small">
                                            {{ $help['title'] }}
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="card card-sm rounded-3 mt-2 shadow-sm ">
                <div class="card-body p-3" style="background: var(--cardbg)">
                    <h3 class="card-title mb-1">Follow Us</h3>
                    <h4 class="card-subtitle text-muted mb-3">
                        Don't miss any updates.
                    </h4>             
                  <div class="d-flex gap-3 flex-wrap">
                        @foreach($socialLinks as $social)
                            <a href="{{ $social['url'] }}"
                            class="social-icon {{ strtolower($social['name']) }}"
                            target="_blank">
                                <div class="mini-icon bg-{{ $social['color'] }}-lt mx-auto mb-2">
                                    {!! $social['svg'] !!}
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
             <div class="card card-sm rounded-3 mt-2 shadow-sm" style="background: var(--cardbg)">
                    <div class="card-body">
                        <h5 class="card-title">Recent Activity</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
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

<script>
    document
    .querySelector('#moreQuickActions')
    .addEventListener('show.bs.collapse', function () {
    document.querySelector('.view-text').innerHTML = "View Less";
    });
    document
    .querySelector('#moreQuickActions')
    .addEventListener('hide.bs.collapse', function () {
    document.querySelector('.view-text').innerHTML = "View More";
    });


</script>