@extends('layouts.app')
@section('content')
<div class="content">

      <!-- Start::main-content -->
      <div class="main-content">

        <!-- Page Header -->
        <div class="block justify-between page-header md:flex">
            <div>
                <h3 class="text-gray-700 hover:text-gray-900 dark:text-white dark:hover:text-white text-2xl font-medium"> Add New Load</h3>
            </div>
            <ol class="flex items-center whitespace-nowrap min-w-0">
                <li class="text-sm">
                  <a class="flex items-center font-semibold text-primary hover:text-primary dark:text-primary truncate" href="javascript:void(0);">
                    Home
                    <i class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-gray-300 dark:text-gray-300 rtl:rotate-180"></i>
                  </a>
                </li>
                <li class="text-sm text-gray-500 hover:text-primary dark:text-white/70 " aria-current="page">
                    Add New Load
                </li>
            </ol>
        </div>
        <!-- Page Header Close -->

        <!-- Start::row-1 -->
        <div class="grid grid-cols-12 gap-6">
            <div class="col-span-12">
                <div class="box">
                    <div class="box-header">
                        <h5 class="box-title">Booking Agent</h5>
                    </div>
                    <div class="box-body">
                        <form class="ti-custom-validation" novalidate="">
                            <div class="grid lg:grid-cols-2 gap-6">

                                <div class="space-y-2">
                                    <div class="flex">
                                        <input type="checkbox" class="ti-form-checkbox mt-0.5 pointer-events-none" id="hs-default-checkbox">
                                        <label for="hs-default-checkbox" class="text-sm text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70">Load for Booking Agent</label>
                                    </div>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End::row-1 -->        

        <!-- Start::row-1 -->
        <div class="grid grid-cols-12 gap-6">
            <div class="col-span-12">
                <div class="box">
                    <div class="box-header">
                        <h5 class="box-title">Load Details</h5>
                    </div>
                    <div class="box-body">
                        <form class="ti-custom-validation" novalidate="">
                            <div class="grid lg:grid-cols-2 gap-6">

                                <div class="space-y-2">
                                    <label class="ti-form-label mb-0">Load Origin</label>
                                    <select class="ti-form-select my-auto" id="select-beast" autocomplete="off">
                                        <option value="">Select...</option>
                                        <option value="4">Origin #1</option>
                                        <option value="1">Origin #2</option>
                                        <option value="3">Origin #3</option>
                                        <option value="5">Origin #4</option>
                                    </select>
                                </div>

                                <div class="space-y-2">
                                    <label class="ti-form-label mb-0">Load Destination</label>
                                    <select class="ti-form-select my-auto" id="select-beast" autocomplete="off">
                                        <option value="">Select...</option>
                                        <option value="4">Destination #1</option>
                                        <option value="1">Destination #2</option>
                                        <option value="3">Destination #3</option>
                                        <option value="5">Destination #4</option>
                                    </select>
                                </div> 

                                <div class="space-y-2">
                                    <label class="ti-form-label mb-0">Load Weight</label>
                                    <div class="flex rounded-sm">
                                        <input type="text" id="hs-trailing-multiple-add-on" class="ti-form-input ltr:rounded-r-none rtl:rounded-l-none focus:z-10" placeholder="768">
                                        <div class="px-4 inline-flex items-center min-w-fit border ltr:border-l-0 rtl:border-r-0 border-gray-200 bg-gray-50 dark:bg-black/20 dark:border-white/10">
                                            <span class="text-sm text-gray-500 dark:text-white/70">lbs</span>
                                        </div>
                                    </div>
                                </div> 

                                <div class="space-y-2">
                                    <label class="ti-form-label mb-0">Load Length</label>
                                    <div class="flex rounded-sm">
                                        <input type="text" id="hs-trailing-multiple-add-on" class="ti-form-input ltr:rounded-r-none rtl:rounded-l-none focus:z-10" placeholder="343">
                                        <div class="px-4 inline-flex items-center min-w-fit border ltr:border-l-0 rtl:border-r-0 border-gray-200 bg-gray-50 dark:bg-black/20 dark:border-white/10">
                                            <span class="text-sm text-gray-500 dark:text-white/70">feet</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="space-y-2">
                                    <label class="ti-form-label mb-0">Load Rate</label>
                                    <div class="flex rounded-sm">
                                        <input type="text" id="hs-trailing-multiple-add-on" class="ti-form-input ltr:rounded-r-none rtl:rounded-l-none focus:z-10" placeholder="100">
                                        <div class="px-4 inline-flex items-center min-w-fit border ltr:border-l-0 rtl:border-r-0 border-gray-200 bg-gray-50 dark:bg-black/20 dark:border-white/10">
                                            <span class="text-sm text-gray-500 dark:text-white/70">$</span>
                                        </div>
                                    </div>
                                </div> 

                                <div class="space-y-2">
                                    <label class="ti-form-label mb-0">Load Distance</label>
                                    <div class="flex rounded-sm">
                                        <input type="text" id="hs-trailing-multiple-add-on" class="ti-form-input ltr:rounded-r-none rtl:rounded-l-none focus:z-10" placeholder="343">
                                        <div class="px-4 inline-flex items-center min-w-fit border ltr:border-l-0 rtl:border-r-0 border-gray-200 bg-gray-50 dark:bg-black/20 dark:border-white/10">
                                            <span class="text-sm text-gray-500 dark:text-white/70">miles</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="space-y-2">
                                    <label class="ti-form-label mb-0">Load Type</label>
                                    <select class="ti-form-select my-auto" id="select-beast" autocomplete="off">
                                        <option value="">Select...</option>
                                        <option value="4">Type #1</option>
                                        <option value="1">Type #2</option>
                                        <option value="3">Type #3</option>
                                        <option value="5">Type #4</option>
                                    </select>
                                </div>

                                <div class="space-y-2">
                                    <label class="ti-form-label mb-0">Payment Type</label>
                                    <select class="ti-form-select my-auto" id="select-beast" autocomplete="off">
                                        <option value="">Select...</option>
                                        <option value="4">Payment Type #1</option>
                                        <option value="1">Payment Type #2</option>
                                        <option value="3">Payment Type #3</option>
                                        <option value="5">Payment Type #4</option>
                                    </select>
                                </div>

                                <div class="space-y-2">
                                    <label class="ti-form-label mb-0">Load ID</label>
                                    <input type="text" class="firstName my-auto ti-form-input" placeholder="#12435-2" value="#12435-2" required="">
                                    <span class="firstNameError text-red-500 text-xs hidden">error</span>
                                </div>

                                <div class="space-y-2">
                                    <label class="ti-form-label mb-0">Comments</label>
                                    <input type="text" class="firstName my-auto ti-form-input" placeholder="Comments" value="Comments" required="">
                                    <span class="firstNameError text-red-500 text-xs hidden">error</span>
                                </div>                                                                                                                                                                 

                            </div>

                            <div class="my-5">
                                <!--Spacer Before Button-->
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End::row-1 -->

        <!-- Start::row-1 -->
        <div class="grid grid-cols-12 gap-6">
            <div class="col-span-12">
                <div class="box">
                    <div class="box-header">
                        <h5 class="box-title">Pickup Information</h5>
                    </div>
                    <div class="box-body">
                        <form class="ti-custom-validation" novalidate="">
                            <div class="grid lg:grid-cols-2 gap-6">

                                <div class="space-y-2">
                                    <label class="ti-form-label mb-0">Shipper</label>
                                    <input type="text" class="firstName my-auto ti-form-input" placeholder="Shipper" required="">
                                </div>

                                <div class="space-y-2">
                                    <label class="ti-form-label mb-0">Load Pickup Date Time</label>
                                    <input type="date" class="firstName my-auto ti-form-input" required="">
                                </div>                                        

                                <div class="space-y-2">
                                    <label class="ti-form-label mb-0">Pickup Address</label>
                                    <input type="text" class="firstName my-auto ti-form-input" placeholder="Pickup Addres" required="">
                                    <span class="firstNameError text-red-500 text-xs hidden">error</span>
                                </div>

                                <div class="space-y-2">
                                    <label class="ti-form-label mb-0">Contact Phone</label>
                                    <input type="text" class="firstName my-auto ti-form-input" placeholder="(324-675-6578)" required="">
                                    <span class="firstNameError text-red-500 text-xs hidden">error</span>
                                </div> 

                                <div class="space-y-2">
                                    <label class="ti-form-label mb-0">Person at Pickup</label>
                                    <input type="text" class="firstName my-auto ti-form-input" placeholder="Person at Pickup" required="">
                                    <span class="firstNameError text-red-500 text-xs hidden">error</span>
                                </div>

                                <div class="space-y-2">
                                    <label class="ti-form-label mb-0">Pickup Instructions</label>
                                    <input type="text" class="firstName my-auto ti-form-input" placeholder="Pickup Instructions" required="">
                                    <span class="firstNameError text-red-500 text-xs hidden">error</span>
                                </div>                                                                                                                                                                                                          

                            </div>

                            <div class="my-5">
                                <!--Spacer Before Button-->
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End::row-1 -->  

        <!-- Start::row-1 -->
        <div class="grid grid-cols-12 gap-6">
            <div class="col-span-12">
                <div class="box">
                    <div class="box-header">
                        <h5 class="box-title">Delivery Information</h5>
                    </div>
                    <div class="box-body">
                        <form class="ti-custom-validation" novalidate="">
                            <div class="grid lg:grid-cols-2 gap-6">

                                <div class="space-y-2">
                                    <label class="ti-form-label mb-0">Consignee</label>
                                    <input type="text" class="firstName my-auto ti-form-input" placeholder="Consignee" required="">
                                </div>

                                <div class="space-y-2">
                                    <label class="ti-form-label mb-0">Load Dropoff Date Time</label>
                                    <input type="date" class="firstName my-auto ti-form-input" required="">
                                </div>                                        

                                <div class="space-y-2">
                                    <label class="ti-form-label mb-0">Dropoff Address</label>
                                    <input type="text" class="firstName my-auto ti-form-input" placeholder="Pickup Addres" required="">
                                    <span class="firstNameError text-red-500 text-xs hidden">error</span>
                                </div>

                                <div class="space-y-2">
                                    <label class="ti-form-label mb-0">Contact Phone</label>
                                    <input type="text" class="firstName my-auto ti-form-input" placeholder="(324-675-6578)" required="">
                                    <span class="firstNameError text-red-500 text-xs hidden">error</span>
                                </div> 

                                <div class="space-y-2">
                                    <label class="ti-form-label mb-0">Person at Pickup</label>
                                    <input type="text" class="firstName my-auto ti-form-input" placeholder="Person at Pickup" required="">
                                    <span class="firstNameError text-red-500 text-xs hidden">error</span>
                                </div>

                                <div class="space-y-2">
                                    <label class="ti-form-label mb-0">Pickup Instructions</label>
                                    <input type="text" class="firstName my-auto ti-form-input" placeholder="Pickup Instructions" required="">
                                    <span class="firstNameError text-red-500 text-xs hidden">error</span>
                                </div>                                                                                                                                                                                                          

                            </div>

                            <div class="my-5">
                                <!--Spacer Before Button-->
                            </div>

                            <button value="update" type="submit" class="ti-btn ti-btn-primary ti-custom-validate-btn">Update Load</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End::row-1 -->                  
    </div>
    <!-- Start::main-content -->

</div>
@endsection