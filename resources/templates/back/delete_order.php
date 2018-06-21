<?php require_once("../../resources/config.php");

if(isset($_GET['delete_order_id'])){
    $query=query("DELETE FROM orders WHERE order_id=".escape_string($_GET['delete_order_id'])." ");
    confirm($query);
    set_message("order ". ($_GET['id'])." is deleted");
    redirect("index.php?orders");
}else{
    redirect("index.php?orders");

}


/**
 * Created by PhpStorm.
 * User: RAY
 * Date: 2018/6/15
 * Time: 17:28
 */