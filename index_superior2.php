<?php
    include('config/koneksi.php'); 
?>
<!DOCTYPE html>
<html>
<head>
    <title>Superior 3</title>
    <link rel="stylesheet" type="text/css" href="stylest.css">
</head>
<body>
    <div class="container">
        <div class="header">
            <?php
                session_start();
                if ($_SESSION['level'] == ""){
                    header("location:index.php?pesan=gagal");
                }
    			if(empty($_GET['page']) OR $_GET['page'] == NULL) {
        			include('content_admin2/home_admin2.php');
    			} elseif(!empty($_GET['page']) && $_GET['page'] == 'detail_admin2') {
    				include('content_admin2/detail_admin2.php');
    			} elseif(!empty($_GET['page']) && $_GET['page'] == 'update_admin2') {
    				include('content_admin2/update_admin2.php');
    			} elseif(!empty($_GET['page']) && $_GET['page'] == 'approve2') {
                    include('content_admin2/approve_admin2.php');
                }
  			?>
        </div>
    </div>
</body>
</html>