<div class="ltr:flex flex-1 rtl:flex-row-reverse">
    <div class="page-wrapper relative ltr:ms-auto rtl:me-auto rtl:ms-0 w-[calc(100%-260px)] px-4 pt-[64px] duration-300">
        <div class="xl:w-full">
            <div class="flex flex-wrap">
                <div class="flex items-center py-4 w-full">
                    <div class="w-full">
                        <div class="">
                            <div class="flex flex-wrap justify-between">
                                <div class="items-center ">
                                    <h1 class="font-medium text-3xl block dark:text-slate-100">Biểu đồ</h1>
                                    <ol class="list-reset flex text-sm">
                                        <li><a href="index.php" class="text-gray-500 dark:text-slate-400">Robotech</a></li>
                                        <li><span class="text-gray-500 dark:text-slate-400 mx-2">/</span></li>
                                        <li class="text-gray-500 dark:text-slate-400">Admin</li>
                                        <li><span class="text-gray-500 dark:text-slate-400 mx-2">/</span></li>
                                        <li class="text-primary-500 hover:text-primary-600 dark:text-primary-400">
                                            Biểu đồ</li>
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
        
        <div class="row2 form_content ">
            <div id="myChart" style="width:100%; width:800px; height:500px; align-items: center">
            </div>

            <script>
                google.charts.load('current', {
                    'packages': ['corechart']
                });
                google.charts.setOnLoadCallback(drawChart);

                function drawChart() {

                    // Set Data
                    // const data = google.visualization.arrayToDataTable([
                    //     ['Contry', 'Mhl'],
                    //     ['Italy', 54.8],
                    //     ['France', 48.6],
                    //     ['Spain', 44.4],
                    //     ['USA', 23.9],
                    //     ['Argentina', 14.5]
                    // ]);
                    const data1 = google.visualization.arrayToDataTable([
                        ['Danh mục', 'Số lượng'],
                        <?php
                        foreach ($thongke as $item) {
                            extract($item);
                            echo "['$danhmuc', $soluong],";
                        }

                        ?>
                    ]);

                    // Set Options
                    const options = {
                        title: 'BIỂU ĐỒ SỐ LƯỢNG SẢN PHẨM TRONG DANH MỤC',
                        is3D: true
                    };

                    // Draw
                    const chart = new google.visualization.PieChart(document.getElementById('myChart'));
                    chart.draw(data1, options);

                }
            </script>

        </div>
    </div>
</div>