<div class="row">
            <div class="row formtitle mb10">
                <h1>THỐNG KÊ</h1>
            </div>
            <div class="row formcontent">
                <div class="row mb10 formdsloai">
                    <table>
                        <tr>
                            <!-- <th></th> -->
                            <th>Mã danh mục</th>
                            <th>Loại hàng</th>
                            <th>Số lượng</th>
                            <th>Giá cao nhất</th>
                            <th>Giá thấp nhất</th>
                            <th>Giá trung bình</th>
                            <!-- <th></th> -->
                        </tr>
                        <?php
                            foreach($listthongke as $thongke) {
                                extract($thongke);
                                // $suatk = "index.php?act=suabl&id=".$id;
                                // $xoatk = "index.php?act=xoabl&id=".$id;
                                echo '<tr>
                                        <td>'.$madm.'</td>
                                        <td>'.$tendm.'</td>
                                        <td>'.$countsp.'</td>
                                        <td>'.$maxprice.'</td>
                                        <td>'.$minprice.'</td>
                                        <td>'.$avgprice.'</td>
                                        
                                    </tr>';
                            }
                        ?>
                        

                    </table>
                </div>
                <!-- <div class="row mb10">
                    <input type="button" value="Chọn tất cả">
                    <input type="button" value="Bỏ chọn tất cả">
                    <input type="button" value="Xóa các mục đã chọn">
                    <a href="index.php?act=adddm"><input type="button" value="Nhập thêm"></a>
                </div> -->
                </form>
            </div>
        </div>