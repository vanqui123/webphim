<?php class Move extends Db {
    public function getFeaturedMovies(){
        $sql = self::$connection->prepare("SELECT *  FROM `movie`  WHERE  `view` > 5");
        $sql->execute();
        $item = array();
        $item = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $item;

    }
    public function getNewMoveLe(){
        $sql = self::$connection->prepare("SELECT * FROM `movie` WHERE `phimle_id`=  14");
        $sql->execute();
        $item = array();
        $item = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $item;
    }
    public function getNewMoveLe8(){
        $sql = self::$connection->prepare("SELECT * FROM `movie` WHERE `phimle_id`=14 LIMIT 8");
        $sql->execute();
        $item = array();
        $item = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $item;
    }
    public function getNewMoveBo(){
        $sql = self::$connection->prepare("SELECT * FROM `movie` WHERE `phimbo_id`=11");
        $sql->execute();
        $item= array();
        $item = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $item;

    }
    public function getNewMoveBo8(){
        $sql = self::$connection->prepare("SELECT * FROM `movie` WHERE `phimbo_id`=11 LIMIT 8");
        $sql->execute();
        $item= array();
        $item = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $item; 
    }
    public function getMoveAnime(){
        $sql = self::$connection->prepare("SELECT * FROM `movie` WHERE `type_id`=10");
        $sql->execute();
        $item = array();
        $item = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $item;
    }
    public function getMoveTheter(){
        $sql = self::$connection->prepare("SELECT * FROM `movie` WHERE `type_id`=16");
        $sql->execute();
        $item = array();
        $item = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $item; 
    }
    public function getMoveLeHot(){
        $sql = self::$connection->prepare("SELECT * FROM `movie` WHERE `phimle_id` >0 and `view`>10");
        $sql->execute();
        $item = array();
        $item = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $item;
    }
    public function getMoveFirstLeHot(){
        $sql = self::$connection->prepare("SELECT * FROM `movie` WHERE `phimle_id` > 0 and `view` >10 LIMIT 1");
        $sql->execute();
        $item = array();
        $item = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $item;
    }
    public function getMoveBoHot(){
        $sql = self::$connection->prepare("SELECT * FROM `movie` WHERE `phimbo_id`>0 and `view`>10");
        $sql->execute();
        $item = array();
        $item = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $item;
    }
    public function getMoveSapChieu(){
        $sql = self::$connection->prepare("SELECT * FROM `movie` WHERE `type_id`=17");
        $sql->execute();
        $item = array();
        $item = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $item; 
    }
    public function getMoveById($id)
    {
        $sql = self::$connection->prepare("SELECT * FROM movie WHERE id=?");
        $sql->bind_param('i', $id);
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items;
    }
    public function getType(){
        $sql = self::$connection->prepare("SELECT * FROM `type_movie`");
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items;
    }
    public function getTypeById($type_id){
        $sql = self::$connection->prepare("SELECT * FROM `type_movie` WHERE `type_id`=?");
        $sql->bind_param('i',$type_id);
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items;
    }
    public function getNationById($nation_id){
        $sql = self::$connection->prepare("SELECT * FROM `nation` WHERE `nation_id` =?");
        $sql->bind_param('i',$nation_id);
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items;
    }
    public function getMoveByTypeId($type_id){
        $sql = self::$connection->prepare("SELECT * FROM movie WHERE `type_id`=?");
        $sql->bind_param('i',$type_id);
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items;
    }
    // tìm kiếm
    function search($keyword){
        $sql = self::$connection->prepare("SELECT * FROM  `movie` WHERE  `namemovie_vn` like ?");
        $keyword ="%$keyword%";
        $sql->bind_param('s',$keyword);
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items;

    }
    // tìm kiếm phân trang
    public function searchPaging($keyword,$page,$perPage){
        $firstLink =($page - 1) * $perPage;
        $sql = self::$connection->prepare("SELECT * FROM `movie` WHERE `namemovie_vn` Like ? LIMIT ?,?");
        $keyword ="%$keyword%";
        $sql -> bind_param('sss',$keyword,$firstLink,$perPage);
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items;     
    }
    // type moive phân trang
    public function typeMoviePaging($type_id,$page,$perPage){
        $firstLink =($page - 1) * $perPage;
        $sql = self::$connection->prepare("SELECT * FROM `movie` WHERE `type_id` Like ? LIMIT ?,?");
        $sql -> bind_param('iss',$type_id,$firstLink,$perPage);
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items;     
    }
    //nation move phân trang
    public function nationMoviePaging($nation_id,$page,$perPage){
        $firstLink =($page - 1) * $perPage;
        $sql = self::$connection->prepare("SELECT * FROM `movie` WHERE `nation_id` Like ? LIMIT ?,?");
        $sql -> bind_param('iss',$nation_id,$firstLink,$perPage);
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items;     
    }
    // phim le phân trang

public function phimLeMoviePaging($phimle_id,$page,$perPage){
        $firstLink =($page - 1) * $perPage;
        $sql = self::$connection->prepare("SELECT * FROM `movie` WHERE `phimle_id` Like ? LIMIT ?,?");
        $sql -> bind_param('iss',$phimle_id,$firstLink,$perPage);
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items;     
    }
    // phim bo phân trang
    
public function phimBoMoviePaging($phimbo_id,$page,$perPage){
    $firstLink =($page - 1) * $perPage;
    $sql = self::$connection->prepare("SELECT * FROM `movie` WHERE `phimbo_id` Like ? LIMIT ?,?");
    $sql -> bind_param('iss',$phimbo_id,$firstLink,$perPage);
    $sql->execute();
    $items = array();
    $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
    return $items;     
}
    function paging($url,$total,$perPage){
        $totalLinks = ceil($total/$perPage);
        $link ="";
        $page = isset($_GET["page"]) ? $_GET["page"] :1;
        for($j =1;$j <= $totalLinks; $j++)
        {
            if($j == $page){
                $link = $link."<li style= '
                background:#03a9f4;
                padding: 10px;
                border-radius: 5px;
                margin-right: 10px;
                '><a href='$url&page=$j'> $j </a></li>";

            }
            else{
                $link = $link."<li
                style= '
                background:#333;
                padding: 10px;
                border-radius: 5px;
                margin-right: 10px;
                '
                ><a href='$url&page=$j'> $j </a></li>";
               }
        }
        return $link;
    }
    public function getNation(){
        $sql = self::$connection->prepare("SELECT * FROM `nation`");
        $sql->execute();
        $items =array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; 
    }
    public function getMoveByNationId($nation_id){
        $sql = self::$connection->prepare("SELECT * FROM `movie` WHERE `nation_id` = ?");
        $sql->bind_param('i',$nation_id);
        $sql->execute();
        $items= array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items;
    }
    public function getPhimLe(){
        $sql = self::$connection->prepare("SELECT * FROM `phimle`");
        $sql->execute();
        $items =array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; 
    }
    public function getMoveByPhimLeId($phimle_id){
        $sql = self::$connection->prepare("SELECT * FROM `movie` WHERE `phimle_id`=?");
        $sql->bind_param('i',$phimle_id);
        $sql->execute();
        $items= array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items;
    }
    public function getPhimBo(){
        $sql = self::$connection->prepare("SELECT * FROM `phimbo`");
        $sql -> execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items;
    }
    public function getMoveByPhimBoId($phimbo_id){
        $sql = self::$connection->prepare("SELECT * FROM `movie` WHERE `phimbo_id`=?");
        $sql->bind_param('i',$phimbo_id);
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items;
    }
    public function updateLike($id){
        
        $sql = self::$connection->prepare("UPDATE `movie` SET `number_like`= `number_like`+1
       WHERE id=?");
        $sql->bind_param('i',$id);
        return $sql->execute();
       
    }
    public function addComment($comment_text,$id,$username){
        $sql = self::$connection ->prepare("INSERT INTO `comment`( `comment_text`, `id`, `username`) VALUES (?,?,?)");
        $sql->bind_param("sis",$comment_text,$id,$username);
        return $sql->execute();
    }
    public function getComment($id){
        $sql = self::$connection->prepare("SELECT * FROM `comment` WHERE `id` = ?");
        $sql->bind_param('i', $id);
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items;
}
    public function getUser($user_id){
        $sql = self::$connection->prepare("SELECT * FROM `user` WHERE `user_id` =?");
        $sql->bind_param('i', $id);
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items;
    }
}