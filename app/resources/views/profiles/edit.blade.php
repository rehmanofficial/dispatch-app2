@extends('layouts.app')
@section('content')
<div class="content">

    <!-- Start::main-content -->
    <div class="main-content">

      <!-- Page Header -->
      <div class="block justify-between page-header md:flex">
          <div>
              <h3 class="text-gray-700 hover:text-gray-900 dark:text-white dark:hover:text-white text-2xl font-medium"> Profile Settings</h3>
          </div>
          <ol class="flex items-center whitespace-nowrap min-w-0">
              <li class="text-sm">
                <a class="flex items-center font-semibold text-primary hover:text-primary dark:text-primary truncate" href="javascript:void(0);">
                  Pages
                  <i class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-gray-300 dark:text-gray-300 rtl:rotate-180"></i>
                </a>
              </li>
              <li class="text-sm text-gray-500 hover:text-primary dark:text-white/70 " aria-current="page">
                  Profile Settings
              </li>
          </ol>
      </div>
      <!-- Page Header Close -->

      <!-- Start::row-1 -->
      <div class="grid grid-cols-12 gap-x-6">
        <div class="col-span-12 xl:col-span-3">
          <div class="box">
            <div class="box-body relative">
              <div class="flex relative before:bg-black/50 before:absolute before:w-full before:h-full before:rounded-sm">
                <img src="../assets/img/png-images/2.png" alt="" class="h-[200px] w-full rounded-sm" id="profile-img2">
                <span class="absolute top-5 ltr:right-5 rtl:left-5 flex p-2 rounded-sm ring-1 ring-black/10 text-white bg-black/10 leading-none">
                  <i class="ri ri-pencil-line"></i>
                  <input type="file" class="absolute inset-0 w-full h-full opacity-0 cursor-pointer" id="profile-change2">
                </span>
              </div>
              <div class="absolute top-[4.5rem] inset-x-0 text-center space-y-3">
                <div class="flex justify-center w-full">
                  <div class="relative">
                    <img src="../assets/img/users/1.jpg" class="w-24 h-24 rounded-full ring-4 ring-white/10 mx-auto" id="profile-img" alt="pofile-img">
                    <span class="absolute bottom-0 ltr:right-0 rtl:left-0 block p-1 rounded-full ring-2 ring-white/10 text-white bg-white/10 dark:bg-bgdark leading-none">
                      <i class="ri ri-pencil-line"></i>
                      <input type="file" class="absolute inset-0 w-full h-full opacity-0 cursor-pointer" id="profile-change">
                    </span>
                  </div>
                </div>
              </div>
            </div>
            <div class="box-body pt-0">
              <nav class="flex flex-col space-y-2" aria-label="Tabs" role="tablist" data-hs-tabs-vertical="true">
                <button type="button" class="hs-tab-active:bg-primary hs-tab-active:border-primary hs-tab-active:text-white dark:hs-tab-active:bg-primary dark:hs-tab-active:border-primary dark:hs-tab-active:text-white -mr-px py-3 px-3 inline-flex items-center gap-2 bg-gray-50 text-sm font-medium text-center border text-gray-500 rounded-sm hover:text-gray-700 dark:bg-black/20 dark:border-white/10 dark:text-white/70 active" id="profile-settings-item-1" data-hs-tab="#profile-settings-1" aria-controls="profile-settings-1" role="tab">
                  <i class="ri ri-shield-user-line"></i> Personal Settings
                </button>
                <button type="button" class="hs-tab-active:bg-primary hs-tab-active:border-primary hs-tab-active:text-white dark:hs-tab-active:bg-primary dark:hs-tab-active:border-primary dark:hs-tab-active:text-white -mr-px py-3 px-3 inline-flex items-center gap-2 bg-gray-50 text-sm font-medium text-center border text-gray-500 rounded-sm hover:text-gray-700 dark:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-gray-300" id="profile-settings-item-2" data-hs-tab="#profile-settings-2" aria-controls="profile-settings-2" role="tab">
                  <i class="ri ri-global-line"></i> General Settings
                </button>
                <button type="button" class="hs-tab-active:bg-primary hs-tab-active:border-primary hs-tab-active:text-white dark:hs-tab-active:bg-primary dark:hs-tab-active:border-primary dark:hs-tab-active:text-white -mr-px py-3 px-3 inline-flex items-center gap-2 bg-gray-50 text-sm font-medium text-center border text-gray-500 rounded-sm hover:text-gray-700 dark:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-gray-300" id="profile-settings-item-3" data-hs-tab="#profile-settings-3" aria-controls="profile-settings-3" role="tab">
                  <i class="ri ri-lock-line"></i> Password Settings
                </button>
                <button type="button" class="hs-tab-active:bg-primary hs-tab-active:border-primary hs-tab-active:text-white dark:hs-tab-active:bg-primary dark:hs-tab-active:border-primary dark:hs-tab-active:text-white -mr-px py-3 px-3 inline-flex items-center gap-2 bg-gray-50 text-sm font-medium text-center border text-gray-500 rounded-sm hover:text-gray-700 dark:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-gray-300" id="profile-settings-item-4" data-hs-tab="#profile-settings-4" aria-controls="profile-settings-4" role="tab">
                  <i class="ri ri-account-circle-line"></i> Account Settings
                </button>
                <button type="button" class="hs-tab-active:bg-primary hs-tab-active:border-primary hs-tab-active:text-white dark:hs-tab-active:bg-primary dark:hs-tab-active:border-primary dark:hs-tab-active:text-white -mr-px py-3 px-3 inline-flex items-center gap-2 bg-gray-50 text-sm font-medium text-center border text-gray-500 rounded-sm hover:text-gray-700 dark:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-gray-300" id="profile-settings-item-5" data-hs-tab="#profile-settings-5" aria-controls="profile-settings-5" role="tab">
                  <i class="ri ri-notification-4-line"></i> Notifications Settings
                </button>
              </nav>
            </div>
          </div>
        </div>
        <div class="col-span-12 xl:col-span-9">
          <div class="box">
            <div class="box-body p-0">
              <div id="profile-settings-1" role="tabpanel" aria-labelledby="profile-settings-item-1" class="">
                <div class="box border-0 shadow-none mb-0">
                  <div class="box-header">
                    <h5 class="box-title leading-none flex"><i class="ri ri-shield-user-line ltr:mr-2 rtl:ml-2"></i> Personal Settings</h5>
                  </div>
                  <div class="box-body">
                    <div>
                      <div class="grid lg:grid-cols-2 gap-6">
                          <div class="space-y-2">
                              <label class="ti-form-label mb-0">First Name</label>
                              <input type="text" class="my-auto ti-form-input" placeholder="Firstname">
                          </div>
                          <div class="space-y-2">
                              <label class="ti-form-label mb-0">Last Name</label>
                              <input type="text" class="my-auto ti-form-input" placeholder="Lastname">
                          </div>
                          <div class="space-y-2">
                              <label class="ti-form-label mb-0">Phone Number</label>
                              <input type="number" class="my-auto ti-form-input" placeholder="+91 123-456-789">
                          </div>
                          <div class="space-y-2">
                              <label class="ti-form-label mb-0">Email Address</label>
                              <input type="email" class="my-auto ti-form-input" placeholder="your@site.com">
                          </div>
                          <div class="space-y-2">
                              <label class="ti-form-label mb-0">Date Of Birth</label>
                              <input type="text" class="ti-form-input flatpickr-input date" placeholder="Choose date" readonly="readonly">
                          </div>
                          <div class="space-y-2">
                              <label class="ti-form-label mb-0">Gender</label>
                              <ul class="flex flex-col sm:flex-row">
                                  <li class="ti-list-group gap-x-2.5 bg-white border text-gray-800 ltr:sm:-ml-px rtl:sm:-mr-px sm:mt-0 ltr:sm:first:rounded-tr-none rtl:sm:first:rounded-tl-none ltr:sm:first:rounded-bl-sm rtl:sm:first:rounded-br-sm ltr:sm:last:rounded-bl-none rtl:sm:last:rounded-br-none ltr:sm:last:rounded-tr-sm rtl:sm:last:rounded-tl-sm dark:bg-bgdark dark:border-white/10 dark:text-white">
                                    <div class="relative flex items-start w-full">
                                      <div class="flex items-center h-5">
                                        <input id="hs-horizontal-list-group-item-radio-1" name="hs-horizontal-list-group-item-radio" type="radio" class="ti-form-radio" checked="">
                                      </div>
                                      <label for="hs-horizontal-list-group-item-radio-1" class="ltr:ml-3 rtl:mr-3 block w-full text-sm text-gray-600 dark:text-white/70">
                                       Female
                                      </label>
                                    </div>
                                  </li>

                                  <li class="ti-list-group gap-x-2.5 bg-white border text-gray-800 ltr:sm:-ml-px rtl:sm:-mr-px sm:mt-0 ltr:sm:first:rounded-tr-none rtl:sm:first:rounded-tl-none ltr:sm:first:rounded-bl-sm rtl:sm:first:rounded-br-sm ltr:sm:last:rounded-bl-none rtl:sm:last:rounded-br-none ltr:sm:last:rounded-tr-sm rtl:sm:last:rounded-tl-sm dark:bg-bgdark dark:border-white/10 dark:text-white">
                                    <div class="relative flex items-start w-full">
                                      <div class="flex items-center h-5">
                                        <input id="hs-horizontal-list-group-item-radio-2" name="hs-horizontal-list-group-item-radio" type="radio" class="ti-form-radio">
                                      </div>
                                      <label for="hs-horizontal-list-group-item-radio-2" class="ltr:ml-3 rtl:mr-3 block w-full text-sm text-gray-600 dark:text-white/70">
                                        Male
                                      </label>
                                    </div>
                                  </li>

                                  <li class="ti-list-group gap-x-2.5 bg-white border text-gray-800 ltr:sm:-ml-px rtl:sm:-mr-px sm:mt-0 ltr:sm:first:rounded-tr-none rtl:sm:first:rounded-tl-none ltr:sm:first:rounded-bl-sm rtl:sm:first:rounded-br-sm ltr:sm:last:rounded-bl-none rtl:sm:last:rounded-br-none ltr:sm:last:rounded-tr-sm rtl:sm:last:rounded-tl-sm dark:bg-bgdark dark:border-white/10 dark:text-white">
                                    <div class="relative flex items-start w-full">
                                      <div class="flex items-center h-5">
                                        <input id="hs-horizontal-list-group-item-radio-3" name="hs-horizontal-list-group-item-radio" type="radio" class="ti-form-radio">
                                      </div>
                                      <label for="hs-horizontal-list-group-item-radio-3" class="ltr:ml-3 rtl:mr-3 block w-full text-sm text-gray-600 dark:text-white/70">
                                      Others
                                      </label>
                                    </div>
                                  </li>
                                </ul>
                          </div>
                      </div>
                      <div class="my-5">
                          <div class="space-y-2">
                              <label class="ti-form-label mb-0">Address</label>
                              <input type="text" class="my-auto ti-form-input" placeholder="Address">
                          </div>
                      </div>
                      <div class="grid lg:grid-cols-2 gap-6">
                          <div class="space-y-2">
                              <label class="ti-form-label mb-0">City</label>
                              <input type="text" class="my-auto ti-form-input" placeholder="city">
                          </div>
                          <div class="space-y-2">
                              <label class="ti-form-label mb-0">Country</label>
                              <input type="text" class="my-auto ti-form-input" placeholder="state">
                          </div>
                          <div class="space-y-2">
                              <label class="ti-form-label mb-0">State</label>
                              <input type="text" class="my-auto ti-form-input" placeholder="state">
                          </div>
                          <div class="space-y-2">
                              <label class="ti-form-label mb-0">Pincode</label>
                              <input type="number" class="my-auto ti-form-input" placeholder="pincode">
                          </div>
                      </div>
                      <div class="mt-5">
                          <div class="space-y-2">
                              <label class="ti-form-label mb-0">Bio</label>
                              <textarea class="ti-form-input" rows="3" placeholder="Add Your Bio"></textarea>
                          </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div id="profile-settings-2" class="hidden" role="tabpanel" aria-labelledby="profile-settings-item-2">
                <div class="box border-0 shadow-none mb-0">
                  <div class="box-header">
                    <h5 class="box-title leading-none flex"><i class="ri ri-global-line ltr:mr-2 rtl:ml-2"></i> General Settings</h5>
                  </div>
                  <div class="box-body">
                    <h5 class="text-base font-semibold">User Details</h5>
                    <div class="my-4">
                      <div class="grid lg:grid-cols-2 gap-6 mb-6">
                          <div class="space-y-2">
                              <label class="ti-form-label mb-0">User Id</label>
                              <input type="text" class="my-auto ti-form-input" placeholder="User Id">
                          </div>
                          <div class="space-y-2">
                              <label class="ti-form-label mb-0">Joining Date</label>
                              <input type="text" class="ti-form-input flatpickr-input date" placeholder="Choose date" readonly="readonly">
                          </div>
                          <div class="space-y-2">
                              <label class="ti-form-label mb-0">Language</label>
                              <div class="choices" data-type="select-one" tabindex="0" role="listbox" aria-haspopup="true" aria-expanded="false"><div class="choices__inner"><select class="ti-form-select choices__input" data-trigger="" hidden="" tabindex="-1" data-choice="active"><option value="1" data-custom-properties="[object Object]">US English</option></select><div class="choices__list choices__list--single"><div class="choices__item choices__item--selectable" data-item="" data-id="1" data-value="1" data-custom-properties="[object Object]" aria-selected="true">US English</div></div></div><div class="choices__list choices__list--dropdown" aria-expanded="false"><div class="choices__list" role="listbox"><div id="choices--f65i-item-choice-1" class="choices__item choices__item--choice choices__item--selectable is-highlighted" role="option" data-choice="" data-id="1" data-value="2" data-select-text="Press to select" data-choice-selectable="" aria-selected="true">Arabic</div><div id="choices--f65i-item-choice-2" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="2" data-value="3" data-select-text="Press to select" data-choice-selectable="">Korean</div><div id="choices--f65i-item-choice-3" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="3" data-value="4" data-select-text="Press to select" data-choice-selectable="">Russia</div><div id="choices--f65i-item-choice-4" class="choices__item choices__item--choice is-selected choices__item--selectable" role="option" data-choice="" data-id="4" data-value="1" data-select-text="Press to select" data-choice-selectable="">US English</div></div></div></div>
                          </div>
                          <div class="space-y-2">
                              <label class="ti-form-label mb-0">Time Zone</label>
                              <div class="choices" data-type="select-one" tabindex="0" role="listbox" aria-haspopup="true" aria-expanded="false"><div class="choices__inner"><select class="ti-form-select choices__input" data-trigger="" hidden="" tabindex="-1" data-choice="active"><option value="Pacific/Midway" data-custom-properties="[object Object]">(GMT-11:00) Midway Island, Samoa</option></select><div class="choices__list choices__list--single"><div class="choices__item choices__item--selectable" data-item="" data-id="1" data-value="Pacific/Midway" data-custom-properties="[object Object]" aria-selected="true">(GMT-11:00) Midway Island, Samoa</div></div></div><div class="choices__list choices__list--dropdown" aria-expanded="false"><div class="choices__list" role="listbox"><div id="choices--fbt2-item-choice-1" class="choices__item choices__item--choice choices__item--selectable is-highlighted" role="option" data-choice="" data-id="1" data-value="Europe/Amsterdam" data-select-text="Press to select" data-choice-selectable="" aria-selected="true">(GMT+01:00) Amsterdam, Berlin, Bern, Rome, Stockholm, Vienna</div><div id="choices--fbt2-item-choice-2" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="2" data-value="Europe/Belgrade" data-select-text="Press to select" data-choice-selectable="">(GMT+01:00) Belgrade, Bratislava, Budapest, Ljubljana, Prague</div><div id="choices--fbt2-item-choice-3" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="3" data-value="Europe/Brussels" data-select-text="Press to select" data-choice-selectable="">(GMT+01:00) Brussels, Copenhagen, Madrid, Paris</div><div id="choices--fbt2-item-choice-4" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="4" data-value="Africa/Algiers" data-select-text="Press to select" data-choice-selectable="">(GMT+01:00) West Central Africa</div><div id="choices--fbt2-item-choice-5" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="5" data-value="Africa/Windhoek" data-select-text="Press to select" data-choice-selectable="">(GMT+01:00) Windhoek</div><div id="choices--fbt2-item-choice-6" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="6" data-value="Asia/Beirut" data-select-text="Press to select" data-choice-selectable="">(GMT+02:00) Beirut</div><div id="choices--fbt2-item-choice-7" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="7" data-value="Africa/Cairo" data-select-text="Press to select" data-choice-selectable="">(GMT+02:00) Cairo</div><div id="choices--fbt2-item-choice-8" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="8" data-value="Asia/Gaza" data-select-text="Press to select" data-choice-selectable="">(GMT+02:00) Gaza</div><div id="choices--fbt2-item-choice-9" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="9" data-value="Africa/Blantyre" data-select-text="Press to select" data-choice-selectable="">(GMT+02:00) Harare, Pretoria</div><div id="choices--fbt2-item-choice-10" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="10" data-value="Asia/Jerusalem" data-select-text="Press to select" data-choice-selectable="">(GMT+02:00) Jerusalem</div><div id="choices--fbt2-item-choice-11" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="11" data-value="Europe/Minsk" data-select-text="Press to select" data-choice-selectable="">(GMT+02:00) Minsk</div><div id="choices--fbt2-item-choice-12" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="12" data-value="Asia/Damascus" data-select-text="Press to select" data-choice-selectable="">(GMT+02:00) Syria</div><div id="choices--fbt2-item-choice-13" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="13" data-value="Europe/Moscow" data-select-text="Press to select" data-choice-selectable="">(GMT+03:00) Moscow, St. Petersburg, Volgograd</div><div id="choices--fbt2-item-choice-14" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="14" data-value="Africa/Addis_Ababa" data-select-text="Press to select" data-choice-selectable="">(GMT+03:00) Nairobi</div><div id="choices--fbt2-item-choice-15" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="15" data-value="Asia/Tehran" data-select-text="Press to select" data-choice-selectable="">(GMT+03:30) Tehran</div><div id="choices--fbt2-item-choice-16" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="16" data-value="Asia/Dubai" data-select-text="Press to select" data-choice-selectable="">(GMT+04:00) Abu Dhabi, Muscat</div><div id="choices--fbt2-item-choice-17" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="17" data-value="Asia/Yerevan" data-select-text="Press to select" data-choice-selectable="">(GMT+04:00) Yerevan</div><div id="choices--fbt2-item-choice-18" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="18" data-value="Asia/Kabul" data-select-text="Press to select" data-choice-selectable="">(GMT+04:30) Kabul</div><div id="choices--fbt2-item-choice-19" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="19" data-value="Asia/Yekaterinburg" data-select-text="Press to select" data-choice-selectable="">(GMT+05:00) Ekaterinburg</div><div id="choices--fbt2-item-choice-20" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="20" data-value="Asia/Tashkent" data-select-text="Press to select" data-choice-selectable="">(GMT+05:00) Tashkent</div><div id="choices--fbt2-item-choice-21" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="21" data-value="Asia/Kolkata" data-select-text="Press to select" data-choice-selectable="">(GMT+05:30) Chennai, Kolkata, Mumbai, New Delhi</div><div id="choices--fbt2-item-choice-22" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="22" data-value="Asia/Katmandu" data-select-text="Press to select" data-choice-selectable="">(GMT+05:45) Kathmandu</div><div id="choices--fbt2-item-choice-23" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="23" data-value="Asia/Dhaka" data-select-text="Press to select" data-choice-selectable="">(GMT+06:00) Astana, Dhaka</div><div id="choices--fbt2-item-choice-24" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="24" data-value="Asia/Novosibirsk" data-select-text="Press to select" data-choice-selectable="">(GMT+06:00) Novosibirsk</div><div id="choices--fbt2-item-choice-25" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="25" data-value="Asia/Rangoon" data-select-text="Press to select" data-choice-selectable="">(GMT+06:30) Yangon (Rangoon)</div><div id="choices--fbt2-item-choice-26" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="26" data-value="Asia/Bangkok" data-select-text="Press to select" data-choice-selectable="">(GMT+07:00) Bangkok, Hanoi, Jakarta</div><div id="choices--fbt2-item-choice-27" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="27" data-value="Asia/Krasnoyarsk" data-select-text="Press to select" data-choice-selectable="">(GMT+07:00) Krasnoyarsk</div><div id="choices--fbt2-item-choice-28" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="28" data-value="Asia/Hong_Kong" data-select-text="Press to select" data-choice-selectable="">(GMT+08:00) Beijing, Chongqing, Hong Kong, Urumqi</div><div id="choices--fbt2-item-choice-29" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="29" data-value="Asia/Irkutsk" data-select-text="Press to select" data-choice-selectable="">(GMT+08:00) Irkutsk, Ulaan Bataar</div><div id="choices--fbt2-item-choice-30" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="30" data-value="Australia/Perth" data-select-text="Press to select" data-choice-selectable="">(GMT+08:00) Perth</div><div id="choices--fbt2-item-choice-31" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="31" data-value="Australia/Eucla" data-select-text="Press to select" data-choice-selectable="">(GMT+08:45) Eucla</div><div id="choices--fbt2-item-choice-32" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="32" data-value="Asia/Tokyo" data-select-text="Press to select" data-choice-selectable="">(GMT+09:00) Osaka, Sapporo, Tokyo</div><div id="choices--fbt2-item-choice-33" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="33" data-value="Asia/Seoul" data-select-text="Press to select" data-choice-selectable="">(GMT+09:00) Seoul</div><div id="choices--fbt2-item-choice-34" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="34" data-value="Asia/Yakutsk" data-select-text="Press to select" data-choice-selectable="">(GMT+09:00) Yakutsk</div><div id="choices--fbt2-item-choice-35" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="35" data-value="Australia/Adelaide" data-select-text="Press to select" data-choice-selectable="">(GMT+09:30) Adelaide</div><div id="choices--fbt2-item-choice-36" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="36" data-value="Australia/Darwin" data-select-text="Press to select" data-choice-selectable="">(GMT+09:30) Darwin</div><div id="choices--fbt2-item-choice-37" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="37" data-value="Australia/Brisbane" data-select-text="Press to select" data-choice-selectable="">(GMT+10:00) Brisbane</div><div id="choices--fbt2-item-choice-38" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="38" data-value="Australia/Hobart" data-select-text="Press to select" data-choice-selectable="">(GMT+10:00) Hobart</div><div id="choices--fbt2-item-choice-39" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="39" data-value="Asia/Vladivostok" data-select-text="Press to select" data-choice-selectable="">(GMT+10:00) Vladivostok</div><div id="choices--fbt2-item-choice-40" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="40" data-value="Australia/Lord_Howe" data-select-text="Press to select" data-choice-selectable="">(GMT+10:30) Lord Howe Island</div><div id="choices--fbt2-item-choice-41" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="41" data-value="Asia/Magadan" data-select-text="Press to select" data-choice-selectable="">(GMT+11:00) Magadan</div><div id="choices--fbt2-item-choice-42" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="42" data-value="Etc/GMT-11" data-select-text="Press to select" data-choice-selectable="">(GMT+11:00) Solomon Is., New Caledonia</div><div id="choices--fbt2-item-choice-43" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="43" data-value="Pacific/Norfolk" data-select-text="Press to select" data-choice-selectable="">(GMT+11:30) Norfolk Island</div><div id="choices--fbt2-item-choice-44" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="44" data-value="Asia/Anadyr" data-select-text="Press to select" data-choice-selectable="">(GMT+12:00) Anadyr, Kamchatka</div><div id="choices--fbt2-item-choice-45" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="45" data-value="Pacific/Auckland" data-select-text="Press to select" data-choice-selectable="">(GMT+12:00) Auckland, Wellington</div><div id="choices--fbt2-item-choice-46" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="46" data-value="Etc/GMT-12" data-select-text="Press to select" data-choice-selectable="">(GMT+12:00) Fiji, Kamchatka, Marshall Is.</div><div id="choices--fbt2-item-choice-47" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="47" data-value="Pacific/Chatham" data-select-text="Press to select" data-choice-selectable="">(GMT+12:45) Chatham Islands</div><div id="choices--fbt2-item-choice-48" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="48" data-value="Pacific/Tongatapu" data-select-text="Press to select" data-choice-selectable="">(GMT+13:00) Nuku'alofa</div><div id="choices--fbt2-item-choice-49" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="49" data-value="Pacific/Kiritimati" data-select-text="Press to select" data-choice-selectable="">(GMT+14:00) Kiritimati</div><div id="choices--fbt2-item-choice-50" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="50" data-value="Atlantic/Azores" data-select-text="Press to select" data-choice-selectable="">(GMT-01:00) Azores</div><div id="choices--fbt2-item-choice-51" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="51" data-value="Atlantic/Cape_Verde" data-select-text="Press to select" data-choice-selectable="">(GMT-01:00) Cape Verde Is.</div><div id="choices--fbt2-item-choice-52" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="52" data-value="America/Noronha" data-select-text="Press to select" data-choice-selectable="">(GMT-02:00) Mid-Atlantic</div><div id="choices--fbt2-item-choice-53" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="53" data-value="America/Sao_Paulo" data-select-text="Press to select" data-choice-selectable="">(GMT-03:00) Brasilia</div><div id="choices--fbt2-item-choice-54" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="54" data-value="America/Argentina/Buenos_Aires" data-select-text="Press to select" data-choice-selectable="">(GMT-03:00) Buenos Aires</div><div id="choices--fbt2-item-choice-55" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="55" data-value="America/Godthab" data-select-text="Press to select" data-choice-selectable="">(GMT-03:00) Greenland</div><div id="choices--fbt2-item-choice-56" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="56" data-value="America/Miquelon" data-select-text="Press to select" data-choice-selectable="">(GMT-03:00) Miquelon, St. Pierre</div><div id="choices--fbt2-item-choice-57" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="57" data-value="America/Montevideo" data-select-text="Press to select" data-choice-selectable="">(GMT-03:00) Montevideo</div><div id="choices--fbt2-item-choice-58" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="58" data-value="America/Araguaina" data-select-text="Press to select" data-choice-selectable="">(GMT-03:00) UTC-3</div><div id="choices--fbt2-item-choice-59" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="59" data-value="America/St_Johns" data-select-text="Press to select" data-choice-selectable="">(GMT-03:30) Newfoundland</div><div id="choices--fbt2-item-choice-60" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="60" data-value="America/Glace_Bay" data-select-text="Press to select" data-choice-selectable="">(GMT-04:00) Atlantic Time (Canada)</div><div id="choices--fbt2-item-choice-61" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="61" data-value="America/Goose_Bay" data-select-text="Press to select" data-choice-selectable="">(GMT-04:00) Atlantic Time (Goose Bay)</div><div id="choices--fbt2-item-choice-62" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="62" data-value="America/Campo_Grande" data-select-text="Press to select" data-choice-selectable="">(GMT-04:00) Brazil</div><div id="choices--fbt2-item-choice-63" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="63" data-value="Atlantic/Stanley" data-select-text="Press to select" data-choice-selectable="">(GMT-04:00) Faukland Islands</div><div id="choices--fbt2-item-choice-64" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="64" data-value="America/La_Paz" data-select-text="Press to select" data-choice-selectable="">(GMT-04:00) La Paz</div><div id="choices--fbt2-item-choice-65" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="65" data-value="America/Santiago" data-select-text="Press to select" data-choice-selectable="">(GMT-04:00) Santiago</div><div id="choices--fbt2-item-choice-66" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="66" data-value="America/Caracas" data-select-text="Press to select" data-choice-selectable="">(GMT-04:30) Caracas</div><div id="choices--fbt2-item-choice-67" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="67" data-value="America/Bogota" data-select-text="Press to select" data-choice-selectable="">(GMT-05:00) Bogota, Lima, Quito, Rio Branco</div><div id="choices--fbt2-item-choice-68" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="68" data-value="America/Havana" data-select-text="Press to select" data-choice-selectable="">(GMT-05:00) Cuba</div><div id="choices--fbt2-item-choice-69" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="69" data-value="America/New_York" data-select-text="Press to select" data-choice-selectable="">(GMT-05:00) Eastern Time (US &amp; Canada)</div><div id="choices--fbt2-item-choice-70" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="70" data-value="America/Chicago" data-select-text="Press to select" data-choice-selectable="">(GMT-06:00) Central Time (US &amp; Canada)</div><div id="choices--fbt2-item-choice-71" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="71" data-value="Chile/EasterIsland" data-select-text="Press to select" data-choice-selectable="">(GMT-06:00) Easter Island</div><div id="choices--fbt2-item-choice-72" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="72" data-value="America/Cancun" data-select-text="Press to select" data-choice-selectable="">(GMT-06:00) Guadalajara, Mexico City, Monterrey</div><div id="choices--fbt2-item-choice-73" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="73" data-value="America/Belize" data-select-text="Press to select" data-choice-selectable="">(GMT-06:00) Saskatchewan, Central America</div><div id="choices--fbt2-item-choice-74" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="74" data-value="America/Dawson_Creek" data-select-text="Press to select" data-choice-selectable="">(GMT-07:00) Arizona</div><div id="choices--fbt2-item-choice-75" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="75" data-value="America/Chihuahua" data-select-text="Press to select" data-choice-selectable="">(GMT-07:00) Chihuahua, La Paz, Mazatlan</div><div id="choices--fbt2-item-choice-76" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="76" data-value="America/Denver" data-select-text="Press to select" data-choice-selectable="">(GMT-07:00) Mountain Time (US &amp; Canada)</div><div id="choices--fbt2-item-choice-77" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="77" data-value="America/Los_Angeles" data-select-text="Press to select" data-choice-selectable="">(GMT-08:00) Pacific Time (US &amp; Canada)</div><div id="choices--fbt2-item-choice-78" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="78" data-value="Etc/GMT+8" data-select-text="Press to select" data-choice-selectable="">(GMT-08:00) Pitcairn Islands</div><div id="choices--fbt2-item-choice-79" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="79" data-value="America/Ensenada" data-select-text="Press to select" data-choice-selectable="">(GMT-08:00) Tijuana, Baja California</div><div id="choices--fbt2-item-choice-80" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="80" data-value="America/Anchorage" data-select-text="Press to select" data-choice-selectable="">(GMT-09:00) Alaska</div><div id="choices--fbt2-item-choice-81" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="81" data-value="Pacific/Gambier" data-select-text="Press to select" data-choice-selectable="">(GMT-09:00) Gambier Islands</div><div id="choices--fbt2-item-choice-82" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="82" data-value="Pacific/Marquesas" data-select-text="Press to select" data-choice-selectable="">(GMT-09:30) Marquesas Islands</div><div id="choices--fbt2-item-choice-83" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="83" data-value="Etc/GMT+10" data-select-text="Press to select" data-choice-selectable="">(GMT-10:00) Hawaii</div><div id="choices--fbt2-item-choice-84" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="84" data-value="America/Adak" data-select-text="Press to select" data-choice-selectable="">(GMT-10:00) Hawaii-Aleutian</div><div id="choices--fbt2-item-choice-85" class="choices__item choices__item--choice is-selected choices__item--selectable" role="option" data-choice="" data-id="85" data-value="Pacific/Midway" data-select-text="Press to select" data-choice-selectable="">(GMT-11:00) Midway Island, Samoa</div><div id="choices--fbt2-item-choice-86" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="86" data-value="Europe/Belfast" data-select-text="Press to select" data-choice-selectable="">(GMT) Greenwich Mean Time : Belfast</div><div id="choices--fbt2-item-choice-87" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="87" data-value="Europe/Dublin" data-select-text="Press to select" data-choice-selectable="">(GMT) Greenwich Mean Time : Dublin</div><div id="choices--fbt2-item-choice-88" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="88" data-value="Europe/Lisbon" data-select-text="Press to select" data-choice-selectable="">(GMT) Greenwich Mean Time : Lisbon</div><div id="choices--fbt2-item-choice-89" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="89" data-value="Europe/London" data-select-text="Press to select" data-choice-selectable="">(GMT) Greenwich Mean Time : London</div><div id="choices--fbt2-item-choice-90" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="90" data-value="Africa/Abidjan" data-select-text="Press to select" data-choice-selectable="">(GMT) Monrovia, Reykjavik</div></div></div></div>
                          </div>
                      </div>
                      <div class="space-y-2" id="skills">
                        <label class="ti-form-label">Skills</label>
                        <div class="choices" data-type="text" aria-haspopup="true" aria-expanded="false"><div class="choices__inner"><input class="ti-form-input skills choices__input" type="text" value="Laravel,Angular,Html,React,Bootstrap" placeholder="This is a placeholder" hidden="" tabindex="-1" data-choice="active"><div class="choices__list choices__list--multiple"><div class="choices__item choices__item--selectable" data-item="" data-id="1" data-value="Laravel" data-custom-properties="[object Object]" aria-selected="true" data-deletable="">Laravel<button type="button" class="choices__button" aria-label="Remove item: 'Laravel'" data-button="">Remove item</button></div><div class="choices__item choices__item--selectable" data-item="" data-id="2" data-value="Angular" data-custom-properties="[object Object]" aria-selected="true" data-deletable="">Angular<button type="button" class="choices__button" aria-label="Remove item: 'Angular'" data-button="">Remove item</button></div><div class="choices__item choices__item--selectable" data-item="" data-id="3" data-value="Html" data-custom-properties="[object Object]" aria-selected="true" data-deletable="">Html<button type="button" class="choices__button" aria-label="Remove item: 'Html'" data-button="">Remove item</button></div><div class="choices__item choices__item--selectable" data-item="" data-id="4" data-value="React" data-custom-properties="[object Object]" aria-selected="true" data-deletable="">React<button type="button" class="choices__button" aria-label="Remove item: 'React'" data-button="">Remove item</button></div><div class="choices__item choices__item--selectable" data-item="" data-id="5" data-value="Bootstrap" data-custom-properties="[object Object]" aria-selected="true" data-deletable="">Bootstrap<button type="button" class="choices__button" aria-label="Remove item: 'Bootstrap'" data-button="">Remove item</button></div></div><input type="search" name="search_terms" class="choices__input choices__input--cloned" autocomplete="off" autocapitalize="off" spellcheck="false" role="textbox" aria-autocomplete="list" aria-label="null"></div><div class="choices__list choices__list--dropdown" aria-expanded="false"></div></div>
                      </div>
                    </div>
                    <h5 class="text-base font-semibold">Education Details</h5>
                    <div class="my-4">
                      <div class="grid lg:grid-cols-3 gap-6">
                          <div class="space-y-2">
                              <label class="ti-form-label mb-0">Schooling</label>
                              <input type="text" class="my-auto ti-form-input" placeholder="Schooling">
                          </div>
                          <div class="space-y-2">
                              <label class="ti-form-label mb-0">Joining Date</label>
                              <input type="text" class="ti-form-input flatpickr-input date" placeholder="Choose date" readonly="readonly">
                          </div>
                          <div class="space-y-2">
                              <label class="ti-form-label mb-0">Completed Date</label>
                              <input type="text" class="ti-form-input flatpickr-input date" placeholder="Choose date" readonly="readonly">
                          </div>
                          <div class="space-y-2">
                              <label class="ti-form-label mb-0">Graduation</label>
                              <input type="text" class="my-auto ti-form-input" placeholder="Graduation">
                          </div>
                          <div class="space-y-2">
                              <label class="ti-form-label mb-0">Joining Date</label>
                              <input type="text" class="ti-form-input flatpickr-input date" placeholder="Choose date" readonly="readonly">
                          </div>
                          <div class="space-y-2">
                              <label class="ti-form-label mb-0">Completed Date</label>
                              <input type="text" class="ti-form-input flatpickr-input date" placeholder="Choose date" readonly="readonly">
                          </div>
                      </div>
                    </div>
                    <h5 class="text-base font-semibold">Work  Experience</h5>
                    <div class="my-4">
                      <div class="grid lg:grid-cols-4 gap-6">
                          <div class="space-y-2">
                              <label class="ti-form-label mb-0">Work 1 :</label>
                              <input type="text" class="my-auto ti-form-input" placeholder="company Name">
                          </div>
                          <div class="space-y-2">
                              <label class="ti-form-label mb-0">Designation</label>
                              <input type="text" class="my-auto ti-form-input" placeholder="Designation">
                          </div>
                          <div class="space-y-2">
                              <label class="ti-form-label mb-0">Joining Date</label>
                              <input type="text" class="ti-form-input flatpickr-input date" placeholder="Choose date" readonly="readonly">
                          </div>
                          <div class="space-y-2">
                              <label class="ti-form-label mb-0">Completed Date</label>
                              <input type="text" class="ti-form-input flatpickr-input date" placeholder="Choose date" readonly="readonly">
                          </div>
                          <div class="space-y-2">
                              <label class="ti-form-label mb-0">Work 2 :</label>
                              <input type="text" class="my-auto ti-form-input" placeholder="company Name">
                          </div>
                          <div class="space-y-2">
                              <label class="ti-form-label mb-0">Designation</label>
                              <input type="text" class="my-auto ti-form-input" placeholder="Designation">
                          </div>
                          <div class="space-y-2">
                              <label class="ti-form-label mb-0">Joining Date</label>
                              <input type="text" class="ti-form-input flatpickr-input date" placeholder="Choose date" readonly="readonly">
                          </div>
                          <div class="space-y-2">
                              <label class="ti-form-label mb-0">Completed Date</label>
                              <input type="text" class="ti-form-input flatpickr-input date" placeholder="Choose date" readonly="readonly">
                          </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div id="profile-settings-3" class="hidden" role="tabpanel" aria-labelledby="profile-settings-item-3">
                <div class="box border-0 shadow-none mb-0">
                  <div class="box-header">
                    <h5 class="box-title leading-none flex"><i class="ri ri-lock-line ltr:mr-2 rtl:ml-2"></i> Password Settings</h5>
                  </div>
                  <div class="box-body p-0">
                    <div class="grid grid-cols-12">
                        <div class="col-span-12 xl:col-span-6 xl:ltr:border-r xl:rtl:border-l xl:border-b-0 border-b p-6 border-gray-200 dark:border-white/10">
                          <div class="space-y-4">
                            <div class="space-y-2">
                              <label class="ti-form-label mb-0">Email Id<sup class="text-danger">*</sup></label>
                              <input type="email" class="my-auto ti-form-input" placeholder="Email Id" required="">
                            </div>
                            <div class="space-y-2">
                              <label class="ti-form-label mb-0">Current Password<sup class="text-danger">*</sup></label>
                              <input type="password" class="my-auto ti-form-input" autocomplete="off" placeholder="Current Password" required="">
                            </div>
                            <div class="space-y-2">
                              <label class="ti-form-label mb-0">New Password<sup class="text-danger">*</sup></label>
                              <input type="password" class="my-auto ti-form-input" autocomplete="off" placeholder="New Password" required="">
                            </div>
                            <div class="space-y-2">
                              <label class="ti-form-label mb-0">Confirm Password<sup class="text-danger">*</sup></label>
                              <input type="password" class="my-auto ti-form-input" autocomplete="off" placeholder="Confirm Password" required="">
                            </div>
                            <p class="text-xs text-gray-500 dark:text-white/70">Password should be min of <b class="text-success">10 characters <sup>*</sup> </b> (and up to 100 characters),<b class="text-success">One Upper Case Character<sup>*</sup></b> and <b class="text-success">One Special Character<sup>*</sup></b>   e.g., ! @ # ? included.</p>
                          </div>
                        </div>
                        <div class="col-span-12 xl:col-span-6">
                          <div class="box border-0 shadow-none">
                            <div class="box-header">
                              <div class="sm:flex space-y-4">
                                <h5 class="box-title my-auto">Web Linked Devices</h5>
                                <button type="button" class="py-1 px-3 ti-btn ti-btn-primary text-sm m-0">Log out From All Devices </button>
                              </div>
                            </div>
                            <div class="box-body">
                                <ul class="flex flex-col">
                                    <li class="ti-list-group bg-white text-gray-800 dark:bg-bgdark dark:border-white/10 dark:text-white">
                                      <div class="sm:flex w-full space-y-2">
                                        <div class="flex space-x-3 rtl:space-x-reverse">
                                          <div class="avatar rounded-sm avatar-sm bg-gray-100 dark:bg-black/20 p-2.5">
                                            <i class="ri ri-smartphone-line text-xl leading-none text-gray-500 dark:text-white/70"></i>
                                          </div>
                                          <div class="">
                                            <p class="mb-0 text-sm">Mobile-Poco-M2-Pro</p>
                                            <p class="mb-0 text-gray-500 dark:text-white/70 text-xs">Manchester, UK-Nov 30, 04:45PM</p>
                                          </div>
                                        </div>
                                        <div class="ltr:ml-auto rtl:mr-auto my-auto text-end">
                                          <button type="button" class="px-2 py-1 ti-btn ti-btn-soft-info text-xs">ReWoke</button>
                                          <button type="button" class="px-2 py-1 ti-btn ti-btn-soft-danger text-xs">Logout</button>
                                        </div>
                                      </div>
                                    </li>
                                    <li class="ti-list-group bg-white text-gray-800 dark:bg-bgdark dark:border-white/10 dark:text-white">
                                      <div class="sm:flex w-full space-y-2">
                                        <div class="flex space-x-3 rtl:space-x-reverse">
                                          <div class="avatar rounded-sm avatar-sm bg-gray-100 dark:bg-black/20 p-2.5">
                                            <i class="ri ri-tablet-line text-xl leading-none text-gray-500 dark:text-white/70"></i>
                                          </div>
                                          <div class="">
                                            <p class="mb-0 text-sm">Apple Tablet</p>
                                            <p class="mb-0 text-gray-500 dark:text-white/70 text-xs">Manchester, UK-Nov 30, 02:45PM</p>
                                          </div>
                                        </div>
                                        <div class="ltr:ml-auto rtl:mr-auto my-auto text-end">
                                          <button type="button" class="px-2 py-1 ti-btn ti-btn-soft-info text-xs">ReWoke</button>
                                          <button type="button" class="px-2 py-1 ti-btn ti-btn-soft-danger text-xs">Logout</button>
                                        </div>
                                      </div>
                                    </li>
                                    <li class="ti-list-group bg-white text-gray-800 dark:bg-bgdark dark:border-white/10 dark:text-white">
                                      <div class="sm:flex w-full space-y-2">
                                        <div class="flex space-x-3 rtl:space-x-reverse">
                                          <div class="avatar rounded-sm avatar-sm bg-gray-100 dark:bg-black/20 p-2.5">
                                            <i class="ri ri-airplay-line text-xl leading-none text-gray-500 dark:text-white/70"></i>
                                          </div>
                                          <div class="">
                                            <p class="mb-0 text-sm">Dell Desktop</p>
                                            <p class="mb-0 text-gray-500 dark:text-white/70 text-xs">Manchester, UK-Nov 30, 02:45PM</p>
                                          </div>
                                        </div>
                                        <div class="ltr:ml-auto rtl:mr-auto my-auto text-end">
                                          <button type="button" class="px-2 py-1 ti-btn ti-btn-soft-info text-xs">ReWoke</button>
                                          <button type="button" class="px-2 py-1 ti-btn ti-btn-soft-danger text-xs">Logout</button>
                                        </div>
                                      </div>
                                    </li>
                                    <li class="ti-list-group bg-white text-gray-800 dark:bg-bgdark dark:border-white/10 dark:text-white">
                                      <div class="sm:flex w-full space-y-2">
                                        <div class="flex space-x-3 rtl:space-x-reverse">
                                          <div class="avatar rounded-sm avatar-sm bg-gray-100 dark:bg-black/20 p-2.5">
                                            <i class="ri ri-macbook-line text-xl leading-none text-gray-500 dark:text-white/70"></i>
                                          </div>
                                          <div class="">
                                            <p class="mb-0 text-sm">Lenovo Laptop</p>
                                            <p class="mb-0 text-gray-500 dark:text-white/70 text-xs">Manchester, UK-Nov 30, 02:45PM</p>
                                          </div>
                                        </div>
                                        <div class="ltr:ml-auto rtl:mr-auto my-auto text-end">
                                          <button type="button" class="px-2 py-1 ti-btn ti-btn-soft-info text-xs">ReWoke</button>
                                          <button type="button" class="px-2 py-1 ti-btn ti-btn-soft-danger text-xs">Logout</button>
                                        </div>
                                      </div>
                                    </li>
                                </ul>
                            </div>
                          </div>
                          <div class="my-5 px-6">
                            <div class="sm:space-x-6 rtl:space-x-reverse sm:flex space-y-4">
                              <label class="ti-form-label my-auto">Account :</label>
                                <button type="button" class="ti-btn ti-btn-danger">
                                  Deactivate Account
                                </button>
                                <button type="button" class="ti-btn-disabled ti-btn ti-btn-success">
                                  Activate Account
                                </button>
                            </div>
                          </div>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
              <div id="profile-settings-4" class="hidden" role="tabpanel" aria-labelledby="profile-settings-item-4">
                <div class="box border-0 shadow-none mb-0">
                  <div class="box-header">
                    <h5 class="box-title leading-none flex"><i class="ri ri-account-circle-line ltr:mr-2 rtl:ml-2"></i> Account Settings</h5>
                  </div>
                  <div class="box-body">
                    <div class="sm:grid grid-cols-12 gap-6 space-y-6">
                      <div class="col-span-2 my-auto">
                        <label class="ti-form-label mb-0">Verfication Step - 2
                          <a aria-label="anchor" class="ltr:ml-2 rtl:mr-2" href="javascript:void(0);">
                            <i class="ri ri-question-line"></i>
                          </a>
                        </label>
                      </div>
                      <div class="col-span-10">
                        <div class="flex items-center">
                            <input type="checkbox" class="ti-switch shrink-0 w-11 h-6 before:w-5 before:h-5 m-0">
                        </div>
                      </div>
                    </div>
                    <div class="my-5">
                      <nav class="flex space-x-2 rtl:space-x-reverse mb-4" aria-label="Tabs" role="tablist">
                        <button type="button" class="hs-tab-active:bg-primary hs-tab-active:text-white dark:hs-tab-active:bg-primary dark:hs-tab-active:text-white py-2 px-4 inline-flex items-center gap-2 bg-gray-50 text-sm font-medium text-center text-gray-500 rounded-sm hover:text-gray-700 dark:bg-black/20 dark:border-white/10 dark:text-white/70 active" id="adhar-tab" data-hs-tab="#adhar" aria-controls="adhar" role="tab">
                          Adhar Number
                        </button>
                        <button type="button" class="hs-tab-active:bg-primary hs-tab-active:text-white dark:hs-tab-active:bg-primary dark:hs-tab-active:text-white py-2 px-4 inline-flex items-center gap-2 bg-gray-50 text-sm font-medium text-center text-gray-500 rounded-sm hover:text-gray-700 dark:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-gray-300" id="mobile-tab" data-hs-tab="#mobile" aria-controls="mobile" role="tab">
                          mobile Number
                        </button>
                      </nav>
                      <div>
                        <div id="adhar" role="tabpanel" aria-labelledby="adhar-tab">
                          <input type="text" class="ti-form-input" placeholder="name" value="5353 2525 2525">
                        </div>
                        <div id="mobile" class="hidden" role="tabpanel" aria-labelledby="mobile-tab">
                          <input type="number" class="ti-form-input" placeholder="name" value="9699696996">
                        </div>
                      </div>
                    </div>
                    <h5 class="text-base font-semibold ">Social Accounts</h5>
                    <div class="space-y-3 mt-5">
                      <div class="sm:grid grid-cols-12 gap-6 space-y-4">
                        <div class="col-span-2 my-auto">
                          <label class="ti-form-label">Facebook</label>
                        </div>
                        <div class="col-span-10">
                          <input type="email" class="ti-form-input" value="https://www.facebook.com/Spruha">
                        </div>
                      </div>
                      <div class="sm:grid grid-cols-12 gap-6 space-y-4">
                        <div class="col-span-2 my-auto">
                          <label class="ti-form-label">Twitter</label>
                        </div>
                        <div class="col-span-10">
                          <input type="email" class="ti-form-input" value="twitter.com/spruko.me">
                        </div>
                      </div>
                      <div class="sm:grid grid-cols-12 gap-6 space-y-4">
                        <div class="col-span-2 my-auto">
                          <label class="ti-form-label">Google+</label>
                        </div>
                        <div class="col-span-10">
                          <input type="email" class="ti-form-input" value="spruko.com">
                        </div>
                      </div>
                      <div class="sm:grid grid-cols-12 gap-6 space-y-4">
                        <div class="col-span-2 my-auto">
                          <label class="ti-form-label">Linked in</label>
                        </div>
                        <div class="col-span-10">
                          <input type="email" class="ti-form-input" value="linkedin.com/in/spruko">
                        </div>
                      </div>
                      <div class="sm:grid grid-cols-12 gap-6 space-y-4">
                        <div class="col-span-2 my-auto">
                          <label class="ti-form-label">Github</label>
                        </div>
                        <div class="col-span-10">
                          <input type="email" class="ti-form-input" value="github.com/spruko">
                        </div>
                      </div>
                      <div class="sm:grid grid-cols-12 gap-6 space-y-4">
                        <div class="col-span-2 my-auto">
                          <label class="ti-form-label">Website</label>
                        </div>
                        <div class="col-span-10">
                          <input type="email" class="ti-form-input" value="www.andersonitumay.com">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div id="profile-settings-5" class="hidden" role="tabpanel" aria-labelledby="profile-settings-item-5">
                <div class="box border-0 shadow-none mb-0">
                  <div class="box-header">
                    <h5 class="box-title leading-none flex"><i class="ri ri-notification-4-line ltr:mr-2 rtl:ml-2"></i> Notifications Settings</h5>
                  </div>
                  <div class="box-body">
                    <div class="space-y-4">
                      <div class="p-4 border border-gray-200 dark:border-white/10 rounded-sm">
                        <div class="md:grid grid-cols-12 gap-6 space-y-4">
                          <div class="col-span-12 md:col-span-6 my-auto">
                            <p class="text-base mb-1 font-semibold">Comments</p>
                            <p class="text-xs mb-0 text-gray-500 dark:text-white/70">The Comment Notifications are the notifications you get for your posts and replies for your comments.</p>
                          </div>
                          <div class="col-span-12 md:col-span-6">
                            <div class="space-y-2">
                              <div class="sm:grid grid-cols-12 gap-6 space-y-4 md:text-end">
                                <div class="col-span-9 my-auto">
                                  <label class="text-sm text-gray-500 ltr:ml-3 rtl:mr-3 dark:text-white/70">Notify Me</label>
                                </div>
                                <div class="col-span-3 my-auto">
                                  <input type="checkbox" class="ti-switch shrink-0 w-11 h-6 before:w-5 before:h-5" checked="">
                                </div>
                              </div>
                              <div class="sm:grid grid-cols-12 gap-6 space-y-4 md:text-end">
                                <div class="col-span-9 my-auto">
                                  <label class="text-sm text-gray-500 ltr:ml-3 rtl:mr-3 dark:text-white/70">Notify Me If Mentioned</label>
                                </div>
                                <div class="col-span-3 my-auto">
                                  <input type="checkbox" class="ti-switch shrink-0 w-11 h-6 before:w-5 before:h-5">
                                </div>
                              </div>
                              <div class="sm:grid grid-cols-12 gap-6 space-y-4 md:text-end">
                                <div class="col-span-9 my-auto">
                                  <label class="text-sm text-gray-500 ltr:ml-3 rtl:mr-3 dark:text-white/70">Notify For My Posts</label>
                                </div>
                                <div class="col-span-3 my-auto">
                                  <input type="checkbox" class="ti-switch shrink-0 w-11 h-6 before:w-5 before:h-5" checked="">
                                </div>
                              </div>
                              <div class="sm:grid grid-cols-12 gap-6 space-y-4 md:text-end">
                                <div class="col-span-9 my-auto">
                                  <label class="text-sm text-gray-500 ltr:ml-3 rtl:mr-3 dark:text-white/70">All Comments</label>
                                </div>
                                <div class="col-span-3 my-auto">
                                  <input type="checkbox" class="ti-switch shrink-0 w-11 h-6 before:w-5 before:h-5">
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="p-4 border border-gray-200 dark:border-white/10 rounded-sm">
                        <div class="md:grid grid-cols-12 gap-6 space-y-4">
                          <div class="col-span-12 md:col-span-6 my-auto">
                            <p class="text-base mb-1 font-semibold">Tags</p>
                            <p class="text-xs mb-0 text-gray-500 dark:text-white/70">The Tag Notifications are the notifications you get when you are tagged for others posts.</p>
                          </div>
                          <div class="col-span-12 md:col-span-6">

                            <div class="space-y-2">
                              <div class="sm:grid grid-cols-12 gap-6 space-y-4 md:text-end">
                                <div class="col-span-9 my-auto">
                                  <label class="text-sm text-gray-500 ltr:ml-3 rtl:mr-3 dark:text-white/70">Notify Me</label>
                                </div>
                                <div class="col-span-3 my-auto">
                                  <input type="checkbox" class="ti-switch shrink-0 w-11 h-6 before:w-5 before:h-5" checked="">
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="p-4 border border-gray-200 dark:border-white/10 rounded-sm">
                        <div class="md:grid grid-cols-12 gap-6 space-y-4">
                          <div class="col-span-12 md:col-span-6 my-auto">
                            <p class="text-base mb-1 font-semibold">Reminders</p>
                            <p class="text-xs mb-0 text-gray-500 dark:text-white/70">The Reminder Notifications are the notifications you get when you missed any update .</p>
                          </div>
                          <div class="col-span-12 md:col-span-6">
                            <div class="space-y-2">
                              <div class="sm:grid grid-cols-12 gap-6 space-y-4 md:text-end">
                                <div class="col-span-9 my-auto">
                                  <label class="text-sm text-gray-500 ltr:ml-3 rtl:mr-3 dark:text-white/70">Remind Me</label>
                                </div>
                                <div class="col-span-3 my-auto">
                                  <input type="checkbox" class="ti-switch shrink-0 w-11 h-6 before:w-5 before:h-5" checked="">
                                </div>
                              </div>
                              <div class="sm:grid grid-cols-12 gap-6 space-y-4 md:text-end">
                                <div class="col-span-9 my-auto">
                                  <label class="text-sm text-gray-500 ltr:ml-3 rtl:mr-3 dark:text-white/70">Remind Me only Important Updates</label>
                                </div>
                                <div class="col-span-3 my-auto">
                                  <input type="checkbox" class="ti-switch shrink-0 w-11 h-6 before:w-5 before:h-5" checked="">
                                </div>
                              </div>
                              <div class="sm:grid grid-cols-12 gap-6 space-y-4 md:text-end">
                                <div class="col-span-9 my-auto">
                                  <label class="text-sm text-gray-500 ltr:ml-3 rtl:mr-3 dark:text-white/70">Remind Me All updates</label>
                                </div>
                                <div class="col-span-3 my-auto">
                                  <input type="checkbox" class="ti-switch shrink-0 w-11 h-6 before:w-5 before:h-5">
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="p-4 border border-gray-200 dark:border-white/10 rounded-sm">
                        <div class="md:grid grid-cols-12 gap-6 space-y-4">
                          <div class="col-span-12 md:col-span-6 my-auto">
                            <p class="text-base mb-1 font-semibold">More Activity</p>
                            <p class="text-xs mb-0 text-gray-500 dark:text-white/70">The Notifications is for likes ,comments,reactions for your profile  .</p>
                          </div>
                          <div class="col-span-12 md:col-span-6">
                            <div class="space-y-2">
                              <div class="sm:grid grid-cols-12 gap-6 space-y-4 md:text-end">
                                <div class="col-span-9 my-auto">
                                  <label class="text-sm text-gray-500 ltr:ml-3 rtl:mr-3 dark:text-white/70">Notify Me</label>
                                </div>
                                <div class="col-span-3 my-auto">
                                  <input type="checkbox" class="ti-switch shrink-0 w-11 h-6 before:w-5 before:h-5">
                                </div>
                              </div>
                              <div class="sm:grid grid-cols-12 gap-6 space-y-4 md:text-end">
                                <div class="col-span-9 my-auto">
                                  <label class="text-sm text-gray-500 ltr:ml-3 rtl:mr-3 dark:text-white/70">Notify Me only Important</label>
                                </div>
                                <div class="col-span-3 my-auto">
                                  <input type="checkbox" class="ti-switch shrink-0 w-11 h-6 before:w-5 before:h-5">
                                </div>
                              </div>
                              <div class="sm:grid grid-cols-12 gap-6 space-y-4 md:text-end">
                                <div class="col-span-9 my-auto">
                                  <label class="text-sm text-gray-500 ltr:ml-3 rtl:mr-3 dark:text-white/70">Notify Me All</label>
                                </div>
                                <div class="col-span-3 my-auto">
                                  <input type="checkbox" class="ti-switch shrink-0 w-11 h-6 before:w-5 before:h-5" checked="">
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
            <div class="box-footer text-end space-x-3 rtl:space-x-reverse">
              <a href="javascript:void(0);" class="ti-btn m-0 ti-btn-soft-primary"><i class="ri ri-refresh-line"></i> Update</a>
              <a href="javascript:void(0);" class="ti-btn m-0 ti-btn-soft-secondary"><i class="ri ri-close-circle-line"></i> Cancel</a>
            </div>
          </div>
        </div>
      </div>
      <!-- End::row-1 -->

    </div>
    <!-- Start::main-content -->

  </div>
  @endsection