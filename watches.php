<?php include "header.php"; ?>
    <container>
        <div class="container--watches  main--container-watches">
            <div class="main-watches col-md-12 ">
                <?php if(isset($_GET["id"])):
                $id = $_GET["id"];
                $getMoveById = $move->getMoveById($id);  
                foreach( $getMoveById as $value):
                 ?>
                <div class="title--detail">
                    <span> <a href=""> PHIM MỚI</a>/</span>
                    <?php 
                    $getTypeById = $move->getTypeById($value['type_id']);
                    foreach($getTypeById as $value_type):
                    ?>
                    <span> <a href=""> Phim <?php echo $value_type['type_name'];  ?></a>/</span>
                 <?php endforeach; ?>
                    <span> <a href=""><?php echo $value['namemovie_vn'] ?></a></span>
                </div>
                <div class="wrapper--watches">
                    <div class="watches-left col-md-8">

                        <div class="watches--left-top">
                            <div class = "change--active">
                            <div class="watches--left-introimg">
                                <img class="img--watches-intro" src="./img/<?php echo $value['image']; ?>" alt="">
                                <div class="watces--intro">
                                    <div class="namevn">XEM PHIM <?php  echo $value['namemovie_vn']; ?> </div>
                                    <div class="nameel">Xem phim <?php echo $value['namemovie_el']; ?> </div>
                                    <div class="watches--intro-text">
                                     <?php 
                                     echo $value['namemovie_vn']." ".$value['description']; ?>
                                    </div>
                                   <a class="link--watches-intro" href="detail.php?id=<?php echo $value['id'];?>"> [Xem thêm]</a>

                                  
                                </div>
                               
                            </div>
                      
                            <div class="watches--video">
                            

                                <video controls="controls">

                                    <source src="<?php echo $value['link_fim']; ?>" type="video/mp4">
                                    </video>
                            </div>
                            <div class="change--sever">
                             
                                <span class="text--sever">Đổi Sever:</span>
                                <a class="link--sever link--sever-active" href="javascript://;">#1GO</a>
                                <a class="link--sever"  href="javascript://;">#HYx</a>
                                <a class="link--sever"  href="javascript://;">#GDR</a>
                                <a  class="link--sever" href="javascript://;">#VIP</a>
                       
                            </div>
                            <div class="function--whenwatches">
                                <div onclick="myFunctionActive();"  class="function--whenwatches-movie" >
                                    <i  class="watches--light-icon fas fa-lightbulb"></i>
                                    <span  class="watches--light">Tắt đèn</span>
                                   
                                </div>
                                <div onclick = "myFucntionZoom();" class="function--whenwatches-movie" >
                                    <i class="watches--zoom-icon fas fa-search-plus"></i>
                                    <span class="watches--zoom">Phóng to</span>
                                </div>    
                                <div onclick = "myFucntionEpisode();" class="function--whenwatches-movie">
                                    <i class="watches--changeepisode-icon fas fa-step-forward"></i>
                                    <span class="watches--changeepisode">Tự động chuyển tập: <span class="turn--changeepisode">Tắt</span></span>
                                </div> 
                                <div class="function--whenwatches-movie" >
                                    <i class="error--massage-icon fas fa-exclamation-circle"></i>
                                    <span class="error--massage">Báo lỗi</span>
                                </div>  
                                <div class="function--whenwatches-movie" >
                                    <i class="turnof--advertisemen-icon fas fa-ad"></i>
                                    <span class="turnof--advertisement">Tắt quảng cáo</span>
                                </div>                         
                            </div>
                            <div class="rate--movie">
                                <div class="titile--rate-movie">
                                    Đánh giá phim  <span class="view--rate">(256 lượt)</span>
                                </div>
                                <div class="rate--star">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                
                            </div>
                            <div class="detial--comment">
                                     <div class="comment--title">
                                Bình Luận Phim <?php echo $value['namemovie_vn'] ?>
                            </div>
                            <div class="comment-main">
                                <div class="comment--main-header">
                                    <span class="comment--header-remind">Đừng quên like fanpage <a
                                            class="link--main" href="">PhimQ.net</a> nhé</span>
                                    <button class="comment-header-like"><i class="like-icon fas fa-thumbs-up"></i>
                                        Like 10,1k</button>
                                    <div class="numcomsort">
                                        <div class="number--comment">0 bình luận</div>
                                        <div class="comment--sort"> Sắp xếp theo
                                            <select name="cars" id="cars">
                                                <option value="volvo">Mới nhất</option>
                                                <option value="saab">Cũ nhất</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="comment--main-container">
                                    <div class="addcomment">
                                        <img class="avartar--comment" src="./img/avatarcomment1.png" alt="">
                                        <textarea class="txtcomment" placeholder="Thêm bình luận..." id="txtid"
                                            name="txtname" rows="4" cols="50" maxlength="200"></textarea>
                                        <i class="icon--camara-comment fas fa-camera"></i>
                                    </div>
                                    <div class="viewcomment">
                                        <img class="avartar--comment" src="./img/avatarcomment1.png" alt="">
                                        <div class="nametext--comment">
                                            <div class="name--comment">Nguyễn Văn Qúi</div>
                                            <div class="text--comment">Nội dung commemt</div>
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
                                    <div class="viewcomment">
                                        <img class="avartar--comment" src="./img/avatarcomment1.png" alt="">
                                        <div class="nametext--comment">
                                            <div class="name--comment">Nguyễn Văn Qúi</div>
                                            <div class="text--comment">Nội dung commemt</div>
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
                                    <div class="viewcomment">
                                        <img class="avartar--comment" src="./img/avatarcomment1.png" alt="">
                                        <div class="nametext--comment">
                                            <div class="name--comment">Nguyễn Văn Qúi</div>
                                            <div class="text--comment">Nội dung commemt</div>
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
                                    <div class="viewcomment">
                                        <img class="avartar--comment" src="./img/avatarcomment1.png" alt="">
                                        <div class="nametext--comment">
                                            <div class="name--comment">Nguyễn Văn Qúi</div>
                                            <div class="text--comment">Nội dung commemt</div>
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
                                    <div class="viewcomment">
                                        <img class="avartar--comment" src="./img/avatarcomment1.png" alt="">
                                        <div class="nametext--comment">
                                            <div class="name--comment">Nguyễn Văn Qúi</div>
                                            <div class="text--comment">Nội dung commemt</div>
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
                                    <div class="viewcomment">
                                        <img class="avartar--comment" src="./img/avatarcomment1.png" alt="">
                                        <div class="nametext--comment">
                                            <div class="name--comment">Nguyễn Văn Qúi</div>
                                            <div class="text--comment">Nội dung commemt</div>
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
                                    <div class="viewcomment">
                                        <img class="avartar--comment" src="./img/avatarcomment1.png" alt="">
                                        <div class="nametext--comment">
                                            <div class="name--comment">Nguyễn Văn Qúi</div>
                                            <div class="text--comment">Nội dung commemt</div>
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
                                    <div class="viewcomment">
                                        <img class="avartar--comment" src="./img/avatarcomment1.png" alt="">
                                        <div class="nametext--comment">
                                            <div class="name--comment">Nguyễn Văn Qúi</div>
                                            <div class="text--comment">Nội dung commemt</div>
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
                                    <div class="viewcomment">
                                        <img class="avartar--comment" src="./img/avatarcomment1.png" alt="">
                                        <div class="nametext--comment">
                                            <div class="name--comment">Nguyễn Văn Qúi</div>
                                            <div class="text--comment">Nội dung commemt</div>
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
                                    <div class="viewcomment">
                                        <img class="avartar--comment" src="./img/avatarcomment1.png" alt="">
                                        <div class="nametext--comment">
                                            <div class="name--comment">Nguyễn Văn Qúi</div>
                                            <div class="text--comment">Nội dung commemt</div>
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
                                    <div class="viewcomment">
                                        <img class="avartar--comment" src="./img/avatarcomment1.png" alt="">
                                        <div class="nametext--comment">
                                            <div class="name--comment">Nguyễn Văn Qúi</div>
                                            <div class="text--comment">Nội dung commemt</div>
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
                                    <div class="viewcomment">
                                        <img class="avartar--comment" src="./img/avatarcomment1.png" alt="">
                                        <div class="nametext--comment">
                                            <div class="name--comment">Nguyễn Văn Qúi</div>
                                            <div class="text--comment">Nội dung commemt</div>
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
                                    <div class="viewcomment">
                                        <img class="avartar--comment" src="./img/avatarcomment1.png" alt="">
                                        <div class="nametext--comment">
                                            <div class="name--comment">Nguyễn Văn Qúi</div>
                                            <div class="text--comment">Nội dung commemt</div>
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
                                    <div class="viewcomment">
                                        <img class="avartar--comment" src="./img/avatarcomment1.png" alt="">
                                        <div class="nametext--comment">
                                            <div class="name--comment">Nguyễn Văn Qúi</div>
                                            <div class="text--comment">Nội dung commemt</div>
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
                                    <div class="viewcomment">
                                        <img class="avartar--comment" src="./img/avatarcomment1.png" alt="">
                                        <div class="nametext--comment">
                                            <div class="name--comment">Nguyễn Văn Qúi</div>
                                            <div class="text--comment">Nội dung commemt</div>
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
                                    <div class="viewcomment">
                                        <img class="avartar--comment" src="./img/avatarcomment1.png" alt="">
                                        <div class="nametext--comment">
                                            <div class="name--comment">Nguyễn Văn Qúi</div>
                                            <div class="text--comment">Nội dung commemt</div>
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
                                    <div class="viewcomment">
                                        <img class="avartar--comment" src="./img/avatarcomment1.png" alt="">
                                        <div class="nametext--comment">
                                            <div class="name--comment">Nguyễn Văn Qúi</div>
                                            <div class="text--comment">Nội dung commemt</div>
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
                                    <div class="viewcomment">
                                        <img class="avartar--comment" src="./img/avatarcomment1.png" alt="">
                                        <div class="nametext--comment">
                                            <div class="name--comment">Nguyễn Văn Qúi</div>
                                            <div class="text--comment">Nội dung commemt</div>
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
                                    <div class="viewcomment">
                                        <img class="avartar--comment" src="./img/avatarcomment1.png" alt="">
                                        <div class="nametext--comment">
                                            <div class="name--comment">Nguyễn Văn Qúi</div>
                                            <div class="text--comment">Nội dung commemt</div>
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
                                    <div class="viewcomment">
                                        <img class="avartar--comment" src="./img/avatarcomment1.png" alt="">
                                        <div class="nametext--comment">
                                            <div class="name--comment">Nguyễn Văn Qúi</div>
                                            <div class="text--comment">Nội dung commemt</div>
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
                                    <div class="viewcomment">
                                        <img class="avartar--comment" src="./img/avatarcomment1.png" alt="">
                                        <div class="nametext--comment">
                                            <div class="name--comment">Nguyễn Văn Qúi</div>
                                            <div class="text--comment">Nội dung commemt</div>
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
                                    <div class="viewcomment">
                                        <img class="avartar--comment" src="./img/avatarcomment1.png" alt="">
                                        <div class="nametext--comment">
                                            <div class="name--comment">Nguyễn Văn Qúi</div>
                                            <div class="text--comment">Nội dung commemt</div>
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
                                </div>
                                <button onclick="showComment()" class="viewadd--comment">Xem tất cả bình
                                    luận</button>
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
                        </div>
                          
                     
                       

                       
                    </div>
                    <div class="watches--right col-md-4">
                            <div class="upcoming--movie">
                          <div class="title--upcoming-moive">
                            <i class="icon--title-upcoming fas fa-star"></i>
                            <h2 class="title--name-upcoming">PHIM SẮP CHIẾU</h2>
                        </div>
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
                
                <?php  endforeach; 
                endif;
                ?>
            </div>
        </div>

    </container>
<?php include 'footer.php';?>