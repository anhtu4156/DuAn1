<?php
include "leftbar.php";
include "topbar.php";
?>
        
            


        <div class="ltr:flex flex-1 rtl:flex-row-reverse">
            <div class="page-wrapper relative ltr:ml-auto rtl:mr-auto rtl:ml-0 w-[calc(100%-260px)] px-4 pt-[64px] duration-300">
                <div class="xl:w-full">        
                    <div class="flex flex-wrap">
                        <div class="flex items-center py-4 w-full">
                            <div class="w-full">                    
                                <div class="">
                                    <div class="flex flex-wrap justify-between">
                                        <div class="items-center ">
                                            <h1 class="font-medium text-3xl block dark:text-slate-100">Ecommerce</h1>
                                            <ol class="list-reset flex text-sm">
                                                <li><a href="#" class="text-gray-500 dark:text-slate-400">Robotech</a></li>
                                                <li><span class="text-gray-500 dark:text-slate-400 mx-2">/</span></li>
                                                <li class="text-gray-500 dark:text-slate-400">Dashboard</li>
                                                <li><span class="text-gray-500 dark:text-slate-400 mx-2">/</span></li>
                                                <li class="text-primary-500 hover:text-primary-600 dark:text-primary-400">Ecommerce</li>
                                            </ol>
                                        </div>
                                        <div class="flex items-center">
                                            <div class="today-date leading-5 mt-2 lg:mt-0 form-input w-auto rounded-md border inline-block border-primary-500/60 dark:border-primary-500/60 text-primary-500 bg-transparent px-3 py-1 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-primary-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700">
                                                <input type="text" class="dash_date border-0 focus:border-0 focus:outline-none" readonly  required="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--end container-->
            
                <div class="xl:w-full  min-h-[calc(100vh-138px)] relative pb-14"> 
                    <div class="grid grid-cols-12 sm:grid-cols-12 md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4">  
                        <div class="col-span-12 sm:col-span-6 md:col-span-6 lg:col-span-3 xl:col-span-3">
                            <div class="bg-white shadow-sm dark:shadow-slate-700/10 dark:bg-gray-900  rounded-md w-full relative mb-4">
                                <div class="flex-auto p-4">
                                    <div class="flex justify-between xl:gap-x-2 items-cente">
                                        <div class="self-center"> 
                                            <p class="text-gray-800 font-semibold dark:text-slate-400 text-lg uppercase">Total orders</p>                           
                                            <h3 class="my-4 font-semibold text-[30px] dark:text-slate-200">14253</h3>                                                
                                        </div>                                       
                                        <div class="self-center">                                                
                                            <i data-lucide="shopping-cart" class=" h-16 w-16 stroke-primary-500/30"></i>
                                        </div>                                            
                                    </div>
                                    <p class="truncate text-slate-400"><span class="text-green-500"><i class="mdi mdi-trending-up"></i>8.5%</span> New Sessions Today</p>
                                </div><!--end card-body-->  
                                <div class="flex-auto p-0 overflow-hidden"> 
                                    <div class="flex mb-0 h-full">
                                        <div class="w-full">                                                
                                            <div class="apexchart-wrapper">
                                                <div id="apex_column1" class="chart-gutters"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!--end card-body-->                             
                            </div> <!--end inner-grid--> 
                        </div><!--end col-->
                        <div class="col-span-12 sm:col-span-12 md:col-span-6 lg:col-span-3 xl:col-span-3">
                            <div class="bg-white shadow-sm dark:shadow-slate-700/10 dark:bg-gray-900  rounded-md w-full relative mb-4">
                                <div class="flex-auto p-4">
                                    <div class="flex justify-between xl:gap-x-2 items-cente">
                                        <div class="self-center"> 
                                            <p class="text-gray-800 font-semibold dark:text-slate-400 uppercase">New customers</p>                           
                                            <h3 class="my-4 font-semibold text-[30px] dark:text-slate-200">532</h3>                                              
                                        </div>                                       
                                        <div class="self-center">                                                
                                            <i data-lucide="users" class=" h-16 w-16 stroke-green/30"></i>
                                        </div>                                            
                                    </div>
                                    <p class="truncate text-slate-400"><span class="text-red-500"><i class="mdi mdi-trending-down"></i>0.6%</span> Bounce Rate Weekly</p>
                                </div><!--end card-body-->   
                                <div class="flex-auto p-0 overflow-hidden"> 
                                    <div class="flex mb-0 h-full">
                                        <div class="w-full">                                                
                                            <div class="apexchart-wrapper">
                                                <div id="dash_spark_1" class="chart-gutters"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!--end card-body-->                              
                            </div> <!--end inner-grid-->                                                                                                  
                        </div><!--end col-->
                        <div class="col-span-12 sm:col-span-12 md:col-span-6 lg:col-span-3 xl:col-span-3">
                            <div class="bg-white shadow-sm dark:shadow-slate-700/10 dark:bg-gray-900  rounded-md w-full relative mb-4">
                                <div class="flex-auto p-4">
                                    <div class="flex justify-between xl:gap-x-2 items-cente">
                                        <div class="self-center"> 
                                            <p class="text-gray-800 font-semibold dark:text-slate-400 uppercase">Top coupons</p>                           
                                            <h3 class="my-4 font-semibold text-[30px] dark:text-slate-200">78%</h3>                                                
                                        </div>                                       
                                        <div class="self-center">                                                
                                            <i data-lucide="gem" class=" h-16 w-16 stroke-yellow-500/30"></i>
                                        </div>                                            
                                    </div>
                                    <p class="truncate text-slate-400"><span class="text-green-500"><i class="mdi mdi-trending-up"></i>1.5%</span> Weekly Avg.Sessions</p>        
                                </div><!--end card-body-->  
                                <div class="flex-auto p-0 overflow-hidden"> 
                                    <div class="grid grid-cols-12">
                                        <div class="col-span-6">
                                            <div id="ana_device" class="apex-charts"></div>
                                        </div><!--end col-->
                                        <div class="col-span-6">
                                            <ol class="list-none list-inside">
                                                <li class="-mt-1 text-slate-700 dark:text-slate-400 text-sm"><i class="icofont-caret-right text-primary-500 text-lg"></i> Sent</li>
                                                <li class="-mt-1 text-slate-700 dark:text-slate-400 text-sm"><i class="icofont-caret-right text-green-500 text-lg"></i> Opened</li>
                                                <li class="-mt-1 text-slate-700 dark:text-slate-400 text-sm"><i class="icofont-caret-right text-red-500 text-lg"></i> Not Opened</li>
                                            </ol>
                                        </div><!--end col-->
                                    </div><!--end grid-->
                                </div><!--end card-body-->                                
                            </div> <!--end inner-grid--> 
                        </div>
                        <div class="col-span-12 sm:col-span-12 md:col-span-6 lg:col-span-3 xl:col-span-3">
                            <div class="bg-[#1b1b22] shadow-sm dark:shadow-slate-700/10 dark:bg-gray-900  rounded-md w-full relative mb-4">
                                <div class="flex-auto p-4">
                                    <div class="flex justify-between xl:gap-x-2 items-cente">
                                        <div class="self-center"> 
                                            <p class="text-gray-300 font-semibold dark:text-slate-400 uppercase">Total Revenue</p>                           
                                            <h3 class="my-4 font-semibold text-[30px] text-slate-200">$85000</h3>                                                
                                        </div>                                       
                                        <div class="self-center">                                                
                                            <i data-lucide="dollar-sign" class=" h-16 w-16 stroke-[#2ecee1]/30"></i>
                                        </div>                                            
                                    </div>
                                    <p class="truncate text-slate-400"><span class="text-green-500"><i class="mdi mdi-trending-up"></i>10.5%</span> Completions Weekly</p>
                                </div><!--end card-body-->
                                <div class="flex-auto p-4 pt-0 -mt-1">
                                    <div class="grid grid-cols-12 sm:grid-cols-12 md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4">
                                        
                                        <div class="col-span-12 sm:col-span-6 md:col-span-6 lg:col-span-6 xl:col-span-3">
                                            <img src="assets/images/widgets/wallet.png" alt="" class="w-full h-auto">                                    
                                        </div>
                                        <div class="col-span-12 sm:col-span-6 md:col-span-6 lg:col-span-6 xl:col-span-8 text-end self-center">
                                            <button class="px-4 py-1 font-medium text-white transition duration-200 ease-in-out delay-200 skew-y-6 bg-brand-600 border-b-4 border-brand-700 rounded shadow-lg shadow-brand-600/50 hover:skew-y-0 hover:border-brand-700">Withdrawal</button>
                                            <!-- <button class="px-2 py-1 bg-brand-500 border border-transparent collapse:bg-green-100 text-white text-sm rounded hover:bg-brand-600 hover:text-white">Withdrawal</button> -->
                                        </div>
                                    </div> 
                                </div><!--end card-body-->
                            </div> <!--end inner-grid-->                                     
                        </div><!--end col-->
                    </div> <!--end grid-->

                    