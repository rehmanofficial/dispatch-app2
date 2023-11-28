@extends('layouts.app')
@section('content')
    <div class="content">

        <!-- Start::main-content -->
        <div class="main-content">

        <!-- Page Header -->
        <div class="block justify-between page-header md:flex">
            <div>
                <h3 class="text-gray-700 hover:text-gray-900 dark:text-white dark:hover:text-white text-2xl font-medium"> Invoices</h3>
            </div>
            <ol class="flex items-center whitespace-nowrap min-w-0">
                <li class="text-sm">
                    <a class="flex items-center font-semibold text-primary hover:text-primary dark:text-primary truncate" href="javascript:void(0);">
                    Home
                    <i class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-gray-300 dark:text-gray-300 rtl:rotate-180"></i>
                    </a>
                </li>
                <li class="text-sm text-gray-500 hover:text-primary dark:text-white/70 " aria-current="page">
                    Invoices
                </li>
            </ol>
        </div>
        <!-- Page Header Close -->

        <!-- Start::row-2 -->
        <div class="grid grid-cols-12 gap-x-5">
            <div class="col-span-12 lg:col-span-12 xxl:col-span-12\">
            <div class="box">
                <div class="box-header flex">
                <h5 class="box-title my-auto">Invoices</h5>
                <div class="hs-dropdown ti-dropdown block ltr:ml-auto rtl:mr-auto my-auto">
                    <button type="button" aria-label="button" class="hs-dropdown-toggle ti-dropdown-toggle rounded-sm p-2 bg-white !border border-gray-200 text-gray-500 hover:bg-gray-100  focus:ring-gray-200 dark:bg-black/20 dark:hover:bg-black/30 dark:border-white/10 dark:hover:border-white/20 dark:focus:ring-white/10 dark:focus:ring-offset-white/10">
                    <i class="text-sm leading-none ti ti-dots-vertical"></i>
                    </button>
                    <div class="hs-dropdown-menu ti-dropdown-menu">
                    <a class="ti-dropdown-item" href="javascript:void(0)">Download PDF</a>
                    <a class="ti-dropdown-item" href="javascript:void(0)">Export CSV</a>
                    <a class="ti-dropdown-item" href="javascript:void(0)">Add New Invoice</a>
                    <a class="ti-dropdown-item" href="javascript:void(0)">Add Old Invoice</a>
                    </div>
                </div>
                </div>
                <div class="box-body p-0">
                <div class="overflow-auto">
                    <table class="ti-custom-table ti-custom-table-head">
                    <thead>
                        <tr>
                        <th scope="col" class="text-center !p-[0.65rem]">Invoice No.</th>
                        <th scope="col" class="!p-[0.65rem]">Dispather Name</th>
                        <th scope="col" class="!p-[0.65rem]">Status</th>
                        <th scope="col" class="!p-[0.65rem]">Amount</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <td class="leading-none !text-gray-800 dark:!text-white !p-[0.65rem] min-w-[180px] truncate">
                            #34465
                        </td>
                        <td class="!p-[0.65rem]">Nouman Javaid</td>
                        <td class="!p-[0.65rem] text-sm"><span class="badge leading-none bg-success/10 text-success rounded-sm">Completed</span></td>
                        <td class="!p-[0.65rem]">
                            <span class="text-sm font-semibold">$566</span>
                        </td>
                        </tr>
                        <tr>
                        <td class="leading-none !text-gray-800 dark:!text-white !p-[0.65rem] min-w-[180px] truncate">
                            #34466
                        </td>
                        <td class="!p-[0.65rem]">Abdul Rehman</td>
                        <td class="!p-[0.65rem] text-sm"><span class="badge leading-none bg-success/10 text-success rounded-sm">Completed</span></td>
                        <td class="!p-[0.65rem]">
                            <span class="text-sm font-semibold">$789</span>
                        </td>
                        </tr>
                        <tr>
                        <td class="leading-none !text-gray-800 dark:!text-white !p-[0.65rem] min-w-[180px] truncate">
                            #34467
                        </td>
                        <td class="!p-[0.65rem]">Itrat Kamal</td>
                        <td class="!p-[0.65rem] text-sm"><span class="badge leading-none bg-success/10 text-success rounded-sm">Completed</span></td>
                        <td class="!p-[0.65rem]">
                            <span class="text-sm font-semibold">$457</span>
                        </td>
                        </tr>
                        <tr>
                        <td class="leading-none !text-gray-800 dark:!text-white !p-[0.65rem] min-w-[180px] truncate">
                            #34468
                        </td>
                        <td class="!p-[0.65rem]">Nouman Javaid</td>
                        <td class="!p-[0.65rem] text-sm"><span class="badge leading-none bg-success/10 text-success rounded-sm">Completed</span></td>
                        <td class="!p-[0.65rem]">
                            <span class="text-sm font-semibold">$877</span>
                        </td>
                        </tr>
                        <tr>
                        <td class="leading-none !text-gray-800 dark:!text-white !p-[0.65rem] min-w-[180px] truncate">
                            #34469
                        </td>
                        <td class="!p-[0.65rem]">Awais Afzal</td>
                        <td class="!p-[0.65rem] text-sm"><span class="badge leading-none bg-success/10 text-success rounded-sm">Completed</span></td>
                        <td class="!p-[0.65rem]">
                            <span class="text-sm font-semibold">$988</span>
                        </td>
                        </tr>
                        <tr>
                        <td class="leading-none !text-gray-800 dark:!text-white !p-[0.65rem] min-w-[180px] truncate">
                            #34470
                        </td>
                        <td class="!p-[0.65rem]">Umair Khan</td>
                        <td class="!p-[0.65rem] text-sm"><span class="badge leading-none bg-success/10 text-success rounded-sm">Completed</span></td>
                        <td class="!p-[0.65rem]">
                            <span class="text-sm font-semibold">$678</span>
                        </td>
                        </tr>
                        <tr>
                        <td class="leading-none !text-gray-800 dark:!text-white !p-[0.65rem] min-w-[180px] truncate">
                            #34471
                        </td>
                        <td class="!p-[0.65rem]">Nouman Javaid</td>
                        <td class="!p-[0.65rem] text-sm"><span class="badge leading-none bg-success/10 text-success rounded-sm">Completed</span></td>
                        <td class="!p-[0.65rem]">
                            <span class="text-sm font-semibold">$5669</span>
                        </td>
                        </tr>                                                                                          
                    </tbody>
                    </table>
                </div>
                </div>
            </div>
            </div>
        </div>
            <!-- End::row-2 -->

        </div>
        <!-- Start::main-content -->

    </div>
@endsection