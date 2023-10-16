<?php 
    function loadall_sp(){
        $sql = 'SELECT * from sanpham where 1 order by iddm desc';
        $result = pdo_query($sql);
        return $result;
    }
    function load_sp_dm($keyw='',$iddm = 0){
        $sql = 'SELECT * from sanpham where 1 and ';
        if(!empty($keyw)){
            $sql .= "name like '%".$keyw."'";
        }
        if($iddm!=0){
            $sql .= "iddm =".$iddm;
        }
        $sql .= "order by id desc";
        $result = pdo_query($sql);
        return $result;
    }
    function load_5sp_popular($iddm){
        $sql = "SELECT * from sanpham where 1 ";
        if($iddm > 0){
            $sql .= " and iddm = ". $iddm ; 
        }
        $sql .= " order by luotxem desc limit 0,5";
        $result = pdo_query($sql);
        return $result;
    }
    
    function load_1sp($id){
        $sql = 'SELECT * from sanpham where 1 and id= '. $id;
        $result = pdo_query_one($sql);
        return $result;
    }
    function add_sp($name , $price , $img , $mota , $iddm){
        $sql = "INSERT INTO `sanpham`( `name`, `price`, `img`, `mota`, `iddm`)
        VALUE ('$name','$price','$img','$mota','$iddm')";
        pdo_execute($sql);
    }
    function edit_sp($id, $name , $price , $img , $mota , $iddm){
        $sql = "UPDATE `sanpham` SET
        `name`='$name',`price`='$price',`img`='$img',`mota`='$mota',`iddm`='$iddm' WHERE id=".$id;
        pdo_execute($sql);
    }
    function delete_sp($id){
        $sql = "DELETE FROM `sanpham` WHERE id=".$id;
        pdo_execute($sql);
    }