<?php 
	require_once 'config.php';
if(isset($_POST['cmt'])){
	
$name=$_POST['c_name'];
$email=$_POST['c_email'];
$comment=$_POST['comment'];


$result = mysqli_query($conn,"INSERT INTO `user_comment`(`user_cmt_name`, `User_cmt_email`, `user_cmt`) VALUES ('$name','$email','$comment')");

}
if($result){
			echo 'successfully';
		}else{
			echo 'unsuccessful';
		}

?> 



<?php

require_once 'config.php';
if(isset($_POST['Register'])){
	
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
if(!$name==""){
	if(!$email=="")
	{
	if(!$password=="")
	{
	if(strlen($password)>6)	
	{
		$query=mysqli_query($conn,"SELECT * FROM `user_registation` WHERE `user_email`='$email' ");
if(mysqli_num_rows($query)==0){
		$result=mysqli_query($conn,"INSERT INTO `user_registation`( `User_name`, `user_email`, `User_password`) VALUES ('$name','$email','$password')");
		if($result){
		
		}else{
			
			
		}
	}else{
		
	}
	}
else{
	
}	
	}
	else{
		
	}
}else{
	
}


	
}
}

?>


<?php include_once('heder.php'); ?>
<body  style="">

<div class="navbar navbar-inverse ">
  <div class="container-fluid  ">
    

	<div class="nav-pills ">
    <ul class="nav navbar-nav   ">
      <li class="nav-item "><a  class="nav-link"href="#">Home</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" data-toggle="popover" title="Popover Header" data-content="Some content inside the popover" href="#">booking now <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a class="nav-link" href=""><span  style="color:red;"class="glyphicon glyphicon-log-in">  </span></a></li>
          
        </ul>
      </li>
      <li><a href="#">About</a></li>
	  <li><a href="ours_room.php">Reservaton</a></li>
	  <li><a href="#">Menu</a></li>
	  
	 <li><a class="dropdown-toggle" data-toggle="dropdown" href="#">Contacts</a>
	  
	  
	  
	  <ul class="dropdown-menu ">
	  
          <div class="jumbotron ">
		
 
    <h1>Contacts us</h1>
    
	
	
	<div class="row">
	<div class="col-md-12" col-md-offset-3>

						<form action=" " method="POST" >
							<div class="input-group  ">
								
								<label class="name ">Your Name:</label>
								<input type="text" class="form-control   form-control-lg" name="c_name" placeholder="User Name"  required />
								
							</div>

							<br/>
							<div class="input-group ">
								
								<label class="Email">Your Email or Phone:</label>
								
								<input type="email" class="form-control  form-control-lg"  placeholder="Email or Phone " name="c_email" required />
							
							</div>
							
							<br/>
							<div class="input-group ">
								
								<label class="comment">Comment:</label>
								
								  <textarea type="text" class="form-control  form-control-lg" rows="5" name="comment" ></textarea>
                                
							</div>
							<br/>
							<br/>
							<div class="input-group ">
								
								
								<input type="submit" class=" btn btn-success form-control  form-control-lg "  name="cmt" value="submit" />
								
							</div>
							
						</form>
						</div>
					</div>
  </div>
        </ul>
	  
	  
	  
	  </li>
	  
	  
    </ul>
	</div>
    <ul class="nav navbar-nav  navbar-right">
	
	<li><a  class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a>
	  
	  <ul class="dropdown-menu ">
          <div class="jumbotron ">
  
    <h1>Login in</h1>
    
	
	<div class="card-body">
						<form action="" method="POST">
							<div class="input-group ">
								
								
								<label for="Email">Your Email:</label>
								<br/>
									
								
								<input type="email"  name="l_name" class="form-control py-4"  required placeholder="Email">
								
							</div>
							<br/>
							<div class="input-group mb-3">
								
								<label class="password">Your password:</label>
								<br/>
								<input type="password" class="form-control py-4" name="password"  placeholder="Password" required />
								
							</div>
							<br/>
							<input type="submit"  name="login" class="btn btn-success" value="login"/>
							</br>
							
						</form>
						
					</div>
  
        </ul>
	  </li>
	  
	  
	  <li><a class="dropdown-toggle" data-toggle="dropdown"   href=""><span class="glyphicon glyphicon-user"></span> Sign Up</a>
	  
	  <div class="dropdown-menu ">
	   <div class="jumbotron ">
  
   <h1 style="color:green;">Register Form </h1>
   <div class=" alert-success text-center"> </div>
	
	<div class="card-body">
						<form action="" method="POST">
							<div class="input-group  ">
												
								<label for="name">Your Full Name</label>
								<input type="text" class="form-control py-4" placeholder="Name" name="name" required />
								
							</div>
					
							<br/>
							<div class="input-group ">
								
								<label class="Email">Your Email :</label>
								<input type="email" class="form-control py-4" placeholder=" Your Email  " name="email" required />
								
							</div>
							
							<br/>
							
							<div class="input-group  ">
								
								<label class="name">New Password:</label>
								<input type="password"  name="password" class="form-control " placeholder="Password"  required />
								
							</div>
							<br/>
							
						<div class="input-group  ">
								
								
								<input type="submit" class="btn-success" value="Register Now"   name="Register"/>
							
								
								
							</div>
					
							<br/>
							
							
							
							
						</form>
						
					</div>
 
  </li>
	
	
	
	
	
      
	  
	  
	  
	  
      
    </ul>
  </div>
</div>
</div>
   <marquee behavior="scroll" direction="left"><b>Very nice and pleasant environment
The Restaurant is open 24 hours a day</b> </marquee>


<div class="container-fluid">

	<?php include_once('search_bar.php'); ?>
  <div class="jumbotron">
  <h1>Restaurant </h1>
  <p> Lorem ipsum dolor sit, amet consectetur adipisicing elit. A quos, voluptatum illum mollitia dolores libero placeat nesciunt quasi adipisci impedit!Lorem ipsum dolor sit, amet consectetur adipisicing elit. A quos, voluptatum illum mollitia dolores libero placeat nesciunt quasi adipisci impedit! Lorem ipsum dolor sit, amet consectetur adipisicing elit. A quos, voluptatum illum mollitia dolores libero placeat nesciunt quasi adipisci impedit!Lorem ipsum dolor sit. .</p>
</div>

</div>

