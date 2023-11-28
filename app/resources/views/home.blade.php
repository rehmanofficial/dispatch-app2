@extends('layouts.app')
@section('content')
<div class="content">

      <!-- Start::main-content -->
      <div class="main-content">

        <!-- Page Header -->
        <div class="block justify-between page-header md:flex">
            <div>
                <h3 class="text-gray-700 hover:text-gray-900 dark:text-white dark:hover:text-white text-2xl font-medium"> Dashboard</h3>
            </div>
            <ol class="flex items-center whitespace-nowrap min-w-0">
                <li class="text-sm">
                  <a class="flex items-center font-semibold text-primary hover:text-primary dark:text-primary truncate" href="javascript:void(0);">
                    Home
                    <i class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-gray-300 dark:text-gray-300 rtl:rotate-180"></i>
                  </a>
                </li>
                <li class="text-sm text-gray-500 hover:text-primary dark:text-white/70 " aria-current="page">
                    Dashboard
                </li>
            </ol>
        </div>
        <!-- Page Header Close -->

        <!-- Start::row-1 -->
        <div class="grid grid-cols-12 gap-x-5">
          <div class="col-span-12 md:col-span-6 xxl:col-span-3">
            <div class="box overflow-hidden">
              <div class="box-body">
                <div class="flex">
                  <div class="flex space-x-3 rtl:space-x-reverse">
                    <div class="avatar p-2 rounded-sm bg-primary/10">
                      <svg class="fill-primary" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                        <path class="fill-primary" d="M9,10h2.5c0.276123,0,0.5-0.223877,0.5-0.5S11.776123,9,11.5,9H10V8c0-0.276123-0.223877-0.5-0.5-0.5S9,7.723877,9,8v1c-1.1045532,0-2,0.8954468-2,2s0.8954468,2,2,2h1c0.5523071,0,1,0.4476929,1,1s-0.4476929,1-1,1H7.5C7.223877,15,7,15.223877,7,15.5S7.223877,16,7.5,16H9v1.0005493C9.0001831,17.2765503,9.223999,17.5001831,9.5,17.5h0.0006104C9.7765503,17.4998169,10.0001831,17.276001,10,17v-1c1.1045532,0,2-0.8954468,2-2s-0.8954468-2-2-2H9c-0.5523071,0-1-0.4476929-1-1S8.4476929,10,9,10z M21.5,12H17V2.5c0.000061-0.0875244-0.0228882-0.1735229-0.0665283-0.2493896c-0.1375732-0.2393188-0.4431152-0.3217773-0.6824951-0.1842041l-3.2460327,1.8603516L9.7481079,2.0654297c-0.1536865-0.0878906-0.3424072-0.0878906-0.4960938,0l-3.256897,1.8613281L2.7490234,2.0664062C2.6731567,2.0227661,2.5871582,1.9998779,2.4996338,1.9998779C2.2235718,2.000061,1.9998779,2.223938,2,2.5v17c0.0012817,1.380188,1.119812,2.4987183,2.5,2.5H19c1.6561279-0.0018311,2.9981689-1.3438721,3-3v-6.5006104C21.9998169,12.2234497,21.776001,11.9998169,21.5,12z M4.5,21c-0.828064-0.0009155-1.4990845-0.671936-1.5-1.5V3.3623047l2.7412109,1.5712891c0.1575928,0.0872192,0.348877,0.0875854,0.5068359,0.0009766L9.5,3.0761719l3.2519531,1.8583984c0.157959,0.0866089,0.3492432,0.0862427,0.5068359-0.0009766L16,3.3623047V19c0.0008545,0.7719116,0.3010864,1.4684448,0.7803345,2H4.5z M21,19c0,1.1045532-0.8954468,2-2,2s-2-0.8954468-2-2v-6h4V19z">
                        </path>
                      </svg>
                    </div>
                    <h6 class="text-lg font-medium text-gray-800 mb-2 dark:text-white my-auto">Total Loads Revenue</h6>
                  </div>
                  <span class="badge bg-primary/10 text-primary py-1 ltr:ml-auto rtl:mr-auto !my-auto">
                    <i class="ti ti-trending-up"></i> 20%
                  </span>
                </div>
                <div class="mt-2">
                  <h2 class="text-2xl font-semibold text-gray-800 dark:text-white">$26,35,262</h2>
                  <p class="text-xs text-gray-400 "># of loads: 48</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-span-12 md:col-span-6 xxl:col-span-3">
            <div class="box overflow-hidden">
              <div class="box-body">
                <div class="flex">
                  <div class="flex space-x-3 rtl:space-x-reverse">
                    <div class="avatar p-2 rounded-sm bg-secondary/10">
                      <svg class="fill-secondary" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                        <path class="fill-secondary" d="M9.5,7h7C16.776123,7,17,6.776123,17,6.5S16.776123,6,16.5,6h-7C9.223877,6,9,6.223877,9,6.5S9.223877,7,9.5,7z M7.5,11h9c0.276123,0,0.5-0.223877,0.5-0.5S16.776123,10,16.5,10h-9C7.223877,10,7,10.223877,7,10.5S7.223877,11,7.5,11z M20.5,2H3.4993896C3.2234497,2.0001831,2.9998169,2.223999,3,2.5v19c-0.000061,0.1124268,0.0378418,0.2216187,0.1074829,0.3098755c0.1710205,0.2167358,0.4853516,0.2537231,0.7020874,0.0827026l2.8652344-2.2617188l2.3583984,1.7695312c0.1777954,0.1328125,0.421814,0.1328125,0.5996094,0L12,19.625l2.3671875,1.7753906c0.1777954,0.1328125,0.421814,0.1328125,0.5996094,0l2.3583984-1.7695312l2.8652344,2.2617188C20.2785034,21.9623413,20.3876343,22.0002441,20.5,22h0.0006104C20.7766113,21.9998169,21.0001831,21.7759399,21,21.5V2.4993896C20.9998169,2.2234497,20.776001,1.9998169,20.5,2z M20,20.46875l-2.3574219-1.8613281c-0.0882568-0.069519-0.1972656-0.1072998-0.3095703-0.1074219c-0.1080933-0.000061-0.2132568,0.0349121-0.2998047,0.0996094L14.6669922,20.375l-2.3671875-1.7753906c-0.1777954-0.1328125-0.421814-0.1328125-0.5996094,0L9.3330078,20.375l-2.3662109-1.7753906c-0.1817017-0.1348877-0.4311523-0.1317139-0.609375,0.0078125L4,20.46875V3h16V20.46875z M7.5,15h9c0.276123,0,0.5-0.223877,0.5-0.5S16.776123,14,16.5,14h-9C7.223877,14,7,14.223877,7,14.5S7.223877,15,7.5,15z">
                        </path>
                      </svg>
                    </div>
                    <h6 class="text-lg font-medium text-gray-800 mb-2 dark:text-white my-auto">Completed Loads Revenue</h6>
                  </div>
                  <span class="badge bg-secondary/10 text-secondary py-1 ltr:ml-auto rtl:mr-auto !my-auto"><i class="ti ti-trending-up"></i> 1.8%</span>
                </div>
                <div class="mt-2">
                  <h2 class="text-2xl font-semibold text-gray-800 dark:text-white">$56,35,262</h2>
                  <p class="text-xs text-gray-400 "># of loads: 98</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-span-12 md:col-span-6 xxl:col-span-3">
            <div class="box overflow-hidden">
              <div class="box-body">
                <div class="flex">
                  <div class="flex space-x-3 rtl:space-x-reverse">
                    <div class="avatar p-2 rounded-sm bg-warning/10">
                      <!--<svg class="fill-warning" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24"
                        viewBox="0 0 24 24" id="shopping-bag">
                        <path class="fill-warning" fill="#4B5563"
                          d="M19.5,7H16V5.9169922c0-2.2091064-1.7908325-4-4-4s-4,1.7908936-4,4V7H4.5C4.4998169,7,4.4996338,7,4.4993896,7C4.2234497,7.0001831,3.9998169,7.223999,4,7.5V19c0.0018311,1.6561279,1.3438721,2.9981689,3,3h10c1.6561279-0.0018311,2.9981689-1.3438721,3-3V7.5c0-0.0001831,0-0.0003662,0-0.0006104C19.9998169,7.2234497,19.776001,6.9998169,19.5,7z M9,5.9169922c0-1.6568604,1.3431396-3,3-3s3,1.3431396,3,3V7H9V5.9169922z M19,19c-0.0014038,1.1040039-0.8959961,1.9985962-2,2H7c-1.1040039-0.0014038-1.9985962-0.8959961-2-2V8h3v2.5C8,10.776123,8.223877,11,8.5,11S9,10.776123,9,10.5V8h6v2.5c0,0.0001831,0,0.0003662,0,0.0005493C15.0001831,10.7765503,15.223999,11.0001831,15.5,11c0.0001831,0,0.0003662,0,0.0006104,0C15.7765503,10.9998169,16.0001831,10.776001,16,10.5V8h3V19z">
                        </path>
                      </svg>-->
                      <i class="ri-attachment-line"></i>
                    </div>
                    <h6 class="text-lg font-medium text-gray-800 mb-2 dark:text-white my-auto">October Pending Loads</h6>
                  </div>
                  <span class="badge bg-warning/10 text-warning py-1 ltr:ml-auto rtl:mr-auto !my-auto"><i class="ti ti-trending-down"></i> 1.8%</span>
                </div>
                <div class="mt-2">
                  <h2 class="text-2xl font-semibold text-gray-800 dark:text-white">$4,262</h2>
                  <p class="text-xs text-gray-400 "># of loads: 67</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-span-12 md:col-span-6 xxl:col-span-3">
            <div class="box overflow-hidden">
              <div class="box-body">
                <div class="flex">
                  <div class="flex space-x-3 rtl:space-x-reverse">
                    <div class="avatar p-2 rounded-sm bg-danger/10">
                     <!-- <svg class="fill-success" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24"
                        viewBox="0 0 24 24">
                        <path class="fill-success"
                          d="M10.75,8H12h0.0006104H15.5C15.776123,8,16,7.776123,16,7.5S15.776123,7,15.5,7h-3V5.5C12.5,5.223877,12.276123,5,12,5s-0.5,0.223877-0.5,0.5V7h-0.75C9.2312012,7,8,8.2312012,8,9.75s1.2312012,2.75,2.75,2.75h2.5c0.9664917,0,1.75,0.7835083,1.75,1.75S14.2164917,16,13.25,16H8.5C8.223877,16,8,16.223877,8,16.5S8.223877,17,8.5,17h3v1.5c0,0.0001831,0,0.0003662,0,0.0005493C11.5001831,18.7765503,11.723999,19.0001831,12,19c0.0001831,0,0.0003662,0,0.0006104,0c0.2759399-0.0001831,0.4995728-0.223999,0.4993896-0.5V17h0.75c1.5187988,0,2.75-1.2312012,2.75-2.75s-1.2312012-2.75-2.75-2.75h-2.5C9.7835083,11.5,9,10.7164917,9,9.75S9.7835083,8,10.75,8z M12,1C5.9248657,1,1,5.9248657,1,12s4.9248657,11,11,11c6.0722656-0.0068359,10.9931641-4.9277344,11-11C23,5.9248657,18.0751343,1,12,1z M12,22C6.4771729,22,2,17.5228271,2,12S6.4771729,2,12,2c5.5201416,0.0064697,9.9935303,4.4798584,10,10C22,17.5228271,17.5228271,22,12,22z">
                        </path>
                      </svg>-->
                      <i class="ti ti-square-minus"></i>
                    </div>
                    <h6 class="text-lg font-medium text-gray-800 mb-2 dark:text-white my-auto">October Canceld Loads</h6>
                  </div>
                  <span class="badge bg-danger/10 text-danger py-1 ltr:ml-auto rtl:mr-auto !my-auto"><i class="ti ti-trending-up"></i> 1.2%</span>
                </div>
                <div class="mt-2">
                  <h2 class="text-2xl font-semibold text-gray-800 dark:text-white">$35,262</h2>
                  <p class="text-xs text-gray-400 "># of loads: 57</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="grid grid-cols-12 gap-x-5">
          <div class="col-span-12 lg:col-span-12 xxl:col-span-6">
            <div class="box">
              <div class="box-header">
                <div class="flex">
                  <h5 class="box-title my-auto">Monthly Dispatcher &amp; Loads Comparison</h5>
                  <div class="hs-dropdown ti-dropdown block ltr:ml-auto rtl:mr-auto my-auto">
                    <button type="button" aria-label="button" class="hs-dropdown-toggle ti-dropdown-toggle rounded-sm p-2 bg-white !border border-gray-200 text-gray-500 hover:bg-gray-100  focus:ring-gray-200 dark:bg-black/20 dark:hover:bg-black/30 dark:border-white/10 dark:hover:border-white/20 dark:focus:ring-white/10 dark:focus:ring-offset-white/10">
                      <i class="text-sm leading-none ti ti-dots-vertical"></i> </button>
                    <div class="hs-dropdown-menu ti-dropdown-menu">
                      <a class="ti-dropdown-item" href="javascript:void(0)">Download PDF</a>
                      <a class="ti-dropdown-item" href="javascript:void(0)">Export CSV</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="box-body">
                <ul class="flex flex-wrap sm:space-x-6 sm:rtl:space-x-reverse">
                  <li>
                    <p class="inline-flex items-center">
                      <span class="block w-3 h-3 rounded-full ltr:mr-2 rtl:ml-2 border-4 border-primary pointer-events-none"></span>
                      <span class="flex items-center">
                        <span class="text-2xl text-gray-800 dark:text-white font-semibold ltr:mr-2 rtl:ml-2 pointer-events-none">$9.65K</span>
                        <span class="text-sm text-gray-400 dark:text-white/80">/ Revenue From Dispatchers</span>
                      </span>
                    </p>
                  </li>
                  <li>
                    <p class="inline-flex items-center">
                      <span class="block w-3 h-3 rounded-full ltr:mr-2 rtl:ml-2 border-4 border-gray-200 pointer-events-none"></span>
                      <span class="flex items-center">
                        <span class="text-2xl text-gray-800 dark:text-white font-semibold ltr:mr-2 rtl:ml-2 pointer-events-none">$3.75K</span>
                        <span class="text-sm text-gray-400 dark:text-white/80">/ Expenses</span>
                      </span>
                    </p>
                  </li>
                </ul>
                <div id="salesOverview" style="min-height: 315px;"><div id="apexchartsew62js0p" class="apexcharts-canvas apexchartsew62js0p apexcharts-theme-light" style="width: 1017px; height: 300px;"><svg id="SvgjsSvg1274" width="1017" height="300" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1276" class="apexcharts-inner apexcharts-graphical" transform="translate(47.34765625, 30)"><defs id="SvgjsDefs1275"><linearGradient id="SvgjsLinearGradient1280" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop1281" stop-opacity="0.4" stop-color="rgba(216,227,240,0.4)" offset="0"></stop><stop id="SvgjsStop1282" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop><stop id="SvgjsStop1283" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop></linearGradient><clipPath id="gridRectMaskew62js0p"><rect id="SvgjsRect1285" width="966.65234375" height="235.348" x="-3.5" y="-1.5" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMaskew62js0p"></clipPath><clipPath id="nonForecastMaskew62js0p"></clipPath><clipPath id="gridRectMarkerMaskew62js0p"><rect id="SvgjsRect1286" width="963.65234375" height="236.348" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><rect id="SvgjsRect1284" width="21.992032877604164" height="232.348" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke-dasharray="3" fill="url(#SvgjsLinearGradient1280)" class="apexcharts-xcrosshairs" y2="232.348" filter="none" fill-opacity="0.9"></rect><g id="SvgjsG1342" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1343" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"><text id="SvgjsText1345" font-family="Helvetica, Arial, sans-serif" x="39.985514322916664" y="261.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#6b7280" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1346">Jan</tspan><title>Jan</title></text><text id="SvgjsText1348" font-family="Helvetica, Arial, sans-serif" x="119.95654296875" y="261.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#6b7280" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1349">Feb</tspan><title>Feb</title></text><text id="SvgjsText1351" font-family="Helvetica, Arial, sans-serif" x="199.92757161458334" y="261.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#6b7280" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1352">Mar</tspan><title>Mar</title></text><text id="SvgjsText1354" font-family="Helvetica, Arial, sans-serif" x="279.89860026041663" y="261.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#6b7280" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1355">Apr</tspan><title>Apr</title></text><text id="SvgjsText1357" font-family="Helvetica, Arial, sans-serif" x="359.86962890624994" y="261.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#6b7280" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1358">May</tspan><title>May</title></text><text id="SvgjsText1360" font-family="Helvetica, Arial, sans-serif" x="439.84065755208326" y="261.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#6b7280" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1361">Jun</tspan><title>Jun</title></text><text id="SvgjsText1363" font-family="Helvetica, Arial, sans-serif" x="519.8116861979166" y="261.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#6b7280" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1364">Jul</tspan><title>Jul</title></text><text id="SvgjsText1366" font-family="Helvetica, Arial, sans-serif" x="599.78271484375" y="261.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#6b7280" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1367">Aug</tspan><title>Aug</title></text><text id="SvgjsText1369" font-family="Helvetica, Arial, sans-serif" x="679.7537434895834" y="261.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#6b7280" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1370">Sep</tspan><title>Sep</title></text><text id="SvgjsText1372" font-family="Helvetica, Arial, sans-serif" x="759.7247721354167" y="261.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#6b7280" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1373">Oct</tspan><title>Oct</title></text><text id="SvgjsText1375" font-family="Helvetica, Arial, sans-serif" x="839.6958007812501" y="261.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#6b7280" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1376">Nov</tspan><title>Nov</title></text><text id="SvgjsText1378" font-family="Helvetica, Arial, sans-serif" x="919.6668294270835" y="261.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#6b7280" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1379">Dec</tspan><title>Dec</title></text></g><line id="SvgjsLine1380" x1="0" y1="233.348" x2="959.65234375" y2="233.348" stroke="rgba(119, 119, 142, 0.05)" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"></line></g><g id="SvgjsG1401" class="apexcharts-grid"><g id="SvgjsG1402" class="apexcharts-gridlines-horizontal"><line id="SvgjsLine1417" x1="0" y1="0" x2="959.65234375" y2="0" stroke="rgba(107 ,114 ,128,0.1)" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1418" x1="0" y1="46.4696" x2="959.65234375" y2="46.4696" stroke="rgba(107 ,114 ,128,0.1)" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1419" x1="0" y1="92.9392" x2="959.65234375" y2="92.9392" stroke="rgba(107 ,114 ,128,0.1)" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1420" x1="0" y1="139.40879999999999" x2="959.65234375" y2="139.40879999999999" stroke="rgba(107 ,114 ,128,0.1)" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1421" x1="0" y1="185.8784" x2="959.65234375" y2="185.8784" stroke="rgba(107 ,114 ,128,0.1)" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1422" x1="0" y1="232.348" x2="959.65234375" y2="232.348" stroke="rgba(107 ,114 ,128,0.1)" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG1403" class="apexcharts-gridlines-vertical"></g><line id="SvgjsLine1404" x1="0" y1="233.348" x2="0" y2="239.348" stroke="rgba(119, 119, 142, 0.05)" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1405" x1="79.97102864583333" y1="233.348" x2="79.97102864583333" y2="239.348" stroke="rgba(119, 119, 142, 0.05)" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1406" x1="159.94205729166666" y1="233.348" x2="159.94205729166666" y2="239.348" stroke="rgba(119, 119, 142, 0.05)" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1407" x1="239.9130859375" y1="233.348" x2="239.9130859375" y2="239.348" stroke="rgba(119, 119, 142, 0.05)" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1408" x1="319.8841145833333" y1="233.348" x2="319.8841145833333" y2="239.348" stroke="rgba(119, 119, 142, 0.05)" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1409" x1="399.85514322916663" y1="233.348" x2="399.85514322916663" y2="239.348" stroke="rgba(119, 119, 142, 0.05)" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1410" x1="479.82617187499994" y1="233.348" x2="479.82617187499994" y2="239.348" stroke="rgba(119, 119, 142, 0.05)" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1411" x1="559.7972005208333" y1="233.348" x2="559.7972005208333" y2="239.348" stroke="rgba(119, 119, 142, 0.05)" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1412" x1="639.7682291666666" y1="233.348" x2="639.7682291666666" y2="239.348" stroke="rgba(119, 119, 142, 0.05)" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1413" x1="719.7392578125" y1="233.348" x2="719.7392578125" y2="239.348" stroke="rgba(119, 119, 142, 0.05)" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1414" x1="799.7102864583334" y1="233.348" x2="799.7102864583334" y2="239.348" stroke="rgba(119, 119, 142, 0.05)" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1415" x1="879.6813151041667" y1="233.348" x2="879.6813151041667" y2="239.348" stroke="rgba(119, 119, 142, 0.05)" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1416" x1="959.6523437500001" y1="233.348" x2="959.6523437500001" y2="239.348" stroke="rgba(119, 119, 142, 0.05)" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1424" x1="0" y1="232.348" x2="959.65234375" y2="232.348" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine1423" x1="0" y1="1" x2="0" y2="232.348" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG1287" class="apexcharts-bar-series apexcharts-plot-series"><g id="SvgjsG1288" class="apexcharts-series" rel="1" seriesName="Income" data:realIndex="0"><path id="SvgjsPath1292" d="M 17.9934814453125 232.348L 17.9934814453125 190.8784Q 17.9934814453125 185.8784 22.9934814453125 185.8784L 31.985514322916664 185.8784Q 36.985514322916664 185.8784 36.985514322916664 190.8784L 36.985514322916664 190.8784L 36.985514322916664 232.348L 36.985514322916664 232.348z" fill="#5a66f1" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="3" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskew62js0p)" pathTo="M 17.9934814453125 232.348L 17.9934814453125 190.8784Q 17.9934814453125 185.8784 22.9934814453125 185.8784L 31.985514322916664 185.8784Q 36.985514322916664 185.8784 36.985514322916664 190.8784L 36.985514322916664 190.8784L 36.985514322916664 232.348L 36.985514322916664 232.348z" pathFrom="M 17.9934814453125 232.348L 17.9934814453125 232.348L 36.985514322916664 232.348L 36.985514322916664 232.348L 36.985514322916664 232.348L 36.985514322916664 232.348L 36.985514322916664 232.348L 17.9934814453125 232.348" cy="185.8784" cx="96.46451009114583" j="0" val="20" barHeight="46.4696" barWidth="21.992032877604164"></path><path id="SvgjsPath1294" d="M 97.96451009114583 232.348L 97.96451009114583 149.05576000000002Q 97.96451009114583 144.05576000000002 102.96451009114583 144.05576000000002L 111.95654296874999 144.05576000000002Q 116.95654296874999 144.05576000000002 116.95654296874999 149.05576000000002L 116.95654296874999 149.05576000000002L 116.95654296874999 232.348L 116.95654296874999 232.348z" fill="#5a66f1" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="3" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskew62js0p)" pathTo="M 97.96451009114583 232.348L 97.96451009114583 149.05576000000002Q 97.96451009114583 144.05576000000002 102.96451009114583 144.05576000000002L 111.95654296874999 144.05576000000002Q 116.95654296874999 144.05576000000002 116.95654296874999 149.05576000000002L 116.95654296874999 149.05576000000002L 116.95654296874999 232.348L 116.95654296874999 232.348z" pathFrom="M 97.96451009114583 232.348L 97.96451009114583 232.348L 116.95654296874999 232.348L 116.95654296874999 232.348L 116.95654296874999 232.348L 116.95654296874999 232.348L 116.95654296874999 232.348L 97.96451009114583 232.348" cy="144.05576000000002" cx="176.43553873697914" j="1" val="38" barHeight="88.29224" barWidth="21.992032877604164"></path><path id="SvgjsPath1296" d="M 177.93553873697914 232.348L 177.93553873697914 149.05576000000002Q 177.93553873697914 144.05576000000002 182.93553873697914 144.05576000000002L 191.92757161458331 144.05576000000002Q 196.92757161458331 144.05576000000002 196.92757161458331 149.05576000000002L 196.92757161458331 149.05576000000002L 196.92757161458331 232.348L 196.92757161458331 232.348z" fill="#5a66f1" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="3" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskew62js0p)" pathTo="M 177.93553873697914 232.348L 177.93553873697914 149.05576000000002Q 177.93553873697914 144.05576000000002 182.93553873697914 144.05576000000002L 191.92757161458331 144.05576000000002Q 196.92757161458331 144.05576000000002 196.92757161458331 149.05576000000002L 196.92757161458331 149.05576000000002L 196.92757161458331 232.348L 196.92757161458331 232.348z" pathFrom="M 177.93553873697914 232.348L 177.93553873697914 232.348L 196.92757161458331 232.348L 196.92757161458331 232.348L 196.92757161458331 232.348L 196.92757161458331 232.348L 196.92757161458331 232.348L 177.93553873697914 232.348" cy="144.05576000000002" cx="256.40656738281245" j="2" val="38" barHeight="88.29224" barWidth="21.992032877604164"></path><path id="SvgjsPath1298" d="M 257.90656738281245 232.348L 257.90656738281245 70.05744000000001Q 257.90656738281245 65.05744000000001 262.90656738281245 65.05744000000001L 271.89860026041663 65.05744000000001Q 276.89860026041663 65.05744000000001 276.89860026041663 70.05744000000001L 276.89860026041663 70.05744000000001L 276.89860026041663 232.348L 276.89860026041663 232.348z" fill="#5a66f1" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="3" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskew62js0p)" pathTo="M 257.90656738281245 232.348L 257.90656738281245 70.05744000000001Q 257.90656738281245 65.05744000000001 262.90656738281245 65.05744000000001L 271.89860026041663 65.05744000000001Q 276.89860026041663 65.05744000000001 276.89860026041663 70.05744000000001L 276.89860026041663 70.05744000000001L 276.89860026041663 232.348L 276.89860026041663 232.348z" pathFrom="M 257.90656738281245 232.348L 257.90656738281245 232.348L 276.89860026041663 232.348L 276.89860026041663 232.348L 276.89860026041663 232.348L 276.89860026041663 232.348L 276.89860026041663 232.348L 257.90656738281245 232.348" cy="65.05744000000001" cx="336.37759602864577" j="3" val="72" barHeight="167.29056" barWidth="21.992032877604164"></path><path id="SvgjsPath1300" d="M 337.87759602864577 232.348L 337.87759602864577 109.55660000000002Q 337.87759602864577 104.55660000000002 342.87759602864577 104.55660000000002L 351.86962890624994 104.55660000000002Q 356.86962890624994 104.55660000000002 356.86962890624994 109.55660000000002L 356.86962890624994 109.55660000000002L 356.86962890624994 232.348L 356.86962890624994 232.348z" fill="#5a66f1" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="3" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskew62js0p)" pathTo="M 337.87759602864577 232.348L 337.87759602864577 109.55660000000002Q 337.87759602864577 104.55660000000002 342.87759602864577 104.55660000000002L 351.86962890624994 104.55660000000002Q 356.86962890624994 104.55660000000002 356.86962890624994 109.55660000000002L 356.86962890624994 109.55660000000002L 356.86962890624994 232.348L 356.86962890624994 232.348z" pathFrom="M 337.87759602864577 232.348L 337.87759602864577 232.348L 356.86962890624994 232.348L 356.86962890624994 232.348L 356.86962890624994 232.348L 356.86962890624994 232.348L 356.86962890624994 232.348L 337.87759602864577 232.348" cy="104.55660000000002" cx="416.3486246744791" j="4" val="55" barHeight="127.7914" barWidth="21.992032877604164"></path><path id="SvgjsPath1302" d="M 417.8486246744791 232.348L 417.8486246744791 90.96876Q 417.8486246744791 85.96876 422.8486246744791 85.96876L 431.84065755208326 85.96876Q 436.84065755208326 85.96876 436.84065755208326 90.96876L 436.84065755208326 90.96876L 436.84065755208326 232.348L 436.84065755208326 232.348z" fill="#5a66f1" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="3" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskew62js0p)" pathTo="M 417.8486246744791 232.348L 417.8486246744791 90.96876Q 417.8486246744791 85.96876 422.8486246744791 85.96876L 431.84065755208326 85.96876Q 436.84065755208326 85.96876 436.84065755208326 90.96876L 436.84065755208326 90.96876L 436.84065755208326 232.348L 436.84065755208326 232.348z" pathFrom="M 417.8486246744791 232.348L 417.8486246744791 232.348L 436.84065755208326 232.348L 436.84065755208326 232.348L 436.84065755208326 232.348L 436.84065755208326 232.348L 436.84065755208326 232.348L 417.8486246744791 232.348" cy="85.96876" cx="496.3196533203124" j="5" val="63" barHeight="146.37924" barWidth="21.992032877604164"></path><path id="SvgjsPath1304" d="M 497.8196533203124 232.348L 497.8196533203124 137.43836000000002Q 497.8196533203124 132.43836000000002 502.8196533203124 132.43836000000002L 511.8116861979165 132.43836000000002Q 516.8116861979165 132.43836000000002 516.8116861979165 137.43836000000002L 516.8116861979165 137.43836000000002L 516.8116861979165 232.348L 516.8116861979165 232.348z" fill="#5a66f1" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="3" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskew62js0p)" pathTo="M 497.8196533203124 232.348L 497.8196533203124 137.43836000000002Q 497.8196533203124 132.43836000000002 502.8196533203124 132.43836000000002L 511.8116861979165 132.43836000000002Q 516.8116861979165 132.43836000000002 516.8116861979165 137.43836000000002L 516.8116861979165 137.43836000000002L 516.8116861979165 232.348L 516.8116861979165 232.348z" pathFrom="M 497.8196533203124 232.348L 497.8196533203124 232.348L 516.8116861979165 232.348L 516.8116861979165 232.348L 516.8116861979165 232.348L 516.8116861979165 232.348L 516.8116861979165 232.348L 497.8196533203124 232.348" cy="132.43836000000002" cx="576.2906819661457" j="6" val="43" barHeight="99.90964" barWidth="21.992032877604164"></path><path id="SvgjsPath1306" d="M 577.7906819661457 232.348L 577.7906819661457 60.76352Q 577.7906819661457 55.76352 582.7906819661457 55.76352L 591.7827148437499 55.76352Q 596.7827148437499 55.76352 596.7827148437499 60.76352L 596.7827148437499 60.76352L 596.7827148437499 232.348L 596.7827148437499 232.348z" fill="#5a66f1" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="3" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskew62js0p)" pathTo="M 577.7906819661457 232.348L 577.7906819661457 60.76352Q 577.7906819661457 55.76352 582.7906819661457 55.76352L 591.7827148437499 55.76352Q 596.7827148437499 55.76352 596.7827148437499 60.76352L 596.7827148437499 60.76352L 596.7827148437499 232.348L 596.7827148437499 232.348z" pathFrom="M 577.7906819661457 232.348L 577.7906819661457 232.348L 596.7827148437499 232.348L 596.7827148437499 232.348L 596.7827148437499 232.348L 596.7827148437499 232.348L 596.7827148437499 232.348L 577.7906819661457 232.348" cy="55.76352" cx="656.2617106119791" j="7" val="76" barHeight="176.58448" barWidth="21.992032877604164"></path><path id="SvgjsPath1308" d="M 657.7617106119791 232.348L 657.7617106119791 109.55660000000002Q 657.7617106119791 104.55660000000002 662.7617106119791 104.55660000000002L 671.7537434895833 104.55660000000002Q 676.7537434895833 104.55660000000002 676.7537434895833 109.55660000000002L 676.7537434895833 109.55660000000002L 676.7537434895833 232.348L 676.7537434895833 232.348z" fill="#5a66f1" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="3" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskew62js0p)" pathTo="M 657.7617106119791 232.348L 657.7617106119791 109.55660000000002Q 657.7617106119791 104.55660000000002 662.7617106119791 104.55660000000002L 671.7537434895833 104.55660000000002Q 676.7537434895833 104.55660000000002 676.7537434895833 109.55660000000002L 676.7537434895833 109.55660000000002L 676.7537434895833 232.348L 676.7537434895833 232.348z" pathFrom="M 657.7617106119791 232.348L 657.7617106119791 232.348L 676.7537434895833 232.348L 676.7537434895833 232.348L 676.7537434895833 232.348L 676.7537434895833 232.348L 676.7537434895833 232.348L 657.7617106119791 232.348" cy="104.55660000000002" cx="736.2327392578125" j="8" val="55" barHeight="127.7914" barWidth="21.992032877604164"></path><path id="SvgjsPath1310" d="M 737.7327392578125 232.348L 737.7327392578125 51.469600000000014Q 737.7327392578125 46.469600000000014 742.7327392578125 46.469600000000014L 751.7247721354166 46.469600000000014Q 756.7247721354166 46.469600000000014 756.7247721354166 51.469600000000014L 756.7247721354166 51.469600000000014L 756.7247721354166 232.348L 756.7247721354166 232.348z" fill="#5a66f1" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="3" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskew62js0p)" pathTo="M 737.7327392578125 232.348L 737.7327392578125 51.469600000000014Q 737.7327392578125 46.469600000000014 742.7327392578125 46.469600000000014L 751.7247721354166 46.469600000000014Q 756.7247721354166 46.469600000000014 756.7247721354166 51.469600000000014L 756.7247721354166 51.469600000000014L 756.7247721354166 232.348L 756.7247721354166 232.348z" pathFrom="M 737.7327392578125 232.348L 737.7327392578125 232.348L 756.7247721354166 232.348L 756.7247721354166 232.348L 756.7247721354166 232.348L 756.7247721354166 232.348L 756.7247721354166 232.348L 737.7327392578125 232.348" cy="46.469600000000014" cx="816.2037679036458" j="9" val="80" barHeight="185.8784" barWidth="21.992032877604164"></path><path id="SvgjsPath1312" d="M 817.7037679036458 232.348L 817.7037679036458 144.4088Q 817.7037679036458 139.4088 822.7037679036458 139.4088L 831.69580078125 139.4088Q 836.69580078125 139.4088 836.69580078125 144.4088L 836.69580078125 144.4088L 836.69580078125 232.348L 836.69580078125 232.348z" fill="#5a66f1" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="3" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskew62js0p)" pathTo="M 817.7037679036458 232.348L 817.7037679036458 144.4088Q 817.7037679036458 139.4088 822.7037679036458 139.4088L 831.69580078125 139.4088Q 836.69580078125 139.4088 836.69580078125 144.4088L 836.69580078125 144.4088L 836.69580078125 232.348L 836.69580078125 232.348z" pathFrom="M 817.7037679036458 232.348L 817.7037679036458 232.348L 836.69580078125 232.348L 836.69580078125 232.348L 836.69580078125 232.348L 836.69580078125 232.348L 836.69580078125 232.348L 817.7037679036458 232.348" cy="139.4088" cx="896.1747965494792" j="10" val="40" barHeight="92.9392" barWidth="21.992032877604164"></path><path id="SvgjsPath1314" d="M 897.6747965494792 232.348L 897.6747965494792 51.469600000000014Q 897.6747965494792 46.469600000000014 902.6747965494792 46.469600000000014L 911.6668294270834 46.469600000000014Q 916.6668294270834 46.469600000000014 916.6668294270834 51.469600000000014L 916.6668294270834 51.469600000000014L 916.6668294270834 232.348L 916.6668294270834 232.348z" fill="#5a66f1" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="3" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskew62js0p)" pathTo="M 897.6747965494792 232.348L 897.6747965494792 51.469600000000014Q 897.6747965494792 46.469600000000014 902.6747965494792 46.469600000000014L 911.6668294270834 46.469600000000014Q 916.6668294270834 46.469600000000014 916.6668294270834 51.469600000000014L 916.6668294270834 51.469600000000014L 916.6668294270834 232.348L 916.6668294270834 232.348z" pathFrom="M 897.6747965494792 232.348L 897.6747965494792 232.348L 916.6668294270834 232.348L 916.6668294270834 232.348L 916.6668294270834 232.348L 916.6668294270834 232.348L 916.6668294270834 232.348L 897.6747965494792 232.348" cy="46.469600000000014" cx="976.1458251953126" j="11" val="80" barHeight="185.8784" barWidth="21.992032877604164"></path><g id="SvgjsG1290" class="apexcharts-bar-goals-markers" style="pointer-events: none"><g id="SvgjsG1291" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1293" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1295" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1297" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1299" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1301" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1303" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1305" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1307" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1309" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1311" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1313" className="apexcharts-bar-goals-groups"></g></g></g><g id="SvgjsG1315" class="apexcharts-series" rel="2" seriesName="Expenses" data:realIndex="1"><path id="SvgjsPath1319" d="M 39.985514322916664 232.348L 39.985514322916664 39.85220000000001Q 39.985514322916664 34.85220000000001 44.985514322916664 34.85220000000001L 53.97754720052083 34.85220000000001Q 58.97754720052083 34.85220000000001 58.97754720052083 39.85220000000001L 58.97754720052083 39.85220000000001L 58.97754720052083 232.348L 58.97754720052083 232.348z" fill="#cbd5e1" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="3" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskew62js0p)" pathTo="M 39.985514322916664 232.348L 39.985514322916664 39.85220000000001Q 39.985514322916664 34.85220000000001 44.985514322916664 34.85220000000001L 53.97754720052083 34.85220000000001Q 58.97754720052083 34.85220000000001 58.97754720052083 39.85220000000001L 58.97754720052083 39.85220000000001L 58.97754720052083 232.348L 58.97754720052083 232.348z" pathFrom="M 39.985514322916664 232.348L 39.985514322916664 232.348L 58.97754720052083 232.348L 58.97754720052083 232.348L 58.97754720052083 232.348L 58.97754720052083 232.348L 58.97754720052083 232.348L 39.985514322916664 232.348" cy="34.85220000000001" cx="118.45654296874999" j="0" val="85" barHeight="197.4958" barWidth="21.992032877604164"></path><path id="SvgjsPath1321" d="M 119.95654296874999 232.348L 119.95654296874999 86.3218Q 119.95654296874999 81.3218 124.95654296874999 81.3218L 133.94857584635415 81.3218Q 138.94857584635415 81.3218 138.94857584635415 86.3218L 138.94857584635415 86.3218L 138.94857584635415 232.348L 138.94857584635415 232.348z" fill="#cbd5e1" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="3" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskew62js0p)" pathTo="M 119.95654296874999 232.348L 119.95654296874999 86.3218Q 119.95654296874999 81.3218 124.95654296874999 81.3218L 133.94857584635415 81.3218Q 138.94857584635415 81.3218 138.94857584635415 86.3218L 138.94857584635415 86.3218L 138.94857584635415 232.348L 138.94857584635415 232.348z" pathFrom="M 119.95654296874999 232.348L 119.95654296874999 232.348L 138.94857584635415 232.348L 138.94857584635415 232.348L 138.94857584635415 232.348L 138.94857584635415 232.348L 138.94857584635415 232.348L 119.95654296874999 232.348" cy="81.3218" cx="198.42757161458331" j="1" val="65" barHeight="151.02620000000002" barWidth="21.992032877604164"></path><path id="SvgjsPath1323" d="M 199.92757161458331 232.348L 199.92757161458331 63.08700000000002Q 199.92757161458331 58.08700000000002 204.92757161458331 58.08700000000002L 213.9196044921875 58.08700000000002Q 218.9196044921875 58.08700000000002 218.9196044921875 63.08700000000002L 218.9196044921875 63.08700000000002L 218.9196044921875 232.348L 218.9196044921875 232.348z" fill="#cbd5e1" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="3" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskew62js0p)" pathTo="M 199.92757161458331 232.348L 199.92757161458331 63.08700000000002Q 199.92757161458331 58.08700000000002 204.92757161458331 58.08700000000002L 213.9196044921875 58.08700000000002Q 218.9196044921875 58.08700000000002 218.9196044921875 63.08700000000002L 218.9196044921875 63.08700000000002L 218.9196044921875 232.348L 218.9196044921875 232.348z" pathFrom="M 199.92757161458331 232.348L 199.92757161458331 232.348L 218.9196044921875 232.348L 218.9196044921875 232.348L 218.9196044921875 232.348L 218.9196044921875 232.348L 218.9196044921875 232.348L 199.92757161458331 232.348" cy="58.08700000000002" cx="278.39860026041663" j="2" val="75" barHeight="174.261" barWidth="21.992032877604164"></path><path id="SvgjsPath1325" d="M 279.89860026041663 232.348L 279.89860026041663 149.05576000000002Q 279.89860026041663 144.05576000000002 284.89860026041663 144.05576000000002L 293.8906331380208 144.05576000000002Q 298.8906331380208 144.05576000000002 298.8906331380208 149.05576000000002L 298.8906331380208 149.05576000000002L 298.8906331380208 232.348L 298.8906331380208 232.348z" fill="#cbd5e1" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="3" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskew62js0p)" pathTo="M 279.89860026041663 232.348L 279.89860026041663 149.05576000000002Q 279.89860026041663 144.05576000000002 284.89860026041663 144.05576000000002L 293.8906331380208 144.05576000000002Q 298.8906331380208 144.05576000000002 298.8906331380208 149.05576000000002L 298.8906331380208 149.05576000000002L 298.8906331380208 232.348L 298.8906331380208 232.348z" pathFrom="M 279.89860026041663 232.348L 279.89860026041663 232.348L 298.8906331380208 232.348L 298.8906331380208 232.348L 298.8906331380208 232.348L 298.8906331380208 232.348L 298.8906331380208 232.348L 279.89860026041663 232.348" cy="144.05576000000002" cx="358.36962890624994" j="3" val="38" barHeight="88.29224" barWidth="21.992032877604164"></path><path id="SvgjsPath1327" d="M 359.86962890624994 232.348L 359.86962890624994 39.85220000000001Q 359.86962890624994 34.85220000000001 364.86962890624994 34.85220000000001L 373.8616617838541 34.85220000000001Q 378.8616617838541 34.85220000000001 378.8616617838541 39.85220000000001L 378.8616617838541 39.85220000000001L 378.8616617838541 232.348L 378.8616617838541 232.348z" fill="#cbd5e1" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="3" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskew62js0p)" pathTo="M 359.86962890624994 232.348L 359.86962890624994 39.85220000000001Q 359.86962890624994 34.85220000000001 364.86962890624994 34.85220000000001L 373.8616617838541 34.85220000000001Q 378.8616617838541 34.85220000000001 378.8616617838541 39.85220000000001L 378.8616617838541 39.85220000000001L 378.8616617838541 232.348L 378.8616617838541 232.348z" pathFrom="M 359.86962890624994 232.348L 359.86962890624994 232.348L 378.8616617838541 232.348L 378.8616617838541 232.348L 378.8616617838541 232.348L 378.8616617838541 232.348L 378.8616617838541 232.348L 359.86962890624994 232.348" cy="34.85220000000001" cx="438.34065755208326" j="4" val="85" barHeight="197.4958" barWidth="21.992032877604164"></path><path id="SvgjsPath1329" d="M 439.84065755208326 232.348L 439.84065755208326 156.02620000000002Q 439.84065755208326 151.02620000000002 444.84065755208326 151.02620000000002L 453.83269042968743 151.02620000000002Q 458.83269042968743 151.02620000000002 458.83269042968743 156.02620000000002L 458.83269042968743 156.02620000000002L 458.83269042968743 232.348L 458.83269042968743 232.348z" fill="#cbd5e1" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="3" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskew62js0p)" pathTo="M 439.84065755208326 232.348L 439.84065755208326 156.02620000000002Q 439.84065755208326 151.02620000000002 444.84065755208326 151.02620000000002L 453.83269042968743 151.02620000000002Q 458.83269042968743 151.02620000000002 458.83269042968743 156.02620000000002L 458.83269042968743 156.02620000000002L 458.83269042968743 232.348L 458.83269042968743 232.348z" pathFrom="M 439.84065755208326 232.348L 439.84065755208326 232.348L 458.83269042968743 232.348L 458.83269042968743 232.348L 458.83269042968743 232.348L 458.83269042968743 232.348L 458.83269042968743 232.348L 439.84065755208326 232.348" cy="151.02620000000002" cx="518.3116861979165" j="5" val="35" barHeight="81.3218" barWidth="21.992032877604164"></path><path id="SvgjsPath1331" d="M 519.8116861979165 232.348L 519.8116861979165 93.29224000000002Q 519.8116861979165 88.29224000000002 524.8116861979165 88.29224000000002L 533.8037190755207 88.29224000000002Q 538.8037190755207 88.29224000000002 538.8037190755207 93.29224000000002L 538.8037190755207 93.29224000000002L 538.8037190755207 232.348L 538.8037190755207 232.348z" fill="#cbd5e1" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="3" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskew62js0p)" pathTo="M 519.8116861979165 232.348L 519.8116861979165 93.29224000000002Q 519.8116861979165 88.29224000000002 524.8116861979165 88.29224000000002L 533.8037190755207 88.29224000000002Q 538.8037190755207 88.29224000000002 538.8037190755207 93.29224000000002L 538.8037190755207 93.29224000000002L 538.8037190755207 232.348L 538.8037190755207 232.348z" pathFrom="M 519.8116861979165 232.348L 519.8116861979165 232.348L 538.8037190755207 232.348L 538.8037190755207 232.348L 538.8037190755207 232.348L 538.8037190755207 232.348L 538.8037190755207 232.348L 519.8116861979165 232.348" cy="88.29224000000002" cx="598.2827148437499" j="6" val="62" barHeight="144.05576" barWidth="21.992032877604164"></path><path id="SvgjsPath1333" d="M 599.7827148437499 232.348L 599.7827148437499 144.4088Q 599.7827148437499 139.4088 604.7827148437499 139.4088L 613.7747477213541 139.4088Q 618.7747477213541 139.4088 618.7747477213541 144.4088L 618.7747477213541 144.4088L 618.7747477213541 232.348L 618.7747477213541 232.348z" fill="#cbd5e1" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="3" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskew62js0p)" pathTo="M 599.7827148437499 232.348L 599.7827148437499 144.4088Q 599.7827148437499 139.4088 604.7827148437499 139.4088L 613.7747477213541 139.4088Q 618.7747477213541 139.4088 618.7747477213541 144.4088L 618.7747477213541 144.4088L 618.7747477213541 232.348L 618.7747477213541 232.348z" pathFrom="M 599.7827148437499 232.348L 599.7827148437499 232.348L 618.7747477213541 232.348L 618.7747477213541 232.348L 618.7747477213541 232.348L 618.7747477213541 232.348L 618.7747477213541 232.348L 599.7827148437499 232.348" cy="139.4088" cx="678.2537434895833" j="7" val="40" barHeight="92.9392" barWidth="21.992032877604164"></path><path id="SvgjsPath1335" d="M 679.7537434895833 232.348L 679.7537434895833 144.4088Q 679.7537434895833 139.4088 684.7537434895833 139.4088L 693.7457763671874 139.4088Q 698.7457763671874 139.4088 698.7457763671874 144.4088L 698.7457763671874 144.4088L 698.7457763671874 232.348L 698.7457763671874 232.348z" fill="#cbd5e1" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="3" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskew62js0p)" pathTo="M 679.7537434895833 232.348L 679.7537434895833 144.4088Q 679.7537434895833 139.4088 684.7537434895833 139.4088L 693.7457763671874 139.4088Q 698.7457763671874 139.4088 698.7457763671874 144.4088L 698.7457763671874 144.4088L 698.7457763671874 232.348L 698.7457763671874 232.348z" pathFrom="M 679.7537434895833 232.348L 679.7537434895833 232.348L 698.7457763671874 232.348L 698.7457763671874 232.348L 698.7457763671874 232.348L 698.7457763671874 232.348L 698.7457763671874 232.348L 679.7537434895833 232.348" cy="139.4088" cx="758.2247721354166" j="8" val="40" barHeight="92.9392" barWidth="21.992032877604164"></path><path id="SvgjsPath1337" d="M 759.7247721354166 232.348L 759.7247721354166 88.64528000000001Q 759.7247721354166 83.64528000000001 764.7247721354166 83.64528000000001L 773.7168050130208 83.64528000000001Q 778.7168050130208 83.64528000000001 778.7168050130208 88.64528000000001L 778.7168050130208 88.64528000000001L 778.7168050130208 232.348L 778.7168050130208 232.348z" fill="#cbd5e1" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="3" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskew62js0p)" pathTo="M 759.7247721354166 232.348L 759.7247721354166 88.64528000000001Q 759.7247721354166 83.64528000000001 764.7247721354166 83.64528000000001L 773.7168050130208 83.64528000000001Q 778.7168050130208 83.64528000000001 778.7168050130208 88.64528000000001L 778.7168050130208 88.64528000000001L 778.7168050130208 232.348L 778.7168050130208 232.348z" pathFrom="M 759.7247721354166 232.348L 759.7247721354166 232.348L 778.7168050130208 232.348L 778.7168050130208 232.348L 778.7168050130208 232.348L 778.7168050130208 232.348L 778.7168050130208 232.348L 759.7247721354166 232.348" cy="83.64528000000001" cx="838.19580078125" j="9" val="64" barHeight="148.70272" barWidth="21.992032877604164"></path><path id="SvgjsPath1339" d="M 839.69580078125 232.348L 839.69580078125 121.174Q 839.69580078125 116.174 844.69580078125 116.174L 853.6878336588542 116.174Q 858.6878336588542 116.174 858.6878336588542 121.174L 858.6878336588542 121.174L 858.6878336588542 232.348L 858.6878336588542 232.348z" fill="#cbd5e1" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="3" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskew62js0p)" pathTo="M 839.69580078125 232.348L 839.69580078125 121.174Q 839.69580078125 116.174 844.69580078125 116.174L 853.6878336588542 116.174Q 858.6878336588542 116.174 858.6878336588542 121.174L 858.6878336588542 121.174L 858.6878336588542 232.348L 858.6878336588542 232.348z" pathFrom="M 839.69580078125 232.348L 839.69580078125 232.348L 858.6878336588542 232.348L 858.6878336588542 232.348L 858.6878336588542 232.348L 858.6878336588542 232.348L 858.6878336588542 232.348L 839.69580078125 232.348" cy="116.174" cx="918.1668294270834" j="10" val="50" barHeight="116.174" barWidth="21.992032877604164"></path><path id="SvgjsPath1341" d="M 919.6668294270834 232.348L 919.6668294270834 30.558279999999996Q 919.6668294270834 25.558279999999996 924.6668294270834 25.558279999999996L 933.6588623046875 25.558279999999996Q 938.6588623046875 25.558279999999996 938.6588623046875 30.558279999999996L 938.6588623046875 30.558279999999996L 938.6588623046875 232.348L 938.6588623046875 232.348z" fill="#cbd5e1" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="3" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskew62js0p)" pathTo="M 919.6668294270834 232.348L 919.6668294270834 30.558279999999996Q 919.6668294270834 25.558279999999996 924.6668294270834 25.558279999999996L 933.6588623046875 25.558279999999996Q 938.6588623046875 25.558279999999996 938.6588623046875 30.558279999999996L 938.6588623046875 30.558279999999996L 938.6588623046875 232.348L 938.6588623046875 232.348z" pathFrom="M 919.6668294270834 232.348L 919.6668294270834 232.348L 938.6588623046875 232.348L 938.6588623046875 232.348L 938.6588623046875 232.348L 938.6588623046875 232.348L 938.6588623046875 232.348L 919.6668294270834 232.348" cy="25.558279999999996" cx="998.1378580729167" j="11" val="89" barHeight="206.78972000000002" barWidth="21.992032877604164"></path><g id="SvgjsG1317" class="apexcharts-bar-goals-markers" style="pointer-events: none"><g id="SvgjsG1318" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1320" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1322" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1324" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1326" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1328" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1330" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1332" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1334" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1336" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1338" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1340" className="apexcharts-bar-goals-groups"></g></g></g><g id="SvgjsG1289" class="apexcharts-datalabels" data:realIndex="0"></g><g id="SvgjsG1316" class="apexcharts-datalabels" data:realIndex="1"></g></g><line id="SvgjsLine1425" x1="0" y1="0" x2="959.65234375" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1426" x1="0" y1="0" x2="959.65234375" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1427" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1428" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1429" class="apexcharts-point-annotations"></g></g><g id="SvgjsG1381" class="apexcharts-yaxis" rel="0" transform="translate(17.34765625, 0)"><g id="SvgjsG1382" class="apexcharts-yaxis-texts-g"><text id="SvgjsText1384" font-family="Helvetica, Arial, sans-serif" x="20" y="31.5" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#6b7280" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1385">100</tspan><title>100</title></text><text id="SvgjsText1387" font-family="Helvetica, Arial, sans-serif" x="20" y="77.9696" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#6b7280" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1388">80</tspan><title>80</title></text><text id="SvgjsText1390" font-family="Helvetica, Arial, sans-serif" x="20" y="124.4392" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#6b7280" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1391">60</tspan><title>60</title></text><text id="SvgjsText1393" font-family="Helvetica, Arial, sans-serif" x="20" y="170.90879999999999" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#6b7280" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1394">40</tspan><title>40</title></text><text id="SvgjsText1396" font-family="Helvetica, Arial, sans-serif" x="20" y="217.3784" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#6b7280" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1397">20</tspan><title>20</title></text><text id="SvgjsText1399" font-family="Helvetica, Arial, sans-serif" x="20" y="263.848" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#6b7280" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1400">0</tspan><title>0</title></text></g></g><g id="SvgjsG1277" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend" style="max-height: 150px;"></div><div class="apexcharts-tooltip apexcharts-theme-light"><div class="apexcharts-tooltip-title" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div><div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(90, 102, 241);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group" style="order: 2;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(203, 213, 225);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div>
              </div>
            </div>
          </div>
          <div class="col-span-12 lg:col-span-6 xxl:col-span-3">
            <div class="box">
              <div class="box-header">
                <div class="flex">
                  <h5 class="box-title my-auto">Top Dispatchers (Performers)</h5>
                  <div class="hs-dropdown ti-dropdown block ltr:ml-auto rtl:mr-auto my-auto">
                    <button type="button" aria-label="button" class="hs-dropdown-toggle ti-dropdown-toggle rounded-sm p-2 bg-white !border border-gray-200 text-gray-500 hover:bg-gray-100  focus:ring-gray-200 dark:bg-black/20 dark:hover:bg-black/30 dark:border-white/10 dark:hover:border-white/20 dark:focus:ring-white/10 dark:focus:ring-offset-white/10">
                      <i class="text-sm leading-none ti ti-dots-vertical"></i> </button>
                    <div class="hs-dropdown-menu ti-dropdown-menu">
                      <a class="ti-dropdown-item" href="javascript:void(0)">Download PDF</a>
                      <a class="ti-dropdown-item" href="javascript:void(0)">Export CSV</a>
                      <a class="ti-dropdown-item" href="javascript:void(0)">View All Dispatchers</a>
                      <a class="ti-dropdown-item" href="javascript:void(0)">Add New Dispatcher</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="box-body">
                <ul class="flex flex-col">
                  <li class="px-0 pt-0 ti-list-group border-0 text-gray-800 dark:text-white">
                    <a href="javascript:void(0);" class="flex  justify-between items-center w-full">
                      <div class="flex space-x-3 rtl:space-x-reverse w-full">
                        <img class="avatar avatar-sm rounded-sm" src="../assets/img/users/2.jpg" alt="Image Description">
                        <div class="flex w-full">
                          <div class="block my-auto">
                            <p class="block text-sm font-semibold text-gray-800 hover:text-gray-900 my-auto  dark:text-white dark:hover:text-gray-200">
                              Socrates Itumay</p>
                            <p class="text-xs text-gray-400 dark:text-white/80 truncate sm:max-w-max max-w-[100px] font-normal">
                              Loads Booked: 15</p>
                          </div>
                        </div>
                      </div>
                      <div class=""><span class="text-sm font-medium">$1,835</span></div>
                    </a>
                  </li>
                  <li class="px-0 pt-3 ti-list-group border-0 text-gray-800 dark:text-white">
                    <a href="javascript:void(0);" class="flex  justify-between items-center w-full">
                      <div class="flex space-x-3 rtl:space-x-reverse w-full">
                        <img class="avatar avatar-sm rounded-sm" src="../assets/img/users/3.jpg" alt="Image Description">
                        <div class="flex w-full">
                          <div class="block my-auto">
                            <p class="block text-sm font-semibold text-gray-800 hover:text-gray-900 my-auto  dark:text-white dark:hover:text-gray-200">
                              Json Taylor</p>
                            <p class="text-xs text-gray-400 dark:text-white/80 truncate sm:max-w-max max-w-[100px] font-normal">
                              Loads Booked: 18</p>
                          </div>
                        </div>
                      </div>
                      <div class=""><span class="text-sm font-medium">$2,415</span></div>
                    </a>
                  </li>
                  <li class="px-0 pt-3 ti-list-group border-0 text-gray-800 dark:text-white">
                    <a href="javascript:void(0);" class="flex  justify-between items-center w-full">
                      <div class="flex space-x-3 rtl:space-x-reverse w-full">
                        <img class="avatar avatar-sm rounded-sm" src="../assets/img/users/4.jpg" alt="Image Description">
                        <div class="flex w-full">
                          <div class="block my-auto">
                            <p class="block text-sm font-semibold text-gray-800 hover:text-gray-900 my-auto  dark:text-white dark:hover:text-gray-200">
                              Suzika Stallone</p>
                            <p class="text-xs text-gray-400 dark:text-white/80 truncate sm:max-w-max max-w-[100px] font-normal">
                              Loads Booked: 21</p>
                          </div>
                        </div>
                      </div>
                      <div class=""><span class="text-sm font-medium">$2,341</span></div>
                    </a>
                  </li>
                  <li class="px-0 pt-3 ti-list-group border-0 text-gray-800 dark:text-white">
                    <a href="javascript:void(0);" class="flex  justify-between items-center w-full">
                      <div class="flex space-x-3 rtl:space-x-reverse w-full">
                        <img class="avatar avatar-sm rounded-sm" src="../assets/img/users/5.jpg" alt="Image Description">
                        <div class="flex w-full">
                          <div class="block my-auto">
                            <p class="block text-sm font-semibold text-gray-800 hover:text-gray-900 my-auto  dark:text-white dark:hover:text-gray-200">
                              Angelina Hose</p>
                            <p class="text-xs text-gray-400 dark:text-white/80 truncate sm:max-w-max max-w-[100px] font-normal">
                              Loads Booked: 24</p>
                          </div>
                        </div>
                      </div>
                      <div class=""><span class="text-sm font-medium">2,624</span></div>
                    </a>
                  </li>
                  <li class="px-0 pt-3 ti-list-group border-0 text-gray-800 dark:text-white">
                    <a href="javascript:void(0);" class="flex  justify-between items-center w-full">
                      <div class="flex space-x-3 rtl:space-x-reverse w-full">
                        <img class="avatar avatar-sm rounded-sm" src="../assets/img/users/6.jpg" alt="Image Description">
                        <div class="flex w-full">
                          <div class="block my-auto">
                            <p class="block text-sm font-semibold text-gray-800 hover:text-gray-900 my-auto  dark:text-white dark:hover:text-gray-200">
                              Selena Deoyl</p>
                            <p class="text-xs text-gray-400 dark:text-white/80 truncate sm:max-w-max max-w-[100px] font-normal">
                              Loads Booked: 12</p>
                          </div>
                        </div>
                      </div>
                      <div class=""><span class="text-sm font-medium">$1,035</span></div>
                    </a>
                  </li>
                  <li class="px-0 pt-3 pb-0 ti-list-group border-0 text-gray-800 dark:text-white">
                    <a href="javascript:void(0);" class="flex  justify-between items-center w-full">
                      <div class="flex space-x-3 rtl:space-x-reverse w-full">
                        <img class="avatar avatar-sm rounded-sm" src="../assets/img/users/10.jpg" alt="Image Description">
                        <div class="flex w-full">
                          <div class="block my-auto">
                            <p class="block text-sm font-semibold text-gray-800 hover:text-gray-900 my-auto  dark:text-white dark:hover:text-gray-200">
                              Charlie Davieson</p>
                            <p class="text-xs text-gray-400 dark:text-white/80 truncate sm:max-w-max max-w-[100px] font-normal">
                              Loads Booked: 15</p>
                          </div>
                        </div>
                      </div>
                      <div class=""><span class="text-sm font-medium">$1,835</span></div>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-span-12 lg:col-span-6 xxl:col-span-3">
            <div class="box">
              <div class="box-header">
                <div class="flex">
                  <h5 class="box-title my-auto">October Sales Revenue</h5>
                  <div class="hs-dropdown ti-dropdown block ltr:ml-auto rtl:mr-auto my-auto">
                    <button type="button" aria-label="button" class="hs-dropdown-toggle ti-dropdown-toggle rounded-sm p-2 bg-white !border border-gray-200 text-gray-500 hover:bg-gray-100  focus:ring-gray-200 dark:bg-black/20 dark:hover:bg-black/30 dark:border-white/10 dark:hover:border-white/20 dark:focus:ring-white/10 dark:focus:ring-offset-white/10">
                      <i class="text-sm leading-none ti ti-dots-vertical"></i> </button>
                    <div class="hs-dropdown-menu ti-dropdown-menu">
                      <a class="ti-dropdown-item" href="javascript:void(0)">Download PDF</a>
                      <a class="ti-dropdown-item" href="javascript:void(0)">Export CSV</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="box-body pb-0 px-0">
                <div class="sales-value relative border-b border-gray-200 dark:border-white/10 pb-6">
                  <canvas id="sales-donut" class="!h-[230px] !w-full mx-auto my-auto" width="1043" height="460" style="display: block; box-sizing: border-box; height: 230px; width: 521.5px;"></canvas>
                  <div class="chart-circle-value circle-style absolute border-2 border-dashed border-primary -top-5 inset-0 flex justify-center items-center w-[150px] h-[150px] leading-[70px] rounded-full text-5xl mx-auto my-auto">
                    <div class="text-xl font-bold">75%</div>
                  </div>
                </div>
                <div class="grid grid-cols-2">
                  <div class="p-5 ltr:border-r rtl:border-l border-gray-200 dark:border-white/10">
                    <div class="text-sm text-gray-500 dark:text-white/80 text-center font-medium">
                      # of Carriers
                    </div>
                    <div class="text-center">
                      <p class="text-gray-800 dark:text-white text-2xl font-medium">567</p>
                      <span class="text-success font-semibold"><i class="ri-arrow-up-s-fill align-middle"></i>0.23%</span>
                    </div>
                  </div>
                  <div class="p-5">
                    <div class="text-sm text-gray-500 dark:text-white/80 text-center font-medium">
                      Total Revenue
                    </div>
                    <div class="text-center">
                      <p class="text-gray-800 dark:text-white text-2xl font-medium">$11,197</p>
                      <span class="text-danger font-semibold">
                        <i class="ri-arrow-down-s-fill align-middle"></i>0.15%
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- End::row-1 -->

        <!-- Start::row-2 -->
        <div class="grid grid-cols-12 gap-x-5">
          <div class="col-span-12 lg:col-span-6 xxl:col-span-3">
            <div class="box">
              <div class="box-header">
                <div class="flex">
                  <h5 class="box-title my-auto">Driver's Leaderboard</h5>
                  <div class="hs-dropdown ti-dropdown block ltr:ml-auto rtl:mr-auto my-auto">
                    <button type="button" aria-label="button" class="hs-dropdown-toggle ti-dropdown-toggle rounded-sm p-2 bg-white !border border-gray-200 text-gray-500 hover:bg-gray-100  focus:ring-gray-200 dark:bg-black/20 dark:hover:bg-black/30 dark:border-white/10 dark:hover:border-white/20 dark:focus:ring-white/10 dark:focus:ring-offset-white/10">
                      <i class="text-sm leading-none ti ti-dots-vertical"></i> </button>
                    <div class="hs-dropdown-menu ti-dropdown-menu">
                      <a class="ti-dropdown-item" href="javascript:void(0)">Download PDF</a>
                      <a class="ti-dropdown-item" href="javascript:void(0)">Export CSV</a>
                      <a class="ti-dropdown-item" href="javascript:void(0)">View All Drivers</a>
                      <a class="ti-dropdown-item" href="javascript:void(0)">Add New Driver</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="box-body">
                <ul class="flex flex-col">
                  <li class="p-0 mb-6 ti-list-group border-0 text-gray-800 dark:text-white">
                    <a href="javascript:void(0);" class="w-full">
                      <div class="flex items-center">
                        <div class="leading-none">
                          <img class="avatar avatar-sm rounded-full" src="../assets/img/ecommerce/jpg/1.jpg" alt="image">
                        </div>
                        <div class="flex-auto ltr:ml-2 rtl:mr-2">
                          <p class="text-sm font-semibold mb-0">Driver Name 1</p>
                          <p class="text-xs text-gray-400 dark:text-white/80 mb-0 !font-normal">Status: Busy</p>
                        </div>
                        <div class="block text-end">
                          <span class="text-sm text-success font-semibold">$199.99</span>
                          <p class="text-xs text-gray-400 dark:text-white/80 !font-normal"><i class="ti ti-clock-hour-2 ltr:mr-1 rtl:mr-1"></i>01 Apr, 2023</p>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li class="p-0 mb-6 ti-list-group border-0 text-gray-800 dark:text-white">
                    <a href="javascript:void(0);" class="w-full">
                      <div class="flex items-center">
                        <div class="leading-none">
                          <img class="avatar avatar-sm rounded-full" src="../assets/img/ecommerce/jpg/2.jpg" alt="image">
                        </div>
                        <div class="flex-auto ltr:ml-2 rtl:mr-2">
                          <p class="text-sm font-semibold mb-0">Driver Name 2</p>
                          <p class="text-xs text-gray-400 dark:text-white/80 mb-0 !font-normal">Status: On-Route</p>
                        </div>
                        <div class="block text-end">
                          <span class="text-sm text-success font-semibold">$79.49</span>
                          <p class="text-xs text-gray-400 dark:text-white/80 !font-normal"><i class="ti ti-clock-hour-2 ltr:mr-1 rtl:mr-1"></i>01 Apr, 2023</p>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li class="p-0 mb-6 ti-list-group border-0 text-gray-800 dark:text-white">
                    <a href="javascript:void(0);" class="w-full">
                      <div class="flex items-center">
                        <div class="leading-none">
                          <img class="avatar avatar-sm rounded-full" src="../assets/img/ecommerce/jpg/3.jpg" alt="image">
                        </div>
                        <div class="flex-auto ltr:ml-2 rtl:mr-2">
                          <p class="text-sm font-semibold mb-0">Driver Name 3</p>
                          <p class="text-xs text-gray-400 dark:text-white/80 mb-0 !font-normal">Status: Vaccant</p>
                        </div>
                        <div class="block text-end">
                          <span class="text-sm text-success font-semibold">Assign Load</span>
                          <p class="text-xs text-gray-400 dark:text-white/80 !font-normal"><i class="ti ti-clock-hour-2 ltr:mr-1 rtl:mr-1"></i>01 Apr, 2023</p>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li class="p-0 mb-6 ti-list-group border-0 text-gray-800 dark:text-white">
                    <a href="javascript:void(0);" class="w-full">
                      <div class="flex items-center">
                        <div class="leading-none">
                          <img class="avatar avatar-sm rounded-full" src="../assets/img/ecommerce/jpg/4.jpg" alt="image">
                        </div>
                        <div class="flex-auto ltr:ml-2 rtl:mr-2">
                          <p class="text-sm font-semibold mb-0">Driver Name 4</p>
                          <p class="text-xs text-gray-400 dark:text-white/80 mb-0 !font-normal">Status: Busy</p>
                        </div>
                        <div class="block text-end">
                          <span class="text-sm text-success font-semibold">$1,699.00</span>
                          <p class="text-xs text-gray-400 dark:text-white/80 !font-normal"><i class="ti ti-clock-hour-2 ltr:mr-1 rtl:mr-1"></i>01 Apr, 2023</p>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li class="p-0 mb-6 ti-list-group border-0 text-gray-800 dark:text-white">
                    <a href="javascript:void(0);" class="w-full">
                      <div class="flex items-center">
                        <div class="leading-none">
                          <img class="avatar avatar-sm rounded-full" src="../assets/img/ecommerce/jpg/6.jpg" alt="image">
                        </div>
                        <div class="flex-auto ltr:ml-2 rtl:mr-2">
                          <p class="text-sm font-semibold mb-0">Driver Name 5</p>
                          <p class="text-xs text-gray-400 dark:text-white/80 mb-0 !font-normal">Status: Vaccant</p>
                        </div>
                        <div class="block text-end">
                          <span class="text-sm text-success font-semibold">Assign Load</span>
                          <p class="text-xs text-gray-400 dark:text-white/80 !font-normal"><i class="ti ti-clock-hour-2 ltr:mr-1 rtl:mr-1"></i>01 Apr, 2023</p>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li class="p-0 mb-0 ti-list-group border-0 text-gray-800 dark:text-white">
                    <a href="javascript:void(0);" class="w-full">
                      <div class="flex items-center">
                        <div class="leading-none">
                          <img class="avatar avatar-sm rounded-full" src="../assets/img/ecommerce/jpg/5.jpg" alt="image">
                        </div>
                        <div class="flex-auto ltr:ml-2 rtl:mr-2">
                          <p class="text-sm font-semibold mb-0">Driver Name 6</p>
                          <p class="text-xs text-gray-400 dark:text-white/80 mb-0 !font-normal">Status: Busy</p>
                        </div>
                        <div class="block text-end">
                          <span class="text-sm text-success font-semibold">$29.99</span>
                          <p class="text-xs text-gray-400 dark:text-white/80 !font-normal"><i class="ti ti-clock-hour-2 ltr:mr-1 rtl:mr-1"></i>01 Apr, 2023</p>
                        </div>
                      </div>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-span-12 lg:col-span-6 xxl:col-span-4">
            <div class="box">
              <div class="box-header">
                <div class="flex">
                  <h5 class="box-title my-auto">Loads Against Carriers</h5>
                  <div class="hs-dropdown ti-dropdown block ltr:ml-auto rtl:mr-auto my-auto">
                    <button type="button" class="hs-dropdown-toggle ti-dropdown-toggle rounded-sm p-1 px-3 !border border-gray-200 text-gray-400 hover:text-gray-500 hover:bg-gray-200 hover:border-gray-200 focus:ring-gray-200  dark:hover:bg-black/30 dark:border-white/10 dark:hover:border-white/20 dark:focus:ring-white/10 dark:focus:ring-offset-white/10">
                      This Week <i class="ti ti-chevron-down"></i></button>
                    <div class="hs-dropdown-menu ti-dropdown-menu">
                      <a class="ti-dropdown-item" href="javascript:void(0)">This Week</a>
                      <a class="ti-dropdown-item" href="javascript:void(0)">This Month</a>
                      <a class="ti-dropdown-item" href="javascript:void(0)">This Year</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="box-body p-2">
                <div id="visitors" style="min-height: 385px;"><div id="apexchartscxoh7sl8" class="apexcharts-canvas apexchartscxoh7sl8 apexcharts-theme-light" style="width: 506px; height: 370px;"><svg id="SvgjsSvg1430" width="506" height="370" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1432" class="apexcharts-inner apexcharts-graphical" transform="translate(80.67578125, 30)"><defs id="SvgjsDefs1431"><linearGradient id="SvgjsLinearGradient1436" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop1437" stop-opacity="0.4" stop-color="rgba(216,227,240,0.4)" offset="0"></stop><stop id="SvgjsStop1438" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop><stop id="SvgjsStop1439" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop></linearGradient><clipPath id="gridRectMaskcxoh7sl8"><rect id="SvgjsRect1441" width="404.8134765625" height="302.348" x="-2" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMaskcxoh7sl8"></clipPath><clipPath id="nonForecastMaskcxoh7sl8"></clipPath><clipPath id="gridRectMarkerMaskcxoh7sl8"><rect id="SvgjsRect1442" width="404.8134765625" height="306.348" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><linearGradient id="SvgjsLinearGradient1448" x1="0" y1="1" x2="1" y2="1"><stop id="SvgjsStop1449" stop-opacity="1" stop-color="#60a5fa" offset="0"></stop><stop id="SvgjsStop1450" stop-opacity="1" stop-color="#5a66f1" offset="1"></stop></linearGradient><linearGradient id="SvgjsLinearGradient1453" x1="0" y1="1" x2="1" y2="1"><stop id="SvgjsStop1454" stop-opacity="1" stop-color="#60a5fa" offset="0"></stop><stop id="SvgjsStop1455" stop-opacity="1" stop-color="#5a66f1" offset="1"></stop></linearGradient><linearGradient id="SvgjsLinearGradient1458" x1="0" y1="1" x2="1" y2="1"><stop id="SvgjsStop1459" stop-opacity="1" stop-color="#60a5fa" offset="0"></stop><stop id="SvgjsStop1460" stop-opacity="1" stop-color="#5a66f1" offset="1"></stop></linearGradient><linearGradient id="SvgjsLinearGradient1463" x1="0" y1="1" x2="1" y2="1"><stop id="SvgjsStop1464" stop-opacity="1" stop-color="#60a5fa" offset="0"></stop><stop id="SvgjsStop1465" stop-opacity="1" stop-color="#5a66f1" offset="1"></stop></linearGradient><linearGradient id="SvgjsLinearGradient1468" x1="0" y1="1" x2="1" y2="1"><stop id="SvgjsStop1469" stop-opacity="1" stop-color="#60a5fa" offset="0"></stop><stop id="SvgjsStop1470" stop-opacity="1" stop-color="#5a66f1" offset="1"></stop></linearGradient><linearGradient id="SvgjsLinearGradient1473" x1="0" y1="1" x2="1" y2="1"><stop id="SvgjsStop1474" stop-opacity="1" stop-color="#60a5fa" offset="0"></stop><stop id="SvgjsStop1475" stop-opacity="1" stop-color="#5a66f1" offset="1"></stop></linearGradient></defs><rect id="SvgjsRect1440" width="0" height="302.348" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke-dasharray="3" fill="url(#SvgjsLinearGradient1436)" class="apexcharts-xcrosshairs" y2="302.348" filter="none" fill-opacity="0.9"></rect><g id="SvgjsG1498" class="apexcharts-yaxis apexcharts-xaxis-inversed" rel="0"><g id="SvgjsG1499" class="apexcharts-yaxis-texts-g apexcharts-xaxis-inversed-texts-g" transform="translate(0, 0)"><text id="SvgjsText1501" font-family="Helvetica, Arial, sans-serif" x="-15" y="27.486181818181823" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="600" fill="#adb5be" class="apexcharts-text apexcharts-yaxis-label apexcharts-yaxis-label" style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1502">Carrier #1</tspan><title>Carrier #1</title></text><text id="SvgjsText1504" font-family="Helvetica, Arial, sans-serif" x="-15" y="77.87751515151515" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="600" fill="#adb5be" class="apexcharts-text apexcharts-yaxis-label apexcharts-yaxis-label" style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1505">Carrier #2</tspan><title>Carrier #2</title></text><text id="SvgjsText1507" font-family="Helvetica, Arial, sans-serif" x="-15" y="128.2688484848485" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="600" fill="#adb5be" class="apexcharts-text apexcharts-yaxis-label apexcharts-yaxis-label" style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1508">Carrier #3</tspan><title>Carrier #3</title></text><text id="SvgjsText1510" font-family="Helvetica, Arial, sans-serif" x="-15" y="178.66018181818183" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="600" fill="#adb5be" class="apexcharts-text apexcharts-yaxis-label apexcharts-yaxis-label" style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1511">Carrier #4</tspan><title>Carrier #4</title></text><text id="SvgjsText1513" font-family="Helvetica, Arial, sans-serif" x="-15" y="229.05151515151516" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="600" fill="#adb5be" class="apexcharts-text apexcharts-yaxis-label apexcharts-yaxis-label" style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1514">Carrier #5</tspan><title>Carrier #5</title></text><text id="SvgjsText1516" font-family="Helvetica, Arial, sans-serif" x="-15" y="279.44284848484847" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="600" fill="#adb5be" class="apexcharts-text apexcharts-yaxis-label apexcharts-yaxis-label" style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1517">Carrier #6</tspan><title>Carrier #6</title></text></g><line id="SvgjsLine1518" x1="0" y1="1" x2="0" y2="302.348" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG1477" class="apexcharts-xaxis apexcharts-yaxis-inversed"><g id="SvgjsG1478" class="apexcharts-xaxis-texts-g" transform="translate(0, -7.333333333333333)"><text id="SvgjsText1479" font-family="Helvetica, Arial, sans-serif" x="400.8134765625" y="332.348" text-anchor="middle" dominant-baseline="auto" font-size="11px" font-weight="600" fill="#adb5be" class="apexcharts-text apexcharts-xaxis-label apexcharts-xaxis-label" style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1481">1500</tspan><title>1500</title></text><text id="SvgjsText1482" font-family="Helvetica, Arial, sans-serif" x="320.55078125" y="332.348" text-anchor="middle" dominant-baseline="auto" font-size="11px" font-weight="600" fill="#adb5be" class="apexcharts-text apexcharts-xaxis-label apexcharts-xaxis-label" style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1484">1200</tspan><title>1200</title></text><text id="SvgjsText1485" font-family="Helvetica, Arial, sans-serif" x="240.2880859375" y="332.348" text-anchor="middle" dominant-baseline="auto" font-size="11px" font-weight="600" fill="#adb5be" class="apexcharts-text apexcharts-xaxis-label apexcharts-xaxis-label" style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1487">900</tspan><title>900</title></text><text id="SvgjsText1488" font-family="Helvetica, Arial, sans-serif" x="160.025390625" y="332.348" text-anchor="middle" dominant-baseline="auto" font-size="11px" font-weight="600" fill="#adb5be" class="apexcharts-text apexcharts-xaxis-label apexcharts-xaxis-label" style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1490">600</tspan><title>600</title></text><text id="SvgjsText1491" font-family="Helvetica, Arial, sans-serif" x="79.7626953125" y="332.348" text-anchor="middle" dominant-baseline="auto" font-size="11px" font-weight="600" fill="#adb5be" class="apexcharts-text apexcharts-xaxis-label apexcharts-xaxis-label" style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1493">300</tspan><title>300</title></text><text id="SvgjsText1494" font-family="Helvetica, Arial, sans-serif" x="-0.5" y="332.348" text-anchor="middle" dominant-baseline="auto" font-size="11px" font-weight="600" fill="#adb5be" class="apexcharts-text apexcharts-xaxis-label apexcharts-xaxis-label" style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1496">0</tspan><title>0</title></text></g><line id="SvgjsLine1497" x1="0" y1="302.348" x2="400.8134765625" y2="302.348" stroke="#e0e0e0" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"></line></g><g id="SvgjsG1519" class="apexcharts-grid"><g id="SvgjsG1520" class="apexcharts-gridlines-horizontal"><line id="SvgjsLine1528" x1="0" y1="0" x2="400.8134765625" y2="0" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1529" x1="0" y1="50.391333333333336" x2="400.8134765625" y2="50.391333333333336" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1530" x1="0" y1="100.78266666666667" x2="400.8134765625" y2="100.78266666666667" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1531" x1="0" y1="151.174" x2="400.8134765625" y2="151.174" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1532" x1="0" y1="201.56533333333334" x2="400.8134765625" y2="201.56533333333334" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1533" x1="0" y1="251.95666666666668" x2="400.8134765625" y2="251.95666666666668" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1534" x1="0" y1="302.348" x2="400.8134765625" y2="302.348" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG1521" class="apexcharts-gridlines-vertical"></g><line id="SvgjsLine1522" x1="0" y1="303.348" x2="0" y2="309.348" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1523" x1="80.4626953125" y1="303.348" x2="80.4626953125" y2="309.348" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1524" x1="160.92539062500003" y1="303.348" x2="160.92539062500003" y2="309.348" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1525" x1="241.38808593750005" y1="303.348" x2="241.38808593750005" y2="309.348" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1526" x1="321.85078125000007" y1="303.348" x2="321.85078125000007" y2="309.348" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1527" x1="402.31347656250006" y1="303.348" x2="402.31347656250006" y2="309.348" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1536" x1="0" y1="302.348" x2="400.8134765625" y2="302.348" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine1535" x1="0" y1="1" x2="0" y2="302.348" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG1443" class="apexcharts-bar-series apexcharts-plot-series"><g id="SvgjsG1444" class="apexcharts-series" rel="1" seriesName="series-1" data:realIndex="0"><path id="SvgjsPath1451" d="M 0.1 7.558700000000002L 102.98359375 7.558700000000002Q 106.98359375 7.558700000000002 106.98359375 11.558700000000002L 106.98359375 38.832633333333334Q 106.98359375 42.832633333333334 102.98359375 42.832633333333334L 102.98359375 42.832633333333334L 0.1 42.832633333333334L 0.1 42.832633333333334z" fill="url(#SvgjsLinearGradient1448)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskcxoh7sl8)" pathTo="M 0.1 7.558700000000002L 102.98359375 7.558700000000002Q 106.98359375 7.558700000000002 106.98359375 11.558700000000002L 106.98359375 38.832633333333334Q 106.98359375 42.832633333333334 102.98359375 42.832633333333334L 102.98359375 42.832633333333334L 0.1 42.832633333333334L 0.1 42.832633333333334z" pathFrom="M 0.1 7.558700000000002L 0.1 7.558700000000002L 0.1 42.832633333333334L 0.1 42.832633333333334L 0.1 42.832633333333334L 0.1 42.832633333333334L 0.1 42.832633333333334L 0.1 7.558700000000002" cy="57.95003333333334" cx="106.98359375" j="0" val="400" barHeight="35.27393333333333" barWidth="106.88359375"></path><path id="SvgjsPath1456" d="M 0.1 57.95003333333334L 121.68822265624999 57.95003333333334Q 125.68822265624999 57.95003333333334 125.68822265624999 61.95003333333334L 125.68822265624999 89.22396666666667Q 125.68822265624999 93.22396666666667 121.68822265624999 93.22396666666667L 121.68822265624999 93.22396666666667L 0.1 93.22396666666667L 0.1 93.22396666666667z" fill="url(#SvgjsLinearGradient1453)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskcxoh7sl8)" pathTo="M 0.1 57.95003333333334L 121.68822265624999 57.95003333333334Q 125.68822265624999 57.95003333333334 125.68822265624999 61.95003333333334L 125.68822265624999 89.22396666666667Q 125.68822265624999 93.22396666666667 121.68822265624999 93.22396666666667L 121.68822265624999 93.22396666666667L 0.1 93.22396666666667L 0.1 93.22396666666667z" pathFrom="M 0.1 57.95003333333334L 0.1 57.95003333333334L 0.1 93.22396666666667L 0.1 93.22396666666667L 0.1 93.22396666666667L 0.1 93.22396666666667L 0.1 93.22396666666667L 0.1 57.95003333333334" cy="108.34136666666667" cx="125.68822265624999" j="1" val="470" barHeight="35.27393333333333" barWidth="125.58822265625"></path><path id="SvgjsPath1461" d="M 0.1 108.34136666666667L 140.3928515625 108.34136666666667Q 144.3928515625 108.34136666666667 144.3928515625 112.34136666666667L 144.3928515625 139.6153Q 144.3928515625 143.6153 140.3928515625 143.6153L 140.3928515625 143.6153L 0.1 143.6153L 0.1 143.6153z" fill="url(#SvgjsLinearGradient1458)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskcxoh7sl8)" pathTo="M 0.1 108.34136666666667L 140.3928515625 108.34136666666667Q 144.3928515625 108.34136666666667 144.3928515625 112.34136666666667L 144.3928515625 139.6153Q 144.3928515625 143.6153 140.3928515625 143.6153L 140.3928515625 143.6153L 0.1 143.6153L 0.1 143.6153z" pathFrom="M 0.1 108.34136666666667L 0.1 108.34136666666667L 0.1 143.6153L 0.1 143.6153L 0.1 143.6153L 0.1 143.6153L 0.1 143.6153L 0.1 108.34136666666667" cy="158.73270000000002" cx="144.3928515625" j="2" val="540" barHeight="35.27393333333333" barWidth="144.2928515625"></path><path id="SvgjsPath1466" d="M 0.1 158.73270000000002L 180.47419921875 158.73270000000002Q 184.47419921875 158.73270000000002 184.47419921875 162.73270000000002L 184.47419921875 190.00663333333335Q 184.47419921875 194.00663333333335 180.47419921875 194.00663333333335L 180.47419921875 194.00663333333335L 0.1 194.00663333333335L 0.1 194.00663333333335z" fill="url(#SvgjsLinearGradient1463)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskcxoh7sl8)" pathTo="M 0.1 158.73270000000002L 180.47419921875 158.73270000000002Q 184.47419921875 158.73270000000002 184.47419921875 162.73270000000002L 184.47419921875 190.00663333333335Q 184.47419921875 194.00663333333335 180.47419921875 194.00663333333335L 180.47419921875 194.00663333333335L 0.1 194.00663333333335L 0.1 194.00663333333335z" pathFrom="M 0.1 158.73270000000002L 0.1 158.73270000000002L 0.1 194.00663333333335L 0.1 194.00663333333335L 0.1 194.00663333333335L 0.1 194.00663333333335L 0.1 194.00663333333335L 0.1 158.73270000000002" cy="209.12403333333336" cx="184.47419921875" j="3" val="690" barHeight="35.27393333333333" barWidth="184.37419921875"></path><path id="SvgjsPath1471" d="M 0.1 209.12403333333336L 290.02988281250003 209.12403333333336Q 294.02988281250003 209.12403333333336 294.02988281250003 213.12403333333336L 294.02988281250003 240.3979666666667Q 294.02988281250003 244.3979666666667 290.02988281250003 244.3979666666667L 290.02988281250003 244.3979666666667L 0.1 244.3979666666667L 0.1 244.3979666666667z" fill="url(#SvgjsLinearGradient1468)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskcxoh7sl8)" pathTo="M 0.1 209.12403333333336L 290.02988281250003 209.12403333333336Q 294.02988281250003 209.12403333333336 294.02988281250003 213.12403333333336L 294.02988281250003 240.3979666666667Q 294.02988281250003 244.3979666666667 290.02988281250003 244.3979666666667L 290.02988281250003 244.3979666666667L 0.1 244.3979666666667L 0.1 244.3979666666667z" pathFrom="M 0.1 209.12403333333336L 0.1 209.12403333333336L 0.1 244.3979666666667L 0.1 244.3979666666667L 0.1 244.3979666666667L 0.1 244.3979666666667L 0.1 244.3979666666667L 0.1 209.12403333333336" cy="259.5153666666667" cx="294.02988281250003" j="4" val="1100" barHeight="35.27393333333333" barWidth="293.9298828125"></path><path id="SvgjsPath1476" d="M 0.1 259.5153666666667L 364.8483984375 259.5153666666667Q 368.8483984375 259.5153666666667 368.8483984375 263.5153666666667L 368.8483984375 290.7893Q 368.8483984375 294.7893 364.8483984375 294.7893L 364.8483984375 294.7893L 0.1 294.7893L 0.1 294.7893z" fill="url(#SvgjsLinearGradient1473)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskcxoh7sl8)" pathTo="M 0.1 259.5153666666667L 364.8483984375 259.5153666666667Q 368.8483984375 259.5153666666667 368.8483984375 263.5153666666667L 368.8483984375 290.7893Q 368.8483984375 294.7893 364.8483984375 294.7893L 364.8483984375 294.7893L 0.1 294.7893L 0.1 294.7893z" pathFrom="M 0.1 259.5153666666667L 0.1 259.5153666666667L 0.1 294.7893L 0.1 294.7893L 0.1 294.7893L 0.1 294.7893L 0.1 294.7893L 0.1 259.5153666666667" cy="309.9067" cx="368.8483984375" j="5" val="1380" barHeight="35.27393333333333" barWidth="368.7483984375"></path><g id="SvgjsG1446" class="apexcharts-bar-goals-markers" style="pointer-events: none"><g id="SvgjsG1447" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1452" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1457" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1462" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1467" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1472" className="apexcharts-bar-goals-groups"></g></g></g><g id="SvgjsG1445" class="apexcharts-datalabels" data:realIndex="0"></g></g><line id="SvgjsLine1537" x1="0" y1="0" x2="400.8134765625" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1538" x1="0" y1="0" x2="400.8134765625" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1539" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1540" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1541" class="apexcharts-point-annotations"></g></g><g id="SvgjsG1433" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend" style="max-height: 185px;"></div><div class="apexcharts-tooltip apexcharts-theme-light"><div class="apexcharts-tooltip-title" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div><div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(94, 118, 166);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div>
              </div>
            </div>
          </div>
          <div class="col-span-12 lg:col-span-12 xxl:col-span-5">
            <div class="box">
              <div class="box-header flex">
                <h5 class="box-title my-auto">Recent Billed Invoices</h5>
                <div class="hs-dropdown ti-dropdown block ltr:ml-auto rtl:mr-auto my-auto">
                  <button type="button" aria-label="button" class="hs-dropdown-toggle ti-dropdown-toggle rounded-sm p-2 bg-white !border border-gray-200 text-gray-500 hover:bg-gray-100  focus:ring-gray-200 dark:bg-black/20 dark:hover:bg-black/30 dark:border-white/10 dark:hover:border-white/20 dark:focus:ring-white/10 dark:focus:ring-offset-white/10">
                    <i class="text-sm leading-none ti ti-dots-vertical"></i>
                  </button>
                  <div class="hs-dropdown-menu ti-dropdown-menu">
                    <a class="ti-dropdown-item" href="javascript:void(0)">Download PDF</a>
                    <a class="ti-dropdown-item" href="javascript:void(0)">Export CSV</a>
                    <a class="ti-dropdown-item" href="javascript:void(0)">View All Invoices</a>
                    <a class="ti-dropdown-item" href="javascript:void(0)">Add New Invoice</a>
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

        <!-- Start::row-3 -->
        <div class="grid grid-cols-12 gap-x-6">
          <div class="col-span-12">
            <div class="box">
              <div class="box-header">
                <div class="flex">
                  <h5 class="box-title my-auto">Recent Active Loads (October)</h5>
                  <div class="hs-dropdown ti-dropdown block ltr:ml-auto rtl:mr-auto my-auto">                    
                    <button type="button" class="hs-dropdown-toggle ti-dropdown-toggle rounded-sm p-1 px-3 !border border-gray-200 text-gray-400 hover:text-gray-500 hover:bg-gray-200 hover:border-gray-200 focus:ring-gray-200  dark:hover:bg-black/30 dark:border-white/10 dark:hover:border-white/20 dark:focus:ring-white/10 dark:focus:ring-offset-white/10">
                      Actions <i class="ti ti-chevron-down"></i></button>
                    <div class="hs-dropdown-menu ti-dropdown-menu">
                      <a class="ti-dropdown-item" href="javascript:void(0)">Download PDF</a>
                      <a class="ti-dropdown-item" href="javascript:void(0)">Export CSV</a>
                      <a class="ti-dropdown-item" href="javascript:void(0)">View All Loads</a>
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