<?php
    include('config/koneksi.php'); 
?>
<!DOCTYPE html>
<html>
<head>
    <title>Superior 2</title>
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
        			include('content_admin1/home_admin1.php');
    			} elseif(!empty($_GET['page']) && $_GET['page'] == 'detail_admin1') {
    				include('content_admin1/detail_admin1.php');
    			} elseif(!empty($_GET['page']) && $_GET['page'] == 'update_admin1') {
    				include('content_admin1/update_admin1.php');
    			} elseif(!empty($_GET['page']) && $_GET['page'] == 'approve1') {
                    include('content_admin1/approve_admin1.php');
                }
  			?>
        </div>
    </div>
</body>
</html>