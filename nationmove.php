<?php include "header.php"; ?>
    <container>
        <div class="main-contentner ">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-6">
               
                <?php
                         if(isset($_GET['nation_id'])):
                        $nation_id = $_GET['nation_id'];
                        $getMoveByNationId = $move->getMoveByNationId($nation_id);
                      
                            ?>
                    <div class="theater--movie">

                        <div class="list--phimbochieurap-movie" style="margin-top: 74px;">
                       
                            <div class="list--theater-moive  col-xs-6 col-md-8 col-sm-6" style="margin-top: 3%;">
                               
                              
                                <div class="list-wrapper-theater">
                                <?php  
                                    $perPage = 24;
                                    $page = isset($_GET['page']) ? $_GET['page']:1;
                                     $total = count($getMoveByNationId);
                                     $url = $_SERVER['PHP_SELF']."?nation_id=".$nation_id;
                                     $getMoveByNationId = $move->nationMoviePaging($nation_id,$page,$perPage); 
                                                        
                                foreach($getMoveByNationId as $value):  
                                ?>
                                    <div class="wrapper--theater-movie ">
                                        <a href="detail.php?id=<?php echo $value['id']?>">
                                            <div class="title--theater-HD"><span><?php echo $value['status']; ?></span></div>
                                            <img class="img-theater" src="./img/<?php echo $value['image']; ?>" alt="">
                                            <div class="name--theater-movie">
                                                <span class="name--theater-VN"><?php echo $value['namemovie_vn'] ?></span>
                                                <p class="name--theater-EL"><?php echo $value['namemovie_el'] ?></p>
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
                                       
                           
                        </div>
                      
                           
                    </div>
                              
                              
                                
             
              
                <div class="paging">
                                    <ul class="number_padging">
                                    <?php echo $move->paging($url, $total, $perPage); ?>
                                    </ul>
                </div>
                        
						<?php endif?>
                
            </div>

        </div>
    </container>
 <?php include "footer.php" ?>