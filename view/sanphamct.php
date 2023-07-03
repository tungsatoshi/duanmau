<div class="row mb">
            <div class="boxtrai mr">
                <div class="row mb10">
                    <?php
                        extract($onesp);
                    ?>
                    <div class="boxtitle"><?=$name?></div>
                    <div class="row boxcontent">
                        <?php
                            $img = $img_path.$img;
                            echo '<div class="row mb10 spct"><img src="'.$img.'"></div>';
                            echo $mota;
                        ?>
                    </div>
                </div>
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
                <script>
                    $(document).ready(function(){
                        $("#binhluan").load("view/binhluan/binhluanform.php", {idpro: <?=$id?>});
                    });
                </script>
                <div class="row" id="binhluan"></div>
                <!-- <div class="row mb10">
                    <div class="boxtitle">BÌNH LUẬN</div>
                    <div class="row boxcontent">
                        <iframe src="view/binhluan/binhluanform.php?idpro=<?=$id?>" frameborder="0" width="100%" height="300px"></iframe>
                    </div>
                </div> -->
                <div class="row">
                    <div class="boxtitle">SẢN PHẨM CÙNG LOẠI</div>
                    <div class="row boxcontent">
                        <?php
                            foreach ($sp_cung_loai as $sp_cung_loai) {
                                extract($sp_cung_loai);
                                $linksp = "index.php?act=sanphamct&idsp=".$id;
                                echo '<li class="mb10"><a href="'.$linksp.'">'.$name.'</a></li>';
                            }
                        ?>
                    </div>
                </div>
            </div>
            <div class="boxphai ">
                <?php
                    include "boxright.php";
                ?>
            </div>
        </div>