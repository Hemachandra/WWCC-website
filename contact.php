
	<?php include ("includes/tophead.php");?>
	<div class="wraper">
	<header class="container">
		<div id="logo">
			<img src="images/WWCC-logo.png" alt="remote"/>
		</div>
		<div id="rightNav">
			<nav id="threebut">
				<ul>
					<li><a href="#">Donation</a> &#124</li>
					<li><a href="#">Volunteer</a> &#124</li>
					<li><a href="#">Sign up</a></li>
				</ul>
			</nav>
			<div id="search">
				<input id="insearch" type="text" placeholder="Search"/>
				<img src="images/search.png"/>
			</div>
		</div>
	</header>
<!-- menu Button -->
	<div class="container" >
		<div id="menubut">
			<img src="images/mbut.svg" alt="menu"/>
		</div>
	</div>
<!-- Nav Bar -->
<?php include ("includes/navbar.php");?>

	<!-- contact form -->
	<section class="container">
	  <section class="maincontent">
        <form action="thankyou.php" method="post">

          <div class="formgroup">
            <label>First Name</label>
            <input type="text" name="firstname" required/>
         </div>

          <div class="formgroup">
            <label>Last Name</label>
            <input type="text" name="lastname" required/>
          </div>

          <div class="formgroup">
            <label>Email Address</label>
            <input type="text" name="email" required/>
          </div>

          <div class="formgroup">
            <label>Address</label>
            <input type="text" name="address" required/>
          </div>

          <div class="formgroup">
            <label>City</label>
            <input type="text" name="city" required/>
          </div>

          <div class="formgroup">
            <label>Province</label>
            <input type="text" name="province" required/>
          </div>

          <div class="formgroup">
            <label>Country</label>
            <input type="text" name="country" required/>
          </div>

          <div class="formgroup">
            <label>Postal Code</label>
            <input type="text" name="postalcode" required/>
          </div>

          <div class="formgroup">
            <label>Phone Number</label>
            <input type="text" name="phone" />
          </div>

          <div class="formgroup">
            <label>Comments</label>
            <textarea name="comments"></textarea>
          </div>

          <div class="formgroup">
            <input type="submit" class="btn">
          </div>

        </form>
      </section>
  </section>
  <?php include ("includes/footer.php");?>

   