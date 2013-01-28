<?php $this->inc('elements/header.php'); ?>

 <div class="container">
		<div class="row">
		    <div class="span4">
		        <div class="hero-unit">
					<center>
				  <?php
					$a = new Area('Colonne Gauche');
					$a->display($c); 
				  ?>
				  </center>
				</div>
		    </div>
			
			<div class="span4">
		        <div class="hero-unit">
				<center>
				  <?php
					$a = new Area('Colonne Centre');
					$a->display($c); 
				  ?>
				  </center>
				</div>
		    </div>
			
		    <div class="span4">
		        <div class="hero-unit">
					<center>
				  <?php
					$a = new Area('Colonne Droite');
					$a->display($c); 
				  ?>
				  </center>
				</div>
		    </div>
		</div>
		
		<div class="row">
		    <div class="span12">
		        <div class="hero-unit">
				<center>
				  <?php
					$a = new Area('Bas');
					$a->display($c); 
				  ?>
				  </center>
				</div>
		    </div>
		</div>
    </div>

<?php $this->inc('elements/footer.php'); ?>