<?php 
session_start();
require "config.php";
require "model/db.php";
require "model/moves.php";

$move = new Move;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/styledetail.css">
    <link rel="stylesheet" href="css/watches.css">
    <title>Phim Qúi</title>
</head>

<body>
    <header>
        <div class="top-header">
            <div class="header-container">
                <div class="logo_header">
                    <img class="logo" src="./img/logo.png" alt="">
                </div>
                <div class="serch_header">
                    <form method="get" action="serch.php">
                        <input class="serch" type="text" name="keyword" placeholder="Tim:tên phim,đạo diễn,diễn viên">
                        <input class="serch_icon" type="submit" value="" id="serchsubmit">

                    </form>

                </div>
                <ul class= "loginSign">
                <?php if(!isset($_SESSION['user'])){ ?>
                <li><a href="login/index.php"><i style="margin-right: 10px;" class="fa-solid fa-user"></i>Đăng Nhập/Đăng Ký</a></li>              
             <?php } else { ?>
			    <li><a href="#"><i class="fa-solid fa-user"></i>  <?php echo $_SESSION['user'];?> </a></li>
                <li><a onclick="return confirm('Bạn có muốn đăng xuất không')" href="model/logout.php"><i</i>/ Logout </a></li>
                <?php } ?>
             </ul>
            </div>
         
            <div class="nav_header">
                <ul class="nav justify-content-center nav--header-container">
                    <li class="nav-item ">
                        <a class="nav-link nav--link-header active" href="index.php">PHIM MỚI</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav--link-header" href="#">THỂ LOẠI</a>
                   
                        <div class="sub--nav-header">
                       
                            <ul class="sub-nav">
                            <?php 
                                    $getType = $move->getType();
                                    foreach ($getType as $value):
                                    ?>    
                                   
                                <div class="sub">  
                                <a class href="typemove.php?type_id=<?php echo $value['type_id'];?>">    
                                    <li class="sub--nav-item"><?php echo $value['type_name']; ?></li>
                                    </a>
                                </div>
                             
                                <?php endforeach; ?>

                            </ul>
                          
                        </div>
                   
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav--link-header" href="#">QUỐC GIA</a>
                   
                        <div class="sub--nav-header">
                       
                            <ul class="sub-nav">
                            <?php 
                                    $getNation = $move->getNation();
                                    foreach ($getNation as $value):
                                    ?>    
                                   
                                <div class="sub">  
                                <a class href="nationmove.php?nation_id=<?php echo $value['nation_id'];?>">    
                                    <li class="sub--nav-item"><?php echo $value['nation_name']; ?></li>
                                    </a>
                                </div>
                             
                                <?php endforeach; ?>

                            </ul>
                          
                        </div>
                   
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav--link-header" href="#">PHIM LẺ</a>
                   
                        <div class="sub--nav-header">
                       
                            <ul class="sub-nav">
                            <?php 
                                    $getPhimLe = $move->getPhimLe();
                                    foreach ($getPhimLe as $value):
                                    ?>    
                                   
                                <div class="sub">  
                                <a class href="phimle.php?phimle_id=<?php echo $value['phimle_id'];?>">    
                                    <li class="sub--nav-item"><?php echo $value['phimle_name']; ?></li>
                                    </a>
                                </div>
                             
                                <?php endforeach; ?>

                            </ul>
                          
                        </div>
                   
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav--link-header" href="#">PHIM BỘ</a>
                   
                        <div class="sub--nav-header">
                       
                            <ul class="sub-nav">
                            <?php 
                                    $getPhimBo = $move->getPhimBo();
                                    foreach ($getPhimBo as $value):
                                    ?>    
                                   
                                <div class="sub">  
                                <a class href="phimbo.php?phimbo_id=<?php echo $value['phimbo_id'];?>">    
                                    <li class="sub--nav-item"><?php echo $value['phimbo_name']; ?></li>
                                    </a>
                                </div>
                             
                                <?php endforeach; ?>

                            </ul>
                          
                        </div>
                   
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link nav--link-header" href="#">PHIM THUYẾT MINH</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav--link-header" href="#">TRAILER</a>
                    </li>

                </ul>
            </div>
          

        </div>

    </header>