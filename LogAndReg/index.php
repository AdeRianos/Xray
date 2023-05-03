<?php
include_once 'head.php';
?>
<style>
    #forLogin{width: 400px;background:white;margin-top: 100px;border-radius: 5px}
    #logImg img{background: #1ccacd;width: 18%;border-radius: 50px;padding: 1%}
    #logImg img:hover{background:#3a945b}
    #forLogSit input[type=text]{width: 70%;height: 30px;font-size: 1rem}
    #forLogSit input[type=password]{width: 70%;height: 30px;font-size: 1rem}
    #forLogSit input[type=submit]{width: 20%;height: 30px;font-size: 1rem;float: left;margin-left: 10px;}
</style>
<div class="container">
    <div id="forLogin" class="center shadow1">
        <?php
        if(isset($_GET['resultReg'])){
            ?>
            <div class="container">
                <span style="color: #ff253a;font-size: 1.2rem"><?php echo $_GET['resultReg']?></span>
            </div>
            <?php
        }
        ?>
        <div class="container" id="logImg">
            <a href="../" ><img src="../image/logo.png" alt="لوگو سایت"></a>
            <form id="forLogSit" name="forLogSit" class="container" method="post" onsubmit="return validatLogin()">
                <div class="container pading10"  >
                    <input class="chekemptytextbox cheInsEngAndNumCha" type="text"  name="userName" minlength="6" maxlength= "20" placeholder="نام کاربری را وارد کنید"  required title="نام کاربری را درست وارد کنید">
                </div>
                <div class="container pading10">
                    <input class="chekemptytextbox cheInsEngAndNumCha" type="password" name="password1" minlength="6" maxlength="12" title="رمزعبور را درست وارد کنید" placeholder="رمز عبور خود را وارد کنید">
                </div>
                <div class="container" style="text-align: right;margin-right: 20px">
                    <input type="checkbox">
                    <span>مرا به خاط بسپار</span>
                </div>
                <div class="container" >
                    <input type="submit" name="subLogin" id="subLogin"  value="ورود">
                </div>
            </form>
            <div class="container pading10">
                <div class="col-5">
                    <span>رمز خود را فراموش کرده ام</span>
                </div>
                <div class="col-2"><span>/</span>
                </div>
                <div class="col-5"><a href="index2.html">ثبت نام</a>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
<script>
    $(document).ready(function (){
        $("#subLogin").click(function (){
            if (validatLogin()){
                $('#forLogSit').attr('action', 'check.php');
            }
        })
    })
    function validatLogin(){
        return validateForm('forLogSit');
    }
</script>
