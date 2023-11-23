<!-- BREADCRUMB -->
<div class="section bg-breadcrumb">
    <div class="content-wrap py-0 pos-relative">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb ">
                    <li class="breadcrumb-item"><a href="../../../index.php">Trang chủ</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Xác nhận thông tin</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<section>
    <div class="container">
    <h1>Xác nhận lại thông tin</h1>
        <form action="" method="post">
            <div class="form-group">
                <label for="ngay">Ngày</label>
                <input type="date" class="form-control" id="ngay" name="ngay" value="<??>">
            </div>
            <div class="form-group">
                <label for="gio">Giờ</label>
                <input type="time" class="form-control" id="gio" name="gio" value="<??>">
            </div>
            <div class="form-group">
                <label for="nguoi-hen">Loại dịch vụ</label>
                <select name="" id="" class="form-control" value="<??>">
                <?php  
                    // $dsdv=loadAll_dichvu();
                    foreach($dsdv as $item){
                        extract($item);
                        echo '<option value="'.$id.'">'.$ten_dv.'</option>';
                    }
                    
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label for="gio">Người hẹn</label>
                <input type="text" class="form-control" id="gio" name="nguoi-hen" value="<??>">
            </div>
            <div class="form-group">
                <label for="gio">Số điện thoại</label>
                <input type="text" class="form-control" id="gio" name="sdt" value="<??>">
            </div>
            <div class="form-group">
                <label for="nguoi-hen">Giá</label>
                <input type="text" class="form-control" name="gia">
            </div>
            <a href="../../../index.php?act=xong"><input type="button" class="btn btn-primary" value="Xác nhận" style="width: 100px;"></input></a>
        </form>
    </div>

</section>