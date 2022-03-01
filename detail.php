<?php include "header.php"; ?>
    <container>
        <div class="main--container-detail">
          
            <div class="col-12">
            <?php if(isset($_GET["id"])):
                $id = $_GET["id"];
                $username = $_SESSION['user'];
                $getMoveById = $move->getMoveById($id);  
                foreach(   $getMoveById as $value):
            ?>
                <div class="title--detail">
                    <span> <a href=""> PHIM MỚI</a>/</span>
                    <?php 
                    $getTypeById = $move->getTypeById($value['type_id']);
                    foreach($getTypeById as $value_type):
                    ?>
                    <span> <a href=""> Phim <?php echo $value_type['type_name'];  ?></a>/</span>
                 
                    <span> <a href=""><?php echo $value['namemovie_vn']; ?></a></span>         
                </div>
                <div class="wrapper--detail">
                    <div class="detail-left col-8">
                        <div class="detail--left-top">

                            <div class="movie--info">
                                <img class="img--movie-info" src="./img/<?php echo $value['image'] ?>" alt="">
                                <div class="view-detail">
                                    <a href="#trailer">
                                        <div class="view--trailer">Trailer</div>
                                    </a>
                                    <a href="watches.php?id=<?php echo $value['id']; ?>">
                                        <div class="view--movie">Xem Phim</div>
                                    </a>

                                </div>
                                <div class="data--movie-info">
                                    <div class="title--data">
                                        <div class="name--movie-VN"><?php echo $value['namemovie_vn']; ?></div>
                                        <span class="name--movie-EL"><?php echo $value['namemovie_el'] ?></span>
                                       
                                    </div>
                                    <div class="text--dl">
                                        <div class="moive-dt">Trạng thái:<span class="quality--movie"><?php echo $value['status']; ?></span>
                                        </div>
                                        <div class="moive-dt">Đạo diễn: <a class="text--dl-link" href=""><?php echo $value['director'] ?></a>
                                        </div>
                                        <?php 
                                        $getNationById = $move->getNationById($value['nation_id']);
                                        foreach($getNationById as $nation_value):
                                        ?>
                                        <div class="moive-dt">Quốc gia:<a class="text--dl-link" href=""><?php echo $nation_value['nation_name']; ?></a> </div>
                                        <?php endforeach; ?>
                                        <div class="moive-dt">Năm sản xuất:<a class="text--dl-link" href=""><?php echo $value['year_manu']; ?></a>
                                        </div>
                                        <div class="moive-dt">Thời lượng:<span><?php echo $value['time'] ?> phút</span></div>
                                        <div class="moive-dt">Chất lượng:<span>Bản đẹp</span></div>
                                        <div class="moive-dt">Độ phân giả:<span>Full HD</span></div>
                
                                        <div class="moive-dt">Thể loại:
                                            <a class="text--dl-link" href=""><?php echo $value_type['type_name']; ?></a>
                                        </div>
                                        <?php endforeach ?>
                                        <div class="moive-dt">Lượt xem:<span><?php  echo $value['view'];?>k</span></div>
                                        <div class="moive-dt">Công ty SX:<span>Đang cập nhât</span></div>
                                    </div>
                                    <div class="rate--movie">
                                        <div class="title--rate-movie">
                                            Đánh giá phim <span class="viewer--movie">(107 lượt)</span>
                                        </div>
                                        <div class="icon--rate-movie">
                                            <i class="icon--active-detail fas fa-star"></i>
                                            <i class="icon--active-detail fas fa-star"></i>
                                            <i class="icon--active-detail fas fa-star"></i>
                                            <i class="icon--active-detail fas fa-star"></i>
                                            <i class="icon--active-detail fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="movie--actor">
                                <div class="actor--title">DIỄN VIÊN</div>
                                <div class="slide--actor">
                                    <i class="icon--actor-left fas fa-chevron-left"></i>
                                    <div class="info--actor">

                                        <div class="nameimg--info">
                                            <a href="">
                                                <img class="img--actor" src="./img/imgactor.png" alt="">
                                                <div class="name--actor">Tên diễn viên 1</div>
                                            </a>
                                        </div>


                                        <div class="nameimg--info">
                                            <a href="">
                                                <img class="img--actor" src="./img/imgactor.png" alt="">
                                                <div class="name--actor">Tên diễn viên 2 </div>
                                            </a>
                                        </div>


                                        <div class="nameimg--info">
                                            <a href="">
                                                <img class="img--actor" src="./img/imgactor.png" alt="">
                                                <div class="name--actor">Tên diễn viên 3</div>
                                            </a>
                                        </div>


                                        <div class="nameimg--info">
                                            <a href="">
                                                <img class="img--actor" src="./img/imgactor.png" alt="">
                                                <div class="name--actor">Tên diễn viên 4</div>
                                            </a>
                                        </div>


                                        <div class="nameimg--info">
                                            <a href="">
                                                <img class="img--actor" src="./img/imgactor.png" alt="">
                                                <div class="name--actor">Tên diễn viên 5</div>
                                            </a>
                                        </div>


                                        <div class="nameimg--info">
                                            <a href="">
                                                <img class="img--actor" src="./img/imgactor.png" alt="">
                                                <div class="name--actor">Tên diễn viên 6</div>
                                            </a>
                                        </div>


                                        <div class="nameimg--info">
                                            <a href="">
                                                <img class="img--actor" src="./img/imgactor.png" alt="">
                                                <div class="name--actor">Tên diễn viên 7</div>
                                            </a>
                                        </div>


                                        <div class="nameimg--info">
                                            <a href="">
                                                <img class="img--actor" src="./img/imgactor.png" alt="">
                                                <div class="name--actor">Tên diễn viên 8</div>
                                            </a>
                                        </div>


                                        <div class="nameimg--info">
                                            <a href=""></a>
                                            <img class="img--actor" src="./img/imgactor.png" alt="">
                                            <div class="name--actor">Tên diễn viên 9 </div>
                                            </a>
                                        </div>


                                        <div class="nameimg--info">
                                            <a href="">
                                                <img class="img--actor" src="./img/imgactor.png" alt="">
                                                <div class="name--actor">Tên diễn viên 10</div>
                                            </a>
                                        </div>


                                        <div class="nameimg--info">
                                            <a href=""></a>
                                            <img class="img--actor" src="./img/imgactor.png" alt="">
                                            <div class="name--actor">Tên diễn viên 11 </div>
                                            </a>
                                        </div>


                                        <div class="nameimg--info">
                                            <a href="">
                                                <img class="img--actor" src="./img/imgactor.png" alt="">
                                                <div class="name--actor">Tên diễn viên 12</div>
                                            </a>
                                        </div>

                                    </div>
                                    <i class="icon--actor-right fas fa-chevron-right"></i>
                                </div>
                            </div>
                            <div class="content--movie">
                               <div class="header--content-movie">
                                    <div class="content--movie-detail">NỘI DUNG PHIM</div>
                                    <!-- <form action="like.php" method="post"> -->
                                     <?php 
   
                                               
                                          $move->updateLike($id);
                                       
                                                                           
                                     ?>
                                    <div class="content--movie-likeshare">                                   
                                        <button onclick = "location.reload();;"  type="submit" name="submit" class="content--moive-like"> <i class="fas fa-thumbs-up"></i> Thích          
                                        <span name="like">  
                                        <?php
                                         
                                      echo $value['number_like'];                                                      
                                         ?>
                                        </span></button>                                     
                                        <span class="content--moive-share"> Chia sẻ</span>
                                    </div>
                                    <!-- </form> -->
                                </div>
                                <div class="main--content-movie">
                                    <h2 class="main--content-title">
                                        <?php echo $value['namemovie_vn']." ".$value['year_manu']." ".$value['status']; ?>
                                    </h2>
                                    <div class="text--content-title">
                                        <a class="link--text-content" href="">
                                        <?php echo $value['namemovie_vn']." ".$value['year_manu']; ?>
                                          </a>
                                      <?php echo $value['description']; ?>
                                        <img class="img--content-title" src="./img/<?php echo $value['img_des'] ?>" alt="">
                                    </div>
                                    <div class="containt--showmore">
                                        <div onclick="hideElement()" class="showmore--title" data-toggle="collapse"
                                            data-target="#content--showmore"> Hiển thị thêm</div>
                                        <div class="showmore--text collapse " data-toggle="collapse"
                                            aria-expanded="false" id="content--showmore">
                                            Ma trận: Hồi sinh (tựa gốc tiếng Anh: The Matrix Resurrections) là phim điện
                                            ảnh
                                            Mỹ thuộc thể loại hành động khoa học viễn tưởng, do Lana Wachowski làm biên
                                            kịch, đạo diễn và sản xuất. Đây là phần thứ tư trong loạt phim cùng tên,
                                            tiếp
                                            nối phần ba The Matrix Revolutions, từ năm 2003. Dàn diễn viên trong phim
                                            gồm có
                                            Keanu Reeves, Carrie-Anne Moss và Jada Pinkett Smith, cả ba đều trở lại với
                                            các
                                            vai cũ ở những phần trước, ngoài ra phim còn có sự góp mặt của Yahya
                                            Abdul-Mateen II, Jessica Henwick, Jonathan Groff, Neil Patrick Harris,
                                            Priyanka
                                            Chopra Jonas và Christina Ricci. Phim do hai hãng Village Roadshow Pictures
                                            và
                                            Venus Castina Productions hợp tác sản xuất, dự kiến được Warner Bros. phát
                                            hành
                                            vào ngày 22/12/2021. Ở Mỹ, phim cũng sẽ được đăng tải lên dịch vụ xem trực
                                            tuyến
                                            HBO Max.
                                            Ma Trận: Hồi Sinh tung trailer siêu hấp dẫn thị giác dịp Giáng sinh
                                            Sau gần hai thập kỷ, thương hiệu Ma Trận sẽ chính thức trở lại vào dịp Giáng
                                            sinh năm nay với phần phim thứ tư Ma Trận: Hồi Sinh (tựa gốc: The Matrix
                                            Resurrections). Phim dự kiến khởi chiếu 24/12/2021 trên toàn cầu. Trong lần
                                            trở
                                            lại này, Ma Trận đón chào sự trở lại của cả đạo diễn Lana Wachowski và bộ
                                            đôi
                                            chính Keanu Reeves & Carrie-Anne Moss, “hồi sinh” Neo và Trinity đã làm nên
                                            tên
                                            tuổi của họ. Phim còn có sự góp mặt của dàn diễn viên nổi tiếng như Yahya
                                            Abdun-Mateen II, Jessica Henwick, Jonathan Groff và Priyanka Chopra Jonas.
                                            Trong
                                            đoạn trailer thứ hai vừa được nhà Warner Bros giới thiệu, có thể thấy Neo
                                            dường
                                            như đã nhận ra việc anh - cùng những người xung quanh - tiếp tục bị kéo vào
                                            vòng
                                            lặp kỳ ảo không lối thoát mang tên Ma Trận. Tưởng chừng đã quên đi tất cả
                                            những
                                            ký ức về Ma Trận trước đây, song trực giác của cả Neo và Trinity vẫn có thể
                                            cảm
                                            nhận được những gì thuộc về thế giới này. Neo, sau khi lạc vào một không
                                            gian
                                            với toàn màu trắng đã thốt lên: “Tôi nhớ về thứ này”, và khán giả có lẽ cũng
                                            sẽ
                                            liên tục được nhắc nhớ về những dấu ấn của Ma Trận trước đây. Phần phim thứ
                                            tư
                                            này có lẽ sẽ là sự tri ân tuyệt vời dành cho những người hâm mộ của loạt
                                            phim
                                            này ở đầu thế kỉ 21. Cùng PhimMoi chờ đợi bản HD Vietsub cho phim này nhé 😀
                                        </div>
                                        <div onclick="showElement()" class="thugon" data-toggle="collapse"
                                            data-target="#content--showmore">Thu gọn nội dung</div>
                                    </div>
                                    <div class="containt--trailer">
                                        <div id="trailer" class="trailer--title">
                                            TRAILER PHIM <?php echo $value['namemovie_vn']; ?>
                                        </div>
                                       
                                        <iframe class="trailer--video" width="560" height="415" src="<?php echo $value['link_trailer']; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                         
                                    </div>
                                    <div class="containt--keyword">
                                        <div class="keyword--name"><?php echo $value['namemovie_vn'] ?></div>
                                        <div class="keyword--text">
                                          <?php echo $value['trailer_des']; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="detail--left-mid">
                            <div class="detial--comment">
                                <div class="comment--title">
                                    Bình Luận Phim <?php echo $value['namemovie_vn']; ?>
                                </div>
                                <div class="comment-main">
                                    <div class="comment--main-header">
                                        <span class="comment--header-remind">Đừng quên like fanpage <a
                                                class="link--main" href="">PhimQui.net</a> nhé</span>
                                        <button class="comment-header-like"><i class="like-icon fas fa-thumbs-up"></i>
                                            Like 10,1k</button>
                                        <div class="numcomsort">
                                            <div class="number--comment">Số lượng bình luận</div>
                                            <div class="comment--sort"> Sắp xếp theo
                                                <select name="cars" id="cars">
                                                    <option value="volvo">Mới nhất</option>
                                                    <option value="saab">Cũ nhất</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="comment--main-container">
                                        <form action="addcomment.php" method="post">
                                        <div class="addcomment">
                                            <img class="avartar--comment" src="./img/avatarcomment1.png" alt="">
                                            <textarea class="txtcomment" placeholder="Thêm bình luận..." id="txtid"
                                                name="commenttxt" rows="4" cols="50" maxlength="200"></textarea>
				                        	<input type="hidden" name="id" value="<?php echo $id; ?>">  
				                        	<input type="hidden" name="username" value="<?php echo $username; ?>">                                           

                                            <i class="icon--camara-comment fas fa-camera"></i>
                                        </div>
                                        <div>
                                            <button name="submit" class="addcomment--button">Thêm bình luận </button>
                                        </div>
                                        </form>
                                        <?php 
                                        $getComment = $move->getComment($id);
                                       
                                        foreach($getComment as $value_comment):
                                          
                                        ?>

                                        <div class="viewcomment">
                                            <img class="avartar--comment" src="./img/avatarcomment1.png" alt="">
                                            <div class="nametext--comment">

                                                <div class="name--comment"><?php echo $value_comment['username']; ?></div>
                                               
                                                <div class="text--comment"><?php echo $value_comment['comment_text']; ?></div>
                                                <div class="like--feedback">
                                                    <span class="like--comment">Thích</span>
                                                    <span class="feedback--comment">Phản hồi</span>
                                                </div>                                  
                                            </div>
                                         

                                            <div class="icon--operation-comment">
                                                <i class="icon--operation fas fa-chevron-down"></i>
                                                <ul class="operation-comment">
                                                    <li class="menu--operation-comment">
                                                        Thu gọn bình luận
                                                    </li>
                                                    <li class="menu--operation-comment">
                                                        Đánh dầu là spam
                                                    </li>
                                                    <li class="menu--operation-comment">
                                                        Báo cáo với facebook
                                                    </li>
                                                    <li class="menu--operation-comment">
                                                        Nhúng
                                                    </li>
                                                </ul>
                                            </div>

                                        </div>
                                        <?php 
                                        
                                         endforeach; 
                                    ?>
                                    </div>
                                    <button onclick="showComment()" class="viewadd--comment">Xem tất cả bình
                                        luận</button>
                                </div>
                            </div>
                        </div>
                        <div class="likewatch">
                            <div class="title--likewatch">
                                <h2 class="title">CÓ THỂ BẠN THÍCH XEM</h2>
                            </div>
                           
                            <div class="likewatch--container">              
                                <ul class="likewatch--main">
                                <?php 
                                    $getMoveByTypeId = $move->getMoveByTypeId($value['type_id']);
                                    foreach($getMoveByTypeId as $typemove_value):
                                    ?>
                                    <a href="detail.php?id=<?php echo $value['id'];?>">
                                    <li class="movielike">
                                        
                                        <img class="img--movielike" src="./img/<?php echo $typemove_value['image'] ?>" alt="">
                                        <div class="nameyear">
                                            <div class="namevn"><?php echo $typemove_value['namemovie_vn'];?></div>
                                            <div class="nameel"><?php echo $typemove_value['namemovie_el']; ?></div>
                                            <div class="yearmanu"><?php echo $typemove_value['year_manu']; ?></div>
                                        </div>
                                   
                                    </li>          
                                    </a>
                                    <?php endforeach; ?>                    
                                </ul>                              
                            </div>                        
                        </div>
                    </div>
                    <div class="detail-right col-4">
                        <div class="upcoming--movie">
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
                                                <p class="list--upcoming-viewer"><?php echo $value['view']; ?>k</p>
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
                        <div class="bohot--movie">
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
                                     
                                            <?php $getMoveBoHot = $move->getMoveBoHot();
                                               foreach($getMoveBoHot as $value): 
                                            ?> 
                                              <a href="detail.php?id=<?php echo $value['id'] ?>">
                                            <div class="upcoming--movie-view">

                                                <img class="img--list-upcoming" src="./img/<?php echo $value['image'];?>" alt="">

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
                                            </a>
                                            <?php  endforeach; ?>
                                       
                                   
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="hotmovies--movie">
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
                <?php
            endforeach;
        endif;

             ?>
            </div>
    
        </div>
    </container>
<?php include "footer.php";?>