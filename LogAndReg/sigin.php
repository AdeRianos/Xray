
<?php
include_once 'head.php';
?>
<style>
    #conRegistration{
        width: 450px;
        margin-top: 125px;
        border-radius: 5px;
    }
    #conRegistration img{background: #1ccacd;width: 20%;border-radius: 50px;padding: 0.5%}
    #conRegistration img:hover{background:hotpink}
    #formRegistr span{text-align: right;font-size: 1.2rem;padding-right: 190px;color: #6664ab}
    #formRegistr input[type=text],input[type=password],input[type=email]{width: 65%;height: 27px;font-size: 1rem;padding-right: 5px; box-sizing: border-box;}
    #formRegistr input[type=submit], input[type=reset]{width: 50%;height: 27px;font-size: 1rem;padding-right: 5px}
    #formRegistr:nth-child(odd){background: #4DC7A0}

</style>

<div id="conRegistration" class="center shadow1">
    <?php
    if(isset($_GET['resultReg'])){
        ?>
        <div class="container">
            <span style="color: lightblue;font-size: 1.2rem"><?php echo $_GET['resultReg']?></span>
        </div>
        <?php
    }
    ?>

    <div class="container ">
        <a href="../" >  <img src="../image/logo2.png" alt="logo"><alt="استان البرز"></a>
        <form id="formRegistr" name="formRegistr" class="container" method="post" onsubmit="return valDatForReg()" action="ActinoTest.php" >
            <span class="container">نام</span>
            <input class="chekemptytextbox cheInsPerCha" type="text" name="nameUser"  placeholder="نام را وارد کنید" minlength="3" maxlength= "50" required title="لطفا نام را درست وارد کنید" name="name">
            <div class="container ">
                <span class="container">نام خانوادگی</span>
                <input class="chekemptytextbox cheInsPerCha" type="text" name="family" placeholder="نام خانوادگی را وارد کنید"minlength="3" maxlength= "50" required title="لطفا نام خانوادگی را درست وارد کنید" name="family">
            </div>
            <div class="container">
                <span class="container">تلفن</span>
                <input class="chekemptytextbox cheInsNumCha" type="text" name="tell" placeholder="شماره تلفن خود را وارد کنید" minlength="11" maxlength= "11" required title="لطفا تلفن را درست وارد کنید" name="tell">
            </div>
            <div class="container">
                <span class="container">ایمیل</span>
                <input class="chekemptytextbox" type="email" name="email" placeholder="ایمیل خود را وارد کنید" minlength="10" maxlength= "50" required title="لطفا ایمیل را درست وارد کنید" name="email">
            </div>
            <div class="container">
                <span class="container">نام کاربری</span>
                <input class="chekemptytextbox cheInsEngAndNumCha" type="text"  name="userName" placeholder="نام کاربری را وارد کنید" minlength="6" maxlength= "20" required title="نام کاربری را درست وارد کنید" name="user">
            </div>
            <div class="container">
                <span class="container">رمز عبور</span>
                <input class="chekemptytextbox cheInsEngAndNumCha" type="password" id="password1" name="password1" placeholder="رمز عبور را وارد کنید" minlength="6" maxlength= "12" required title=" رمز را وارد کنید" name="pass">
            </div>
            <div class="container">
                <span class="container">تکرار رمز عبور</span>
                <input class="chekemptytextbox cheInsEngAndNumCha equPassword"type="password" id="password2" name="password2" placeholder="تکرار رمز عبور را وارد کنید" minlength="6" maxlength="12" required title="تکرار رمز را وارد کنید" name="pass">
            </div>
            <div class="container pading10">
                <div class="col-6">
                    <input  type="submit" name="Registration" id="Registration" value="ثبت نام">
                </div>
                <div class="col-6">
                    <button placeholder="انصراف" style="height:25px;font-size:15px;width: 100px"><a href="index2.html">انصراف</a></button>
                </div>
            </div>
        </form>
    </div>

</div>
<script>
    $(document).ready(function (){
        $("#Registration").click(function (){
            if (valDatForReg()){
                $('#formRegistr').attr('action', 'check.php');
            }
        })
    })
    function valDatForReg(){
        return validateForm('formRegistr');
    }
</script>


