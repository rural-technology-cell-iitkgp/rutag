<!DOCTYPE html>
<!--[if IE 8]> <html class="ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->

<head>
	<meta charset="utf-8">
	<title>HarrisonHighSchool</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
	<link rel="stylesheet" media="all" href="css/style.css">
	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

	
		<?php include 'navbar.php' ?>

	
<div class="container">
  <h2>Application form</h2>
  <form class="form-horizontal" action="register.php" method="post"> 
    <div class="form-group">
      <label class="control-label col-sm-2" for="name">Name</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name" >
      </div>
    </div>
     <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email:</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="email"  name="email" placeholder="Enter email">
      </div>
    </div>
     <div class="form-group">
      <label class="control-label col-sm-2" for="org">Organisation</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="org" name="org" placeholder="Enter Your Organisation" >
      </div>
    </div>
     <div class="form-group">
      <label class="control-label col-sm-2" for="aorg">Address of Organisation</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="aorg" name="add" placeholder="Enter Address Of Your Organisation">
      </div>
    </div>
     <div class="form-group">
      <label class="control-label col-sm-2" for="phone">Phone</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="phone" placeholder="Enter Phone No." name="phone">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Nature of activity involved</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="pwd" placeholder="Nature of activity involved" name="nature">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="desc">Brief description of the problem</label>
      <div class="col-sm-10">
        <textarea type="text" class="form-control" rows="10" cols="80" id="desc" placeholder="Brief description of the problem" name="desc"></textarea>
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default" name="submit">Submit</button>
      </div>
    </div>
  </form>
</div>
<div class="container">
<hr>
	<p style="text-align:center"><b>Request for Technology</b><br><br>

You can seek technology solutions from the Group either through direct contact or by requesting through an e-mail. For e-mail queries you may use the form given below. For direct contact you may use the address given below:
<br><br>
Prof P. B. S. Bhadoria,<br>
Agricultural & Food Engineering Department,<br>

Indian Institute of Technology Kharagpur,<br>

KHARAGPUR – 721302,<br>
Email : <a>pbsb@agfe.iitkgp.ernet.in</a>


</p>
</div>
		<?php include 'footer.php' ?>

	<!-- / footer -->

	

	<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script>window.jQuery || document.write("<script src='js/jquery-1.11.1.min.js'>\x3C/script>")</script>
	<script src="js/plugins.js"></script>
	<script src="js/main.js"></script>
</body>
</html>
