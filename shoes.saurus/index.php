<?php
    
    session_start();
    include_once("function/koneksi.php");
    include_once("function/helper.php");

    $page = isset($_GET['page']) ? $_GET['page'] : false;

    $user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : false;
    $user_id = isset($_SESSION['nama']) ? $_SESSION['nama'] : false;
    $user_id = isset($_SESSION['level']) ? $_SESSION['level'] : false;
    
?>

<!DOCTYPE html>
<html>
<head>
	<title>shoes.saurus</title>
	<link href="<?php echo BASE_URL."css/sttyle.css"; ?>" type="text/css"rel="stylesheet"/>
</head>
<body>
	<div id="container">
		<div id="header">

			<div id="menu">
				<div id="user">

						<?php
                            if ($user_id) {
                                echo
                                "<a href='".BASE_URL."index.php?page=my_profile&module=home&action=list'>My Profile</a>
								<a href= '".BASE_URL."logout.php'>Logout<a/>";
                            }

                            // else
                            // {
                            // 	echo "<a href='".BASE_URL."index.php?page=login'>ACCOUNT</a>
                            // 		<a href='".BASE_URL."index.php?page=register'>REGISTER</a>";
                            // }
                            ?>

					<div id="kiri">
						<a href="<?php echo BASE_URL. "index.php?page=keranjang"; ?>" id="kanan">IDR</a>
						<a href="<?php echo BASE_URL. "index.php?page=login"; ?>">ACCOUNT</a>
						<a href="<?php echo BASE_URL. "index.php?page=register"; ?>">REGISTER</a>
						<a href="<?php echo BASE_URL. "index.php?page=keranjang"; ?>">CART</a>
					</div>

					<div id="logo">
						<a href="<?php echo BASE_URL."index.php?page=home"; ?>">
							<img src="<?php echo BASE_URL."images/logo.jpg"; ?>" />
						</a>
					</div>


					<?php

                    if ($user_id) {
                        $module = isset($_GET['module']) ? $_GET['module'] : false;
                        $action = isset($_GET['action']) ? $_GET['action'] : false;
                        $mode = isset($_GET['mode']) ? $_GET['mode'] : false;
                    } else {
                        header("location:".BASE_URL."index.php?page=login");
                    }

                     ?>

					<div id="tengah">
						<a 	<?php if ($module =="newarrival") {
                         echo "class='active'";
                     } ?>
							href="<?php echo BASE_URL. "index.php?page=my_profile&module=newarrival&action=list"; ?>">NEW ARRIVAL  </a>
						
						<a 	<?php if ($module =="categories") {
                         echo "class='active'";
                     } ?>
							href="<?php echo BASE_URL. "index.php?page=my_profile&module=categories&action=list"; ?>">CATEGORIES  </a>
						
						<a 	<?php if ($module =="brand") {
                         echo "class='active'";
                     } ?>
							href="<?php echo BASE_URL. "index.php?page=my_profile&module=brand&action=list"; ?>">BRAND  </a>
						
						<a 	<?php if ($module =="membership") {
                         echo "class='active'";
                     } ?>
							href="<?php echo BASE_URL. "index.php?page=my_profile&module=membership&action=list"; ?>">SHOES SAURUS MEMBERSHIP  </a>
						
						<a <?php if ($module =="konfirmasipembayaran") {
                         echo "class='active'";
                     } ?>
							href="<?php echo BASE_URL. "index.php?page=my_profile&module=konfirmasipembayaran&action=list"; ?>">KONFIRMASI PEMBAYARAN  </a>
					</div>

				</div>
			</div>
		</div>

		<div id="content">
			 <?php
                $filename = "$page.php";
                if (file_exists($filename)) {
                    include_once($filename);
                } else {
                    echo "Maaf file tersebut tidak ada.";
                }
              ?>
		</div>

		<div id="footer">
			<a href="<?php echo BASE_URL. "index.php?page=konfirmasi"; ?>"> KONFIRMASI PEMBAYARAN</a>
		</div>
	</div>
</body>
</html>