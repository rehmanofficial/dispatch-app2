@extends('layouts.app')
@section('content')
<div class="content">

    <!-- Start::main-content -->
    <div class="main-content">

    <!-- Page Header -->
    <div class="block justify-between page-header md:flex">
        <div>
            <h3 class="text-gray-700 hover:text-gray-900 dark:text-white dark:hover:text-white text-2xl font-medium"> All Loads</h3>
        </div>
        <ol class="flex items-center whitespace-nowrap min-w-0">
            <li class="text-sm">
                <a class="flex items-center font-semibold text-primary hover:text-primary dark:text-primary truncate" href="javascript:void(0);">
                Home
                <i class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-gray-300 dark:text-gray-300 rtl:rotate-180"></i>
                </a>
            </li>
            <li class="text-sm text-gray-500 hover:text-primary dark:text-white/70 " aria-current="page">
                Loads
            </li>
        </ol>
    </div>
    <!-- Page Header Close -->

    <!-- Start::row-3 -->
    <div class="grid grid-cols-12 gap-x-6">
        <div class="col-span-12">
        <div class="box">
            <div class="box-header">
            <div class="flex">
                <h5 class="box-title my-auto">All Loads</h5>
                <div class="hs-dropdown ti-dropdown block ltr:ml-auto rtl:mr-auto my-auto">                    
                <button type="button" class="hs-dropdown-toggle ti-dropdown-toggle rounded-sm p-1 px-3 !border border-gray-200 text-gray-400 hover:text-gray-500 hover:bg-gray-200 hover:border-gray-200 focus:ring-gray-200  dark:hover:bg-black/30 dark:border-white/10 dark:hover:border-white/20 dark:focus:ring-white/10 dark:focus:ring-offset-white/10">
                    Actions <i class="ti ti-chevron-down"></i></button>
                <div class="hs-dropdown-menu ti-dropdown-menu">
                    <a class="ti-dropdown-item" href="javascript:void(0)">Download PDF</a>
                    <a class="ti-dropdown-item" href="javascript:void(0)">Export CSV</a>
                    <a class="ti-dropdown-item" href="javascript:void(0)">Add a new Load</a>
                </div>
                </div>
            </div>
            </div>
            <div class="box-body">
            <div class="table-bordered rounded-sm ti-custom-table-head overflow-auto">
                <table class="ti-custom-table ti-custom-table-head whitespace-nowrap">
                <thead class="bg-gray-50 dark:bg-black/20">
                    <tr class="">
                    <th scope="col" class="dark:text-white/80">S.no</th>
                    <th scope="col" class="dark:text-white/80">Dispatcher Name</th>
                    <th scope="col" class="dark:text-white/80">Customer ID</th>
                    <th scope="col" class="dark:text-white/80 min-w-[300px]">Driver</th>
                    <th scope="col" class="dark:text-white/80">Ordered Date</th>
                    <th scope="col" class="dark:text-white/80">Status</th>
                    <th scope="col" class="dark:text-white/80">Price</th>
                    <th scope="col" class="dark:text-white/80">Action</th>
                    </tr>
                </thead>
                <tbody class="">
                    <tr class="">
                    <td>#1</td>
                    <td>
                        <div class="flex space-x-3 rtl:space-x-reverse w-full">
                        <div class="block w-full my-auto">
                            <span class="block text-sm font-semibold text-gray-800 dark:text-gray-300 min-w-[180px] truncate">Nouamn Javaid</span>
                        </div>
                        </div>
                    </td>
                    <td class="!text-success font-semibold text-base">#user1</td>
                    <td>
                        <div class="flex space-x-3 rtl:space-x-reverse text-start">
                        <div class="block my-auto">
                            <p class="block text-sm font-semibold my-auto text-gray-800 dark:text-white">Socrates
                            Itumay</p>
                        </div>
                        </div>
                    </td>
                    <td>10-12-2022</td>
                    <td><span class="truncate whitespace-nowrap inline-block py-1 px-3 rounded-full text-xs font-medium bg-success/10 text-success/80">Success</span>
                    </td>
                    <td>$999</td>
                    <td class="font-medium space-x-2 rtl:space-x-reverse">
                        <div class="hs-tooltip ti-main-tooltip">
                        <a href="javascript:void(0);" class="m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-primary">
                            <i class="ti ti-eye"></i>
                            <span class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700" role="tooltip">
                            View
                            </span>
                        </a>
                        </div>
                        <div class="hs-tooltip ti-main-tooltip">
                        <a href="javascript:void(0);" class="customer-edit m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-secondary">
                            <i class="ti ti-pencil"></i>
                            <span class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700" role="tooltip">
                            Edit
                            </span>
                        </a>
                        </div>
                        <div class="hs-tooltip ti-main-tooltip">
                        <a href="javascript:void(0);" class="m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-danger">
                            <i class="ti ti-trash"></i>
                            <span class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700" role="tooltip">
                            Delete
                            </span>
                        </a>
                        </div>
                    </td>
                    </tr>
                    <tr class="">
                    <td>#2</td>
                    <td>
                        <div class="flex space-x-3 rtl:space-x-reverse w-full">
                        <div class="block w-full my-auto">
                            <span class="block text-sm font-semibold text-gray-800 dark:text-gray-300 min-w-[180px] truncate">Farhan Hashmi</span>
                        </div>
                        </div>
                    </td>
                    <td class="!text-success font-semibold text-base">#user1</td>
                    <td>
                        <div class="flex space-x-3 rtl:space-x-reverse text-start">
                        <div class="block my-auto">
                            <p class="block text-sm font-semibold my-auto text-gray-800 dark:text-white">Socrates
                            Itumay</p>
                        </div>
                        </div>
                    </td>
                    <td>10-12-2022</td>
                    <td><span class="truncate whitespace-nowrap inline-block py-1 px-3 rounded-full text-xs font-medium bg-success/10 text-success/80">Success</span>
                    </td>
                    <td>$999</td>
                    <td class="font-medium space-x-2 rtl:space-x-reverse">
                        <div class="hs-tooltip ti-main-tooltip">
                        <a href="javascript:void(0);" class="m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-primary">
                            <i class="ti ti-eye"></i>
                            <span class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700" role="tooltip">
                            View
                            </span>
                        </a>
                        </div>
                        <div class="hs-tooltip ti-main-tooltip">
                        <a href="javascript:void(0);" class="customer-edit m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-secondary">
                            <i class="ti ti-pencil"></i>
                            <span class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700" role="tooltip">
                            Edit
                            </span>
                        </a>
                        </div>
                        <div class="hs-tooltip ti-main-tooltip">
                        <a href="javascript:void(0);" class="m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-danger">
                            <i class="ti ti-trash"></i>
                            <span class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700" role="tooltip">
                            Delete
                            </span>
                        </a>
                        </div>
                    </td>
                    </tr>
                    <tr class="">
                    <td>#3</td>
                    <td>
                        <div class="flex space-x-3 rtl:space-x-reverse w-full">
                        <div class="block w-full my-auto">
                            <span class="block text-sm font-semibold text-gray-800 dark:text-gray-300 min-w-[180px] truncate">Ali Khan</span>
                        </div>
                        </div>
                    </td>
                    <td class="!text-success font-semibold text-base">#user1</td>
                    <td>
                        <div class="flex space-x-3 rtl:space-x-reverse text-start">
                        <div class="block my-auto">
                            <p class="block text-sm font-semibold my-auto text-gray-800 dark:text-white">Socrates
                            Itumay</p>
                        </div>
                        </div>
                    </td>
                    <td>10-12-2022</td>
                    <td><span class="truncate whitespace-nowrap inline-block py-1 px-3 rounded-full text-xs font-medium bg-success/10 text-success/80">Success</span>
                    </td>
                    <td>$999</td>
                    <td class="font-medium space-x-2 rtl:space-x-reverse">
                        <div class="hs-tooltip ti-main-tooltip">
                        <a href="javascript:void(0);" class="m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-primary">
                            <i class="ti ti-eye"></i>
                            <span class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700" role="tooltip">
                            View
                            </span>
                        </a>
                        </div>
                        <div class="hs-tooltip ti-main-tooltip">
                        <a href="javascript:void(0);" class="customer-edit m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-secondary">
                            <i class="ti ti-pencil"></i>
                            <span class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700" role="tooltip">
                            Edit
                            </span>
                        </a>
                        </div>
                        <div class="hs-tooltip ti-main-tooltip">
                        <a href="javascript:void(0);" class="m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-danger">
                            <i class="ti ti-trash"></i>
                            <span class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700" role="tooltip">
                            Delete
                            </span>
                        </a>
                        </div>
                    </td>
                    </tr>
                    <tr class="">
                    <td>#4</td>
                    <td>
                        <div class="flex space-x-3 rtl:space-x-reverse w-full">
                        <div class="block w-full my-auto">
                            <span class="block text-sm font-semibold text-gray-800 dark:text-gray-300 min-w-[180px] truncate">Umair Khan</span>
                        </div>
                        </div>
                    </td>
                    <td class="!text-success font-semibold text-base">#user1</td>
                    <td>
                        <div class="flex space-x-3 rtl:space-x-reverse text-start">
                        <div class="block my-auto">
                            <p class="block text-sm font-semibold my-auto text-gray-800 dark:text-white">Socrates
                            Itumay</p>
                        </div>
                        </div>
                    </td>
                    <td>10-12-2022</td>
                    <td><span class="truncate whitespace-nowrap inline-block py-1 px-3 rounded-full text-xs font-medium bg-success/10 text-success/80">Success</span>
                    </td>
                    <td>$999</td>
                    <td class="font-medium space-x-2 rtl:space-x-reverse">
                        <div class="hs-tooltip ti-main-tooltip">
                        <a href="javascript:void(0);" class="m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-primary">
                            <i class="ti ti-eye"></i>
                            <span class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700" role="tooltip">
                            View
                            </span>
                        </a>
                        </div>
                        <div class="hs-tooltip ti-main-tooltip">
                        <a href="javascript:void(0);" class="customer-edit m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-secondary">
                            <i class="ti ti-pencil"></i>
                            <span class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700" role="tooltip">
                            Edit
                            </span>
                        </a>
                        </div>
                        <div class="hs-tooltip ti-main-tooltip">
                        <a href="javascript:void(0);" class="m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-danger">
                            <i class="ti ti-trash"></i>
                            <span class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700" role="tooltip">
                            Delete
                            </span>
                        </a>
                        </div>
                    </td>
                    </tr>
                    <tr class="">
                    <td>#5</td>
                    <td>
                        <div class="flex space-x-3 rtl:space-x-reverse w-full">
                        <div class="block w-full my-auto">
                            <span class="block text-sm font-semibold text-gray-800 dark:text-gray-300 min-w-[180px] truncate">James Bond</span>
                        </div>
                        </div>
                    </td>
                    <td class="!text-success font-semibold text-base">#user1</td>
                    <td>
                        <div class="flex space-x-3 rtl:space-x-reverse text-start">
                        <div class="block my-auto">
                            <p class="block text-sm font-semibold my-auto text-gray-800 dark:text-white">Socrates
                            Itumay</p>
                        </div>
                        </div>
                    </td>
                    <td>10-12-2022</td>
                    <td><span class="truncate whitespace-nowrap inline-block py-1 px-3 rounded-full text-xs font-medium bg-success/10 text-success/80">Success</span>
                    </td>
                    <td>$999</td>
                    <td class="font-medium space-x-2 rtl:space-x-reverse">
                        <div class="hs-tooltip ti-main-tooltip">
                        <a href="javascript:void(0);" class="m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-primary">
                            <i class="ti ti-eye"></i>
                            <span class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700" role="tooltip">
                            View
                            </span>
                        </a>
                        </div>
                        <div class="hs-tooltip ti-main-tooltip">
                        <a href="javascript:void(0);" class="customer-edit m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-secondary">
                            <i class="ti ti-pencil"></i>
                            <span class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700" role="tooltip">
                            Edit
                            </span>
                        </a>
                        </div>
                        <div class="hs-tooltip ti-main-tooltip">
                        <a href="javascript:void(0);" class="m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-danger">
                            <i class="ti ti-trash"></i>
                            <span class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700" role="tooltip">
                            Delete
                            </span>
                        </a>
                        </div>
                    </td>
                    </tr>
                    <tr class="">
                    <td>#6</td>
                    <td>
                        <div class="flex space-x-3 rtl:space-x-reverse w-full">
                        <div class="block w-full my-auto">
                            <span class="block text-sm font-semibold text-gray-800 dark:text-gray-300 min-w-[180px] truncate">Ehtisham Ali</span>
                        </div>
                        </div>
                    </td>
                    <td class="!text-success font-semibold text-base">#user1</td>
                    <td>
                        <div class="flex space-x-3 rtl:space-x-reverse text-start">
                        <div class="block my-auto">
                            <p class="block text-sm font-semibold my-auto text-gray-800 dark:text-white">Socrates
                            Itumay</p>
                        </div>
                        </div>
                    </td>
                    <td>10-12-2022</td>
                    <td><span class="truncate whitespace-nowrap inline-block py-1 px-3 rounded-full text-xs font-medium bg-success/10 text-success/80">Success</span>
                    </td>
                    <td>$999</td>
                    <td class="font-medium space-x-2 rtl:space-x-reverse">
                        <div class="hs-tooltip ti-main-tooltip">
                        <a href="javascript:void(0);" class="m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-primary">
                            <i class="ti ti-eye"></i>
                            <span class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700" role="tooltip">
                            View
                            </span>
                        </a>
                        </div>
                        <div class="hs-tooltip ti-main-tooltip">
                        <a href="javascript:void(0);" class="customer-edit m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-secondary">
                            <i class="ti ti-pencil"></i>
                            <span class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700" role="tooltip">
                            Edit
                            </span>
                        </a>
                        </div>
                        <div class="hs-tooltip ti-main-tooltip">
                        <a href="javascript:void(0);" class="m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-danger">
                            <i class="ti ti-trash"></i>
                            <span class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700" role="tooltip">
                            Delete
                            </span>
                        </a>
                        </div>
                    </td>
                    </tr>
                    <tr class="">
                    <td>#7</td>
                    <td>
                        <div class="flex space-x-3 rtl:space-x-reverse w-full">
                        <div class="block w-full my-auto">
                            <span class="block text-sm font-semibold text-gray-800 dark:text-gray-300 min-w-[180px] truncate">Maham Liaqat</span>
                        </div>
                        </div>
                    </td>
                    <td class="!text-success font-semibold text-base">#user1</td>
                    <td>
                        <div class="flex space-x-3 rtl:space-x-reverse text-start">
                        <div class="block my-auto">
                            <p class="block text-sm font-semibold my-auto text-gray-800 dark:text-white">Socrates
                            Itumay</p>
                        </div>
                        </div>
                    </td>
                    <td>10-12-2022</td>
                    <td><span class="truncate whitespace-nowrap inline-block py-1 px-3 rounded-full text-xs font-medium bg-success/10 text-success/80">Success</span>
                    </td>
                    <td>$999</td>
                    <td class="font-medium space-x-2 rtl:space-x-reverse">
                        <div class="hs-tooltip ti-main-tooltip">
                        <a href="javascript:void(0);" class="m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-primary">
                            <i class="ti ti-eye"></i>
                            <span class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700" role="tooltip">
                            View
                            </span>
                        </a>
                        </div>
                        <div class="hs-tooltip ti-main-tooltip">
                        <a href="javascript:void(0);" class="customer-edit m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-secondary">
                            <i class="ti ti-pencil"></i>
                            <span class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700" role="tooltip">
                            Edit
                            </span>
                        </a>
                        </div>
                        <div class="hs-tooltip ti-main-tooltip">
                        <a href="javascript:void(0);" class="m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-danger">
                            <i class="ti ti-trash"></i>
                            <span class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700" role="tooltip">
                            Delete
                            </span>
                        </a>
                        </div>
                    </td>
                    </tr>
                    <tr class="">
                    <td>#8</td>
                    <td>
                        <div class="flex space-x-3 rtl:space-x-reverse w-full">
                        <div class="block w-full my-auto">
                            <span class="block text-sm font-semibold text-gray-800 dark:text-gray-300 min-w-[180px] truncate">Nouamn Javaid</span>
                        </div>
                        </div>
                    </td>
                    <td class="!text-success font-semibold text-base">#user1</td>
                    <td>
                        <div class="flex space-x-3 rtl:space-x-reverse text-start">
                        <div class="block my-auto">
                            <p class="block text-sm font-semibold my-auto text-gray-800 dark:text-white">Socrates
                            Itumay</p>
                        </div>
                        </div>
                    </td>
                    <td>10-12-2022</td>
                    <td><span class="truncate whitespace-nowrap inline-block py-1 px-3 rounded-full text-xs font-medium bg-success/10 text-success/80">Success</span>
                    </td>
                    <td>$999</td>
                    <td class="font-medium space-x-2 rtl:space-x-reverse">
                        <div class="hs-tooltip ti-main-tooltip">
                        <a href="javascript:void(0);" class="m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-primary">
                            <i class="ti ti-eye"></i>
                            <span class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700" role="tooltip">
                            View
                            </span>
                        </a>
                        </div>
                        <div class="hs-tooltip ti-main-tooltip">
                        <a href="javascript:void(0);" class="customer-edit m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-secondary">
                            <i class="ti ti-pencil"></i>
                            <span class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700" role="tooltip">
                            Edit
                            </span>
                        </a>
                        </div>
                        <div class="hs-tooltip ti-main-tooltip">
                        <a href="javascript:void(0);" class="m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-danger">
                            <i class="ti ti-trash"></i>
                            <span class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700" role="tooltip">
                            Delete
                            </span>
                        </a>
                        </div>
                    </td>
                    </tr>                                                                    
                </tbody>
                </table>
            </div>
            </div>
        </div>
        </div>
    </div>
    <!-- End::row-3 -->

    </div>
    <!-- Start::main-content -->

</div>
@endsection