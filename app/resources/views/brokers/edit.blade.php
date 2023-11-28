<div class="content">

      <!-- Start::main-content -->
      <div class="main-content">

        <!-- Page Header -->
        <div class="block justify-between page-header md:flex">
            <div>
                <h3 class="text-gray-700 hover:text-gray-900 dark:text-white dark:hover:text-white text-2xl font-medium"> Add New Broker</h3>
            </div>
            <ol class="flex items-center whitespace-nowrap min-w-0">
                <li class="text-sm">
                  <a class="flex items-center font-semibold text-primary hover:text-primary dark:text-primary truncate" href="javascript:void(0);">
                    Home
                    <i class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-gray-300 dark:text-gray-300 rtl:rotate-180"></i>
                  </a>
                </li>
                <li class="text-sm text-gray-500 hover:text-primary dark:text-white/70 " aria-current="page">
                    Add New Broker
                </li>
            </ol>
        </div>
        <!-- Page Header Close -->

        <!-- Start::row-1 -->
        <div class="grid grid-cols-12 gap-6">
            <div class="col-span-12">
                <div class="box">
                    <div class="box-header">
                        <h5 class="box-title">Broker Profile</h5>
                    </div>
                    <div class="box-body">
                        <form class="ti-custom-validation" novalidate="">
                            <div class="grid lg:grid-cols-2 gap-6">

                                <div class="space-y-2">
                                    <label class="ti-form-label mb-0">Broker MC#</label>
                                    <input type="text" class="firstName my-auto ti-form-input" placeholder="Broker MC#" required="">
                                </div>


                                <div class="space-y-2">
                                    <label class="ti-form-label mb-0">Broker USDOT</label>
                                    <input type="text" class="firstName my-auto ti-form-input" placeholder="Broker USDOT" required="">
                                </div>                                                        

                                <div class="space-y-2">
                                    <label class="ti-form-label mb-0">Broker Business Name</label>
                                    <input type="text" class="firstName my-auto ti-form-input" placeholder="Broker Business Name" value="Comments" required="">
                                </div>

                                <div class="space-y-2">
                                    <label class="ti-form-label mb-0">Broker Email</label>
                                    <input type="email" class="firstName my-auto ti-form-input" placeholder="email@email.com" required="">
                                </div> 

                                <div class="space-y-2">
                                    <label class="ti-form-label mb-0">Broker Phone</label>
                                    <input type="tel" class="firstName my-auto ti-form-input" placeholder="989-788-9086" required="">
                                </div> 

                                <div class="space-y-2">
                                    <label class="ti-form-label mb-0">Broker Fax</label>
                                    <input type="tel" class="firstName my-auto ti-form-input" placeholder="989-788-9086" required="">
                                </div>                                                                                                                     

                                <div class="space-y-2">
                                    <label class="ti-form-label mb-0">Broker Address</label>
                                    <input type="text" class="firstName my-auto ti-form-input" placeholder="Broker Address" required="">
                                </div>                                                                                                                                         

                            </div>

                            <div class="my-5">
                                <!--Spacer Before Button-->
                            </div>

                            <button value="update" type="submit" class="ti-btn ti-btn-primary ti-custom-validate-btn">Update Broker</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End::row-1 -->

    </div>
      <!-- Start::main-content -->
</div>