


<div class="content-item">
    <div
    id="myChart" style="width:100%; max-width:600px; height:500px;">
    <script src="https://www.gstatic.com/charts/loader.js"></script>
    </div>

    <script>
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {

    // Set Data
    const data = google.visualization.arrayToDataTable([
    ['Danh mục', 'Số lượng sản phẩm'],

    <?php  
    $tongdm=count($listthongke);
    $i=1;
    foreach($listthongke as $item){
        extract($item);
        if($i==$tongdm) $dauphay=""; else $dauphay=",";
        echo "['".$item['tendm']."',".$item['countsp']."]".$dauphay;
        $i+=1;
    }
    
    
    
    
    
    ?>
    ]);

    // Set Options
    const options = {
    title:'Biểu đồ thể hiện tỉ lệ số sản phẩm theo dung mục'
    };

    // Draw
    const chart = new google.visualization.PieChart(document.getElementById('myChart'));
    chart.draw(data, options);

    }
    </script>         
</div>