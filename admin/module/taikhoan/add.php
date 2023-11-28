<div class="content-item">
                
                <div class="form">
                <form action="index.php?act=signin" class="form" id="form" method="post">
                        <div>
                            <h2>Đăng ký tài khoản admin</h2>
                        </div>
                        <div class="form-group">
                            <label for="">Tên đăng nhập</label>
                            <input type="text" placeholder="Tên đăng nhập" name="user" class="form-control">
                            <span id="name-error"></span>
                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="text" placeholder="email" name="email" class="form-control">
                            <span id="user-error"></span>
                        </div>
                        <div class="form-group">
                            <label for="">Mật khẩu</label>
                            <input type="password" placeholder="mật khẩu" name="pass" class="form-control">
                            <span id="password-error"></span>
                        </div>
                        <div class="form-group">
                            <label for="">Vị trí</label>
                            <select name="role" id="" class="form-control">
                                <option value="">Chọn danh mục</option>
                                <option value="1">1-admin</option>
                                <option value="2">2- tổng admin</option>
                            </select>
                            
                        </div>
                        <input type="submit" name="dangky" class="btn btn-success" value="Thêm tài khoản">
                       
                        <div style="color: red;">
                            <?php 
                                if(isset($thongbao)&& ($thongbao!="")){
                                    echo $thongbao;
                                }
                             ?>
                        </div>
                    </form>
                </div>
    </div>