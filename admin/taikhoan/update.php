<?php
    if(is_array($taikhoan)) {
        extract($taikhoan);
    }
?>
<div class="row">
            <div class="row formtitle mb10">
                <h1>CẬP NHẬT LOẠI HÀNG</h1>
            </div>
            <div class="row formcontent">
            <form action="index.php?act=updatetk" method="post" enctype="multipart/form-data" >
                    <div class="row mb10">
                        <label for="">Tên đăng nhập</label>
                        <input type="text" name="user" value="<?=$taikhoan['user']?>">
                    </div>
                    <div class="row mb10">
                        <label for="">Mật khẩu</label>
                        <input type="text" name="pass" value="<?=$pass?>">
                    </div>
                    <div class="row mb10">
                        <label for="">Email</label>
                        <input type="text" name="email" id="" value="<?=$email?>">
                    </div>
                    <div class="row mb10">
                        <label for="">Địa chỉ</label>
                        <input type="text" name="address" id="" value="<?=$address?>">
                    </div>
                    <div class="row mb10">
                        <label for="">Điện thoại</label>
                        <input type="text" name="tel" id="" value="<?=$tel?>">
                    </div>
                    <div class="row mb10">
                        <label for="">Vai trò</label>
                        <input type="text" name="role" id="" value="<?=$role?>">
                    </div>
                    <div class="row mb10">
                        <input type="hidden" name="id" value="<?=$taikhoan['id']?>">
                        <input type="submit" name="capnhat" value="Cập nhật">
                        <input type="reset" value="Nhập lại">
                        <a href="index.php?act=dskh"><input type="button" value="Danh sách"></a>
                    </div>
                    <?php
                        if(isset($thongbao) && ($thongbao!="")) echo $thongbao;
                    ?>
                </form>
            </div>
        </div>
    </div>