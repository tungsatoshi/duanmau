<div class="row mb">
            <div class="boxtrai mr">
                <div class="row">
                    <div class="banner">
                        <!-- Slideshow container -->
                        <div class="slideshow-container">

                        <!-- Full-width view/images with number and caption text -->
                        <div class="mySlides fade">
                            <div class="numbertext">1 / 3</div>
                            <img src="view/images/products/1003.jpg" style="width:100%">
                            <div class="text"></div>
                        </div>

                        <div class="mySlides fade">
                            <div class="numbertext">2 / 3</div>
                            <img src="view/images/products/1004.jpg" style="width:100%">
                            <div class="text"></div>
                        </div>

                        <div class="mySlides fade">
                            <div class="numbertext">3 / 3</div>
                            <img src="view/images/products/1066.jpg" style="width:100%">
                            <div class="text"></div>
                        </div>

                        <!-- Next and previous buttons -->
                        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                        <a class="next" onclick="plusSlides(1)">&#10095;</a>
                        </div>
                        <br>

                        <!-- The dots/circles -->
                        <div style="text-align:center">
                        <span class="dot" onclick="currentSlide(1)"></span>
                        <span class="dot" onclick="currentSlide(2)"></span>
                        <span class="dot" onclick="currentSlide(3)"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <?php
                        $i = 0;
                        foreach ($spnew as $sp) {
                            extract($sp);
                            $linksp = "index.php?act=sanphamct&idsp=".$id;
                            $hinh = $img_path.$img;
                            if(($i==2)||($i==5)||($i==8)) {
                                $mr = "";
                            } else {
                                $mr = "mr";
                            }
                            echo '<div class="boxsp '.$mr.'">
                                    <div class="img">
                                    <a href="'.$linksp.'"><img src="'.$hinh.'" alt=""></a>
                                    </div>
                                    <p>$'.$price.'</p>
                                    <a href="'.$linksp.'">'.$name.'</a>
                                </div>';
                                $i++;
                        }
                    ?>
                    <!-- <div class="boxsp mr">
                        <div class="img">
                            <img src="view/images/products/1005.jpg" alt="">
                        </div>
                        <p>30$</p>
                        <a href="#">Đồng hồ</a>
                    </div>
                    <div class="boxsp mr">
                        <div class="img">
                            <img src="view/images/products/1006.jpg" alt="">
                        </div>
                        <p>30$</p>
                        <a href="#">Laptop</a>
                    </div>
                    <div class="boxsp">
                        <div class="img">
                            <img src="view/images/products/1020.jpg" alt="">
                        </div>
                        <p>30$</p>
                        <a href="#">Máy ảnh</a>
                    </div>
                    <div class="boxsp mr">
                        <div class="img">
                            <img src="view/images/products/1008.jpg" alt="">
                        </div>
                        <p>30$</p>
                        <a href="#">Laptop</a>
                    </div>
                    <div class="boxsp mr">
                        <div class="img">
                            <img src="view/images/products/1025.jpg" alt="">
                        </div>
                        <p>30$</p>
                        <a href="#">Máy ảnh</a>
                    </div>
                    <div class="boxsp">
                        <div class="img">
                            <img src="view/images/products/1010.jpg" alt="">
                        </div>
                        <p>30$</p>
                        <a href="#">Vali</a>
                    </div>
                    <div class="boxsp mr">
                        <div class="img">
                            <img src="view/images/products/1011.jpg" alt="">
                        </div>
                        <p>30$</p>
                        <a href="#">Phone</a>
                    </div>
                    <div class="boxsp mr">
                        <div class="img">
                            <img src="view/images/products/1012.jpg" alt="">
                        </div>
                        <p>30$</p>
                        <a href="#">Phone</a>
                    </div>
                    <div class="boxsp">
                        <div class="img">
                            <img src="view/images/products/1013.jpg" alt="">
                        </div>
                        <p>30$</p>
                        <a href="#">Vali</a>
                    </div> -->
                </div>
            </div>
            <div class="boxphai ">
                <?php
                    include "boxright.php";
                ?>
            </div>
        </div>