<?php
    if(is_array($sanpham)) {
        extract($sanpham);
    }
    $hinhpath="../upload/".$img;
    if(is_file($hinhpath)) {
        $hinh = "<img src='".$hinhpath."' height='80'>";
    } else{
        $hinh = "no photo";
    }
?>
<div class="row">
            <div class="row formtitle mb10">
                <h1>CẬP NHẬT LOẠI HÀNG</h1>
            </div>
            <div class="row formcontent">
            <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data" >
                    <div class="row mb10">
                        <select name="iddm" id="">
                            <option value="0" selected>Tất cả</option>
                            <?php
                                foreach($listdanhmuc as $danhmuc) {
                                    extract($danhmuc);
                                    if($iddm==$id) $s = "selected"; else $s="";
                                        echo '<option value="'.$id.'" '.$s.'>'.$name.'</option>';
                                }
                            ?>
                        </select>
                    </div>
                    <div class="row mb10">
                        <label for="">Tên sản phẩm</label>
                        <input type="text" name="tensp" value="<?=$sanpham['name']?>">
                    </div>
                    <div class="row mb10">
                        <label for="">Giá</label>
                        <input type="text" name="giasp" value="<?=$price?>">
                    </div>
                    <div class="row mb10">
                        <label for="">Hình</label>
                        <input type="file" name="hinh" id="">
                        <?=$hinh?>
                    </div>
                    <div class="row mb10">
                        <label for="">Mô tả</label>
                        <textarea name="mota" cols="30" rows="10"><?=$mota?></textarea>
                    </div>
                    <div class="row mb10">
                        <input type="hidden" name="id" value="<?=$sanpham['id']?>">
                        <input type="submit" name="capnhat" value="Cập nhật">
                        <input type="reset" value="Nhập lại">
                        <a href="index.php?act=listsp"><input type="button" value="Danh sách"></a>
                    </div>
                    <?php
                        if(isset($thongbao) && ($thongbao!="")) echo $thongbao;
                    ?>
                </form>
            </div>
        </div>
    </div>