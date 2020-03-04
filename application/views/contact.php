<!doctype html>
<html lang="en">
<?php $this->load->view('layout/header');?>
  <body>
  	<?php $this->load->view('layout/navbar');?>
    
		<!-- Section awal -->
		<section class="contact-satu" id="satu">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-12 text-center">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63282.31370764141!2d110.78379238055614!3d-7.55920760435486!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a16627ad11ab1%3A0xe7fe4e0454bc3095!2sSurakarta%2C%20Kota%20Surakarta%2C%20Jawa%20Tengah!5e0!3m2!1sid!2sid!4v1583330437938!5m2!1sid!2sid" width="1000" height="400" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
					</div>

					<div class="col-md-12 col-12 profile">
						<div class="row">
							<div class="col-md-5 col-12">
								<h3>LOREM <span style="color:orangered;"> IPSUM <span></h3>
								<hr style="border: 1.5px solid orangered;width: 40px;margin: 0px;">

								<div class="row cp">
									<div class="col-md-2 item">
										<b> Address:</b>
									</div>
									<div class="col-md-10 item">
										Jl. Lorem Ipsum RT 02/X1 Dolor. SIt Amet, Surakarta
									</div>

									<div class="col-md-2 item">
										<b> Email:</b>
									</div>
									<div class="col-md-10 item">
										info@rajakawat.com
									</div>

									<div class="col-md-2 item">
										<b> Phone:</b>
									</div>
									<div class="col-md-10 item">
										0271-66666
									</div>
								</div>
							</div>

							<div class="col-md-7 col-12 comment">
								<h4>Leave a Comment :</h4>
								<form>
									<div class="row">
										<div class="col">
											<input type="text" class="form-control" placeholder="Your Name">
										</div>
										<div class="col">
											<input type="email" class="form-control" placeholder="Your Email">
										</div>
									</div>
									<div class="row">
										<div class="col-md-12 area">
											<textarea name="comment" id="comment" cols="30" rows="4" placeholder="Your Comment" class="form-control"></textarea>
										</div>
									</div>
								</form>
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
