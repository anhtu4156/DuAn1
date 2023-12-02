<?php

if (is_array($load)) {
    extract($load);
    $id_order = $id;
}

?>
<div class="ltr:flex flex-1 rtl:flex-row-reverse">
    <div class="page-wrapper relative ltr:ms-auto rtl:me-auto rtl:ms-0 w-[calc(100%-260px)] px-4 pt-[64px] duration-300">
        <div class="xl:w-full">
            <div class="flex flex-wrap">
                <div class="flex items-center py-4 w-full">
                    <div class="w-full">
                        <div class="">
                            <div class="flex flex-wrap justify-between">
                                <div class="items-center ">
                                    <h1 class="font-medium text-3xl block dark:text-slate-100">Sửa đơn đặt</h1>
                                    <ol class="list-reset flex text-sm">
                                        <li><a href="index.php" class="text-gray-500 dark:text-slate-400">Trang chủ</a></li>
                                        <li><span class="text-gray-500 dark:text-slate-400 mx-2">/</span></li>
                                        <li class="text-gray-500 dark:text-slate-400">Admin</li>
                                        <li><span class="text-gray-500 dark:text-slate-400 mx-2">/</span></li>
                                        <li class="text-primary-500 hover:text-primary-600 dark:text-primary-400">Sửa đơn đặt</li>
                                    </ol>
                                </div>
                                <div class="flex items-center">
                                    <div class="today-date leading-5 mt-2 lg:mt-0 form-input w-auto rounded-md border inline-block border-primary-500/60 dark:border-primary-500/60 text-primary-500 bg-transparent px-3 py-1 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-primary-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700">
                                        <input type="text" class="dash_date border-0 focus:border-0 focus:outline-none" readonly required="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--end container-->

        <div class="xl:w-full  min-h-[calc(100vh-138px)] relative pb-14">
            <form action="#" method="post">
                <div class="grid grid-cols-12 sm:grid-cols-12 md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4 justify-between">

                    <div class="col-span-12 sm:col-span-12 md:col-span-12 lg:col-span-6 xl:col-span-6">
                        <div class="w-full relative mb-4">
                            <div class="flex-auto p-0 md:p-4">
                                <div class="mb-2">
                                    <label for="title" class="font-medium text-sm text-slate-600 dark:text-slate-400">Tên khách hàng</label>
                                    <input value="<?= $ten_tai_khoan ?>" readonly name="ten" type="title" id="title" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-brand-500 dark:focus:border-brand-500  dark:hover:border-slate-700" placeholder="Tên khách hàng" required>
                                </div>
                                <div class="mb-2">
                                    <label for="title" class="font-medium text-sm text-slate-600 dark:text-slate-400">Giá đơn</label>
                                    <input value="<?= $gia ?>" name="gia" type="title" id="title" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-brand-500 dark:focus:border-brand-500  dark:hover:border-slate-700" placeholder="Giá đơn" required>
                                </div>
                                <div class="mb-2">
                                    <label for="title" class="font-medium text-sm text-slate-600 dark:text-slate-400">Ngày đặt</label>
                                    <input value="<?= $ngay_dat_lich ?>" name="ngay" type="title" id="title" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-brand-500 dark:focus:border-brand-500  dark:hover:border-slate-700" placeholder="Ngày đặt" required>
                                </div>
                                <div class="mb-2">
                                    <label for="title" class="font-medium text-sm text-slate-600 dark:text-slate-400">Phương thức thanh toán</label> <br>
                                    <select name="pt" id="">
                                        <?php
                                        foreach ($load_pt as $pt) {
                                            extract($pt);
                                            if ($id == $id_order) {
                                                echo '<option value="' . $id . '" selected class="dark:text-slate-700">' . $pttt . '</option>';
                                            } else {
                                                echo '<option value="' . $id . '" class="dark:text-slate-700">' . $pttt . '</option>';
                                            }
                                            
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="mb-2">
                                    <label for="title" class="font-medium text-sm text-slate-600 dark:text-slate-400">Trạng thái dịch vụ</label>
                                    <select name="tt" id="">
                                        <?php

                                        if ($trang_thai_dv == 1) {
                                            echo '<option value="' . $trang_thai_dv . '" selected class="dark:text-slate-700">Đã hoàn thành </option>';
                                            echo '<option value="0" class="dark:text-slate-700">Chưa hoàn thành </option>';
                                        } else {
                                            echo '<option value="' . $trang_thai_dv . '" selected class="dark:text-slate-700">Chưa hoàn thành</option>';
                                            echo '<option value="1" class="dark:text-slate-700">Đã hoàn thành</option>';
                                        }
                                        

                                        ?>
                                    </select>
                                </div>



                                <div class="">
                                    <input name="sua_order" type="submit" value="Sửa đơn đặt" class="px-2 py-2 lg:px-4 bg-brand  text-white text-sm  rounded hover:bg-brand-600 border border-brand-500"></input>
                                    <button type="reset" class="px-2 py-2 lg:px-4 bg-transparent  text-red text-sm  rounded transition hover:bg-red-600 hover:text-white border border-red font-medium">Reset</button>
                                    <a class="px-2 py-2 lg:px-4 bg-brand  text-white text-sm  rounded hover:bg-brand-600 border border-brand-500" href="index.php?act=order">Về danh sách</a>

                                </div>
                                <?php
                                if (isset($thanhcong) && ($thanhcong != "")) {
                                    echo "<div class='p-2 text-1xl bg-green w-[250px] text-center text-white text-sm  rounded transition hover:bg-green-600 hover:text-white border border-green font-medium'>'.$thanhcong.'</div>";
                                }

                                ?>

                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->

                </div> <!--end grid-->
            </form>