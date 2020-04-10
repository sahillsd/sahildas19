<?php 
include 'includeHeader.php';
?>
<body>
<!-- nabvar -->
<?php include 'includeNavbar.php';?>
<!-- carousel -->
<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="sdproject/quote.jpg" alt="" width="1100" height="600">
    </div>
    <div class="carousel-item">
      <img src="sdproject/quote2.jpg" alt="" width="1100" height="600">
    </div>
    <div class="carousel-item">
      <img src="sdproject/quote3.jpg" alt="" width="1100" height="600">
    </div>
	    <div class="carousel-item">
      <img src="sdproject/qupte4.jpg" alt="" width="1100" height="600">
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<section class="my-5">
	<div class="py-5">
		<h2 class="text-center">About Us</h2>
	</div>
		</div>
			<h1 class="display-2" align="center">Quote Heaven</h2>
			<p style="padding: 70px;">Quote Heaven is a quotation site. 
			Where we educate and entertain audiences of all ages with family-friendly quotations from history's 
			most prominent figures through to today's newsmakers - famous celebrities, athletes, politicians, authors, and everything in between.
			We are passionate about quotes, and on a mission to share our knowledge with the world</p>
			</div>
	</div>
	</div>
</section>

<section class="my-5">
	<div class="py-5">
		<h2 class="text-center">We provide various Categories to explore</h2>
	</div>
	<div class="container-fluid">
<div class="card-deck">
  <div class="card">
    <img class="card-img-top" src="sdproject/loveeee.jpg" alt="Card image cap" height="400px">
    <div class="card-body">
      <h5 class="card-title">Love Quotes</h5>
      <p class="card-text">Here you find best singers and music Bands.</p>
      <a href="love.php" class="btn btn-success" target="_blank"style="background-color: #e7e7e7; color:black">Explore</a>
    </div>
    
  </div>
  <div class="card">
    <img class="card-img-top" src="sdproject/motiv.jpg" alt="Card image cap" height="400px">
    <div class="card-body">
      <h5 class="card-title">Motivational Quotes</h5>
      <p class="card-text">Keep Doing Keep Going.</p>
      <a href="Motivational.php" target="_blank" class="btn btn-success" style="background-color: #e7e7e7; color:black">Explore</a>
    </div>
    
  </div>
  <div class="card">
    <img class="card-img-top" src="sdproject/posit.jpg" alt="Card image cap" height="400px">
    <div class="card-body">
      <h5 class="card-title">Positive Quotes</h5>
      <p class="card-text">Here you find best writers.</p>
      <a href="positive.php" target="_blank" class="btn btn-success" style="background-color: #e7e7e7; color:black">Explore</a>
    </div>
  </div>
</div>
</div>
</section>


<section class="my-5" id="CONTACT">
	<div class="py-5">
		<h2 class="text-center">Your Feedback</h2>
	</div>
	<div class="w-50 m-auto">
		<form action="userInfo.php" method="post">
			<div class="form-group">
				<label for="validationTooltipUsername">Your name:</label>
				<input type="text" name="user" autocomplete="off" class="form-control" id="validationTooltipUsername" aria-describedby="validationTooltipUsernamePrepend" required>
				 <div class="invalid-tooltip">
          Please choose a unique and valid username.
        </div>
			</div>
			<div class="form-group">
				<label>Email:</label>
				<input type="text" name="email" autocomplete="off" class="form-control">
			</div>
			<div class="form-group">
				<label>Phone Number:</label>
				<input type="text" name="mobile" autocomplete="off" class="form-control">
			</div>
			<div class="form-group">
				<label>Comment:</label>
				<textarea class="form-control" name="comment"></textarea>
			</div>
			<button type="submit" class="btn btn-success">Submit</button>
			
		</form>
	</div>
</section> 

<?php include 'includeFooter.php'; ?>
</body>
</html>