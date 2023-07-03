<div class="row">
            <div class="row formtitle mb10">
                <h1>THÊM MỚI SẢN PHẨM</h1>
            </div>
            <div class="row formcontent">
                <form action="index.php?act=addsp" method="post" enctype="multipart/form-data" >
                    <div class="row mb10">
                        <label for="">Danh mục</label>
                        <select name="iddm" id="">
                            <?php
                                foreach($listdanhmuc as $danhmuc) {
                                    extract($danhmuc);
                                    echo '<option value="'.$id.'">'.$name.'</option>';
                                }
                            ?>
                            
                        </select>
                    </div>
                    <div class="row mb10">
                        <label for="">Tên sản phẩm</label>
                        <input type="text" name="tensp">
                    </div>
                    <div class="row mb10">
                        <label for="">Giá</label>
                        <input type="text" name="giasp">
                    </div>
                    <div class="row mb10">
                        <label for="">Hình</label>
                        <input type="file" name="hinh" id="">
                    </div>
                    <div class="row mb10">
                        <label for="">Mô tả</label>
                        <textarea name="mota" cols="30" rows="10"></textarea>
                    </div>
                    <div class="row mb10">
                        <input type="submit" name="themmoi" value="THÊM MỚI">
                        <input type="reset" value="NHẬP LẠI">
                        <a href="index.php?act=listsp"><input type="button" value="DANH SÁCH"></a>
                    </div>
                    <?php
                        if(isset($thongbao) && ($thongbao!="")) echo $thongbao;
                    ?>
                </form>
            </div>
        </div>
    </div>