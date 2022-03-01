<?php  include "header.php";?>
    <container>
        <div class="main-contentner ">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-6">
                <div class="top--movie">
                    <h2 class="header-list-title">Phim Đề Cử</h2>
                    <div class="list--top-movie">
                        <i class=" fas fa-chevron-left top--movie-iconleft"></i>

                        <ul class="top--movie-nomination">
                            <?php
                            $getFeaturedMovies = $move->getFeaturedMovies();
                            foreach ($getFeaturedMovies as $value ):?>
                            <li class="top--moview-list">
                                <a href="detail.php?id=<?php echo $value['id']?>">
                                    <div class="top--movide-introduce">
                                        <span><?php echo $value['status']; ?></span>
                                    </div>
                                    <img class="top--movie-img" src="./img/<?php echo $value['image'] ?>" alt="">
                                    <div class="name--top-movie">
                                        <h4 class="titile--top-movie-VN"> <?php echo $value['namemovie_vn']; ?></h4>
                                        <span class="titile--top-movie-EL"> <?php echo $value['namemovie_el']; ?></span>
                                    </div>
                                </a>
                            </li>
                            <?php endforeach;?>                    
                        </ul>
                        <i class=" fas fa-chevron-right top--movie-iconright"></i>
                    </div>
                </div>
                <div class="typenewupcoming--movie">
                    <div class="type--movie col-4">
                        <a href=""><img class="type--img" src="./img/type1.jpg" alt=""></a>
                        <a href=""><img class="type--img" src="./img/type2.jpg" alt=""></a>
                        <a href=""><img class="type--img" src="./img/type3.jpg" alt=""></a>
                        <a href=""><img class="type--img" src="./img/type4.jpg" alt=""></a>
                    </div>
                    <div class="new--movie col-4">
                        <div class="title--new-movie">
                            <span class="title--new active--title" id="title--phimlemoi">Phim lẻ mới</span>
                            <span class="title--new " id="title--phimbomoi">Phim bộ mới</span>
                            <span class="title--new " id="title--phimbofull">Phim bộ full</span>
                        </div>
                        <div class="phimlemoi--movie">
                                <?php $getNewMoveLe =$move->getNewMoveLe();
                                foreach($getNewMoveLe as $value):
                                ?>
                            <div class="phimlemoi--moive-view">
                                <a class="phimlemoi--movie-link" href="detail.php?id=<?php echo $value['id'] ?>">
                                    <img class="img--phimlemoi--movie" src="./img/<?php echo $value['image']; ?>" alt="">
                                    <div class="phimlemoi--movie-name">
                                        <div class="phimlemoi--nameVN"> <span class="nameVN"> <?php echo $value['namemovie_vn']; ?></span>
                                            <span class="phimlemoi--introduce"><?php echo $value['time']; ?> phút</span>
                                        </div>
                                        <div class="phimlemoi--nameEL"> <span><?php echo $value['namemovie_el'];?></span> </div>
                                    </div>                 
                                </a>
                            </div>
                            <?php  endforeach;?>
                        </div>
                        <div class="phimbomoi--movie">
                        <?php $getNewMoveBo = $move->getNewMoveBo();
                                    foreach($getNewMoveBo as $value):
                                    ?>
                            <div class="phimlemoi--moive-view">
                                <a class="phimlemoi--movie-link" href="detail.php?id=<?php echo $value['id']; ?>">
                                    <img class="img--phimlemoi--movie" src="./img/<?php echo $value['image'];?>" alt="">
                                    <div class="phimlemoi--movie-name">
                                        <div class="phimlemoi--nameVN"> <span class="nameVN"> <?php echo $value['namemovie_vn']; ?></span>
                                            <span class="phimlemoi--introduce"><?php echo $value['time']; ?> phút</span>
                                        </div>
                                        <div class="phimlemoi--nameEL"> <span><?php echo $value['namemovie_el']; ?></span> </div>

                                    </div>
                                </a>
                            </div>
                                        <?php endforeach; ?>
                        </div>
                        <div class="phimbofull--movie">

                            <div class="phimlemoi--moive-view">
                                <a class="phimlemoi--movie-link" href="">
                                    <img class="img--phimlemoi--movie" src="./img/phimbofull1.jpg" alt="">
                                    <div class="phimlemoi--movie-name">
                                        <div class="phimlemoi--nameVN"> <span> Name Việt Name</span>
                                            <span class="phimlemoi--introduce">giới thiệu</span>
                                        </div>
                                        <div class="phimlemoi--nameEL"> <span>Name EL</span> </div>

                                    </div>
                                </a>
                            </div>
                            <div class="phimlemoi--moive-view">
                                <a class="phimlemoi--movie-link" href="">
                                    <img class="img--phimlemoi--movie" src="./img/phimbomoi2.jpg" alt="">
                                    <div class="phimlemoi--movie-name">
                                        <div class="phimlemoi--nameVN"> <span> Name Việt Name</span>
                                            <span class="phimlemoi--introduce">giới thiệu</span>
                                        </div>
                                        <div class="phimlemoi--nameEL"> <span>Name EL</span> </div>

                                    </div>
                                </a>
                            </div>
                            <div class="phimlemoi--moive-view">
                                <a class="phimlemoi--movie-link" href="">
                                    <img class="img--phimlemoi--movie" src="./img/phimbomoi3.jpg" alt="">
                                    <div class="phimlemoi--movie-name">
                                        <div> <span class="phimlemoi--nameVN"> Name Việt Name</span>
                                            <span class="phimlemoi--introduce">giới thiệu</span>
                                        </div>
                                        <div class="phimlemoi--nameEL"> <span>Name EL</span> </div>

                                    </div>
                                </a>
                            </div>
                            <div class="phimlemoi--moive-view">
                                <a class="phimlemoi--movie-link" href="">
                                    <img class="img--phimlemoi--movie" src="./img/phimbomoi4.jpg" alt="">
                                    <div class="phimlemoi--movie-name">
                                        <div class="phimlemoi--nameVN"> <span> Name Việt Name</span>
                                            <span class="phimlemoi--introduce">giới thiệu</span>
                                        </div>
                                        <div class="phimlemoi--nameEL"> <span>Name EL</span> </div>

                                    </div>
                                </a>
                            </div>
                            <div class="phimlemoi--moive-view">
                                <a class="phimlemoi--movie-link" href="">
                                    <img class="img--phimlemoi--movie" src="./img/phimbomoi5.jpg" alt="">
                                    <div class="phimlemoi--movie-name">
                                        <div class="phimlemoi--nameVN"> <span> Name Việt Name</span>
                                            <span class="phimlemoi--introduce">giới thiệu</span>
                                        </div>
                                        <div class="phimlemoi--nameEL"> <span>Name EL</span> </div>

                                    </div>
                                </a>
                            </div>
                            <div class="phimlemoi--moive-view">
                                <a class="phimlemoi--movie-link" href="">
                                    <img class="img--phimlemoi--movie" src="./img/phimbomoi6.jpg" alt="">
                                    <div class="phimlemoi--movie-name">
                                        <div class="phimlemoi--nameVN"> <span> Name Việt Name</span>
                                            <span class="phimlemoi--introduce">giới thiệu</span>
                                        </div>
                                        <div class="phimlemoi--nameEL"> <span>Name EL</span> </div>

                                    </div>
                                </a>
                            </div>
                            <div class="phimlemoi--moive-view">
                                <a class="phimlemoi--movie-link" href="">
                                    <img class="img--phimlemoi--movie" src="./img/phimbomoi7.jpg" alt="">
                                    <div class="phimlemoi--movie-name">
                                        <div class="phimlemoi--nameVN"> <span> Name Việt Name</span>
                                            <span class="phimlemoi--introduce">giới thiệu</span>
                                        </div>
                                        <div class="phimlemoi--nameEL"> <span>Name EL</span> </div>

                                    </div>
                                </a>
                            </div>
                            <div class="phimlemoi--moive-view">
                                <a class="phimlemoi--movie-link" href="">
                                    <img class="img--phimlemoi--movie" src="./img/phimbomoi8.jpg" alt="">
                                    <div class="phimlemoi--movie-name">
                                        <div class="phimlemoi--nameVN"> <span> Name Việt Name</span>
                                            <span class="phimlemoi--introduce">giới thiệu</span>
                                        </div>
                                        <div class="phimlemoi--nameEL"> <span>Name EL</span> </div>

                                    </div>
                                </a>
                            </div>
                            <div class="phimlemoi--moive-view">
                                <a class="phimlemoi--movie-link" href="">
                                    <img class="img--phimlemoi--movie" src="./img/phimbomoi9.jpg" alt="">
                                    <div class="phimlemoi--movie-name">
                                        <div class="phimlemoi--nameVN"> <span> Name Việt Name</span>
                                            <span class="phimlemoi--introduce">giới thiệu</span>
                                        </div>
                                        <div class="phimlemoi--nameEL"> <span>Name EL</span> </div>

                                    </div>
                                </a>
                            </div>
                            <div class="phimlemoi--moive-view">
                                <a class="phimlemoi--movie-link" href="">
                                    <img class="img--phimlemoi--movie" src="./img/phimbomoi10.jpg" alt="">
                                    <div class="phimlemoi--movie-name">
                                        <div class="phimlemoi--nameVN"> <span> Name Việt Name</span>
                                            <span class="phimlemoi--introduce">giới thiệu</span>
                                        </div>
                                        <div class="phimlemoi--nameEL"> <span>Name EL</span> </div>

                                    </div>
                                </a>
                            </div>
                            <div class="phimlemoi--moive-view">
                                <a class="phimlemoi--movie-link" href="">
                                    <img class="img--phimlemoi--movie" src="./img/phimbo11.jpg" alt="">
                                    <div class="phimlemoi--movie-name">
                                        <div class="phimlemoi--nameVN"> <span> Name Việt Name</span>
                                            <span class="phimlemoi--introduce">giới thiệu</span>
                                        </div>
                                        <div class="phimlemoi--nameEL"> <span>Name EL</span> </div>

                                    </div>
                                </a>
                            </div>

                        </div>
                    </div>
                    <div class="upcoming--movie col-4">
                        <div class="title--upcoming-moive">
                            <i class="icon--title-upcoming fas fa-star"></i>
                            <h2 class="title--name-upcoming">PHIM SẮP CHIẾU</h2>
                        </div>
                        <div class="list--upcoming--movie">
                            <div class="startlist-upcoming">
                                <div class="list--start-upcoming">
                                    <div class="start--upcoming-HD">HD Trailer</div>
                                    <div class="list--start-name">
                                        <span class="start--name-upcoming-VN">Name tiếng việt</span>
                                        <p class="start--name-upcoming-EL">Name tiếng Anh</p>
                                        <div class="rateview--upcoming">
                                            <div class="rate-upcoming">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <div class="view--upcoming">lượt xem</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="list--upcoming">
                                <?php 
                                        $getMoveSapChieu = $move->getMoveSapChieu();
                                        foreach ($getMoveSapChieu as $value):
                                         ?>
                                    <a href="detail.php?id=<?php echo $value['id'] ?>">
                                       
                                        <div class="upcoming--movie-view">
                                           <img class="img--list-upcoming" src="./img/<?php echo $value['image'];?>"alt="">
                                            <div class="upcoming--view-name">
                                            <div class="upcoming--namevnstatus">
                                                <span class="list--upcoming-nameVN"><?php echo $value['namemovie_vn']; ?></span>
                                                <span class="list--upcoming-HD"><?php echo $value['status']; ?></span>
                                        </div>
                                                <p class="list--upcoming-nameEL"><?php echo $value['namemovie_el']; ?></p>
                                                <p class="list--upcoming-viewer"><?php echo $value['view']; ?></p>
                                                <p class="list--upcoming-rate">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                </p>
                                            </div>
                                        </div>
                                     
                                    </a>
                                    <?php  endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="theater--movie">

                    <div class="list--phimbochieurap-movie">
                        <div class="list--theater-moive  col-xs-6 col-md-8 col-sm-6">
                            <div class="title--theater-movie">
                                <span>PHIM CHIẾU RẠP</span>
                            </div>
                            <div class="list-wrapper-theater">
                                <?php 
                                    $getMoveTheter = $move->getMoveTheter();
                                    foreach ($getMoveTheter as $value):
                                ?>
                                <div class="wrapper--theater-movie ">
                                    <a href="detail.php?id=<?php echo $value['id'] ?>">
                                        <div class="title--theater-HD"><span><?php echo $value['status']; ?></span></div>
                                        <img class="img-theater" src="./img/<?php echo $value['image'];?>" alt="">
                                        <div class="name--theater-movie">
                                            <span class="name--theater-VN"><?php echo $value['namemovie_vn']; ?></span>
                                            <p class="name--theater-EL"><?php echo $value['namemovie_el']; ?></p>
                                        </div>
                                    </a>
                                </div>
                                        <?php endforeach; ?>
                            </div>
                         
                        </div>
                        <div class="hotmovies--movie col-4">
                            <div class="title--upcoming-moive">
                                <i class="icon--title-upcoming fas fa-star"></i>
                                <h2 class="title--name-upcoming">PHIM LẺ HOT TRONG TUẦN</h2>
                            </div>
                            <div class="list--upcoming--movie">
                                <?php 
                                $getMoveFirstLeHot = $move->getMoveFirstLeHot();
                                foreach ($getMoveFirstLeHot as $value ):
                                ?>
                                <div class="startlist-upcoming">
                                    <div class="list--start-hotmoives">
                                        <div class="start--upcoming-HD"><?php echo $value['status'] ?></div>
                                        <div class="list--start-name">
                                            <span class="start--name-upcoming-VN"><?php echo $value['namemovie_vn']; ?></span>
                                            <p class="start--name-upcoming-EL"><?php echo $value['namemovie_el']; ?></p>
                                            <div class="rateview--upcoming">
                                                <div class="rate-upcoming">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                </div>
                                                <div class="view--upcoming"><?php echo $value['view']?>k</div>
                                            </div>
                                        </div>
                                    </div>
                                
                                  
                                </div>
                                <?php endforeach; ?>
                                <div class="list--upcoming">
                                <?php 
                                         $getMoveLeHot = $move->getMoveLeHot();
                                         foreach ($getMoveLeHot as $value ):
                                         ?>
                                     <a href="detail.php?id=<?php echo $value['id'] ?>">
                                      
                                         <div class="upcoming--movie-view upcoming--movie-view-2">

                                             <img class="img--list-upcoming" src="./img/<?php echo $value['image'];?>." alt="">

                                             <div class="upcoming--view-name">
                                             <div class="upcoming--namevnstatus">
                                                 <span class="list--upcoming-nameVN"><?php echo $value['namemovie_vn'];?></span>
                                                 <div class="list--upcoming-HD"><?php echo $value['status'];?></div>
                                                 </div>
                                                 <p class="list--upcoming-nameEL"><?php echo $value['namemovie_el'];?></p>
                                                 <p class="list--upcoming-viewer"><?php echo $value['view'];?>k</p>
                                                 <p class="list--upcoming-rate">
                                                     <i class="fas fa-star"></i>
                                                     <i class="fas fa-star"></i>
                                                     <i class="fas fa-star"></i>
                                                     <i class="fas fa-star"></i>
                                                     <i class="fas fa-star"></i>
                                                 </p>



                                             </div>

                                         </div>
                                       
                                     </a>
                                     <?php  endforeach;?>
                                 </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="newbo--movie">

                    <div class="list--phimbochieurap-movie">
                        <div class="list--theater-moive col-xs-6 col-md-8 col-sm-6">
                            <div class="title--theater-movie">
                                <span>PHIM BỘ MỚI</span>
                            </div>
                            <div class="list-wrapper-theater">
                                <?php 
                                $getNewMoveBo8 = $move->getNewMoveBo8();
                                foreach($getNewMoveBo8 as $value): 
                                ?>
                                <div class="wrapper--theater-movie ">
                                    <a href="detail.php?id=<?php echo $value['id'] ?>">
                                        <div class="title--theater-HD"><span><?php echo $value['status'] ?></span></div>
                                        <img class="img-theater" src="./img/<?php echo $value['image'];?>"alt="">
                                        <div class="name--theater-movie">
                                            <span class="name--theater-VN"><?php echo $value['namemovie_vn']; ?></span>
                                            <p class="name--theater-EL"><?php echo $value['namemovie_el']; ?></p>
                                        </div>
                                    </a>
                                </div>
                                    <?php endforeach; ?>
                            </div>                     
                        </div>
                        <div class="bohot--movie col-4">
                            <div class="title--upcoming-moive">
                                <i class="icon--title-upcoming fas fa-star"></i>
                                <h2 class="title--name-upcoming">PHIM BỘ HOT TRONG TUẦN</h2>
                            </div>
                            <div class="list--upcoming--movie">
                                <div class="startlist-upcoming">
                                    <div class="list--start-bomoives">
                                        <div class="start--upcoming-HD">HD Trailer</div>
                                        <div class="list--start-name">
                                            <span class="start--name-upcoming-VN">Name tiếng việt</span>
                                            <p class="start--name-upcoming-EL">Name tiếng Anh</p>
                                            <div class="rateview--upcoming">
                                                <div class="rate-upcoming">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                </div>
                                                <div class="view--upcoming">lượt xem</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list--upcoming">
                                        <a href="detail.php?id=<?php echo $value['id'] ?>">
                                            <?php $getMoveBoHot = $move->getMoveBoHot();
                                               foreach($getMoveBoHot as $value): 
                                            ?>
                                            <div class="upcoming--movie-view">

                                                <img class="img--list-upcoming" src="./img/<?php echo $value['image'];?>" alt=""">

                                                <div class="upcoming--view-name">
                                                <div class="upcoming--namevnstatus">
                                                    <span class="list--upcoming-nameVN"><?php echo $value['namemovie_vn']; ?></span>
                                                    <span class="list--upcoming-HD"><?php echo $value['status']; ?></span>
                                               </div>
                                                    <p class="list--upcoming-nameEL"><?php echo $value['namemovie_el'] ?></p>
                                                    <p class="list--upcoming-viewer"><?php echo $value['view']; ?></p>
                                                    <p class="list--upcoming-rate">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </p>



                                                </div>

                                            </div>
                                            <?php  endforeach; ?>
                                        </a>
                                   
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="list--phimbochieurap-movie">
                        <div class="list--theater-moive col-xs-6 col-md-8 col-sm-6">
                            <div class="title--theater-movie">
                                <span>PHIM LẺ MỚI</span>
                            </div>
                           
                            <div class="list-wrapper-theater">
                            <?php $getNewMoveLe8 =$move->getNewMoveLe8();
                                foreach($getNewMoveLe8 as $value):
                                ?>
                                <div class="wrapper--theater-movie ">
                                    
                                    <a href="detail.php?id=<?php echo $value['id'] ?>">
                                        <div class="title--theater-HD"><span><?php echo $value['status']; ?></span></div>
                                        <img class="img-theater" src="./img/<?php echo $value['image'];?>" alt="">
                                        <div class="name--theater-movie">
                                            <span class="name--theater-VN"><?php echo $value['namemovie_vn']; ?></span>
                                            <p class="name--theater-EL"><?php echo $value['namemovie_el']; ?></p>
                                        </div>
                                    </a>
                                </div>
                                <?php endforeach; ?>
                            </div>
                     

                        </div>
                    </div>
                    <div class="list--phimbochieurap-movie">
                        <div class="list--theater-moive col-xs-6 col-md-8 col-sm-6">
                            <div class="title--theater-movie">
                                <span>PHIM HOẠT HÌNH</span>
                            </div>
                            <div class="list-wrapper-theater ">
                                <?php 
                                $getMoveAnime = $move->getMoveAnime();
                                foreach ($getMoveAnime as $value ):
                                ?>
                                <div class="wrapper--theater-movie ">
                                    <a href="detail.php?id=<?php echo $value['id'] ?>">
                                        <div class="title--theater-HD"><span><?php echo $value['status']; ?></span></div>
                                        <img class="img-theater" src="./img/<?php echo $value['image'];?>" alt="">
                                        <div class="name--theater-movie">
                                            <span class="name--theater-VN"><?php echo $value['namemovie_vn']; ?></span>
                                            <p class="name--theater-EL"><?php echo $value['namemovie_el']; ?></p>
                                        </div>
                                    </a>
                                </div>
                            <?php endforeach; ?>
                            </div>
                           

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </container>
 <?php include "footer.php"; ?>