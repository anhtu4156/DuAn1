<?php

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
                                    <h1 class="font-medium text-3xl block dark:text-slate-100">Thống kê</h1>
                                    <ol class="list-reset flex text-sm">
                                        <li><a href="index.php" class="text-gray-500 dark:text-slate-400">Trang chủ</a></li>
                                        <li><span class="text-gray-500 dark:text-slate-400 mx-2">/</span></li>
                                        <li class="text-gray-500 dark:text-slate-400">Dashboard</li>
                                        <li><span class="text-gray-500 dark:text-slate-400 mx-2">/</span></li>
                                        <li class="text-primary-500 hover:text-primary-600 dark:text-primary-400">Thống kê</li>
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

            <div id="myChart" style="width:100%; max-width:600px; height:500px;"></div>

            <script>
                google.charts.load('current', {
                    packages: ['corechart']
                });
                google.charts.setOnLoadCallback(drawChart);

                function drawChart() {

                    // Set Data
                    const data = google.visualization.arrayToDataTable([
                        ['Tháng', 'số lượng'],
                        <?php
                        foreach ($thongke as $item) {
                            extract($item);
                            echo "['$month', $tong],";
                        }

                        ?>
                    ]);

                    // Set Options
                    const options = {
                        title: 'Thống kê số đơn đặt theo tháng',
                        hAxis: {
                            title: 'Square Meters'
                        },
                        vAxis: {
                            title: 'Thống kê'
                        },
                        legend: 'none'
                    };

                    // Draw
                    const chart = new google.visualization.LineChart(document.getElementById('myChart'));
                    chart.draw(data, options);

                }
            </script>
              <div id="chart_div"></div>
            <script>
                google.charts.load('current', {
                    packages: ['corechart', 'bar']
                });
                google.charts.setOnLoadCallback(drawBasic);

                function drawBasic() {

                    var data = new google.visualization.DataTable();
                    data.addColumn('timeofday', 'Time of Day');
                    data.addColumn('number', 'Motivation Level');

                    data.addRows([
                        [{
                            v: [8, 0, 0],
                            f: '8 am'
                        }, 1],
                        
                    ]);

                    var options = {
                        title: 'Motivation Level Throughout the Day',
                        hAxis: {
                            title: 'Time of Day',
                            format: 'h:mm a',
                            viewWindow: {
                                min: [7, 30, 0],
                                max: [17, 30, 0]
                            }
                        },
                        vAxis: {
                            title: 'Rating (scale of 1-10)'
                        }
                    };

                    var chart = new google.visualization.ColumnChart(
                        document.getElementById('chart_div'));

                    chart.draw(data, options);
                }
            </script>