<!--
Filename: contact.html
Author: Amber Bantatua
Date created: 07 April 2017
Last updated: 
Description: Valcomm Electrical contact page
-->
		<?php 
			$pageTitle = 'Contact Page';
			$menuCSS = 4;

			include 'includes/header.php';
		?>

		<?php
			include 'includes/nav.php';
		?>
		
		<div class="contactContentWrapper">
				<h1>contact</h1>
				
				<div class="contactText">
					<p>
						<strong>Phone Cameron on:</strong><br> 
						0419 892 521
					</p>
					<p>
						<strong>Email Cameron at:</strong><br>
						info@valcommelectrical.com
					</p>
					<p>
						<strong>Business address:</strong><br>
						72 Havelock Road,<br>
						Beechworth VIC 3747
					</p>
					<p>
						<strong>Postal address:</strong><br>
						PO Box 331,<br> 
						Beechworth VIC 3747
					</p>
				</div><!-- end .contactText -->

				<div class="contactImage">
					<img src="images/hiluxContact.jpg" alt="Valcomm Electrical Hilux">
				</div><!-- end .contactImage -->

				<div class="valcommText">
				<p>
					<em>Valcomm Electrical</em> was first established in September 2013.
				</p>
				<p>
					All work performed by <em>Valcomm Electrical</em> is fully guaranteed and insured.
				</p>
			</div><!-- end .valcommText -->
				
				
				<?php

					include 'includes/contactForm.php';


					if (!empty($error_msg)) {
						echo '<p class="error">ERROR: '. implode("<br />", $error_msg) . "</p>";
					}
					if ($result != NULL) {
						echo '<p class="success">'. $result . "</p>";
					}
				?>

				<div class="contactForm">

					<form action="<?php echo basename(__FILE__); ?>" method="post">
						<noscript>
							<p>
								<input type="hidden" name="nojs" id="nojs" />
							</p>
						</noscript>

						<p>
							Please fill in the details below and I'll get back to you soon.
						</p>
						<h3>
							Contact Form
						</h3>
						<p style="padding-bottom:20px; font-size:.8em;">
							<span class="error">
								<em>Fields marked with * are mandatory.</em>
							</span>
						</p>
						<p>
							<label style="float:left; width:100%;" for="name">Name: *</label> 
								<input type="text" name="name" id="name" class="fName" value="<?php get_data("name"); ?>" />
						
							<label style="float:left; width:100%; margin-top: 15px;" for="email">E-mail Address: *</label> 
								<input type="text" name="email" id="email" class="eAddress" value="<?php get_data("email"); ?>" />
						
							
							<label style="float:left; width:100%; margin-top: 15px;" for="phoneNumber">Mobile Number: * <br> <span style="font-size:0.8em;">(No spaces required)</span></label> 
								<input type="text" name="phoneNumber" id="phoneNumber" class="pNumber" value="<?php get_data("phoneNumber"); ?>" />
						
								
							<label style="float:left; width:100%; margin-top: 15px;" for="location">Location:</label>
								<input type="text" name="location" id="location" class="location" value="<?php get_data("location"); ?>" />
						
							
							<label style="float:left; width:100%; margin-top: 15px;" for="comments">Your Enquiry: *</label>
								<textarea name="comments" id="comments" rows="5" cols="20" class="yEnquiry"><?php get_data("comments"); ?></textarea><br />
						</p>
						<div class="submitButtonWrapper">
							<p>
								<input type="submit" name="submit" id="submit" value="Send" class="submitButton" <?php if (isset($disable) && $disable === true) echo ' disabled="disabled"'; ?> />
							</p>
						</div>
					</form>
				</div>	
				

			</div><!-- end .contactContentWrapper -->
		</div><!-- end .mediaWrapper -->
		<?php
			include 'includes/footer.html';
		?>