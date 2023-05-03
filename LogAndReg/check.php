<?php
session_start();
require_once "../conAndFun/conection.php";
require_once "../conAndFun/funcPersonal.php";
?>
<?php
if(isset($_POST['Registration'])){
    insertInfPer();
}elseif (isset($_POST['subLogin'])){
    loginToCms();
}else
{
    header('location:../..');
}
function loginToCms(){
    $arr=array(validate_input($_POST['userName']),validate_input($_POST['password1']));
    try {
           $sql="SELECT * FROM `tbl_inf_personal` WHERE userName=? and password=?";
        $sql=$GLOBALS['appConection']->prepare($sql);
        $sql->execute($arr);
       if($sql->rowCount()){
           $sql=$sql->fetch();
            $_SESSION["idUser"]= $sql['id'];
            header('location:../2083');
        }else{
           header('location:../logAndReg?resultReg=!این کاربر وجود ندارد');
       }
    }catch (PDOException $e){
        echo $e->getMessage();
    }



}

function insertInfPer(){
    $arr=array(validate_input($_POST['nameUser']),validate_input($_POST['family']),validate_input($_POST['tell']),validate_input($_POST['email']),validate_input($_POST['userName']),validate_input($_POST['password1']));
    try {
        $sql="INSERT INTO `tbl_inf_personal`(`nameUser`, `family`,`tell`, `email`, `userName`, `password`) VALUES (?,?,?,?,?,?)";
        $sql=$GLOBALS['appConection']->prepare($sql);
        $sql->execute($arr);
        header('location:../logAndReg/registration.php?resultReg=.ثبت نام موفقیت آمیز بود موفق باشید');
    }catch (PDOException $e){
        if($e->getCode()==23000){
            $res= explode(' ', $e->getMessage());
            echo $res[10].'<br>';
            $res=str_replace( "'",'',$res[10]);
           if($res=='userName'){
               header('location:../logAndReg/registration.php?resultReg=نام کاربری تکراری است');
            }else{
               header('location:../logAndReg/registration.php?resultReg=تلفن تکراری است');

           }
        }else{
            echo $e->getMessage();
        }
    }
}