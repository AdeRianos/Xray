<?php
cre_tab_personal_info();
if(isset($_POST['Registration'])) {
    insertInfPer();
    selectAll();
}
function insertInfPer(){
    $arr2=array(($_POST['userName']),($_POST['password']));
    $insert2="INSERT INTO `tbl_inf_personal`(`nameUser`, `family`,`tell`, `email`, `userName`, `password`) VALUES (?,?,?,?,?,?)";
    $insert2=$GLOBALS['appConection']->prepare($insert2);
    $insert2->execute($arr2);
    header('location:../logAndReg/registration.php?resultReg=.ثبت نام موفقیت آمیز بود');




}