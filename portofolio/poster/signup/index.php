<!DOCTYPE html>
<html>
<head>
<title>Register | Negeri Poster</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Flaty Register Form template Responsive, Login form web template,Flat Pricing tables,Flat Drop downs  Sign up Web Templates, Flat Web Templates, Login sign up Responsive web template, SmartPhone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" /> 
<!-- //Custom Theme files -->
<!-- js -->
<script src="js/jquery-2.2.3.min.js"></script>
<!-- //js -->  
<!-- web font -->
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'><!--web font-->
<!-- //web font -->
</head>
<body>
	<!-- main -->
	<div class="main-agileits">
		<div class="mainw3-agileinfo form"> 
			<div class="login-w3top">  
			</div>
			<div id="login">    
				<form action="register.php" method="post"> 
					<!-- <div class="top-row"> -->
						<div class="field-wrap">
							<label> Your Name<span class="req">*</span>  </label>
							<input type="text" required autocomplete="off" name="nama" />
						</div> 
<!-- 						<div class="field-wrap">
							<label> Last Name<span class="req">*</span>  </label>
							<input type="text"required autocomplete="off"/>
						</div> -->
						<div class="clear"> </div>
					<!-- </div>  -->
					<div class="field-wrap">
						<label> Enter Your Email<span class="req">*</span> </label>
						<input type="email" required autocomplete="off" name="email" />
					</div> 
					<div class="field-wrap">
						<label> Your Password<span class="req">*</span> </label>
						<input type="password" required autocomplete="off" name="password" />
					</div>
					<div class="field-wrap">
						<label> No Handphone<span class="req">*</span> </label>
						<input type="text" required autocomplete="off" name="no_hp" />
					</div>
					<div class="field-wrap">
						<label> Gender<span class="req">*</span> </label>
						<input type="text" required autocomplete="off" name="gender" />
											</div>
											
					<button type="submit" class="button button-block"/>Register</button> 
				</form> 
			</div>
         
		</div>	
	</div>	
	<!-- //main -->

	<script>
	$('.form').find('input, textarea').on('keyup blur focus', function (e) { 
	  var $this = $(this),
		  label = $this.prev('label');

		  if (e.type === 'keyup') {
				if ($this.val() === '') {
			  label.removeClass('active highlight');
			} else {
			  label.addClass('active highlight');
			}
		} else if (e.type === 'blur') {
			if( $this.val() === '' ) {
				label.removeClass('active highlight'); 
				} else {
				label.removeClass('highlight');   
				}   
		} else if (e.type === 'focus') {
		  
		  if( $this.val() === '' ) {
				label.removeClass('highlight'); 
				} 
		  else if( $this.val() !== '' ) {
				label.addClass('highlight');
				}
		}
 
	}); 
	</script>
</body>
</html>