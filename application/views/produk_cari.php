
    <!-- Start Content -->
    <div class="container py-5">
        <div class="row">
			<div class="col-lg-12">
                
                <div class="row">
				<?php if($produk){foreach($produk as $p){ ?>
                    <div class="col-md-4">
                        <div class="card mb-4 product-wap rounded-0">
                            <div class="card rounded-0">
                                <img class="card-img rounded-0 img-fluid" src="<?php echo base_url() . '/image_shop/produk/produkDepan' . $p->id_produk . '.jpg'; ?>">
                                <div style="margin: 0px; padding: 0px;" class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
									<img style="width: 100%; height: 100%;" src="<?php echo base_url() . '/image_shop/produk/produkBelakang' . $p->id_produk . '.jpg'; ?>" />
                                </div>
                            </div>
                            <div class="card-body">
							<center>
                                <a href="<?php echo base_url() . 'produk/detail/' . $p->id_produk; ?>" class="h2 text-decoration-none" target="_blank"><?php echo $p->nama_produk; ?></a>
								<br>
									<?php echo $p->ukuran_produk; ?>
                                <br>
                                <br>
                                <b><?php echo $p->harga_produk; ?></b><br>
								<a href="<?php echo base_url() . 'produk/detail/' . $p->id_produk; ?>" class="btn btn-success btn-lg text-white" target="_blank"><i class="fa fa-cart-plus"></i> Buy</a>
								
							</center>
                            </div>
                        </div>
                    </div>
				<?php }}else{ ?>
					<div class="col-md-12">
						<div style="height: 200px;">
						Produk tidak ditemukan
						</div>
					</div>
					
				<?php } ?>
					
                </div>
				
				<!-- pagination -->
				<?php if($produk){ ?>
                <div div="row">
                    <ul class="pagination pagination-lg justify-content-end">
					
						<li class="page-item <?php if($halaman == 1){ echo 'disabled';}?>">
                            <a class="page-link rounded-0 mr-3 shadow-sm border-top-0 border-left-0 text-dark" href="<?php if($halaman == 1){ echo '#';}else{echo base_url() . 'produk/kategori/' . $kategori . '/' .($halaman - 1);}?>"><<</a>
                        </li>
                        <li class="page-item disabled">
                            <a class="page-link active rounded-0 mr-3 shadow-sm border-top-0 border-left-0" href="#"><?php echo $halaman; ?></a>
                        </li>
                        <li class="page-item <?php if($halaman + 1 > $max){echo 'disabled';}?>">
                            <a class="page-link rounded-0 mr-3 shadow-sm border-top-0 border-left-0 text-dark" href="<?php if($halaman + 1 > $max){echo '#';}else{echo base_url() . 'produk/kategori/' . $kategori . '/' . ($halaman + 1);}?>">>></a>
                        </li>
                    </ul>
                </div>
				<?php } ?>
				<!-- END:pagination -->
				
            </div>

        </div>
    </div>
    <!-- End Content -->
	