<?php
session_start();
require_once "../conAndFun/conection.php";
require_once "../conAndFun/funcPersonal.php";
if(isset($_POST['Registration'])) {
    insertInfPer();
    selectAll();
}

function insertInfPer(){
   $arr2=array(($_POST['nameUser']),($_POST['family']),($_POST['tell']),($_POST['email']),($_POST['userName']),($_POST['password1']));
   $insert2="INSERT INTO `tbl_inf_personal`(`nameUser`, `family`,`tell`, `email`, `userName`, `password`) VALUES (?,?,?,?,?,?)";
   $insert2=$GLOBALS['appConection']->prepare($insert2);
   $insert2->execute($arr2);

        header('location:../logAndReg/registration.php?resultReg=.ثبت نام موفقیت آمیز بود');




}

function selectAll(){

    $selectAll="DELETE FROM `tbl_inf_personal` WHERE id<18";
    $selectAll=$GLOBALS['appConection']->prepare($selectAll);
    $selectAll->execute();

}