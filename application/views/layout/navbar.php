<nav class="navbar navbar-expand-lg navbar-dark fixed-top custom-navbar">
  <a class="navbar-brand" href="#">
    <img src="<?php echo base_url('assets/img/');?>rajakawat_orange_edit.png" width="180" alt="">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
		
      <li  class="nav-item <?php if ($this->uri->segment(2) === 'index'){ echo "active"; };?>">
				
        <a class="nav-link" href="<?php echo site_url('home/index');?>">HOME <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item  <?php if ($this->uri->segment(2) === 'service'){ echo "active"; };?>">
        <a class="nav-link" href="<?php echo site_url('home/service');?>">SERVICE</a>
      </li>
      <li class="nav-item <?php if ($this->uri->segment(2) === 'workflow'){ echo "active"; };?>">
        <a class="nav-link" href="#">WORKFLOW</a>
      </li>
      <li class="nav-item <?php if ($this->uri->segment(2) === 'contact'){ echo "active"; };?>">
        <a class="nav-link" href="#">CONTACT US</a>
      </li>
      <li class="nav-item <?php if ($this->uri->segment(2) === 'faq'){ echo "active"; };?>">
        <a class="nav-link" href="#">FAQ</a>
      </li>
	</ul>
	<span class="navbar-text">
		<a href="#"><i class="fab fa-facebook-f"></i></a>
		<a href="#"><i class="fab fa-twitter"></i></a>
		<a href="#"><i class="fab fa-instagram"></i></a>
	</span>
  </div>
</nav>
