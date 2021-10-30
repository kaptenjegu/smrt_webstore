<!DOCTYPE html>
<html lang="en">

<head>
    <title>Sambat Ragat Project®</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>image_utama/logo-ikon.png">

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/templatemo.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/custom.css">

    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/fontawesome.min.css">
<!--
    
TemplateMo 559 Zay Shop

https://templatemo.com/tm-559-zay-shop

-->
</head>

<body>
   
    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-light shadow">
        <div class="container d-flex justify-content-between align-items-center">

            <a class="logo align-self-center" href="<?php echo base_url(); ?>../">
                <img src="<?php echo base_url(); ?>image_utama/logo-black.png" alt="LOGO">
            </a>

            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#templatemo_main_nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between" id="templatemo_main_nav">
                <div class="flex-fill">
                    <ul class="nav navbar-nav d-flex justify-content-between mx-lg-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url(); ?>produk/kategori/all">All Product</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url(); ?>produk/kategori/1">Tshirt</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url(); ?>produk/kategori/2">Hoodie</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url(); ?>produk/kategori/3">Aksesoris</a>
                        </li>
                    </ul>
                </div>
                <div class="navbar align-self-center d-flex">
                    <div class="d-lg-none flex-sm-fill mt-3 mb-4 col-7 col-sm-auto pr-3">
					<form action="<?php echo base_url(); ?>produk/cari/" method="GET">
                        <div class="input-group">
                            <input type="text" name="produk" class="form-control" id="inputMobileSearch" placeholder="Search ...">
                            <button type="submit" class="input-group-text bg-success text-light">
								<i class="fa fa-fw fa-search text-white"></i>
							</button>
                        </div>
					</form>
                    </div>
                    <a class="nav-icon d-none d-lg-inline" href="#" data-bs-toggle="modal" data-bs-target="#templatemo_search">
                        <i class="fa fa-fw fa-search text-dark mr-2"></i>
                    </a>
                    <a class="nav-icon position-relative text-decoration-none" href="#">
                        <i class="fa fa-fw fa-cart-arrow-down text-dark mr-1"></i>
                        <span class="position-absolute top-0 left-100 translate-middle badge rounded-pill bg-light text-dark">0</span>
                    </a>
                    <a class="nav-icon position-relative text-decoration-none" href="#">
                        <i class="fa fa-fw fa-user text-dark mr-3"></i>
                        <span class="position-absolute top-0 left-100 translate-middle badge rounded-pill bg-light text-dark">0</span>
                    </a>
                </div>
            </div>

        </div>
    </nav>
    <!-- Close Header -->

    <!-- Modal -->
    <div class="modal fade bg-white" id="templatemo_search" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="w-100 pt-1 mb-5 text-right">
                <button type="button" class="btn btn-danger"  data-bs-dismiss="modal" aria-label="Close">X</button>
            </div>
            <form action="<?php echo base_url(); ?>produk/cari/" method="GET" class="modal-content modal-body border-0 p-0">
                <div class="input-group mb-2">
                    <input type="text" class="form-control" id="inputModalSearch" name="produk" placeholder="Search ...">
                    <button type="submit" class="input-group-text bg-success text-light">
                        <i class="fa fa-fw fa-search text-white"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>
	
	<?php
	if($page == 'kategori'){
		include 'produk_kategori.php';
	}
	if($page == 'cari'){
		include 'produk_cari.php';
	}
	if($page == 'detail'){
		include 'produk_detail.php';
	}
	?>
	
    <!-- Start Footer -->
    <footer id="tempaltemo_footer" style="background-color:#f8f9fa;border-upper-color: 1px black;">
        <div class="container">
            <div class="row">

                <div class="col-md-4 pt-5">
                    <h4>FOLLOW US</h4>
                    <ul class="list-inline text-left footer-icons">
						<li class="list-inline-item border border-light rounded-circle text-center">
                            <a class="text-light text-decoration-none" target="_blank" href="https://www.instagram.com/smrtproject_/"><i class="fab fa-instagram fa-lg fa-fw"></i></a>
                        </li>
                        <li class="list-inline-item border border-light rounded-circle text-center">
                            <a class="text-light text-decoration-none" target="_blank" href="https://www.facebook.com/smrtproject"><i class="fab fa-facebook-f fa-lg fa-fw"></i></a>
                        </li>
                        <li class="list-inline-item border border-light rounded-circle text-center">
                            <a class="text-light text-decoration-none" target="_blank" href="https://www.youtube.com/channel/UCx3QU-ENmiowYm4UwYbZNkg"><i class="fab fa-youtube fa-lg fa-fw"></i></a>
                        </li>
                    </ul>
                </div>

                <div class="col-md-4 pt-5">
                </div>

                <div class="col-md-4 pt-5">
                    <h4>INFO</h4>
                    <ul class="list-unstyled" >
                        <li><a class="text-decoration-none" style="color: black;" href="<?php echo base_url(); ?>../#about">Tentang Kami</a></li>
                        <li><a class="text-decoration-none" style="color: black;" href="<?php echo base_url(); ?>../contact_us.php">Custom Desain Tshirt Sendiri</a></li>
                        <!--li><a class="text-decoration-none" style="color: black;" href="#">Terms & Condition</a></li-->
                    </ul>
                </div>
				
            </div>
			<br><br>
           
        </div>

        <div class="w-100 bg-black py-3">
            <div class="container">
                <div class="row pt-2">
                    <div class="col-12">
					<center>
                        <p class="text-left text-light">
                            Copyright &copy; 2021 Smrt Project
                            | Template by <a rel="sponsored" href="https://templatemo.com" target="_blank">TemplateMo</a> 
							| Edit and system by <a rel="sponsored" href="#" target="_blank">kaptenjegu </a>
                        </p>
					</center>
                    </div>
                </div>
            </div>
        </div>

    </footer>
    <!-- End Footer -->

    <!-- Start Script -->
    <script src="<?php echo base_url(); ?>assets/js/jquery-1.11.0.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/templatemo.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/custom.js"></script>
    <!-- End Script -->
</body>

</html>