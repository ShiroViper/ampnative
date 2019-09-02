<?php require '../inc/header-no-navbar.php'; ?>
	<div class="container py-3">
		<p class="h2">Registration Form (Description)</p>
        <?php require 'merge-register-nav.php'; ?>

		<div class="row py-3 ">
			<div class="col-sm">
				<label for="editor1" class="text-primary ">Input Service Description</label>
				<textarea name="desc" class="" id="editor1" cols="30" rows="10"></textarea>
			</div>
		</div>

        <div class="row py-3 d-flex justify-content-end">       
	         <a href="portfolio.php" class="btn btn-outline-secondary ml-3">Previous</a>
	         <a href="register.php" class="btn btn-outline-primary ml-3">Next</a>
	         <?php require 'merge-register-button.php' ?>
	    </div>
	</div>

<?php require '../inc/footer.php'; ?>