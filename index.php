<?php
#  Add your page title
$title = "My tyro-php Website";
#  Add your page description
$description = "A website developed from fair-use templates that have been modified for educational purposes.";

#  Display side menu
#  Change to 1 to show side menu
$showSide = 0;

include ('header.php');
?>

<div class="clear"></div>

<div id="slide-wrapper">
	<div id="slide">

		<div class="flexslider left">
			<ul class="slides">
				<li>
					<div class="flexslider_background" style="background: url('https://source.unsplash.com/BaCmEa2hy8g/1600x900') no-repeat center;">
					</div>
					<div class="meta">
						<h1>Easily edit PHP templates</h1>
						<h2>Create flexible webpages</h2>
						<div class="category">
							<p>Easy</p>
							<p>Flexible</p>
						</div>
					</div>
				</li>
				<li>
					<div class="flexslider_background" style="background: url('https://source.unsplash.com/RmZIUIF2S2Q/1600x900') no-repeat center;">
					</div>
					<div class="meta">
						<h1>Don't need a database?</h1>
						<h2>No MySQL database required!</h2>
						<div class="category">
							<p>Create new pages</p>
							<p>Commit by git</p>
						</div>
					</div>
				</li>
				<li>
					<div class="flexslider_background" style="background: url('https://source.unsplash.com/cFplR9ZGnAk/1600x900') no-repeat center;">
					</div>
					<div class="meta">
						<h1>Customize your theme</h1>
						<h2>Display using stylesheets</h2>
						<div class="category">
							<p>CSS</p>
                            <p>HTML</p>
						</div>
					</div>
				</li>
				<li>
					<div class="flexslider_background" style="background: url('https://source.unsplash.com/Ui8KQ0ahXBM/1600x900') no-repeat center;">
					</div>
					<div class="meta">
						<h1>Feature Rich</h1>
						<h2>A simple PHP website template</h2>
						<div class="category">
							<p>Learn</p>
                            <p>Apply</p>
						</div>
					</div>
				</li>
			</ul>
		</div>

	</div>
</div>


<?php
include ('footer.php');
?>