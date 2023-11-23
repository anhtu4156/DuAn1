<!-- BREADCRUMB -->
<?php //include "model/pdo.php"; ?>
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
        <form action="" method="post" class="form" >
            <div class="form-group">
                <label for="ngay">Ngày</label>
                <input type="date" class="form-control" id="ngay" name="ngay">
            </div>
            <div class="form-group">
                <label for="gio">Giờ</label>
                <input type="time" class="form-control"  name="gio">
            </div>
            <!-- <div class="form-group">
                <label for="gio">Người hẹn</label>
                <input type="text" class="form-control"  name="nguoi-hen">
            </div>
            <div class="form-group">
                <label for="gio">Số điện thoại</label>
                <input type="text" class="form-control"  name="sdt">
            </div> -->
            <div class="form-group">
                <label for="nguoi-hen">Chọn loại dịch vụ</label>
                <select name="dv" id="" class="form-control">
                    <option value=""></option>
                    <?php  
                    // $dsdv=loadAll_dichvu();
                    foreach($dsdv as $item){
                        extract($item);
                        echo '<option value="'.$id.'">'.$ten_dv.'</option>';
                    }
                    
                    ?>
                    <!-- <option value="2">Chăm sóc sức khoẻ</option>
                    <option value="1">Cắt tỉa lông</option> -->
                </select>
            </div>
            <div class="form-group">
                <label for="nguoi-hen">Chọn loài thú cưng</label>
                <select name="dong_vat" id="" class="form-control">
                <option value=""></option>
                    <?php  
                    // $dsdv=loadAll_dichvu();
                    foreach($ds_thu_cung as $item){
                        extract($item);
                        echo '<option value="'.$id.'">'.$ten_loai_dong_vat.'</option>';
                    }
                    
                    ?>
                   
                </select>
            </div>
            <div class="form-group">
                <label for="nguoi-hen">Chọn khoảng cân</label>
                <select name="can_nang" id="" class="form-control">
                <option value=""></option>
                    <?php  
                    // $dsdv=loadAll_dichvu();
                    foreach($ds_can_nang as $item){
                        extract($item);
                        echo '<option value="'.$id.'">'.$khoang_can_nang.'</option>';
                    }
                    
                    ?>
                    
                </select>
            </div>
            <div class="form-group">
                <label for="nguoi-hen">Giá</label>
                <input type="text" class="form-control" name="gia">
            </div>
            <a href="../../../index.php?act=xacnhan"><input type="button" name="datlich" class="btn btn-primary" value="Đặt lịch" style="width: 100px;"></input></a>
        </form>
    </div>

</section>
