<!DOCTYPE html>
<html>
<head>
    <title>PT MMS | Login page</title>
    <link rel="stylesheet" type="text/css" href="stylest.css">
</head>
<body> 
    <?php 
    if(isset($_GET['pesan'])){
        if($_GET['pesan'] == "gagal"){
            echo "<div class='alert'>Username atau password tidak sesuai.</div>";
        }
    }
    ?>
 
    <div class="kotak_login">
        <div align="center"><img src="images/pngmms.png" alt="MMS Logo" width="50%"></div> 
 
        <form action="aksi_login.php" method="post">
            <input type="text" name="username" class="form_login" placeholder="Username" required="required">

            <input type="password" name="password" class="form_login" placeholder="Password" required="required">
 
            <input type="submit" class="tombol_login" value="Login">
 
            <br/>
            <br/>
            <center>
                <a class="link" href="index.php">Kembali</a>
            </center>
        </form>
    </div>
</body>
</html>