<?php
    include('config/koneksi.php'); 
?>
<!DOCTYPE html>
<html>
<head>
    <title>Superior 1</title>
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
        			include('content_admin/home_admin.php');
    			} elseif(!empty($_GET['page']) && $_GET['page'] == 'detail_admin') {
    				include('content_admin/detail_admin.php');
    			} elseif(!empty($_GET['page']) && $_GET['page'] == 'update_admin') {
    				include('content_admin/update_admin.php');
    			} elseif(!empty($_GET['page']) && $_GET['page'] == 'approve') {
                    include('content_admin/approve_admin.php');
                }
  			?>
        </div>
    </div>
</body>
</html>