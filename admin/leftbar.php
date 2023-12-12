<!-- leftbar-tab-menu -->


<div class="min-h-full z-[99]  fixed inset-y-0 print:hidden bg-gradient-to-t from-[#6f3dc3] from-10% via-[#603dc3] via-40% to-[#5c3dc3] to-100% dark:bg-[#603dc3] main-sidebar duration-300 group-data-[sidebar=dark]:bg-[#603dc3] group-data-[sidebar=brand]:bg-brand group-[.dark]:group-data-[sidebar=brand]:bg-[#603dc3]">
    <div class=" text-center border-b bg-[#603dc3] border-r h-[64px] flex justify-center items-center brand-logo dark:bg-[#603dc3] dark:border-slate-700/40 group-data-[sidebar=dark]:bg-[#603dc3] group-data-[sidebar=dark]:border-slate-700/40 group-data-[sidebar=brand]:bg-brand group-[.dark]:group-data-[sidebar=brand]:bg-[#603dc3] group-data-[sidebar=brand]:border-slate-700/40">
        <a href="index.php" class="logo">
            <!-- <span>
                        <img src="assets/images/logo-sm.png" alt="logo-small" class="logo-sm h-8 align-middle inline-block">
                    </span>
                    <span>
                        <img src="assets/images/logo.png" alt="logo-large" class="logo-lg h-[28px] logo-light hidden dark:inline-block ms-1 group-data-[sidebar=dark]:inline-block group-data-[sidebar=brand]:inline-block">
                        <img src="assets/images/logo.png" alt="logo-large"
                            class="logo-lg h-[28px] logo-dark inline-block dark:hidden ms-1 group-data-[sidebar=dark]:hidden group-data-[sidebar=brand]:hidden">
                    </span> -->
            <img src="../assets/images/logo.png" alt="">
        </a>
    </div>
    <div class="border-r pb-14 h-[100vh] dark:bg-[#603dc3] dark:border-slate-700/40 group-data-[sidebar=dark]:border-slate-700/40 group-data-[sidebar=brand]:border-slate-700/40" data-simplebar>
        <div class="p-4 block">
            <ul class="navbar-nav">
                <li class="uppercase text-[11px]  text-primary-500 dark:text-primary-400 mt-0 leading-4 mb-2 group-data-[sidebar=dark]:text-primary-400 group-data-[sidebar=brand]:text-primary-300">
                    <span class="text-[9px] text-slate-600 dark:text-slate-500 group-data-[sidebar=dark]:text-slate-500 group-data-[sidebar=brand]:text-slate-400">Dashboards</span>
                </li>
                <li>
                    <div id="parent-accordion" data-fc-type="accordion">
                        <?php
                        if(isset($_SESSION['role']) && $_SESSION['role'] == 1){
                            echo '<!-- danh mục dv -->
                            <a href="#" class="nav-link hover:bg-transparent hover:text-black  rounded-md dark:hover:text-slate-200   flex items-center  decoration-0 px-3 py-3 cursor-pointer group-data-[sidebar=dark]:hover:text-slate-200 group-data-[sidebar=brand]:hover:text-slate-200 " data-fc-type="collapse" data-fc-parent="parent-accordion">
                                <span data-lucide="menu" class="w-5 h-5 text-center text-slate-800 dark:text-slate-400 me-2 group-data-[sidebar=dark]:text-slate-400 group-data-[sidebar=brand]:text-slate-400"></span>
                                <span>Danh mục dịch vụ</span>
                                <i class="icofont-thin-down ms-auto inline-block text-[14px] transform transition-transform duration-300 text-slate-800 dark:text-slate-400 group-data-[sidebar=dark]:text-slate-400 group-data-[sidebar=brand]:text-slate-400 fc-collapse-open:rotate-180 "></i>
                            </a>
    
                            <div id="Admin-flush" class="hidden  overflow-hidden">
                                <ul class="nav flex-col flex flex-wrap ps-0 mb-0 ms-2">
                                    <li class="nav-item relative block">
                                        <a href="index.php?act=danhmuc_dv" class="nav-link  hover:text-primary-500  rounded-md dark:hover:text-primary-500 relative   flex items-center decoration-0 px-3 py-3 group-data-[sidebar=brand]:hover:text-slate-200">
                                            <i class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                            Danh mục dịch vụ
                                        </a>
                                    </li>
    
                                </ul>
                            </div>
                            <!-- dv -->
                            <a href="#" class="nav-link hover:bg-transparent hover:text-black  rounded-md dark:hover:text-slate-200   flex items-center  decoration-0 px-3 py-3 cursor-pointer group-data-[sidebar=dark]:hover:text-slate-200 group-data-[sidebar=brand]:hover:text-slate-200 " data-fc-type="collapse" data-fc-parent="parent-accordion">
                                <span data-lucide="baggage-claim" class="w-5 h-5 text-center text-slate-800 dark:text-slate-400 me-2 group-data-[sidebar=dark]:text-slate-400 group-data-[sidebar=brand]:text-slate-400"></span>
                                <span>Dịch vụ</span>
                                <i class="icofont-thin-down ms-auto inline-block text-[14px] transform transition-transform duration-300 text-slate-800 dark:text-slate-400 group-data-[sidebar=dark]:text-slate-400 group-data-[sidebar=brand]:text-slate-400 fc-collapse-open:rotate-180 "></i>
                            </a>
    
                            <div class="hidden  overflow-hidden">
                                <ul class="nav flex-col flex flex-wrap ps-0 mb-0 ms-2" id="apps-accordion" data-fc-type="accordion">
                                    <li class="nav-item relative block">
                                        <a href="index.php?act=dich_vu" class="nav-link  hover:text-primary-500  rounded-md dark:hover:text-primary-500 relative   flex items-center decoration-0 px-3 py-3 group-data-[sidebar=brand]:hover:text-slate-200">
                                            <i class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                            Dịch vụ
                                        </a>
                                    </li>
                                    <li class="nav-item relative block">
                                        <a href="index.php?act=add_bien_the" class="nav-link  hover:text-primary-500  rounded-md dark:hover:text-primary-500 relative   flex items-center decoration-0 px-3 py-3 group-data-[sidebar=brand]:hover:text-slate-200">
                                            <i class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                            Thêm biến thể dv
                                        </a>
                                    </li>
    
                                </ul>
                            </div>
                            <!-- thống kê -->
                            <a href="#" class="nav-link hover:bg-transparent hover:text-black  rounded-md dark:hover:text-slate-200   flex items-center  decoration-0 px-3 py-3 cursor-pointer group-data-[sidebar=dark]:hover:text-slate-200 group-data-[sidebar=brand]:hover:text-slate-200 " data-fc-type="collapse" data-fc-parent="parent-accordion">
                                <span data-lucide="bar-chart-3" class="w-5 h-5 text-center text-slate-800 dark:text-slate-400 me-2 group-data-[sidebar=dark]:text-slate-400 group-data-[sidebar=brand]:text-slate-400"></span>
                                <span>Thống kê</span>
                                <i class="icofont-thin-down ms-auto inline-block text-[14px] transform transition-transform duration-300 text-slate-800 dark:text-slate-400 group-data-[sidebar=dark]:text-slate-400 group-data-[sidebar=brand]:text-slate-400 fc-collapse-open:rotate-180 "></i>
                            </a>
    
                            <div class="hidden  overflow-hidden">
                                <ul class="nav flex-col flex flex-wrap ps-0 mb-0 ms-2" id="apps-accordion" data-fc-type="accordion">
                                    <li class="nav-item relative block">
                                        <a href="index.php?act=thongke" class="nav-link  hover:text-primary-500  rounded-md dark:hover:text-primary-500 relative   flex items-center decoration-0 px-3 py-3 group-data-[sidebar=brand]:hover:text-slate-200">
                                            <i class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                            Thống kê dịch vụ
                                        </a>
                                    </li>
    
    
                                </ul>
                            </div>
                            <!-- tài khoản -->
                            <a href="#" class="nav-link hover:bg-transparent hover:text-black  rounded-md dark:hover:text-slate-200   flex items-center  decoration-0 px-3 py-3 cursor-pointer group-data-[sidebar=dark]:hover:text-slate-200 group-data-[sidebar=brand]:hover:text-slate-200" data-fc-type="collapse" data-fc-parent="parent-accordion">
                                <span data-lucide="contact" class="w-5 h-5 text-center text-slate-800 dark:text-slate-400 me-2 group-data-[sidebar=dark]:text-slate-400 group-data-[sidebar=brand]:text-slate-400"></span>
                                <span>Tài khoản</span>
                                <i class="icofont-thin-down ms-auto inline-block text-[14px] transform transition-transform duration-300 text-slate-800 dark:text-slate-400  fc-collapse-open:rotate-180 group-data-[sidebar=dark]:text-slate-400 group-data-[sidebar=brand]:text-slate-400"></i>
                            </a>
    
                            <div id="Pages-flush" class="hidden  overflow-hidden">
                                <ul class="nav flex-col flex flex-wrap ps-0 mb-0 ms-2">
                                    <li class="nav-item relative block">
                                        <a href="index.php?act=taikhoan_kh" class="nav-link  hover:text-primary-500  rounded-md dark:hover:text-primary-500 relative   flex items-center decoration-0 px-3 py-3 group-data-[sidebar=brand]:hover:text-slate-200">
                                            <i class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                            Tài khoản khách hàng
                                        </a>
                                    </li>
                                    <li class="nav-item relative block">
                                        <a href="index.php?act=taikhoan_nv" class="nav-link  hover:text-primary-500  rounded-md dark:hover:text-primary-500 relative   flex items-center decoration-0 px-3 py-3 group-data-[sidebar=brand]:hover:text-slate-200">
                                            <i class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                            Tài khoản nhân viên
                                        </a>
                                    </li>
    
                                </ul>
                            </div>
                            <!-- Bình luận -->
                            <a href="#" class="nav-link hover:bg-transparent hover:text-black  rounded-md dark:hover:text-slate-200   flex items-center  decoration-0 px-3 py-3 cursor-pointer group-data-[sidebar=dark]:hover:text-slate-200 group-data-[sidebar=brand]:hover:text-slate-200" data-fc-type="collapse" data-fc-parent="parent-accordion">
                                <span data-lucide="message-square" class="w-5 h-5 text-center text-slate-800 me-2 dark:text-slate-400 group-data-[sidebar=dark]:text-slate-400 group-data-[sidebar=brand]:text-slate-400"></span>
                                <span>Bình luận</span>
                                <i class="icofont-thin-down  fc-collapse-open:rotate-180 ms-auto inline-block text-[14px] transform transition-transform duration-300 text-slate-800 dark:text-slate-400 group-data-[sidebar=dark]:text-slate-400 group-data-[sidebar=brand]:text-slate-400"></i>
                            </a>
    
                            <div id="Authentication-flush" class="hidden  overflow-hidden" aria-labelledby="Authentication">
                                <ul class="nav flex-col flex flex-wrap ps-0 mb-0 ms-2">
                                    <li class="nav-item relative block">
                                        <a href="index.php?act=binhluan" class="nav-link  hover:text-primary-500  rounded-md dark:hover:text-primary-500 relative   flex items-center decoration-0 px-3 py-3 group-data-[sidebar=brand]:hover:text-slate-200">
                                            <i class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                            Bình luận
                                        </a>
                                    </li>
    
                                </ul>
                            </div>
                            <!-- Orders -->
                            <a href="#" class="nav-link hover:bg-transparent hover:text-black  rounded-md dark:hover:text-slate-200   flex items-center  decoration-0 px-3 py-3 cursor-pointer group-data-[sidebar=dark]:hover:text-slate-200 group-data-[sidebar=brand]:hover:text-slate-200" data-fc-type="collapse" data-fc-parent="parent-accordion">
                                <span data-lucide="scroll-text" class="w-5 h-5 text-center text-slate-800 me-2 dark:text-slate-400 group-data-[sidebar=dark]:text-slate-400 group-data-[sidebar=brand]:text-slate-400"></span>
                                <span>Danh sách tất cả đơn đặt</span>
                                <i class="icofont-thin-down  fc-collapse-open:rotate-180 ms-auto inline-block text-[14px] transform transition-transform duration-300 text-slate-800 dark:text-slate-400 group-data-[sidebar=dark]:text-slate-400 group-data-[sidebar=brand]:text-slate-400"></i>
                            </a>
    
                            <div id="Authentication-flush" class="hidden  overflow-hidden" aria-labelledby="Authentication">
                                <ul class="nav flex-col flex flex-wrap ps-0 mb-0 ms-2">
                                    <li class="nav-item relative block">
                                        <a href="index.php?act=order" class="nav-link  hover:text-primary-500  rounded-md dark:hover:text-primary-500 relative   flex items-center decoration-0 px-3 py-3 group-data-[sidebar=brand]:hover:text-slate-200">
                                            <i class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                            Danh sách đặt lịch
                                        </a>
                                    </li>
                                    <li class="nav-item relative block">
                                        <a href="index.php?act=hoadon" class="nav-link  hover:text-primary-500  rounded-md dark:hover:text-primary-500 relative   flex items-center decoration-0 px-3 py-3 group-data-[sidebar=brand]:hover:text-slate-200">
                                            <i class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                            Hóa đơn
                                        </a>
                                    </li>
                                    <!-- <li class="nav-item relative block">
                                                <a href="index.php?act=hoadon"
                                                   class="nav-link  hover:text-primary-500  rounded-md dark:hover:text-primary-500 relative   flex items-center decoration-0 px-3 py-3 group-data-[sidebar=brand]:hover:text-slate-200">
                                                    <i class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                                    Orders
                                                </a>
                                            </li> -->
                                </ul>
                            </div>';
                        }
                        ?>
                        

                        <!-- Xác nhận đơn -->
                        <a href="#" class="nav-link hover:bg-transparent hover:text-black  rounded-md dark:hover:text-slate-200   flex items-center  decoration-0 px-3 py-3 cursor-pointer group-data-[sidebar=dark]:hover:text-slate-200 group-data-[sidebar=brand]:hover:text-slate-200" data-fc-type="collapse" data-fc-parent="parent-accordion">
                            <span data-lucide="scroll-text" class="w-5 h-5 text-center text-slate-800 me-2 dark:text-slate-400 group-data-[sidebar=dark]:text-slate-400 group-data-[sidebar=brand]:text-slate-400"></span>
                            <span>Đơn đặt cá nhân</span>
                            <i class="icofont-thin-down  fc-collapse-open:rotate-180 ms-auto inline-block text-[14px] transform transition-transform duration-300 text-slate-800 dark:text-slate-400 group-data-[sidebar=dark]:text-slate-400 group-data-[sidebar=brand]:text-slate-400"></i>
                        </a>

                        <div id="Authentication-flush" class="hidden  overflow-hidden" aria-labelledby="Authentication">
                            <ul class="nav flex-col flex flex-wrap ps-0 mb-0 ms-2">
                                <li class="nav-item relative block">
                                    <a href="index.php?act=xacnhan_don" class="nav-link  hover:text-primary-500  rounded-md dark:hover:text-primary-500 relative   flex items-center decoration-0 px-3 py-3 group-data-[sidebar=brand]:hover:text-slate-200">
                                        <i class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                        Đơn đặt 
                                    </a>
                                </li>
                                <li class="nav-item relative block">
                                    <a href="index.php?act=xacnhan" class="nav-link  hover:text-primary-500  rounded-md dark:hover:text-primary-500 relative   flex items-center decoration-0 px-3 py-3 group-data-[sidebar=brand]:hover:text-slate-200">
                                        <i class="icofont-dotted-right me-2 text-slate-600 text-[8px] group-data-[sidebar=brand]:text-slate-400"></i>
                                        Xác nhận hoàn thành dịch vụ
                                    </a>
                                </li>

                            </ul>
                        </div>

                        <!-- end -->
                    </div>
                </li>
            </ul>


            <div class="rounded-md py-4 px-3 mt-12  mb-4 relative bg-primary-300/10 text-center">
                <a href="javascript: void(0);" class="float-right close-btn text-slate-400">
                    <i class="mdi mdi-close"></i>
                </a>
                <h5 class="my-3 text-lg font-medium text-slate-700 dark:text-slate-300 group-data-[sidebar=dark]:text-slate-300 group-data-[sidebar=brand]:text-slate-300">Team 12</h5>
                <p class="mb-3 text-sm text-slate-400">Điểm số không quan trọng, quan trọng là điểm cao</p>
                <button class="px-2 py-1 mb-2 text-orange-400 hover:text-white border border-orange-300 hover:bg-orange-300 focus:outline-none  rounded text-sm  text-center dark:border-orange-300 dark:text-orange-300 dark:hover:text-white dark:hover:bg-orange-300 ">Không quạo</button>

            </div>
        </div>
    </div>
</div>