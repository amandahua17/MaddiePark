<?php
	// phpinfo();
	include("include/include_all.php");
	head("Maddie Park");
		//content
		echo"
		<div class='fixed-bg index'>
			<div id='home' class='fixed-bg home'>";
			navbar(array("About the Creator", "Pictures", "YouTube", "Contact/Links"));
		echo"<br><br><br><br><br>
				<h1 style='font-size: 5em; '>Thumbpaint</h1>

			</div>
			<div id='About the Creator' class='fixed-bg home'>
				<h1>About the Creator</h1>
				<a href='/blog.php'>
					<img src='pictures/maddie1.jpg' style='float:left; clear: left;'>
				</a>
				<p style='float:right; clear:right; margin-right: 15%; text-align: left; width: 30%';>
					Maddie Park<br>
					This is everything about me! (Under Construction)
				</p>
				<p style='clear: both; text-align: left; margin-left: 15%; font-size: 1em;'>
					Click the image to view my blog and other art!
				</p>
			</div>
			<div id='Pictures' class='fixed-bg home'>
				<h1>Pictures</h1>
				<table style='width: 80%; margin: auto;'>
					<tr>
						<td><a href='https://www.arianagrande.com'><img src='pictures/maddie1.jpg'></a></td>
						<td><a href='https://us.louisvuitton.com/eng-us/homepage'><img src='pictures/maddie2.jpg'></a></td>
						<td><a href='https://www.amandahua.com'><img src='pictures/maddie3.jpg'></a></td>
					</tr>
				</table>
			</div>
			<div id='YouTube' class='fixed-bg home'>
				<h1>YouTube</h1>
				<iframe width='560' height='315' src='https://www.youtube.com/embed/-BdMS4THcos' frameborder='0' allow='autoplay; encrypted-media' allowfullscreen></iframe>
			</div>
			<div id='Contact/Links' class='fixed-bg home'>
				<h2>Contact and Links</h2><br>
				<div style='margin: auto;'>
					<a href='https://www.youtube.com/channel/UCcZpL1BrGWPD5LxgNaR5Cdg'>
						<img style='width: 5%; text-align: left;clear: none;' src='pictures/SocialIcons/YouTube.jpg'>
					</a>
					<a href='https://twitter.com/maddiejpark'>
						<img style='width: 5%; text-align: left;clear: none;' src='pictures/SocialIcons/Twitter Social Icons/Twitter Social Icons/Twitter_SocialIcon_Circle/Twitter_Social_Icon_Circle_Color.png'>
					</a>
					<a href='https://www.instagram.com/maddieparkk/?hl=en'>
						<img style='width: 5%; text-align: left;float: right; clear: right; margin-right: 15%;' src='pictures/SocialIcons/instagramsocialicon.jpg'>
					</a>
				</div>
				<a class='homebtn' href='#home'>back to top</a>
			</div>
		</div>
		";
	foot();
