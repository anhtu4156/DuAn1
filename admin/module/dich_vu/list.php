<div class="ltr:flex flex-1 rtl:flex-row-reverse">
    <div class="page-wrapper relative ltr:ms-auto rtl:me-auto rtl:ms-0 w-[calc(100%-260px)] px-4 pt-[64px] duration-300">
        <div class="xl:w-full">
            <div class="flex flex-wrap">
                <div class="flex items-center py-4 w-full">
                    <div class="w-full">
                        <div class="">
                            <div class="flex flex-wrap justify-between">
                                <div class="items-center ">
                                    <h1 class="font-medium text-3xl block dark:text-slate-100">Dịch vụ</h1>
                                    <ol class="list-reset flex text-sm">
                                        <li><a href="index.php" class="text-gray-500 dark:text-slate-400">Robotech</a></li>
                                        <li><span class="text-gray-500 dark:text-slate-400 mx-2">/</span></li>
                                        <li class="text-gray-500 dark:text-slate-400">Admin</li>
                                        <li><span class="text-gray-500 dark:text-slate-400 mx-2">/</span></li>
                                        <li class="text-primary-500 hover:text-primary-600 dark:text-primary-400">
                                            Products</li>
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
            <div class="grid grid-cols-12 sm:grid-cols-12 md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4">
                <div class="col-span-12 sm:col-span-12 md:col-span-12 lg:col-span-12 xl:col-span-12">
                    <div class="w-full relative mb-4">
                        <div class="flex-auto p-0 md:p-4">


                            <div class="flex flex-wrap gap-4 mb-3">
                                <form action="index.php?act=dich_vu" method="post">
                                    <div class="mb-2 w-44 flex">

                                        <select name="iddm" id="Category" class="w-full inline-block rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700">
                                            <option value="0" class="dark:text-slate-700">Tất cả danh mục</option>
                                            <?php
                                            foreach ($listdanhmuc_dv as $danhmuc) {
                                                extract($danhmuc);
                                                echo '<option value="' . $id . '" class="dark:text-slate-700">' . $ten_loai_dv . '</option>';
                                            }
                                            ?>

                                        </select>
                                        <input class="ms-3 inline-block focus:outline-none bg-brand-500 mt-1 text-white hover:bg-brand-600 hover:text-white  text-md font-medium py-2 px-4 rounded" type="submit" name="clickOK" value="GO">
                                    </div>
                                </form>
                                <div class="mb-2 w-36">
                                    <!-- <select id="Vendor" class="w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700">
                                            <option class="dark:text-slate-700">Vendor</option>
                                            <option class="dark:text-slate-700">Vendor-2</option>
                                            <option class="dark:text-slate-700">Vendor-3</option>
                                    </select> -->
                                </div>
                                <div class="ms-auto">
                                    <form action="index.php?act=dich_vu" method="post">
                                        <div class="relative">
                                            <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                                <i data-lucide="search" class="z-[1] w-5 h-5 stroke-slate-400"></i>
                                            </div>
                                            <input name="keyw" type="search" id="productSearch" class="form-input w-52 rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700 pl-10 p-2.5" placeholder="search">
                                        </div>
                                    </form>
                                </div>
                                <div>
                                    <a href="index.php?act=them_dv">
                                        <button class="inline-block focus:outline-none bg-brand-500 mt-1 text-white hover:bg-brand-600 hover:text-white  text-md font-medium py-2 px-4 rounded">
                                            Thêm dịch vụ
                                        </button>
                                    </a>
                                </div>
                            </div>




                            <div id="myTabContent">
                                <div class="active  p-4 bg-gray-50 rounded-lg dark:bg-gray-900" id="all" role="tabpanel" aria-labelledby="all-tab">
                                    <div class="grid grid-cols-1 p-0 md:p-4">
                                        <div class="sm:-mx-6 lg:-mx-8">
                                            <div class="relative overflow-x-auto block w-full sm:px-6 lg:px-8">
                                                <table class="w-full">
                                                    <thead class="bg-gray-50 dark:bg-slate-700/20">
                                                        <tr>
                                                            <th scope="col" class="p-3">
                                                                <label class="custom-label">
                                                                    <div class="bg-white dark:bg-slate-600/40 border border-slate-200 dark:border-slate-600 rounded w-5 h-5  inline-block  text-center -mb-[5px]">
                                                                        <input type="checkbox" class="hidden">
                                                                        <i class="icofont-verification-check hidden text-ms text-brand-500 dark:text-slate-200 leading-5"></i>
                                                                    </div>
                                                                </label>
                                                            </th>

                                                            <th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
                                                                STT
                                                            </th>
                                                            <th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
                                                                Tên dịch vụ
                                                            </th>
                                                            <th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
                                                                ảnh dịch vụ
                                                            </th>
                                                            <th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
                                                                Mô tả
                                                            </th>
                                                            <th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
                                                                id_loai_dv
                                                            </th>
                                                            <th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
                                                                Trạng thái
                                                            </th>
                                                            <th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
                                                                Hành động
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>

                                                        <!-- 1 -->
                                                        <?php
                                                        $stt=1;
                                                        foreach ($listdichvu as $items) {
                                                            extract($items);
                                                            $hinhpath = "assets/images/upload/" . $anh_dv;
                                                            if (is_file($hinhpath)) {
                                                                $hinhpath = "<img src= '" . $hinhpath . "' width='100px' height='100px'>";
                                                            } else {
                                                                $hinhpath = "No file img!";
                                                            }

                                                            echo '
                                                            <tr class="bg-white border-b border-dashed dark:bg-gray-900 dark:border-gray-700/40">
                                                            <td class="w-4 p-4">
                                                                <label class="custom-label">
                                                                    <div class="bg-white dark:bg-slate-600/40 border border-slate-200 dark:border-slate-600 rounded w-5 h-5  inline-block  text-center -mb-[5px]">
                                                                        <input type="checkbox" class="hidden">
                                                                        <i class="icofont-verification-check hidden text-ms text-brand-500 dark:text-slate-200 leading-5"></i>
                                                                    </div>
                                                                </label>
                                                            </td>
                                                            
                                                            <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                <span class="text-brand-500 ">' . $stt++ . '</span>
                                                            </td>
                                                            <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                <span class="text-brand-500 ">' . $ten_dv . '</span>
                                                            </td>
                                                            
                                                            <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                            ' . $hinhpath . '
                                                            </td>
                                                            <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                            ' . $mo_ta . '
                                                            </td>
                                                            <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                            <span class="bg-green-600/5 text-green-600 text-[11px] font-medium px-2.5 py-0.5 rounded h-5">' . $id_loai_dv . '</span>
                                                            </td>
                                                            <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                            <img src="" alt="">
                                                            ' . $trang_thai . '
                                                            </td>
                                                            <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                                <a href="index.php?act=sua_dv&id_dv=' . $id . '" class="me-3"><i class="icofont-ui-edit text-lg text-gray-500 dark:text-gray-400"></i></a>
                                                                <a href="index.php?act=xoa_dv&id_dv=' . $id . '" onclick=\'return confirm("Bạn có chắc chắn muốn xóa")\'><i class="icofont-ui-delete text-lg text-red-500 dark:text-red-400"></i></a>
                                                            </td>
                                                        </tr>
                                                            ';
                                                        };

                                                        ?>


                                                    </tbody>
                                                </table>
                                            </div><!--end div-->
                                        </div><!--end div-->
                                    </div><!--end grid-->
                                    <!-- <div class="flex justify-between mt-4">
                                        <div class="self-center">
                                            <p class="dark:text-slate-400">Showing 1 - 20 of 1,524</p>
                                        </div>
                                        <div class="self-center">
                                            <ul class="inline-flex items-center -space-x-px">
                                                <li>
                                                    <a href="#" class=" py-2 px-3 ms-0 leading-tight text-gray-500 bg-white rounded-l-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-900 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                                        <i class="icofont-simple-left"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" aria-current="page" class="py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-900 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">1</a>
                                                </li>
                                                <li>
                                                    <a href="#" class="z-10 py-2 px-3 leading-tight text-brand-600 bg-brand-50 border border-brand-300 hover:bg-brand-100 hover:text-brand-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">2</a>
                                                </li>
                                                <li>
                                                    <a href="#" class="py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-900 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">3</a>
                                                </li>
                                                <li>
                                                    <a href="#" class=" py-2 px-3 leading-tight text-gray-500 bg-white rounded-r-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-900 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                                        <i class="icofont-simple-right"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div> -->
                                </div>



                            </div>
                        </div><!--end card-body-->
                    </div><!--end card-->
                </div><!--end col-->
            </div> <!--end grid-->