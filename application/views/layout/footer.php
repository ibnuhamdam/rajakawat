
<footer>
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				Copyright <b> 2018 Raja Kawat</b> <br>
				Designed by <b> StudiBrand</b>.inc
			</div>
			<div class="col-md-6 ft-2">
				<b> 0271 - 666666 <br>
				info@rajakawat.com </b>
			</div>
		</div>
	</div>
</footer>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jarallax/1.7.3/jarallax.min.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="<?php echo base_url('assets/js/');?>navbar.js"></script>
<script src="<?php echo base_url('assets/js/');?>all.js"></script>
<script src="<?php echo base_url('assets/js/');?>login.js"></script>
<script src="<?php echo base_url('assets/js/');?>bootstrap.min.js"></script>
<script src="<?php echo base_url('assets/js/');?>jquery-3.3.1.min.js"></script>
<script src="<?php echo base_url('assets/js/');?>jquery.easing.1.3.js"></script>
<?php 
if ($this->uri->segment(2) === 'index' || $this->uri->segment(1) == NULL){
	 echo "<script src=".base_url('assets/js/')."home.js></script>";
}?>
<?php 
if ($this->uri->segment(2) === 'service'){
	 echo "<script src=".base_url('assets/js/')."service.js></script>";
}?>
