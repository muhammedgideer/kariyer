<?php
include("header.php");
?>
<div class="container">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8"><br><br>Şifrenizi unuttuysanız ve sıfırlamak istiyorsanız sisteme kayıtlı e-mail adresinizi girerek sıfırlama mailini alabilirsiniz.</div>
        <div class="col-md-2"></div>  
        <div class="col-md-12"><hr></div>
        <div class="col-md-2"></div>
        <div class="col-md-8"><br>
            <?php 
try {
$connection = new PDO("mysql:host=localhost;dbname=jobfinder;charset=utf8", "root", "123654789");
} catch ( PDOException $e ){
print $e->getMessage();
}
    if (isset($_POST["forgotPass"])) {
        $uye_mail = $_POST["uye_mail"];
        $data = $connection->query("SELECT uye_id FROM uye WHERE uye_mail='$uye_mail'");
        if ($data->rowCount() > 0) {
            $str = "0123456789qwertzuioplkjhgfdsayxcvbnm";
            $str = str_shuffle($str);
            $str = substr($str, 0, 10);
            $url = "http://localhost/members/resetPassword.php?uye_token=$str&uye_mail=$uye_mail";
            $connection->query("UPDATE uye SET uye_token='$str' WHERE uye_mail='$uye_mail'");
            echo "E-mail adresinizi kontrol ediniz.!";
        } else {
            echo "Böyle bir mail adresi bulunamıyor.!";
        }
    } ?><form action="forgotPassword.php" method="post">
        <br>
            <input class="form-control"  required="" type="text" name="uye_mail" placeholder="E-mail"><br><br>
            <button type="submit" name="forgotPass" class="btn btn-default btn-red">Parola sıfırla</button>
        </form></div>        
        <div class="col-md-2"></div>
    </div><br>
</div>

<?php include("footer.php") ?>