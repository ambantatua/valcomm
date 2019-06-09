<!--
	* File Name    : nav.php
	* Author       : Amber Bantatua
	* Date Created : 07 April 2017
	* Version      : 1.0
	* Last Modified:
	* Description  : Main navigation file for Valcomm Electrical website.
-->
		<div class="mediaWrapper">
			<nav class="navWords">
				<ul>
					<li class="menuButton
						<?php 
				if ($menuCSS == 1)
				echo " selected";
				?>">
						<a href="index.php" title="Valcomm Electrical Home">Home</a>
					</li>
					<li class="menuButton
						<?php 
				if ($menuCSS == 2)
				echo " selected";
				?>">
						<a href="services.php" title="Valcomm Electrical Services">Services</a>
					</li>
					<li class="menuButton
						<?php 
				if ($menuCSS == 3)
				echo " selected";
				?>">
						<a href="projects.php" title="Valcomm Electrical Projects">Projects</a>
					</li>
					<li class="menuButton
						<?php 
				if ($menuCSS == 4)
				echo " selected";
				?>">
						<a href="contact.php" title="Valcomm Electrical Contact">Contact</a>
					</li>
				</ul>
			</nav>
			<nav class="navMobile">
				<ul>
					<li id="homeLinkMob" class="menuButtonMobile
						<?php 
				if ($menuCSS == 1)
				echo " homeLinkMobActive";
				?>">
						<a href="index.php" title="Valcomm Electrical Home"></a>
					</li>
					<li id="servicesLinkMob" class="menuButtonMobile
						<?php 
				if ($menuCSS == 2)
				echo " servicesLinkMobActive";
				?>">
						<a href="services.php" title="Valcomm Electrical Services"></a>
					</li>
					<li id="projectsLinkMob" class="menuButtonMobile
						<?php 
				if ($menuCSS == 3)
				echo " projectsLinkMobActive";
				?>">
						<a href="projects.php" title="Valcomm Electrical Projects"></a>
					</li>
					<li id="contactLinkMob" class="menuButtonMobile
						<?php 
				if ($menuCSS == 4)
				echo " contactLinkMobActive";
				?>">
						<a href="contact.php" title="Valcomm Electrical Contact"></a>
					</li>
				</ul>
			</nav>
