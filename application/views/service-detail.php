<!doctype html>
<html lang="en">
<?php $this->load->view('layout/header');?>
  <body>
  	<?php $this->load->view('layout/navbar');?>
    
		<!-- Section awal -->
		<section data-jarallax data-speed="0.2"  class="service-awal jarallax" id="satu">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-12 text-white desc-awal">
						<h3>OUR SERVICES</h3>
						<hr class="hr-desc-awal">
						<br>
						<p>Berikut beberapa services yang kami kerjakan</p>
					</div>
				</div>
			</div>
		</section>

		<!-- Section Our Service -->
		<section class="service-detail">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-12 heading">
						<h3><?php echo $data_ke_view['nama'];?></h3>
						<hr style="border: 1.5px solid orangered;width: 40px;margin: 0px;">
					</div>
					
				</div>
				<div class="row detail-service">
					<?php 
					$i=0;
					$i++;
					if ($data_ke_view['body2'] != NULL) {
					?>
					<div class="col-md-3">
						<h5>Service 1</h5>	
					</div>
					<div class="col-md-9">
						<p>
						<?php echo $data_ke_view['body1']; ?>
						</p>
					</div>
					<div class="col-md-3">
						<h5>Service 2</h5>	
					</div>
					<div class="col-md-9">
						<p>
						<?php echo $data_ke_view['body2']; ?>
						</p>
					</div>
					<?php }else {
					?>
					<div class="col-md-3">
						<h5>Service 1</h5>	
					</div>
					<div class="col-md-9">
						<p>
						<?php echo $data_ke_view['body1']; ?>
						</p>
					</div>
					<?php
					}?>
				</div>
			</div>
		</section>

		<!-- Portofolio -->
		<section class="portofolio">
			<div class="container">
				<div class="row heading">
					<div class="col-md-12 ">
						<h3><span style="color:orangered;">PORTOFOLIO <span></h3>
							<hr style="border: 1.5px solid orangered;width: 40px;margin: 0px;">
					</div>
				</div>
				<div class="row porto">
					<div class="col-md-4">
						<div class="card" style="width: 100%;">
							<img src="<?php echo base_url('assets/img/building/')?>building3.jpg" class="card-img-top" alt="portofolio1">
							<div class="card-body">
							<h5 style="color:orangered;">Lorem</h5>
								<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="card" style="width: 100%;">
							<img src="<?php echo base_url('assets/img/building/')?>building3.jpg" class="card-img-top" alt="portofolio1">
							<div class="card-body">
								<h5 style="color:orangered;">Lorem</h5>
								<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-12">
						<div class="card" style="width: 100%;">
							<img src="<?php echo base_url('assets/img/building/')?>building3.jpg" class="card-img-top" alt="portofolio1">
							<div class="card-body">
								<h5 style="color:orangered;">Lorem</h5>
								<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-12">
						<div class="card" style="width: 100%;">
							<img src="<?php echo base_url('assets/img/building/')?>building3.jpg" class="card-img-top" alt="portofolio1">
							<div class="card-body">
								<h5 style="color:orangered;">Lorem</h5>
								<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-12">
						<div class="card" style="width: 100%;">
							<img src="<?php echo base_url('assets/img/building/')?>building3.jpg" class="card-img-top" alt="portofolio1">
							<div class="card-body">
								<h5 style="color:orangered;">Lorem</h5>
								<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-12">
						<div class="card" style="width: 100%;">
							<img src="<?php echo base_url('assets/img/building/')?>building3.jpg" class="card-img-top" alt="portofolio1">
							<div class="card-body">
								<h5 style="color:orangered;">Lorem</h5>
								<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <?php $this->load->view('layout/footer');?>
  </body>
</html>
