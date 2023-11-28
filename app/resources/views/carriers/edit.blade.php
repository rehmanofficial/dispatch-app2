<div class="content">
    <!-- Start::main-content -->
    <div class="main-content">

        <!-- Page Header -->
        <div class="block justify-between page-header md:flex">
            <div>
                <h3 class="text-gray-700 hover:text-gray-900 dark:text-white dark:hover:text-white text-2xl font-medium"> Add New Carrier</h3>
            </div>
            <ol class="flex items-center whitespace-nowrap min-w-0">
                <li class="text-sm">
                    <a class="flex items-center font-semibold text-primary hover:text-primary dark:text-primary truncate" href="javascript:void(0);">
                    Home
                    <i class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-gray-300 dark:text-gray-300 rtl:rotate-180"></i>
                    </a>
                </li>
                <li class="text-sm text-gray-500 hover:text-primary dark:text-white/70 " aria-current="page">
                    Add New Carrier
                </li>
            </ol>
        </div>
        <!-- Page Header Close -->

        <div class="col-span-12 md:col-span-6 xxl:!col-span-4">
            <div class="box">
                <div class="box-body">
                <div class="border-b-2 border-gray-200 dark:border-white/10">
                    <nav class="-mb-0.5 flex space-x-6 rtl:space-x-reverse">

                    <a class="hs-tab-active:font-semibold hs-tab-active:border-primary hs-tab-active:text-primary py-4 px-1 inline-flex items-center gap-2 border-b-[3px] border-transparent text-sm whitespace-nowrap text-gray-500  dark:text-white/70 hover:text-primary active" href="javascript:void(0);" id="underline-item-1" data-hs-tab="#underline-1" aria-controls="underline-1">
                        Profile
                    </a>

                    <a class="hs-tab-active:font-semibold hs-tab-active:border-primary hs-tab-active:text-primary py-4 px-1 inline-flex items-center gap-2 border-b-[3px] border-transparent text-sm whitespace-nowrap text-gray-500  dark:text-white/70 hover:text-primary" href="javascript:void(0);" id="underline-item-2" data-hs-tab="#underline-2" aria-controls="underline-2">
                        Authority
                    </a>

                    <a class="hs-tab-active:font-semibold hs-tab-active:border-primary hs-tab-active:text-primary py-4 px-1 inline-flex items-center gap-2 border-b-[3px] border-transparent text-sm whitespace-nowrap text-gray-500  dark:text-white/70 hover:text-primary" href="javascript:void(0);" id="underline-item-3" data-hs-tab="#underline-3" aria-controls="underline-3">
                        w9 Form
                    </a>

                    <a class="hs-tab-active:font-semibold hs-tab-active:border-primary hs-tab-active:text-primary py-4 px-1 inline-flex items-center gap-2 border-b-[3px] border-transparent text-sm whitespace-nowrap text-gray-500  dark:text-white/70 hover:text-primary" href="javascript:void(0);" id="underline-item-4" data-hs-tab="#underline-4" aria-controls="underline-4">
                        Insurance
                    </a>

                    <a class="hs-tab-active:font-semibold hs-tab-active:border-primary hs-tab-active:text-primary py-4 px-1 inline-flex items-center gap-2 border-b-[3px] border-transparent text-sm whitespace-nowrap text-gray-500  dark:text-white/70 hover:text-primary" href="javascript:void(0);" id="underline-item-5" data-hs-tab="#underline-5" aria-controls="underline-5">
                        Factoring
                    </a>


                    <a class="hs-tab-active:font-semibold hs-tab-active:border-primary hs-tab-active:text-primary py-4 px-1 inline-flex items-center gap-2 border-b-[3px] border-transparent text-sm whitespace-nowrap text-gray-500  dark:text-white/70 hover:text-primary" href="javascript:void(0);" id="underline-item-6" data-hs-tab="#underline-6" aria-controls="underline-6">
                        Doccuments
                    </a>                                                                                                   

                    </nav>
                </div>

                <div class="mt-3">

                    <div id="underline-1" role="tabpanel" aria-labelledby="underline-item-1">
                    <!-- Start::row-1 -->
                    <div class="grid grid-cols-12 gap-6">
                        <div class="col-span-12">
                            <div class="box">
                                <div class="box-header">
                                    <h5 class="box-title">Carrier Profile</h5>
                                </div>
                                <div class="box-body">
                                    <form class="ti-custom-validation" novalidate="">
                                        <div class="grid lg:grid-cols-2 gap-6">

                                            <div class="space-y-2">
                                                <label class="ti-form-label mb-0">Owner Name</label>
                                                <input type="text" class="firstName my-auto ti-form-input" placeholder="Owner Name" required="">
                                                <span class="firstNameError text-red-500 text-xs hidden">error</span>
                                            </div>

                                            <div class="space-y-2">
                                                <label class="ti-form-label mb-0">Company Name</label>
                                                <input type="text" class="firstName my-auto ti-form-input" placeholder="Company Name" value="Comments" required="">
                                                <span class="firstNameError text-red-500 text-xs hidden">error</span>
                                            </div>

                                            <div class="space-y-2">
                                                <label class="ti-form-label mb-0">Commission Percentage</label>
                                                <div class="flex rounded-sm">
                                                    <input type="text" id="hs-trailing-multiple-add-on" class="ti-form-input ltr:rounded-r-none rtl:rounded-l-none focus:z-10" placeholder="10">
                                                    <div class="px-4 inline-flex items-center min-w-fit border ltr:border-l-0 rtl:border-r-0 border-gray-200 bg-gray-50 dark:bg-black/20 dark:border-white/10">
                                                        <span class="text-sm text-gray-500 dark:text-white/70">%</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="space-y-2">
                                                <label class="ti-form-label mb-0">Phone</label>
                                                <input type="tel" class="firstName my-auto ti-form-input" placeholder="989-788-9086" required="">
                                            </div>  

                                            <div class="space-y-2">
                                                <label class="ti-form-label mb-0">Email</label>
                                                <input type="email" class="firstName my-auto ti-form-input" placeholder="email@email.com" required="">
                                            </div>    

                                            <div class="space-y-2">
                                                <label class="ti-form-label mb-0">Address</label>
                                                <input type="text" class="firstName my-auto ti-form-input" placeholder="Address" required="">
                                            </div>  

                                            <div class="space-y-2">
                                                <label class="ti-form-label mb-0">City</label>
                                                <input type="text" class="firstName my-auto ti-form-input" placeholder="City" required="">
                                            </div> 

                                            <div class="space-y-2">
                                                <label class="ti-form-label mb-0">State</label>
                                                <input type="text" class="firstName my-auto ti-form-input" placeholder="State" required="">
                                            </div>  

                                            <div class="space-y-2">
                                                <label class="ti-form-label mb-0">Zip Code</label>
                                                <input type="text" class="firstName my-auto ti-form-input" placeholder="Zip Code" required="">
                                            </div>                                                                                                                                            

                                        </div>

                                        <div class="my-5">
                                            <!--Spacer Before Button-->
                                        </div>

                                        <button value="Login Now" type="submit" class="ti-btn ti-btn-primary ti-custom-validate-btn">Save</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End::row-1 -->
                    </div>

                    <div id="underline-2" class="hidden" role="tabpanel" aria-labelledby="underline-item-2">
                    <!-- Start::row-1 -->
                    <div class="grid grid-cols-12 gap-6">
                        <div class="col-span-12">
                            <div class="box">
                                <div class="box-header">
                                    <h5 class="box-title">Authority Letter Details</h5>
                                </div>
                                <div class="box-body">
                                    <form class="ti-custom-validation" novalidate="">
                                        <div class="grid lg:grid-cols-2 gap-6">

                                            <div class="space-y-2">
                                                <label class="ti-form-label mb-0">USDO#</label>
                                                <input type="text" class="firstName my-auto ti-form-input" placeholder="USDOT#" required="">
                                            </div>

                                            <div class="space-y-2">
                                                <label class="ti-form-label mb-0">MC#</label>
                                                <input type="text" class="firstName my-auto ti-form-input" placeholder="MC" value="Comments" required="">
                                            </div>

                                            <div class="space-y-2">
                                                <label class="ti-form-label mb-0">MC Authority Date</label>
                                                <input type="text" class="firstName my-auto ti-form-input" placeholder="10-11-2023" required="">
                                            </div>                                                        

                                        </div>

                                        <div class="my-5">
                                            <!--Spacer Before Button-->
                                        </div>

                                        <button value="Login Now" type="submit" class="ti-btn ti-btn-primary ti-custom-validate-btn">Save</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End::row-1 -->
                    </div>

                    <div id="underline-3" class="hidden" role="tabpanel" aria-labelledby="underline-item-3">
                    <!-- Start::row-1 -->
                    <div class="grid grid-cols-12 gap-6">
                        <div class="col-span-12">
                            <div class="box">
                                <div class="box-header">
                                    <h5 class="box-title">W9 Form Details</h5>
                                </div>
                                <div class="box-body">
                                    <form class="ti-custom-validation" novalidate="">
                                        <div class="grid lg:grid-cols-2 gap-6">

                                            <div class="space-y-2">
                                                <label class="ti-form-label mb-0">Name</label>
                                                <input type="text" class="firstName my-auto ti-form-input" placeholder="Name" required="">
                                                <span class="firstNameError text-red-500 text-xs hidden">error</span>
                                            </div>

                                            <div class="space-y-2">
                                                <label class="ti-form-label mb-0">Business Name</label>
                                                <input type="text" class="firstName my-auto ti-form-input" placeholder="Business Name" value="Comments" required="">
                                                <span class="firstNameError text-red-500 text-xs hidden">error</span>
                                            </div>

                                            <div class="space-y-2">
                                                <label class="ti-form-label mb-0">Person Tax Classification</label>
                                                <select class="ti-form-select my-auto" id="select-beast" autocomplete="off">
                                                    <option value="">Select...</option>
                                                    <option value="4">Classification #1</option>
                                                    <option value="1">Classification #2</option>
                                                    <option value="3">Classification #3</option>
                                                    <option value="5">Classification #4</option>
                                                </select>
                                            </div>

                                            <div class="space-y-2">
                                                <label class="ti-form-label mb-0">LLC Tax Classification</label>
                                                <select class="ti-form-select my-auto" id="select-beast" autocomplete="off">
                                                    <option value="">Select...</option>
                                                    <option value="4">Classification #1</option>
                                                    <option value="1">Classification #2</option>
                                                    <option value="3">Classification #3</option>
                                                    <option value="5">Classification #4</option>
                                                </select>
                                            </div>                                                                                                                  

                                            <div class="space-y-2">
                                                <label class="ti-form-label mb-0">Scoial Security Numnber (SSN)</label>
                                                <input type="text" class="firstName my-auto ti-form-input" placeholder="999-99-99999" required="">
                                            </div>  

                                            <div class="space-y-2">
                                                <label class="ti-form-label mb-0">Employer Identification Number</label>
                                                <input type="text" class="firstName my-auto ti-form-input" placeholder="99-9999999" required="">
                                            </div>      

                                            <div class="space-y-2">
                                                <label class="ti-form-label mb-0">W9 Form Date</label>
                                                <input type="text" class="firstName my-auto ti-form-input" placeholder="10-11-2023" required="">
                                            </div>                                                                                                                                                                                                

                                        </div>

                                        <div class="my-5">
                                            <!--Spacer Before Button-->
                                        </div>

                                        <button value="Login Now" type="submit" class="ti-btn ti-btn-primary ti-custom-validate-btn">Save</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End::row-1 -->
                    </div>

                    <div id="underline-4" class="hidden" role="tabpanel" aria-labelledby="underline-item-4">
                    <!-- Start::row-1 -->
                    <div class="grid grid-cols-12 gap-6">
                        <div class="col-span-12">
                            <div class="box">
                                <div class="box-header">
                                    <h5 class="box-title">Insurnace Details</h5>
                                </div>
                                <div class="box-body">
                                    <form class="ti-custom-validation" novalidate="">
                                        <div class="grid lg:grid-cols-2 gap-6">

                                            <div class="space-y-2">
                                                <label class="ti-form-label mb-0">Policy Number</label>
                                                <input type="text" class="firstName my-auto ti-form-input" placeholder="Policy Number" required="">
                                            </div>

                                            <div class="space-y-2">
                                                <label class="ti-form-label mb-0">Expiry Of Insurnace</label>
                                                <input type="text" class="firstName my-auto ti-form-input" placeholder="10-11-2023" required="">
                                            </div>

                                            <div class="space-y-2">
                                                <label class="ti-form-label mb-0">Company Name</label>
                                                <input type="text" class="firstName my-auto ti-form-input" placeholder="Company Name" required="">
                                            </div>

                                            <div class="space-y-2">
                                                <label class="ti-form-label mb-0">Company Phone</label>
                                                <input type="tel" class="firstName my-auto ti-form-input" placeholder="(987-678-0867)" required="">
                                            </div>

                                            <div class="space-y-2">
                                                <label class="ti-form-label mb-0">Company Fax</label>
                                                <input type="tel" class="firstName my-auto ti-form-input" placeholder="(987-678-0867)" required="">
                                            </div>

                                            <div class="space-y-2">
                                                <label class="ti-form-label mb-0">Company Address</label>
                                                <input type="text" class="firstName my-auto ti-form-input" placeholder="Company Address" required="">
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
                                    <h5 class="box-title">Insurnace Details</h5>
                                </div>
                                <div class="box-body">
                                    <form class="ti-custom-validation" novalidate="">
                                        <div class="grid lg:grid-cols-2 gap-6">

                                            <div class="space-y-2">
                                                <label class="ti-form-label mb-0">Agent Name</label>
                                                <input type="text" class="firstName my-auto ti-form-input" placeholder="Policy Number" required="">
                                            </div>

                                            <div class="space-y-2">
                                                <label class="ti-form-label mb-0">Agent Email</label>
                                                <input type="email" class="firstName my-auto ti-form-input" placeholder="Agent Email" required="">
                                            </div>

                                            <div class="space-y-2">
                                                <label class="ti-form-label mb-0">Agent Phone</label>
                                                <input type="tel" class="firstName my-auto ti-form-input" placeholder="(987-678-0867)" required="">
                                            </div>

                                        </div>

                                        <div class="my-5">
                                            <!--Spacer Before Button-->
                                        </div>

                                        <button value="Login Now" type="submit" class="ti-btn ti-btn-primary ti-custom-validate-btn">Save</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End::row-1 -->
                    </div>  

                    <div id="underline-5" class="hidden" role="tabpanel" aria-labelledby="underline-item-5">
                    <!-- Start::row-1 -->
                    <div class="grid grid-cols-12 gap-6">
                        <div class="col-span-12">
                            <div class="box">
                                <div class="box-header">
                                    <h5 class="box-title">Factoring Details</h5>
                                </div>
                                <div class="box-body">
                                    <form class="ti-custom-validation" novalidate="">
                                        <div class="grid lg:grid-cols-2 gap-6">

                                            <div class="space-y-2">
                                                <div class="flex">
                                                    <input type="checkbox" class="ti-form-checkbox mt-0.5 pointer-events-none" id="hs-default-checkbox">
                                                    <label for="hs-default-checkbox" class="text-sm text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70">Factoring</label>
                                                </div>
                                            </div>

                                        <div class="my-5">
                                            <!--Spacer Before Button-->
                                        </div>
                                    
                                </div></form>
                            </div>
                        </div>
                    </div>
                    <!-- End::row-1 -->
                    </div>   

                    <div id="underline-6" class="hidden" role="tabpanel" aria-labelledby="underline-item-6">
                    <!-- Start::row-1 -->
                    <div class="grid grid-cols-12 gap-6">
                        <div class="col-span-12">
                            <div class="box">
                                <div class="box-header">
                                    <h5 class="box-title">Carrier Docuemtns</h5>
                                </div>
                                <div class="box-body">
                                    <form class="ti-custom-validation" novalidate="">
                                        <div class="grid lg:grid-cols-2 gap-6">

                                            <div class="space-y-2">
                                                <label class="ti-form-label mb-0">MC Certificate</label>
                                                <input type="file" class="firstName my-auto ti-form-input" required="">
                                            </div>

                                            <div class="space-y-2">
                                                <label class="ti-form-label mb-0">W9 Form</label>
                                                <input type="file" class="firstName my-auto ti-form-input" required="">
                                            </div>

                                            <div class="space-y-2">
                                                <label class="ti-form-label mb-0">Certificate of Insurance</label>
                                                <input type="file" class="firstName my-auto ti-form-input" required="">
                                            </div>

                                        </div>

                                        <div class="my-5">
                                            <!--Spacer Before Button-->
                                        </div>

                                        <button value="Login Now" type="submit" class="ti-btn ti-btn-primary ti-custom-validate-btn">Save</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End::row-1 -->
                    </div>                                                                                         

                </div>
            </div>
        </div>
    </div>

    </div>
    <!-- Start::main-content -->

</div>
