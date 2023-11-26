<!-- BREADCRUMB -->
<?php //include "model/pdo.php"; 
?>

<div class="section bg-breadcrumb">
    <div class="content-wrap py-0 pos-relative">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb ">
                    <li class="breadcrumb-item"><a href="index.html">Trang chủ</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Đặt lịch dịch vụ</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<section>
    <div class="container">
        <h1>Đặt lịch</h1>
        <form action="" method="post" class="form">
            <div class="form-group">
                <label for="ngay">Ngày</label>
                <input type="date" class="form-control" id="ngay" name="ngay">
            </div>
            <div class="form-group">
                <label for="gio">Giờ</label>
                <input type="time" class="form-control" name="gio">
            </div>

            <div class="form-group">
                <label for="nguoi-hen">Chọn dịch vụ</label>
                <select name="dv" id="dichvu" class="form-control">
                    <option value="0">Chọn dịch vụ</option>
                    <?php
                    // $dsdv=loadAll_dichvu();
                    // foreach ($dsdv as $item) {
                    //     extract($item);
                    //     echo '<option value="' . $id . '">' . $ten_dv . '</option>';
                    // }

                    ?>

                </select>
            </div>
            <div class="form-group">
                <label for="nguoi-hen">Chọn loài thú cưng</label>
                <select name="dong_vat" id="thucung" class="form-control">
                    <option value="0">Chọn loài thú cưng</option>
                    <?php
                    // $dsdv=loadAll_dichvu();
                    // foreach ($dstc as $item) {
                    //     extract($item);
                    //     echo '<option value="' . $id . '">' . $ten_loai . '</option>';
                    // }

                    ?>

                </select>
            </div>
            <div class="form-group">
                <label for="nguoi-hen">Chọn khoảng cân</label>
                <select name="can_nang" id="can_nang" class="form-control">
                    <option value="" selected>---Chọn khoảng cân---</option>
                    <?php
                    // $dsdv=loadAll_dichvu();
                    foreach ($ds_cannang as $item) {
                        extract($item);
                        echo '<option value="' . $id . '">' . $can_nang . '</option>';
                    }

                    ?>

                </select>
            </div>
            <div class="form-group">
                <label for="nguoi-hen">Chọn nhân viên</label>
                <select name="nv" id="nhan_vien" class="form-control">
                    <option value="0">---Chọn nhân viên---</option>
                    <?php
                    // $dsdv=loadAll_dichvu();
                    // foreach ($dsnv as $item) {
                    //     extract($item);
                    //     echo '<option value="' . $id . '">' . $ten_nv . '</option>';
                    // }

                    ?>

                </select>
            </div>
            <div class="form-group">
                <label for="nguoi-hen">Giá</label>
                <input type="text" class="form-control" name="gia" id="gia" value="">
            </div>
            <div class="form-group">
                <label for="nguoi-hen">Chọn phương thức thanh toán</label>
                <select name="pttt" id="" class="form-control">
                    <option value="">---Chọn phương thức thanh toán---</option>
                    <option value="1">Thanh toán online</option>
                    <option value="2">Thanh toán sau khi hoàn thành dịch vụ</option>
                </select>
            </div>
            <a href="../../../index.php?act=xacnhan"><input type="button" name="datlich" class="btn btn-primary" value="Đặt lịch" style="width: 100px;"></input></a>
        </form>
    </div>
    <div style="color: red;">
            <?php  
                if(isset($thongbao)){
                    echo $thongbao;
                }else{
                    echo"";
                }
            
            
            ?>
    </div>

</section>
<!-- lấy dịch vụ: -->
<script>
    $(document).ready(function() {
        $.ajax({
            url: "http://localhost:3000/model/json/dvu.php",
            dataType: 'json',
            success: function(data) {
               
                //$("#dichvu").html("");
                for (i = 0; i < data.length; i++) {
                    var dich_vu = data[i]; 
                    var str = ` 
                    <option value="${dich_vu['id']}">
                         ${dich_vu['ten_dv']} 
                    </option>`;
                    $("#dichvu").append(str);
                }
                $("#dichvu").on("change", function(e) {
                    layGia();
                });
                $("#dichvu").on("change", function(e) {
                    layNhanVien();
                });
            }
        });
    })
</script>
<!-- lấy thú cưng -->
<script>
    $(document).ready(function() {
        $.ajax({
            url: "http://localhost:3000/model/json/dvat.php",
            dataType: 'json',
            success: function(data) {
               
                //$("#dichvu").html("");
                for (i = 0; i < data.length; i++) {
                    var thu_cung = data[i]; 
                    var str = ` 
                    <option value="${thu_cung['id']}">
                         ${thu_cung['ten_loai']} 
                    </option>`;
                    $("#thucung").append(str);
                }
                $("#thucung").on("change", function(e) {
                    layGia();
                });
            }
        });
    })
</script>

<!-- chọn khoảng cân -->
<script>
    $(document).ready(function() {
        $.ajax({
            url: "http://localhost:3000/model/json/can_nang.php",
            dataType: 'json',
            success: function(data) {
               
                //$("#dichvu").html("");
                for (i = 0; i < data.length; i++) {
                    var khoang_can = data[i]; 
                    var str = ` 
                    <option value="${khoang_can['id']}">
                         ${khoang_can['can_nang']} 
                    </option>`;
                    $("#can_nang").append(str);
                }
                $("#can_nang").on("change", function(e) {
                    layGia();
                });
            }
        });
    })
</script>
<!-- lấy giá -->
<script>
function layGia(){
    var id_dv = $("#dichvu").val();
    var id_thu_cung = $("#thucung").val();
    var id_can_nang = $("#can_nang").val();
    $.ajax({
         url: "http://localhost:3000/model/json/price.php?id_dv="+id_dv+"&&id_can_nang="+id_can_nang+"&&id_thu_cung="+id_thu_cung+"" ,
        
        dataType:'json',         
        success: function(data){  
            console.log(data);  
            for (i=0; i<data.length; i++){            
                var gia = data[i]; 
                document.getElementById("gia").value=gia['gia'];
            }            
        }
    });
}
</script>
<!-- lấy nhân viên -->
<script>
    function layNhanVien() {
        var id_dv=$("#dichvu").val();
        $.ajax({
            url: "http://localhost:3000/model/json/nhan_vien.php?id_dv="+id_dv,
            dataType: 'json',
            success: function(data) {
               console.log(data);
                //$("#nhan_vien").html("");
                for (i = 0; i < data.length; i++) {
                    var nhan_vien = data[i]; 
                    var str = ` 
                    <option value="${nhan_vien['id']}">
                         ${nhan_vien['ten_nv']} 
                    </option>`;
                    $("#nhan_vien").append(str);
                }
                
            }
        });
    }
</script>
