<!-- footer -->
	<footer class="container">
		<div class="footitem">
			<div class="eachit">
				<div id="head1">
					<h4>Videos</h4>
					<img src="images/youtube-iconforvideo.png" />
				</div>
				<div id="head2">
					<video  controls>
						  <source src="movie.mp4" type="video/mp4">
						  <source src="movie.ogg" type="video/ogg">	  
					</video>
				</div>
			</div>		
		</div>
		<div class="footitem">
			<div class="eachit">
				<div id="conInfo">	
					<h4>WWCC Main Office</h4>
					<p>533A Gladstone Avenue</p>
					<p>Toronto, Ontario M6H3J1</p>
					<p>Phone # 416-532-2824</p>
					<p>Fax # 416-532-1065 </p>
					<p><span>Email: admin@workingwomencc.org</span></p>
				</div>
				<div id="sitemap">
					<ul>
						<li>Contact us</li>
						<li>Careers</li>
						<li>Helpful Resources</li>
						<li>Privacy/Terms</li>

					</ul>
				</div>
			</div>
		</div>
		<div class="footitem">
			<div class="eachit">
				<div id="social" class="social">
					<h4>Share WWCC on</h4>
					<ul>
						<li><a href="#"><img src="images/facebook.png" ></a></li>
						<li><a href="#"><img src="images/twitter.png" /></a></li>
						<li><a href="#"><img src="images/youtube.png" /></a></li>
						<li><a href="#"><img src="images/linkin.png" /></a></li>
					</ul>
				</div>
					
				<div id="signup" class="social">
					<h5>Sign up for our News letter</h5>
					<input type="text" placeholder="Email address">
					<input type="text" placeholder="Name">
					<input type="submit">
				</div>
			</div>
		</div>
		<div  class="footitem">
			<div class="eachit" id="united">
				<img src="images/united-way.png" />
			</div>
		</div>
		<p>&copy copyright to Working Women Community Center</p>
	</footer>
</div> <!-- .wraper -->
<!-- java Script -->	
<script>
	$(document).ready(function(){
		$('.bxslider').bxSlider({

			mode:'horizontal',
			// mode:'vertical',
			captions: true,
			auto:true,
			autoControls:true,
			adaptiveHeight:true,
			useCSS:true,
			responsive:true,
			
			
		});

		$('nav li ul').hide().removeClass('fallback');
			$('nav li').hover(
			    function () {
			        $('ul', this).stop().slideDown(200);
			    },
			    function () {
			        $('ul', this).stop().slideUp(200);
			    }
			);

		$("#menubut").click(function(){

        $("nav").slideToggle(1000);

      });

	  
	});

	
</script>


<!-- end java script -->
</body>
</html>

 