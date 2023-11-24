
<?php

if(is_array($loaddm)){
    extract($loaddm);
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
                                    <h1 class="font-medium text-3xl block dark:text-slate-100">Add Product</h1>
                                    <ol class="list-reset flex text-sm">
                                        <li><a href="index.php" class="text-gray-500 dark:text-slate-400">Robotech</a></li>
                                        <li><span class="text-gray-500 dark:text-slate-400 mx-2">/</span></li>
                                        <li class="text-gray-500 dark:text-slate-400">Admin</li>
                                        <li><span class="text-gray-500 dark:text-slate-400 mx-2">/</span></li>
                                        <li class="text-primary-500 hover:text-primary-600 dark:text-primary-400">Add Product</li>
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
            <div class="grid grid-cols-12 sm:grid-cols-12 md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4 justify-between">

                <div class="col-span-12 sm:col-span-12 md:col-span-12 lg:col-span-8 xl:col-span-8">
                    <div class="w-full relative mb-4">
                        <div class="flex-auto p-0 md:p-4">

                            <form action="#" method="post">
                                <div class="mb-2">
                                    <label for="title" class="font-medium text-sm text-slate-600 dark:text-slate-400">Tên danh mục</label>
                                    <input value="<?php echo $ten_loai_dv?>" name="ten_danhmuc_dv" type="title" id="title" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-brand-500 dark:focus:border-brand-500  dark:hover:border-slate-700" placeholder="Tên danh mục" required>
                                </div>
                                <div class="mb-2">
                                    <label for="description" class="font-medium text-sm text-slate-600 dark:text-slate-400">Description</label>
                                    <input type="text" value="<?php echo $mo_ta?>" name="mota_danhmuc_dv" id="description" rows="3" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-1 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700" placeholder="Description ..."></input>
                                </div>
                                
                                <div class="mb-2">
                                    <div class="grid grid-cols-2 gap-3">
                                        <div class="col-span-1">
                                            <label for="Product-date" class="font-medium text-sm text-slate-600 dark:text-slate-400">Product Date</label>
                                            <input  name="ngay_danhmuc_dv" type="text" id="Product-date" value="<?php echo $ngay_tao?>" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700" name="foo">
                                        </div>
                                        <!-- <div class="col-span-1">
                                                <label for="price" class="font-medium text-sm text-slate-600 dark:text-slate-400">Price</label>
                                                <input type="title" id="price" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-brand-500 dark:focus:border-brand-500  dark:hover:border-slate-700" placeholder="Price" required>
                                            </div> -->
                                    </div>
                                </div>
                                


                                <div class="">
                                    <input name="sua" type="submit" value="Sửa danh mục" class="px-2 py-2 lg:px-4 bg-brand  text-white text-sm  rounded hover:bg-brand-600 border border-brand-500"></input>
                                    <button type="reset" class="px-2 py-2 lg:px-4 bg-transparent  text-red text-sm  rounded transition hover:bg-red-600 hover:text-white border border-red font-medium">Reset</button>
                                </div>
                            </form>
                        </div><!--end card-body-->
                    </div><!--end card-->
                </div><!--end col-->
                <div class="col-span-12 sm:col-span-12 md:col-span-12 lg:col-span-3 xl:col-span-3">
                    <div class="w-full relative mb-4">
                        <div class="flex-auto p-0 md:p-4">
                            <div>
                                <p class="text-slate-700 text-base dark:text-slate-400">Product Image</p>
                                <img src="assets/images/products/pro-3.png" alt="" class="w-full h-auto">
                            </div>
                            <div class="mb-5">
                                <p class="text-slate-700 text-base dark:text-slate-400">Product Title</p>
                                <h4 class="text-xl font-semibold text-slate-700 dark:text-slate-300">Mannat HD, Smart LED Fire TV</h4>
                            </div>
                            <div class="mb-5">
                                <p class="text-slate-600 text-base dark:text-slate-400">Description</p>
                                <h4 class="text-base font-medium text-slate-900 dark:text-slate-300">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</h4>
                            </div>
                            <div class="mb-5">
                                <p class="text-slate-600 text-base dark:text-slate-400">Pro. Date</p>
                                <h4 class="text-base font-semibold text-slate-900 dark:text-slate-300">02/05/2023</h4>
                            </div>
                            <div class="mb-5">
                                <p class="text-slate-600 text-base dark:text-slate-400">For this product</p>
                                <h4 class="text-base font-semibold text-slate-900 dark:text-slate-300">Other</h4>
                            </div>
                            <div class="mb-5">
                                <p class="text-slate-600 text-base dark:text-slate-400">Size</p>
                                <h4 class="text-base font-semibold text-slate-900 dark:text-slate-300">SM, MD, LG, XL</h4>
                            </div>
                        </div><!--end card-body-->
                    </div><!--end card-->
                </div><!--end col-->
            </div> <!--end grid-->