<!doctype html>
<html lang="en">
<?php $this->load->view('layout/header');?>
  <body>
  	<?php $this->load->view('layout/navbar');?>
    
		<!-- Section awal -->
		<section class="service-awal" id="satu">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-12 text-white desc-awal">
						<h3>LOREM IPSUM</h3>
						<hr class="hr-desc-awal">
						<br>
						<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Libero suscipit corrupti hic, et reiciendis deserunt optio quod fugiat harum. Sit et minus ullam minima id repellat officia perferendis explicabo quibusdam.</p>
					</div>
				</div>
			</div>
		</section>

		<!-- Section Service 4 -->
		<section class="service-dua" id="dua">
			<div class="container">
				<h3>LOREM <span style="color:orangered;"> IPSUM <span></h3>
				<hr style="border: 1.5px solid orangered;width: 40px;margin: 0px;">
				<div class="row">
					<div class="col-md-4">
						<div class="row service d-flex flex-column">
							<div class="col-md-3 items text-white text-center" onmouseover="deschover(this,1)" onmouseout="descnonhover(this,1)">
								<h2>LOREM IPSUM</h2>
								<p class="vis" id="vis1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum harum cumque eius explicabo inventore! Eius asperiores cum ratione.
									<br>
								<button class="btn btn-sm btn-primary">Show More</button>	
								</p>
							</div>
							<div class="col-md-3 items text-white text-center " onmouseover="deschover(this,2)" onmouseout="descnonhover(this,2)"> 
								<h2>LOREM IPSUM</h2>
								<p class="vis" id="vis2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum harum cumque eius explicabo inventore! Eius asperiores cum ratione.
									<br>
								<button class="btn btn-sm btn-primary">Show More</button>	
								</p>
							</div>
							<div class="col-md-3 items text-white text-center" onmouseover="deschover(this,3)" onmouseout="descnonhover(this,3)">
								<h2>LOREM IPSUM</h2>
								<p class="vis" id="vis3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum harum cumque eius explicabo inventore! Eius asperiores cum ratione.
									<br>
								<button class="btn btn-sm btn-primary">Show More</button>	
								</p>
							</div>
							<div class="col-md-3 items text-white text-center" onmouseover="deschover(this,4)" onmouseout="descnonhover(this,4)">
								<h2>LOREM IPSUM</h2>
								<p class="vis" id="vis4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum harum cumque eius explicabo inventore! Eius asperiores cum ratione.
									<br>
								<button class="btn btn-sm btn-primary">Show More</button>	
								</p>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="row service-2 d-flex flex-column">
							<div class="col-md-6 item text-white text-center" onmouseover="deschover(this,5)" onmouseout="descnonhover(this,5)">
								<h2>LOREM IPSUM</h2>
								<p class="vis" id="vis5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum harum cumque eius explicabo inventore! Eius asperiores cum ratione.
									<br>
								<button class="btn btn-sm btn-primary">Show More</button>	
								</p>
							</div>
							<div class="col-md-3 items text-white text-center" onmouseover="deschover(this,6)" onmouseout="descnonhover(this,6)">
								<h2>LOREM IPSUM</h2>
								<p class="vis" id="vis6">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum harum cumque eius explicabo inventore! Eius asperiores cum ratione.
									<br>
								<button class="btn btn-sm btn-primary">Show More</button>	
								</p>
							</div>
							<div class="col-md-3 items text-white text-center" onmouseover="deschover(this,7)" onmouseout="descnonhover(this,7)">
								<h2>LOREM IPSUM</h2>
								<p class="vis" id="vis7">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum harum cumque eius explicabo inventore! Eius asperiores cum ratione.
									<br>
								<button class="btn btn-sm btn-primary">Show More</button>	
								</p>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="row service-3 d-flex flex-column">
							<div class="col-md-3 items text-white text-center" onmouseover="deschover(this,8)" onmouseout="descnonhover(this,8)">
								<h2>LOREM IPSUM</h2>
								<p class="vis" id="vis8">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum harum cumque eius explicabo inventore! Eius asperiores cum ratione.
									<br>
								<button class="btn btn-sm btn-primary">Show More</button>	
								</p>
							</div>
							<div class="col-md-3 box text-black text-justify">
								<h2>LOREM IPSUM</h2>
								<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquid ad laborum distinctio excepturi quisquam aperiam, possimus minima delectus asperiores.</p>
								<button class="btn btn-sm">Show More</button>
							</div>
							<div class="col-md-6 item text-white text-center" onmouseover="deschover(this,9)" onmouseout="descnonhover(this,9)">
								<h2>LOREM IPSUM</h2>
								<p class="vis" id="vis9">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum harum cumque eius explicabo inventore! Eius asperiores cum ratione.
									<br>
								<button class="btn btn-sm btn-primary">Show More</button>	
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- <section>
			<div class="container">
				<div class="col-md-12">
					<div class="card">
						<div class="content">
							<div class="front">
							Front
							</div>
							<div class="back">
							Back!
							</div>
							<div class="front">
							Front
							</div>
							<div class="back">
							Back!
							</div>
						</div>
					</div>
				</div>
			</div>
		</section> -->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <?php $this->load->view('layout/footer');?>
  </body>
</html>
