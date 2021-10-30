<!-- Open Content -->
    <section class="bg-light">
        <div class="container pb-5">
            <div class="row">
                <div class="col-lg-5 mt-5">
                    <div class="card mb-3">
                        <img class="card-img img-fluid" src="<?php echo base_url() . 'image_shop/produk/produkDepan' . $produk[0]->id_produk . '.jpg';?>" alt="Card image cap" id="product-detail">
                    </div>
                    <div class="row">
                        
                        <!--Start Carousel Wrapper-->
						<center>
                        <div id="multi-item-example" class="col-10 carousel slide carousel-multi-item" data-bs-ride="carousel">
                            <!--Start Slides-->
                            <div class="carousel-inner product-links-wap" role="listbox">
								<div class="carousel-item active">
                                    <div class="row">
                                        <div class="col-6">
                                            <a href="#">
                                                <img class="card-img img-fluid" src="<?php echo base_url() . 'image_shop/produk/produkDepan' . $produk[0]->id_produk . '.jpg';?>" alt="Product Image 1">
                                            </a>
                                        </div>
                                        <div class="col-6">
                                            <a href="#">
                                                <img class="card-img img-fluid" src="<?php echo base_url() . 'image_shop/produk/produkBelakang' . $produk[0]->id_produk . '.jpg';?>" alt="Product Image 2">
                                            </a>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            <!--End Slides-->
                        </div>
						</center>
                        <!--End Carousel Wrapper-->
						
                    </div>
                </div>
                <!-- col end -->
                <div class="col-lg-7 mt-5">
                    <div class="card">
                        <div class="card-body">
                            <h1 class="h2"><?php echo $produk[0]->nama_produk; ?></h1>
                            <p class="h3 py-2"><?php echo 'Rp ' . number_format($produk[0]->harga_produk); ?></p>
                            
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <h6>Kategori : </h6>
                                </li>
                                <li class="list-inline-item">
                                    <p class="text-muted"><strong><?php echo $produk[0]->nama_kategori; ?></strong></p>
                                </li>
                            </ul>
							<ul class="list-inline">
                                <li class="list-inline-item">
                                    <h6>Warna :</h6>
                                </li>
                                <li class="list-inline-item">
                                    <p class="text-muted"><strong><?php echo $produk[0]->warna_produk; ?></strong></p>
                                </li>
                            </ul>
							<ul class="list-inline">
                                <li class="list-inline-item">
                                    <h6>Ukuran :</h6>
                                </li>
                                <li class="list-inline-item">
                                    <p class="text-muted"><strong><?php echo $produk[0]->ukuran_produk; ?></strong></p>
                                </li>
                            </ul>
							<ul class="list-inline">
                                <li class="list-inline-item">
                                    <h6>Stok :</h6>
                                </li>
                                <li class="list-inline-item">
                                    <p class="text-muted"><strong>~</strong></p>
                                </li>
                            </ul>

                            <h6>Description:</h6>
                            <p><?php echo $produk[0]->desc_produk; ?></p>
                            <br>
							<div class="row pb-3">
								<div class="col d-grid">
                                    <a href="<?php echo $produk[0]->link_produk; ?>" class="btn btn-warning btn-lg"><i class="fa fa-cart-plus"></i> Buy</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Close Content -->