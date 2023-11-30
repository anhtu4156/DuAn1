<!-- BREADCRUMB -->
<?php //include "model/pdo.php"; 
    
    $dl_dv_tc=get_dl_dv_tc();
    extract($dl_dv_tc);
    $dl_kt_nv=get_dl_kt_nv();
    extract($dl_kt_nv);
    $dl_pttt_tk=get_dl_pttt_tk();
    extract($dl_pttt_tk);
    $dl_cl=get_dl_cl();
    extract($dl_cl);
?>

<div class="section bg-breadcrumb">
    <div class="content-wrap py-0 pos-relative">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb ">
                    <li class="breadcrumb-item"><a href="index.html">Trang chủ</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Xác nhận lại thông tin</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<section>
    <div class="container">
        <h1>Xác nhận thông tin</h1>
        <div style="color: red;">
            <?php  
                if(isset($thongbao)){
                    echo $thongbao;
                }else{
                    echo"";
                }
            
            
            ?>
    </div>
        <form action="index.php?act=hoanthanh" method="post" class="form">
            <input type="hidden" value="<?php echo $_SESSION['user_id']; ?>" name="id_user">
            <input type="hidden" value="<?=$id_dl ?>" name="id_dl">
            <div class="form-group">
                <label for="ngay">Ngày</label>
                <input type="date" class="form-control" id="ngay" name="ngay" value="<?=$ngay?>">
            </div>
            <div class="form-group">
                <label for="gio">Khoảng giờ</label>
                <select name="gio" id="khoang_gio" class="form-control">
                    <option value="<?=$id_khoang_gio?>"><?=$ca_lam?></option>
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
                <label for="nguoi-hen">Dịch vụ</label>
                <select name="dv" id="dichvu" class="form-control">
                    <option value="<?=$id_dich_vu?>"><?=$ten_dv ?></option>
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
                <label for="nguoi-hen">Loài thú cưng</label>
                <select name="dong_vat" id="thucung" class="form-control">
                    <option value="<?=$id_thu_cung ?>"><?=$ten_loai ?></option>
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
                <label for="nguoi-hen">Khoảng cân</label>
                <select name="can_nang" id="can_nang" class="form-control">
                    <option value="<?=$id_khoang_can?>"><?=$can_nang?></option>
                    <?php
                    // $dsdv=loadAll_dichvu();
                    // foreach ($ds_cannang as $item) {
                    //     extract($item);
                    //     echo '<option value="' . $id . '">' . $can_nang . '</option>';
                    // }

                    ?>

                </select>
            </div>
            <div class="form-group">
                <label for="nguoi-hen">Người hẹn</label>
                <input type="text" value="<?=$ten_tai_khoan?>" class="form-control" readonly>
            </div>
            <div class="form-group">
                <label for="nguoi-hen">Email</label>
                <input type="text" value="<?=$email?>" class="form-control" readonly>
            </div>
            <div class="form-group">
                <label for="nguoi-hen">Nhân viên</label>
                <select name="nv" id="nhan_vien" class="form-control">
                    <option value="<?=$id_nhan_vien?>"><?=$ten_nv?></option>
                </select>
            </div>
            <div class="form-group">
                <label for="nguoi-hen">Giá</label>
                <input type="text" class="form-control" name="gia" id="gia" value="<?=$gia?>" readonly>
            </div>
            <div class="form-group">
                <label for="nguoi-hen">Phương thức thanh toán</label>
                <select name="pttt" id="" class="form-control">
                    <option value="<?=$id_pttt?>"><?=$pttt?></option>
                    <?php
                    
                    foreach ($phuong_thuc_tt as $item) {
                        extract($item);
                        echo '<option value="' . $id . '">' . $pttt . '</option>';
                    }

                    ?>
                </select>
            </div>
            <input type="hidden" name="id_pttt" id="" value="<?=$id_pttt?>">
            <a href="index.php?act=hoanthanh"><input type="submit" name="hoanthanh" class="btn btn-primary" value="Xác nhận" style="width: 100px;"></input></a>
        </form>
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
            //console.log(data);  
            for (i=0; i<data.length; i++){            
                var gia = data[i]; 
                document.getElementById("gia").value=gia['gia'];
            }            
        }
    });
}
</script>
<!-- lấy khoảng giờ: -->

<script>
    $(document).ready(function() {
        $.ajax({
            url: "http://localhost:3000/model/json/time.php",
            dataType: 'json',
            success: function(data) {
              // console.log(data);
                //$("#dichvu").html("");
                for (i = 0; i < data.length; i++) {
                    var khoang_gio = data[i]; 
                    var str = ` 
                    <option value="${khoang_gio['id']}">
                         ${khoang_gio['ca_lam']} 
                    </option>`;
                    $("#khoang_gio").append(str);
                }
                $("#khoang_gio").on("change", function(e) {
                    layNhanVien();
                });
            }
        });
    })
</script>

<!-- lấy nhân viên -->
<script>
    function layNhanVien() {
        var id_dv=$("#dichvu").val();
        var id_time=$("#khoang_gio").val();
        $.ajax({
            url: "http://localhost:3000/model/json/nhan_vien.php?id_dv="+id_dv+"&&id_time="+id_time+"",
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


