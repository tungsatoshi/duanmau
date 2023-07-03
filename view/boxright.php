<div class="row mb">
    <div class="boxtitle">Tài khoản</div>
    <div class="boxcontent formtaikhoan">
        <?php
            if(isset($_SESSION['user'])) {
                extract($_SESSION['user']);
        ?>
            <div class="row mb10">
                <label for="">Xin chào <?=$user?></label><br>
            </div>
            <div class="row mb10">
                <li>
                    <a href="index.php?act=quenmk">Quên mật khẩu</a>
                </li>
                <li>
                    <a href="index.php?act=edit_taikhoan">Cập nhật tài khoản</a>
                </li>
                <?php
                    if($role==1) {
                ?>
                <li>
                    <a href="admin/index.php">Đăng nhập Admin</a>
                </li>
                <?php } ?>
                <li>
                    <a href="index.php?act=thoat">Thoát</a>
                </li>
            </div>
        <?php
            } else {
        ?>
        <form action="index.php?act=dangnhap" method="post">
            <div class="row mb10">
                <label for="">Tên đăng nhập</label><br>
                <input type="text" name="user" id="">
            </div>
            <div class="row mb10">
                <label for="">Mật khẩu</label><br>
                <input type="password" name="pass" id="">
            </div>
            <div class="row mb10">
                <input type="checkbox" name="" id=""> <label for="">Ghi nhớ tài khoản?</label><br>
            </div>
            <div class="row mb10">
                <input type="submit" value="Đăng nhập" name="dangnhap">
            </div>
        </form>
        <li>
            <a href="index.php?act=quenmk">Quên mật khẩu</a>
        </li>
        <li>
            <a href="index.php?act=dangky">Đăng ký thành viên</a>
        </li>
        <?php }?>
    </div>
</div>
<div class="row mb ">
    <div class="boxtitle">Danh mục</div>
    <div class="boxcontent2 menudoc">
        <ul>
            <?php
                foreach ($dsdm as $dm) {
                    extract($dm);
                    $linkdm = "index.php?act=sanpham&iddm=".$id;
                    echo '<li>
                            <a href="'.$linkdm.'">'.$name.'</a>
                        </li>';
                }
            ?>
            <!-- <li>
                <a href="#">Laptop</a>
            </li>
            <li>
                <a href="#">Điện thoại</a>
            </li>
            <li>
                <a href="#">Đồng hồ</a>
            </li>
            <li>
                <a href="#">Television</a>
            </li>
            <li>
                <a href="#">Laptop</a>
            </li>
            <li>
                <a href="#">Điện thoại</a>
            </li>
            <li>
                <a href="#">Đồng hồ</a>
            </li>
            <li>
                <a href="#">Television</a>
            </li> -->
        </ul>
    </div>
    <div class="boxfooter searchbox">
        <form action="index.php?act=sanpham" method="post">
            <input class="mb10" type="text" name="kyw">
            <input type="submit" name="timkiem" value="Tìm kiếm">
        </form>
    </div>
</div>
<div class="row">
    <div class="boxtitle">Top 10 yêu thích</div>
    <div class="row boxcontent">
        <?php
            foreach ($dstop10 as $sp) {
                extract($sp);
                $linksp = "index.php?act=sanphamct&idsp=".$id;
                $img = $img_path.$img;
                echo '<div class="row mb10 top10">
                        <a href="'.$linksp.'"><img src="'.$img.'" alt=""></a>
                        <a href="'.$linksp.'">'.$name.'</a>
                    </div>';
            }
        ?>
        <!-- <div class="row mb10 top10">
            <img src="view/images/products/1005.jpg" alt="">
            <a href="#">Lorem ipsum dolor sit</a>
        </div>
        <div class="row mb10 top10">
            <img src="view/images/products/1011.jpg" alt="">
            <a href="#">Lorem ipsum dolor sit</a>
        </div>
        <div class="row mb10 top10">
            <img src="view/images/products/1012.jpg" alt="">
            <a href="#">Lorem ipsum dolor sit</a>
        </div>
        <div class="row mb10 top10">
            <img src="view/images/products/1013.jpg" alt="">
            <a href="#">Lorem ipsum dolor sit</a>
        </div>
        <div class="row mb10 top10">
            <img src="view/images/products/1010.jpg" alt="">
            <a href="#">Lorem ipsum dolor sit</a>
        </div>
        <div class="row mb10 top10">
            <img src="view/images/products/1011.jpg" alt="">
            <a href="#">Lorem ipsum dolor sit</a>
        </div>
        <div class="row mb10 top10">
            <img src="view/images/products/1012.jpg" alt="">
            <a href="#">Lorem ipsum dolor sit</a>
        </div>
        <div class="row mb10 top10">
            <img src="view/images/products/1013.jpg" alt="">
            <a href="#">Lorem ipsum dolor sit</a>
        </div> -->
    </div>
</div>