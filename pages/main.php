		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<?php 
					if(isset($_GET['page'])) {
						$tam = $_GET['page'];
					} elseif($tam = 'detail') {
						include ("detail/product.php");
					} else {
						$tam = '';
					}
					if($tam == '') {
						include("main/index.php");					
					}elseif($tam == 'hotdeals'){
						include("main/hotdeals.php");
					}elseif($tam == 'categories') {
						include("main/categories.php");
					}elseif($tam == 'laptops') {
						include("main/laptop.php");
					}elseif($tam == 'smartphones') {
						include("main/smartphone.php");
					}elseif($tam == 'cameras') {
						include("main/camera.php");
					}elseif($tam == 'accessories') {
						include("main/accessories.php");
					}
				
				?>
			</div>

			
		
		</div>
