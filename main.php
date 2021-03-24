<?php include('config/koneksi.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Peer Login</title>
    <link rel="stylesheet" type="text/css" href="stylest.css">
    
</head>
<body>

    <div class="container">
        <div class="header">
            <?php
                session_start();
                if($_SESSION['level'] == ""){
                    header("location:index.php?pesan=gagal");
                }

    			if(empty($_GET['page']) OR $_GET['page'] == NULL) {
        			include('content/home.php');
    			} elseif(!empty($_GET['page']) && $_GET['page'] == 'tambah') {
        			include('content/tambah.php');
    			} elseif(!empty($_GET['page']) && $_GET['page'] == 'tambah_proposal'){
                    include('content/tambah_proposal.php');
                } elseif(!empty($_GET['page']) && $_GET['page'] == 'testambah'){
                    include('content/testambah.php');
                } elseif(!empty($_GET['page']) && $_GET['page'] == 'detail') {
    				include('content/detail.php');
    			} elseif(!empty($_GET['page']) && $_GET['page'] == 'update') {
    				include('content/update.php');
    			} elseif(!empty($_GET['page']) && $_GET['page'] == 'delete') {
    				include('content/delete.php');
    			} elseif(!empty($_GET['page']) && $_GET['page'] == 'proposal') {
                    include('content/home_proposal.php');
                } elseif(!empty($_GET['page']) && $_GET['page'] == 'archive') {
                    include('content/archive.php');
                } elseif(!empty($_GET['page']) && $_GET['page'] == 'archive_proposal') {
                    include('content/archive_proposal.php');    
                } elseif (!empty($_GET['page'] && $_GET['page'] == 'detail_proposal')) {
                    include('content/detail_proposal.php');
                } elseif (!empty($_GET['page'] && $_GET['page'] == 'footerpage')) {
                    include('content/footerheaderpage.php');
                }
  			?>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>